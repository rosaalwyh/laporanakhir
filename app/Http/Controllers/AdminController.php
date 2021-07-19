<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    public function index(){
        return view('page.admin.dashboard');
    }

    public function logout(){
        Auth::logout();
        return redirect('login');
    }
}
