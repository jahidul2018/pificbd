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
									<li><a href="contact.html">Contact</a></li>
								</ul>
							</div>
							<!-- Bread Title -->
							<div class="bread-title"><h2>Our Address</h2></div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!--/ End Breadcrumb -->

		<!-- Contact Us -->
		<section class="contact-us section-space">
			<div class="container">
                <div class="row">
                    <div class="container">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3650.7482166526993!2d90.41844351429772!3d23.79197869310501!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755c7386b8cf29d%3A0xf3524ae2e8e1d25c!2sIMC%20Worldwide!5e0!3m2!1sen!2sbd!4v1620131061586!5m2!1sen!2sbd" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                    </div>
                </div>
				<div class="row">
                    <div class="col-lg-5 col-md-5 col-12">
						<div class="contact-box-main m-top-30 section-title-2">
							<div class="contact-title">
								<h2>Contact with us</h2>
								{{-- <p>euismod eu augue. Etiam vel dui arcu. Cras varius mieros pharetra, id aliquam metus venenatis. Donec sollicit</p> --}}
							</div>
							<!-- Single Contact -->
							<div class="single-contact-box">
								<div class="c-icon"><i class="fa fa-clock-o"></i></div>
								<div class="c-text">
									<h4>Opening Hour</h4>
									<p>Thursday - Sunday<br>09AM - 4PM (everyday)</p>
								</div>
							</div>
							<!--/ End Single Contact -->
							<!-- Single Contact -->
							<div class="single-contact-box">
								<div class="c-icon"><i class="fa fa-phone"></i></div>
								<div class="c-text">
									<h4>Call Us Now</h4>
									<p>Tel.: +(88)0255 0598 01/2<br></p>
								</div>
							</div>
							<!--/ End Single Contact -->
							<!-- Single Contact -->
							<div class="single-contact-box">
								<div class="c-icon"><i class="fa fa-envelope-o"></i></div>
								<div class="c-text">
									<h4>Email Us</h4>
									<p>info@pific-bd.com<br></p>
								</div>
							</div>
							<!--/ End Single Contact -->
							{{-- <div class="button">
								<a href="#" class="bizwheel-btn theme-1">Our Works<i class="fa fa-angle-right"></i></a>
							</div> --}}
						</div>
					</div>
					<div class="col-lg-7 col-md-7 col-12">
						<!-- Contact Form -->
						<div class="contact-form-area m-top-30">
							<h4>Get In Touch</h4>
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
											<button type="submit" style="background-color: rgb(0, 67, 130)" class="bizwheel-btn theme-2">Send Now</button>
										</div>
									</div>
								</div>
							</form>
						</div>
						<!--/ End contact Form -->
					</div>
				</div>
			</div>
		</section>
		<!--/ End Contact Us -->
@endsection
