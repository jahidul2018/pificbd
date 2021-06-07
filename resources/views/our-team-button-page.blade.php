@extends('layouts.app')
@section('content')


		<!-- Breadcrumb -->
		<div class="breadcrumbs overlay" style="background-image:url('http://localhost:8000/pific-web-site/img/team/team.png');">
			<div class="container">
				<div class="row">
					<div class="col-12">
						<div class="bread-inner">
							<!-- Bread Menu -->
							<div class="bread-menu">
								<ul>
									<li><a href="index.html">Home</a></li>
									<li><a href="about.html">PIFIC Team</a></li>
								</ul>
							</div>
							<!-- Bread Title -->
							<div class="bread-title"><h2>PIFIC Team</h2></div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- / End Breadcrumb -->

		<!-- About Us -->
		<section class="about-us section-space">
			<div class="container">
                <div class="row justify-content-center">
                    <div class="about-content section-title default text-left">
                        <div class="section-top">
                            <h1><span>PIFIC Team</span><b></b></h1>
                        </div>

                    </div>
                </div>
				<div class="row d-flex">
					{{-- <div class="col-lg offset-lg-1 col-md-6 col-12"> --}}
						<!-- About Video -->
						{{-- <div class="modern-img-feature">
							<img src="https://via.placeholder.com/800x725" alt="#">
							<div class="video-play">
								<a href="https://www.youtube.com/watch?v=RLlPLqrw8Q4" class="video video-popup mfp-iframe">
									<i class="fa fa-play"></i>
								</a>
							</div>
						</div> --}}
						<!--/End About Video  -->
					{{-- </div> --}}
                    <div class="col-md-3">
                        <div class="mt-3" role="group" aria-label="Basic example">
                            <div class="button mt-4 bizwheel-btn theme-2" style="display: block; width:100%; text-align:center; background-color: rgb(38, 164, 248); box" >
                                <a href="{{ url('/pific-team-tec', []) }}" style="background-color: rgb(38, 164, 248);" class="">Technical Team</a>
                            </div>
                            <div class="button mt-4 bizwheel-btn theme-2" style="display: block; width:100%; text-align:center; background-color: rgb(38, 164, 248);">
                                <a href="{{ url('/pific-team-management', []) }}" style="background-color: rgb(38, 164, 248);" class="">Management Team</a>
                            </div>
                            <div class="button bizwheel-btn theme-2 mt-4" style="display: block; width:100%; text-align:center; background-color: rgb(38, 164, 248);">
                                <a href="{{ url('/pific-team-ict', []) }}" style="background-color: rgb(38, 164, 248);" class="">ICT Team</a>
                            </div>
                        </div>

                    </div>
					<div class="col-lg-6 col-md-6 col-12">
						<div class="about-content section-title default text-left">

							<div class="section-bottom">
								<div class="" style="color: black; ">
                    Everyone says it, but in our case it’s true: PIFIC Team is the secret to our success. Each of our employees is amazing in their own right, but together they are what makes PIFIC such a fun and rewarding place to work.  The PIFIC team is a tight-knit, talented group with a shared vision of delivering consistently great results for our clients, as well as ensuring the agency is a fun, inclusive, challenging place to work and develop a rewarding career.We’re very proud of the team we’ve built – there’s more than thirty of us now but it still feels like it did when there were just a few of us.  PIFIC has always been an agency defined by bringing together talented people with a shared vision and passion for helping us to be the best we can be for our clients.  But that doesn’t mean PIFIC is a cookie-cutter agency.  All of our employees are unique individuals who are united by a set of five core values that apply to everything we do within the agency
								</div>

							</div>
						</div>
					</div>

				</div>
			</div>
		</section>
		<!--/ End About Us -->

        @endsection
