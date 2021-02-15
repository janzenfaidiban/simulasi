<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Auth;


use App\User;
use DB;

class LoginallController extends Controller
{
    public function masuk(Request $request)
    {
      // echo "$request->email.$request->password "; die;
    	if(Auth::attempt($request->only('email','password'))){
            $akun = DB::table('users')->where('email', $request->email)->first();
            //dd($akun);
            if($akun->level =='supervisor'){
                return redirect('/supervisor/dashboard')->with('status','Anda Berhasil Login | SELAMAT DATANG SUPERVIOR');

            } else if($akun->level =='acceptance'){
                return redirect('/acceptance/dashboard')->with('status','Anda Berhasil Login | SELAMAT DATANG  ACCEPTANCE');

            } else if($akun->level =='cashier'){
                return redirect('/cashier/dashboard')->with('status','Anda Berhasil Login |  SELAMAT DATANG CASHIER');
             }
    	}
        return redirect()->back()->with('status',' Email & Password Salah :( | <b>Coba Lagi</b>');
    }


    public function keluar()
    {
  if (Auth::guard('web')->check()) {
    Auth::guard('web')->logout();
  } elseif (Auth::guard('web')->check()) {
    Auth::guard('web')->logout();
  }
  return redirect('/login/moses/kilang');
}

    
}
