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
                <h2><strong>Online Application 1</strong></h2>
                <p>Fill all form field to go to next step</p>
                <div class="stepwizard">
                    <div class="stepwizard-row setup-panel">
                        <div class="stepwizard-step col-xs-2">
                            <a href="#step-1" type="button" class="btn btn-success btn-circle">A</a>
                            <p><small>General Information</small></p>
                        </div>
                        <div class="stepwizard-step col-xs-2">
                            <a href="#step-2" type="button" class="btn btn-default btn-circle"  disabled >B</a>
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
                                <input name="g1_name_of_lead_applicant" id="name_of_lead_applicant" type="text" value="{{ $product->g1_name_of_lead_applicant ?? '' }}" required="required" class="form-control" placeholder="Include enterprise name" />
                            </div>
                            <div class="form-group">
                                <label class="control-label">2.Contact Details of Applicant</label>
                                <div class="form-group" style="margin-left:2%;">
                                   <label class="control-label">Phone</label>
                                   <input name="g2_phone" id="g2_phone" type="text" value="{{ $product->g2_phone ?? '' }}" required="required" class="form-control" placeholder="Phone" />
                                    <label class="control-label">Email</label>
                                    <input name="g2_email" id="g2_email" type="email"  value="{{ $product->g2_email ?? '' }}" required class="form-control" placeholder="Email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$" />
                                    <label class="control-label">Adress</label>
                                    <input name="g2_address" id="g2_address" type="text" value="{{ $product->g2_address ?? '' }}"  required="required" class="form-control" placeholder="Address" />
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label">3.What Sector are you Representing?<i class="fa fa-star" aria-hidden="true"></i></label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="g3_representing" id="representingRadios1" value="Leather" checked >
                                <label class="form-check-label" for="representingRadios1">
                                Leather
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="g3_representing" id="representingRadios2" value="Footwear">
                                <label class="form-check-label" for="representingRadios2">
                                Footwear
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="g3_representing" id="representingRadios3" value="Plastic">
                                <label class="form-check-label" for="representingRadios3">
                                Plastic
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="g3_representing" id="representingRadios4" value="Light Engineering">
                                <label class="form-check-label" for="representingRadios">
                                Light Engineering
                                [ Sub-Sectors: Electronics & Electrical Goods /Accumulators/Automobiles and Parts /Foundries /Bicycles /Dies & Molds]
                                </label>
                            </div>
                                <div class="form-group">
                                    <label class="control-label">4.Name and contact details of firms in the cluster/association represented in this application </label>
                                    <input name="g4_clusterassociation" id="g4_clusterassociation" type="text" value="{{ $product->g4_clusterassociation ?? '' }}"  required="required" class="form-control" placeholder="Name" />
                                </div>
                            <div class="form-group" >
                                <label class="control-label">Phone</label>
                                <input  name="g4_phone" id="g4_phone"type="text" value="{{ $product->g4_phone ?? '' }}" required="required" class="form-control" placeholder="Phone" />
                            </div>
                            <div class="form-group">
                                <label class="control-label">Email</label>
                                <input name="g4_email" id="g4_email" type="email" value="{{ $product->g4_email ?? '' }}" required class="form-control" placeholder="Email"  />
                            </div>

                            <div class="form-group">
                                <label class="control-label">Adress</label>
                                <input name="g4_address" id="g4_address"type="text" value="{{ $product->g4_address ?? '' }}" required="required" class="form-control" placeholder="Adress" />
                                <br>
                                <div class="form-group">
                                    <label class="control-label">5.Name and Contacts of the Project Manager</label>
                                    <input  name="g5_projectmanager" id="g5_projectmanager"  type="text" value="{{ $product->g5_projectmanager ?? '' }}" required="required" class="form-control" placeholder="Authorized person, not any entity" />
                                </div>
                                <div class="form-group">
                                    <label class="control-label">6.Provide Details of Business (Cluster/ Associations)<i class="fa fa-star" aria-hidden="true"></i></label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input   class="form-check-input" type="checkbox" name="g6_certificate" id="g6_inlineCheckbox1" value="Certificate of Incorporation" checked>
                                    <label class="form-check-label" for="inlineCheckbox1"> 1-Certificate of Incorporation </label>
                                  </div>
                                  <div class="form-check form-check-inline">
                                    <input  class="form-check-input" type="checkbox"  name="g6_certificate" id="g6_inlineCheckbox2" value="Trade License">
                                    <label class="form-check-label" for="inlineCheckbox2">2-Trade License </label>
                                  </div>
                                  <div class="form-check form-check-inline">
                                    <input   class="form-check-input" type="checkbox"  name="g6_certificate" id="g6_inlineCheckbox3" value="VAT and Tax Certificates" >
                                    <label class="form-check-label" for="inlineCheckbox3">3-VAT and Tax Certificates</label>
                                  </div>
                            </div>

                            <label for="formFileMultiple" class="form-label">Multiple files input example</label>
                            <input name="g1_formFileMultiple" class="form-control" type="file" id="g1_formFileMultiple" />
                            <br>
                            <div class="form-group">
                                <label class="control-label">7.Can you ensure availability of land for the proposed project? </label>
                            </div>

                            <div class="form-check form-check-inline">

                                <input class="form-check-input" type="radio" name="g7_proposed" id="g7_inlineRadio1" value="yes" checked >
                                <label class="form-check-label" for="inlineRadio1">Yes</label>

                                <input class="form-check-input" type="radio" name="g7_proposed" id="g7_inlineRadio2" value="no">
                                <label class="form-check-label" for="inlineRadio2">No</label>

                            </div>
                            <div class="form-group">
                                <label class="control-label">8.Are all the cluster members categorized as MSME? <i class="fa fa-star" aria-hidden="true"></i></label>
                            </div>

                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="g8_MSME" id="g8_inlineRadio1" value="yes" checked >
                                <label class="form-check-label" for="inlineRadio1">Yes</label>

                                <input class="form-check-input" type="radio" name="g8_MSME" id="g8_inlineRadio2" value="no">
                                <label class="form-check-label" for="inlineRadio2">No</label>
                            </div>
                                <div class="form-group">
                                    <label class="control-label">9.Include any other relevant information</label>
                                    <input maxlength="100" name="g9_relevantinfo" id="g9_relevantinfo" type="text" value="{{ $product->g9_relevantinfo ?? '' }}" required="required" class="form-control" placeholder="" >
                                </div>
                                <div class="form-group">
                                    <label class="control-label">10.Proposed Project Information</label>
                                    <input maxlength="100" name="g10_projectinfo" id="g10_projectinfo" type="text" value="{{ $product->g10_projectinfo ?? '' }}" required="required" class="form-control" placeholder="Project Name" />
                                </div>
                                <div class="form-group">
                                    <label class="control-label">11.Project Location</label>
                                </div>
                                <div class="form-group"style="margin-left: 2%;">
                                    <label class="control-label">Coordinates, Map, address, land details etc.</label>
                                    <input maxlength="100"  name="g11_map" id="g11_map" type="text" value="{{ $product->g11_map ?? '' }}" required="required" class="form-control" placeholder="(Coordinates, Map, address, land details etc)" />
                                </div>
                                <div class="form-group"style="margin-left: 2%;">
                                    <label class="control-label">provide relevant Dag no. Khotian no. Mouza map </label>
                                    <input maxlength="100" name="g11_Dagno" id="g11_Dagno" type="text"  value="{{ $product->g11_Dagno ?? '' }}" required="required" class="form-control" placeholder="provide relevant Dag no. Khotian no. Mouza map" />
                                </div>
                                <div class="form-group">
                                    <label class="control-label">12.Project Type </label>
                                    <input maxlength="100"  name="g12_projecttype" id="g12_projecttype" type="text" value="{{ $product->g12_projecttype ?? '' }}" required="required" class="form-control" placeholder="Improvement, new development, extension etc" />
                                </div>
                                <div class="form-group">
                                    <label class="control-label">13.Project Description </label>
                                    <input maxlength="100" name="g13_projectdescr" id="g13_projectdescr" type="text" value="{{ $product->g13_projectdescr ?? '' }}"  required="required" class="form-control" placeholder="narrative description of the proposed project" />
                                </div>
                                <div class="form-group">
                                    <label class="control-label">14.Project Details</label>
                                    <div class="form-group " style="margin-left: 2%;">
                                        <label for="">Quantitative details (eg. size, capacity, volume, footprint, etc.)</label>
                                        <input maxlength="100"  name="g14_quantitative" id="g14_quantitative" type="text" value="{{ $product->g14_quantitative ?? '' }}"  required="required" class="form-control" placeholder="Quantitative details (eg. size, capacity, volume, footprint, etc.)" />

                                        <div class="form-group">
                                            <label class="control-label">Existing site condition/ Land use</label>
                                            <input maxlength="100" name="g14_condition" id="g14_condition" type="text"  value="{{ $product->g14_condition ?? '' }}" required="required" class="form-control" placeholder="Existing site condition/ Land use" />
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label">Available utilities at site (Water, Electricity, Sewerage etc.)</label>
                                            <input maxlength="100" name="g14_utlities" id="g14_utlities" type="text" value="{{ $product->g14_utlities ?? '' }}" required="required" class="form-control" placeholder="Available utilities at site (Water, Electricity, Sewerage etc.)"  />
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label">Connectivity (Road access, Telecom, etc)</label>
                                            <input maxlength="100" name="g14_connectivity" id="g14_connectivity" type="text"  value="{{ $product->g14_connectivity ?? '' }}" required="required" class="form-control" placeholder="Connectivity (Road access, Telecom, etc)" />
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label">Nearby Facilities (Fire Service Stations, Power supply systems, Solid waste facilities, Warehouses etc.)</label>
                                            <input maxlength="100" name="g14_facilites" id="g14_facilites" type="text" value="{{ $product->g14_facilites ?? '' }}"  required="required" class="form-control" placeholder="Nearby Facilities (Fire Service Stations, Power supply systems, Solid waste facilities, Warehouses etc.) " />
                                        </div>

                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="control-label">15.Project Implementation</label>
                                    <input maxlength="100" name="g15_projimple" id="g15_projimple" type="text" value="{{ $product->g15_projimple ?? '' }}" required="required" class="form-control" placeholder="(Describe any management and resource support the Applicant will provide in implementation) " />
                                </div>

                                <div class="form-group">
                                    <label class="control-label">16.Do you have any of these available?(Project Readiness)<i class="fa fa-star" aria-hidden="true"></i></label>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input"name="g16_readiness" type="checkbox" id="g16_inlineCheckbox1" value="Detailed Project Scope" >
                                        <label class="form-check-label" for="g16_inlineCheckbox1">Detailed Project Scope </label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input"name="g16_readiness" type="checkbox" id="g16_inlineCheckbox2" value="Technical Study or Design" >
                                        <label class="form-check-label" for="g16_inlineCheckbox2">Technical Study/Design </label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input"name="g16_readiness" type="checkbox" id="g16_inlineCheckbox3" value="Feasibility Study">
                                        <label class="form-check-label" for="g16_inlineCheckbox3">Feasibility Study</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" name="g16_readiness"type="checkbox" id="g16_inlineCheckbox4" value="Economic or Financial Analysis" >
                                        <label class="form-check-label" for="g16_inlineCheckbox4">Economic /Financial Analysis </label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input"name="g16_readiness" type="checkbox" id="g16_inlineCheckbox5" value="Environmental Impact Assessment" >
                                        <label class="form-check-label" for="g16_inlineCheckbox5">Environmental Impact Assessment </label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" name="g16_readiness"type="checkbox" id="g16_inlineCheckbox6" value="Social Impact Assessment">
                                        <label class="form-check-label" for="g16_inlineCheckbox6">Social Impact Assessment</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" name="g16_readiness"type="checkbox" id="g16_inlineCheckbox7" value="Clearance from appropriate Local and National authorities" >
                                        <label class="form-check-label" for="g16_inlineCheckbox7">Clearance from appropriate Local and National authorities </label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input"name="g16_readiness" type="checkbox" id="g16_inlineCheckbox8" value="option3">
                                        <label class="form-check-label" for="g16_inlineCheckbox8">Environmental Clearance Certificate</label>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="control-label">17.Project implementation period</label>
                                    <input type="text" value="{{ $product->g9_relevantinfo ?? '' }}" name="g17_implemen" id="g17_implemen" required="required" class="form-control" placeholder="" >
                                </div>
                                <div class="form-group">
                                    <label class="control-label">18.Do you have a business model to sustain the project? </label>
                                </div>

                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="g18_businessmodel" id="inlineRadio1" value="yes" checked >
                                    <label class="form-check-label" for="inlineRadio1">Yes</label>

                                    <input class="form-check-input" type="radio" name="g18_businessmodel" id="inlineRadio2" value="no">
                                    <label class="form-check-label" for="inlineRadio2">No</label>
                                </div>
                            <button class="btn btn-primary nextBtn pull-right" type="submit">Next</button>
                        </div>
                    </div>
                </form>    
            </div>
        </section>
		<!--/ End About Us -->
<script>
    $(document).ready(function () {
    var navListItems = $('div.setup-panel div a'),
        allWells = $('.setup-content'),
        allNextBtn = $('.nextBtn');

    //allWells.hide();

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

        //if (isValid) nextStepWizard.removeAttr('disabled').trigger('click');
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


        @endsection
