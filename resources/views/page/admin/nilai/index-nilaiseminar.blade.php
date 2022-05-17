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
                                <h3 class="m-0">Data Nilai</h3>
                            </div>
                        </div>
                    </div>
                    
                    <div class="white_box_tittle list_header">
                        <div class="box_right d-flex lms_block">
                            @if(Auth::user()->role == 1)
                            <div class="add_button ml-10">
                                <a href="#" data-toggle="modal" data-target="#form_tambah_nilai_seminar" class="btn_1">Tambah Nilai Seminar</a>
                            </div>
                            @endif
                        </div>
                    </div>
                    <div class="QA_table mb_30">
                        <!-- table-responsive -->
                        <table class="table lms_table_active3" id="tabel-nilai-seminar">
                            <thead>
                                <tr>
                                <th scope="col">Nama Lengkap</th>
                                <th scope="col">Pre-test</th>
                                <th scope="col">Post-test</th>
                                <th scope="col">Total</th>
                                @if(Auth::user()->role == 1 OR Auth::user()->role == 4)
                                <th scope="col">Action</th>
                                @endif
                                </tr>
                            </thead>
                            <tbody>                            
                                @foreach ($nilai as $nilai)
                                <tr>
                                    <td>{{$nilai->nama_lengkap}}</td>
                                    <td>{{$nilai->pre_test}}</td>
                                    <td>{{$nilai->post_test}}</td>
                                    <td>{{$nilai->total_nilai}}</td>
                                    {{-- <td><a href="#" class="status_btn">Rekomendasi</a></td> --}}
                                    @if(Auth::user()->role == 1 OR Auth::user()->role == 4)
                                    <td>
                                        <div class="action_btns d-flex">
                                            <a href="#" class="action_btn mr_10" data-toggle="modal" data-target="#form_ubah_nilai_seminar"> <i class="far fa-edit"></i> </a>
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

<div class="modal fade" id="form_tambah_nilai_seminar" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="form_tambah_nilai_seminarTitle">Form Tambah Nilai</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
            <div class="col-lg-12">
                <div class="white_card card_height_100 mb_10">
                    <div class="white_card_body">
                      <form action="{{route('admin.tambahnilaiseminar')}}" method="POST">
                      @csrf
                      <select class="custom-select mb-3" id="peserta_id" name="peserta_id">
                        <option>Pilih Peserta</option>
                        @foreach ($pesertaseminar as $pesertaseminar)
                        <option value="{{$pesertaseminar->id}}">{{$pesertaseminar->nama_lengkap}}</option>
                        @endforeach
                      </select>
                      <div class="input-group mb-3">
                        <input type="text" class="form-control" aria-describedby="basic-addon1" name="pre_test" id="pre_test" placeholder="Masukkan Nilai Pre-test" required>
                      </div>
                      <div class="input-group mb-3">
                        <input type="text" class="form-control" aria-describedby="basic-addon1" name="post_test" id="post_test" placeholder="Masukkan Nilai Post-test" required>
                      </div>
                      <div class="input-group mb-3">
                        <input type="text" class="form-control" aria-describedby="basic-addon1" name="total_nilai" id="total_nilai" placeholder="Masukkan Total Nilai" required>
                      </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
          <button type="submit" class="btn btn-primary">Tambah</button>
        </div>
      </form>
      </div>
    </div>
  </div>
@section('js')
    <script>
        $(document).ready( function () {
            $('#tabel-nilai-seminar').DataTable();
        } );
    </script>
@endsection 
@endsection