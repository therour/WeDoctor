<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\WeDoctor;
use App\Pasien;
use Auth;
use Mail;
use Alert;

class SendEmailController extends Controller
{
    public function sendmail(Pasien $pasien)
    {
    	$tujuan = Auth::user()->email;
    	$nama = Auth::user()->nama;

    	Mail::to($tujuan,$nama)->send(new WeDoctor($pasien));

    	Alert::success('Email berhasil dikirimkan, silahkan cek email anda', 'Sukses');

    	return redirect('/bookingstep3');
    }
}
