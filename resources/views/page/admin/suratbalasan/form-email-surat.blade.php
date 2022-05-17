@extends('layouts.admin.app')
@section('content')
<div class="main_content_iner ">
  <div class="container-fluid p-0 sm_padding_15px">
      <div class="row justify-content-center">
          <div class="col-lg-8">
              <div class="white_card card_height_100 mb_30">
                  <div class="white_card_header">
                      <div class="box_header m-0">
                          <div class="main-title">
                              <h3 class="m-0">Send Surat Balasan Pendaftar</h3>
                          </div>
                      </div>
                  </div>
                  <div class="white_card_body">
                      <form action="/admin/kirim-email/{{$pendaftar->id}}" method="POST" enctype="multipart/form-data">
                          <input type="hidden" value="{{$pendaftar->id}}" name="pendaftar_id" id="pendaftar_id">
                          @csrf
                        <div class="input-group mb-3">
                            <input type="text" class="form-control" aria-describedby="basic-addon2" name="no_surat_balasan" placeholder="Masukkan No Surat Balasan">
                        </div>
                        <div class="input-group mb-3">
                            <div class="custom-file">
                                <input type="file" accept=".pdf" class="custom-file-input" id="surat_balasan" aria-describedby="surat_balasan" name="surat_balasan" >
                                <label class="custom-file-label" for="surat_balasan">Pilih file surat balasan</label>
                            </div>
                        </div>
                          <button type="submit" class="btn btn-primary">Submit</button>
                      </form>
                  </div>
              </div>
          </div>
      </div>
  </div>
</div>
@endsection