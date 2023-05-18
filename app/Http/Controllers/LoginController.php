<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index() {
        return view('login');
    }

    public function voter() {
        return view('voter/login');
    }

    public function proses_login(Request $request){
       $request->validate([
            'username' => 'required',
            'password' => 'required',
        ],[//ini adalah konversi keterangan validasi form dalam bahasa Indonesia]
            'username.required' => 'Username tidak boleh kosong',
            'username.regex' => 'Masukan username dengan benar',
            'password.required' => 'Password tidak boleh kosong',
        ]);

        if(Auth::guard('user')->attempt(['username' => $request->username, 'password' => $request->password])) {
            $request->session()->regenerate();
                return redirect('/admin');
        }
       
        elseif(Auth::guard('voter')->attempt(['nim' => $request->username, 'password' => $request->password])) {
            $request->session()->regenerate();
            return redirect('/voter');
        }
        elseif(Auth::guard('panitia')->attempt(['username' => $request->username, 'password' => $request->password])) {
            $request->session()->regenerate();
            return redirect('/panitia');
        }
        return back()->with('error','Data yang anda masukan salah!');
    }

    public function logout(){
        if (Auth::guard('user')->check()){
            Auth::guard('user')->logout();
            request()->session()->invalidate();
            request()->session()->regenerateToken();
        }elseif (Auth::guard('panitia')->check()){
            Auth::guard('panitia')->logout();
            request()->session()->invalidate();
            request()->session()->regenerateToken();
        }elseif (Auth::guard('voter')->check()){
            Auth::guard('voter')->logout();
            request()->session()->invalidate();
            request()->session()->regenerateToken();
        }
        return redirect('login');
    }

    public function keluar(){
        if (Auth::guard('user')->check()){
            Auth::guard('user')->logout();
            request()->session()->invalidate();
            request()->session()->regenerateToken();
        }elseif (Auth::guard('panitia')->check()){
            Auth::guard('panitia')->logout();
            request()->session()->invalidate();
            request()->session()->regenerateToken();
        }elseif (Auth::guard('voter')->check()){
            Auth::guard('voter')->logout();
            request()->session()->invalidate();
            request()->session()->regenerateToken();
        }
        return redirect('masuk');
    }
}