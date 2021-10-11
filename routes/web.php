<?php

use Illuminate\Support\Facades\Route;

use Illuminate\Http\Request;

use App\Http\Controllers\LocalizationController;
use App\Http\Controllers\OnlineApplicationController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


// Route::get('/', function () {
//     return view('welcome');
// });


Route::get('/index', [LocalizationController::class,'index']);
Route::get('/bn', [LocalizationController::class,'lang_change'])->name('LangChange');
//ajax-crud
    //Route::POST('/userData/getUserData','UserDataController@getUserData');
    // Route::resource('/userData','UserDataController');
// Route::post('/submits', [OnlineApplicationController::class, 'Store'])->name('store');

// Route::get('/online-apply', function () {
//     return view('online-application-form');
// });

Route::get('/online/apply', [OnlineApplicationController::class, 'createStepOne'])->name('submits.create.step.one');
Route::post('online/apply/create-step-one', [OnlineApplicationController::class, 'postCreateStepOne'])->name('submits.create.step.one.post');

Route::get('/online/apply/create-step-two', [OnlineApplicationController::class, 'createStepTwo'])->name('submits.create.step.two');
Route::post('/online/apply/create-step-two', [OnlineApplicationController::class, 'postCreateStepTwo'])->name('submits.create.step.two.post');

Route::get('/online/apply/create-step-three', [OnlineApplicationController::class, 'createStepThree'])->name('submits.create.step.three');
Route::post('/online/apply/create-step-three', [OnlineApplicationController::class, 'postCreateStepThree'])->name('submits.create.step.three.post');

Route::get('/online/apply/create-step-four', [OnlineApplicationController::class, 'createStepFour'])->name('submits.create.step.four');
Route::post('/online/apply/create-step-four', [OnlineApplicationController::class, 'postCreateStepFour'])->name('submits.create.step.four.post');

Route::get('/online/apply/create-step-five', [OnlineApplicationController::class, 'createStepFive'])->name('submits.create.step.five');
Route::post('/online/apply/create-step-five', [OnlineApplicationController::class, 'postCreateStepFive'])->name('submits.create.step.five.post');

Route::get('/online/apply/create-step-six', [OnlineApplicationController::class, 'createStepSix'])->name('submits.create.step.six');
Route::post('/online/apply/create-step-six', [OnlineApplicationController::class, 'postCreateStepSix'])->name('submits.create.step.six.post');




//app-section
Route::get('/', function () {
// determine a lifetime and return as object instead of string
//cache()->flush();

        // [
        //    '1'=> 'pific-web-site/img/slider/mini/1-min.jpg',

        //     ];
        //$image= 'pific-web-site/img/slider/mini/1-min.jpg';

// $img = Image::cache(function($image) {
//     return $image->make('public/pific-web-site/img/slider/mini/1-min.jpg');

//  }, 10, true);

    return view('index');
});

//contact-section
Route::get('/contact', function () {
    return view('contact');
});

//news-section
Route::get('/about', function () {
    return view('about');
});

//news-section
Route::get('/news', function () {
    return view('news');
});
Route::get('/news-single', function () {
    return view('news-single');
});

//apply-section
Route::get('/apply', function () {
    return view('apply');
});


Route::get('/evalution-form', function () {
    return view('evalution-form');
});


//team-section
Route::get('/pific-teams', function () {
    return view('our-team-button-page');
});
Route::get('/pific-team-tec', function () {
    return view('our-team-tec');
});
Route::get('/pific-team-ict', function () {
    return view('our-team-ict');
});
Route::get('/pific-team-management', function () {
    return view('our-team-manage');
});

//program
Route::get('/our-program', function () {
    return view('our-program');
});

//database
Route::get('/database', function () {
    return view('our-program');
});

Route::get('/project-status', function () {
    return view('project-status');
});

Route::get('/grm', function () {
    return view('grm');
});
Route::get('/grc', function () {
    return view('grc');
});

Route::Post('/mail', function (Request $request ) {
    // return view('our-program');

    $name= $request->first_name.' '.$request->last_name;
    $subject=$request->subject;
    $email= $request->email;
    $message= $request->message;
    //dd($name,$email,$message);
    $details = [
         'title' => $name.' '.$email,
         'body'  => $name.' wants to know about '.$subject.' and '.$message,
     ];
    // $receivedmail ="jahiduk.alam13@gmail.com";
     $receivedmail =[
        "jahiduk.alam13@gmail.com",
        "shikhasp01@gmail.com",
        "minhaz.fgtech@gmail.com",

     ];

     \Mail::to($receivedmail)->send(new \App\Mail\OnlineApplicationMail($details));
     return view('send');
     //dd("Email is Sent to kanak.");
 });

Route::get('/send-mail', function () {
   // return view('our-program');

    $details = [
        'title' => 'this is a test mail form pific online application',
        'body' => 'this is a mail body'
    ];
    $receivedmail ="kanak.syssolution@gmail.com";

    \Mail::to($receivedmail)->send(new \App\Mail\OnlineApplicationMail($details));
    //return view('our-program');
    //dd("Email is Sent to kanak.");
});




