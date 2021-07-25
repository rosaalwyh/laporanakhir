<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\SuratBalasan;
use App\Models\Pendaftar;

class SuratBalasanController extends Controller
{
    public function index(){
        $pendaftar = Pendaftar::all();
        $suratbalasan = SuratBalasan::join('pendaftars', 'surat_balasans.pendaftar_id' , '=', 'pendaftars.id')
        ->get(['surat_balasans.*', 'pendaftars.nama_lengkap']);
        return view('page.admin.suratbalasan.index', compact('suratbalasan', 'pendaftar'));
    }

    public function addSurat(Request $request){
        // dd($request);
        $name = $request->file('surat_balasan')->getClientOriginalName();
        $path = $request->file('surat_balasan')->store('public/suratbalasan');
        // $surat_balasan = $request->file('surat_balasan');
        // $surat_balasan_name = $surat_balasan->getClientOriginalName();
        $surat = new SuratBalasan();
        $surat->pendaftar_id = $request->pendaftar_id;
        $surat->no_surat_balasan = $request->no_surat_balasan;
        $surat->surat_balasan = $name+$path;
        $save = $surat->save();
        if($save){
            return redirect()->back()->with('success', 'Surat balasan berhasil ditambah!');
        }else{
            return redirect()->back()->with('fail', 'Surat Balasan gagal ditambah!');
        }
    }
}
