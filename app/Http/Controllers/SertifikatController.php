<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Sertifikat;

class SertifikatController extends Controller
{
    public function index(){
        $sertifikat = Sertifikat::join('pesertas', 'sertifikats.peserta_id' , '=', 'pesertas.id')
        ->join('pendaftars', 'pesertas.pendaftar_id', '=', 'pendaftars.id')
        ->get(['sertifikats.*', 'pesertas.id', 'pendaftars.nama_lengkap']);
        return view('page.admin.sertifikat.index', compact('sertifikat'));
    }

    public function addSurat(Request $request){
        // dd($request);
        // $name = $request->file('surat_balasan')->getClientOriginalName();
        // $path = $request->file('surat_balasan')->store('public/suratbalasan');
        $surat_balasan = $request->file('surat_balasan');
        $surat_balasan_name = $surat_balasan->getClientOriginalName();
        $surat = new Sertifikat();
        $surat->pendaftar_id = $request->pendaftar_id;
        $surat->no_surat_balasan = $request->no_surat_balasan;
        $surat->surat_balasan = $surat_balasan_name;
        $save = $surat->save();
        if($save){
            return redirect()->back()->with('success', 'Surat balasan berhasil ditambah!');
        }else{
            return redirect()->back()->with('fail', 'Surat Balasan gagal ditambah!');
        }
    }
}
