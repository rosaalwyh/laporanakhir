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
                                        {{-- @if(Auth::user()->role == 1)
                                        <div class="add_button ml-10">
                                            <a href="#" data-toggle="modal" data-target="#form_tambah_pendaftar" class="btn_1">Tambah Pendaftar</a>
                                        </div>
                                        @endif --}}
                                    </div>
                                </div>
                                <div class="result">
                                    @if (Session::get('success'))
                                        <div class="alert alert-success">
                                            {{Session::get('success')}}
                                        </div>
                                    @endif
            
                                    @if (Session::get('fail'))
                                    <div class="alert alert-danger">
                                        {{Session::get('fail')}}
                                    </div>
                                    @endif
                                </div>
        
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
                                              @if(Auth::user()->role == 3)
                                              <th scope="col">Rekomendasi</th>
                                              @endif
                                              @if(Auth::user()->role == 5)
                                              <th scope="col">Konfirmasi</th>
                                              @endif
                                              @if(Auth::user()->role == 1)
                                              <th scope="col">Surat Balasan</th>
                                              @endif
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
                                                <td><a class="status_btn" role="button" target="_blank" href="{{ url('/admin/formsurat/'.$pendaftar->id) }}">Surat Balasan</a></td>
                                                @endif
                                                @if(Auth::user()->role == 1)
                                                <td>
                                                    <div class="action_btns d-flex">
                                                        <a href="#" class="action_btn mr_10" data-toggle="modal" data-target="#form_ubah_pendaftar"> <i class="far fa-edit"></i> </a>
                                                        <a href="#" class="action_btn"> <i class="fas fa-trash"></i> </a>
                                                    </div>
                                                </td>
                                                @endif
                                                @if(Auth::user()->role == 3)
                                                <td>
                                                    <a onclick="return confirm('Apakah anda yakin ingin mengubah status menjadi terekomendasi?')" href="{{url('/diklat/pendaftar/rekomendasi/'.$pendaftar->id, [])}}" class="status_btn">Rekomendasi</a>
                                                    <a onclick="return confirm('Apakah anda yakin ingin mengubah status menjadi belum direkomendasikan?')" href="{{url('/diklat/pendaftar/penuh/'.$pendaftar->id, [])}}" class="btn btn-sm btn-warning" style="border-radius:40px; font-size:10px;">Penuh</a>
                                                </td>
                                                @endif
                                                @if(Auth::user()->role == 5)
                                                <td>
                                                    <a onclick="return confirm('Apakah anda yakin ingin mengubah status menjadi diterima?')" href="{{url('/pimpinan/pendaftar/terima/'.$pendaftar->id, [])}}" class="status_btn">Terima</a>
                                                    <a onclick="return confirm('Apakah anda yakin ingin mengubah status menjadi belum ditolak?')" href="{{url('/pimpinan/pendaftar/tolak/'.$pendaftar->id, [])}}" class="btn btn-sm btn-warning" style="border-radius:40px; font-size:10px;">Ditolak</a>
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
@include('page.admin.pendaftar.form')
@section('js')
<script>
$(document).ready( function () {
    $('#tabel-pendaftar').DataTable();
} );
</script>
@endsection
@endsection
