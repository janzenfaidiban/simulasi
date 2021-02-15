<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Hash;
use App\User;
use Illuminate\Support\Facades\Auth;
class HomeController extends Controller
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
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }

    public function profile()
    {
        return view('layouts.profile');
    }

    
public function ganti_password()
{
    return view('auth.ganti_password');
}

public function password_update(Request $request)
{
    $validatedData = $request->validate([
        'new-password' => 'required|string|min:6|confirmed',
    ]);

    //Change Password
    $user = Auth::user();
    $user->password = bcrypt($request->get('new-password'));
    $user->save();

    return redirect()->back()->with("status","Silakan Melakukan Login Ulang!");

}
}
