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
                            <div class="input-group mb-3">
                            <input type="text" class="form-control" aria-describedby="basic-addon1" name="nama_lengkap" id="nama_lengkap" placeholder="Masukkan Nama Lengkap">
                            </div>
                            <div class="input-group mb-3">
                                <input type="file" class="form-control" aria-describedby="basic-addon2" name="sertifikat">
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
                            <div class="input-group mb-3">
                                <input type="text" class="form-control" aria-describedby="basic-addon1" name="nama_lengkap" id="nama_lengkap" value="{{$sertifikat->nama_lengkap}}">
                            </div>
                            <div class="input-group mb-3">
                                <input type="file" class="form-control" aria-describedby="basic-addon2" name="sertifikat" value="{{$sertifikat->sertifikat}}">
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
