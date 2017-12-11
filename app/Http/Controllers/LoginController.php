<?php

namespace App\Http\Controllers;

use Auth;
use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

class LoginController extends Controller
{
    use AuthenticatesUsers;

    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    public function login(Request $request)
    {
    	// Cek inputannya
    		// dd($request->all());
    	
    	if(Auth::attempt(['username' => $request->username, 'password' => $request->password]))
    	{
    		$user = User::where('username', $request->username)->first();
    		if($user->is_admin())
    		{
    			return redirect('admin');
    		}
    		else
    		{
    			return redirect('home');
    		}
    	}
    	return redirect()->back();
    }
}
