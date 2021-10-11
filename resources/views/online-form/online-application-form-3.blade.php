@extends('layouts.online-application')
@section('content')
    <!-- About Us -->
    <section class="about-us section-space">
        <div class="container">
            {{-- error section --}}
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
            {{-- end error section --}}

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
                        <a href="#step-3" type="button" class="btn btn-success btn-circle" >C</a>
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

            <form role="form" id="myform" method="POST" action="{{ route('submits.create.step.three.post') }}" enctype="multipart/form-data">
                @csrf
                <div class="panel panel-primary setup-content" id="step-3">
                    <div class="panel-heading">
                            <h3 class="panel-title">Project Justification </h3>
                    </div>

                    <div class="panel-body">
                        <div class="form-group">
                            <label class="control-label">1.What are the main problems faced by your cluster of business?</label>
                            <input maxlength="200" name="p1_cluster_of_business" id="p1_cluster_of_business" type="text" value="{{ $product->p1_cluster_of_business ?? '' }}" required="required" class="form-control" placeholder="" />
                        </div>

                        <div class="form-group">
                            <label class="control-label">2.What cluster benefits will be realized by the intended project?</label>
                            <input maxlength="200" name="p2_intended" id="p2_intended" type="text" value="{{ $product->p2_intended ?? '' }}" required="required" class="form-control" placeholder=""  />
                        </div>

                        <div class="form-group">
                            <label class="control-label">3.Who will be the users of the project and how many?</label>
                            <input maxlength="200" name="p3_how_many" id="p3_how_many" type="text" value="{{ $product->p3_how_many ?? '' }}" required="required" class="form-control" placeholder="Who will be the final users of the project outputs? Indicate how many end-users there will be for the services provided by the project."  />
                        </div>

                        <div class="form-group">
                            <label class="control-label">4.Have you considered alternative solutions to your problem? List other options (technical, organizational etc.) and explain why the proposed project is the preferred option</label>
                            <input maxlength="200" name="p4_solution" id="p4_solution" type="text" value="{{ $product->p4_solution ?? '' }}" required="required" class="form-control" placeholder=""   />
                        </div>

                        <div class="form-group">
                            <label class="control-label">5.Provide information about the impact of the project to the manufacturing, export, production levels etc. </label>
                            <input maxlength="200" name="p5_manufacturing" id="p5_manufacturing" type="text" value="{{ $product->p5_manufacturing ?? '' }}" required="required" class="form-control" placeholder=""  />
                        </div>

                        <div class="form-group">
                            <label class="control-label">6.Provide number of possible jobs to be created by the project.</label>
                            <input maxlength="200" name="p6_created" id="p6_created" type="text" value="{{ $product->p6_created ?? '' }}" required="required" class="form-control" placeholder="Indicate number of new permanent and direct working places during operational period (jobs created in the facility)"  />
                        </div>

                        <div class="form-group">
                            <label class="control-label">7.Will this project promote female participation? </label>
                        </div>

                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="p7_participation" id="p7_radio1" value="yes" checked >
                            <label class="form-check-label" for="inlineRadio1">Yes</label>
                        </div>

                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="p7_participation" id="p7_radio2" value="no">
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

                //if (isValid) nextStepWizard.removeAttr('disabled').trigger('click');
            });
        });
    </script>
@endsection
