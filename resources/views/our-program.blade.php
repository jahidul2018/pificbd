@extends('layouts.app')
@section('content')


		<!-- Breadcrumb -->
		<div class="breadcrumbs overlay" style="background-image:url('http://localhost:8000/pific-web-site/img/team/old.team.png')">
			<div class="container">
				<div class="row">
					<div class="col-12">
						<div class="bread-inner">
							<!-- Bread Menu -->
							<div class="bread-menu">
								<ul>
									<li><a href="index.html">Home</a></li>
									<li><a href="about.html">About Us</a></li>
								</ul>
							</div>
							<!-- Bread Title -->
							<div class="bread-title"><h2>PIFIC</h2></div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- / End Breadcrumb -->
        <!-- Portfolio -->
		<section class="portfolio">
			<div class="container">
				<div class="row">
					<div class="col-lg-6 offset-lg-3 col-md-8 offset-md-2 col-12">
						<div class="section-title default text-center">
							<div class="section-top mt-2">
								<h1><span>Recent Activity</span>
									<!-- <b>Recent Activity</b> -->
								</h1>
							</div>
							<div class="section-bottom">
								<div class="text">
									<!-- <p>Lorem Ipsum Dolor Sit Amet, Conse Ctetur Adipiscing Elit, Sed Do Eiusmod Tempor Ares Incididunt Utlabore. Dolore Magna Ones Baliqua</p> -->
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-12">
						<div class="bs-example" style>
							<div class="container-fluid">
								<div class="row">
									<div class="card-group">
										<div class="card">
											<div class="cbp-item business animation">

												<div class="single-portfolio">
													<div class="portfolio-head overlay">

													<img class="lazy" src="{{ asset('pific-web-site') }}/img/recent-activity/new/1.JPG" alt="#">														<a class="more" href="portfolio-single.html"><i class="fa fa-long-arrow-right"></i></a>
													</div>
													<div class="portfolio-content">
														<h4><a href="portfolio-single.html"> Bangladesh Leather Association</a></h4>
														<p>Meeting with Bangladesh Leather Association</p>
													</div>
												</div>

											</div>
										</div>
										<div class="card">
											<div class="cbp-item business animation">
												<div class="single-portfolio">
													<div class="portfolio-head overlay">

													<img class="lazy" src="{{ asset('pific-web-site') }}/img/recent-activity/new/2.jpg" alt="#">														<a class="more" href="portfolio-single.html"><i class="fa fa-long-arrow-right"></i></a>
													</div>
													<div class="portfolio-content">
														<h4><a href="portfolio-single.html"> Meeting (MOC)
														</a></h4>
														<p>Meeting with the executive committee (MOC)

														</p>
													</div>
												</div>
											</div>
										</div>
										<div class="card">
											<div class="cbp-item business animation">
												<div class="single-portfolio">
													<div class="portfolio-head overlay">
															<img class="lazy" src="{{ asset('pific-web-site') }}/img/recent-activity/new/3.JPG" alt="#">
														<a class="more" href="portfolio-single.html"><i class="fa fa-long-arrow-right"></i></a>
													</div>
													<div class="portfolio-content">
														<h4><a href="portfolio-single.html"> Meeting With The Plastic Association
														</a></h4>
														<p>Meeting with the Plastic Association

														</p>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="row">
									<div class="card-group">
										<div class="card">
											<div class="cbp-item business animation">
												<div class="single-portfolio">
													<div class="portfolio-head overlay">

													<img class="lazy" src="{{ asset('pific-web-site') }}/img/recent-activity/new/4.jpg" alt="#">														<a class="more" href="portfolio-single.html"><i class="fa fa-long-arrow-right"></i></a>
													</div>
													<div class="portfolio-content">
														<h4><a href="portfolio-single.html"> Visit At Leather Manufacturing Company</a></h4>
														<p>Visit at Leather Manufacturing Company

														</p>
													</div>
												</div>

											</div>
										</div>
										<div class="card">
											<div class="cbp-item business animation">

												<div class="single-portfolio">
													<div class="portfolio-head overlay">

													<img class="lazy" src="{{ asset('pific-web-site') }}/img/recent-activity/new/5.jpg" alt="#">														<a class="more" href="portfolio-single.html"><i class="fa fa-long-arrow-right"></i></a>
													</div>
													<div class="portfolio-content">
														<h4><a href="portfolio-single.html"> Bangladesh Leather Association</a></h4>
														<p>Meeting with Bangladesh Leather Association</p>
													</div>
												</div>

											</div>
										</div>
										<div class="card">
											<div class="cbp-item business animation">
												<div class="single-portfolio">
													<div class="portfolio-head overlay">
															<img src="{{ asset('pific-web-site') }}/img/recent-activity/new/6.jpg" alt="#">
														<a class="more" href="portfolio-single.html"><i class="fa fa-long-arrow-right"></i></a>
													</div>
													<div class="portfolio-content">
														<h4><a href="portfolio-single.html">Visit Company</a></h4>
														<p>Visit At Plastic Manufacturing Company</p>
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
		</section>
		<!--/ End Portfolio -->
        @endsection
