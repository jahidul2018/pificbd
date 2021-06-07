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
									<li><a href="about.html">Our ICT Team</a></li>
								</ul>
							</div>
							<!-- Bread Title -->
							<div class="bread-title"><h2> ICT Team</h2></div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- / End Breadcrumb -->
		<style>
        .team{background-color:#fff;text-align:center;border-radius:20px;margin-bottom:50px}.mt-100{margin-top:100px}.profile img{width:150px;height:150px;border-radius:50%}.profile img:hover{transform:scale(1.5)}.card{border-radius:15px;margin-left:30px;margin-right:30px;box-shadow:0 10px 20px rgba(0,0,0,.2)}.card-body{position:relative;bottom:35px}.btn{margin-top:36px;margin-bottom:45px;background-color:#ab47bc;border:none;color:#fff}.btn:hover{-webkit-transform:scale(1.05);-ms-transform:scale(1.05);transform:scale(1.05);color:#fff}
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
                                        <div class="profile"> <img class="lazy" src="https://i.dlpng.com/static/png/6342390_preview.png"> </div>
                                        <div class="card-title"> name <br /> <small>Team Leader</small> <small> Email :</small> </div>
                                        <div class="card-subtitle">
                                            <p> <small class="text-muted"> Email :  </small> </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card-group d-flex flex-wrap">
                            <div class="card col-md-3 mt-100">
								<div class="card-content">
									<div class="card-body p-0">
										<div class="profile"> <img class="lazy" src="https://i.dlpng.com/static/png/6342390_preview.png"> </div>
										<div class="card-title"> <br /> <small> Team Leader</small> </div>
										<div class="card-subtitle">
											<p> <small class="text-muted">  </small> </p>
										</div><br />
                                        <div class="card-subtitle">
                                            <p> <small class="text-muted"> Email : </small> </p>
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
										<div class="profile"> <img class="lazy" src="https://i.dlpng.com/static/png/6342390_preview.png"> </div>
										<div class="card-title"> <br /> <small> Officer</small> </div>
                                        <div class="card-subtitle">
                                            <p> <small class="text-muted"> Email :
                                               </small> </p>
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
                                        <div class="profile"> <img class="lazy" src="https://i.dlpng.com/static/png/6342390_preview.png"> </div>
                                        <div class="card-title"> name<br /> officer <small>
                                            /Civil Engineer </small> </div>
                                        <div class="card-subtitle">
                                            <p> <small class="text-muted"> Email : </small> </p>
                                        </div>
                                        {{-- <div class="card-subtitle">
											<p> <small class="text-muted">Mobile : +8801783360152 </small> </p>
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
                                        <div class="profile"> <img class="lazy" src="https://i.dlpng.com/static/png/6342390_preview.png"> </div>
                                        <div class="card-title">name<br /> <small>Engineer

                                             </small> </div>
                                        <div class="card-subtitle">
                                            <p> <small class="text-muted"> Email : </small> </p>
                                        </div>
                                        {{-- <div class="card-subtitle">
											<p> <small class="text-muted">Mobile :  +8801712291172 </small> </p>
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
                                        <div class="profile"> <img class="lazy" src="https://i.dlpng.com/static/png/6342390_preview.png"> </div>
                                        <div class="card-title"> Name<br /> <small> Engineer

                                           </small> </div>
                                        <div class="card-subtitle">
                                            <p> <small class="text-muted"> Email :  </small> </p>
                                        </div>
                                        {{-- <div class="card-subtitle">
											<p> <small class="text-muted">Mobile : +8801749616608</small> </p>
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
                                        <div class="profile"> <img class="lazy" src="https://i.dlpng.com/static/png/6342390_preview.png"> </div>
                                        <div class="card-title">name<br /> <small>Manager
                                         </small> </div>
                                        <div class="card-subtitle">
                                            <p> <small class="text-muted"> Email : </small> </p>
                                        </div>
                                        {{-- <div class="card-subtitle">
											<p> <small class="text-muted">Mobile :+8801711595373 </small> </p>
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
                                        <div class="profile"> <img class="lazy" src="https://i.dlpng.com/static/png/6342390_preview.png"> </div>
                                        <div class="card-title"> name<br /> <small> Enginer

                                           </small> </div>

                                        <div class="card-subtitle">
                                            <p> <small class="text-muted"> Email : </small> </p>
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
                                        <div class="profile"> <img class="lazy" src="https://i.dlpng.com/static/png/6342390_preview.png"> </div>
                                        <div class="card-title"> Name <br /> <small>
                                            Jr.Expert </small> </div>
                                        <div class="card-subtitle">
                                            <p> <small class="text-muted"> Email :  </small> </p>
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

