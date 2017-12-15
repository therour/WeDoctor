<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Spesialisasi;

class GuestViewController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function getViewHome()
    {
        return view('home');
    }

    public function getViewAbout()
    {
        return view('about');
    }

    public function getViewHowToBooking()
    {
        return view('howtobooking');
    }

    public function getViewSignIn()
    {
        return redirect('/login');
    }

    public function getViewSignUp()
    {
        return redirect('/register');
    }

    public function getViewFindMaps()
    {
        return view('findmaps');
    }

    public function getViewFindJadwal()
    {
        return view('findjadwal');
    }

    public function getViewFindRating()
    {
        return view('findrating');
    }

    public function getViewCekAkun()
    {
        return view('cekakun');
    }

    public function getViewSpesialisasi()
    {
        // Untuk akses database
        $dataSpesialisasi = DB::table('spesialisasis')->get();
        return view('spesialisasi', ['dataSpesialisasi' => $dataSpesialisasi]);
    }

    public function getViewDoctor(Spesialisasi $spesialisasi)
    {
        $doctors = $spesialisasi->doctors()->get();
        return view('doctor', ['doctors' => $doctors]);
    }

    public function getViewDoctorSchedule()
    {
        return view('doctorschedule');
    }

    public function getViewRiwayat()
    {
        return view('riwayat');
    }

    public function getViewProfile()
    {
        return view('profile');
    }
}
