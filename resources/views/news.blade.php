
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
									<li><a href="blog-grid.html">News</a></li>
								</ul>
							</div>
							<!-- Bread Title -->
							<div class="bread-title"><h2>News & Event</h2></div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- / End Breadcrumb -->

		<!-- Blog Layout -->
		<section class="blog-layout news-default section-space">
			<div class="container">
                <div class="row justify-content-center">
                    <div class="bread-inner section-title">
                        <div class="bread-title"><h1><span> News </span>  </h1></div>
                    </div>
                </div>
                <div class="row ml-2">
                    <div class="bread-inner">
                        <div class="bread-title"><h1><span> News Paper Covrage</span>  </h1></div>
                    </div>
                </div>
				<div class="row ">
					<div class="col-lg-4 col-md-6 col-12">
						<!-- Single Blog -->
						<div class="single-news ">
							<div class="news-head overlay">
								<img class="lazy" src="{{ asset('pific-web-site') }}/img/news/paper-cut/1.png" alt="#">
								<ul class="news-meta">
									<li class="author"><a href="#"><i class="fa fa-user"></i>site</a></li>
									<li class="date"><i class="fa fa-calendar"></i>December 09, 2020</li>
									<li class="view"><i class="fa fa-comments"></i>1</li>
								</ul>
							</div>
							<div class="news-body">
								<div class="news-content">
									<h3 class="news-title"><a href="">PIFIC rolls out $40m fund for sectors today</a></h3>
									<div class="news-text"><p></p></div>
									{{-- <a href="blog-single.html" class="more">Continue reading <i class="fa fa-angle-double-right" aria-hidden="true"></i></a> --}}
								</div>
							</div>
						</div>
						<!--/ End Single Blog -->
					</div>
					<div class="col-lg-4 col-md-6 col-12">
						<!-- Single Blog -->
						<div class="single-news ">
							<div class="news-head overlay">
								<img class="lazy" src="{{ asset('pific-web-site') }}/img/news/paper-cut/2.png" alt="#">
								<ul class="news-meta">
									<li class="author"><a href="#"><i class="fa fa-user"></i>site</a></li>
									<li class="date"><i class="fa fa-calendar"></i>December 09, 2020</li>
									<li class="view"><i class="fa fa-comments"></i>0</li>
								</ul>
							</div>
							<div class="news-body">
								<div class="news-content">
									<h3 class="news-title"><a href=""> $40m fund to create 90,000 new jobs in 4 sectors</a></h3>
									<div class="news-text"><p></p></div>
									{{-- <a href="blog-single.html" class="more">Continue reading <i class="fa fa-angle-double-right" aria-hidden="true"></i></a> --}}
								</div>
							</div>
						</div>
						<!--/ End Single Blog -->
					</div>
					<div class="col-lg-4 col-md-6 col-12">
						<!-- Single Blog -->
						<div class="single-news ">
							<div class="news-head overlay">
								<img class="lazy" src="{{ asset('pific-web-site') }}/img/news/paper-cut/3.png" alt="#">
								<ul class="news-meta">
									<li class="author"><a href="#"><i class="fa fa-user"></i>site</a></li>
									<li class="date"><i class="fa fa-calendar"></i>December 09, 2020</li>
									<li class="view"><i class="fa fa-comments"></i>0</li>
								</ul>
							</div>
							<div class="news-body">
								<div class="news-content">
									<h3 class="news-title"><a href="">4 sectors earmarked for export diversification</a></h3>
									<div class="news-text"><p></p></div>
									{{-- <a href="blog-single.html" class="more">Continue reading <i class="fa fa-angle-double-right" aria-hidden="true"></i></a> --}}
								</div>
							</div>
						</div>
						<!--/ End Single Blog -->
				    </div>
                </div>
                <div class="row ml-2">
                    <div class="bread-inner">
                        <div class="bread-title"><h1><span> Media coverage </span>  </h1></div>
                    </div>
                </div>
				<div class="row ">
					<div class="col-lg-4 col-md-6 col-12">
						<!-- Single Blog -->
						<div class="single-news ">
							<div class="news-head">
								{{-- <img class="lazy" src="{{ asset('pific-web-site') }}/img/news/paper-cut/1.png" alt="#"> --}}
                                <iframe width="560" height="315" src="https://www.youtube.com/embed/333ZODhYzVI" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
								<ul class="news-meta">
									<li class="author"><a href="#"><i class="fa fa-user"></i>site</a></li>
									<li class="date"><i class="fa fa-calendar"></i>December 09, 2020</li>
									<li class="view"><i class="fa fa-comments"></i>1</li>
								</ul>
							</div>
							<div class="news-body">
								<div class="news-content">
									<h3 class="news-title"><a href="">PIFIC rolls out $40m fund for sectors today</a></h3>
									<div class="news-text"><p></p></div>
									{{-- <a href="blog-single.html" class="more">Continue reading <i class="fa fa-angle-double-right" aria-hidden="true"></i></a> --}}
								</div>
							</div>
						</div>
						<!--/ End Single Blog -->
					</div>
					<div class="col-lg-4 col-md-6 col-12">
						<!-- Single Blog -->
						<div class="single-news ">
							<div class="news-head overlay">
								{{-- <img class="lazy" src="{{ asset('pific-web-site') }}/img/news/paper-cut/2.png" alt="#"> --}}
                                <iframe width="560" height="315" src="https://www.youtube.com/embed/q50J1U72KtQ" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
								<ul class="news-meta">
									<li class="author"><a href="#"><i class="fa fa-user"></i>site</a></li>
									<li class="date"><i class="fa fa-calendar"></i>December 09, 2020</li>
									<li class="view"><i class="fa fa-comments"></i>0</li>
								</ul>
							</div>
							<div class="news-body">
								<div class="news-content">
									<h3 class="news-title"><a href=""> Four sectors earmarked for export diversification!</a></h3>
									<div class="news-text"><p></p></div>
									{{-- <a href="blog-single.html" class="more">Continue reading <i class="fa fa-angle-double-right" aria-hidden="true"></i></a> --}}
								</div>
							</div>
						</div>
						<!--/ End Single Blog -->
					</div>
					<div class="col-lg-4 col-md-6 col-12">
						<!-- Single Blog -->
						<div class="single-news ">
							<div class="news-head overlay">
								{{-- <img class="lazy" src="{{ asset('pific-web-site') }}/img/news/paper-cut/3.png" alt="#"> --}}
                                <iframe width="560" height="315" src="https://www.youtube.com/embed/S7eTqwWU_UM" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
								<ul class="news-meta">
									<li class="author"><a href="#"><i class="fa fa-user"></i>site</a></li>
									<li class="date"><i class="fa fa-calendar"></i>December 09, 2020</li>
									<li class="view"><i class="fa fa-comments"></i>0</li>
								</ul>
							</div>
							<div class="news-body">
								<div class="news-content">
									<h3 class="news-title"><a href="">Export Competitiveness for Jobs (EC4J) Project</a></h3>
									<div class="news-text"><p></p></div>
									{{-- <a href="blog-single.html" class="more">Continue reading <i class="fa fa-angle-double-right" aria-hidden="true"></i></a> --}}
								</div>
							</div>
						</div>
						<!--/ End Single Blog -->
				    </div>
                </div>
                <div class="row justify-content-center">
                    <div class="bread-inner section-title">
                        <div class="bread-title"><h1><span> Events </span>  </h1></div>
                    </div>
                </div>

                <div class="row ">
					<div class="col-lg-4 col-md-6 col-12">
						<!-- Single Blog -->
						<div class="single-news ">
							<div class="news-head overlay">
								<img class="lazy" src="{{ asset('pific-web-site') }}/img/recent-activity/new/1-min.JPG" alt="#">
								<ul class="news-meta">
									<li class="author"><a href="#"><i class="fa fa-user"></i>site</a></li>
									<li class="date"><i class="fa fa-calendar"></i>April 15, 2020</li>
									<li class="view"><i class="fa fa-comments"></i>0</li>
								</ul>
							</div>
							<div class="news-body">
								<div class="news-content">
									<h3 class="news-title"><a href="#">Bangladesh Leather Association</a></h3>
									<div class="news-text"><p>Meeting with Bangladesh Leather Association</p></div>
									<a href="#" class="more">Continue reading <i class="fa fa-angle-double-right" aria-hidden="true"></i></a>
								</div>
							</div>
						</div>
						<!--/ End Single Blog -->
					</div>
					<div class="col-lg-4 col-md-6 col-12">
						<!-- Single Blog -->
						<div class="single-news ">
							<div class="news-head overlay">
								<img class="lazy" src="{{ asset('pific-web-site') }}/img/recent-activity/new/2-min.JPG" alt="#">
								<ul class="news-meta">
									<li class="author"><a href="#"><i class="fa fa-user"></i>site</a></li>
									<li class="date"><i class="fa fa-calendar"></i>April 15, 2020</li>
									<li class="view"><i class="fa fa-comments"></i>0</li>
								</ul>
							</div>
							<div class="news-body">
								<div class="news-content">
									<h3 class="news-title"><a href="blog-single.html">Meeting with MOC</a></h3>
									<div class="news-text"><p>Meeting with the executive committee (MOC)</p></div>
									<a href="blog-single.html" class="more">Continue reading <i class="fa fa-angle-double-right" aria-hidden="true"></i></a>
								</div>
							</div>
						</div>
						<!--/ End Single Blog -->
					</div>
					<div class="col-lg-4 col-md-6 col-12">
						<!-- Single Blog -->
						<div class="single-news ">
							<div class="news-head overlay">
								<img class="lazy" src="{{ asset('pific-web-site') }}/img/recent-activity/new/3-min.jpg" alt="#">
								<ul class="news-meta">
									<li class="author"><a href="#"><i class="fa fa-user"></i>site</a></li>
									<li class="date"><i class="fa fa-calendar"></i>April 15, 2020</li>
									<li class="view"><i class="fa fa-comments"></i>0</li>
								</ul>
							</div>
							<div class="news-body">
								<div class="news-content">
									<h3 class="news-title"><a href="blog-single.html"> Meeting With The Plastic Association</a></h3>
									<div class="news-text"><p>Meeting with the Plastic Association</p></div>
									<a href="blog-single.html" class="more">Continue reading <i class="fa fa-angle-double-right" aria-hidden="true"></i></a>
								</div>
							</div>
						</div>
						<!--/ End Single Blog -->
					</div>
				</div>
                {{-- pigination-section --}}
				<div class="row">

					<div class="col-12">
						<!-- Pagination -->
						<div class="pagination-plugin">
							<ul class="pagination-list">
								<li class="prev"><a href="#">Prev</a></li>
								<li class="page-numbers"><a href="#">1</a></li>
								<li class="page-numbers current"><a href="#">2</a></li>
								<li class="page-numbers"><a href="#">3</a></li>
								<li class="next"><a href="#">Next</a></li>
							</ul>
						</div>
						<!--/ End Pagination -->
					</div>
				</div>
			</div>
		</section>
    @endsection
