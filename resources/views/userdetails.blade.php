@extends('master')

@section('content')

<!--== BODY INNER CONTAINER ==-->
<div class="sb2-2">
	<!--== breadcrumbs ==-->
	<div class="sb2-2-2">
		<ul>
			<li><a href="index-1.html"><i class="fa fa-home" aria-hidden="true"></i> Home</a> </li>
			<li class="active-bre"><a href="#"> Customer Details</a> </li>
			<li class="page-back"><a href="#"><i class="fa fa-backward" aria-hidden="true"></i> Back</a> </li>
		</ul>
	</div>
	<div class="tz-2 tz-2-admin">
		<div class="tz-2-com tz-2-main">
			<h4>Customer Details </h4>

			<!-- Dropdown Structure -->
			<div class="split-row">
				<div class="col-md-12">
					<div class="box-inn-sp ad-inn-page">
						<div class="tab-inn ad-tab-inn">
							<div class="hom-cre-acc-left hom-cre-acc-right">
								<div class="" style="margin-left: 37px;">

									<div class="row">

										<div class="input-field col s6">

											<p> <b> First name - </b> {{ $user->name }}</p>

										</div>
										<div class="input-field col s6">
											<p> <b>Last name - </b> {{ $user->latname }}</p>
										</div>
									</div>


									<div class="row">

										<div class="input-field col s6">
										<p> <b>Email - </b> {{ $user->email }}</p>

											

										</div>
										<div class="input-field col s6">
										<p> <b>Phone - </b> {{ $user->phone }}</p>
										

										</div>

									</div>

									<div class="row">

										<div class="input-field col s6">
										<p> <b>Status - </b> {{ $user->status }}</p>

											

										</div>
										<div class="input-field col s6">
										<p> <b>Address - </b> {{ $user->address }}</p>
										

										</div>

									</div>

									<div class="row">

										<div class="input-field col s6">

										<p> <b>Join date - </b><?php echo  date('m-d-Y', strtotime($user->created_at)); ?></p>

										</div>
										<div class="input-field col s6">
											<p> <b>User profile- </b> @if (!empty($user->profile_image))
												<img src="{{url('upload')}}<?php echo '/' . $user->profile_image; ?>" width="80" height="80">
												@endif
											</p>
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