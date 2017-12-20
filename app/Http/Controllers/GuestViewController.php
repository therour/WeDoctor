<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Spesialisasi;
use App\Jadwal;
use App\Doctor;
use App\Tempat;

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

    public function getViewFindJadwal(Request $request)
    {
        // query untuk akses name=hari yang ada di form findjadwal dengan method get
        $hari = $request->query('hari');
        $jadwals = Jadwal::where('hari', $hari)->get();
        return view('findjadwal', ['jadwals' => $jadwals]); 
    }

    public function getViewFindRating(Request $request)
    {
        // $pasiens = $request->user()->pasiens()->get(); <<<< kalo mau sesuai dokter yang udah pernah user singgahin
        $doctors = Doctor::all();

        return view('findrating', ['doctors' => $doctors]);
    }

    public function submitrating(Request $request)
    {
        // Untuk melihat ada dokter_id dan user_id yang sama ga di database
        $ada = count(DB::table('ratings')->where('doctor_id', $request->doctor_id)->where('user_id', $request->user()->id)->get()) > 0;

        // Jika ada
        if ($ada) 
        {
            // data yang di database di update dengan data inputan yang baru
            $request->user()->rating()->updateExistingPivot($request->doctor_id, 
            [
                // kolom rating_user di isi dengan inputan yang baru
                'rating_user' => $request->rating_user
            ]);
        } 
        else 
        {
            // jika tidak ada maka membuat baris isian baru
            $request->user()->rating()->attach($request->doctor_id, ['rating_user' => $request->rating_user]);
        }

        $rating_baru = 0; 
        $jumlah_penilai = DB::table('ratings')->where('doctor_id', $request->doctor_id)->get();
        foreach ($jumlah_penilai as $nilai) 
        {
            // penjumlahan semua penilaian terhadap doctor_id yang sama
            $rating_baru += $nilai->rating_user;
        }
        // (float) menandakan bahwa rating_baru bertipe float dari yang awalnya integer
        $rating_baru = (float) $rating_baru / count($jumlah_penilai);

        // mencari doctor_id di database Doctor yang sesuai dengan requestnya
        $doctor = Doctor::find($request->doctor_id);
        // kolom rating di tabel doctor di assignmen dengan rating_baru
        $doctor->rating = $rating_baru;
        $doctor->save();

        return redirect()->back();
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

    public function getViewDoctor(Spesialisasi $id)
    {
        $doctors = $id->doctors()->get();
        return view('doctor', ['doctors' => $doctors]);
    }

    public function getViewDoctorSchedule($id)
    {
        $doctors = Doctor::find($id);
        $jadwals = Jadwal::where('doctor_id','=',$id)->get();

        return view('doctorschedule', ['doctor' => $doctors, 'jadwals' => $jadwals]);
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
