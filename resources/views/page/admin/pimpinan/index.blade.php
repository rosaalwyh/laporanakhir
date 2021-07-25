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
                                <h3 class="m-0">Data Pimpinan</h3>
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
                                        <a href="#" data-toggle="modal" data-target="#form_tambah_pimpinan" class="btn_1">Tambah Pimpinan</a>
                                    </div>
                                    @endif
                                </div>
                            </div>
    
                            <div class="QA_table mb_30">
                                <!-- table-responsive -->
                                <table class="table table-responsive lms_table_active3" id="tabel-pendaftar">
                                    <thead>
                                        <tr>
                                          <th scope="col">Nama Lengkap</th>
                                          <th scope="col">NIP</th>
                                          <th scope="col">Tanggal Lahir</th>
                                          <th scope="col">Jenis Kelamin</th>
                                          {{-- <th scope="col">Status</th> --}}
                                          @if(Auth::user()->role == 1 OR Auth::user()->role == 5)
                                          <th scope="col">Action</th>
                                          @endif
                                        </tr>
                                    </thead>
                                    <tbody>                                       
                                        @foreach ($pimpinan as $pimpinan)
                                        <tr>
                                            <th scope="row"><a href="#" class="question_content">{{$pimpinan->nama_lengkap}}</a></th>
                                            <td>{{$pimpinan->nip}}</td>
                                            <td>{{$pimpinan->tanggal_lahir}}</td>
                                            <td>{{$pimpinan->jenis_kelamin}}</td>
                                            {{-- <td><a href="#" class="status_btn">Rekomendasi</a></td> --}}
                                            @if(Auth::user()->role == 1 OR Auth::user()->role == 5)
                                            <td>
                                                <div class="action_btns d-flex">
                                                    <a href="#" class="action_btn mr_10" data-toggle="modal" data-target="#form_ubah_pimpinan"> <i class="far fa-edit"></i> </a>
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
@include('page.admin.pimpinan.form')
{{-- FORM UBAH PENDAFTAR --}}
<div class="modal fade" id="form_ubah_pimpinan" tabindex="-1" role="dialog" aria-hidden="true">
<div class="modal-dialog" role="document">
  <div class="modal-content">
    <div class="modal-header">
      <h5 class="modal-title" id="form-ubah-pimpinanTitle">Form Ubah Pimpinan</h5>
      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true">&times;</span>
      </button>
    </div>
    <div class="modal-body">
        <div class="col-lg-12">
            <div class="white_card card_height_100 mb_10">
                <div class="white_card_body">
                    <div class="form-row">
                        <div class="col">
                            <div class="input-group mb-3">
                            <input type="text" class="form-control" aria-describedby="basic-addon1" name="ubah_nama_lengkap" id="ubah_nama_lengkap" value="{{$pimpinan->nama_lengkap}}">
                            </div>
                        </div>
                        <div class="col">
                            <div class="input-group mb-3">
                                <input type="text" class="form-control" aria-describedby="basic-addon2" name="ubah_nip" id="ubah_nip" value="{{$pimpinan->nip}}">
                            </div>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="col">
                            <div class="input-group mb-3">
                                <input type="text" class="form-control" aria-describedby="basic-addon2" name="ubah_tanggal_lahir" id="ubah_tanggal_lahir" value="{{$pimpinan->tanggal_lahir}}">
                            </div>
                        </div>
                        <div class="col">
                            <div class="input-group mb-3">
                                <input type="text" class="form-control" aria-describedby="basic-addon2" name="ubah_jenis_kelamin" id="ubah_jenis_kelamin" value="{{$pimpinan->jenis_kelamin}}">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="modal-footer">
      <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
      <button type="submit" class="btn btn-primary">Ubah</button>
    </div>
  </div>
</div>
</div>
@section('js')
    <script>
        $(document).ready( function () {
        $('#tabel-peserta').DataTable();
        } );
    </script>
@endsection
@endsection