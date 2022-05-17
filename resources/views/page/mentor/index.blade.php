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
                                <h3 class="m-0">Data Mentor</h3>
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
                                        <a href="#" data-toggle="modal" data-target="#form_tambah_mentor" class="btn_1">Tambah Mentor</a>
                                    </div>
                                    @endif
                                </div>
                            </div>
    
                            <div class="QA_table mb_30">
                                <!-- table-responsive -->
                                <table class="table table-responsive lms_table_active3" id="tabel-mentor">
                                    <thead>
                                        <tr>
                                          <th scope="col">Nama Lengkap</th>
                                          <th scope="col">NIP</th>
                                          <th scope="col">Tanggal Lahir</th>
                                          <th scope="col">Jenis Kelamin</th>
                                          <th scope="col">Bagian</th>
                                          {{-- <th scope="col">Status</th> --}}
                                          @if(Auth::user()->role == 1 OR Auth::user()->role == 4 )
                                          <th scope="col">Action</th>
                                          @endif
                                        </tr>
                                    </thead>
                                    <tbody>                                       
                                        @foreach ($mentor as $mentor)
                                        <tr>
                                            <th scope="row"><a href="#" class="question_content"></a>{{$mentor->nama_lengkap}}</th>
                                            <td>{{$mentor->nip}}</td>
                                            <td>{{$mentor->tanggal_lahir}}</td>
                                            <td>{{$mentor->jenis_kelamin}}</td>
                                            <td></td>
                                            {{-- <td><a href="#" class="status_btn">Rekomendasi</a></td> --}}
                                            @if(Auth::user()->role == 1 OR Auth::user()->role == 4)
                                            <td>
                                                <div class="action_btns d-flex">
                                                    <a href="#" class="action_btn mr_10" data-toggle="modal" data-target="#form_ubah_mentor"> <i class="far fa-edit"></i> </a>
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


@include('page.mentor.form')

@section('js')
<script>
    $(document).ready( function () {
    $('#tabel-mentor').DataTable();
    } );
</script>
@endsection
@endsection