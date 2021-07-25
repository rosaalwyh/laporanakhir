<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pimpinan;
use App\Models\Pendaftar;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class PimpinanController extends Controller
{
    public function index(){
        $user = User::all();
        $pimpinan = Pimpinan::join('users', 'pimpinans.user_id' , '=', 'users.id')
        ->get(['pimpinans.*', 'users.username']);
        // dd($pimpinan);
        return view('page.admin.pimpinan.index', compact('pimpinan', 'user'));
    }

    public function getDataPimpinan(){
        $user = Auth::user()->id;
        $pimpinan = Pimpinan::join('users', 'pimpinans.user_id' , '=', 'users.id')
        ->where('pimpinans.user_id', '=', $user)
        ->get(['pimpinans.*', 'users.username']);
        // dd($pimpinan);
        return view('page.pimpinan.index', compact('pimpinan'));
    }

    public function tambahPimpinan(Request $request){
        $request->validate([
            'nama_lengkap' => 'required',
            'nip' => 'required|unique:pimpinans|max:20'
            ],
            [
                'nama_lengkap.required' => 'Username tidak boleh kosong',
                'nip.required' => 'NIP tidak boleh kosong',
                'nip.unique' => 'NIP ini sudah terdaftar'
            ]);
        $pimpinan = new Pimpinan();
        $pimpinan->nama_lengkap = $request->nama_lengkap;
        $pimpinan->user_id = $request->user_id;
        $pimpinan->nip = $request->nip;
        $pimpinan->jenis_kelamin = $request->jenis_kelamin;
        $pimpinan->tanggal_lahir = $request->tanggal_lahir;
        $save = $pimpinan->save();
        if($save){
            return redirect()->back()->with('success', 'Pimpinan Diklat sukses ditambah!');
        }else{
            return redirect()->back()->with('fail', 'Pimpinan Diklat gagal ditambah!');
        }
    }
    public function terima($id){
        $rekomendasi = Pendaftar::findOrFail($id);
        $rekomendasi->status = 'terima';
        $save = $rekomendasi->save();
        if($save){
            return redirect()->back()->with('success', 'Status diterima sukses ditambah!');
        }else{
            return redirect()->back()->with('fail', 'Status diterima gagal ditambah!');
        }
    }
    public function tolak($id){
        $rekomendasi = Pendaftar::findOrFail($id);
        $rekomendasi->status = 'tidak';
        $save = $rekomendasi->save();
        if($save){
            return redirect()->back()->with('success', 'Status ditolak sukses ditambah!');
        }else{
            return redirect()->back()->with('fail', 'Status ditolak gagal ditambah!');
        }
    }
}
