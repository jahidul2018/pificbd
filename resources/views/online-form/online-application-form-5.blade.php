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
                            <a href="{{ route('submits.create.step.four') }}" type="button" class="btn btn-default btn-circle" >D</a>
                            <p><small>Environmental and Social Screening</small></p>
                        </div>
                        <div class="stepwizard-step col-xs-2">
                            <a href="#step-5" type="button" class="btn btn-success btn-circle">E</a>
                            <p><small>Applicant(s) Statement  </small></p>
                        </div>
                        <div class="stepwizard-step col-xs-2">
                            <a href="#step-6" type="button" class="btn btn-default btn-circle" disabled>F</a>
                            <p><small>Finish</small></p>
                        </div>
                    </div>
                </div>

                <form role="form" id="myform" method="post" action="" enctype="multipart/form-data">    
                    @csrf
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
                                <input maxlength="200" name="a_name" id="a_name" type="text" value="{{ $product->a_name ?? '' }}" required="required" class="form-control" placeholder="Name" />
                            </div>
                            <div class="form-group">
                                <label class="control-label">Position:</label>
                                <input maxlength="200"name="a_position" id="a_position" type="text" value="{{ $product->a_position ?? '' }}" required="required" class="form-control" placeholder="Position" />
                            </div>
                            <div class="form-group">
                                <label class="control-label">Signature:</label>
                                <input class="form-control"name="a_sigbature" id="a_sigbature" type="file" id="formFileMultiple" />
                            </div>
                            <div class="form-group">
                                <label class="control-label">Date and place:</label>
                                <input maxlength="200"name="a_dateplace" id="a_dateplace" type="text" value="{{ $product->a_dateplace ?? '' }}" required="required" class="form-control" placeholder="Date and Place" />
                            </div>
                            <button class="btn btn-primary nextBtn pull-right" type="submit">Submit</button>
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

        // if (isValid) nextStepWizard.removeAttr('disabled').trigger('click');
    });

    // $('div.setup-panel div a.btn-success').trigger('click');

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
