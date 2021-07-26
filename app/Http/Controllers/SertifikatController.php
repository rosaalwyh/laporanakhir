<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Sertifikat;
use App\Models\Peserta;
use App\Models\Pendaftar;
use App\Mail\SertifikatMail;
use Illuminate\Support\Facades\Mail;

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

    public function formEmailSertifikat($id){
        $peserta = Peserta::findOrFail($id);
        return view('page.admin.sertifikat.form-email-surat', compact('peserta'));;
    }

    public function sendSertifikat(Request $request, $id){
        // $email = Pendaftar::join('users', 'pendaftars.user_id', '=', 'users.id')
        //                     ->get('pendaftars.*', 'users.email');
        $email = Peserta::join('pendaftars', 'pesertas.pendaftar_id', '=', 'pendaftars.id')
        ->join('users', 'pendaftars.user_id', '=', 'users.id')
        ->select('users.email')
        ->where('pesertas.id', '=', $id)
        ->get();
        // dd($email);
        $details = [
        'title' => 'E-mail Surat Balasan Pengajuan Praktik Kerja Lapangan',
        'body' => 'Hi',
        'no_sertifikat' => $request->no_sertifikat,
        'sertifikat' => $request->file('sertifikat')
        ];
        Mail::to($email)->send(new SertifikatMail($details));
        return redirect('admin/peserta')->with('success', "Email berhasil dikirim");
    }
}
