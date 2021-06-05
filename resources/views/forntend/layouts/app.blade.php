<!DOCTYPE html>
<html lang="zxx">
	<head>

		<!-- Meta Tag -->
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name='copyright' content='pavilan'>
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

		<!-- Title Tag  -->
		<title>PIFIC -Public Investment Facility for Infrastructure Constraints (PIFIC) </title>

		<!-- Favicon -->
		<link rel="icon" type="image/favicon.png" href="{{ asset('pific-web-site') }}/img/logo.png">

		<!-- Web Font -->
		<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">

		<!-- Bizwheel Plugins CSS -->
		{{-- <link rel="stylesheet" type="text/css" href="{{ asset('backend') }}/files/assets/select2/jquery.multiselect.js"> --}}

		<link rel="stylesheet" href="{{ asset('pific-web-site') }}/css/animate.min.css">
		<link rel="stylesheet" href="{{ asset('pific-web-site') }}/css/bootstrap.min.css">
		<link rel="stylesheet" href="{{ asset('pific-web-site') }}/css/cubeportfolio.min.css">
		<link rel="stylesheet" href="{{ asset('pific-web-site') }}/css/font-awesome.css">
		<link rel="stylesheet" href="{{ asset('pific-web-site') }}/css/jquery.fancybox.min.css">
		<link rel="stylesheet" href="{{ asset('pific-web-site') }}/css/magnific-popup.min.css">
		<link rel="stylesheet" href="{{ asset('pific-web-site') }}/css/owl-carousel.min.css">
		<link rel="stylesheet" href="{{ asset('pific-web-site') }}/css/slicknav.min.css">

		<!-- Bizwheel Stylesheet -->
		<link rel="stylesheet" type="text/css" href="{{ asset('pific-web-site') }}/ticker.css">


		<link rel="stylesheet" href="{{ asset('pific-web-site') }}/css/reset.css">
		<link rel="stylesheet" href="{{ asset('pific-web-site') }}/style.css">
		<link rel="stylesheet" href="{{ asset('pific-web-site') }}/css/responsive.css">
        <link rel="stylesheet" type="text/css" href="{{ asset('pific-web-site') }}/custom.css">

	</head>
	<body id="bg">

		<!-- Boxed Layout -->
		<div id="page" class="site boxed-layout">

		<!-- Preloader -->
		<div class="preeloader">
			<div class="preloader-spinner"></div>
		</div>
		<!--/ End Preloader -->

		<!-- Header -->
		<header class="header">
			<!-- Topbar -->
			<div class="topbar">
				<div class="container">
					<div class="row">
						<div class="col-lg-8 col-12">
							<!-- Top Contact -->
							<div class="top-contact">
								<div class="single-contact"><ul class="social-icons">
									<li><a href="https://www.facebook.com/PIFIC-Public-Investment-Facility-for-Infrastructure-Constraints-104338121467371/"><i class="fa fa-facebook"></i></a></li>
									<li><a href="https://twitter.com/Pific2"><i class="fa fa-twitter"></i></a></li>
									<li><a href="https://www.linkedin.com/in/pific-bd-599b15213/"><i class="fa fa-linkedin"></i></a></li>
									<li><a href="https://www.instagram.com/pificbd/"><i class="fa fa-instagram"></i></a></li>
									<li><a href="https://www.youtube.com/channel/UC6p1A9X0z-Lz5Jpx0N36kaw"><i class="fa fa-youtube"></i></a></li>
								</ul>	</div>

							</div>
							<!-- End Top Contact -->
						</div>
						<div class="col-lg-4 col-12">
							<div class="topbar-right">
								<!-- Social Icons -->
								<div class="button">
									<a href="{{ url('/apply', []) }}" class="bizwheel-btn">APPLY NOW</a>
								</div>
								<ul class="social-icons">
									<li><a href="#"> </a></li>
									<li><a href="#">EN</a></li>
									<li><a href="#">BN</a></li>

								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!--/ End Topbar -->
			<!-- Middle Header -->
			<div class="middle-header">
				<div class="container">
					<div class="row">
						<div class="col-12">
							<div class="middle-inner">
								<div class="row">
									<div class="col-lg-2 col-md-3 col-12">
										<!-- Logo -->
										<div class="logo">
											<!-- Image Logo -->
											<div class="img-logo">
												<a href="{{ url('/', []) }}">
													<img src="{{ asset('pific-web-site') }}/img/logo.png" alt="#">
													{{-- <h3 style="color: darkcyan; font-size: xx-large; font-weight: bolder; border: 1px solid darkcyan;">PIFIC</h3> --}}
												</a>
											</div>
										</div>
										<div class="mobile-nav"></div>
									</div>
									<div class="col-lg-10 col-md-9 col-12">
										<div class="menu-area">
											<!-- Main Menu -->
											<nav class="navbar navbar-expand-lg">
												<div class="navbar-collapse">
													<div class="nav-inner">
														<div class="menu-home-menu-container">
															<!-- Naviagiton -->
															<ul id="nav" class="nav main-menu menu navbar-nav">
																<li><a href="{{ url('/', []) }}">HOME</a></li>
																<li class="icon-active"><a href="">ABOUT</a>
																	<ul class="sub-menu">
                                                                        <li><a href="{{ url('/about', []) }}">ABOUT US</a></li>
                                                                        <li><a href="{{ url('/pific-teams', []) }}">OUR TEAM</a></li>
                                                                        <li><a href="{{ url('/our-program', []) }}">OUR PROGRAM</a></li>

																	</ul>
																</li>

																<!-- <li><a href="portfolio.html">Our Portfolio</a></li> -->
																<li class="icon-active"><a href="#">GRS</a>
																	<ul class="sub-menu">
																		<li><a href="localgrc.html">ABOUT GRC</a></li>
																		<li><a href="localgrc.html">LOCAL GRC</a></li>
																		<li><a href="levelgrc.html">PROJECT LEVEL GRC</a></li>
																	</ul>
																</li>
																<li><a href="{{ url('/news', []) }}">NEWS & EVENT</a>

																</li>
																<li><a href="{{ url('/database', []) }}">DATABASE</a></li>
                                                                <li><a href="https://boithok.syssolution.com.bd/">SYSBOITHOK</a></li>
																<li><a href="{{ url('/contact', []) }}">CONTACT US</a></li>
															</ul>
															<!--/ End Naviagiton -->
														</div>
													</div>
												</div>
											</nav>
											<!--/ End Main Menu -->
											<!-- Right Bar -->

											<div class="right-bar">
												<!-- Search Bar -->
												<ul class="right-nav">
													<li class="top-search"><a href="#0"><i class="fa fa-search"></i></a></li>
													<li class="bar"><a class="fa fa-bars"></a></li>
												</ul>
												<!--/ End Search Bar -->
												<!-- Search Form -->
												<div class="search-top">
													<form action="#" class="search-form" method="get">
														<input type="text" name="s" value="" placeholder="Search here"/>
														<button type="submit" id="searchsubmit"><i class="fa fa-search"></i></button>
													</form>
												</div>
												<!--/ End Search Form -->
											</div>
											<!--/ End Right Bar -->
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!--/ End Middle Header -->
			<!-- Sidebar Popup -->
			<div class="sidebar-popup">
				<div class="cross">
					<a class="btn"><i class="fa fa-close"></i></a>
				</div>
				<div class="single-content">
					<h4>ABOUT PIFIC</h4>
					<p> Public Investment Facility for Infrastructure Constraints (PIFIC) is a cluster-based facility of the EC4J Project under the Ministry of Commerce and is financed by the World Bank.</p>
					<!-- Social Icons -->
					<ul class="social">
						<li><a href="#"><i class="fa fa-facebook"></i></a></li>
						<li><a href="#"><i class="fa fa-twitter"></i></a></li>
						<li><a href="#"><i class="fa fa-linkedin"></i></a></li>
						<li><a href="#"><i class="fa fa-dribbble"></i></a></li>
					</ul>
				</div>
				<div class="single-content">
					<h4>Important Links</h4>
					<ul class="links">
						<li><a href="#">About Us</a></li>
						<li><a href="#">GRS</a></li>
						<!-- <li><a href="#">Portfolio</a></li> -->
						<!-- <li><a href="#">Pricing Plan</a></li> -->
						<li><a href="#">NEWS & EVENT</a></li>
						<li><a href="#">CONTACT US</a></li>
					</ul>
				</div>
			</div>
			<!--/ Sidebar Popup -->
		</header>
		<!--/ End Header -->

        @yield('content')

		<!-- Footer -->
		<footer class="footer" style="background-image:url('pific-web-site/img/map.png')">
			<!-- Footer Top -->
			<div class="footer-top">
				<div class="container">
					<div class="row">
						<div class="col-lg-3 col-md-6 col-12">
							<!-- Footer About -->
							<div class="single-widget footer-about widget">
								<div class="logo">
									<div class="img-logo">
										<a class="logo" href="index.html">
											<!-- <img class="img-responsive" src="img/logo2.png" alt="logo"> -->
											<h3 style="color: white; font-size: xx-large; font-weight: bolder;">PIFIC</h3>

										</a>
									</div>
								</div>
								<div class="footer-widget-about-description">
									<p>PIFIC is a cluster based facility that will create infrastructural facilities and new jobs across Bangladesh...</p>
								</div>
								<div class="social">
									<!-- Social Icons -->
									<ul class="social-icons">
										<li><a class="facebook" href="https://www.facebook.com/PIFIC-Public-Investment-Facility-for-Infrastructure-Constraints-104338121467371/" target="_blank"><i class="fa fa-facebook"></i></a></li>
										<li><a class="twitter" href="https://twitter.com/Pific2" target="_blank"><i class="fa fa-twitter"></i></a></li>
										<li><a class="linkedin" href="https://www.linkedin.com/in/pific-bd-599b15213/" target="_blank"><i class="fa fa-linkedin"></i></a></li>
										<li><a class="instagram" href="https://www.instagram.com/pificbd/" target="_blank"><i class="fa fa-instagram"></i></a></li>
                                        <li><a href="https://www.youtube.com/channel/UC6p1A9X0z-Lz5Jpx0N36kaw"><i class="fa fa-youtube"></i></a></li>
									</ul>
								</div>
								{{-- <div class="button"><a href="#" class="bizwheel-btn">SUPPORTS LINKS</a></div> --}}
							</div>
							<!--/ End Footer About -->
						</div>
						<div class="col-lg-2 col-md-6 col-12">
							<!-- Footer Links -->
							<div class="single-widget f-link widget">
								<h3 class="widget-title">Quick Links
								</h3>
								<ul>
									<li><a href="{{ url('/about', []) }}">ABOUT</a></li>
									<li><a href="#">GRS</a></li>
									<!-- <li><a href="#">Portfolio</a></li> -->
									<li><a href="{{ url('/news', []) }}">NEWS & EVENTS</a></li>
									<li><a href="{{ url('/contact', []) }}">CONTACT US</a></li>
								</ul>
							</div>
							<!--/ End Footer Links -->
						</div>
						<div class="col-lg-4 col-md-6 col-12">
							<!-- Footer News -->
							<div class="single-widget footer-news widget">
								<h3 class="widget-title">News Page</h3>
								<!-- Single News -->
								<div class="single-f-news">
									<div class="post-thumb"><a href="#"><img src="{{ asset('pific-web-site') }}/img/news/1.jpg" alt="#"></a></div>
									<div class="content">
										<p class="post-meta"><time class="post-date"><i class="fa fa-clock-o"></i>Dec 9, 2020</time></p>
										<h4 class="title"><a href="#">PIFIC & Project launch Date</a></h4>
									</div>
								</div>
								<!--/ End Single News -->
								<!-- Single News -->
								<div class="single-f-news">
									<div class="post-thumb"><a href="#"><img src="{{ asset('pific-web-site') }}/img/news/2.jpg" alt="#"></a></div>
									<div class="content">
										<p class="post-meta"><time class="post-date"><i class="fa fa-clock-o"></i>Dec 9, 2020</time></p>
										<h4 class="title"><a href="blog-sngle.html">PIFIC Provide Best &amp; Creative Consulting Service</a></h4>
									</div>
								</div>
								<!--/ End Single News -->
							</div>
							<!--/ End Footer News -->
						</div>
						<div class="col-lg-3 col-md-6 col-12">
							<!-- Footer Contact -->
							<div class="single-widget footer_contact widget">
								<h3 class="widget-title">Contact</h3>
								<p>Address-Level- 8A, House No-9, Road No-105, Gulshan 2, Dhaka.</p>
								<ul class="address-widget-list">
									<li class="footer-mobile-number"><i class="fa fa-phone"></i>+(88)0255 0598 01/2</li>
									<li class="footer-mobile-number"><i class="fa fa-envelope"></i>info@pific-bd.com</li>
									<li class="footer-mobile-number"><i class="fa fa-map-marker"></i>Gulshan 2, Dhaka.</li>
								</ul>
							</div>
							<!--/ End Footer Contact -->
						</div>
					</div>
					<div class="row">
						<div class="col-lg-6 offset-lg-3 col-md-8 offset-md-2 col-12">
							<!-- Footer Newsletter -->


							<!--/ End Footer Newsletter -->
						</div>
					</div>
				</div>
			</div>
			<!-- Copyright -->
			<div class="copyright">
				<div class="container">
					<div class="row">
						<div class="col-12">
							<div class="copyright-content">
								<!-- Copyright Text -->
								<p>© Copyright <a href="#">PIFIC</a>. Design &amp; Development By <a target="_blank" href="#">SYSSOLUTION</a></p>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!--/ End Copyright -->
		</footer>

		<!-- Jquery JS -->

		<script src="{{ asset('pific-web-site') }}/js/jquery.min.js"></script>
		<script src="{{ asset('pific-web-site') }}/js/jquery.lazyload.js"></script>
		<script src="{{ asset('pific-web-site') }}/js/jquery-migrate-3.0.0.js"></script>
		<!-- Popper JS -->
		<script src="{{ asset('pific-web-site') }}/js/popper.min.js"></script>
		<!-- Bootstrap JS -->
		<script src="{{ asset('pific-web-site') }}/js/bootstrap.min.js"></script>
		<!-- Modernizr JS -->
		<script src="{{ asset('pific-web-site') }}/js/modernizr.min.js"></script>
		<!-- ScrollUp JS -->
		<script src="{{ asset('pific-web-site') }}/js/scrollup.js"></script>
		<!-- FacnyBox JS -->
		<script src="{{ asset('pific-web-site') }}/js/jquery-fancybox.min.js"></script>
		<!-- Cube Portfolio JS -->
		<script src="{{ asset('pific-web-site') }}/js/cubeportfolio.min.js"></script>
		<!-- Slick Nav JS -->
		<script src="{{ asset('pific-web-site') }}/js/slicknav.min.js"></script>
		<!-- Slick Nav JS -->
		<script src="{{ asset('pific-web-site') }}/js/slicknav.min.js"></script>
		<!-- Slick Slider JS -->
		<script src="{{ asset('pific-web-site') }}/js/owl-carousel.min.js"></script>
		<!-- Easing JS -->
		<script src="{{ asset('pific-web-site') }}/js/easing.js"></script>
		<!-- Magnipic Popup JS -->
		<script src="{{ asset('pific-web-site') }}/js/magnific-popup.min.js"></script>
		<!-- Active JS -->
		<script src="{{ asset('pific-web-site') }}/js/active.js"></script>

		<script src="{{ asset('pific-web-site') }}/ticker.js"></script>


        <script>

            $({ countNum: $('.code').html() }).animate({ countNum: 100000 }, {
                duration: 80000,
                easing: 'linear',
                step: function () {
                $('.code').html(Math.floor(this.countNum) + "+");
            },
            complete: function () {
                $('.code').html(this.countNum + "+");
                //alert('finished');
            }
            });

            $(function() {
                $("img.lazy").lazyload();
            });
        </script>

		<script>
			var leater="Leather is a durable and flexible material created by tanning animal rawhide and skins. Leather is used to make a variety of articles, including footwear, automobile seats, clothing, bags, book bindings, fashion accessories, and furniture";
			var lenth=200;
			var trim=leater.substring(0,lenth);
			$("#lea").html(trim);

			var plastic= "Plastics is the term commonly used to describe a wide range of synthetic or semi-synthetic materials that are used in a huge and growing range of applications. We use plastic products to help make our lives cleaner, easier, safer and more enjoyable.";
			var pla=plastic.substring(0,lenth);
			$("#pp").html(pla);

            var footer= "Footwear refers to garments worn on the feet, which originally serves to purpose of protection against adversities of the environment, usually regarding ground textures and temperature. Footwear in the manner of the shoes therefore primarily serves the purpose to ease the locomotion and prevent injuries";
            var ff=footer.substring(0,lenth);
			$("#ft").html(ff);

            var light= "Light Engineering Component solutions offered comprise solutions like ball screw, micron ball screws, mechanical ball screws, standard ball screws, flexible coupling and other industrial components.";
            var lig=light.substring(0,lenth);
			$("#li").html(lig);

			</script>
	</body>
</html>
