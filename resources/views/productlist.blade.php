@extends('master')

@section('content')
			<div class="sb2-2">
				<!--== breadcrumbs ==-->
				<div class="sb2-2-2">
					<ul>
						<li><a href="index-1.html"><i class="fa fa-home" aria-hidden="true"></i> Home</a> </li>
						<li class="active-bre"><a href="#"> All Product</a> </li>
						<li class="page-back"><a href="admin.html"><i class="fa fa-backward" aria-hidden="true"></i> Back</a> </li>
					</ul>
				</div>
				<div class="tz-2 tz-2-admin">
					<div class="tz-2-com tz-2-main">
					<h4>All Product</h4>
						
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
											<table class="table table-hover" id="productlist">
												<thead>
													<tr>
														<th>Id</th>
														<th>Image</th>
														<th>Name</th>
														<th>Price</th>
                                                        <th>SKU</th>
                                                        <th>Status</th>
														<th>Create date</th>
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


