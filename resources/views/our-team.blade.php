@extends('layouts.app')
@section('content')


		<!-- Breadcrumb -->
		<div class="breadcrumbs" style="background-image:url('http://localhost:8000/pific-web-site/img/team/team.png')">
			<div class="container">
				<div class="row">
					<div class="col-12">
						<div class="bread-inner">
							<!-- Bread Menu -->
							<div class="bread-menu">
								<ul>
									<li><a href="index.html">Home</a></li>
									<li><a href="about.html">About Us</a></li>
									<li><a href="about.html">Our Team</a></li>
								</ul>
							</div>
							<!-- Bread Title -->
							<div class="bread-title"><h2></h2></div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- / End Breadcrumb -->

		<style>
                .team {
                    background-color: white;
                    text-align: center;
                    border-radius: 20px;
                    /* box-shadow: 0 20px 40px rgba(0, 0, 0, .2); */
                    margin-bottom: 50px
                }
                .mt-100 {
                    margin-top: 100px
                }
                .profile img {
                    width: 150px;
                    height: 150px;
                    border-radius: 50%
                }
                .profile img:hover{
                    transform: scale(1.5);
                }
                .card {
                    border-radius: 15px;
                    margin-left: 30px;
                    margin-right: 30px;
                    box-shadow: 0 10px 20px rgba(0, 0, 0, .2)
                }
                .card-body {
                    position: relative;
                    bottom: 35px
                }
                .btn {
                    margin-top: 36px;
                    margin-bottom: 45px;
                    background-color: #AB47BC;
                    border: none;
                    color: #fff
                }
                .btn:hover {
                    -webkit-transform: scale(1.05);
                    -ms-transform: scale(1.05);
                    transform: scale(1.05);
                    color: #fff
                }
            </style>
		<!-- About Us -->
		<section class="about-us section-space">
			<div class="container team">
				<div class="row d-flex " style="justify-content: center">
					<div class="col-lg-10  col-md-6 col-sm-3">
						<div class="card-group d-flex flex-wrap" style="justify-content: center">
                            <div class="card col-md-3 mt-100">
                                <div class="card-content">
                                    <div class="card-body p-0">
                                        <div class="profile"> <img class="lazy" src="{{ asset('pific-web-site') }}/img/team/300-300/sal.jpg"> </div>
                                        <div class="card-title">  Shobuz A. Ikbal<br /> <small>PIFIC Manger/Team Leader</small> <small> Email : TL-pific@imcw-bangladesh.com </small> </div>
                                        <div class="card-subtitle">
                                            <p> <small class="text-muted"> Email : TL-pific@imcw-bangladesh.com </small> </p>
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
										<div class="card-title"> Kazi Hakimur Rasid<br /> <small>MS Civil Engineering,FIEB/Deputy Team Leader</small> </div>
										<div class="card-subtitle">
											<p> <small class="text-muted">  </small> </p>
										</div><br />
                                        <div class="card-subtitle">
                                            <p> <small class="text-muted"> Email : dtl-pific@imcw-bangladesh.com </small> </p>
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
										<div class="card-title"> Muammad Shamsur Raman<br /> <small>BSc engr.,MBA/Investment Officer</small> </div>
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
                            <div class="card col-md-3 mt-100 card-group d-flex flex-wrap">
                                <div class="card-content">
                                    <div class="card-body p-0">
                                        <div class="profile"> <img class="lazy" src="{{ asset('pific-web-site') }}/img/team/300-300/msa.jpg"> </div>
                                        <div class="card-title"> Mohd.Shajahan Ali<br /> <small>M.Sc Engr,CUBA
                                            /Civil Engineer </small> </div>
                                        <div class="card-subtitle">
                                            <p> <small class="text-muted"> Email : io-pific@imcw-bangladesh.com </small> </p>
                                        </div>
                                        {{-- <div class="card-subtitle">
											<p> <small class="text-muted">Mobile : +8801783360152 </small> </p>
										</div> --}}
                                        <div class="card-subtitle">
                                            <p> <small class="text-muted"> I expected anything less than perfect for the team of experts. They are the best team ever! </small> </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card col-md-3 mt-100">
                                <div class="card-content">
                                    <div class="card-body p-0">
                                        <div class="profile"> <img class="lazy" src="{{ asset('pific-web-site') }}/img/team/300-300/mcd.jpg"> </div>
                                        <div class="card-title"> Mukul Chandra Dey<br /> <small>Mechanical Engineer
                                            /Deputy Team Leader
                                             </small> </div>
                                        <div class="card-subtitle">
                                            <p> <small class="text-muted"> Email : dtl-pific@imcw-bangladesh.com </small> </p>
                                        </div>
                                        {{-- <div class="card-subtitle">
											<p> <small class="text-muted">Mobile :  +8801712291172 </small> </p>
										</div> --}}
                                        <div class="card-subtitle">
                                            <p> <small class="text-muted"> I really enjoyed working with them, they are Group of Professionals and they know what they're Doing </small> </p>
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
                                        <div class="card-title"> Abdus Salam<br /> <small>Electrical Engineer/
                                            B.Sc (Elect.), P.G.D (BUET)
                                           </small> </div>
                                        <div class="card-subtitle">
                                            <p> <small class="text-muted"> Email :  ee-pific@imcw-bangladesh.com </small> </p>
                                        </div>
                                        {{-- <div class="card-subtitle">
											<p> <small class="text-muted">Mobile : +8801749616608</small> </p>
										</div> --}}
                                        <div class="card-subtitle">
                                            <p> <small class="text-muted"> I always wanted cool videos of my concerts never knew whom to talk to but they are amazing! </small> </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card col-md-3 mt-100 card-group d-flex flex-wrap">
                                <div class="card-content">
                                    <div class="card-body p-0">
                                        <div class="profile"> <img class="lazy" src="{{ asset('pific-web-site') }}/img/team/300-300/arz.jpg"> </div>
                                        <div class="card-title"> Md. Rashed Zaman<br /> <small>Office Manager
                                         </small> </div>
                                        <div class="card-subtitle">
                                            <p> <small class="text-muted"> Email : om-pific@imcw-bangladesh.com </small> </p>
                                        </div>
                                        {{-- <div class="card-subtitle">
											<p> <small class="text-muted">Mobile :+8801711595373 </small> </p>
										</div> --}}
                                        <div class="card-subtitle">
                                            <p> <small class="text-muted"> I expected anything less than perfect for the team of experts. They are the best team ever! </small> </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card col-md-3 mt-100">
                                <div class="card-content">
                                    <div class="card-body p-0">
                                        <div class="profile"> <img class="lazy" src="{{ asset('pific-web-site') }}/img/team/300-300/t.jpg"> </div>
                                        <div class="card-title"> Tama Saha<br /> <small>MBA,CSCA
                                            Administrative Assistant
                                           </small> </div>

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
                                        <div class="card-title"> Faisal Mahmud Mahedi<br /> <small>B. Sc. Eng. (Civil)/
                                            Jr.Expert </small> </div>
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


				</div>
			</div>
		</section>
		<!--/ End About Us -->
		<!-- Footer -->
        @endsection

