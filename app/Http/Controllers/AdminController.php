<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Auth;

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
        $dataSpesialisasi = DB::table('spesialisasis')->get();
        return view('adminspesialisasi', ['dataSpesialisasi' => $dataSpesialisasi]);
    }

    public function getViewEditSpesialisasi()
    {
        return view('adminspesialisasiedit');
    }

    public function getViewTambahSpesialisasi()
    {
        return view('adminspesialisasitambah');
    }

    public function getViewDoctor()
    {
        return view('admindoctor');
    }

    public function getViewEditDoctor()
    {
        return view('admindoctoredit');
    }

    public function getViewTambahDoctor()
    {
        return view('admindoctortambah');
    }

    public function getViewUser()
    {
        return view('adminuser');
    }
}
