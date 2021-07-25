<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Nilai;
use App\Models\NilaiSeminar;

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
}
