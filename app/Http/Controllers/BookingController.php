<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
    public function getViewStep1()
    {
        return view('bookingstep1');
    }

    public function getViewStep2()
    {
        return view('bookingstep2');
    }

    public function getViewStep3()
    {
        return view('bookingstep3');
    }
}
