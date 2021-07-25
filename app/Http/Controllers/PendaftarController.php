<?php

namespace App\Http\Controllers;

use App\Models\Bagian;
use Illuminate\Http\Request;
use App\Models\Pendaftar;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class PendaftarController extends Controller
{
    public function index()
    {
        $user = User::all();
        $bagian = Bagian::all();
        $pendaftar = Pendaftar::join('bagians', 'pendaftars.bagian_id' , '=', 'bagians.id')
                                ->join('users', 'pendaftars.user_id', '=', 'users.id')
                                ->get(['pendaftars.*', 'bagians.nama_bagian','users.username']);
        // return response()->json($pendaftar);
        // dd($pendaftar);
        return view('page.admin.pendaftar.index', compact('pendaftar', 'user', 'bagian'));
    }

    public function pengajuan()
    {
        $bagian = Bagian::all();
        $user = Auth::user()->id;
        // dd($user);
        $pendaftar = Pendaftar::join('bagians', 'pendaftars.bagian_id' , '=', 'bagians.id')
                                ->join('users', 'pendaftars.user_id', '=', 'users.id')
                                ->where('pendaftars.user_id', '=', $user)
                                ->get(['pendaftars.*', 'bagians.nama_bagian', 'users.username']);
        // dd($pendaftar);
        return view('page.pendaftar.index', compact('pendaftar', 'bagian'));
    }

    // public function tambahPendaftar(Request $request)
    // {
    //     if($request->hasFile('proposal')){
    //         $destination_path = 'public/pendaftar/proposal';
    //         $proposal = $request->file('proposal');
    //         $proposal_name = $proposal->getClientOriginalName();
    //         $path = $request->file('proposal')->storeAs($destination_path, $proposal_name);
    //     }
    //     if($request->hasFile('ktm')){
    //         $destination_path = 'public/pendaftar/ktm';
    //         $ktm = $request->file('ktm');
    //         $ktm_name = $ktm->getClientOriginalName();
    //         $path = $request->file('ktm')->storeAs($destination_path, $ktm_name);
    //     }
    //     if($request->hasFile('surat_pengantar')){
    //         $destination_path = 'public/pendaftar/surat_pengantar';
    //         $surat_pengantar = $request->file('surat_pengantar');
    //         $surat_pengantar_name = $surat_pengantar->getClientOriginalName();
    //         $path = $request->file('surat_pengantar')->storeAs($destination_path, $surat_pengantar_name);
    //     }
        
    //     // dd($request);
    //     $pendaftar = new Pendaftar();
    //     $pendaftar->nama_lengkap = $request->nama_lengkap;
    //     $pendaftar->user_id = $request->user_id;
    //     $pendaftar->bagian_id = $request->bagian_id;
    //     $pendaftar->nim = $request->nim;
    //     $pendaftar->tanggal_lahir = $request->tanggal_lahir;
    //     $pendaftar->jenis_kelamin = $request->jenis_kelamin;
    //     $pendaftar->asal_kampus = $request->asal_kampus;
    //     $pendaftar->jurusan = $request->jurusan;
    //     $pendaftar->bagian_id = $request->bagian_id;
    //     $pendaftar->proposal = $proposal_name;
    //     $pendaftar->ktm = $ktm_name;
    //     $pendaftar->surat_pengantar = $surat_pengantar_name;
    //     $save = $pendaftar->save();

    //     if($save){
    //         return redirect()->back()->with('success', 'Akun telah sukses terdaftar');
    //     }else{
    //         return redirect()->back()->with('fail', 'Akun gagal registrasi!');
    //     }
    // }
    
    public function addPendaftar(Request $request)
    {
        if($request->hasFile('proposal')){
            $destination_path = 'public/pendaftar/proposal';
            $proposal = $request->file('proposal');
            $proposal_name = $proposal->getClientOriginalName();
            $path = $request->file('proposal')->storeAs($destination_path, $proposal_name);
        }
        if($request->hasFile('ktm')){
            $destination_path = 'public/pendaftar/ktm';
            $ktm = $request->file('ktm');
            $ktm_name = $ktm->getClientOriginalName();
            $path = $request->file('ktm')->storeAs($destination_path, $ktm_name);
        }
        if($request->hasFile('surat_pengantar')){
            $destination_path = 'public/pendaftar/surat_pengantar';
            $surat_pengantar = $request->file('surat_pengantar');
            $surat_pengantar_name = $surat_pengantar->getClientOriginalName();
            $path = $request->file('surat_pengantar')->storeAs($destination_path, $surat_pengantar_name);
        }
        
        // dd($request);
        $pendaftar = new Pendaftar();
        $pendaftar->nama_lengkap = $request->nama_lengkap;
        $pendaftar->user_id = Auth::user()->id;
        $pendaftar->bagian_id = $request->bagian_id;
        $pendaftar->nim = $request->nim;
        $pendaftar->tanggal_lahir = $request->tanggal_lahir;
        $pendaftar->jenis_kelamin = $request->jenis_kelamin;
        $pendaftar->asal_kampus = $request->asal_kampus;
        $pendaftar->jurusan = $request->jurusan;
        $pendaftar->bagian_id = $request->bagian_id;
        $pendaftar->proposal = $proposal_name;
        $pendaftar->ktm = $ktm_name;
        $pendaftar->surat_pengantar = $surat_pengantar_name;
        $save = $pendaftar->save();

        if($save){
            return redirect()->back()->with('success', 'Akun telah sukses terdaftar, silahkan tunggu verifikasi akun sekitar satu jam');
        }else{
            return redirect()->back()->with('fail', 'Akun gagal registrasi!');
        }
    }
}
