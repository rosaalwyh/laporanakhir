<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Diklat;
use App\Models\Bagian;
use Facade\FlareClient\Http\Response;
use Illuminate\Support\Facades\Auth;

class DiklatController extends Controller
{
    public function index(){
        $bagian = Bagian::get();
        $diklat = Diklat::join('users', 'diklats.user_id' , '=', 'users.id')
        ->get(['diklats.*', 'users.username']);
        return view('page.admin.diklat.index', compact('diklat', 'bagian'));
    }

    public function getDataDiklat(){
        $user = Auth::user()->id;
        $diklat = Diklat::join('users', 'diklats.user_id' , '=', 'users.id')
        ->where('diklats.user_id', '=', $user)
        ->get();
        // dd($pimpinan);
        return view('page.diklat.index', compact('diklat'));
    }
    
    public function tambahDiklat(Request $request){
        $request->validate([
            'nama_lengkap' => 'required',
            'nip' => 'required|unique:diklats|max:20',
            'jabatan' => 'required'
            ],
            [
                'nama_lengkap.required' => 'Username tidak boleh kosong',
                'nip.required' => 'NIP tidak boleh kosong',
                'nip.unique' => 'NIP ini sudah terdaftar',
                'jabatan.required' => 'Jabatan tidak boleh kosong'
            ]);
        $diklat = new Diklat();
        $diklat->nama_lengkap = $request->nama_lengkap;
        $diklat->user_id = Auth::user()->id;
        $diklat->nip = $request->nip;
        $diklat->jabatan = $request->jabatan;
        $diklat->jenis_kelamin = $request->jenis_kelamin;
        $diklat->tanggal_lahir = $request->tanggal_lahir;
        $save = $diklat->save();
        if($save){
            return redirect()->back()->with('success', 'Pegawai Diklat sukses ditambah!');
        }else{
            return redirect()->back()->with('fail', 'Pegawai Diklat gagal ditambah!');
        }
    }

    public function edit(Request $request, $id){
        if($request->isMethod('post')){
            $data = $request->all();
            dd($data);
        }
    }
}
