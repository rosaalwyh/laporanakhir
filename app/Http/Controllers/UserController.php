<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    protected function redirectTo(){
        if( Auth()->user()->role == 1){
            return route('admin.dashboard');
        }
        elseif( Auth()->user() == 2){
            return route('user.dashboard');
        }
    }

    public function index(){
        return view('page.user.dashboard');
    }

    public function create(Request $request){
        $request->validate([
            'username' => 'required|unique:users,username',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|min:5|max:30',
            'cpassword' => 'required|min:5|max:30|same:password'
        ]);
        
        $user = new User();
        $user->username = $request->username;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $user->role = 3;
        $save = $user->save();

        if($save){
            return redirect()->back()->with('success', 'Akun telah sukses terdaftar');
        }else{
            return redirect()->back()->with('fail', 'Akun gagal registrasi!');
        }
    }

    public function logout(){
        Auth::logout();
        return redirect('login');
    }
}
