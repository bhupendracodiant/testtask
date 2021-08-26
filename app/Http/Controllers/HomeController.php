<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\Auth;

use Datatables;
use App\User;
use App\Product;
use Session;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        // $id = Auth::id();
        // $usertype= Auth::user()->usertype;
        if (Auth::user()->usertype == 1) {
            return redirect('productlist');
        } else {
            return view('dashboard');
        }
    }
    /*
        @Author: Bhupendra
        @Date  : -
        #Description: Customers list view load.
    */
    public function userlist()
    {
        return view('userlist');
    }

    //action userlist data
    public  function getUserListdata(Request $request)
    {
        ## Read value
        $draw = $request->get('draw');
        $start = $request->get("start");
        $rowperpage = $request->get("length"); // Rows display per page

        $columnIndex_arr = $request->get('order');
        $columnName_arr = $request->get('columns');
        $order_arr = $request->get('order');
        $search_arr = $request->get('search');

        $columnIndex = $columnIndex_arr[0]['column']; // Column index
        $columnName = $columnName_arr[$columnIndex]['data']; // Column name
        $columnSortOrder = $order_arr[0]['dir']; // asc or desc
        $searchValue = $search_arr['value']; // Search value

        // Total records
        $totalRecords = User::select('count(*) as allcount')->count();
        $totalRecordswithFilter = User::select('count(*) as allcount')->where('name', 'like', '%' . $searchValue . '%')->count();

        // Fetch records
        $records = User::orderBy($columnName, $columnSortOrder)
            ->where('users.name', 'like', '%' . $searchValue . '%')
            // ->where('delete_status', '=', 0)
            ->select('users.*')
            ->skip($start)
            ->take($rowperpage)
            ->get();

        $data_arr = array();
        $i = 1;
        foreach ($records as $record) {

            if ($record->status == 1) {
                $status = '<a href="userstatus?status=0&id=' . Crypt::encrypt($record->id) . '"><span class="label label-success">Active</span></a>';
            } else {
                $status = '<a href="userstatus?status=1&id=' . Crypt::encrypt($record->id) . '"><span class="label label-danger">Block</span></a>';
            }
            $deletealert = "return confirm('Are you sure you want to delete this user ?')";
            $baseurl = url('upload');
            $data_arr[] = array(
                "id" => $i,
                "user" => '<img src="' . $baseurl . "/" . $record->profile_image . '" width="80"height="80">',
                "name" => $record->name,
                "phone" => $record->phone,
                "created_at" => date('m-d-Y', strtotime($record->created_at)),
                "status" => $status,
                "action" => '<a href="userdetails?id=' . Crypt::encrypt($record->id) . '"><i class="material-icons">visibility</i></a>'
            );
            $i++;
        }

        $response = array(
            "draw" => intval($draw),
            "iTotalRecords" => $totalRecords,
            "iTotalDisplayRecords" => $totalRecordswithFilter,
            "aaData" => $data_arr
        );

        echo json_encode($response);
        exit;
    }
    /*
        @Author: Bhupendra
        @Date  : -
        #Description: Customers details page load.
    */

    public function userdetails(Request $request)
    {
        $id = Crypt::decrypt($_GET['id']);
        $data['user'] = User::where('id', $id)->first();
        return view('userdetails', $data);
    }

    /*
        @Author: Bhupendra
        @Date  : -
        #Description: addproduct page load.
    */

    public function addproduct()
    {

        return view('addproduct');
    }
    public function action_add_product(Request $request)
    {
        try {


            $input['name'] = $request->pname;
            $input['sku'] = $request->psku;
            $input['price'] = $request->pprice;
            $input['descriptions'] = $request->descriptions;
            $input['status'] = 1;
            $input['delete_status'] = 0;
            $input['created_at'] = date("Y-m-d H:i:s");
            $input['updated_at'] = date("Y-m-d H:i:s");
            $images = $request->file('files');
            if ($request->hasFile('files')) :
                foreach ($images as $item) :
                    $var = date_create();
                    $time = date_format($var, 'YmdHis');
                    $imageName = $time . '-' . $item->getClientOriginalName();
                    $item->move(public_path('upload'), $imageName);
                    $arr[] = $imageName;
                endforeach;
                $input['images'] = implode(",", $arr);
            else :
                $input['images'] = '';
            endif;
            $insert = Product::insert($input);

            if ($insert)
                Session::flash('success_message', 'Product add successfully');
            else
                Session::flash('error_message', 'something wrong!');
        } catch (\RuntimeException $e) {
            Session::flash('error_message', 'something wrong!');
        }

        return redirect()->route('productlist');
    }


    /*
        @Author: Bhupendra
        @Date  : -
        #Description: productlist page load.
    */

    public function productlist()
    {

        return view('productlist');
    }


    //action get product list data
    public  function getProductListdata(Request $request)
    {
        ## Read value
        $draw = $request->get('draw');
        $start = $request->get("start");
        $rowperpage = $request->get("length"); // Rows display per page

        $columnIndex_arr = $request->get('order');
        $columnName_arr = $request->get('columns');
        $order_arr = $request->get('order');
        $search_arr = $request->get('search');

        $columnIndex = $columnIndex_arr[0]['column']; // Column index
        $columnName = $columnName_arr[$columnIndex]['data']; // Column name
        $columnSortOrder = $order_arr[0]['dir']; // asc or desc
        $searchValue = $search_arr['value']; // Search value

        // Total records
        $totalRecords = Product::select('count(*) as allcount')->where('delete_status', '=', 0)->count();
        $totalRecordswithFilter = Product::select('count(*) as allcount')->where('delete_status', '=', 0)->where('name', 'like', '%' . $searchValue . '%')->count();

        // Fetch records
        $records = Product::orderBy($columnName, $columnSortOrder)
            ->where('products.name', 'like', '%' . $searchValue . '%')
            ->where('delete_status', '=', 0)
            ->select('products.*')
            ->skip($start)
            ->take($rowperpage)
            ->get();

        $data_arr = array();
        $i = 1;
        foreach ($records as $record) {
            $deletealert = "return confirm('Are you sure you want to delete this product ?')";
            if (Auth::user()->usertype == 1) {
                $status = 'Active';
                $action = '<a href="productdetails?id=' . Crypt::encrypt($record->id) . '"><i class="material-icons">visibility</i></a>';
            } else {
                if ($record->status == 1) {
                    $status = '<a href="productstatus?status=0&id=' . Crypt::encrypt($record->id) . '"><span class="label label-success">Active</span></a>';
                } else {
                    $status = '<a href="productstatus?status=1&id=' . Crypt::encrypt($record->id) . '"><span class="label label-danger">Block</span></a>';
                }
                $action = '<a href="deleteproduct?id=' . Crypt::encrypt($record->id) . '" onclick="' . $deletealert . ';"><i class="material-icons">delete</i></a><a href="productupdate?id=' . Crypt::encrypt($record->id) . '"><i class="material-icons">edit</i></a> <a href="productdetails?id=' . Crypt::encrypt($record->id) . '"><i class="material-icons">visibility</i></a>';
            }

            $imagedata = explode(",", $record->images);
            $baseurl = url('upload');
            $data_arr[] = array(
                "id" => $i,
                "image" => '<img src="' . $baseurl . "/" .  $imagedata[0] . '" width="80"height="80">',
                "name" => $record->name,
                "price" => $record->price,
                "sku" => $record->sku,
                "status" => $status,
                "created_at" => date('m-d-Y', strtotime($record->created_at)),
                "action" =>$action

            );
            $i++;
        }

        $response = array(
            "draw" => intval($draw),
            "iTotalRecords" => $totalRecords,
            "iTotalDisplayRecords" => $totalRecordswithFilter,
            "aaData" => $data_arr
        );

        echo json_encode($response);
        exit;
    }

    /*
        @Author: Bhupendra
        @Date  : -
        #Description: delete product by admin.
    */
    public  function deleteproduct(Request $request)
    {
        try {
            $id = Crypt::decrypt($_GET['id']);
            $input['delete_status'] = 1;

            $update = Product::where('id', $id)->update($input);

            if ($update)
                Session::flash('success_message', 'Product Delete successfully');
            else
                Session::flash('error_message', 'something wrong!');
        } catch (\RuntimeException $e) {
            Session::flash('error_message', 'something wrong!');
        }
        return redirect()->route('productlist');
    }

    /*
        @Author: Bhupendra
        @Date  : -
        #Description: change product status by admin.
    */
    public  function productstatus(Request $request)
    {
        try {
            $id = Crypt::decrypt($_GET['id']);
            $input['status'] = $_GET['status'];

            $update = Product::where('id', $id)->update($input);

            if ($update)
                Session::flash('success_message', 'Your status is updated successfully');
            else
                Session::flash('error_message', 'stutus updated successfully');
        } catch (\RuntimeException $e) {
            Session::flash('error_message', 'Somethink want wrong');
        }
        return redirect()->route('productlist');
    }

    /*
        @Author: Bhupendra
        @Date  : -
        #Description:Product update view load .
    */
    public  function productupdate(Request $request)
    {
        $id = Crypt::decrypt($_GET['id']);
        $data['products'] = Product::where('id', $id)->first();
        return view('productupdate', $data);
    }

    /*
        @Author: Bhupendra
        @Date  : -
        #Description:product update action function .
    */
    public  function action_update_product(Request $request)
    {

        try {

            $id = $request->pid;
            $input['name'] = $request->pname;
            $input['sku'] = $request->psku;
            $input['price'] = $request->pprice;
            $input['descriptions'] = $request->descriptions;
            $input['updated_at'] = date("Y-m-d H:i:s");

            $update = Product::where('id', $id)->update($input);

            if ($update)
                Session::flash('success_message', 'Product update successfully');
            else
                Session::flash('error_message', 'something wrong!');
        } catch (\RuntimeException $e) {
            Session::flash('error_message', 'something wrong!');
        }

        return redirect()->route('productlist');
    }

    /*
        @Author: Bhupendra
        @Date  : -
        #Description: product details page load.
    */

    public function productdetails(Request $request)
    {
        $id = Crypt::decrypt($_GET['id']);
        $data['products'] = Product::where('id', $id)->first();
        return view('productdetails', $data);
    }

    /*
        @Author: Bhupendra
        @Date  : -
        #Description: change Customer status by admin.
    */
    public  function userstatus(Request $request)
    {
        try {
            $id = Crypt::decrypt($_GET['id']);
            $input['status'] = $_GET['status'];

            $update = User::where('id', $id)->update($input);

            if ($update)
                Session::flash('success_message', 'Customer status updated successfully');
            else
                Session::flash('error_message', 'Somethink want wrong');
        } catch (\RuntimeException $e) {
            Session::flash('error_message', 'Somethink want wrong');
        }
        return redirect()->route('userlist');
    }
}
