<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Nilai;
use App\Models\NilaiSeminar;
use App\Models\Pendaftar;
use App\Models\Peserta;
use App\Mail\NilaiMail;
use Illuminate\Support\Facades\Mail;

class NilaiController extends Controller
{
    public function index(){
        $nilai = Nilai::join('pesertas', 'nilais.peserta_id' , '=', 'pesertas.id')
        ->join('pendaftars', 'pesertas.pendaftar_id', '=', 'pendaftars.id')
        ->join('bagians', 'pendaftars.bagian_id', '=', 'bagians.id')
        ->join('nilai_seminars', 'nilai_seminars.peserta_id', '=', 'pesertas.id')
        ->get(['nilais.*', 'pesertas.pendaftar_id', 'pendaftars.nama_lengkap', 'bagians.nama_bagian', 'nilai_seminars.*']);
        // dd($nilai);
        return view('page.admin.nilai.index', compact('nilai'));
    }

    public function nilaiSeminar(){
        $nilai_seminar = NilaiSeminar::join('pesertas', 'nilai_seminars.peserta_id' , '=', 'pesertas.id')
        ->join('pendaftars', 'pesertas.pendaftar_id', '=', 'pendaftars.id')
        ->get(['nilai_seminars.*', 'pesertas.pendaftar_id', 'pendaftars.nama_lengkap', 'bagians.nama_bagian']);
        dd($nilai_seminar);
        return view('page.admin.nilai.index_nilaiseminar');
    }

    public function formEmailNilai($id){
        $peserta = Peserta::findOrFail($id);
        return view('page.admin.nilai.form-email-surat', compact('peserta'));
    }

    public function sendNilai(Request $request, $id){
        // $email = Pendaftar::join('users', 'pendaftars.user_id', '=', 'users.id')
        //                     ->get('pendaftars.*', 'users.email');
        $email = Peserta::join('pendaftars', 'pesertas.pendaftar_id', '=', 'pendaftars.id')
        ->join('users', 'pendaftars.user_id', '=', 'users.id')
        ->select('users.email')
        ->where('pesertas.id', '=', $id)
        ->get();
        // dd($email);
        $details = [
        'title' => 'E-mail Nilai Seminar Praktik Kerja Lapangan',
        'body' => 'Halo!',
        'nilai_seminar' => $request->file('nilai_seminar')
        ];
        Mail::to($email)->send(new NilaiMail($details));
        return redirect('admin/peserta')->with('success', "Email berhasil dikirim");
    }
}
