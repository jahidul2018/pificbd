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
							<div class="bread-title"><h2>About PIFIC</h2></div>
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

					</div>
				</div>
			</div>
		</section>
        <section>
        <div class="continer">
            <div class="container">
                <div class="row justify-content-center">
                   <h3>Project Progress</h3>
                </div>
                <div class="container bars py-4">

                  <div id="bar1" class="progress my-4">
                    <div class="progress-bar active" role="progressbar" aria-valuenow="0" data-name="footware" aria-valuemin="0" aria-valuemax="100">
                      <span class="progress-bar-text">footwar </span>
                    </div>
                  </div>

                  <div id="bar2" class="progress my-4">
                    <div class="progress-bar active" role="progressbar" aria-valuenow="0" data-name="footware" aria-valuemin="0" aria-valuemax="100">
                      <span class="progress-bar-text"></span>
                    </div>
                  </div>

                  <div id="bar3" class="progress my-4">
                    <div class="progress-bar active" role="progressbar" aria-valuenow="0" data-name="footware" aria-valuemin="0" aria-valuemax="100">
                      <span class="progress-bar-text">ling</span>
                    </div>
                  </div>
                  <div id="bar4" class="progress my-4">
                    <div class="progress-bar active" role="progressbar" aria-valuenow="0" data-name="footware" aria-valuemin="0" aria-valuemax="100">
                      <span class="progress-bar-text">pls</span>
                    </div>
                  </div>
                </div>
            </div>
        </div>
        <style>
          .btn {
            display: block;
            width: 100%;
            padding: 4px 0px;
            font-size: 1em;
          }

          div.col-2{
            padding: 0;
            margin-right: 4px;
          }

          .container.bars{
            margin-top: 20px;
            border: 1px solid grey;
            background:rgba(112, 128, 144, 0.2)
          }
          .container.buttons{

            border: 1px solid grey;
            border-top: 0;
          }
          .progress {
            border-radius: 100px;
            background-color: #f8f9fa;
            box-shadow: 0px 0px 4px 1px rgba(0, 0, 0, 0.192);
          }

          .progress-bar.active {
            border-radius: 100px;
            background-color: #12e4eb;
          }

          .progress-bar.success {
            background-color: green;
            transition: width .6s ease, background-color .3s .3s ease-in;

          }

          .progress-bar.fail {
            background-color: red;
            transition: width .6s ease, background-color .3s .3s ease-in;

          }
          .progress-bar.fail-1 {
            background-color: rgb(168, 197, 39);
            transition: width .6s ease, background-color .3s .3s ease-in;

          }
          .progress-bar.fail-2 {
            background-color: rgb(0, 238, 255);
            transition: width .6s ease, background-color .3s .3s ease-in;

          }
          .progress-bar.fail-3 {
            background-color: rgb(115, 255, 0);
            transition: width .6s ease, background-color .3s .3s ease-in;

          }

          .progress-bar-text {
            font-weight: 500;
          }

        </style>
        </section>

        <section>
            <div class="container mt-4">
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
                                <div class="img-box"><img src="{{ asset('pific-web-site') }}/img/comment/Tipu-Munshi-Minister-of-Commerce.jpg" alt=""></div>
                                <p class="testimonial">The development of the country through our Export Diversification Trade Expansion Alternative Program is being implemented with World Bank funding under the Ministry of Commerce as part of various initiatives of our present government to increase youth participation.</p>
                                <p class="overview"><b>Tipu Munshi</b>Minister of Commerce</p>
                                <div class="star-rating"> </div>
                            </div>
                            <div class="item carousel-item">
                                <div class="img-box"><img src="{{ asset('pific-web-site') }}/img/comment/jafar.jpg" alt=""></div>
                                <p class="testimonial">The PIFIC program will help Bangladesh to be strongly connected to the international export sector. The PIFIC program under EC4J will play an improved role for traders in overcoming infrastructural problems.</p>
                                <p class="overview"><b> Dr Md. Jafar Uddin</b>Secretary, Bangladesh Ministry of Commerce </p>
                                <div class="star-rating"> </div>
                            </div>
                            {{-- <div class="item carousel-item">
                                <div class="img-box"><img src="https://i.imgur.com/J6l19aF.jpg" alt=""></div>
                                <p class="testimonial">Vestibulum quis quam ut magna consequat faucibus. Pellentesque eget nisi a mi suscipit tincidunt. Utmtc tempus dictum risus. Pellentesque viverra sagittis quam at mattis. Suspendisse potenti. Aliquam sit amet gravida nibh, facilisis gravida odio. Phasellus auctor velit.</p>
                                <p class="overview"><b>Antonio Moreno</b>Web Developer</p>
                                <div class="star-rating"> </div>
                            </div> --}}
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

        @endsection
        @section('script')
        <script>
            function init() {
                    $('.progress').each(function () {
                    $this = $(this);
                    var progressValue = $this.children().attr('aria-valuenow');
                    var dataname = $this.children().attr('data-name');
                    $this.children().width(progressValue + "%");
                    if (progressValue != 100) {
                        $this.children().children().text(dataname +" "+ progressValue + "%");
                    }
                })
            }
            function set(selector,name,value) {
                $(selector).children().removeClass('success fail');
                $(selector).children().attr('aria-valuenow', value);
                $(selector).children().attr('data-name', name);
                if(value>100){
                    console.log('value over 100');
                } else if(value == 100) {
                $(selector).children().attr('aria-valuenow', value);
                $(selector).children().children().html('<i class="fa fa-check"></i>');
                $(selector).children().addClass('success');
                } else if(value < 80) {
                    $(selector).children().addClass('fail');
                }
                else if(value < 90) {
                    $(selector).children().addClass('fail-1');
                }
                else if(value < 95) {
                    $(selector).children().addClass('fail-2');
                }
                else if(value < 97) {
                    $(selector).children().addClass('fail-3');
                }
                init();
            }
            set('#bar1','LEATHER', 79);
            set('#bar2','FOOTWEAR',85);
            set('#bar3','PLASTIC', 78);
            set('#bar4','LIGHT ENGINEERING', 91);
        </script>
    @endsection


