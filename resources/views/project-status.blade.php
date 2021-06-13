@extends('layouts.app')
@section('content')
    <div class="breadcrumbs overlay" style="background-image:url('http://pificbd.syssolution.com.bd/pific-web-site/img/team/old.team.png')">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="bread-inner">
                        <div class="bread-menu">
                            <ul>
                                <li><a href="index.html">Home</a></li>
                                <li><a href="about.html">About Us</a></li>
                            </ul>
                        </div>
                        <div class="bread-title"><h2>About PIFIC</h2></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- About Us -->
    <section class="services section-bg ">
        <div class="container">
            <div class="row section-space justify-content-center">
                <div class="col-lg-5  col-md-6 col-12">
                        <h2 style="text-align: center " class="text mb-2">PIFIC Project Status</h2>
                    <div class="">
                        {{-- <img class="lazy" src="{{ asset('pific-web-site') }}/img/project-status.jpg" alt="#" > --}}
                        <div class="container">
                            <p class="text-center"> .<p>
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
        <div class="continer">

        </div>
        <style>
          .btn {display: block;width: 100%;padding: 4px 0px;font-size: 1em;}div.col-2{padding: 0;margin-right: 4px;}.container.bars{margin-top: 20px;border: 1px solid grey;background:rgba(112, 128, 144, 0.2) }.container.buttons{border: 1px solid rgb(255, 255, 255);border-top: 0;}.progress {border-radius: 100px;background-color: #f8f9fa;box-shadow: 0px 0px 4px 1px rgba(0, 0, 0, 0.192);}.progress-bar.active {border-radius: 100px;background-color: #12e4eb;}.progress-bar.success {background-color: green;transition: width .6s ease, background-color .3s .3s ease-in;}.progress-bar.fail {background-color: red;transition: width .6s ease, background-color .3s .3s ease-in;}.progress-bar.fail-1 {background-color: rgb(168, 197, 39);transition: width .6s ease, background-color .3s .3s ease-in;}.progress-bar.fail-2 {background-color: rgb(0, 238, 255);transition: width .6s ease, background-color .3s .3s ease-in;}.progress-bar.fail-3 {background-color: rgb(115, 255, 0);transition: width .6s ease, background-color .3s .3s ease-in;}.progress-bar-text {font-weight: 500;}
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
        //     indexLabelPlacement: "inside",
        //     dataPoints: [
		// 	{ y: 6566.4, name: "22" },
		// 	{ y: 2599.2, name: "23" },
		// 	{ y: 1231.2, name: "21" },
		// 	{ y: 1368, name: "24" },
		// 	{ y: 684, name: "10"},

		// ]
        });
    });
    </script>
@endsection


