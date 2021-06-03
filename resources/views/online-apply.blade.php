@extends('layouts.app')
@section('content')


		<!-- Breadcrumb -->
		<div class="breadcrumbs overlay" style="background-image:url('https://via.placeholder.com/1600x500')">
			<div class="container">
				<div class="row">
					<div class="col-12">
						<div class="bread-inner">
							<!-- Bread Menu -->
							<div class="bread-menu">
								<ul>
									<li><a href="index.html">Home</a></li>
									<li><a href="about.html">Apply now</a></li>
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
                    <div class="col-lg-7 col-md-7 col-12">
						<!-- Contact Form -->
						{{-- <div class="contact-form-area m-top-30">
							<h4>Online Application</h4>
							<form class="form" method="post" action="mail/mail.php">
								<div class="row">
									<div class="col-lg-6 col-md-6 col-12">
										<div class="form-group">
											<div class="icon"><i class="fa fa-user"></i></div>
											<input type="text" name="first_name" placeholder="First Name" required>
										</div>
									</div>
									<div class="col-lg-6 col-md-6 col-12">
										<div class="form-group">
											<div class="icon"><i class="fa fa-user"></i></div>
											<input type="text" name="last_name" placeholder="Last Name" required>
										</div>
									</div>
									<div class="col-lg-6 col-md-6 col-12">
										<div class="form-group">
											<div class="icon"><i class="fa fa-envelope"></i></div>
											<input type="email" name="email" placeholder="Type Subjects" required>
										</div>
									</div>
									<div class="col-lg-6 col-md-6 col-12">
										<div class="form-group">
											<div class="icon"><i class="fa fa-tag"></i></div>
											<input type="text" name="subject" placeholder="Type Subjects" required>
										</div>
									</div>
									<div class="col-12">
										<div class="form-group textarea">
											<div class="icon"><i class="fa fa-pencil"></i></div>
											<textarea type="textarea" name="message" rows="5" required></textarea>
										</div>
									</div>
									<div class="col-12">
										<div class="form-group button">
											<button type="submit" class="bizwheel-btn theme-2">Send Now</button>
										</div>
									</div>
								</div>
							</form>
						</div> --}}
						<!--/ End contact Form -->
					</div>
                </div>
			</div>
		</section>
		<!--/ End About Us -->

        @endsection
