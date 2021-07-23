<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Diklat;

class DiklatController extends Controller
{
    public function index(){
        $diklat = Diklat::join('users', 'diklats.user_id' , '=', 'users.id')
        ->get(['diklats.*', 'users.username']);
        return view('page.admin.diklat.index', compact('diklat'));
    }
}
