@extends('layouts.app')
@section('content')

		<!-- Breadcrumb -->
		<div class="breadcrumbs overlay" style="background-image:url('http://pificbd.syssolution.com.bd/pific-web-site/img/team/team.png');">
			<div class="container">
				<div class="row">
					<div class="col-12">
						<div class="bread-inner">
							<!-- Bread Menu -->
							<div class="bread-menu">
								<ul>
									<li><a href="index.html">Home</a></li>
									<li><a href="about.html">PIFIC Team</a></li>
								</ul>
							</div>
							<!-- Bread Title -->
							<div class="bread-title"><h2>PIFIC Team</h2></div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- / End Breadcrumb -->
		<!-- About Us -->
		 {{-- class="about-us section-space" --}}
        <section class="">
			<div class="container">
                <div class="row justify-content-center">
                    <div class="about-content section-title default text-left">
                        <div class="section-top">
                            <h1><span>PIFIC Team</span><b></b></h1>
                        </div>
                    </div>
                </div>
				<div class="row d-flex">
					{{-- <div class="col-lg offset-lg-1 col-md-6 col-12"> --}}
						<!-- About Video -->
						{{-- <div class="modern-img-feature">
							<img src="https://via.placeholder.com/800x725" alt="#">
							<div class="video-play">
								<a href="https://www.youtube.com/watch?v=RLlPLqrw8Q4" class="video video-popup mfp-iframe">
									<i class="fa fa-play"></i>
								</a>
							</div>
						</div> --}}
						<!--/End About Video  -->
					{{-- </div> --}}
                    <div class="col-md-3">
                        {{-- <div class="mt-3" role="group" aria-label="Basic example">
                            <div class="button mt-4 bizwheel-btn theme-2" style="display: block; width:100%; text-align:center; background-color: rgb(38, 164, 248); box" >
                                <a href="{{ url('/pific-team-tec', []) }}" style="background-color: rgb(38, 164, 248);" class="">Technical Team</a>
                            </div>
                            <div class="button mt-4 bizwheel-btn theme-2" style="display: block; width:100%; text-align:center; background-color: rgb(38, 164, 248);">
                                <a href="{{ url('/pific-team-management', []) }}" style="background-color: rgb(38, 164, 248);" class="">Management Team</a>
                            </div>
                            <div class="button bizwheel-btn theme-2 mt-4" style="display: block; width:100%; text-align:center; background-color: rgb(38, 164, 248);">
                                <a href="{{ url('/pific-team-ict', []) }}" style="background-color: rgb(38, 164, 248);" class="">ICT Team</a>
                            </div>
                        </div> --}}
                    </div>
					<div class="col-lg-6 col-md-6 col-12">
						<div class="about-content section-title default text-left">
							<div class="section-bottom">
								<div class="" style="color: black; ">
                                    Everyone says it, but in our case it’s true: PIFIC Team is the secret to our success. Each of our employees is amazing in their own right, but together they are what makes PIFIC such a fun and rewarding place to work.  The PIFIC team is a tight-knit, talented group with a shared vision of delivering consistently great results for our clients, as well as ensuring the agency is a fun, inclusive, challenging place to work and develop a rewarding career.We’re very proud of the team we’ve built – there’s more than thirty of us now but it still feels like it did when there were just a few of us.  PIFIC has always been an agency defined by bringing together talented people with a shared vision and passion for helping us to be the best we can be for our clients.  But that doesn’t mean PIFIC is a cookie-cutter agency.  All of our employees are unique individuals who are united by a set of five core values that apply to everything we do within the agency
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!--/ End About Us -->
        <section >
			<div class="container team">
				<div class="row d-flex " style="justify-content: center">
					<div class="col-lg-10  col-md-6 col-sm-3">
						<div class="card-group d-flex flex-wrap" style="justify-content: center">
                            <div class="card col-md-3 mt-100">
                                <div class="card-content">
                                    <div class="card-body p-0">
                                        <div class="profile"> <img class="lazy" src="{{ asset('pific-web-site') }}/img/team/300-300/sal.jpg"> </div>
                                        <div class="card-title">  Shobuz A. Ikbal<br /> <small>PIFIC Manager and Chief Engineer (Team Leader)</small> </div>
                                        <div class="card-subtitle">
                                            <p> <small class="text-muted"> Email : TL-pific@imcw-bangladesh.com </small> </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card col-md-3 mt-100">
                                <div class="card-content">
                                    <div class="card-body p-0">
                                        <div class="profile"> <img class="lazy" src="{{ asset('pific-web-site') }}/img/team/d.png"> </div>
                                        <div class="card-title">  Paul Norman Bird<br /> <small>Country Director, IMC Worldwide</small> </div>
                                        <div class="card-subtitle">
                                            <p> <small class="text-muted"> </small> </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card col-md-3 mt-100">
								<div class="card-content">
									<div class="card-body p-0">
										<div class="profile"> <img class="lazy" src="{{ asset('pific-web-site') }}/img/team/d.png"> </div>
										<div class="card-title"> Suraj Rana/Katie Macleod<br /> <small>Project Director</small> </div>
										<div class="card-subtitle">
											<p> <small class="text-muted"> </small> </p>
										</div><br />
                                        <div class="card-subtitle">
                                            <p> <small class="text-muted"> </small> </p>
                                        </div>

									</div>
								</div>
							</div>
                        </div>

                        <div class="card-group d-flex flex-wrap" style="justify-content: center">
                            <div class="card col-md-3 mt-100 ">
                                <div class="card-content">
                                    <div class="card-body p-0">
                                        <div class="profile"> <img class="lazy" src="{{ asset('pific-web-site') }}/img/team/d.png"> </div>
                                        <div class="card-title"> Hulya Passaogulati<br /> <small>Financial Analyst </small> </div>
                                        <div class="card-subtitle">
                                            <p> <small class="text-muted"> </small> </p>
                                        </div>
                                        {{-- <div class="card-subtitle">
											<p> <small class="text-muted">Mobile :+8801711595373 </small> </p>
										</div> --}}
                                        <div class="card-subtitle">
                                            <p> <small class="text-muted">  </small> </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
							<div class="card col-md-3 mt-100">
								<div class="card-content">
									<div class="card-body p-0">
										<div class="profile"> <img class="lazy" src="{{ asset('pific-web-site') }}/img/team/d.png"> </div>
										<div class="card-title"> Valentine Wolfram<br /> <small>Project Coordinator</small> </div>
                                        <div class="card-subtitle">
                                            <p> <small class="text-muted"> </small> </p>
                                        </div>
                                        {{-- <div class="card-subtitle">
											<p> <small class="text-muted">Mobile : +8801713060638 </small> </p>
										</div> --}}
                                        <div class="card-subtitle">
											<p> <small class="text-muted">  </small> </p>
										</div>
									</div>
								</div>
							</div>
                        </div>

                        <div class="card-group d-flex flex-wrap">
                            <div class="card col-md-3 mt-100">
								<div class="card-content">
									<div class="card-body p-0">
										<div class="profile"> <img class="lazy" src="{{ asset('pific-web-site') }}/img/team/300-300/khr.jpg"> </div>
										<div class="card-title"> Kazi Hakimur Rasid<br /> <small>Senior Engineer (Deputy Team Leader)</small> </div>
										<div class="card-subtitle">
											<p> <small class="text-muted"> Email : dtl-pific@imcw-bangladesh.com  </small> </p>
										</div><br />
                                        <div class="card-subtitle">
                                            <p> <small class="text-muted"> </small> </p>
                                        </div>
										{{-- <div class="card-subtitle">
											<p> <small class="text-muted">Mobile : +8801712291172 </small> </p>
										</div> --}}
									</div>
								</div>
							</div>
							<div class="card col-md-3 mt-100">
								<div class="card-content">
									<div class="card-body p-0">
										<div class="profile"> <img class="lazy" src="{{ asset('pific-web-site') }}/img/team/300-300/msr.jpg"> </div>
										<div class="card-title"> Md. Shamsur Raman<br /> <small>Investment Officer</small> </div>
                                        <div class="card-subtitle">
                                            <p> <small class="text-muted"> Email :
                                                io-pific@imcw-bangladesh.com </small> </p>
                                        </div>
                                        {{-- <div class="card-subtitle">
											<p> <small class="text-muted">Mobile : +8801713060638 </small> </p>
										</div> --}}
                                        <div class="card-subtitle">
											<p> <small class="text-muted">  </small> </p>
										</div>
									</div>
								</div>
							</div>
                            <div class="card col-md-3 mt-100 ">
                                <div class="card-content">
                                    <div class="card-body p-0">
                                        <div class="profile"> <img class="lazy" src="{{ asset('pific-web-site') }}/img/team/300-300/msa.jpg"> </div>
                                        <div class="card-title"> Shahjahan Ali<br /> <small> Civil Engineer </small> </div>
                                        <div class="card-subtitle">
                                            <p> <small class="text-muted"> Email : io-pific@imcw-bangladesh.com </small> </p>
                                        </div>
                                        {{-- <div class="card-subtitle">
											<p> <small class="text-muted">Mobile : +8801783360152 </small> </p>
										</div> --}}
                                        <div class="card-subtitle">
                                            <p> <small class="text-muted"></small> </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card col-md-3 mt-100">
                                <div class="card-content">
                                    <div class="card-body p-0">
                                        <div class="profile"> <img class="lazy" src="{{ asset('pific-web-site') }}/img/team/300-300/mcd.jpg"> </div>
                                        <div class="card-title"> Mukul Chandra Dey<br /> <small>Mechanical Engineer </small> </div>
                                        <div class="card-subtitle">
                                            <p> <small class="text-muted"> Email : me-pific@imcw-bangladesh.com </small> </p>
                                        </div>
                                        {{-- <div class="card-subtitle">
											<p> <small class="text-muted">Mobile :  +8801712291172 </small> </p>
										</div> --}}
                                        <div class="card-subtitle">
                                            <p> <small class="text-muted"> </small> </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <div class="card-group d-flex flex-wrap">
                            <div class="card col-md-3 mt-100 ">
                                <div class="card-content">
                                    <div class="card-body p-0">
                                        <div class="profile"> <img class="lazy" src="{{ asset('pific-web-site') }}/img/team/d.png"> </div>
                                        <div class="card-title"> Md. Ehsanul Kabir<br /> <small> Administrator </small> </div>
                                        <div class="card-subtitle">
                                            <p> <small class="text-muted"> </small> </p>
                                        </div>
                                        {{-- <div class="card-subtitle">
											<p> <small class="text-muted">Mobile : +8801783360152 </small> </p>
										</div> --}}
                                        <div class="card-subtitle">
                                            <p> <small class="text-muted"></small> </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card col-md-3 mt-100 ">
                                <div class="card-content">
                                    <div class="card-body p-0">
                                        <div class="profile"> <img class="lazy" src="{{ asset('pific-web-site') }}/img/team/300-300/arz.jpg"> </div>
                                        <div class="card-title"> Md. Rashed Zaman<br /> <small>Office Manager</small> </div>
                                        <div class="card-subtitle">
                                            <p> <small class="text-muted"> Email : om-pific@imcw-bangladesh.com </small> </p>
                                        </div>
                                        {{-- <div class="card-subtitle">
											<p> <small class="text-muted">Mobile :+8801711595373 </small> </p>
										</div> --}}
                                        <div class="card-subtitle">
                                            <p> <small class="text-muted">  </small> </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card col-md-3 mt-100">
                                <div class="card-content">
                                    <div class="card-body p-0">
                                        <div class="profile"> <img class="lazy" src="{{ asset('pific-web-site') }}/img/team/300-300/t.jpg"> </div>
                                        <div class="card-title"> Tama Saha<br /> <small>Administrative Assistant</small> </div>

                                        <div class="card-subtitle">
                                            <p> <small class="text-muted"> Email : aa-pific@imcw-bangladesh.com</small> </p>
                                        </div>
                                        {{-- <div class="card-subtitle">
											<p> <small class="text-muted">Mobile : +8801672119603 </small> </p>
										</div> --}}
                                        <div class="card-subtitle">
                                            <p> <small class="text-muted"> </small> </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card col-md-3 mt-100">
                                <div class="card-content">
                                    <div class="card-body p-0">
                                        <div class="profile"> <img class="lazy" src="{{ asset('pific-web-site') }}/img/team/300-300/fmm.jpg"> </div>
                                        <div class="card-title"> Faisal Mahedi<br /> <small>Junior Expert</small> </div>
                                        <div class="card-subtitle">
                                            <p> <small class="text-muted"> Email : jex-pific@imcw-bangladesh.com </small> </p>
                                        </div>
                                        {{-- <div class="card-subtitle">
											<p> <small class="text-muted">Mobile :+8801621120750 </small> </p>
										</div> --}}
                                        <div class="card-subtitle">
                                            <p> <small class="text-muted">  </small> </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="card-group d-flex flex-wrap">
                            <div class="card col-md-3 mt-100">
                                <div class="card-content">
                                    <div class="card-body p-0">
                                        <div class="profile"> <img class="lazy" src="{{ asset('pific-web-site') }}/img/team/300-300/as.png"> </div>
                                        <div class="card-title"> Abdus Salam<br /> <small>Electrical Engineer</small> </div>
                                        <div class="card-subtitle">
                                            <p> <small class="text-muted"> Email : ee-pific@imcw-bangladesh.com </small> </p>
                                        </div>
                                        {{-- <div class="card-subtitle">
											<p> <small class="text-muted">Mobile : +8801749616608</small> </p>
										</div> --}}
                                        <div class="card-subtitle">
                                            <p> <small class="text-muted"> </small> </p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="card col-md-3 mt-100">
                                <div class="card-content">
                                    <div class="card-body p-0">
                                        <div class="profile"> <img class="lazy" src="{{ asset('pific-web-site') }}/img/team/d.png"> </div>
                                        <div class="card-title"> Md.Shafiqur Rahman<br /> <small>Environment & Social Specialist</small> </div>

                                        <div class="card-subtitle">
                                            <p> <small class="text-muted"> </small> </p>
                                        </div>
                                        {{-- <div class="card-subtitle">
											<p> <small class="text-muted">Mobile : +8801672119603 </small> </p>
										</div> --}}
                                        <div class="card-subtitle">
                                            <p> <small class="text-muted"> </small> </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card col-md-3 mt-100">
                                <div class="card-content">
                                    <div class="card-body p-0">
                                        <div class="profile"> <img class="lazy" src="{{ asset('pific-web-site') }}/img/team/d.png"> </div>
                                        <div class="card-title">TBA <br /> <small>Econamist</small> </div>
                                        <div class="card-subtitle">
                                            <p> <small class="text-muted"> </small> </p>
                                        </div>
                                        {{-- <div class="card-subtitle">
											<p> <small class="text-muted">Mobile : +8801749616608</small> </p>
										</div> --}}
                                        <div class="card-subtitle">
                                            <p> <small class="text-muted"> </small> </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card col-md-3 mt-100 ">
                                <div class="card-content">
                                    <div class="card-body p-0">
                                        <div class="profile"> <img class="lazy" src="{{ asset('pific-web-site') }}/img/team/d.png"> </div>
                                        <div class="card-title"> TBA<br /> <small>Design Coordination </small> </div>
                                        <div class="card-subtitle">
                                            <p> <small class="text-muted"> </small> </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card-group d-flex flex-wrap" style="justify-content: center">
                            <div class="card col-md-3 mt-100">
                                <div class="card-content">
                                    <div class="card-body p-0">
                                        <div class="profile"> <img class="lazy" src="{{ asset('pific-web-site') }}/img/team/d.png"> </div>
                                        <div class="card-title"> Md. Ariful Islam<br /> <small>Accountant</small> </div>
                                        <div class="card-subtitle">
                                            <p> <small class="text-muted">  </small> </p>
                                        </div>
                                        {{-- <div class="card-subtitle">
											<p> <small class="text-muted">Mobile :+8801621120750 </small> </p>
										</div> --}}
                                        <div class="card-subtitle">
                                            <p> <small class="text-muted">  </small> </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
				</div>
			</div>
		</section>



        <style>
            .team{background-color:#fff;text-align:center;border-radius:20px;margin-bottom:50px}.mt-100{margin-top:100px}.profile img{width:200px;height:200px;border-radius:50%}.profile img:hover{transform:scale(1.5)}.card{border-radius:15px;margin-left:30px;margin-right:30px;box-shadow:0 10px 20px rgba(0,0,0,.2)}.card-body{position:relative;bottom:35px}.btn{margin-top:36px;margin-bottom:45px;background-color:#ab47bc;border:none;color:#fff}.btn:hover{-webkit-transform:scale(1.05);-ms-transform:scale(1.05);transform:scale(1.05);color:#fff}
        </style>
        @endsection
