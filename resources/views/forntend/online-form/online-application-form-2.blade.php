@extends('layouts.online-application')
@section('content')

    <!-- About Us -->
    <section class="about-us section-space">
        <div class="container">
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
            <h2><strong>Online Application</strong></h2>
            <p>Fill all form field to go to next step</p>
            <div class="stepwizard">
                <div class="stepwizard-row setup-panel">
                    <div class="stepwizard-step col-xs-2">
                        <a href="{{ route('submits.create.step.one') }}" type="button" class="btn btn-default btn-circle"  >A</a>
                        <p><small>General Information</small></p>
                    </div>
                    <div class="stepwizard-step col-xs-2">
                        <a href="#step-2" type="button" class="btn btn-success btn-circle" >B</a>
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

            <form role="form" id="myform" method="POST" action="{{ route('submits.create.step.two.post') }}" enctype="multipart/form-data">   
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
                            <input maxlength="200"  name="f1_performance" id="f1_performance" type="text" value="{{ $product->f1_performance ?? '' }}" required="required" class="form-control" placeholder=""  />
                        </div>

                        <div class="form-group">
                            <label class="control-label">2018</label>
                            <input maxlength="200"  name="f1_2018" id="f1_2018" type="text" value="{{ $product->f1_2018 ?? '' }}" required="required" class="form-control" placeholder=""  />
                        </div>

                        <div class="form group">
                                <label class="control-label">2019</label>
                            <input maxlength="200"  name="f1_2019" id="f1_2019 "type="text" value="{{ $product->f1_2019 ?? '' }}" required="required" class="form-control" placeholder="" />
                        </div>
                        <br>

                        <div class="from group">
                            <label class="control-label">2020(if available)</label>
                            <input maxlength="200"  name="f1_2020" id="f1_2020" type="text" value="{{ $product->f1_2020 ?? '' }}" required="required" class="form-control" placeholder="" />
                        </div>
                        <br>

                        <div class="form-group">
                            <label class="control-label">2.Estimated Project Cost</label>
                            <input maxlength="200"  name="f2_projectcost" id="f2_projectcost" type="text" value="{{ $product->f2_projectcost ?? '' }}" required="required" class="form-control" placeholder="If you have a budget breakdown of costs on a spreadsheet, or in some other format, please include this with the application."  />
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
                                    <label class="control-label">Amount [US$/BDT]</label>
                                    <input maxlength="200" name="f3_ammount" id="f3_ammount" type="text" value="{{ $product->f3_ammount ?? '' }}" required="required" class="form-control" placeholder="" />
                                </div>

                                <label for="">Notes (terms and sources to be detailed)</label>
                                <div class="col-md-6">
                                    <input name="f3_amountnote" id="f3_amountnote" type="text" value="{{ $product->f3_amountnote ?? '' }}" class="form-control" >
                                </div>

                            </div>
                        </div>
                        <div class=" form-group">
                            <div class="form-group">
                                <label class="control-label mr-2">Bank Loans</label>
                                <br>
                                <div class="col-md-6">
                                    <label class="control-label">Amount[ US$/BDT]</label>
                                    <input maxlength="200"  name="f3_bankloan" id="f3_bankloan" type="text" value="{{ $product->f3_bankloan ?? '' }}" required="required" class="form-control" placeholder=""  />
                                </div>

                                <label for="">Notes (terms and sources to be detailed)</label>
                                <div class="col-md-6">
                                    <input  name="f3_BankNote" id="f3_BankNote" type="text" value="{{ $product->f3_BankNote ?? '' }}"  class="form-control" >
                                </div>

                            </div>
                        </div>
                            
                        <div class=" form-group">
                            <div class="form-group">
                                <label class="control-label mr-2">Own Contribution </label>
                                <br>

                                <div class="col-md-6">
                                    <label class="control-label">Amount[ US$/BDT]</label>
                                    <input maxlength="200" name="f3_owncontribution" id="f3_owncontribution" type="text" value="{{ $product->f3_owncontribution ?? '' }}" required="required" class="form-control" placeholder="" />
                                </div>

                                <label for="">Notes (terms and sources to be detailed)</label>
                                <div class="col-md-6">
                                    <input  name="f3_ownnote" id="f3_ownnote" type="text" value="{{ $product->f3_ownnote ?? '' }}"  class="form-control" f3_ownnote>
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
                                <input maxlength="200" name="f3_total" id="f3_total" type="text" value="{{ $product->f3_total ?? '' }}" required="required" class="form-control" placeholder="" />
                            </div>
                            <label for="">Notes (terms and sources to be detailed)</label>
                            <div class="col-md-6">
                                <input  name="f3_totalnote" id="f3_totalnote "type="text" value="{{ $product->f3_totalnote ?? '' }}"  class="form-control" >
                            </div>
                            </div>
                        </div>
                        <br><br>
                            
                        {{-- <button class="btn btn-primary nextBtn pull-left mr-2" type="submit">previous</button> --}}
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

            // $('div.setup-panel div a.btn-success').trigger('click');

        });
    </script>
@endsection
