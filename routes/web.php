<?php

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


Route::get('/services', function () {
    return view('services');
});
Route::get('/related_companies', function () {
    return view('related_companies');
});
Route::get('/history', function () {
    return view('history');
});
Route::get('/interview', function () {
    return view('interview');
});
 

//Route for contactus Sent Mail start//
    Route::get('/emailTemplate', 'SendEmailController@temp')->name('emailTemplate');
    Route::get('/contactus', 'SendEmailController@contactus')->name('contactus');
    Route::post('/sendmail', 'SendEmailController@sendmail')->name('sendmail');
//Route for contactus Sent Mail end//