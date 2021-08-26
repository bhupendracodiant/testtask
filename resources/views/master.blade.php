<!DOCTYPE html>
<html lang="en">


<head>
	<title>test admin</title>
	<!-- META TAGS -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- FAV ICON(BROWSER TAB ICON) -->
	<link rel="shortcut icon" href="{{url ('admin/images/fav.ico')}}" type="image/x-icon">
	<!-- GOOGLE FONT -->
	<link href="https://fonts.googleapis.com/css?family=Poppins%7CQuicksand:500,700" rel="stylesheet">
	<!-- FONTAWESOME ICONS -->
	<link rel="stylesheet" href="{{url ('admin/css/font-awesome.min.css')}}">
	<!-- ALL CSS FILES -->
	<link href="{{url ('admin/css/materialize.css')}}" rel="stylesheet">
	<link href="{{url ('admin/css/style.css')}}" rel="stylesheet">
	<link href="{{url ('admin/css/bootstrap.css')}}" rel="stylesheet" type="text/css" />
	<!-- RESPONSIVE.CSS ONLY FOR MOBILE AND TABLET VIEWS -->
	<link href="{{url ('admin/css/responsive.css')}}" rel="stylesheet">
	<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
	<!-- <link  href="https://cdn.datatables.net/1.10.21/css/jquery.dataTables.min.css" rel="stylesheet">
<script src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script> -->

	<style>
		.logo {
			margin-left: 10px;
			font-size: 24px;
		}
	</style>
</head>

<body>
	<div id="preloader">
		<div id="status">&nbsp;</div>
	</div>
	<!--== MAIN CONTRAINER ==-->
	<div class="container-fluid sb1">
		<div class="row">
			<!--== LOGO ==-->
			<div class="col-md-2 col-sm-3 col-xs-6 sb1-1"> <a href="#" class="btn-close-menu"><i class="fa fa-times" aria-hidden="true"></i></a> <a href="#" class="atab-menu"><i class="fa fa-bars tab-menu" aria-hidden="true"></i></a>
				<br>
				<a href="home" class="logo">test </a>
			</div>
			<!--== SEARCH ==-->
			<div class="col-md-6 col-sm-6 mob-hide">
				<form class="app-search">
					<input type="text" placeholder="Search..." class="form-control"> <a href="#"><i class="fa fa-search"></i></a>
				</form>
			</div>
			<!--== NOTIFICATION ==-->
			<div class="col-md-2 tab-hide">
			</div>

			<!--== MY ACCCOUNT ==-->
			<div class="col-md-2 col-sm-3 col-xs-6">
				<!-- Dropdown Trigger -->
				<a class='waves-effect dropdown-button top-user-pro' href='#' data-activates='top-menu'><img src="{{url ('admin/images/users/6.png')}}" alt="" />My Account <i class="fa fa-angle-down" aria-hidden="true"></i> </a>
				<!-- Dropdown Structure -->
				<ul id='top-menu' class='dropdown-content top-menu-sty'>

					<li><a href="#"><i class="fa fa-bar-chart"></i>Update profile</a> </li>
					<li><a href="#" class="waves-effect"><i class="fa fa-undo" aria-hidden="true"></i>Change password</a> </li>
					<li><a href="logout" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();" class="ho-dr-con-last waves-effect"><i class="fa fa-sign-in" aria-hidden="true"></i> Logout</a> </li>
					<form id="logout-form" action="logout" method="POST" class="d-none">
						@csrf
					</form>
				</ul>
			</div>
		</div>
	</div>
	<!--== BODY CONTNAINER ==-->
	<div class="container-fluid sb2">
		<div class="row">
			<div class="sb2-1">
				<!--== USER INFO ==-->
				<div class="sb2-12">
					<ul>
						<li><img src="{{url ('admin/images/users/2.png')}}" alt=""> </li>
						<li>
							<h5>John Smith <span> Santa Ana, CA</span></h5>
						</li>
						<li></li>
					</ul>
				</div>
				<!--== LEFT MENU ==-->
				<div class="sb2-13">
					<ul class="collapsible" data-collapsible="accordion">
						<li><a href="home" class="menu-active"> Dashboard</a> </li>
						<li><a href="javascript:void(0)" class="collapsible-header"><i class="fa fa-list-ul" aria-hidden="true"></i> Product</a>
							<div class="collapsible-body left-sub-menu">
								<ul>
									<li><a href="productlist">All Product</a> </li>
									@if(Auth::user()->usertype ==2) 
									<li><a href="addproduct">Add Product</a> </li>
									@endif

								</ul>
							</div>
						</li>
						@if(Auth::user()->usertype ==2) 
						<li><a href="javascript:void(0)" class="collapsible-header"><i class="fa fa-user" aria-hidden="true"></i> Customers</a>
							<div class="collapsible-body left-sub-menu">
								<ul>
									<li><a href="userlist">All Customers

										</a> </li>
									<!-- <li><a href="addUser">Add New user</a> </li> -->
								</ul>
							</div>
						</li>
						@endif
					</ul>
				</div>
			</div>
			<!--== BODY INNER CONTAINER ==-->

			<div class="page">
				@yield('content')
			</div>



			<!--SCRIPT FILES-->
			<script src="{{url ('admin/js/jquery.min.js')}}"></script>
			<script src="{{url ('admin/js/bootstrap.js')}}" type="text/javascript"></script>
			<script src="{{url ('admin/js/materialize.min.js')}}" type="text/javascript"></script>
			<script src="{{url ('admin/js/custom.js')}}"></script>
</body>

</html>
<!-- #region datatables files -->
<link rel="stylesheet" type="text/css" href="//cdn.datatables.net/1.10.12/css/jquery.dataTables.min.css" />
<script src="//cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js"></script>
<!-- #endregion -->
<script src="https://cdn.ckeditor.com/4.5.6/standard/ckeditor.js"></script>

<!-- post list data ajax -->
<script type="text/javascript">
	$(document).ready(function() {
		$('#productlist').DataTable({
			processing: true,
			serverSide: true,
			ajax: "{{ url('getProductListdata') }}",
			columns: [{
					data: 'id',
					name: 'id'
				},
				{
					data: 'image',
					name: 'image'
				},
				{
					data: 'name',
					name: 'name'
				},
				{
					data: 'price',
					name: 'price'
				},
				{
					data: 'sku',
					name: 'sku'
				},
				{
					data: 'status',
					name: 'status',
					orderable: false
				},
				{
					data: 'created_at',
					name: 'created_at'
				},
				{
					data: 'action',
					name: 'action',
					orderable: false
				},
			]
		});
	});
</script>

<!-- user list data ajax -->
<script type="text/javascript">
	$(document).ready(function() {
		$('#userlist').DataTable({
			processing: true,
			serverSide: true,
			ajax: "{{ url('getUserListdata') }}",
			columns: [{
					data: 'id',
					name: 'id'
				},
				{
					data: 'user',
					name: 'user'
				},
				{
					data: 'name',
					name: 'name'
				},
				{
					data: 'phone',
					name: 'phone'
				},
				{
					data: 'created_at',
					name: 'created_at'
				},
				{
					data: 'status',
					name: 'status',
					orderable: false
				},
				{
					data: 'action',
					name: 'action',
					orderable: false
				},
			]
		});
	});
</script>

<!-- message time set  -->
<script type="text/javascript">
	$("document").ready(function() {
		setTimeout(function() {
			$("div.alert-success").remove();
		}, 3000);

	});
</script>

<script type="text/javascript">
	function readURL(input) {
		if (input.files && input.files[0]) {
			var reader = new FileReader();

			reader.onload = function(e) {
				$('#blah')
					.attr('src', e.target.result);
			};

			reader.readAsDataURL(input.files[0]);
		}
	}
</script>
<script type="text/javascript">
	CKEDITOR.replace('editor', {
		skin: 'moono',
		enterMode: CKEDITOR.ENTER_BR,
		shiftEnterMode: CKEDITOR.ENTER_P,
		toolbar: [{
				name: 'basicstyles',
				groups: ['basicstyles'],
				items: ['Bold', 'Italic', 'Underline', "-", 'TextColor', 'BGColor']
			},
			{
				name: 'styles',
				items: ['Format', 'Font', 'FontSize']
			},
			{
				name: 'scripts',
				items: ['Subscript', 'Superscript']
			},
			{
				name: 'justify',
				groups: ['blocks', 'align'],
				items: ['JustifyLeft', 'JustifyCenter', 'JustifyRight', 'JustifyBlock']
			},
			{
				name: 'paragraph',
				groups: ['list', 'indent'],
				items: ['NumberedList', 'BulletedList', '-', 'Outdent', 'Indent']
			},
			{
				name: 'links',
				items: ['Link', 'Unlink']
			},
			{
				name: 'insert',
				items: ['Image']
			},
			{
				name: 'spell',
				items: ['jQuerySpellChecker']
			},
			{
				name: 'table',
				items: ['Table']
			}
		],
	});
</script>