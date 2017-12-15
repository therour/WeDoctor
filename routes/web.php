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

// Routing untuk GUEST
    Route::get('/', 'GuestViewController@getViewHome');
    Route::get('/about', 'GuestViewController@getViewAbout');
    Route::get('/howtobooking', 'GuestViewController@getViewHowToBooking');
    Route::get('/signin', 'GuestViewController@getViewSignIn');
    Route::get('/signup', 'GuestViewController@getViewSignUp');
    Route::get('/findmaps', 'GuestViewController@getViewFindMaps');
    Route::get('/findjadwal', 'GuestViewController@getViewFindJadwal');
    Route::get('/findrating', 'GuestViewController@getViewFindRating');
    Route::get('/cekakun', 'GuestViewController@getViewCekAkun');
    Route::get('/spesialisasi', 'GuestViewController@getViewSpesialisasi');
    Route::get('/spesialisasi/{spesialisasi}', 'GuestViewController@getViewDoctor');
    Route::get('/spesialisasi/doctor/doctorschedule', 'GuestViewController@getViewDoctorSchedule');
    Route::get('/riwayat', 'GuestViewController@getViewRiwayat');
    Route::get('/profile', 'GuestViewController@getViewProfile');

// Autentikasi untuk login dan register otomatis
    Auth::routes();

// Routing untuk kalo dah registrasi dan login
    Route::get('/home', 'HomeController@getView')->name('home');
    Route::get('/admin', 'AdminController@getViewHome')->name('admin');

    Route::get('/bookingstep1', 'BookingController@getViewStep1');
    Route::get('/bookingstep2', 'BookingController@getViewStep2');
    Route::get('/bookingstep3', 'BookingController@getViewStep3');

// Routing ADMIN SPESIALISASI
    Route::get('/admin/spesialisasi', 'AdminController@getViewSpesialisasi');
    Route::get('/admin/spesialisasi/edit/{id}', 'AdminController@getViewEditSpesialisasi');
    Route::put('/admin/spesialisasi/edit/{id}', 'AdminController@editSpesialisasi');
    Route::get('/admin/spesialisasi/tambah', 'AdminController@getViewTambahSpesialisasi');
    Route::post('/admin/spesialisasi/tambah', 'AdminController@tambahSpesialisasi');
    Route::delete('/admin/spesialisasi/delete/{id}', 'AdminController@deleteSpesialisasi');

// Routing ADMIN DOCTOR
    Route::get('/admin/doctor', 'AdminController@getViewDoctor');
    Route::get('/admin/doctor/edit/{id}', 'AdminController@getViewEditDoctor');
    Route::put('/admin/doctor/edit/{id}', 'AdminController@editDoctor');
    Route::get('/admin/doctor/tambah', 'AdminController@getViewTambahDoctor');
    Route::post('/admin/doctor/tambah', 'AdminController@tambahDoctor');
    Route::delete('/admin/doctor/delete/{id}', 'AdminController@deleteDoctor');

// Routing ADMIN USER
    Route::get('/admin/user', 'AdminController@getViewUser');

