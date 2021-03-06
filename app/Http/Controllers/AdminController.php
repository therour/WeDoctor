<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Auth; 
use App\Spesialisasi;
use App\Doctor;
use App\Tempat;
use App\User;
use App\Jadwal;

class AdminController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('admin');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function getViewHome()
    {
        return view('admin');
    }

    public function getViewSpesialisasi()
    {
        $dataSpesialisasi = Spesialisasi::all();
        return view('adminspesialisasi')->with('dataSpesialisasi',$dataSpesialisasi)->with('no',1);
    }

    public function getViewEditSpesialisasi($id)
    {
        $spesialisasi = Spesialisasi::where('id','=',$id)->first();


        return view('adminspesialisasiedit')->with('dataSpesialisasi',$spesialisasi);
    }

    public function editSpesialisasi(Request $request, $id)
    {
        $spesialisasi = Spesialisasi::find($id);

            $spesialisasi->nama_spesialisasi = $request->nama_spesialisasi;
            $spesialisasi->deskripsi_spesialisasi = $request->deskripsi_spesialisasi;

        $spesialisasi->save();

        return redirect('/admin/spesialisasi');
    }

    public function getViewTambahSpesialisasi()
    {
        return view('adminspesialisasitambah');
    }

    public function getViewDoctor()
    {
        $dataDoctor = Doctor::all();
        return view('admindoctor')->with('dataDoctor',$dataDoctor)->with('no',1);
    }

    public function getViewEditDoctor($id)
    {
        $doctor = Doctor::where('id','=',$id)->first();
        return view('admindoctoredit')->with('dataDoctor',$doctor);
    }

    public function editDoctor(Request $request, $id)
    {
        $doctor = Doctor::find($id);

            $doctor->nama_doctor = $request->nama_doctor;
            $doctor->alamat_doctor = $request->alamat_doctor;
            $doctor->pengalaman_doctor = $request->pengalaman_doctor;

        $doctor->save();

        return redirect('/admin/doctor');
    }

    public function getViewTambahDoctor()
    {
        return view('admindoctortambah')->with('spesialisasi_nama',Spesialisasi::all())->with('tempat',Tempat::all());
    }

    public function getViewUser()
    {
        $users = User::where('id','>','1')->get();

        return view('adminuser')->with('users',$users)->with('no',1);
    }

    public function deleteUser($id)
    {
        $user = User::find($id);

        $user->delete();

        return redirect('/admin/user');
    }

    public function tambahSpesialisasi(Request $request)
    {
        $spesialisasi = new Spesialisasi;

            $spesialisasi->nama_spesialisasi = $request->nama_spesialisasi;
            $spesialisasi->deskripsi_spesialisasi = $request->deskripsi_spesialisasi;

        $spesialisasi->save();

        return redirect('/admin/spesialisasi');
    }

    public function deleteSpesialisasi($id)
    {
        $spesialisasi = Spesialisasi::find($id);

        $spesialisasi->delete();

        return redirect('/admin/spesialisasi');
    }

    public function tambahDoctor(Request $request)
    {            
        $doctor = Doctor::create([
            'nama_doctor' => $request->nama_doctor,
            'alamat_doctor' => $request->alamat_doctor,
            'pengalaman_doctor' => $request->pengalaman_doctor,
            'spesialisasi_id' => $request->spesialisasi_id
        ]);

        for($i=0 ; $i<3; $i++)
        { 
            $jadwal = Jadwal::create([
                'doctor_id' => $doctor->id,
                'hari' => $request->hari[$i],
                'waktu_mulai' => $request->waktu_mulai[$i],
                'waktu_akhir' => $request->waktu_akhir[$i],
                'tempat_id' => $request->tempat[$i]
            ]);
        }

        return redirect('/admin/doctor');
    }

    public function deleteDoctor($id)
    {
        $doctor = Doctor::find($id);
        $doctor->delete();

        return redirect('/admin/doctor');
    }
}
