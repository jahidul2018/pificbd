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

		<!-- About Us -->
        <section class="services section-bg ">
		    <div class="container">
				<div class="row section-space">
                    <div class="col-lg-5 offset-lg-1 col-md-6 col-12">
						<!-- About Video -->
						<div class="modern">
							<!-- <div class="modern-img-feature"> -->
                                <!-- HTML -->

                            {{-- <div id="player-overlay">
                                <video style="width: 100%; heigrt:100%" controls autoplay class="video-fluid" autoplay loop muted width="100%">
                                <source src="{{ asset('pific-web-site') }}/PIFIC-6-5-21.mp4" type="video/mp4"  autoplay />
                                <source src="{{ asset('pific-web-site') }}/PIFIC-6-5-21.mp4" type="video/mp4" codecs="vp8, vorbis" autoplay />
                                <source src="{{ asset('pific-web-site') }}/PIFIC-6-5-21.mp4" type="video/mp4" codecs="theora, vorbis"  autoplay />
                                </video>
                            </div> --}}
							<img class="lazy" src="{{ asset('pific-web-site') }}/img/about/about.jpg" alt="#">
							{{-- <iframe width="1366" height="550" src="https://www.youtube.com/embed/stAyah-Gi4U" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe> --}}
						</div>
						<!--/End About Video  -->
					</div>
					<div class="col-lg-5 col-md-6 col-12">
						<div class="about-content section-title default text-left">
							<div class="section-top section-title-2">
								<h1><b>Public Investment Facility for
                                    Infrastructure Constraints (PIFIC) </b></h1>
							</div>
							<div class="section-bottom section-title-2">
								<div class="text">
									<p>Public Investment Facility for Infrastructure Constraints (PIFIC) is a cluster-based
                                        facility of the Export Competitiveness for Jobs (EC4J) Project implemented by the
                                        Ministry of Commerce (MoC) and funded by the World Bank. PIFIC will facilitate
                                        improvement to infrastructures for development of the targeted industry sectors. The
                                        PIFIC Facility will act as a filtering, prioritization and selection mechanism for
                                        project proposals to address industry-specific infrastructure constraints and provide
                                        the required engineering expertise to design and prepare the bidding documents for
                                        works contracts. The works contracts will be tendered and implemented by the
                                        Project Implementation Unit (PIU) of EC4J. </p>
                                        <p><b>Targeted sectors: </b></p>
                                        <ol style="color: black;" class="section-title-2">
                                            <li>Leather & leather goods </li>
                                            <li>Footwear (leather & non-leather) </li>
                                            <li> Plastics </li>
                                            <li>Light engineering (including Accumulator battery, Foundry, Die & mould, </li>
                                        </ol>
                                        <p>Automobile & Spare parts; with some sub-sectors such as: Agree machinery,
                                            General Machinery & parts, Construction machinery & parts, Industry
                                            Machineries and Pharmaceutical’s machineries).
                                        </p>

								</div>
								{{-- <div class="button">
									<a href="https://www.facebook.com/PIFIC-Public-Investment-Facility-for-Infrastructure-Constraints-104338121467371/" class="bizwheel-btn theme-2">Learn More<i class="fa fa-angle-right" style="background-color: #35B9BB; color:"></i></a>
								</div> --}}
							</div>
						</div>
                        <div class="about-content section-title default text-left">
							<div class="section-top section-title-2">
								<h1><b>Objectives</b></h1>
							</div>
							<div class="section-bottom section-title-2">
								<div class="text">

                                        {{-- <p><b>Targeted sectors: </b></p> --}}
                                        <ol style="color: black;" class="section-title-2">
                                            <li>PIFIC will act as a funding mechanism for technical assistance and investment in infrastructure to fill critical gaps affecting groups and clusters of industries.</li>
                                            <li>PIFIC will serve clusters of enterprises to ensure that the infrastructure project creates public goods benefits by building on and creating linkage externalities along supply chain.</li>
                                            <li>Projects to be solicited from industry associations, business groups and consortia of firms from the targeted sectors. </li>
                                            <li>Selected infrastructure projects will increase production and export capacity, improve social and environmental conditions and create jobs. </li>
                                            <li>Projects may also be proposed by local utility companies, local authorities, group of enterprises, regulatory agencies and technology centers.</li>
                                        </ol>
                                        {{-- <p>Automobile & Spare parts; with some sub-sectors such as: Agree machinery,
                                            General Machinery & parts, Construction machinery & parts, Industry
                                            Machineries and Pharmaceutical’s machineries).
                                        </p> --}}

								</div>
								{{-- <div class="button">
									<a href="https://www.facebook.com/PIFIC-Public-Investment-Facility-for-Infrastructure-Constraints-104338121467371/" class="bizwheel-btn theme-2">Learn More<i class="fa fa-angle-right" style="background-color: #35B9BB; color:"></i></a>
								</div> --}}
							</div>
						</div>
                        {{-- <div class="about-content section-title default text-left">
							<div class="section-top section-title-2">
								<h1><b>PIFIC Consultant</b></h1>
							</div>
							<div class="section-bottom section-title-2">
								<div class="text">
                                        <p><b>Targeted sectors: </b></p>
                                        <ol style="color: black;" class="section-title-2">
                                            <li>PIFIC Management Consultant is led by IMC Worldwide (UK) in association with BETS Consulting and Infrastructure Investment Facilitation Company (IIFC) of Bangladesh;</li>
                                            <li>PIFIC management consultancy will develop the pipeline of project proposals, draw up assistance agreements, assist with project preparation, evaluate proposals and recommend for selection to PIU and prepare bidding documents. </li>
                                            <li>Consultant will also support PIU in monitoring the performance of projects under PIU contract.</li>
                                        </ol>
								</div>
							</div>
						</div> --}}
					</div>
				</div>
			</div>
		</section>
         <!-- ======= Our Skills Section ======= -->

         <section>
            <div class="container">
                    <div class="row">
                        <div class="col-md-6">
                            <h3 class="progress-title">HTML5</h3>
                            <div class="progress">
                                <div class="progress-bar" style="width:65%; background:#1f75c4;">
                                    <span class="progress-icon fa fa-globe"></span>
                                    <div class="progress-value"><span>3</span>%</div>
                                </div>
                            </div>
                            <h3 class="progress-title">CSS3</h3>
                            <div class="progress orange">
                                <div class="progress-bar" style="width:90%; background:#f7810e;">
                                    <span class="progress-icon fa fa-rocket"></span>
                                    <div class="progress-value"><span>5</span>%</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
         </section>
        <section>
            <div class="container">
                <div class="row">
                    <div id="myCarousel" class="carousel slide" data-ride="carousel">
                        <!-- Carousel indicators -->
                        <ol class="carousel-indicators">
                            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                            <li data-target="#myCarousel" data-slide-to="1"></li>
                            <li data-target="#myCarousel" data-slide-to="2"></li>
                        </ol> <!-- Wrapper for carousel items -->
                        <div class="carousel-inner">
                            <div class="item carousel-item active">
                                <div class="img-box"><img src="https://i.imgur.com/Ur43esv.jpg" alt=""></div>
                                <p class="testimonial">Phasellus vitae suscipit justo. Mauris pharetra feugiat ante id lacinia. Etiam faucibus mauris id tempor egestas. Duis luctus turpis at accumsan tincidunt. Phasellus risus risus, volutpat vel tellus ac, tincidunt fringilla massa. Etiam hendrerit dolor eget rutrum.</p>
                                <p class="overview"><b>Paula Wilsons</b>Seo Analyst </p>
                                <div class="star-rating"> </div>
                            </div>
                            <div class="item carousel-item">
                                <div class="img-box"><img src="https://i.imgur.com/8RKXAIV.jpg" alt=""></div>
                                <p class="testimonial">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam eu sem tempor, varius quam at, luctus dui. Mauris magna metus, dapibus nec turpis vel, semper malesuada ante. Vestibulum idac nisl bibendum scelerisque non non purus. Suspendisse varius nibh non aliquet.</p>
                                <p class="overview"><b>Paula Wilson</b>Media Analyst </p>
                                <div class="star-rating"> </div>
                            </div>
                            <div class="item carousel-item">
                                <div class="img-box"><img src="https://i.imgur.com/J6l19aF.jpg" alt=""></div>
                                <p class="testimonial">Vestibulum quis quam ut magna consequat faucibus. Pellentesque eget nisi a mi suscipit tincidunt. Utmtc tempus dictum risus. Pellentesque viverra sagittis quam at mattis. Suspendisse potenti. Aliquam sit amet gravida nibh, facilisis gravida odio. Phasellus auctor velit.</p>
                                <p class="overview"><b>Antonio Moreno</b>Web Developer</p>
                                <div class="star-rating"> </div>
                            </div>
                        </div> <!-- Carousel controls --> <a class="carousel-control left carousel-control-prev" href="#myCarousel" data-slide="prev"> <i class="fa fa-angle-left"></i> </a> <a class="carousel-control right carousel-control-next" href="#myCarousel" data-slide="next"> <i class="fa fa-angle-right"></i> </a>
                    </div>
                </div>
            </div>
            <style>

                        .carousel {
                            width: 650px;
                            margin: 0 auto;
                            padding-bottom: 50px
                        }

                        .carousel .item {
                            color: #999;
                            font-size: 14px;
                            text-align: center;
                            overflow: hidden;
                            min-height: 340px
                        }

                        .carousel .item a {
                            color: #eb7245
                        }

                        .carousel .img-box {
                            width: 145px;
                            height: 145px;
                            margin: 0 auto;
                            border-radius: 50%
                        }

                        .carousel .img-box img {
                            width: 100%;
                            height: 100%;
                            display: block;
                            border-radius: 50%
                        }

                        .carousel .testimonial {
                            padding: 30px 0 10px
                        }

                        .testimonial {
                            color: #000000;
                            font: Times Roman
                        }

                        .carousel .overview {
                            text-align: center;
                            padding-bottom: 5px
                        }

                        .carousel .overview b {
                            color: #333;
                            font-size: 15px;
                            text-transform: uppercase;
                            display: block;
                            padding-bottom: 5px
                        }

                        .carousel .star-rating i {
                            font-size: 18px;
                            color: #ffdc12
                        }

                        .carousel .carousel-control {
                            width: 30px;
                            height: 30px;
                            border-radius: 50%;
                            background: #999;
                            text-shadow: none;
                            top: 4px
                        }

                        .carousel-control i {
                            font-size: 20px;
                            margin-right: 2px
                        }

                        .carousel-control.left {
                            left: auto;
                            right: 40px
                        }

                        .carousel-control.right i {
                            margin-right: -2px
                        }

                        .carousel .carousel-indicators {
                            bottom: 15px
                        }

                        .carousel-indicators li,
                        .carousel-indicators li.active {
                            width: 11px;
                            height: 11px;
                            margin: 1px 5px;
                            border-radius: 50%
                        }

                        .carousel-indicators li {
                            background: #e2e2e2;
                            border-color: transparent
                        }

                        .carousel-indicators li.active {
                            border: none;
                            background: #888
                        }
            </style>
        </section>
		<!--/ End About Us -->
        @endsection


