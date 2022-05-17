<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function checklogin(Request $request){
        $request->validate([
            'username' => 'required|exists:users,username',
            'password' => 'required|min:5|max:30'
        ],
        [
            'username.required' => 'Username tidak boleh kosong',
            'username.exists' => "Username ini tidak terdaftar!",
            'password.required' => 'Password tidak boleh kosong'
        ]);
        $kredensil = $request->only('username', 'password');
        if(Auth::attempt($kredensil) ){
            if( auth()->user()->role == 1 ){
                return redirect()->route('admin.dashboard');
            }
            elseif( auth()->user()->role == 2 ){
                return redirect()->route('home');
            }elseif( auth()->user()->role == 3 ){
                return redirect()->route('diklat.dashboard');
            }elseif( auth()->user()->role == 4 ){
                return redirect()->route('mentor.dashboard');
            }elseif( auth()->user()->role == 5 ){
                return redirect()->route('pimpinan.dashboard');
            }elseif( auth()->user()->role == 6 ){
                return redirect()->route('peserta.dashboard');
            }elseif( auth()->user()->role == 7 ){
                return redirect()->route('pendaftar.dashboard');
            }
        } else {
            return redirect()->route('login')->with('fail', 'Username dan password tidak valid!');
        }
    }
}
