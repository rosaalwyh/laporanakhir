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
}
