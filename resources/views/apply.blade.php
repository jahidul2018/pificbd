@extends('layouts.app')
@section('content')


		<!-- Breadcrumb -->
		<div class="breadcrumbs overlay" style="background-image:url('http://localhost:8000/pific-web-site/img/apply.jpg');">
			<div class="container">
				<div class="row">
					<div class="col-12">
						<div class="bread-inner">
							<!-- Bread Menu -->
							<div class="bread-menu">
								<ul>
									<li><a href="index.html">Home</a></li>
									<li><a href="about.html">Apply</a></li>
									<li><a href="about.html"></a></li>
								</ul>
							</div>
							<!-- Bread Title -->
							<div class="bread-title"><h2>Apply Online</h2></div>
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
						<div class="modern-img-feature" style="background-color: white;">
							<img src="{{ asset('/pific-web-site') }}/img/pdf-download.png" alt="#" style="background-color: white">
							{{-- <div class="video-play">
								<a href="https://www.youtube.com/watch?v=RLlPLqrw8Q4" class="video video-popup mfp-iframe">
									<i class="fa fa-play"></i>
								</a>
							</div> --}}
						</div>
						<!--/End About Video  -->
					{{-- </div> --}}
					<div class="col-lg-6 col-md-6 col-12 d-flex ">
						<div class="about-content section-title default text-left">
							<div class="section-top">
								<h1><span>How to Apply</span><b>Eligibility Criteria For Application</b></h1>
							</div>
							<div class="section-bottom">
								<div class="text">
									<ul>
                                        <li><p>Public or common beneficiaries</p></li>
                                        <li><p>Improve capacity for production, employment and export</p></li>
                                        <li><p>Endorsed by a group or association</p></li>
                                        <li><p>Applicant majority private</p></li>
                                        <li><p>Applicant has legal business structure</p></li>
                                        <li><p>Conform to Environmental and Social Safeguards of GOB and WB</p></li>
                                        <li><p>Email your completed PIFIC application documents to <b> info@pific-bd.com</b></p></li>
                                    </ul>
								</div>
                                    <div class="btn-group mt-3" role="group" aria-label="Basic example">
                                        <div class="button mr-3 btn-success" >
                                            <a href="{{ asset('/online-apply') }}" target="_blank" style="background-color: rgb(38, 164, 248);" class="bizwheel-btn theme-2">Online Application<i class="fa fa-angle-right"></i></a>
                                        </div>
                                        <div class="button mr-3 btn-success">
                                            <a href="{{ asset('pific-web-site') }}/Project-Application.docx" style="background-color: rgb(38, 164, 248);" class="bizwheel-btn theme-2">Project Application Form <i class="fa fa-angle-right"></i></a>
                                        </div>
                                        <div class="button btn-success">
                                            <a href="{{ asset('pific-web-site') }}/doc1.docx" style="background-color: rgb(38, 164, 248);" class="bizwheel-btn theme-2"> Evaluation Form<i class="fa fa-angle-right"></i></a>
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
