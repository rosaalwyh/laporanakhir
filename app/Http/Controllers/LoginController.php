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
            'username.exists' => "Username ini tidak terdaftar!"
        ]);
        $kredensil = $request->only('username', 'password');
        if(Auth::attempt($kredensil) ){
            if( auth()->user()->role == 1 ){
                return redirect()->route('admin.dashboard');
            }
            elseif( auth()->user()->role == 2 ){
                return redirect()->route('user.dashboard');
            }
        } else {
            return redirect()->route('login')->with('fail', 'Username dan password tidak valid!');
        }
    }
}
