<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Peserta;
use App\Models\Mentor;
use App\Models\User;
use App\Models\Bagian;
use App\Models\Nilai;
use App\Models\NilaiSeminar;
use App\Models\Pendaftar;
use App\Models\Sertifikat;
use Illuminate\Support\Facades\Auth;

class PesertaController extends Controller
{
    public function index()
    {
        $mentor = Mentor::all();
        $user = User::all();
        $bagian = Bagian::all();
        $pendaftar = Pendaftar::all();
        $peserta = Peserta::join('users', 'pesertas.user_id' , '=', 'users.id')
        ->join('pendaftars', 'pesertas.pendaftar_id', '=', 'pendaftars.id' )
        ->join('bagians', 'pendaftars.bagian_id', '=', 'bagians.id')
        ->join('mentors', 'pesertas.mentor_id', '=', 'mentors.id')
        ->get(['pesertas.id as peserta_id', 'tanggal_mulai', 'tanggal_selesai','pendaftars.*', 'bagians.nama_bagian', 'mentors.nama_lengkap as mentor']);
        return view('page.admin.peserta.index', compact('peserta', 'mentor', 'user', 'bagian', 'pendaftar'));
    }

    public function getDataPeserta()
    {
        $mentor = Mentor::all();
        $bagian = Bagian::all();
        $user = Auth::user()->id;
        $peserta = Peserta::join('users', 'pesertas.user_id' , '=', 'users.id')
        ->join('pendaftars', 'pesertas.pendaftar_id', '=', 'pendaftars.id' )
        ->join('bagians', 'pendaftars.bagian_id', '=', 'bagians.id')
        ->join('mentors', 'pesertas.mentor_id', '=', 'mentors.id')
        ->where('pesertas.user_id', '=', $user)
        ->get(['pesertas.id as peserta_id', 'tanggal_mulai', 'tanggal_selesai','pendaftars.*', 'bagians.nama_bagian', 'mentors.nama_lengkap as mentor']);

        // return response()->json($pendaftar);
        // dd($peserta);
        return view('page.peserta.index', compact('peserta'));
    }

    public function tambahPeserta(Request $request)
    {   
        $peserta = new Peserta();
        $peserta->user_id = $request->user_id;
        $peserta->pendaftar_id = $request->pendaftar_id;
        $peserta->mentor_id = $request->mentor_id;
        $peserta->bagian_id = $request->bagian_id;
        $peserta->tanggal_mulai = $request->tanggal_mulai;
        $peserta->tanggal_selesai = $request->tanggal_selesai;
        $peserta->status = $request->status;
        $save = $peserta->save();
        if($save){
            return redirect()->back()->with('success', 'Peserta sukses ditambah!');
        }else{
            return redirect()->back()->with('fail', 'Peserta gagal ditambah!');
        }
    }
    public function surat(){
        return view('page.pendaftar.surat-balasan');
    }

    public function getNilai(){
        $user = Auth::user()->id;
        $nilai = Nilai::join('pesertas', 'nilais.peserta_id' , '=', 'pesertas.id')
        ->join('pendaftars', 'pesertas.pendaftar_id', '=', 'pendaftars.id')
        ->join('bagians', 'pendaftars.bagian_id', '=', 'bagians.id')
        ->join('nilai_seminars', 'nilai_seminars.peserta_id', '=', 'pesertas.id')
        ->where('pesertas.user_id', '=', $user)
        ->get(['nilais.*', 'pesertas.pendaftar_id', 'pendaftars.nama_lengkap', 'bagians.nama_bagian', 'nilai_seminars.*']);
        return view('page.peserta.nilai.index', compact('nilai'));
    }

    public function getSertifikat(){
        $user = Auth::user()->id;
        $sertifikat = Sertifikat::join('pesertas', 'sertifikats.peserta_id' , '=', 'pesertas.id')
        ->join('pendaftars', 'pesertas.pendaftar_id', '=', 'pendaftars.id')
        ->where('pesertas.user_id', '=', $user)
        ->get(['sertifikats.*', 'pesertas.pendaftar_id', 'pendaftars.nama_lengkap']);
        return view('page.peserta.sertifikat.index', compact('sertifikat'));
    }
    
}

