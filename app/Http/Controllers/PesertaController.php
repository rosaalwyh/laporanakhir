<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Peserta;
use Illuminate\Support\Facades\Auth;

class PesertaController extends Controller
{
    public function index()
    {
        $peserta = Peserta::join('users', 'pesertas.user_id' , '=', 'users.id')
        ->join('pendaftars', 'pesertas.pendaftar_id', '=', 'pendaftars.id' )
        ->join('bagians', 'pendaftars.bagian_id', '=', 'bagians.id')
        ->get(['pesertas.*','pendaftars.*']);

        // return response()->json($pendaftar);
        // dd($peserta);
        return view('page.admin.peserta.index', compact('peserta'));
    }

    public function getDataPeserta()
    {
        $user = Auth::user()->id;
        $peserta = Peserta::join('users', 'pesertas.user_id' , '=', 'users.id')
        ->join('pendaftars', 'pesertas.pendaftar_id', '=', 'pendaftars.id' )
        ->join('bagians', 'pendaftars.bagian_id', '=', 'bagians.id')
        ->where('pesertas.user_id', '=', $user)
        ->get(['pesertas.*','pendaftars.*']);

        // return response()->json($pendaftar);
        // dd($peserta);
        return view('page.peserta.index', compact('peserta'));
    }
}
