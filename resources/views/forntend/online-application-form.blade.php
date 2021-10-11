@extends('layouts.online-application')
@section('content')

@if ($errors->any())
    <div class="alert alert-danger">
        <strong>Whoops!</strong> There were some problems with your input.<br><br>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

		<!-- About Us -->
		<section class="about-us section-space">
			<div class="container">
                <h2><strong>Online Application</strong></h2>
                <p>Fill all form field to go to next step</p>
                <div class="stepwizard">
                    <div class="stepwizard-row setup-panel">
                        <div class="stepwizard-step col-xs-2">
                            <a href="#step-1" type="button" class="btn btn-success btn-circle">A</a>
                            <p><small>General Information</small></p>
                        </div>
                        <div class="stepwizard-step col-xs-2">
                            <a href="#step-2" type="button" class="btn btn-default btn-circle"  disabled="" >B</a>
                            <p><small>Financial Information</small></p>
                        </div>
                        <div class="stepwizard-step col-xs-2">
                            <a href="#step-3" type="button" class="btn btn-default btn-circle" disabled >C</a>
                            <p><small>Project Justification </small></p>
                        </div>
                        <div class="stepwizard-step col-xs-2">
                            <a href="#step-4" type="button" class="btn btn-default btn-circle" disabled>D</a>
                            <p><small>Environmental and Social Screening</small></p>
                        </div>
                        <div class="stepwizard-step col-xs-2">
                            <a href="#step-5" type="button" class="btn btn-default btn-circle" disabled>E</a>
                            <p><small>Applicant(s) Statement  </small></p>
                        </div>
                        <div class="stepwizard-step col-xs-2">
                            <a href="#step-6" type="button" class="btn btn-default btn-circle" disabled>F</a>
                            <p><small>Finish</small></p>
                        </div>
                    </div>
                </div>

                <form role="form" id="myform" method="POST" action="{{ route('submits.create.step.one.post') }}" enctype="multipart/form-data">
                    @csrf
                    <div class="panel panel-primary setup-content" id="step-1">
                        <div class="panel-heading">
                             <h3 class="panel-title"></h3>
                        </div>
                        <div class="panel-body">
                            <div class="form-group">
                                <label class="control-label">1.Name of Lead Applicant </label>
                                <input name="g1_name_of_lead_applicant" id="name_of_lead_applicant" type="text" required="required" class="form-control" placeholder="Include enterprise name" />
                            </div>
                            <div class="form-group">
                                <label class="control-label">2.Contact Details of Applicant</label>
                                <div class="form-group" style="margin-left:2%;">
                                   <label class="control-label">Phone</label>
                                   <input name="g2_phone" id="g2_phone" type="text" required="required" class="form-control" placeholder="Phone" />
                                    <label class="control-label">Email</label>
                                    <input name="2_email" id="2_email" type="email" required class="form-control" placeholder="Email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$" />
                                    <label class="control-label">Adress</label>
                                    <input name="g2_address" id="g2_address" type="text" required="required" class="form-control" placeholder="Address" />
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label">3.What Sector are you Representing?<i class="fa fa-star" aria-hidden="true"></i></label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="g3_representing" id="representingRadios1" value="option1" checked >
                                <label class="form-check-label" for="representingRadios1">
                                Leather
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="g3_representing" id="representingRadios2" value="option2">
                                <label class="form-check-label" for="representingRadios2">
                                Footwear
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="g3_representing" id="representingRadios3" value="option3">
                                <label class="form-check-label" for="representingRadios3">
                                Plastic
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="g3_representing name=" " id=" "" id="representingRadios4" value="option4">
                                <label class="form-check-label" for="representingRadios">
                                Light Engineering
                                [ Sub-Sectors: Electronics & Electrical Goods /Accumulators/Automobiles and Parts /Foundries /Bicycles /Dies & Molds]
                                </label>
                            </div>
                                <div class="form-group">
                                    <label class="control-label">4.Name and contact details of firms in the cluster/association represented in this application </label>
                                    <input name="g4_clusterassociation" id="g4_clusterassociation" type="text" required="required" class="form-control" placeholder="Name" />
                                </div>
                            <div class="form-group" >
                                <label class="control-label">Phone</label>
                                <input  name="g4_phone" id="g4_phone"type="text" required="required" class="form-control" placeholder="Phone" />
                            </div>
                            <div class="form-group">
                                <label class="control-label">Email</label>
                                <input name="g4_email" id="g4_email" type="email" required class="form-control" placeholder="Email"  />
                            </div>
                            <div class="form-group">
                                <label class="control-label">Adress</label>
                                <input name="g4_address" id="g4_address"type="address" required="required" class="form-control" placeholder="Adress" />
                                <br>
                                <div class="form-group">
                                    <label class="control-label">5.Name and Contacts of the Project Manager</label>
                                    <input  name="g5_projectmanager" id="g5_projectmanager"  type="text" required="required" class="form-control" placeholder="Authorized person, not any entity" />
                                </div>
                                <div class="form-group">
                                    <label class="control-label">6.Provide Details of Business (Cluster/ Associations)<i class="fa fa-star" aria-hidden="true"></i></label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input   class="form-check-input" type="checkbox"  name="g6_certificate" id="g6_inlineCheckbox1" value="option1" selected>
                                    <label class="form-check-label" for="inlineCheckbox1"> 1-Certificate of Incorporation </label>
                                  </div>
                                  <div class="form-check form-check-inline">
                                    <input  class="form-check-input" type="checkbox"  name="g6_license" id="g6_inlineCheckbox2" value="option2">
                                    <label class="form-check-label" for="inlineCheckbox2">2-Trade License </label>
                                  </div>
                                  <div class="form-check form-check-inline">
                                    <input   class="form-check-input" type="checkbox"  name="g6_vattax" id="g6_inlineCheckbox3" value="option3" selected>
                                    <label class="form-check-label" for="inlineCheckbox3">3-VAT and Tax Certificates</label>
                                  </div>
                              </div>

                                    <label for="formFileMultiple" class="form-label">Multiple files input example</label>
                                    <input  name="g1_formFileMultiple" class="form-control" type="file" id="g1_formFileMultiple" />
                                    <br>
                                    <div class="form-group">
                                        <label class="control-label">7.Can you ensure availability of land for the proposed project? </label>
                                    </div>
                                        <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="g7_proposed" id="g7_inlineRadio1" value="option1" checked >
                                                <label class="form-check-label" for="inlineRadio1">Yes</label>

                                                <input class="form-check-input" type="radio" name="g7_proposed" id="g7_inlineRadio2" value="option2">
                                                <label class="form-check-label" for="inlineRadio2">No</label>

                                            </div>
                                  <div class="form-group">
                                    <label class="control-label">8.Are all the cluster members categorized as MSME? <i class="fa fa-star" aria-hidden="true"></i></label>
                                </div>
                                  <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="g8_MSME" id="g8_inlineRadio1" value="option1" checked >
                                    <label class="form-check-label" for="inlineRadio1">Yes</label>

                                    <input class="form-check-input" type="radio" name="g8_MSME" id="g8_inlineRadio2" value="option2">
                                    <label class="form-check-label" for="inlineRadio2">No</label>
                                  </div>
                                  <div class="form-group">
                                    <label class="control-label">9.Include any other relevant information</label>
                                    <input maxlength="100" name="g9_relevantinfo" id="g9_relevantinfo" type="text" required="required" class="form-control" placeholder="" >
                                </div>
                                <div class="form-group">
                                    <label class="control-label">10.Proposed Project Information</label>
                                    <input maxlength="100" name="g10_projectinfo" id="g10_projectinfo" type="text" required="required" class="form-control" placeholder="Project Name" />
                                </div>
                                <div class="form-group">
                                    <label class="control-label">11.Project Location</label>
                                </div>
                                <div class="form-group"style="margin-left: 2%;">
                                    <label class="control-label">Coordinates, Map, address, land details etc.</label>
                                    <input maxlength="100"  name="g11_map" id="g11_map"type="text" required="required" class="form-control" placeholder="(Coordinates, Map, address, land details etc)" />
                                </div>
                                <div class="form-group"style="margin-left: 2%;">
                                    <label class="control-label">provide relevant Dag no. Khotian no. Mouza map </label>
                                    <input maxlength="100" name="g11_Dagno" id="g11_Dagno" type="text" required="required" class="form-control" placeholder="provide relevant Dag no. Khotian no. Mouza map" />
                                </div>
                                <div class="form-group">
                                    <label class="control-label">12.Project Type </label>
                                    <input maxlength="100"  name="g12_projecttype" id="g12_projecttype"type="text" required="required" class="form-control" placeholder="Improvement, new development, extension etc" />
                                </div>
                                <div class="form-group">
                                    <label class="control-label">13.Project Description </label>
                                    <input maxlength="100" name="g13_projectdescr" id="g13_projectdescr" type="text" required="required" class="form-control" placeholder="narrative description of the proposed project" />
                                </div>
                                <div class="form-group">
                                    <label class="control-label">14.Project Details</label>
                                    <div class="form-group " style="margin-left: 2%;">
                                        <label for="">Quantitative details (eg. size, capacity, volume, footprint, etc.)</label>
                                        <input maxlength="100"  name="g14_quantitative" id="g14_quantitative"type="text" required="required" class="form-control" placeholder="Quantitative details (eg. size, capacity, volume, footprint, etc.)" />

                                        <div class="form-group">
                                            <label class="control-label">Existing site condition/ Land use</label>
                                            <input maxlength="100" name="g14_condition" id="g14_condition" type="text" required="required" class="form-control" placeholder="Existing site condition/ Land use" />
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label">Available utilities at site (Water, Electricity, Sewerage etc.)</label>
                                            <input maxlength="100" name="g14_utlities" id="g14_utlities" type="text" required="required" class="form-control" placeholder="Available utilities at site (Water, Electricity, Sewerage etc.)"  />
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label">Connectivity (Road access, Telecom, etc)</label>
                                            <input maxlength="100" name="g14_connectivity" id="g14_connectivity" type="text" required="required" class="form-control" placeholder="Connectivity (Road access, Telecom, etc)" />
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label">Nearby Facilities (Fire Service Stations, Power supply systems, Solid waste facilities, Warehouses etc.)</label>
                                            <input maxlength="100" name="g14_facilites" id="g14_facilites" type="text" required="required" class="form-control" placeholder="Nearby Facilities (Fire Service Stations, Power supply systems, Solid waste facilities, Warehouses etc.) " />
                                        </div>


                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="control-label">15.Project Implementation</label>
                                    <input maxlength="100" name="g15_projimple" id="g15_projimple" type="text" required="required" class="form-control" placeholder="(Describe any management and resource support the Applicant will provide in implementation) " />
                                </div>
                                <div class="form-group">
                                    <label class="control-label">16.Do you have any of these available?(Project Readiness)<i class="fa fa-star" aria-hidden="true"></i></label>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input"name="g16_readiness" type="checkbox" id="g16_inlineCheckbox1" value="option1" >
                                    <label class="form-check-label" for="g16_inlineCheckbox1">Detailed Project Scope </label>
                                  </div>
                                  <div class="form-check form-check-inline">
                                    <input class="form-check-input"name="g16_readiness" type="checkbox" id="g16_inlineCheckbox2" value="option2" >
                                    <label class="form-check-label" for="g16_inlineCheckbox2">Technical Study/Design </label>
                                  </div>
                                  <div class="form-check form-check-inline">
                                    <input class="form-check-input"name="g16_readiness" type="checkbox" id="g16_inlineCheckbox3" value="option3">
                                    <label class="form-check-label" for="g16_inlineCheckbox3">Feasibility Study</label>
                                  </div>
                                  <div class="form-check form-check-inline">
                                    <input class="form-check-input" name="g16_readiness"type="checkbox" id="g16_inlineCheckbox4" value="option1" >
                                    <label class="form-check-label" for="g16_inlineCheckbox4">Economic /Financial Analysis </label>
                                  </div>
                                  <div class="form-check form-check-inline">
                                    <input class="form-check-input"name="g16_readiness" type="checkbox" id="g16_inlineCheckbox5" value="option2" >
                                    <label class="form-check-label" for="g16_inlineCheckbox5">Environmental Impact Assessment </label>
                                  </div>
                                  <div class="form-check form-check-inline">
                                    <input class="form-check-input" name="g16_readiness"type="checkbox" id="g16_inlineCheckbox6" value="option3">
                                    <label class="form-check-label" for="g16_inlineCheckbox6">Social Impact Assessment</label>
                                  </div>
                                  <div class="form-check form-check-inline">
                                    <input class="form-check-input" name="g16_readiness"type="checkbox" id="g16_inlineCheckbox7" value="option2" >
                                    <label class="form-check-label" for="g16_inlineCheckbox7">Clearance from appropriate Local and National authorities </label>
                                  </div>
                                  <div class="form-check form-check-inline">
                                    <input class="form-check-input"name="g16_readiness" type="checkbox" id="g16_inlineCheckbox8" value="option3">
                                    <label class="form-check-label" for="g16_inlineCheckbox8">Environmental Clearance Certificate</label>
                                  </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label">17.Project implementation period</label>
                                    <input type="text"name="g17_implemen" id="g17_implemen" required="required" class="form-control" placeholder="" >
                                </div>
                                <div class="form-group">
                                    <label class="control-label">18.Do you have a business model to sustain the project? </label>
                                </div>
                                  <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="g18_businessmodel" id="inlineRadio1" value="option1" checked >
                                    <label class="form-check-label" for="inlineRadio1">Yes</label>

                                    <input class="form-check-input" type="radio" name="g18_businessmodel" id="inlineRadio2" value="option2">
                                    <label class="form-check-label" for="inlineRadio2">No</label>
                                  </div>
                            <button class="btn btn-primary nextBtn pull-right" type="submit">Next</button>
                        </div>
                    </div>
                </form>    

                <form role="form" id="myform" method="post" action=" " enctype="multipart/form-data">   
                    @csrf 
                    <div class="panel panel-primary setup-content" id="step-2">
                        <div class="panel-heading">
                             <h3 class="panel-title">Financial Information</h3>
                        </div>
                        <div class="panel-body">
                                <h3 class="panel-title"><b>1.Performance/Year</b></h3>
                                    <div class="form-group">
                                        <label class="control-label mb-2">Estimated total annual turnover of the firms represented in this application (BDT/USD)</label>
                                        <br>
                                        <label class="control-label">2017</label>
                                        <input maxlength="200"  name=" f1_performance" id=" f1_performance"type="text" required="required" class="form-control" placeholder=""  />
                                    </div>


                            <div class="form-group">
                                <label class="control-label">2018</label>
                                <input maxlength="200"  name="f1_2018 " id=" f1_2018"type="text" required="required" class="form-control" placeholder=""  />
                            </div>
                            <div class="form group">
                                 <label class="control-label">2019</label>
                                <input maxlength="200"  name="f1_2019 " id="f1_2019 "type="text" required="required" class="form-control" placeholder="" />
                            </div>
                            <br>
                            <div class="from group">
                                <label class="control-label">2020(if available)</label>
                                <input maxlength="200"  name="f1_2020 " id=" f1_2020"type="text" required="required" class="form-control" placeholder="" />
                            </div>
                            <br>
                            <div class="form-group">
                                <label class="control-label">2.Estimated Project Cost</label>
                                <input maxlength="200"  name="f2_projectcost " id=" f2_projectcost"type="text" required="required" class="form-control" placeholder="If you have a budget breakdown of costs on a spreadsheet, or in some other format, please include this with the application."  />
                            </div>
                        </div>
                           <div class="panel-body">
                               <h3 class="panel-title"><b>3.Sources of Financing the Project</b></h3>
                               <br>
                               <h4 class ="panel-title">Use the table to input all sources of funding for the project </h4>
                               <br>
                                   <div class=" form-group">
                                       <div class="form-group">
                                           <label class="control-label mr-2">PIFIC Funding</label>
                                       <br>
                                       <div class="col-md-6">
                                           <label class="control-label">Amount [US$/BDT]
                                            </label>
                                           <input maxlength="200" name="f3_ammount " id="f3_ammount " type="text" required="required" class="form-control" placeholder="" />
                                       </div>
                                       <label for="">Notes (terms and sources to be detailed)</label>
                                       <div class="col-md-6">
                                           <input name=" f3_amountnote" id="f3_amountnote " type="text"class="form-control" >
                                       </div>
                                       </div>
                                   </div>
                                   <div class=" form-group">
                                    <div class="form-group">
                                        <label class="control-label mr-2">Bank Loans</label>
                                    <br>
                                    <div class="col-md-6">
                                        <label class="control-label">Amount
                                         [ US$/BDT]
                                         </label>
                                        <input maxlength="200"  name=" f3_bankloan" id="f3_bankloan "type="text" required="required" class="form-control" placeholder=""  />
                                    </div>
                                    <label for="">Notes (terms and sources to be detailed)</label>
                                    <div class="col-md-6">
                                        <input  name=" f3_BankNote" id="f3_BankNote "type="text"  class="form-control" >
                                    </div>
                                    </div>
                                </div>
                                <div class=" form-group">
                                    <div class="form-group">
                                        <label class="control-label mr-2">Own Contribution </label>
                                    <br>
                                    <div class="col-md-6">
                                        <label class="control-label">Amount
                                         [ US$/BDT]
                                         </label>
                                        <input maxlength="200" name="f3_owncontribution" id="f3_owncontribution " type="text" required="required" class="form-control" placeholder="" />
                                    </div>
                                    <label for="">Notes (terms and sources to be detailed)</label>
                                    <div class="col-md-6">
                                        <input  name="f3_ownnote " id="f3_ownnote "type="text"  class="form-control" f3_ownnote>
                                    </div>
                                    </div>
                                </div>
                                <div class=" form-group">
                                    <div class="form-group">
                                        <label class="control-label mr-2">Total</label>
                                    <br>
                                    <div class="col-md-6">
                                        <label class="control-label">Amount
                                         [ US$/BDT]
                                         </label>
                                        <input maxlength="200" name=" f3_total" id="f3_total " type="text" required="required" class="form-control" placeholder="" />
                                    </div>
                                    <label for="">Notes (terms and sources to be detailed)</label>
                                    <div class="col-md-6">
                                        <input  name="f3_totalnote " id="f3_totalnote "type="text"  class="form-control" >
                                    </div>
                                    </div>
                                </div>
                               <br>
                               <br>
                            <button class="btn btn-primary nextBtn pull-right" type="submit">Next</button>
                        </div>
                    </div>
                </form>    

                <form role="form" id="myform" method="post" action=" " enctype="multipart/form-data">
                    <div class="panel panel-primary setup-content" id="step-3">
                        <div class="panel-heading">
                             <h3 class="panel-title">Project Justification </h3>
                        </div>
                        <div class="panel-body">
                            <div class="form-group">
                                <label class="control-label">1.What are the main problems faced by your cluster of business?</label>
                                <input maxlength="200" name="p1_cluster_of_business" id="p1_cluster_of_business"type="text" required="required" class="form-control" placeholder="" />
                            </div>
                            <div class="form-group">
                                <label class="control-label">2.What cluster benefits will be realized by the intended project?</label>
                                <input maxlength="200" name="p2_intended" id="p2_intended"type="text" required="required" class="form-control" placeholder=""  />
                            </div>
                            <div class="form-group">
                                <label class="control-label">3.Who will be the users of the project and how many?</label>
                                <input maxlength="200"name="p3_how_many" id="p3_how_many" type="text" required="required" class="form-control" placeholder="Who will be the final users of the project outputs? Indicate how many end-users there will be for the services provided by the project."  />
                            </div>
                            <div class="form-group">
                                <label class="control-label">4.Have you considered alternative solutions to your problem? List other options (technical, organizational etc.) and explain why the proposed project is the preferred option</label>
                                <input maxlength="200"name="p4_solution" id="p4_solution" type="text" required="required" class="form-control" placeholder=""   />
                            </div>
                            <div class="form-group">
                                <label class="control-label">5.Provide information about the impact of the project to the manufacturing, export, production levels etc. </label>
                                <input maxlength="200"name="p5_manufacturing" id="p5_manufacturing" type="text" required="required" class="form-control" placeholder=""  />
                            </div>
                            <div class="form-group">
                                <label class="control-label">6.Provide number of possible jobs to be created by the project.</label>
                                <input maxlength="200" name="p6_created"id="p6_created"type="text" required="required" class="form-control" placeholder="Indicate number of new permanent and direct working places during operational period (jobs created in the facility)"  />
                            </div>
                            <div class="form-group">
                                <label class="control-label">7.Will this project promote female participation? </label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="p7_participation" id="p7_radio1" value="option1" checked >
                                <label class="form-check-label" for="inlineRadio1">Yes</label>
                              </div>
                              <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="p7_participation" id="p7_radio2" value="option2">
                                <label class="form-check-label" for="inlineRadio2">No</label>
                              </div>

                            <button class="btn btn-primary nextBtn pull-right" type="button">Next</button>
                        </div>
                    </div>
                </form>    

                <form role="form" id="myform" method="post" action=" " enctype="multipart/form-data">
                    <div class="panel panel-primary setup-content" id="step-4">
                        <div class="panel-heading">
                             <h3 class="panel-title">Environmental and Social Screening</h3>
                        </div>
                        <div class="panel-body">
                            <div class="form-group">
                                <label class="control-label">1.Is there any known potential environmentally sensitive issue/s?  </label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="e1_sensitive" id="e1_sensitiveRadio1" value="option1" checked>
                                <label class="form-check-label" for="inlineRadio1">Yes</label>

                                <input class="form-check-input" type="radio" name="e1_sensitive" id="e1_sensitiveRadio2" value="option2">
                                <label class="form-check-label" for="inlineRadio2">No</label>
                              </div>
                              <div class="form-group">
                                <label class="control-label">2.Will there be any positive environmental benefits? </label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="e2_benefits" id="e2_benefitsRadio1" value="option1" checked >
                                <label class="form-check-label" for="inlineRadio1">Yes</label>

                                <input class="form-check-input" type="radio" name="e2_benefits" id="e2_benefitsRadio2" value="option2">
                                <label class="form-check-label" for="inlineRadio2">No</label>
                              </div>
                              <div class="form-group">
                                <label class="control-label">3.Is there any potential significant social impact? </label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="e3_socalimpact" id="e3_socalimpactRadio1" value="option1" checked >
                                <label class="form-check-label" for="inlineRadio1">Yes</label>

                                <input class="form-check-input" type="radio" name="e3_socalimpact" id="e3_socalimpactRadio2" value="option2">
                                <label class="form-check-label" for="inlineRadio2">No</label>
                              </div>
                              <div class="form-group">
                                <label class="control-label">4.Will there be loss of agriculture and other productive assets (crops, trees)? </label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="e4_assets" id="e4_assetsRadio1" value="option1" checked >
                                <label class="form-check-label" for="inlineRadio1">Yes</label>

                                <input class="form-check-input" type="radio" name="e4_assets" id="e4_assetsRadio2" value="option2">
                                <label class="form-check-label" for="inlineRadio2">No</label>
                              </div>
                                <div class="form-group">
                                <label class="control-label">5.Will there be loss of income sources and means of livelihoods? </label>
                                </div>
                                <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="e5_livelihoods" id="e5_livelihoodsRadio1" value="option1" checked >
                                <label class="form-check-label" for="inlineRadio1">Yes</label>

                                <input class="form-check-input" type="radio" name="e5_livelihoods" id="e5_livelihoodsRadio2" value="option2">
                                <label class="form-check-label" for="inlineRadio2">No</label>
                                </div>
                                <div class="form-group">
                                <label class="control-label">6.Will there be any tangible and intangible effect on cultural/ historical heritage? </label>
                                </div>
                                <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="e6_heritage" id="e6_heritageRadio1" value="option1" checked >
                                <label class="form-check-label" for="inlineRadio1">Yes</label>

                                <input class="form-check-input" type="radio" name="e6_heritage" id="e6_heritageRadio2" value="option2">
                                <label class="form-check-label" for="inlineRadio2">No</label>
                                </div>
                                <div class="form-group">
                                <label class="control-label">7.Will there be any resettlement required for the implementation of this project? </label>
                                </div>
                                <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="e7_implemen" id="e7_implemenRadio1" value="option1" checked >
                                <label class="form-check-label" for="inlineRadio1">Yes</label>

                                <input class="form-check-input" type="radio" name="e7_implemen" id="e7_implemenRadio2" value="option2">
                                <label class="form-check-label" for="inlineRadio2">No</label>
                                </div>
                                <div class="form-group">
                                <label class="control-label">8.What is the potential environmental category of this project (as per ECR 1997 of GoB)?<i class="fa fa-star" aria-hidden="true"></i> </label>
                                </div>
                              <div class="form-group">
                                  <div class="form-check form-check-inline">
                                        <div class="ilcb green mr-2">
                                            <label class="checkbox-inline">
                                                <input name="e8_green" id="e8_check1"type="checkbox" value="1" selected checked>Option 1
                                            </label>
                                        </div>
                                        <div class="ilcb orange" style=" background-color:orange;">
                                            <label class="checkbox-inline">
                                                <input name="e8_orange" id="e8_check2" type="checkbox" value="2">Option 2
                                                </label>
                                        </div>
                                        <div class="ilcb darkora style="background-color:darkorange;">
                                            <label class="checkbox-inline">
                                                <input name="e8_darkorg" id="e8_check3" type="checkbox" value="3">Option 3
                                            </label>
                                        </div>
                                        <div class="ilcb red" style="background-color:red;">
                                            <label class="checkbox-inline">
                                                <input name="e8_red" id="e8_check4"type="checkbox" value="4">Option 4
                                            </label>
                                        </div>
                                    </div>
                              </div>
                              <button class="btn btn-primary nextBtn pull-right" type="button">Next</button>
                        </div>
                    </div>
                </form>

                <form role="form" id="myform" method="post" action="" enctype="multipart/form-data">    
                    <div class="panel panel-primary setup-content" id="step-5">
                        <div class="panel-heading">
                             <h3 class="panel-title">Applicant(s) Statement</h3>
                        </div>
                        <div class="panel-body">
                            <div class="form-group">
                                <label class="control-label">I, the undersigned, as the legal representative(s) of the cluster enterprise(s) applying for technical assistance and financing from PIFIC. The information supplied to PIFIC regarding this application is true and accurate. </label>
                            </div>
                            <div class="form-group">
                                <label class="control-label">Name:</label>
                                <input maxlength="200" name="a_name" id="a_name"type="text" required="required" class="form-control" placeholder="Name" />
                            </div>
                            <div class="form-group">
                                <label class="control-label">Position:</label>
                                <input maxlength="200"name="a_position" id="a_position" type="text" required="required" class="form-control" placeholder="Position" />
                            </div>
                            <div class="form-group">
                                <label class="control-label">Signature:</label>
                                <input class="form-control"name="a_sigbature" id="a_sigbature" type="file" id="formFileMultiple" multiple />
                            </div>
                            <div class="form-group">
                                <label class="control-label">Date and place:</label>
                                <input maxlength="200"name="a_dateplace" id="a_dateplace" type="text" required="required" class="form-control" placeholder="Date and Place" />
                            </div>
                            <button class="btn btn-primary nextBtn pull-right" type="button">Next</button>
                        </div>
                    </div>

                    <div class="panel panel-primary setup-content" id="step-6">
                        <div class="panel-heading">
                             <h3 class="panel-title">Finish</h3>
                        </div>
                        <div class="panel-body">
                            <div class="form-group">
                                <center>
                                    <img src="{{ asset('pific-web-site') }}/img/success.png" alt="success image" class="img-thumbnail" style="height: 200px; position: relative; ">
                                </center>
                            </div>
                            <button class="btn btn-success pull-right" type="submit" id="butsave">Submit Application</button>
                         </div>
                    </div>
                </form>
            </div>
<script>
    $(document).ready(function () {
        

    var navListItems = $('div.setup-panel div a'),
        allWells = $('.setup-content'),
        allNextBtn = $('.nextBtn');

    allWells.hide();

    navListItems.click(function (e) {
        e.preventDefault();
        var $target = $($(this).attr('href')),
            $item = $(this);

        if (!$item.hasClass('disabled')) {
            navListItems.removeClass('btn-success').addClass('btn-default');
            $item.addClass('btn-success');
            allWells.hide();
            $target.show();
            $target.find('input:eq(0)').focus();
        }
    });

    allNextBtn.click(function () {
        var curStep = $(this).closest(".setup-content"),
            curStepBtn = curStep.attr("id"),
            nextStepWizard = $('div.setup-panel div a[href="#' + curStepBtn + '"]').parent().next().children("a"),
            curInputs = curStep.find("input[type='text'],input[type='url']"),
            isValid = true;

        $(".form-group").removeClass("has-error");
        for (var i = 0; i < curInputs.length; i++) {
            if (!curInputs[i].validity.valid) {
                isValid = false;
                $(curInputs[i]).closest(".form-group").addClass("has-error");
            }
        }

        if (isValid) nextStepWizard.removeAttr('disabled').trigger('click');
    });

    $('div.setup-panel div a.btn-success').trigger('click');

    //submit-form-function
    // $('#myform').on('submit',function(e) {
    // // $('#butsave').on('click', function() {
    //     alert('ok');
    //     var name = $('#name').val();
    //     var email = $('#email').val();
    //     var phone = $('#phone').val();
    //     var city = $('#city').val();
    //     var password = $('#password').val();
    //     if(name!="" && email!="" && phone!="" && city!=""){
    //         /*  $("#butsave").attr("disabled", "disabled"); */

    //         $.ajaxSetup({
    //                     headers: {
    //                             'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    //                         }
    //                 });
    //         var url="{{url('/submit-application')}}"        
    //         //var formData=new FormData(this);        

    //         $.ajax({
    //             //url: "/userData",
    //             url: url,
    //             type: "POST",
    //             //data:formData,
    //             // contentType: false,
    //             // processData: false,
    //             data: {
    //                 _token: $("#csrf").val(),
    //                 type: 1,
    //                 name: name,
    //                 email: email,
    //                 phone: phone,
    //                 city: city
    //             },
    //             cache: false,
    //             success: function(dataResult){
    //                 console.log(dataResult);
    //                 var dataResult = JSON.parse(dataResult);
    //                 if(dataResult.statusCode==200){
    //                     window.location = "/online-apply";
    //                 }
    //                 else if(dataResult.statusCode==201){
    //                     alert("Error occured !");
    //                 }

    //             }
    //         });
    //     }
    //     else{
    //         alert('Please fill all the field !');
    //     }
    // });
});
</script>
</section>
		<!--/ End About Us -->

        @endsection
