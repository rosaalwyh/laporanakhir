@extends('layouts.admin.app')
@section('content')
<div class="main_content_iner ">
    <div class="container-fluid p-0">
        <div class="row justify-content-center">
            <div class="col-lg-12">
                <div class="white_card card_height_100 mb_30">
                    <div class="white_card_header">
                        <div class="box_header m-0">
                            <div class="main-title">
                                <h3 class="m-0">Data Peserta Praktik Kerja Lapangan</h3>
                            </div>
                        </div>
                    </div>
                    
                    <div class="white_card_body">
                        <div class="QA_section">
                            <div class="white_box_tittle list_header">
                                <div class="box_right d-flex lms_block">
                                    {{-- <div class="serach_field_2"> --}}
                                        {{-- <div class="search_inner">
                                            <form Active="#">
                                                <div class="search_field">
                                                    <input type="text" placeholder="Search content here...">
                                                </div>
                                                <button type="submit"> <i class="ti-search"></i> </button>
                                            </form>
                                        </div> --}}
                                    {{-- </div> --}}
                                    @if(Auth::user()->role == 1)
                                    <div class="add_button ml-10">
                                        <a href="#" data-toggle="modal" data-target="#form_tambah_peserta" class="btn_1">Tambah Peserta</a>
                                    </div>
                                    @endif
                                </div>
                            </div>
    
                            <div class="QA_table mb_30">
                                <!-- table-responsive -->
                                <table class="table table-responsive lms_table_active3" id="tabel-peserta">
                                    <thead>
                                        <tr>
                                          <th scope="col">Nama Lengkap</th>
                                          <th scope="col">NIM</th>
                                          <th scope="col">Bagian Dituju</th>
                                          <th scope="col">Mentor</th>
                                          <th scope="col">Tanggal Mulai</th>
                                          <th scope="col">Tanggal Selesai</th>
                                          <th scope="col">Tanggal Lahir</th>
                                          <th scope="col">Jenis Kelamin</th>
                                          <th scope="col">Asal Kampus</th>
                                          <th scope="col">Jurusan</th>
                                          <th scope="col">Proposal</th>
                                          <th scope="col">KTM</th>
                                          <th scope="col">Surat Pengantar</th>
                                          <th scope="col">Tanggal Mulai</th>
                                          <th scope="col">Tanggal Selesai</th>
                                          {{-- <th scope="col">Status</th> --}}
                                          @if(Auth::user()->role == 1)
                                          <th scope="col">Action</th>
                                          @endif
                                          @if(Auth::user()->role == 1)
                                          <th scope="col">Sertifikat</th>
                                          @endif
                                          @if(Auth::user()->role == 1)
                                          <th scope="col">Nilai</th>
                                          @endif
                                        </tr>
                                    </thead>
                                    <tbody>                                       
                                        @foreach ($peserta as $peserta)
                                        <tr>
                                            <th scope="row"><a href="#" class="question_content"></a>{{$peserta->nama_lengkap}}</th>
                                            <td>{{$peserta->nim}}</td>
                                            <td>{{$peserta->nama_bagian}}</td>
                                            <td>{{$peserta->mentor}}</td>
                                            <td>{{$peserta->tanggal_mulai}}</td>
                                            <td>{{$peserta->tanggal_selesai}}</td>
                                            <td>{{$peserta->tanggal_lahir}}</td>
                                            <td>{{$peserta->jenis_kelamin}}</td>
                                            <td>{{$peserta->asal_kampus}}</td>
                                            <td>{{$peserta->jurusan}}</td>
                                            <td><a class="btn btn-primary" role="button" target="_blank" href="/storage/pendaftar/proposal/{{$peserta->proposal}}"><i class="fas fa-download"></i></a></td>
                                                <td><a class="btn btn-primary" role="button" target="_blank" href="/storage/pendaftar/ktm/{{$peserta->ktm}}"><i class="fas fa-download"></i></a></td>
                                                <td><a class="btn btn-primary" role="button" target="_blank" href="/storage/pendaftar/surat_pengantar/{{$peserta->surat_pengantar}}"><i class="fas fa-download"></i></a></td>
                                            <td>{{$peserta->tanggal_mulai}}</td>
                                            <td>{{$peserta->tanggal_selesai}}</td>
                                            @if(Auth::user()->role == 1)
                                            <td>
                                                <div class="action_btns d-flex">
                                                    <a href="#" class="action_btn mr_10" data-toggle="modal" data-target="#form_ubah_peserta"> <i class="far fa-edit"></i> </a>
                                                    <a href="#" class="action_btn"> <i class="fas fa-trash"></i> </a>
                                                </div>
                                            </td>
                                            @endif
                                            @if(Auth::user()->role == 1)
                                            <td><a href="#" class="status_btn">Sertifikat</a></td>
                                            @endif
                                            @if(Auth::user()->role == 1)
                                            <td><a href="#" class="status_btn">Nilai</a></td>
                                            @endif
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@include('page.peserta.form')
{{-- FORM UBAH peserta --}}

@section('js')
<script>
$(document).ready( function () {
$('#tabel-peserta').DataTable();
} );
</script>
@endsection
@endsection