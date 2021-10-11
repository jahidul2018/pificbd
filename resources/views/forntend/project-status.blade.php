@extends('layouts.app')
@section('content')
    <div class="breadcrumbs overlay" style="background-image:url('http://pific-bd.com/pific-web-site/img/team/old.team.png')">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="bread-inner">
                        <div class="bread-menu">
                            <ul>
                                <li><a href="index.html">Home</a></li>
                                <li><a href="about.html">Project Status</a></li>
                            </ul>
                        </div>
                        <div class="bread-title"><h2>PIFIC Project Status</h2></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- About Us -->
    <section class="services section-bg">
        <div class="container">
            <div class="row section-space justify-content-center">
                <div class="col-lg-5  col-md-6 col-12">
                        <h2 style="text-align: center " class="text">PIFIC Project Status</h2>
                    <div class="">
                         <!-- <img class="lazy" src="{{ asset('pific-web-site') }}/img/project-status.jpg" alt="#" >  -->
                        <div class="container">
                            <canvas id="barChart" width="400" height="400"></canvas>
                          </div>
                    </div>
                </div>
                <div class="col-lg-5 col-md-6 col-12">
                    <div class="container">
                        <div class="row justify-content-center" >
                           <h2>Project Progress status</h2>
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
            </div>
        </div>
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
                        <li data-target="#myCarousel" data-slide-to="3"></li>
                        <li data-target="#myCarousel" data-slide-to="4"></li>
                        <li data-target="#myCarousel" data-slide-to="5"></li>
                        <li data-target="#myCarousel" data-slide-to="6"></li>
                        <li data-target="#myCarousel" data-slide-to="7"></li>
                        <li data-target="#myCarousel" data-slide-to="8"></li>
                        <li data-target="#myCarousel" data-slide-to="9"></li>
                        <li data-target="#myCarousel" data-slide-to="10"></li>
                        <li data-target="#myCarousel" data-slide-to="11"></li>
                    </ol> <!-- Wrapper for carousel items -->
                    <div class="carousel-inner">
                        <div class="item carousel-item active">
                            <!-- <div class="img-box"><img src="{{ asset('pific-web-site') }}/img/comment/Tipu-Munshi-Minister-of-Commerce.jpg" alt=""></div> -->
                            <!-- <p class="testimonial">Common Facility Center</p> -->
                            <h1 class="testimonial">Common Facility Center</h1>
                            <!-- <p class="overview"><b>Tipu Munshi</b>Minister of Commerce</p> -->
                            <div class="star-rating"> </div>
                        </div>
                        <div class="item carousel-item">
                           
                            <h1 class="testimonial">Workshop</h1>
                            <div class="star-rating"> </div>
                        </div>
                        <div class="item carousel-item">
                            
                            <h1 class="testimonial">Testing Lab</h1>
                            <div class="star-rating"> </div>
                        </div>
                        <div class="item carousel-item">
                           
                            <h1 class="testimonial">Road, Drainage, Sewer</h1>
                            <div class="star-rating"> </div>
                        </div>
                        <div class="item carousel-item">
                            
                            <h1 class="testimonial">Cold Storage</h1>
                            <div class="star-rating"> </div>
                        </div>
                        <div class="item carousel-item">
                           
                            <h1 class="testimonial">Solid Waste Facility</h1>
                            <div class="star-rating"> </div>
                        </div>
                        <div class="item carousel-item">
                           
                            <h1 class="testimonial">Recycling Center</h1>
                            <div class="star-rating"> </div>
                        </div>
                        <div class="item carousel-item">
                           
                            <h1 class="testimonial">Boiler/ Steam/ Furnace</h1>
                            <div class="star-rating"> </div>
                        </div>
                        <div class="item carousel-item">
                            
                            <h1 class="testimonial">Research Center</h1>
                            <div class="star-rating"> </div>
                        </div>
                        <div class="item carousel-item">
                           
                            <h1 class="testimonial">Last mile Electric Trasmission</h1>
                            <div class="star-rating"> </div>
                        </div>
                        <div class="item carousel-item">
                            
                            <h1 class="testimonial">Fire Station</h1>
                            <div class="star-rating"> </div>
                        </div>
                        <div class="item carousel-item">
                            
                            <h1 class="testimonial">Training Center</h1>
                            <div class="star-rating"> </div>
                        </div>
                        <div class="item carousel-item">
                           
                            <h1 class="testimonial">Machinary Items etc</h1>
                            <div class="star-rating"> </div>
                        </div>

                    </div>
                    <a class="carousel-control left carousel-control-prev" href="#myCarousel" data-slide="prev"> <i class="fa fa-angle-left"></i> </a> <a class="carousel-control right carousel-control-next" href="#myCarousel" data-slide="next"> <i class="fa fa-angle-right"></i> </a>
                </div>
            </div>
        </div>
        <style>
            .carousel {width: 650px;margin: 0 auto;padding-bottom: 50px }.carousel .item {color: #999;font-size: 14px;text-align: center;overflow: hidden;min-height: 340px }.carousel .item a {color: #eb7245 }.carousel .img-box {width: 145px;height: 145px;margin: 0 auto;border-radius: 50% }.carousel .img-box img {width: 100%;height: 100%;display: block;border-radius: 50% }.carousel .testimonial {padding: 155px 0 10px }.testimonial {color: #000000;font: Times Roman }.carousel .overview {text-align: center;padding-bottom: 5px }.carousel .overview b {color: #333;font-size: 15px;text-transform: uppercase;display: block;padding-bottom: 5px }.carousel .star-rating i {font-size: 18px;color: #ffdc12 }.carousel .carousel-control {width: 30px;height: 30px;border-radius: 50%;background: #999;text-shadow: none;top: 4px }.carousel-control i {font-size: 20px;margin-right: 2px }.carousel-control.left {left: auto;right: 40px }.carousel-control.right i {margin-right: -2px }.carousel .carousel-indicators {bottom: 15px }.carousel-indicators li, .carousel-indicators li.active {width: 11px;height: 11px;margin: 1px 5px;border-radius: 50% }.carousel-indicators li {background: #e2e2e2;border-color: transparent }.carousel-indicators li.active {border: none;background: #888 }
        </style> 
    </section>

    <section>
        <div class="continer">
        </div>
        <style>
          .btn {display: block;width: 100%;padding: 4px 0px;font-size: 1em;}div.col-2{padding: 0;margin-right: 4px;}.container.bars{margin-top: 80px;border: 1px solid grey;background:rgba(112, 128, 144, 0.2) }.container.buttons{border: 1px solid rgb(255, 255, 255);border-top: 0;}.progress {border-radius: 100px;background-color: #f8f9fa;box-shadow: 0px 0px 4px 1px rgba(0, 0, 0, 0.192);}.progress-bar.active {border-radius: 100px;background-color: #12e4eb;}.progress-bar.success {background-color: green;transition: width .6s ease, background-color .3s .3s ease-in;}.progress-bar.fail {background-color: #FF6384;transition: width .6s ease, background-color .3s .3s ease-in;}.progress-bar.fail-1 {background-color: ##4BC0C0;transition: width .6s ease, background-color .3s .3s ease-in;}.progress-bar.fail-2 {background-color: #FFCE56;transition: width .6s ease, background-color .3s .3s ease-in;}.progress-bar.fail-3 {background-color: #36A2EB;transition: width .6s ease, background-color .3s .3s ease-in;}.progress-bar-text {font-weight: 500;}
        </style>
    </section>
@endsection
@section('script')
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.2.1/Chart.js"></script>
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
            else if(value < 85) {
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
        set('#bar1','LEATHER', 75);
        set('#bar2','FOOTWEAR',83);
        set('#bar3','PLASTIC', 92);
        set('#bar4','LIGHT ENGINEERING', 97);

        //pi-chart
        jQuery(document).ready(function() {
        var chartDiv = $("#barChart");
        var myChart = new Chart(chartDiv, {
            type: 'pie',
            data: {
                labels: ["LEATHER", "FOOTWEAR", "PLASTIC", "LIGHT ENGINEERING","InProgress"],
                datasets: [
                {
                    data: [22,23, 21, 24,10],
                    backgroundColor: [
                    "#FF6384",
                    "#4BC0C0",
                    "#FFCE56",

                    "#36A2EB",
                    ]
                }]
            },
            options: {
                title: {
                    display: true,
                    //text: 'Pie Chart'
                },

                responsive: true,
        maintainAspectRatio: false,
            },
       
        });
    });
    </script>
@endsection


