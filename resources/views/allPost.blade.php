@extends('admin/master')

@section('content')
			<div class="sb2-2">
				<!--== breadcrumbs ==-->
				<div class="sb2-2-2">
					<ul>
						<li><a href="index-1.html"><i class="fa fa-home" aria-hidden="true"></i> Home</a> </li>
						<li class="active-bre"><a href="#"> All Post</a> </li>
						<li class="page-back"><a href="admin.html"><i class="fa fa-backward" aria-hidden="true"></i> Back</a> </li>
					</ul>
				</div>
				<div class="tz-2 tz-2-admin">
					<div class="tz-2-com tz-2-main">
					<h4>All Post</h4>
						<!-- <h4>All Post</h4> <a class="dropdown-button drop-down-meta drop-down-meta-inn" href="#" data-activates="dr-list"><i class="material-icons">more_vert</i></a> -->
						<!-- <ul id="dr-list" class="dropdown-content">
							<li><a href="#!">Add New</a> </li>
							<li><a href="#!">Edit</a> </li>
							<li><a href="#!">Update</a> </li>
							<li class="divider"></li>
							<li><a href="#!"><i class="material-icons">delete</i>Delete</a> </li>
							<li><a href="#!"><i class="material-icons">subject</i>View All</a> </li>
							<li><a href="#!"><i class="material-icons">play_for_work</i>Download</a> </li>
						</ul> -->
						<!-- Dropdown Structure -->
						<div class="split-row">
							<div class="col-md-12">
								<div class="box-inn-sp ad-inn-page">
									<div class="tab-inn ad-tab-inn">
									@if (session('success_message'))
                                              <div class="alert alert-success">
                                           {{ session('success_message') }}
                                            </div>
                                             @endif
										@if(Session::has('error_message'))
                                              <p class="alert alert-danger">{{ Session::get('error_message') }}</p>
                                        @endif
										<div>
											<table class="table table-hover" id="postlist">
												<thead>
													<tr>
														<th>Id</th>
														<th>Company name</th>
														<th>Position</th>
														<th>Category</th>
														<th>Create date</th>
														<th>Status</th>
														<th>Action</th>
													</tr>
												</thead>
												
											</table>
										</div>
									</div>
								</div>
							
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

       
@endsection


