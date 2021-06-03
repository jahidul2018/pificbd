<?php

use Illuminate\Support\Facades\Route;

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


//app-section
Route::get('/', function () {
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
Route::get('/online-apply', function () {
    return view('online-apply');
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

