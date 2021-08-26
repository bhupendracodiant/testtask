<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('home');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/userlist', 'HomeController@userlist')->name('userlist');
Route::get('/userdetails', 'HomeController@userdetails')->name('userdetails');
Route::get('/productlist', 'HomeController@productlist')->name('productlist');
Route::get('/addproduct', 'HomeController@addproduct')->name('addproduct');
Route::get('/getUserListdata', 'HomeController@getUserListdata')->name('getUserListdata');
Route::get('/getProductListdata', 'HomeController@getProductListdata')->name('getProductListdata');
Route::post('/action_add_product', 'HomeController@action_add_product')->name('action_add_product');
Route::get('/deleteproduct', 'HomeController@deleteproduct')->name('deleteproduct');
Route::get('/productstatus', 'HomeController@productstatus')->name('productstatus');
Route::get('/productupdate', 'HomeController@productupdate')->name('productupdate');
Route::post('/action_update_product', 'HomeController@action_update_product')->name('action_update_product');
Route::get('/productdetails', 'HomeController@productdetails')->name('productdetails');
Route::get('/userstatus', 'HomeController@userstatus')->name('userstatus');
