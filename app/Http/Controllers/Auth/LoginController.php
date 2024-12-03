<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\User;


class LoginController extends Controller
{
    //
	public function loginForm(){
		return  view('auth.login');
	}

	public function login(Request $request){
		
		$request->validate([
			'email' => 'required|email',
			'password' => 'required',
		]);

		if(Auth::attempt([
			'email' => $request->email,
			'password' => $request->password,
		], $request->remember)){
			return redirect()->intended('/records');
		}

		return back()->withErrors([
			'email' => 'Invalid email or password',
		]);
	}

	public function logout(){
		Auth::logout();
		return redirect('/login');
	}

}
