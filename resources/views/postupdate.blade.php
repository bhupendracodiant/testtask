@extends('admin/master')

@section('content')
<!--== BODY INNER CONTAINER ==-->
<script src="https://cdn.ckeditor.com/4.8.0/full-all/ckeditor.js"></script>
<div class="sb2-2">
				<!--== breadcrumbs ==-->
				<div class="sb2-2-2">
					<ul>
						<li><a href="index-1.html"><i class="fa fa-home" aria-hidden="true"></i> Home</a> </li>
						<li class="active-bre"><a href="#"> Update post</a> </li>
						<li class="page-back"><a href="#"><i class="fa fa-backward" aria-hidden="true"></i> Back</a> </li>
					</ul>
				</div>
				<div class="tz-2 tz-2-admin">
					<div class="tz-2-com tz-2-main">
						<h4>Update post</h4> 
						<!-- Dropdown Structure -->
						<div class="split-row">
							<div class="col-md-12">
								<div class="box-inn-sp ad-inn-page">
									<div class="tab-inn ad-tab-inn">
										<div class="hom-cre-acc-left hom-cre-acc-right">
											<div class="">
                                            <form class=""method="POST" action="actionpostupdate" enctype="multipart/form-data">
											@csrf
                                            <input type="hidden" name="uid" value="{{ $posts->id }}">	
                                            <div class="row">
														<div class="input-field col s6">
													<span>Company Name</span>
															<input id="first_name" type="text" class="validate" name="comapany_name" value="{{ $posts->company_name }}" required>
															
														</div>
														<div class="input-field col s6">
														<span>Position</span>
															<input id="last_name" type="text" class="validate" name="position" value="{{ $posts->position }}" required> 
															<label for="last_name">Position</label>
														</div>
													</div>
                                                    <div class="row">
														<div class="input-field col s6">
														<span>Primary tag</span>
                                                        <select name="primary_tag" required>
                                                        <option value="{{ $posts->primary_tag }}">{{ $posts->primary_tag }}</option>
                                                       
                                                        <option value="dev">Software Development</option>
                                                        <option value="customer support">Customer Support</option>
                                                        <option value="sales">Sales</option>
                                                        <option value="marketing">Marketing</option>
                                                        <option value="design">Design</option>
                                                        <option value="front end">Front End</option>
                                                        <option value="backend">Back End</option>
                                                        <option value="legal">Legal</option>
                                                        <option value="testing">Testing</option>
                                                        <option value="quality assurance">Quality Assurance</option>
                                                        <option value="non tech">Non-Tech</option>
                                                        <option value="other">Other</option>
                                                    </select>
															
														</div>
														<div class="input-field col s6">
														<span>TAGS SEPERATED BY COMMA</span>
															<input id="last_name" type="text" class="validate" name="seprate_tag" value="{{ $posts->seprate_tag }}" required>
															<label for="last_name">TAGS SEPERATED BY COMMA</label>
														</div>
													</div>
                                                    <div class="row">
														<div class="input-field col s6">
														<span>Job location</span>
															<input id="first_name" type="text" class="validate" name="job_location" value="{{ $posts->job_location }}" required>
															<label for="first_name">Job location</label>
														</div>
														<div class="input-field col s6" >
														
														<span>Salary minimum</span>
															<!-- <label for="last_name">Salary minimum</label> -->
                                                            <select name="salary_minimum" class="validate" >
                                                            <option value="{{ $posts->salary_minimum }}">{{ $posts->salary_minimum }}</option>
                                                            <option value="0">USD 0 per year</option>
                                                            <option value="10000">USD 10,000 per year</option>
                                                            <option value="20000">USD 20,000 per year</option>
                                                            <option value="30000">USD 30,000 per year</option>
                                                            <option value="40000">USD 40,000 per year</option>
                                                            <option value="50000">USD 50,000 per year</option>
                                                            <option value="60000">USD 60,000 per year</option>
                                                            <option value="70000">USD 70,000 per year</option>
                                                            <option value="80000">USD 80,000 per year</option>
                                                            <option value="90000">USD 90,000 per year</option>
                                                            <option value="100000">USD 100,000 per year</option>
                                                            <option value="110000">USD 110,000 per year</option>
                                                            <option value="120000">USD 120,000 per year</option>
                                                            <option value="130000">USD 130,000 per year</option>
                                                            <option value="140000">USD 140,000 per year</option>
                                                            <option value="150000">USD 150,000 per year</option>
                                                            <option value="160000">USD 160,000 per year</option>
                                                            <option value="170000">USD 170,000 per year</option>
                                                            <option value="180000">USD 180,000 per year</option>
                                                            <option value="190000">USD 190,000 per year</option>
                                                            <option value="200000">USD 200,000 per year</option>
                                                        </select>
                                                        </div>
													</div>
                                                    <div class="row">
														<div class="input-field col s6" >
														<span>Salary maximum</span>
															<!-- <label for="first_name">Salary maximum</label> -->
                                                            <select name="salary_maximum" class="validate" >
                                                            <option value="{{ $posts->salary_maximum }}">{{ $posts->salary_maximum }}</option>
                                                            <option value="0">USD 0 per year</option>
                                                            <option value="10000">USD 10,000 per year</option>
                                                            <option value="20000">USD 20,000 per year</option>
                                                            <option value="30000">USD 30,000 per year</option>
                                                            <option value="40000">USD 40,000 per year</option>
                                                            <option value="50000">USD 50,000 per year</option>
                                                            <option value="60000">USD 60,000 per year</option>
                                                            <option value="70000">USD 70,000 per year</option>
                                                            <option value="80000">USD 80,000 per year</option>
                                                            <option value="90000">USD 90,000 per year</option>
                                                            <option value="100000">USD 100,000 per year</option>
                                                            <option value="110000">USD 110,000 per year</option>
                                                            <option value="120000">USD 120,000 per year</option>
                                                            <option value="130000">USD 130,000 per year</option>
                                                            <option value="140000">USD 140,000 per year</option>
                                                            <option value="150000">USD 150,000 per year</option>
                                                            <option value="160000">USD 160,000 per year</option>
                                                            <option value="170000">USD 170,000 per year</option>
                                                            <option value="180000">USD 180,000 per year</option>
                                                            <option value="190000">USD 190,000 per year</option>
                                                            <option value="200000">USD 200,000 per year</option>
                                                         </select>
														</div>
														<div class="input-field col s6" required>
														<span>Apply URL</span>
															<input id="last_name" type="text" class="validate" name="apply_url" value="{{ $posts->apply_url }}" required>
															<label for="last_name">Apply URL </label> 
														</div>
													</div>
													<div class="row">
														<div class="input-field col s12" required>
														<span>Job description</span>
															<!-- <input id="list_phone" type="text" class="validate" name="job_description" value="{{ $posts->job_description }}" required> -->
															<textarea class="form-control validate"  name="job_description" id="editor" rows="5"  required>{{ $posts->job_description }}</textarea>
															<label for="list_phone">Job description</label>
														</div>
													</div>
													<div class="row">
														<div class="input-field col s12" required>
														<span>How apply</span>
															<!-- <input id="email" type="text" class="validate" name="how_apply" value="{{ $posts->how_apply }}" required> -->
															<textarea class="form-control validate"  name="how_apply" id="editorr" rows="5"  required>{{ $posts->how_apply }}</textarea>
														</div>
													</div>
													<!-- <div class="row">
														<div class="input-field col s12">
															<input id="list_addr" type="text" class="validate">
															<label for="list_addr">Address</label>
														</div>
													</div> -->
                                                     <div class="row">
														<div class="input-field col s12">
														<span>Company logo</span>
															<input type="file" class="validate" name="company_logo" value="image"  onchange="readURL(this);">
															
														</div>
                                                    @if ($posts->company_logo)
													<img src="{{url('upload')}}<?php echo '/'.$posts->company_logo;?>"width="100" height="100" id="blah">
													@endif
													</div> 
													
													<div class="row">
														<!-- <div class="input-field col s12"> <a class="waves-effect waves-light btn-large full-btn" href="#!">Submit User</a> </div> -->
                                                        <div class="input-field col s12"> <input type="submit" value="Update post" class="waves-button-input"></div>
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