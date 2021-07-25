@extends('layouts.admin.app')
@section('content')
    
 <!--/ menu  -->
    <div class="main_content_iner ">
        <div class="container-fluid p-0">
            <div class="row justify-content-center">
                <div class="col-lg-12">
                    <div class="white_card card_height_100 mb_30">
                        <div class="white_card_header">
                            <div class="box_header m-0">
                                <div class="main-title">
                                    <h3 class="m-0">Data Pendaftar Praktik Kerja Lapangan</h3>
                                </div>
                            </div>
                        </div>
                        
                        <div class="white_card_body">
                            <div class="QA_section">
                                <div class="QA_table mb_30">
                                    <!-- table-responsive -->
                                    <table class="table table-responsive lms_table_active3" id="tabel-pendaftar">
                                        <thead>
                                            <tr>
                                              <th scope="col">Nama Lengkap</th>
                                              <th scope="col">NIM</th>
                                              <th scope="col">Username</th>
                                              <th scope="col">Tanggal Lahir</th>
                                              <th scope="col">Jenis Kelamin</th>
                                              <th scope="col">Asal Kampus</th>
                                              <th scope="col">Bagian Dituju</th>
                                              <th scope="col">Status</th>
                                              <th scope="col">Jurusan</th>
                                              <th scope="col">Proposal</th>
                                              <th scope="col">KTM</th>
                                              <th scope="col">Surat Pengantar</th>
                                              @if(Auth::user()->role == 1)
                                              <th scope="col">Action</th>
                                              @endif
                                            </tr>
                                        </thead>
                                        <tbody>                                       
                                            @foreach ($pendaftar as $pendaftar)
                                            <tr>
                                                <th scope="row"><a href="#" class="question_content"></a>{{$pendaftar->nama_lengkap}}</th>
                                                <td>{{$pendaftar->nim}}</td>
                                                <td>{{$pendaftar->username}}</td>
                                                <td>{{$pendaftar->tanggal_lahir}}</td>
                                                <td>{{$pendaftar->jenis_kelamin}}</td>
                                                <td>{{$pendaftar->asal_kampus}}</td>
                                                <td>{{$pendaftar->nama_bagian }}</td>
                                                <td>{{$pendaftar->status }}</td>
                                                <td>{{$pendaftar->jurusan}}</td>
                                                <td><a class="btn btn-primary" role="button" target="_blank" href="/storage/pendaftar/proposal/{{$pendaftar->proposal}}"><i class="fas fa-download"></i></a></td>
                                                <td><a class="btn btn-primary" role="button" target="_blank" href="/storage/pendaftar/ktm/{{$pendaftar->ktm}}"><i class="fas fa-download"></i></a></td>
                                                <td><a class="btn btn-primary" role="button" target="_blank" href="/storage/pendaftar/surat_pengantar/{{$pendaftar->surat_pengantar}}"><i class="fas fa-download"></i></a></td>
                                                @if(Auth::user()->role == 1)
                                                <td><a class="status_btn" role="button" target="_blank" href="#">Surat</a></td>
                                                @endif
                                                @if(Auth::user()->role == 1)
                                                <td>
                                                    <div class="action_btns d-flex">
                                                        <a href="#" class="action_btn mr_10" data-toggle="modal" data-target="#form_ubah_pendaftar"> <i class="far fa-edit"></i> </a>
                                                        <a href="#" class="action_btn"> <i class="fas fa-trash"></i> </a>
                                                    </div>
                                                </td>
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
@section('js')
<script>
$(document).ready( function () {
    $('#tabel-pendaftar').DataTable();
} );
</script>
@endsection
@endsection
