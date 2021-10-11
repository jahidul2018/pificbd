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
                            <a href="{{ route('submits.create.step.one') }}" type="button" class="btn btn-default btn-circle" >A</a>
                            <p><small>General Information</small></p>
                        </div>
                        <div class="stepwizard-step col-xs-2">
                            <a href="{{ route('submits.create.step.two') }}" type="button" class="btn btn-default btn-circle" >B</a>
                            <p><small>Financial Information</small></p>
                        </div>
                        <div class="stepwizard-step col-xs-2">
                            <a href="{{ route('submits.create.step.three') }}" type="button" class="btn btn-default btn-circle" >C</a>
                            <p><small>Project Justification </small></p>
                        </div>
                        <div class="stepwizard-step col-xs-2">
                            <a href="{{ route('submits.create.step.four') }}" type="button" class="btn btn-default btn-circle" >D</a>
                            <p><small>Environmental and Social Screening</small></p>
                        </div>
                        <div class="stepwizard-step col-xs-2">
                            <a href="{{ route('submits.create.step.five') }}" type="button" class="btn btn-default btn-circle" >E</a>
                            <p><small>Applicant(s) Statement  </small></p>
                        </div>
                        <div class="stepwizard-step col-xs-2">
                            <a href="#step-6" type="button" class="btn btn-success btn-circle" >F</a>
                            <p><small>Finish</small></p>
                        </div>
                    </div>
                </div>

                {{-- <form role="form" id="myform" method="post" action="" enctype="multipart/form-data">     --}}
                    
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
                            {{-- <button class="btn btn-success pull-right" type="submit" id="butsave">Submit Application</button> --}}
                         </div>
                    </div>
                {{-- </form> --}}
            </div>
        </section>
		<!--/ End About Us -->
<script>
    //$(document).ready(function () {
        

    // var navListItems = $('div.setup-panel div a'),
    //     allWells = $('.setup-content'),
    //     allNextBtn = $('.nextBtn');

    // allWells.hide();

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

    // allNextBtn.click(function () {
    //     var curStep = $(this).closest(".setup-content"),
    //         curStepBtn = curStep.attr("id"),
    //         nextStepWizard = $('div.setup-panel div a[href="#' + curStepBtn + '"]').parent().next().children("a"),
    //         curInputs = curStep.find("input[type='text'],input[type='url']"),
    //         isValid = true;

    //     $(".form-group").removeClass("has-error");
    //     for (var i = 0; i < curInputs.length; i++) {
    //         if (!curInputs[i].validity.valid) {
    //             isValid = false;
    //             $(curInputs[i]).closest(".form-group").addClass("has-error");
    //         }
    //     }

    //     if (isValid) nextStepWizard.removeAttr('disabled').trigger('click');
    // });

    // $('div.setup-panel div a.btn-success').trigger('click');

</script>
@endsection
