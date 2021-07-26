<div class="modal fade" id="form_tambah_surat_balasan" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="form-tambah-surat-balasanTitle">Form Tambah Surat Balasan</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
            <div class="col-lg-12">
                <div class="white_card card_height_100 mb_10">
                    <div class="white_card_body">
      <form action="{{route('admin.tambahsuratbalasan')}}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <select class="custom-select mb-3" id="pendaftar_id" name="pendaftar_id">
                                <option selected="">Pilih User</option>
                                @foreach ($pendaftar as $pendaftar)
                                <option value="{{$pendaftar->id}}">{{$pendaftar->nama_lengkap}}</option>
                                @endforeach
                            </select>
                            <div class="input-group mb-3">
                                <input type="text" class="form-control" aria-describedby="basic-addon2" name="no_surat_balasan" placeholder="Masukkan Surat Balasan">
                            </div>
                            <div class="input-group mb-3">
                                <input type="file" class="form-control" aria-describedby="basic-addon2" name="surat_balasan" required accept=".pdf">
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

{{-- FORM UBAH PENDAFTAR --}}
<div class="modal fade" id="form_ubah_surat_balasan" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="form-ubah-pendaftarTitle">Form Ubah Surat Balasan</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
            <div class="col-lg-12">
                <div class="white_card card_height_100 mb_10">
                    <div class="white_card_body">
                            <div class="input-group mb-3">
                                <input type="text" class="form-control" aria-describedby="basic-addon1" name="nama_lengkap" id="nama_lengkap" value="{{$suratbalasan->nama_lengkap}}">
                            </div>
                            <div class="input-group mb-3">
                                <input type="text" class="form-control" aria-describedby="basic-addon2" name="no_surat_balasan" value="{{$suratbalasan->no_surat_balasan}}">
                            </div>
                            <div class="input-group mb-3">
                                <input type="file" class="form-control" aria-describedby="basic-addon2" name="no_surat_balasan" value="{{$suratbalasan->surat_balasan}}">
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