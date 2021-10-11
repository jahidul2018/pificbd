<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\OnlineApplication;

class OnlineApplicationController extends Controller
{
    //

    //createStepOne

    public function createStepOne(Request $request)
    {
        $product = $request->session()->get('product');
        return view('online-form.online-application-form-1',compact('product'));
    }


    public function postCreateStepOne(Request $request)
    {
        $validatedData = $request->validate([
            'g1_name_of_lead_applicant' => 'required',
            'g2_phone' => 'required',
            'g2_email' => 'required',
            'g2_address' => 'required',
            'g3_representing' => 'required',
            'g4_clusterassociation' => 'required',
            'g4_phone' => 'required',
            'g4_email' => 'required',
            'g4_address' => 'required',
            'g5_projectmanager' => 'required',
            'g6_certificate' => 'required',
                // 'g1_formFileMultiple' => 'required',
            'g7_proposed' => 'required',
            'g8_MSME' => 'required',
            'g9_relevantinfo' => 'required',
            'g10_projectinfo' => 'required',
            'g11_map' => 'required',
            'g11_Dagno' => 'required',
            'g12_projecttype' => 'required',
            'g13_projectdescr' => 'required',
            'g14_quantitative' => 'required',
            'g14_condition' => 'required',
            'g14_utlities' => 'required',
            'g14_facilites' => 'required',

            'g15_projimple' => 'required',
            'g16_readiness' => 'required',
            'g17_implemen' => 'required',
            'g18_businessmodel' => 'required',
            
        ]);
  
        if(empty($request->session()->get('product'))){
            $product = new OnlineApplication();
            $product->fill($validatedData);
            $request->session()->put('product', $product);
        }else{
            $product = $request->session()->get('product');
            $product->fill($validatedData);
            $request->session()->put('product', $product);
        }
  
        return redirect()->route('submits.create.step.two');


    }

    /**
     * Show the step One Form for creating a new product.
     *
     * @return \Illuminate\Http\Response
     */
    public function createStepTwo(Request $request)
    {
        $product = $request->session()->get('product');
        return view('online-form.online-application-form-2',compact('product'));
    }

    /**
     * Show the step One Form for creating a new product.
     *
     * @return \Illuminate\Http\Response
     */
    public function postCreateStepTwo(Request $request)
    {
    	$validatedData = $request->validate([
            'f1_performance' => 'required',
            'f1_2018' => 'required',
            'f1_2019' => 'required',
            'f1_2020' => 'required',
            'f2_projectcost' => 'required',
            'f3_ammount' => 'required',
            'f3_amountnote' => 'required',
            'f3_bankloan' => 'required',
            'f3_BankNote' => 'required',
            'f3_owncontribution' => 'required',
            'f3_ownnote' => 'required',
            'f3_total' => 'required',
            'f3_ownnote' => 'required',
            'f3_totalnote' => 'required',
        ]);

        $product = $request->session()->get('product');
        $product->fill($validatedData);
        $request->session()->put('product', $product);

        return redirect()->route('submits.create.step.three');
    }

    /**
     * Show the step One Form for creating a new product.
     *
     * @return \Illuminate\Http\Response
     */
    public function createStepThree(Request $request)
    {
        $product = $request->session()->get('product');

        return view('online-form.online-application-form-3',compact('product'));
    }

    /**
     * Show the step One Form for creating a new product.
     *
     * @return \Illuminate\Http\Response
     */
    public function postCreateStepThree(Request $request)
    {
    	$validatedData = $request->validate([
            'p1_cluster_of_business' => 'required',
            'p2_intended' => 'required',
            'p3_how_many' => 'required',
            'p4_solution' => 'required',
            'p5_manufacturing' => 'required',
            'p6_created' => 'required',
            'p7_participation' => 'required',
        ]);

        $product = $request->session()->get('product');
        $product->fill($validatedData);
        $request->session()->put('product', $product);

        return redirect()->route('submits.create.step.four');
    }

     /**
     * Show the step One Form for creating a new product.
     *
     * @return \Illuminate\Http\Response
     */
    public function createStepFour(Request $request)
    {
        $product = $request->session()->get('product');

        return view('online-form.online-application-form-4',compact('product'));
    }

    /**
     * Show the step One Form for creating a new product.
     *
     * @return \Illuminate\Http\Response
     */
    public function postCreateStepFour(Request $request)
    {
    	$validatedData = $request->validate([
            'e1_sensitive' => 'required',
            'e2_benefits' => 'required',
            'e3_socalimpact' => 'required',
            'e4_assets' => 'required',
            'e5_livelihoods' => 'required',
            'e6_heritage' => 'required',
            'e7_implemen' => 'required',
            'e8_green' => 'required',
                // 'e8_orange' => 'required',
                // 'e8_darkorg' => 'required',
                // 'e8_red' => 'required',
        ]);

        $product = $request->session()->get('product');
        $product->fill($validatedData);
        $request->session()->put('product', $product);

        return redirect()->route('submits.create.step.five');
       

       
    }

     /**
     * Show the step One Form for creating a new product.
     *
     * @return \Illuminate\Http\Response
     */
    public function createStepFive(Request $request)
    {
        $product = $request->session()->get('product');

        return view('online-form.online-application-form-5',compact('product'));
    }

    /**
     * Show the step One Form for creating a new product.
     *
     * @return \Illuminate\Http\Response
     */
    public function postCreateStepFive(Request $request)
    {
        $validatedData = $request->validate([
            'a_name' => 'required',
            'a_position' => 'required',
            //'a_sigbature' => 'required',
            'a_dateplace' => 'required',
        ]);

        $product = $request->session()->get('product');
        $product->fill($validatedData);

        $product->save();

        $request->session()->forget('product');
        //$request->session()->put('product', $product);

        return redirect()->route('submits.create.step.six');
    }


     /**
     * Show the step One Form for creating a new product.
     *
     * @return \Illuminate\Http\Response
     */
    public function createStepSix(Request $request)
    {
        $product = $request->session()->get('product');

        return view('online-form.online-application-form-6',compact('product'));
    }

    /**
     * Show the step One Form for creating a new product.
     *
     * @return \Illuminate\Http\Response
     */
    public function postCreateStepSix(Request $request)
    {
    	
        // return redirect()->route('submits.create.step.one');
    }
}
