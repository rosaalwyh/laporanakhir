<div class="modal fade" id="form_tambah_sertifikat" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="form-tambah-sertifikatTitle">Form Tambah Sertifikat</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
            <div class="col-lg-12">
                <div class="white_card card_height_100 mb_10">
                    <div class="white_card_body">
                      <form action="{{route('admin.tambahsertifikat')}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <select class="custom-select mb-3" id="user_id" name="peserta_id">
                          <option selected="">Pilih User</option>
                          @foreach ($peserta as $peserta)
                          <option value="{{$peserta->id}}">{{$peserta->nama_lengkap}}</option>
                          @endforeach
                      </select>
                      <div class="input-group mb-3">
                        <input type="text" class="form-control" aria-describedby="basic-addon1" name="no_sertifikat" id="no_sertifikat" placeholder="Masukkan nomor sertifikat">
                      </div>
                      <div class="input-group mb-3">
                        <div class="custom-file">
                            <input type="file" accept=".pdf" class="custom-file-input" id="sertifikat" aria-describedby="sertifikat" name="sertifikat">
                            <label class="custom-file-label" for="sertifikat" >Pilih file Sertifikat</label>
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
        </form>
      </div>
    </div>
</div>

{{-- FORM UBAH PENDAFTAR --}}
<div class="modal fade" id="form_ubah_sertifikat" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="form-ubah-pendaftarTitle">Form Ubah Sertifikat</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
            <div class="col-lg-12">
                <div class="white_card card_height_100 mb_10">
                    <div class="white_card_body">
                      <form action="{{route('admin.tambahsertifikat')}}" method="POST">
                      @csrf
                      <div class="input-group mb-3">
                          <input type="text" class="form-control" aria-describedby="basic-addon1" name="nama_lengkap" id="nama_lengkap" value="{{$sertifikat->nama_lengkap}}">
                      </div>
                      <div class="input-group mb-3">
                        <div class="custom-file">
                            <input type="file" accept=".pdf" class="custom-file-input" id="sertifikat" aria-describedby="sertifikat" name="sertifikat">
                            <label class="custom-file-label" for="sertifikat" >Pilih file Sertifikat</label>
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
      </form>
      </div>
    </div>
</div>
