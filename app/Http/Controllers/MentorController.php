<?php

namespace App\Http\Controllers;

use App\Models\Bagian;
use App\Models\Mentor;
use App\Models\User;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class MentorController extends Controller
{
    public function index(){
        $bagian = Bagian::all();
        $user = User::all();
        $mentor = Mentor::join('users', 'mentors.user_id' , '=', 'users.id')
                                ->get(['mentors.*', 'users.username']);
        return view('page.admin.mentor.index', compact('mentor', 'user', 'bagian'));
    }

    public function getDataMentor(){
        $user = Auth::user()->id;
        $mentor = Mentor::join('users', 'mentors.user_id' , '=', 'users.id')
                          ->where('mentors.user_id', '=', $user)
                          ->get();
        return view('page.mentor.index', compact('mentor'));
    }

    public function tambahMentor(Request $request){
        // dd($request);
        $request->validate([
            'nama_lengkap' => 'required',
            'nip' => 'required|unique:mentors|max:20'
            ],
            [
                'nama_lengkap.required' => 'Username tidak boleh kosong',
                'nip.required' => 'NIP tidak boleh kosong',
                'nip.unique' => 'NIP ini sudah terdaftar'
            ]);
        $mentor = new Mentor();
        $mentor->nama_lengkap = $request->nama_lengkap;
        $mentor->user_id = $request->user_id;
        $mentor->nip = $request->nip;
        $mentor->jenis_kelamin = $request->jenis_kelamin;
        $mentor->tanggal_lahir = $request->tanggal_lahir;
        $save = $mentor->save();
        if($save){
            return redirect()->back()->with('success', 'Mentor sukses ditambah!');
        }else{
            return redirect()->back()->with('fail', 'Mentor gagal ditambah!');
        }
    }
}
