<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Jadwal;
use App\Pasien;


class BookingController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function getViewStep1(Request $request)
    {
        $request->validate([
            'jadwalDoctor' => 'required' ,
        ]);

        $jadwal_id = $request->jadwalDoctor;
        $jadwal = Jadwal::find($jadwal_id);
        return view('bookingstep1' , ['jadwal' => $jadwal]);
    }

    public function getViewStep2(Request $request)
    {
        $request->validate([
            'nama_pasien' => 'required' , 
            'tanggal_lahir_pasien' => 'required' , 
            'jenis_kelamin_pasien' => 'required' , 
            'alamat_pasien' => 'required' , 
            'riwayat_sakit' => 'required' 
        ]);

        // untuk cari di database jadwal, id jadwal yang sesuai dengan request jadwal_doctor
        $jadwal = Jadwal::find($request->jadwal_doctor);

        // Untuk no_urut, perhitungannya
        // cari tanggal berobat yang >= now (dari internet gatau untuk apa), dan
        // cari jadwal_id yang sama dengan request jadwal_doctor(jadwal_id)
        $cek = Pasien::where('tanggal_berobat', '>=', 'NOW()')->where('jadwal_id', $request->jadwal_doctor)->get();
        // jika di tabel belum ada tanggal berobat dengan jadwal id yang sama
        if (count($cek) > 0) 
        {
            // jika ada di tabel, maka no urut yang trakhir bakal di tambah 1
            $no_urut = count($cek) + 1;
        } 
        else 
        {
            // jika di tabel belum ada tanggal berobat dengan jadwal id yang sama, maka no_urut sama dengan 1
            $no_urut = 1;
        }

        // untuk menampung waktu_mulai ke variable waktu_mulai
        $waktu_mulai = $jadwal->waktu_mulai;

        // untuk perhitungan waktu aman, dari format H:I:S ke format detik(strtotime)
        $waktu_aman = strtotime($waktu_mulai) + ((10 * ($no_urut - 1) - 30) * 60);
        // kembaliin ke format H:I:S lagi dari format detik detik (strtotime)
        $waktu_aman = date('H:i:s', $waktu_aman);
        
        $waktu_masuk = strtotime($waktu_mulai) + (10 * ($no_urut - 1) * 60);
        $waktu_masuk = date('H:i:s', $waktu_masuk);
        
        // untuk proses hari, dari hari di format ke dalam bentuk detik kemudian di format ke dalam bentuk tanggal
        $tanggal_berobat = strtotime("next ".$jadwal->day());
        $tanggal_berobat = date('Y-m-d',$tanggal_berobat);
        
        $pasien = Pasien::create([
            'nama_pasien' => $request->nama_pasien ,
            'tanggal_lahir_pasien' => $request->tanggal_lahir_pasien ,
            'jenis_kelamin_pasien' => $request->jenis_kelamin_pasien ,
            'alamat_pasien' => $request->alamat_pasien ,
            'riwayat_sakit' => $request->riwayat_sakit ,
            'jadwal_id' => $request->jadwal_doctor ,
            'user_id' => $request->user()->id ,
            'tanggal_berobat' => $tanggal_berobat ,
            'no_urut' => $no_urut ,
            'waktu_masuk' => $waktu_masuk ,
            'waktu_aman' => $waktu_aman ,
        ]);

        return view('bookingstep2', ['pasien' => $pasien]);
    }

    public function getViewStep3()
    {
        return view('bookingstep3');
    }
}
