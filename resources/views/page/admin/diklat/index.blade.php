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
                                <h3 class="m-0">Data Unit Diklat</h3>
                            </div>
                        </div>
                    </div>
                    
                    <div class="white_card_body">
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
                                        <a href="#" data-toggle="modal" data-target="#form_tambah_diklat" class="btn_1">Tambah Anggota</a>
                                    </div>
                                    @endif
                                </div>
                            </div>
    
                            <div class="QA_table mb_30">
                                <!-- table-responsive -->
                                <table class="table table-responsive lms_table_active3" id="tabel-diklat">
                                    <thead>
                                        <tr>
                                          <th scope="col">Nama Lengkap</th>
                                          <th scope="col">NIP</th>
                                          <th scope="col">Tanggal Lahir</th>
                                          <th scope="col">Jenis Kelamin</th>
                                          <th scope="col">Jabatan</th>
                                          {{-- <th scope="col">Status</th> --}}
                                          @if(Auth::user()->role == 1 OR Auth::user()->role == 3 )
                                          <th scope="col">Action</th>
                                          @endif
                                        </tr>
                                    </thead>
                                    <tbody>                                       
                                        @foreach ($diklat as $diklat)
                                        <tr>
                                            <th scope="row"><a href="#" class="question_content"></a>{{$diklat->nama_lengkap}}</th>
                                            <td>{{$diklat->nip}}</td>
                                            <td>{{$diklat->tanggal_lahir}}</td>
                                            <td>{{$diklat->jenis_kelamin}}</td>
                                            <td>{{$diklat->jabatan}}</td>
                                            {{-- <td><a href="#" class="status_btn">Rekomendasi</a></td> --}}
                                            @if(Auth::user()->role == 1 OR Auth::user()->role == 3)
                                            <td>
                                                <div class="action_btns d-flex">
                                                    <a href="#" class="action_btn mr_10" data-toggle="modal" data-target="#form_ubah_diklat"> <i class="far fa-edit"></i> </a>
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


@include('page.admin.diklat.form')

@section('js')
<script>
    $(document).ready( function () {
        $('#tabel-diklat').DataTable();
    });

    $("#form-diklat").submit(function(e)){
        e.preventDefault();
        let nama_lengkap = $("nama_lengkap").val();
        let nip = $("nip").val();
        let jenis_kelamin = $("jenis_kelamin").val();
        let tanggal_lahir = $("tanggal_lahir").val();
        let jabatan = $("jabatan").val();
        let _token = $("input[name=_token]").val();

        $.ajax({
            url:"{{route('admin.creatediklat')}}",
            type:"POST",
            data:{
                nama_lengkap:nama_lengkap,
                nip:nip,
                jenis_kelamin:jenis_kelamin,
                tanggal_lahir:tanggal_lahir,
                jabatan:jabatan,
                _token:_token
            },
            success:function(response){
                console.log(response)
                if(response){
                    $("#tabel-diklat tbody").prepend('<tr><td>'+response.nama_lengkap+'</td><td>'+response.nip+'</td><td>'+response.jenis_kelamin+'</td><td>'+response.tanggal_lahir+'</td><td>'+response.jabatan+'</td></tr>')
                    $("#form-diklat")[0].reset();
                    $("#form-tambah-diklat").modal('hide');
                }
                console.log("gagal");
            }
        });
    });
</script>
@endsection
@endsection