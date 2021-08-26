@extends('admin/master')

@section('content')
<!--== BODY INNER CONTAINER ==-->
<div class="sb2-2">
				<!--== breadcrumbs ==-->
				<div class="sb2-2-2">
					<ul>
						<li><a href="index-1.html"><i class="fa fa-home" aria-hidden="true"></i> Home</a> </li>
						<li class="active-bre"><a href="#"> Update user</a> </li>
						<li class="page-back"><a href="#"><i class="fa fa-backward" aria-hidden="true"></i> Back</a> </li>
					</ul>
				</div>
				<div class="tz-2 tz-2-admin">
					<div class="tz-2-com tz-2-main">
						<h4>Update user</h4> 
						<!-- Dropdown Structure -->
						<div class="split-row">
							<div class="col-md-12">
								<div class="box-inn-sp ad-inn-page">
									<div class="tab-inn ad-tab-inn">
										<div class="hom-cre-acc-left hom-cre-acc-right">
											<div class="">
                                            <form class=""method="POST" action="actionuserupdate" enctype="multipart/form-data">
											@csrf
                                            <input type="hidden" name="uid" value="{{ $user->id }}">	
                                            <div class="row">
														<div class="input-field col s6">
															<input id="first_name" type="text" class="validate" name="name" value="{{ $user->name }}" required>
															<label for="first_name"> Name</label>
														</div>
														<div class="input-field col s6">
															<input id="last_name" type="text" class="validate"  value="{{ $user->email }}" readonly> 
															<label for="last_name">Email</label>
														</div>
													</div>
                                        
                                                    <div class="row">
														<div class="input-field col s6">
															<input id="first_name" type="text" class="validate" name="phone" value="{{ $user->phone }}" required>
															<label for="first_name">Phone</label>
														</div>
                                                        <div class="input-field col s6">
															<input id="first_name" type="text" class="validate" name="country" value="{{ $user->country }}" required>
															<label for="first_name">Country</label>
														</div>
														
													</div>
                                                    <div class="row">
                                                    <div class="input-field col s6">
															<input id="first_name" type="text" class="validate" name="state" value="{{ $user->state }}" required>
															<label for="first_name">state</label>
														</div>
														<div class="input-field col s6" required>
															<input id="last_name" type="text" class="validate" name="city" value="{{ $user->city }}" required>
															<label for="last_name">City </label>
														</div>
													</div>
													
												
                                                     <div class="row">
														<div class="input-field col s12">
															<input type="file" class="validate" name="image" value="image" onchange="readURL(this);">
															<
														</div>
                                                    @if (!empty($user->image))
													<img src="{{url('upload')}}<?php echo '/'.$user->image;?>"width="100" height="100" id="blah">
													@endif
													</div> 
													
													<div class="row">
														<!-- <div class="input-field col s12"> <a class="waves-effect waves-light btn-large full-btn" href="#!">Submit User</a> </div> -->
                                                        <div class="input-field col s12"> <input type="submit" value="Update user" class="waves-button-input"></div>
                                                    </div>
												</form>
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
	</div>
	<!--== BOTTOM FLOAT ICON ==-->

          
@endsection