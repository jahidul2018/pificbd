@extends('layouts.online-application')
@section('content')

		<!-- About Us -->
		<section class="about-us section-space">
			<div class="container">
                <h2><strong>Sign Up Your Online Application</strong></h2>
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

                <form role="form">
                    <div class="panel panel-primary setup-content" id="step-1">
                        <div class="panel-heading">
                             <h3 class="panel-title"></h3>
                        </div>
                        <div class="panel-body">
                            <div class="form-group">
                                <label class="control-label">1.Name of Lead Applicant </label>
                                <input maxlength="100" type="text" required="required" class="form-control" placeholder="Include enterprise name" />
                            </div>
                            <div class="form-group">
                                <label class="control-label">2.Contact Details of Lead Applicant</label>
                                <div class="form-group" style="margin-left:2%;">
                                   <label class="control-label">Phone</label>
                                   <input maxlength="100" type="text" required="required" class="form-control" placeholder="Phone" />
                                    <label class="control-label">Email</label>
                                    <input maxlength="100" type="text" required="required" class="form-control" placeholder="Email" />
                                    <label class="control-label">Adress</label>
                                    <input maxlength="100" type="text" required="required" class="form-control" placeholder="Address" />
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label">3.What Sector are you Representing?<i class="fa fa-star" aria-hidden="true"></i></label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1" checked >
                                <label class="form-check-label" for="exampleRadios1">
                                Leather
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios2" value="option2">
                                <label class="form-check-label" for="exampleRadios2">
                                Footwear
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios3" value="option3">
                                <label class="form-check-label" for="exampleRadios3">
                                Plastic
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios3" value="option3">
                                <label class="form-check-label" for="exampleRadios3">
                                Light Engineering
                                </label>
                            </div>
                                <div class="form-group">
                                    <label class="control-label">4.Name and contact details of firms in the cluster/association represented in this application </label>
                                    <input maxlength="100" type="text" required="required" class="form-control" placeholder="Name" />
                                </div>
                            <div class="form-group" >
                                <label class="control-label">Phone</label>
                                <input maxlength="100" type="text" required="required" class="form-control" placeholder="Phone" />
                            </div>
                            <div class="form-group">
                                <label class="control-label">Email</label>
                                <input maxlength="100" type="text" required="required" class="form-control" placeholder="Email"  />
                            </div>
                            <div class="form-group">
                                <label class="control-label">Adress</label>
                                <input maxlength="100" type="text" required="required" class="form-control" placeholder="Adress" />
                                <br>
                                <div class="form-group">
                                    <label class="control-label">5.Name and Contacts of the Project Manager</label>
                                    <input maxlength="100" type="text" required="required" class="form-control" placeholder="Authorized person, not any entity" />
                                </div>
                                <div class="form-group">
                                    <label class="control-label">6.Provide Details of Business (Cluster/ Associations)<i class="fa fa-star" aria-hidden="true"></i></label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1" selected>
                                    <label class="form-check-label" for="inlineCheckbox1"> 1-Certificate of Incorporation </label>
                                  </div>
                                  <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
                                    <label class="form-check-label" for="inlineCheckbox2">2-Trade License </label>
                                  </div>
                                  <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" id="inlineCheckbox3" value="option3" selected>
                                    <label class="form-check-label" for="inlineCheckbox3">3-VAT and Tax Certificates</label>
                                  </div>
                              </div>

                                    <label for="formFileMultiple" class="form-label">Multiple files input example</label>
                                    <input class="form-control" type="file" id="formFileMultiple" multiple />
                                    <br>
                                    <div class="form-group">
                                        <label class="control-label">7.Can you ensure availability of land for the proposed project? </label>
                                    </div>
                                        <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1" checked >
                                                <label class="form-check-label" for="inlineRadio1">Yes</label>

                                                <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
                                                <label class="form-check-label" for="inlineRadio2">No</label>

                                            </div>
                                  <div class="form-group">
                                    <label class="control-label">8.Are all the cluster members categorized as MSME? <i class="fa fa-star" aria-hidden="true"></i></label>
                                </div>
                                  <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="inlineRadioOptions1" id="inlineRadio1" value="option1" checked >
                                    <label class="form-check-label" for="inlineRadio1">Yes</label>

                                    <input class="form-check-input" type="radio" name="inlineRadioOptions1" id="inlineRadio2" value="option2">
                                    <label class="form-check-label" for="inlineRadio2">No</label>
                                  </div>
                                  <div class="form-group">
                                    <label class="control-label">9.Include any other relevant information</label>
                                    <input maxlength="100" type="text" required="required" class="form-control" placeholder="" >
                                </div>
                                <div class="form-group">
                                    <label class="control-label">10.Proposed Project Information</label>
                                    <input maxlength="100" type="text" required="required" class="form-control" placeholder="Project Name" />
                                </div>
                                <div class="form-group">
                                    <label class="control-label">11.Project Location</label>
                                </div>
                                <div class="form-group"style="margin-left: 2%;">
                                    <label class="control-label">Coordinates, Map, address, land details etc.</label>
                                    <input maxlength="100" type="text" required="required" class="form-control" placeholder="(Coordinates, Map, address, land details etc)" />
                                </div>
                                <div class="form-group"style="margin-left: 2%;">
                                    <label class="control-label">provide relevant Dag no. Khotian no. Mouza map </label>
                                    <input maxlength="100" type="text" required="required" class="form-control" placeholder="provide relevant Dag no. Khotian no. Mouza map" />
                                </div>
                                <div class="form-group">
                                    <label class="control-label">12.Project Type </label>
                                    <input maxlength="100" type="text" required="required" class="form-control" placeholder="Improvement, new development, extension etc" />
                                </div>
                                <div class="form-group">
                                    <label class="control-label">13.Project Description </label>
                                    <input maxlength="100" type="text" required="required" class="form-control" placeholder="narrative description of the proposed project" />
                                </div>
                                <div class="form-group">
                                    <label class="control-label">14.Project Details</label>
                                    <div class="form-group " style="margin-left: 2%;">
                                        <label for="">Quantitative details (eg. size, capacity, volume, footprint, etc.)</label>
                                        <input maxlength="100" type="text" required="required" class="form-control" placeholder="Quantitative details (eg. size, capacity, volume, footprint, etc.)" />

                                        <div class="form-group">
                                            <label class="control-label">Existing site condition/ Land use</label>
                                            <input maxlength="100" type="text" required="required" class="form-control" placeholder="Existing site condition/ Land use" />
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label">Available utilities at site (Water, Electricity, Sewerage etc.)</label>
                                            <input maxlength="100" type="text" required="required" class="form-control" placeholder="Available utilities at site (Water, Electricity, Sewerage etc.)"  />
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label">Connectivity (Road access, Telecom, etc)</label>
                                            <input maxlength="100" type="text" required="required" class="form-control" placeholder="Connectivity (Road access, Telecom, etc)" />
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label">Nearby Facilities (Fire Service Stations, Power supply systems, Solid waste facilities, Warehouses etc.)</label>
                                            <input maxlength="100" type="text" required="required" class="form-control" placeholder="Nearby Facilities (Fire Service Stations, Power supply systems, Solid waste facilities, Warehouses etc.) " />
                                        </div>


                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="control-label">15.Project Implementation</label>
                                    <input maxlength="100" type="text" required="required" class="form-control" placeholder="(Describe any management and resource support the Applicant will provide in implementation) " />
                                </div>
                                <div class="form-group">
                                    <label class="control-label">16.Do you have any of these available?(Project Readiness)<i class="fa fa-star" aria-hidden="true"></i></label>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1" >
                                    <label class="form-check-label" for="inlineCheckbox1">Detailed Project Scope </label>
                                  </div>
                                  <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2" >
                                    <label class="form-check-label" for="inlineCheckbox2">Technical Study/Design </label>
                                  </div>
                                  <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" id="inlineCheckbox3" value="option3">
                                    <label class="form-check-label" for="inlineCheckbox3">Feasibility Study</label>
                                  </div>
                                  <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1" >
                                    <label class="form-check-label" for="inlineCheckbox1">Economic /Financial Analysis </label>
                                  </div>
                                  <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2" >
                                    <label class="form-check-label" for="inlineCheckbox2">Environmental Impact Assessment </label>
                                  </div>
                                  <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" id="inlineCheckbox3" value="option3">
                                    <label class="form-check-label" for="inlineCheckbox3">Social Impact Assessment</label>
                                  </div>
                                  <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2" >
                                    <label class="form-check-label" for="inlineCheckbox2">Clearance from appropriate Local and National authorities </label>
                                  </div>
                                  <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" id="inlineCheckbox3" value="option3">
                                    <label class="form-check-label" for="inlineCheckbox3">Environmental Clearance Certificate</label>
                                  </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label">17.Project implementation period</label>
                                    <input maxlength="100" type="text" required="required" class="form-control" placeholder="" >
                                </div>
                                <div class="form-group">
                                    <label class="control-label">18.Do you have a business model to sustain the project? </label>
                                </div>
                                  <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="inlineRadioOptions2" id="inlineRadio1" value="option1" checked >
                                    <label class="form-check-label" for="inlineRadio1">Yes</label>

                                    <input class="form-check-input" type="radio" name="inlineRadioOptions2" id="inlineRadio2" value="option2">
                                    <label class="form-check-label" for="inlineRadio2">No</label>
                                  </div>
                            <button class="btn btn-primary nextBtn pull-right" type="button">Next</button>
                        </div>
                    </div>

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
                                        <input maxlength="200" type="text" required="required" class="form-control" placeholder=""  />
                                    </div>


                            <div class="form-group">
                                <label class="control-label">2018</label>
                                <input maxlength="200" type="text" required="required" class="form-control" placeholder=""  />
                            </div>
                            <div class="form group">
                                 <label class="control-label">2019</label>
                                <input maxlength="200" type="text" required="required" class="form-control" placeholder="" />
                            </div>
                            <br>
                            <div class="from group">
                                <label class="control-label">2020(if available)</label>
                                <input maxlength="200" type="text" required="required" class="form-control" placeholder="" />
                            </div>
                            <br>
                            <div class="form-group">
                                <label class="control-label">2.Estimated Project Cost</label>
                                <input maxlength="200" type="text" required="required" class="form-control" placeholder="If you have a budget breakdown of costs on a spreadsheet, or in some other format, please include this with the application."  />
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
                                           <label class="control-label">Amount
                                            [ US$/BDT
                                            </label>
                                           <input maxlength="200" type="text" required="required" class="form-control" placeholder="" />
                                       </div>
                                       <label for="">Notes (terms and sources to be detailed)</label>
                                       <div class="col-md-6">
                                           <input type="text" name="PIFIC Funding Notes" class="form-control" id="">
                                       </div>
                                       </div>
                                   </div>
                                   <div class=" form-group">
                                    <div class="form-group">
                                        <label class="control-label mr-2">Bank Loans</label>
                                    <br>
                                    <div class="col-md-6">
                                        <label class="control-label">Amount
                                         [ US$/BDT
                                         </label>
                                        <input maxlength="200" type="text" required="required" class="form-control" placeholder=""  />
                                    </div>
                                    <label for="">Notes (terms and sources to be detailed)</label>
                                    <div class="col-md-6">
                                        <input type="text" name="PIFIC Funding Notes" class="form-control" id="">
                                    </div>
                                    </div>
                                </div>
                                <div class=" form-group">
                                    <div class="form-group">
                                        <label class="control-label mr-2">Own Contribution </label>
                                    <br>
                                    <div class="col-md-6">
                                        <label class="control-label">Amount
                                         [ US$/BDT
                                         </label>
                                        <input maxlength="200" type="text" required="required" class="form-control" placeholder="" />
                                    </div>
                                    <label for="">Notes (terms and sources to be detailed)</label>
                                    <div class="col-md-6">
                                        <input type="text" name="PIFIC Funding Notes" class="form-control" id="">
                                    </div>
                                    </div>
                                </div>
                                <div class=" form-group">
                                    <div class="form-group">
                                        <label class="control-label mr-2">Total</label>
                                    <br>
                                    <div class="col-md-6">
                                        <label class="control-label">Amount
                                         [ US$/BDT
                                         </label>
                                        <input maxlength="200" type="text" required="required" class="form-control" placeholder="" />
                                    </div>
                                    <label for="">Notes (terms and sources to be detailed)</label>
                                    <div class="col-md-6">
                                        <input type="text" name="PIFIC Funding Notes" class="form-control" id="">
                                    </div>
                                    </div>
                                </div>
                               <br>
                               <br>
                            <button class="btn btn-primary nextBtn pull-right" type="button">Next</button>
                        </div>
                    </div>

                    <div class="panel panel-primary setup-content" id="step-3">
                        <div class="panel-heading">
                             <h3 class="panel-title">Project Justification </h3>
                        </div>
                        <div class="panel-body">
                            <div class="form-group">
                                <label class="control-label">1.What are the main problems faced by your cluster of business?</label>
                                <input maxlength="200" type="text" required="required" class="form-control" placeholder="" />
                            </div>
                            <div class="form-group">
                                <label class="control-label">2.What cluster benefits will be realized by the intended project?</label>
                                <input maxlength="200" type="text" required="required" class="form-control" placeholder=""  />
                            </div>
                            <div class="form-group">
                                <label class="control-label">3.Who will be the users of the project and how many?</label>
                                <input maxlength="200" type="text" required="required" class="form-control" placeholder="Who will be the final users of the project outputs? Indicate how many end-users there will be for the services provided by the project."  />
                            </div>
                            <div class="form-group">
                                <label class="control-label">4.Have you considered alternative solutions to your problem? List other options (technical, organizational etc.) and explain why the proposed project is the preferred option</label>
                                <input maxlength="200" type="text" required="required" class="form-control" placeholder=""   />
                            </div>
                            <div class="form-group">
                                <label class="control-label">5.Provide information about the impact of the project to the manufacturing, export, production levels etc. </label>
                                <input maxlength="200" type="text" required="required" class="form-control" placeholder=""  />
                            </div>
                            <div class="form-group">
                                <label class="control-label">6.Provide number of possible jobs to be created by the project.</label>
                                <input maxlength="200" type="text" required="required" class="form-control" placeholder="Indicate number of new permanent and direct working places during operational period (jobs created in the facility)"  />
                            </div>
                            <div class="form-group">
                                <label class="control-label">7.Will this project promote female participation? </label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="inlineRadioOptions3" id="inlineRadio1" value="option1" checked >
                                <label class="form-check-label" for="inlineRadio1">Yes</label>
                              </div>
                              <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="inlineRadioOptions3" id="inlineRadio2" value="option2">
                                <label class="form-check-label" for="inlineRadio2">No</label>
                              </div>

                            <button class="btn btn-primary nextBtn pull-right" type="button">Next</button>
                        </div>
                    </div>

                    <div class="panel panel-primary setup-content" id="step-4">
                        <div class="panel-heading">
                             <h3 class="panel-title">Environmental and Social Screening</h3>
                        </div>
                        <div class="panel-body">
                            <div class="form-group">
                                <label class="control-label">1.Is there any known potential environmentally sensitive issue/s?  </label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="inlineRadioOptions4" id="inlineRadio1" value="option1" checked>
                                <label class="form-check-label" for="inlineRadio1">Yes</label>

                                <input class="form-check-input" type="radio" name="inlineRadioOptions4" id="inlineRadio2" value="option2">
                                <label class="form-check-label" for="inlineRadio2">No</label>
                              </div>
                              <div class="form-group">
                                <label class="control-label">2.Will there be any positive environmental benefits? </label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="inlineRadioOptions5" id="inlineRadio1" value="option1" checked >
                                <label class="form-check-label" for="inlineRadio1">Yes</label>

                                <input class="form-check-input" type="radio" name="inlineRadioOptions5" id="inlineRadio2" value="option2">
                                <label class="form-check-label" for="inlineRadio2">No</label>
                              </div>
                              <div class="form-group">
                                <label class="control-label">3.Is there any potential significant social impact? </label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="inlineRadioOptions6" id="inlineRadio1" value="option1" checked >
                                <label class="form-check-label" for="inlineRadio1">Yes</label>

                                <input class="form-check-input" type="radio" name="inlineRadioOptions6" id="inlineRadio2" value="option2">
                                <label class="form-check-label" for="inlineRadio2">No</label>
                              </div>
                              <div class="form-group">
                                <label class="control-label">4.Will there be loss of agriculture and other productive assets (crops, trees)? </label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="inlineRadioOptions7" id="inlineRadio1" value="option1" checked >
                                <label class="form-check-label" for="inlineRadio1">Yes</label>

                                <input class="form-check-input" type="radio" name="inlineRadioOptions7" id="inlineRadio2" value="option2">
                                <label class="form-check-label" for="inlineRadio2">No</label>
                              </div>
                                <div class="form-group">
                                <label class="control-label">5.Will there be loss of income sources and means of livelihoods? </label>
                                </div>
                                <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="inlineRadioOptions8" id="inlineRadio1" value="option1" checked >
                                <label class="form-check-label" for="inlineRadio1">Yes</label>

                                <input class="form-check-input" type="radio" name="inlineRadioOptions8" id="inlineRadio2" value="option2">
                                <label class="form-check-label" for="inlineRadio2">No</label>
                                </div>
                                <div class="form-group">
                                <label class="control-label">6.Will there be any tangible and intangible effect on cultural/ historical heritage? </label>
                                </div>
                                <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="inlineRadioOptions9" id="inlineRadio1" value="option1" checked >
                                <label class="form-check-label" for="inlineRadio1">Yes</label>

                                <input class="form-check-input" type="radio" name="inlineRadioOptions9" id="inlineRadio2" value="option2">
                                <label class="form-check-label" for="inlineRadio2">No</label>
                                </div>
                                <div class="form-group">
                                <label class="control-label">7.Will there be any resettlement required for the implementation of this project? </label>
                                </div>
                                <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="inlineRadioOptions10" id="inlineRadio1" value="option1" checked >
                                <label class="form-check-label" for="inlineRadio1">Yes</label>

                                <input class="form-check-input" type="radio" name="inlineRadioOptions10" id="inlineRadio2" value="option2">
                                <label class="form-check-label" for="inlineRadio2">No</label>
                                </div>
                                <div class="form-group">
                                <label class="control-label">8.What is the potential environmental category of this project (as per ECR 1997 of GoB)?<i class="fa fa-star" aria-hidden="true"></i> </label>
                                </div>
                              <div class="form-group">
                                  <div class="form-check form-check-inline">
                                        <div class="ilcb green mr-2" id="">
                                            <label class="checkbox-inline">
                                                <input type="checkbox" value="">Option 1
                                            </label>
                                        </div>
                                        <div class="ilcb orange" id="" style=" background-color:orange;">
                                            <label class="checkbox-inline">
                                                <input type="checkbox" value="">Option 2
                                                </label>
                                        </div>
                                        <div class="ilcb darkorange" id="" style="background-color:darkorange;">
                                            <label class="checkbox-inline">
                                                <input type="checkbox" value="">Option 3
                                            </label>
                                        </div>
                                        <div class="ilcb red" id="" style="background-color:red;">
                                            <label class="checkbox-inline">
                                                <input type="checkbox" value="">Option 4
                                            </label>
                                        </div>
                                    </div>
                              </div>
                              <button class="btn btn-primary nextBtn pull-right" type="button">Next</button>
                        </div>
                    </div>
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
                                <input maxlength="200" type="text" required="required" class="form-control" placeholder="Name" />
                            </div>
                            <div class="form-group">
                                <label class="control-label">Position:</label>
                                <input maxlength="200" type="text" required="required" class="form-control" placeholder="Position" />
                            </div>
                            <div class="form-group">
                                <label class="control-label">Signature:</label>
                                <input class="form-control" type="file" id="formFileMultiple" multiple />
                            </div>
                            <div class="form-group">
                                <label class="control-label">Date and place:</label>
                                <input maxlength="200" type="text" required="required" class="form-control" placeholder="Date and Place" />
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
                                    <img src="success.png." alt="..." class="img-thumbnail" style="height: 200px; position: relative; ">
                                </center>
                            </div>
                            <button class="btn btn-success pull-right" type="button">Download Complete Form</button>
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
            });
            </script>
		</section>
		<!--/ End About Us -->

        @endsection
