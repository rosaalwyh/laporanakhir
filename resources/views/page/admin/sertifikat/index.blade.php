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
                                <h3 class="m-0">Data Sertifikat</h3>
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
                                    @if(Auth::user()->role == 1 OR Auth::user()->role == 3)
                                    <div class="add_button ml-10">
                                        <a href="#" data-toggle="modal" data-target="#form_tambah_sertifikat" class="btn_1">Tambah Sertifikat</a>
                                    </div>
                                    @endif
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
                                <table class="table table-responsive lms_table_active3" id="tabel-sertifikat">
                                    <thead>
                                        <tr>
                                          <th scope="col">Nama Lengkap</th>
                                          <th scope="col">Sertifikat</th>
                                          @if(Auth::user()->role == 1 OR Auth::user()->role == 3 )
                                          <th scope="col">Action</th>
                                          @endif
                                        </tr>
                                    </thead>
                                    <tbody>                                       
                                        @foreach ($sertifikat as $sertifikat)
                                        <tr>
                                            <th scope="row"><a href="#" class="question_content"></a>{{$sertifikat->nama_lengkap}}</th>
                                            <td><a class="btn btn-primary" role="button" target="_blank" href="/storage/sertifikat/{{$sertifikat->sertifikat}}"><i class="fas fa-download"></i></a></td>
                                            {{-- <td><a href="#" class="status_btn">Rekomendasi</a></td> --}}
                                            @if(Auth::user()->role == 1 OR Auth::user()->role == 3)
                                            <td>
                                                <div class="action_btns d-flex">
                                                    <a href="#" class="action_btn mr_10" data-toggle="modal" data-target="#form_ubah_sertifikat"> <i class="far fa-edit"></i> </a>
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


@include('page.admin.sertifikat.form')

@section('js')
<script>
    $(document).ready( function () {
    $('#tabel-sertifikat').DataTable();
    } );
</script>
@endsection
@endsection