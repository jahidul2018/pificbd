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
                            <a href="{{ route('submits.create.step.one') }}" type="button" class="btn btn-default btn-circle"  >A</a>
                            <p><small>General Information</small></p>
                        </div>
                        <div class="stepwizard-step col-xs-2">
                            <a href="{{ route('submits.create.step.two') }}" type="button" class="btn btn-default btn-circle" >B</a>
                            <p><small>Financial Information</small></p>
                        </div>
                        <div class="stepwizard-step col-xs-2">
                            <a href="{{ route('submits.create.step.three') }}" type="button" class="btn btn-default btn-circle"  >C</a>
                            <p><small>Project Justification </small></p>
                        </div>
                        <div class="stepwizard-step col-xs-2">
                            <a href="#step-4" type="button" class="btn btn-success btn-circle" >D</a>
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
 

                <form role="form" id="myform" method="POST" action="{{ route('submits.create.step.four.post') }}" enctype="multipart/form-data">
                    @csrf
                    <div class="panel panel-primary setup-content" id="step-4">
                        <div class="panel-heading">
                             <h3 class="panel-title">Environmental and Social Screening</h3>
                        </div>
                        <div class="panel-body">
                            <div class="form-group">
                                <label class="control-label">1.Is there any known potential environmentally sensitive issue/s?  </label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="e1_sensitive" id="e1_sensitiveRadio1" value="yes" checked>
                                <label class="form-check-label" for="inlineRadio1">Yes</label>

                                <input class="form-check-input" type="radio" name="e1_sensitive" id="e1_sensitiveRadio2" value="no">
                                <label class="form-check-label" for="inlineRadio2">No</label>
                              </div>
                              <div class="form-group">
                                <label class="control-label">2.Will there be any positive environmental benefits? </label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="e2_benefits" id="e2_benefitsRadio1" value="yes" checked >
                                <label class="form-check-label" for="inlineRadio1">Yes</label>

                                <input class="form-check-input" type="radio" name="e2_benefits" id="e2_benefitsRadio2" value="no">
                                <label class="form-check-label" for="inlineRadio2">No</label>
                              </div>
                              <div class="form-group">
                                <label class="control-label">3.Is there any potential significant social impact? </label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="e3_socalimpact" id="e3_socalimpactRadio1" value="yes" checked >
                                <label class="form-check-label" for="inlineRadio1">Yes</label>

                                <input class="form-check-input" type="radio" name="e3_socalimpact" id="e3_socalimpactRadio2" value="no">
                                <label class="form-check-label" for="inlineRadio2">No</label>
                              </div>
                              <div class="form-group">
                                <label class="control-label">4.Will there be loss of agriculture and other productive assets (crops, trees)? </label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="e4_assets" id="e4_assetsRadio1" value="yes" checked >
                                <label class="form-check-label" for="inlineRadio1">Yes</label>

                                <input class="form-check-input" type="radio" name="e4_assets" id="e4_assetsRadio2" value="no">
                                <label class="form-check-label" for="inlineRadio2">No</label>
                              </div>
                                <div class="form-group">
                                <label class="control-label">5.Will there be loss of income sources and means of livelihoods? </label>
                                </div>
                                <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="e5_livelihoods" id="e5_livelihoodsRadio1" value="yes" checked >
                                <label class="form-check-label" for="inlineRadio1">Yes</label>

                                <input class="form-check-input" type="radio" name="e5_livelihoods" id="e5_livelihoodsRadio2" value="no">
                                <label class="form-check-label" for="inlineRadio2">No</label>
                                </div>
                                <div class="form-group">
                                <label class="control-label">6.Will there be any tangible and intangible effect on cultural/ historical heritage? </label>
                                </div>
                                <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="e6_heritage" id="e6_heritageRadio1" value="yes" checked >
                                <label class="form-check-label" for="inlineRadio1">Yes</label>

                                <input class="form-check-input" type="radio" name="e6_heritage" id="e6_heritageRadio2" value="no">
                                <label class="form-check-label" for="inlineRadio2">No</label>
                                </div>
                                <div class="form-group">
                                <label class="control-label">7.Will there be any resettlement required for the implementation of this project? </label>
                                </div>
                                <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="e7_implemen" id="e7_implemenRadio1" value="yes" checked >
                                <label class="form-check-label" for="inlineRadio1">Yes</label>

                                <input class="form-check-input" type="radio" name="e7_implemen" id="e7_implemenRadio2" value="no">
                                <label class="form-check-label" for="inlineRadio2">No</label>
                                </div>
                                <div class="form-group">
                                <label class="control-label">8.What is the potential environmental category of this project (as per ECR 1997 of GoB)?<i class="fa fa-star" aria-hidden="true"></i> </label>
                                </div>
                              <div class="form-group">
                                  <div class="form-check form-check-inline">
                                        <div class="ilcb green mr-2">
                                            <label class="checkbox-inline">
                                                <input name="e8_green" id="e8_check1" type="checkbox" value="Green" checked> Green
                                            </label>
                                        </div>
                                        <div class="ilcb orange" style=" background-color:orange;">
                                            <label class="checkbox-inline">
                                                <input name="e8_green" id="e8_check2" type="checkbox" value="Orang A"> Orange A
                                                </label>
                                        </div>
                                        <div class="ilcb darkora" style="background-color:darkorange;">
                                            <label class="checkbox-inline">
                                                <input name="e8_green" id="e8_check3" type="checkbox" value="Orange B"> Orange B
                                            </label>
                                        </div>
                                        <div class="ilcb red" style="background-color:red;">
                                            <label class="checkbox-inline">
                                                <input name="e8_green" id="e8_check4" type="checkbox" value="Red" >  Red 
                                            </label>
                                        </div>
                                    </div>
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

    // navListItems.click(function (e) {
    //     e.preventDefault();
    //     var $target = $($(this).attr('href')),
    //         $item = $(this);

    //     if (!$item.hasClass('disabled')) {
    //         navListItems.removeClass('btn-success').addClass('btn-default');
    //         $item.addClass('btn-success');
    //         allWells.hide();
    //         $target.show();
    //         $target.find('input:eq(0)').focus();
    //     }
    // });

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
</section>
		<!--/ End About Us -->

        @endsection
