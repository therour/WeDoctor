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

Route::get('/', function() {
    return view('home');
});

Route::get('/about', function() {
    return view('about');
});

Route::get('/howtobooking', function() {
    return view('howtobooking');
});

Route::get('/signin', function() {
    return redirect('/login');
});

Route::get('/signup', function() {
    return redirect('/register');
});

Route::get('/findmaps', function() {
    return view('findmaps');
});

Route::get('/findjadwal', function() {
    return view('findjadwal');
});

Route::get('/findrating', function() {
    return view('findrating');
});

Route::get('/booking-step-1', function() {
    return view('bookingstep1');
});

Route::get('/booking-step-2', function() {
    return view('bookingstep2');
});

Route::get('/booking-step-3', function() {
    return view('bookingstep3');
});

Route::get('/spesialisasi', function() {
    // Untuk akses database
    $dataSpesialisasi = DB::table('spesialisasi')->get();
    return view('spesialisasi', [
        'dataSpesialisasi' => $dataSpesialisasi
    ]);
});

Route::get('/spesialisasi/doctor', function() {
    return view('doctor');
});

Route::get('/spesialisasi/doctor/doctorschedule', function() {
    return view('doctorschedule');
});

// Autentikasi untuk login dan register otomatis
   // Auth::routes();

// Routing untuk Registrasi
Route::get('register', 'Auth\RegisterController@showRegistrationForm')->name('register');
Route::post('register', 'Auth\RegisterController@register');

// Routing untuk Login form not modal
Route::get('login', 'Auth\LoginController@showLoginForm')->name('login');
Route::post('login', 'Auth\LoginController@login');
Route::post('logout', 'Auth\LoginController@logout')->name('logout');