@extends('layouts.app')
@section('content')


		<!-- Breadcrumb -->
		<div class="breadcrumbs overlay" style="background-image:url('http://localhost:8000/pific-web-site/img/');">
			<div class="container">
				<div class="row">
					<div class="col-12">
						<div class="bread-inner">
							<!-- Bread Menu -->
							<div class="bread-menu">
								<ul>
									<li><a href="index.html">Home</a></li>
									<li><a href="about.html">Our Team</a></li>
								</ul>
							</div>
							<!-- Bread Title -->
							<div class="bread-title"><h2></h2></div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- / End Breadcrumb -->

		<!-- About Us -->
		<section class="about-us section-space">
			<div class="container">
				<div class="row d-flex justify-content-center">
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
					<div class="col-lg-6 col-md-6 col-12 d-flex justify-content-center">
						<div class="about-content section-title default text-left">
							<div class="section-top">
								<h1><span>.......</span><b>.......</b></h1>
							</div>
							<div class="section-bottom">
								<div class="text">

								</div>
                                    <div class="btn-group mt-3" role="group" aria-label="Basic example">
                                        <div class="button mr-3 btn-success" >
                                            <a href="{{ url('/pific-team-tec', []) }}" style="background-color: rgb(38, 164, 248);" class="bizwheel-btn theme-2">Technical Team</a>
                                        </div>
                                        <div class="button mr-3 btn-success">
                                            <a href="{{ url('/pific-team-management', []) }}" style="background-color: rgb(38, 164, 248);" class="bizwheel-btn theme-2">Management Team</a>
                                        </div>
                                        <div class="button btn-success">
                                            <a href="{{ url('/pific-team-ict', []) }}" style="background-color: rgb(38, 164, 248);" class="bizwheel-btn theme-2">ICT Team</a>
                                        </div>
                                    </div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!--/ End About Us -->

        @endsection
