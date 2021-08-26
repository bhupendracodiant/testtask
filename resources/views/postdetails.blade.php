@extends('admin/master')

@section('content')

<!--== BODY INNER CONTAINER ==-->
<div class="sb2-2">
				<!--== breadcrumbs ==-->
				<div class="sb2-2-2">
					<ul>
						<li><a href="index-1.html"><i class="fa fa-home" aria-hidden="true"></i> Home</a> </li>
						<li class="active-bre"><a href="#"> Post Details</a> </li>
						<li class="page-back"><a href="#"><i class="fa fa-backward" aria-hidden="true"></i> Back</a> </li>
					</ul>
				</div>
				<div class="tz-2 tz-2-admin">
					<div class="tz-2-com tz-2-main">
						<h4>Post Details </h4> 
						
						<!-- Dropdown Structure -->
						<div class="split-row">
							<div class="col-md-12">
								<div class="box-inn-sp ad-inn-page">
									<div class="tab-inn ad-tab-inn">
										<div class="hom-cre-acc-left hom-cre-acc-right">
											<div class="" style="margin-left: 37px;">
												
													<div class="row">
                                                    
														<div class="input-field col s6">
                                                        
														<p>	<b>Company Name - </b>  {{ $posts->company_name }}</p>
															
														</div>
														<div class="input-field col s6">
                                                        <p>	<b>Position - </b>  {{ $posts->position }}</p>
														</div>
													</div>
                                                    <div class="row">
                                                    
														<div class="input-field col s6">
                                                        
														<p>	<b>Primary tag - </b>  {{ $posts->primary_tag }}</p>
															
														</div>
														<div class="input-field col s6">
                                                        <p>	<b>Multiple tag - </b>  {{ $posts->seprate_tag }}</p>
														</div>
													</div>

                                                    <div class="row">
                                                    
														<div class="input-field col s6">
                                                        
														<p>	<b>Job location - </b>  {{ $posts->job_location }}</p>
															
														</div>
														<div class="input-field col s6">
                                                        <p>	<b>Company logo - </b>  @if (!empty($posts->company_logo))
													   <img src="{{url('upload')}}<?php echo '/'.$posts->company_logo;?>"width="80" height="80">
													    @endif</p>
														</div>
													</div>

                                                <div class="row">
                                                    
                                                    <div class="input-field col s6">
                                                    
                                                    <p>	<b>Primary tag - </b>  {{ $posts->primary_tag }}</p>
                                                        
                                                    </div>
                                                    <div class="input-field col s6">
                                                    <p>	<b>Multiple tag - </b>  {{ $posts->seprate_tag }}</p>
                                                    </div>
                                                </div>

                                                <div class="row">
                                                    
                                                    <div class="input-field col s6">
                                                    
                                                    <p>	<b>Salary minimum - </b>  {{ $posts->salary_minimum }}</p>
                                                        
                                                    </div>
                                                    <div class="input-field col s6">
                                                    <p>	<b>Salary maximum - </b>  {{ $posts->salary_maximum }}</p>
                                                    </div>
                                                </div>

                                                <div class="row">
                                                    
                                                    <div class="input-field col s6">
                                                    
                                                    <p>	<b>How apply - </b>  {{ $posts->how_apply }}</p>
                                                        
                                                    </div>
                                                    <div class="input-field col s6">
                                                    <p>	<b>Apply URL - </b>  {{ $posts->apply_url }}</p>
                                                    </div>
                                                </div>

                                                <div class="row">
                                                    
                                                    <div class="input-field col s6">
                                                    
                                                    <p>	<b>Apply email - </b>  {{ $posts->apply_email }}</p>
                                                        
                                                    </div>
                                                    <div class="input-field col s6">
                                                    <p>	<b>Current status - </b><?php if($posts->status==1)
													echo 'Active';
													else
													echo 'Block';?></p>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    
                                                    <div class="input-field col s6">
                                                    
                                                    <p>	<b>Job description - </b>  {{ $posts->job_description }}</p>
                                                        
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
		</div>
	</div>
	<!--== BOTTOM FLOAT ICON ==-->

          
@endsection