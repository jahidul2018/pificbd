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
                                <li><a href="about.html">GRC</a></li>
                            </ul>
                        </div>
                        <div class="bread-title"><h2>About GRC</h2></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <section class="services section-bg ">
        <div class="">
            <div class="row section-space justify-content-center">
                <div class="col-lg-6 col-md-6 col-6">
                    <div class="modern mb-4">
                        <img class="lazy" src="{{ asset('pific-web-site') }}/img/grm/grc-page-section.jpg" alt="About GRM" >
                    </div>
                </div>
                {{-- <div class="col-lg-5 col-md-6 col-12">
                    <div class="about-content section-title default text-left">
                        <div class="section-top section-title-2">
                            <h1><b>GRIEVANCE REDRESS MECHANISM </b></h1>
                        </div>
                        <div class="section-bottom section-title-2">
                            <div class="text">
                                <p>The Consultant has commenced the establishment of a Grievance Redress Mechanism (GRM) as required by the PIFIC Operating Guidelines. Grievances are issues, concerns, problems, or claims (perceived or actual) that individuals / community / target industry groups want to address and be resolved by the Project. The grievance mechanism is a locally based, project-specific extra-legal way to deal with and resolve complaints and grievances faster and thus enhance project performance standards. The Consultant has discussed with PIU and the Grievance Redress Framework (GRF) for EC4J Project in setting up the GRM for PIFIC. GRM consists of Grievance Redress Committees (GRCs), Focal Point and a process for documenting, communicating and addressing the grievances in a satisfactory manner.  </p>
                                <h1>Grievance Redress Committee (GRC)</h1>
                                <p>A two-tier bottom up GRC system will be established. First, there will be a GRC at the local level formed by PIFIC MU Consultant and a GRC at the project level established by PIU. Local GRC will include representatives from target industry sectors, local elected representatives and representatives of the affected persons (AP) preferably women representative in case of women AP. Currently the Local GRC consists of PIFIC Manager/TL, Deputy Team Leader, PIFIC and Investment Officer, PIFIC. For external members, the Consultant has initiated identification of potential members from the target sectors. Specific individuals will be confirmed in the coming quarter.</p>
                            </div>
                        </div>
                    </div>
                </div>--}}
            </div>
            {{-- <div class="row ">
                <div class="col-lg-5 col-md-6 col-12">
                    <div class="about-content section-title default text-left">
                        <div class="section-bottom section-title-2">
                            <div class="text">
                                <h1><b>Resolution Steps:</b> </h1>
                                <p>The local GRC will hear the grievances first. Grievances will be redressed within a month from the date of lodging the complaints. GRC decisions will be on a majority basis and will be disclosed and available for review by the stakeholders. Only unresolved cases will be forwarded to the next tier – Project level GRC for further review and resolution.
                                </p>
                                <p>The Project-Level GRC established at PIU will review all unresolved cases forwarded from local GRC. The Project-level GRC will further establish fairness and transparency in the resolution of disputes or grievances. If any disputant is unhappy or unsatisfied with the outcome of the Project level GRC, he/she may file cases in the court
                                </p>
                                <h1>Documentation and Monitoring:</h1>
                                <p>To ensure impartiality and transparency, hearings on complaints at the GRC level will remain open to the public. The GRC will record the details of the complaints and their resolution in a register, including intake details, resolution process, and the closing procedures. PIU consultant will maintain the following three GRM Books: Opening Book, Resolution Book and Closing Book.</p>
                                <p>The GRC will also prepare periodic reports on the grievance resolution process and publish these on their websites. PIU will consolidate reports from the GRCs on GRM and post in their website. </p>
                                <h1>Focal point:</h1>
                                <p>At the local level PIFIC MU has designated a focal point who is responsible to receive and record grievances, try to resolve the grievance on the spot and if not solved set up a hearing with Local GRC.</p>
                                <p>
                                    <p>Focal point: Mr. Hakimur Rashid, Deputy Team Leader, PIFIC MU </p>
                                    <p> <a href="tel:+8801712291172"> Contact: 	Phone +88 01712291172</a> </p> <a href="mailto:info@pific.com"> Email: dtl-pific@imcw-bangladesh.com </a>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5 offset-lg-1 col-md-6 col-12">
                    <div class="modern">
                        <img class="lazy" src="{{ asset('pific-web-site') }}/img/grm/grc.jpg" alt="About GRC">
                    </div>
                </div>
            </div> --}}
        </div>
    </section>
@endsection
@section('script')

@endsection


