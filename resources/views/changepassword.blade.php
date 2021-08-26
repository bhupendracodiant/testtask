@extends('admin/master')

@section('content')
			<!--== BODY INNER CONTAINER ==-->
			<div class="sb2-2">
				<!--== breadcrumbs ==-->
				<div class="sb2-2-2">
					<ul>
						<li><a href="admin/home"><i class="fa fa-home" aria-hidden="true"></i> Home</a> </li>
						<li class="active-bre"><a href="#"> Change password</a> </li>
						<li class="page-back"><a href="#"><i class="fa fa-backward" aria-hidden="true"></i> Back</a> </li>
					</ul>
				</div>
				<div class="tz-2 tz-2-admin">
					<div class="tz-2-com tz-2-main">
						<h4>Change password</h4>
						
						<!-- Dropdown Structure -->
						<div class="split-row">
							<div class="col-md-12">
								<div class="box-inn-sp ad-inn-page">
									<div class="tab-inn ad-tab-inn">
										<div class="hom-cre-acc-left hom-cre-acc-right">
										
											<div class="">
											@if (session('success_message'))
                                              <div class="alert alert-success">
                                           {{ session('success_message') }}
                                            </div>
                                             @endif
										@if(Session::has('error_message'))
                                              <p class="alert alert-danger">{{ Session::get('error_message') }}</p>
                                        @endif
												
											@if ($errors->any())
                                                <div class="alert alert-danger">
                                             <ul>
                                                  @foreach ($errors->all() as $error)
                                               <li>{{ $error }}</li>
                                              @endforeach
                                             </ul>
                                             </div>
                                               @endif
												<form class=""method="POST" action="update_password" >
												@csrf
													<div class="row">
														<div class="input-field col s12">
															<input id="list_phone" type="password" class="validate" name="old_password" required>
															<label for="list_phone">Old password</label>
														</div>
													</div>
													<div class="row">
														<div class="input-field col s12">
															<input id="password" type="password" class="validate" name="new_password" required>
															<label for="email">New password</label>
														</div>
													</div>
													<div class="row">
														<div class="input-field col s12">
															<input id="list_addr" type="text" class="validate" name="confirm_password" required>
															<label for="list_addr">Confirm password</label>
														</div>
													</div>
													
													<div class="row">
														<div class="input-field col s12"> <input type="submit" value="Change password" class="waves-button-input"></div>
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

        
@endsection