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
        $peserta =Peserta::join('users', 'pesertas.user_id' , '=', 'users.id')
        ->join('pendaftars', 'pesertas.pendaftar_id', '=', 'pendaftars.id' )
        ->get(['pesertas.*', 'pendaftars.nama_lengkap']);

        $pesertaseminar = Peserta::join('users', 'pesertas.user_id' , '=', 'users.id')
        ->join('pendaftars', 'pesertas.pendaftar_id', '=', 'pendaftars.id' )
        ->get(['pesertas.*', 'pendaftars.nama_lengkap']);
        $nilai = Nilai::join('pesertas', 'nilais.peserta_id' , '=', 'pesertas.id')
        ->join('pendaftars', 'pesertas.pendaftar_id', '=', 'pendaftars.id')
        ->join('bagians', 'pendaftars.bagian_id', '=', 'bagians.id')
        ->get(['nilais.*', 'pesertas.pendaftar_id', 'pendaftars.nama_lengkap', 'bagians.nama_bagian']);
        // dd($nilai);
        return view('page.admin.nilai.index', compact('nilai', 'peserta' , 'pesertaseminar'));
    }

    public function nilaiSeminar(){
        $pesertaseminar =Peserta::join('users', 'pesertas.user_id' , '=', 'users.id')
        ->join('pendaftars', 'pesertas.pendaftar_id', '=', 'pendaftars.id' )
        ->get(['pesertas.*', 'pendaftars.nama_lengkap']);
        $nilai = NilaiSeminar::join('pesertas', 'nilai_seminars.peserta_id' , '=', 'pesertas.id')
        ->join('pendaftars', 'pesertas.pendaftar_id', '=', 'pendaftars.id')
        ->join('bagians', 'pendaftars.bagian_id', '=', 'bagians.id')
        ->get(['nilai_seminars.*', 'pesertas.pendaftar_id', 'pendaftars.nama_lengkap', 'bagians.nama_bagian']);
        // dd($nilai_seminar);
        return view('page.admin.nilai.index-nilaiseminar', compact('nilai', 'pesertaseminar'));
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
    public function tambahNilai(Request $request){
        // dd($request);
        $nilai = new Nilai();
        $nilai->partisipasi = $request->partisipasi;
        $nilai->capaian = $request->capaian;
        $nilai->etika = $request->etika;
        $nilai->askep = $request->askep;
        $nilai->praktik = $request->praktik;
        $nilai->peserta_id = $request->peserta_id;
        $save = $nilai->save();
        if($save){
            return redirect()->back()->with('success', 'Nilai sukses ditambah!');
        }else{
            return redirect()->back()->with('fail', 'Nilai gagal ditambah!');
        }
    }

    public function tambahNilaiSeminar(Request $request){
        // dd($request);
        $nilai_seminar = new NilaiSeminar();
        $nilai_seminar->pre_test = $request->pre_test;
        $nilai_seminar->post_test = $request->post_test;
        $nilai_seminar->total_nilai = $request->total_nilai;
        $nilai_seminar->peserta_id = $request->peserta_id;
        $save = $nilai_seminar->save();
        if($save){
            return redirect()->back()->with('success', 'Nilai Seminar sukses ditambah!');
        }else{
            return redirect()->back()->with('fail', 'Nilai Seminar gagal ditambah!');
        }
    }
}
