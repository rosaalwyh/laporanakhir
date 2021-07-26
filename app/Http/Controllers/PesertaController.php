<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Peserta;
use App\Models\Mentor;
use App\Models\User;
use App\Models\Bagian;
use App\Models\Pendaftar;
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
}
