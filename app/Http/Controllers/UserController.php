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
            ],
            [
                'username.exist' => 'Username sudah terdaftar',
                'username.required' => 'Username tidak boleh kosong',
                'email.required' => 'Email tidak boleh kosong',
                'email.unique' => 'Email ini sudah terdaftar',
                'email.email' => 'Format email salah',
                'password.required' => 'Password tidak boleh kosong',
                'password.min' => 'Password minimal 5 karakter',
                'password.max' => 'Password maksimal 30 karakter',
                'cpassword.required' => 'Password Konfirmasi tidak boleh kosong',
                'cpassword.same' => 'Password tidak sama'
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
