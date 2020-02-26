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


Route::get('/', "FeedbackController@show",function () {
    return view('home');
}) ->name('home');

Route::get('/menu', "MenuController@index");

Route::get('/about', function () {
    return view('about');
});

Route::get('/customers', "FeedbackController@show");
Route::post('/feedback', "FeedbackController@store");

Route::get('/contact', function () {
    return view('contact');
});


Route::post('/contact', "ContactController@contactPost");

Route::get('reservation', 'ReservationController@reservation');
Route::post('reservation', ['as'=>'reservation-form','uses'=>'ReservationController@reservationPost']);
