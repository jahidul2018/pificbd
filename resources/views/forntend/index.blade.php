@extends('layouts.app')
@section('content')

   <!-- Hero Slider -->
   <section class="">
    <div id="demo" class="carousel slide" data-ride="carousel">
        <!-- Indicators -->
        <ul class="carousel-indicators">
        <li data-target="#demo" data-slide-to="0" class="active"></li>
        <li data-target="#demo" data-slide-to="1"></li>
        <li data-target="#demo" data-slide-to="2"></li>
        <li data-target="#demo" data-slide-to="3"></li>
        <li data-target="#demo" data-slide-to="4"></li>
        </ul>

        <!-- The slideshow -->
        <div class="carousel-inner" width="450px">
        <div class="carousel-item active">
            {{-- {{ asset('pific-web-site') }}/img/slider/mini/1-min.jpg --}}
            <img class="lazy" src="{{ asset('pific-web-site') }}/img/slider/mini/1-min.jpg" alt="prime minister of bangladesh sheikh hasina image " width="1100" height="460">
        </div>
        <div class="carousel-item">
            <img  class="lazy" src="{{ asset('pific-web-site') }}/img/slider/mini/1.2-min.jpg" alt="tipu munshi minister of commerce images" width="1100" height="460">
        </div>
        <div class="carousel-item">
            <img  class="lazy" src="{{ asset('pific-web-site') }}/img/slider/mini/2-min.jpg" alt="Zafar" width="1100" height="460">
        </div>
        <div class="carousel-item">
            <img  class="lazy" src="{{ asset('pific-web-site') }}/img/slider/mini/piu-team-min.jpg" alt="tipu munshi minister of commerce images" width="1100" height="460">
        </div>
        <div class="carousel-item">
            <img  class="lazy" src="{{ asset('pific-web-site') }}/img/slider/mini/3-min.jpg" alt="dr. md. jafar uddin secretary of commerce images " width="1100" height="460">
        </div>
        <div class="carousel-item">
            <img  class="lazy" src="{{ asset('pific-web-site') }}/img/slider/mini/4-min.jpg" alt="Public Investment Facility for Infrastructure Constraints
            <!--Translate this page-->
            <!--$40 million infrastructure fund to boost Bangladesh exports. বাংলাদেশের PIFIC boosts export competitiveness in four sectors." widtzh="1100" height="460">-->
        </div>
        <div class="carousel-item">
            <img  class="lazy" src="{{ asset('pific-web-site') }}/img/slider/mini/5-min.jpg" alt="Public Investment Facility for Infrastructure Constraints
            <!--Translate this page-->
            <!--$40 million infrastructure fund to boost Bangladesh exports. বাংলাদেশের PIFIC boosts export competitiveness in four sectors." width="1100" height="460">-->
        </div>
        <div class="carousel-item">
            <img  class="lazy" src="{{ asset('pific-web-site') }}/img/slider/mini/6-min.jpg" alt="Public Investment Facility for Infrastructure Constraints
            <!--Translate this page-->
            <!--$40 million infrastructure fund to boost Bangladesh exports. বাংলাদেশের PIFIC boosts export competitiveness in four sectors." width="1100" height="460">-->
        </div>
        </div>

        <!-- Left and right controls -->
        <a class="carousel-control-prev" href="#demo" data-slide="prev">
        <span class="carousel-control-prev-icon"></span>
        </a>
        <a class="carousel-control-next" href="#demo" data-slide="next">
        <span class="carousel-control-next-icon"></span>
        </a>
    </div>
</section>
<!--/ End Hero Slider -->
<section>
<div class="ticker-container-2">
    <div class="ticker-container">

        <div class="col-sm-2 ticker-caption">
            <p>{{ __('index.news_section') }}</p>
        </div>
        <div class="news-list">
            <ul>
            <div>
                <li><span>{{ __('index.news_section_news1_heading') }}  &ndash; <a href="#">{{ __('index.news_section_news1') }} </a></span></li>
            </div>
            <div>
                <li><span> {{ __('index.news_section_news2_heading') }}  &ndash; <a href="#">{{ __('index.news_section_news2') }} </a></span></li>
            </div>
            <div>
                <li><span> {{ __('index.news_section_news3_heading') }}  &ndash; <a href="#">{{ __('index.news_section_news3') }}</a></span></li>
            </div>
            <div>
                <li><span> {{ __('index.news_section_news4_heading') }}  &ndash; <a href="#">{{ __('index.news_section_news4') }}</a></span></li>
            </div>
            <div>
                <li><span> {{ __('index.news_section_news5_heading') }}  &ndash; <a href="#">{{ __('index.news_section_news5') }}</a></span></li>
            </div>
            </ul>
        </div>
    </div>

    </div>
</section>
<!--/ End Hero Slider -->
<!-- Features Area -->
<section class="features-area section-bg">
<div class="container">
    <div class="row">
        <div class="col-lg-3 col-md-6 col-12">
            <!-- Single Feature -->
            <div class="single-feature">
                <div class="icon-head">
                    <!-- <i class="fa fa-podcast"></i> -->
                    <img  class="lazy" src="{{ asset('pific-web-site') }}/img/section/new/l-min.jpg" alt="#">
                </div>
                <h4><a href="service-single.html">{{ __('index.leaTitle') }}</a></h4>
                <p id="lea">{{ __('index.lea') }}</p>
                {{-- <div class="button">
                    <a href="service-single.html" class="bizwheel-btn"><i class="fa fa-arrow-circle-o-right"></i>Learn More</a>
                </div> --}}
            </div>
            <!--/ End Single Feature -->
        </div>
        <div class="col-lg-3 col-md-6 col-12">
            <!-- Single Feature -->
            <div class="single-feature">
                <div class="icon-head">
                    <!-- <i class="fa fa-podcast"></i> -->
                    <img  class="lazy" src="{{ asset('pific-web-site') }}/img/section/new/f-min.jpg" alt="#">
                </div>
                <h4><a href="service-single.html">{{ __('index.ftTitle') }}</a></h4>
                <p id="ft">{{ __('index.ft') }}</p>
                {{-- <div class="button">
                    <a href="service-single.html" class="bizwheel-btn"><i class="fa fa-arrow-circle-o-right"></i>Learn More</a>
                </div> --}}
            </div>
            <!--/ End Single Feature -->
        </div>
        <div class="col-lg-3 col-md-6 col-12">
            <!-- Single Feature -->
            <div class="single-feature">
                <div class="icon-head">
                    <!-- <i class="fa fa-podcast"></i> -->
                    <img  class="lazy" src="{{ asset('pific-web-site') }}/img/section/new/p-min.jpg" alt="#">
                </div>
                <h4><a href="service-single.html">{{ __('index.ppTitle') }}</a></h4>
                <p id="pp">{{ __('index.pp') }}</p>
                {{-- <div class="button">
                    <a href="service-single.html" class="bizwheel-btn"><i class="fa fa-arrow-circle-o-right"></i>Learn More</a>
                </div> --}}
            </div>
            <!--/ End Single Feature -->
        </div>

        <div class="col-lg-3 col-md-6 col-12">
            <!-- Single Feature -->
            <div class="single-feature">
                <div class="icon-head">
                    <!-- <i class="fa fa-podcast"></i> -->
                    <img  class="lazy" src="{{ asset('pific-web-site') }}/img/section/new/li-min.jpg" alt="#">
                </div>
                <h4><a href="service-single.html">{{ __('index.liTitle') }}</a></h4>
                <p id="li">{{ __('index.li') }}</p>
                {{-- <div class="button">
                    <a href="service-single.html" class="bizwheel-btn"><i class="fa fa-arrow-circle-o-right"></i>Learn More</a>
                </div> --}}
            </div>
            <!--/ End Single Feature -->
        </div>
    </div>
</div>
</section>
		<!--/ End Features Area -->
		<!-- pific-overview -->
        <!-- who we are-->
        <section class="services section-bg ">
            <div class="container">
                <div class="row section-space">
                    <div class="col-lg-5 col-md-6 col-12">
                        <div class=" about-content section-title-2 default text-left">
                            <div class="">
                                <div class="section-top mt-2">
                                    <h1><b>{{ __('index.who_we_are_section_title') }}</b></h1>
                                </div>
                                <div class="section-bottom">
                                    <div class="text">
                                        <br>
                                        <p>{{ __('index.who_we_are_section_p1') }}</p>
                                        <p>{{ __('index.who_we_are_section_p2') }} </p>
                                        <p> {{ __('index.who_we_are_section_p2') }}</p>
                                    </div>
                                    <div class="button">
                                        {{-- <a href="about.html" style="background-color: #35B9BB" class="bizwheel-btn theme-2">Learn More<i class="fa fa-angle-right"></i></a> --}}
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-5 offset-lg-1 col-md-6 col-12">
                        <!-- About Video -->
                        <div class=" modern">
                            <div id="player-overlay">
                                <iframe width="1904" height="450" src="https://www.youtube.com/embed/KsLVDQ-VGqU" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                            </div>
                            <!-- <img src="https://via.placeholder.com/800x725" alt="#"> -->
                            {{-- <iframe width="1366" height="550" src="https://www.youtube.com/embed/stAyah-Gi4U" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe> --}}
                        </div>
                        <!--/End About Video  -->
                    </div>
                </div>
            </div>
        </section>

     <!--launch date-->
     <section class="call-action overlay" style="background-image:url('http://pificbd.syssolution.com.bd/pific-web-site/img/opening-image.jpg')">
        <div class="container">
            <div class="row">
                <div class="col-lg-9 col-12">
                    <div class="call-inner">
                        <h2>{{ __('index.launch_section_title') }}</h2>
                        <p>{{ __('index.launch_section_p1') }}</p>
                    </div>
                </div>
                <div class="col-lg-3 col-12">
                    <div class="button">
                        <a href="{{ url('/news') }}" class="bizwheel-btn">{{ __('index.launch-section_date') }}</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
     <!-- service-we-provide -->
    <section class="services section-bg mb-4">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-title defult text-center">
                        <div class="section-top mt-2">
                            <h1><span>{{ __('index.service_section_title') }}</span></h1>
                                <p>{{ __('index.service_section_p1') }}</p>
                        </div>
                        <div class="section-bottom">
                            <div class="text-style-two">

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-3 col-md-3 col-3">

                    <div class="single-service">
                        <div class="service-head">
                            <img  class="lazy" src="{{ asset('pific-web-site') }}/img/service/1.jpg" alt="#">

                            <!--<div class="icon-bg"><i class="fa fa-handshake-o"></i></div>-->
                        </div>
                        <div class="service-content">
                             <!-- <h4><a href="service-business.html">Technical and advisory assistance</a></h4>

                            <p>Business Strategy Specialized technical and advisory assistance Services Provided by PIFIC</p>  -->

                        </div>
                    </div>

                </div>
                <div class="col-lg-3 col-md-3 col-3">

                    <div class="single-service">
                        <div class="service-head">
                            <img  class="lazy" src="{{ asset('pific-web-site') }}/img/service/2.jpg" alt="#">

                            <!--<div class="icon-bg"><i class="fa fa-html5"></i></div>-->
                        </div>
                        <div class="service-content">
                            <!-- <h4><a href="service-develop.html">Help applicants’ proposal and business case </a></h4>
                            <p>PIFIC Help applicants building proposal and business case.As well as Supervision & Monitoring by PIFIC</p> -->

                        </div>
                    </div>

                </div>
                <div class="col-lg-3 col-md-3 col-3">
                    <div class="single-service">
                        <div class="service-head">
                            <img  class="lazy" src="{{ asset('pific-web-site') }}/img/service/3.jpg" alt="#">
                            <!--<div class="icon-bg"><i class="fa fa-cube"></i></div>-->
                        </div>
                        <div class="service-content">
                            <!-- <h4><a href="service-market.html">Feasibility study, Engineering Design, Drawings, Bid Doc</a></h4>
                            <p>Feasibility study, Technical design,Drawings, Tender documentation.Construction by PIU/MOC</p> -->
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-3">
                    <div class="single-service">
                        <div class="service-head">
                            <img  class="lazy" src="{{ asset('pific-web-site') }}/img/service/4.jpg" alt="#">
                            <!--<div class="icon-bg"><i class="fa fa-cube"></i></div>-->
                        </div>
                        <div class="service-content">
                            <!-- <h4><a href="service-market.html">Construction by PIU/MOC</a></h4>
                            <p>Feasibility study, Technical design,Drawings, Tender documentation.Construction by PIU/MOC</p> -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
     <!-- service-we-provide -->

		<!-- recent-activity -->
    <section class="portfolio">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 offset-lg-3 col-md-8 offset-md-2 col-12">
                    <div class="section-title default text-center">
                        <div class="section-top mt-2">
                            <h1><span>{{ __('index.recent_activity_section_title') }}</span>

                            </h1>
                        </div>
                        <div class="section-bottom">
                            <div class="text">
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

                                            <div class="single-feature single-portfolio">
                                                <div class="portfolio-head">
                                                    <img class="lazy" src="{{ asset('pific-web-site') }}/img/recent-activity/new/9-min.jpg" alt="#">

                                                </div>
                                                <div class="portfolio-content">
                                                    <h4><a href="#">   {{ __('index.recent_activity_section_1_h1') }} </a></h4>
                                                    <p> {{ __('index.recent_activity_section_1_p1') }}</p>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                    <div class="card">
                                        <div class="cbp-item business animation">
                                            <div class="single-feature single-portfolio">
                                                <div class="portfolio-head ">
                                                    <img class="lazy" src="{{ asset('pific-web-site') }}/img/recent-activity/new/2-min.jpg" alt="#">

                                                </div>
                                                <div class="portfolio-content">
                                                    <h4><a href="#"> {{ __('index.recent_activity_section_2_h2') }}
                                                    </a></h4>
                                                    <p> {{ __('index.recent_activity_section_2_p2') }}

                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card">
                                        <div class="cbp-item business animation">
                                            <div class="single-feature single-portfolio">
                                                <div class="portfolio-head ">
                                                        <img class="lazy" src="{{ asset('pific-web-site') }}/img/recent-activity/new/10-min.jpg" alt="#">

                                                </div>
                                                <div class="portfolio-content">
                                                    <h4><a href="#" >{{ __('index.recent_activity_section_3_h3') }}
                                                    </a></h4>
                                                    <p>{{ __('index.recent_activity_section_3_p3') }}

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
                                            <div class="single-feature single-portfolio">
                                                <div class="portfolio-head ">
                                                    <img class="lazy" src="{{ asset('pific-web-site') }}/img/recent-activity/new/11-min.jpg" alt="#">

                                                </div>

                                                <div class="portfolio-content">
                                                    <h4><a href="#"> {{ __('index.recent_activity_section_4_h4') }}</a></h4>
                                                    <p>{{ __('index.recent_activity_section_4_p4') }}

                                                    </p>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                    <div class="card">
                                        <div class="cbp-item business animation">

                                            <div class="single-feature single-portfolio">
                                                <div class="portfolio-head ">
                                                    <img class="lazy" src="{{ asset('pific-web-site') }}/img/recent-activity/new/5-min.jpg" alt="#">

                                                </div>
                                                <div class="portfolio-content">
                                                    <h4><a href="#"> {{ __('index.recent_activity_section_5_h5') }}</a></h4>
                                                    <p>{{ __('index.recent_activity_section_5_p5') }}</p>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                    <div class="card">
                                        <div class="cbp-item business animation">
                                            <div class="single-feature single-portfolio">
                                                <div class="portfolio-head ">
                                                        <img class="lazy" src="{{ asset('pific-web-site') }}/img/recent-activity/new/6-min.jpg" alt="#">

                                                </div>
                                                <div class="portfolio-content">
                                                    <h4><a href="#">{{ __('index.recent_activity_section_6_h6') }}</a></h4>
                                                    <p>{{ __('index.recent_activity_section_6_p6') }}</p>
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
		<!--hit count -->
    <section class="call-action mt-4" style="">
        <div class="container">
            <div class="row justify-content-center" style="background-color: rgba(166, 216, 253, 0.405)">
                <div class="container">
                    <div class="row text-center">
                        <div class="col-md-12 col-12 text-white">
                            {{-- offset-md-1 --}}
                            <div class="row">
                                <div class="col-md-3 col-12">
                                    <!-- Badge Code - Do Not Change The Code -->
                                    <div class="single-feature mb-4">
                                        <div class="item-animate">
                                            {{-- <h4 class="code">01000</h4> --}}


                                               <a class="hitCounter" target="_blank" title="Hit counter" data-name="cb5fddde62724450c38ba9863d591008|5|page|1|rgb(255, 255, 255);|rgb(0, 0, 0);|large|s-hit">Hit Counter</a><script>document.write("<script type='text/javascript' src='https://visitorshitcounter.com/js/hitCounter.js?v="+Date.now()+"'><\/script>");</script>


                                        </div>
                                        <h3 class="" style="color: rgb(35, 115, 201); fornt-size:14px"> {{ __('index.count_section_1_h1') }} </h3>
                                        <!-- Badge Code End Here -->
                                    </div>
                                </div>
                                <div class="col-md-3 col-12">
                                    <div class="single-feature mb-4">
                                        <div class="item-animate">
                                            <h3 class="code">0001</h3>
                                            {{-- <a class="hitCounter" href="https://visitorshitcounter.com/" target="_blank" title="Hit counter" data-name="cb5fddde62724450c38ba9863d591008|5|page|1|rgb(255, 255, 255);|rgb(0, 0, 0);|large|s-hit">Hit Counter</a><script>document.write("<script type='text/javascript' src='https://visitorshitcounter.com/js/hitCounter.js?v="+Date.now()+"'><\/script>");</script> --}}
                                        </div>
                                        <h3 class="" style="color: rgb(35, 115, 201); fornt-size:14px"> {{ __('index.count_section_1_h2') }} </h3>

                                    </div>
                                </div>
                                <div class="col-md-3 col-12">
                                    <div class="single-feature mb-4">
                                        <div class="item-animate">
                                            <h3 class="code" >0001</h3>
                                            {{-- <a class="hitCounter" href="https://visitorshitcounter.com/" target="_blank" title="Hit counter" data-name="cb5fddde62724450c38ba9863d591008|5|page|1|rgb(250, 250, 250);|rgb(0, 0, 0);|large|s-hit">Hit Counter</a><script>document.write("<script type='text/javascript' src='https://visitorshitcounter.com/js/hitCounter.js?v="+Date.now()+"'><\/script>");</script> --}}
                                        </div>
                                        <h3 class="" style="color: rgb(35, 115, 201); fornt-size:14px"> {{ __('index.count_section_1_h3') }}</h3>

                                    </div>
                                </div>
                                <div class="col-md-3 col-12">
                                    {{-- <div class="counter bg-info rounded mb-4"> --}}
                                        <div class="single-feature mb-4">
                                        <div class="item-animate">
                                            <h3 class="code">0001</h3>
                                            {{-- <a class="hitCounter" href="https://visitorshitcounter.com/" target="_blank" title="Hit counter" data-name="cb5fddde62724450c38ba9863d591008|5|page|1|rgb(250, 250, 250);|rgb(0, 0, 0);|large|s-hit">Hit Counter</a><script>document.write("<script type='text/javascript' src='https://visitorshitcounter.com/js/hitCounter.js?v="+Date.now()+"'><\/script>");</script> --}}
                                        </div>
                                        <h3 class="" style="color: rgb(35, 115, 201); fornt-size:14px"> {{ __('index.count_section_1_h4') }}</h3>

                                    </div>
                                </div>
                            </div>
                        </div>
                        {{-- <div class="item-animate">
                            <h2 class="code">01000/h2>
                        </div> --}}
                    </div>
                </div>
                {{-- <div class="col-lg-4 col-12">
                    websilt
                </div>
                <div class="col-lg-3 col-12">

                    <div class="button">
                        <a href="portfolio.html" class="bizwheel-btn">10000+</a>
                    </div>
                </div> --}}

            </div>
        </div>
    </section>
    <!-- logo-->
    <section class="features-area section-clint">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6 col-12">
                    <!-- Single Feature -->
                    <div class="single-clint">
                        <div class="icon-head">
                            <!-- <i class="fa fa-podcast"></i> -->
                            <img class="lazy" src="{{ asset('pific-web-site') }}/img/client/ec4j.jpg" alt="#" width="200px">
                        </div>

                    </div>
                    <!--/ End Single clint -->
                </div>
                <div class="col-lg-3 col-md-6 col-12">
                    <!-- Single clint -->
                    <div class="single-clint">
                        <div class="icon-head">
                            <!-- <i class="fa fa-podcast"></i> -->
                            <img class="lazy" src="{{ asset('pific-web-site') }}/img/client/moc.jpg" alt="#" width="200px">
                        </div>

                    </div>
                    <!--/ End Single clint -->
                </div>
                <div class="col-lg-3 col-md-6 col-12">
                    <!-- Single clint -->
                    <div class="single-clint">
                        <div class="icon-head">
                            <!-- <i class="fa fa-podcast"></i> -->
                            <img class="lazy" src="{{ asset('pific-web-site') }}/img/client/world-bank.jpg" alt="#" width="200px">
                        </div>

                    </div>
                    <!--/ End Single clint -->
                </div>

                <div class="col-lg-3 col-md-6 col-12">
                    <!-- Single clint -->
                    <div class="single-clint">
                        <div class="icon-head">
                            <!-- <i class="fa fa-podcast"></i> -->
                            <img class="lazy" src="{{ asset('pific-web-site') }}/img/client/imc.jpg" alt="#" width="200px">
                        </div>


                    </div>
                    <!--/ End Single clint -->
                </div>
            </div>
        </div>
    </section>
		<!--/ End Client Area -->
		<!-- Testimonials -->
	@endsection

