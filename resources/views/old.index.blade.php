@extends('layouts.app')
@section('content')
<style>
/* Make the image fully responsive */
</style>
<!-- <div id="v">
    <div id="video-carousel-example2" class="carousel slide carousel-fade" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#video-carousel-example2" data-slide-to="0" class="active"></li>
            <li data-target="#video-carousel-example2" data-slide-to="1"></li>
        </ol>
            <div class="carousel-inner" role="listbox">
                <div class="carousel-item active">
                    <div class="view">
                    <video class="video-fluid" autoplay loop muted width="100%">
                        <source src="{{ asset('pific-web-site') }}/PIFIC-6-5-21.mp4" type="video/mp4" />
                    </video>
                    <div class="mask rgba-indigo-light"></div>
                    </div>
                    <div class="carousel-caption">
                    <div class="animated fadeInDown">
                        <h3 class="h3-responsive" style="color: white;">Public Investment Facility for Infrastructure Constraints (PIFIC) is a cluster-based facility of the EC4J Project under the Ministry of Commerce and is financed by the World Bank.
                            </h3>
                    </div>
                    </div>
                </div>
            <a class="carousel-control-prev" href="#video-carousel-example2" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#video-carousel-example2" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
            </a>
        </div>
    </div>
</div> -->
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
                    Translate this page
                    $40 million infrastructure fund to boost Bangladesh exports. বাংলাদেশের PIFIC boosts export competitiveness in four sectors." width="1100" height="460">
                </div>
                <div class="carousel-item">
                    <img  class="lazy" src="{{ asset('pific-web-site') }}/img/slider/mini/5-min.jpg" alt="Public Investment Facility for Infrastructure Constraints
                    Translate this page
                    $40 million infrastructure fund to boost Bangladesh exports. বাংলাদেশের PIFIC boosts export competitiveness in four sectors." width="1100" height="460">
                </div>
                <div class="carousel-item">
                    <img  class="lazy" src="{{ asset('pific-web-site') }}/img/slider/mini/6-min.jpg" alt="Public Investment Facility for Infrastructure Constraints
                    Translate this page
                    $40 million infrastructure fund to boost Bangladesh exports. বাংলাদেশের PIFIC boosts export competitiveness in four sectors." width="1100" height="460">
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
                    <p>What's New !</p>
                </div>
                <div class="news-list">
                    <ul>
                    <div>
                        <li><span> News 1 &ndash; <a href="#">Meeting with Bangladesh Leather Association </a></span></li>
                    </div>
                    <div>
                        <li><span> News 2 &ndash; <a href="#">Meeting with the executive committee (MOC) </a></span></li>
                    </div>
                    <div>
                        <li><span> News 3 &ndash; <a href="#">Meeting with the Plastic  Association</a></span></li>
                    </div>
                    <div>
                        <li><span> News 4 &ndash; <a href="#">Visit at Leather Manufacturing Company</a></span></li>
                    </div>
                    <div>
                        <li><span> News 5 &ndash; <a href="#">Visit at Plastic Manufacturing Company</a></span></li>
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
                        <h4><a href="#">LEATHER</a></h4>
                        <p id="lea"></p>
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
                        <h4><a href="#">FOOTWEAR</a></h4>
                        <p id="ft"></p>
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
                        <h4><a href="#">PLASTIC</a></h4>
                        <p id="pp"></p>
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
                        <h4><a href="#">LIGHT ENGINEERING</a></h4>
                        <p id="li"></p>
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
    <!--<section class="services ">-->
    <!--    <div class="choose single section-space">-->
    <!--        <div class="">-->
    <!--            <div class="row ">-->
    <!--               <div class="col-md-12 section-title defult text-center">-->
    <!--                  <div class="section-top">-->
    <!--                     <h1><span> PIFIC Overview</span> </h1>-->
    <!--                     <p>PIFIC Management - IMC Worldwide with BETS & IIFC</p>-->
    <!--                  </div>-->
    <!--               </div>-->
    <!--            </div>-->
    <!--            <div class="row justify-content-center ">-->

    <!--            <img  class="lazy" src="{{ asset('pific-web-site') }}/img/over-view/1.jpg" alt="#">-->

                   <!-- <div class="col-md-4" style="text-align: center">
    <!--                    <div class="choose_box">-->
    <!--                       01. Cluster Based Cpproach-->
    <!--                    </div>-->
    <!--                    <div class="choose_box">-->
    <!--                       02. Build/Enhance Infrastructure-->

    <!--                    </div>-->
    <!--                    <div class="choose_box">-->
    <!--                       03. Fund Available: $40 Million-->

    <!--                    </div>-->
    <!--                </div>-->
    <!--                <div class="col-md-4" style="text-align: left">-->
    <!--                    <div class="choose_box">-->
    <!--                       04. 15 - 20 Infrastructure Projects-->

    <!--                    </div>-->
    <!--                    <div class="choose_box">-->
    <!--                       05. To be Completed by June 2023-->

    <!--                    </div>-->
    <!--                    <div class="choose_box">-->
    <!--                       06. Implemented by: PIU – MOC-->

    <!--                    </div>-->
    <!--                </div> -->

    <!--            </div>-->
    <!--        </div>-->
    <!--    </div>-->
    <!--</section>-->
        <!-- pific-overview -->
        <!-- who we are-->
    <section class="services section-bg ">
        <div class="container">
            <div class="row section-space">
                <div class="col-lg-5 col-md-6 col-12">
                    <div class=" about-content section-title-2 default text-left">
                        <div class="">
                            <div class="section-top mt-2">
                                <h1><b>What is PIFIC ?</b></h1>
                            </div>
                            <div class="section-bottom">
                                <div class="text">
                                    <br>
                                    <p>PIFIC is a cluster based facility that will create infrastructural facilities and new jobs across Bangladesh.</p>
                                    <p> PIFIC is a Ministry of Commerce initiative together with The World Bank, providing  infrastructure facilities for cluster based industries. The PIFIC Consultant is seeking  application from associations requiring infrastructure facilities that will assist in growing their business and enhancing Export Competitiveness.</p>
                                    {{-- <p>PIFIC Consultant : PIFIC Management Consultant is led by IMC Worldwide (UK) in association with BETS Consulting and Infrastructure Investment Facilitation Company (IIFC) of Bangladesh;</p>
                                    <p>PIFIC management consultancy will develop the pipeline of project proposals, draw up assistance agreements, assist with project preparation, evaluate proposals and recommend for selection to PIU and prepare bidding documents. </p>
                                    <p>Consultant will also support PIU in monitoring the performance of projects under PIU contract.</p> --}}
                                    <p>PIFIC will facilitate
                                        improvement to infrastructures for development of the targeted industry sectors. The
                                        PIFIC Facility will act as a filtering, prioritization and selection mechanism for
                                        project proposals to address industry-specific infrastructure constraints and provide
                                        the required engineering expertise to design and prepare the bidding documents for
                                        works contracts. The works contracts will be tendered and implemented by the
                                        Project Implementation Unit (PIU) of EC4J.
                                    </p>

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
                        <!-- <div class="modern-img-feature"> -->
                            <!-- HTML -->

                        <div id="player-overlay">
                            {{-- <video style="width: 100%; heigrt:100%" controls class="video-fluid" autoplay muted width="100%"> --}}
                            {{-- <video style="width: 100%; heigrt:100%" controls autoplay class="video-fluid" autoplay loop muted width="100%"> --}}
                                {{-- {{ asset('pific-web-site') }}/PIFIC-6-5-21.mp4 --}}
                            {{-- <source src="https://youtu.be/KsLVDQ-VGqU" type="video/mp4" class="lazy" />
                            <source src="https://youtu.be/KsLVDQ-VGqU" type="video/mp4" class="lazy" />
                            <source src="https://youtu.be/KsLVDQ-VGqU" type="video/mp4" codecs="vp8, vorbis" autoplay />
                            <source src="https://youtu.be/KsLVDQ-VGqU" type="video/mp4" codecs="theora, vorbis" autoplay /> --}}
                            {{-- </video> --}}
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
                        <h2>PIFIC Launch Date</h2>
                        <p>Public Investment Facility for Infrastructure Constraints (PIFIC) is a cluster-based facility of the EC4J Project under the Ministry of Commerce and is financed by the World Bank.</p>
                    </div>
                </div>
                <div class="col-lg-3 col-12">
                    <div class="button">
                        <a href="{{ url('/news') }}" class="bizwheel-btn">09-December-2020</a>
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
                            <h1><span>Services We Provide</span><b></b><b></b></h1>
                                <p>PIFIC will facilitate improvement to infrastructures for development of the targeted industry sectors.</p>
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

                                            <div class="single-feature single-portfolio">
                                                <div class="portfolio-head">
                                                    <img class="lazy" src="{{ asset('pific-web-site') }}/img/recent-activity/new/9-min.jpg" alt="#">

                                                </div>
                                                <div class="portfolio-content">
                                                    <h4><a href="#"> Light Engineering  Workshop  </a></h4>
                                                    <p> Light Engineering  Workshop Visit At Jessore</p>
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
                                                    <h4><a href="#"> Meeting (MOC)
                                                    </a></h4>
                                                    <p>Meeting with the executive committee (MOC)

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
                                                    <h4><a href="#" >Footwear Workshop
                                                    </a></h4>
                                                    <p>
                                                    Visit At Footwear Workshop
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
                                                    <h4><a href="#">Leather Manufacturing</a></h4>
                                                    <p>Visit at Leather Manufacturing Company

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
                                                    <h4><a href="#"> Press Conference</a></h4>
                                                    <p>Press Conference At ERF</p>
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
                                                    <h4><a href="#">Plastics Manufacturing</a></h4>
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
                                        <h3 class="" style="color: rgb(35, 115, 201); fornt-size:14px"> Website Visit </h3>
                                        <!-- Badge Code End Here -->
                                    </div>
                                </div>
                                <div class="col-md-3 col-12">
                                    <div class="single-feature mb-4">
                                        <div class="item-animate">
                                            <h3 class="code">0001</h3>
                                            {{-- <a class="hitCounter" href="https://visitorshitcounter.com/" target="_blank" title="Hit counter" data-name="cb5fddde62724450c38ba9863d591008|5|page|1|rgb(255, 255, 255);|rgb(0, 0, 0);|large|s-hit">Hit Counter</a><script>document.write("<script type='text/javascript' src='https://visitorshitcounter.com/js/hitCounter.js?v="+Date.now()+"'><\/script>");</script> --}}
                                        </div>
                                        <h3 class="" style="color: rgb(35, 115, 201); fornt-size:14px">Online Application</h3>

                                    </div>
                                </div>
                                <div class="col-md-3 col-12">
                                    <div class="single-feature mb-4">
                                        <div class="item-animate">
                                            <h3 class="code" >0001</h3>
                                            {{-- <a class="hitCounter" href="https://visitorshitcounter.com/" target="_blank" title="Hit counter" data-name="cb5fddde62724450c38ba9863d591008|5|page|1|rgb(250, 250, 250);|rgb(0, 0, 0);|large|s-hit">Hit Counter</a><script>document.write("<script type='text/javascript' src='https://visitorshitcounter.com/js/hitCounter.js?v="+Date.now()+"'><\/script>");</script> --}}
                                        </div>
                                        <h3 class="" style="color: rgb(35, 115, 201); fornt-size:14px">Downloaded</h3>

                                    </div>
                                </div>
                                <div class="col-md-3 col-12">
                                    {{-- <div class="counter bg-info rounded mb-4"> --}}
                                        <div class="single-feature mb-4">
                                        <div class="item-animate">
                                            <h3 class="code">0001</h3>
                                            {{-- <a class="hitCounter" href="https://visitorshitcounter.com/" target="_blank" title="Hit counter" data-name="cb5fddde62724450c38ba9863d591008|5|page|1|rgb(250, 250, 250);|rgb(0, 0, 0);|large|s-hit">Hit Counter</a><script>document.write("<script type='text/javascript' src='https://visitorshitcounter.com/js/hitCounter.js?v="+Date.now()+"'><\/script>");</script> --}}
                                        </div>
                                        <h3 class="" style="color: rgb(35, 115, 201); fornt-size:14px">Complete Apply </h3>

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


