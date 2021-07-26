<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\SuratBalasan;
use App\Models\Pendaftar;
use App\Mail\SuratBalasanMail;
use Illuminate\Support\Facades\Mail;

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
        // $name = $request->file('surat_balasan')->getClientOriginalName();
        // $path = $request->file('surat_balasan')->store('public/suratbalasan');
        $surat_balasan = $request->file('surat_balasan');
        $surat_balasan_name = $surat_balasan->getClientOriginalName();
        $surat = new SuratBalasan();
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

    public function formEmailSurat($id){
        $pendaftar = Pendaftar::findOrFail($id);
        return view('page.admin.suratbalasan.form-email-surat', compact('pendaftar'));
    }

    public function sendSuratBalasan(Request $request){
        // $pendaftar = Pendaftar::join('users', 'pendaftars.user_id', '=', 'users.id')
        //                         ->get('pendaftars.*', 'users.email');  
        //                         dd($pendaftar);
        $details = [
        'title' => 'E-mail Surat Balasan Pengajuan Praktik Kerja Lapangan',
        'body' => 'Hi',
        'no_surat_balasan' => $request->no_surat_balasan,
        'surat_balasan' => $request->file('surat_balasan')
        ];
        $send = Mail::to('alawiyahrosa@gmail.com')->send(new \App\Mail\SuratBalasanMail($details));
        
        if($send){
             return redirect('admin/pendaftar')->with('success', "Email berhasil dikirim");
        }
        return redirect('admin/pendaftar')->with('fail', "Email gagal dikirim");
    }
}
