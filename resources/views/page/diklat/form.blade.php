{{-- FORM UBAH PENDAFTAR --}}
<div class="modal fade" id="form_tambah_diklat" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="form-ubah-diklatTitle">Form Tambah Anggota</h5>
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
                            <input type="text" class="form-control" aria-describedby="basic-addon2" name="nip" id="nip" placeholder="Masukkan NIP">
                        </div>
                        <select class="custom-select mb-3" id="jenis_kelamin" name="jenis_kelamin">
                            <option selected="">Pilih Jenis Kelamin</option>
                            <option value="1">Laki-laki</option>
                            <option value="2">Perempuan</option>
                        </select>
                        <div class="input-group mb-3">
                            <input type="date" class="form-control" aria-describedby="basic-addon2" name="tanggal_lahir" id="tanggal_lahir">
                        </div>
                        <div class="input-group mb-3">
                            <input type="text" class="form-control" aria-describedby="basic-addon2" name="jabatan" id="jabatan" placeholder="Masukkan Jabatan">
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
<div class="modal fade" id="form_ubah_diklat" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="form-ubah-diklatTitle">Form Ubah Anggota</h5>
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
                                <input type="text" class="form-control" aria-describedby="basic-addon1" name="ubah_nama_lengkap" id="ubah_nama_lengkap" value="{{$diklat->nama_lengkap}}">
                                </div>
                            </div>
                            <div class="col">
                                <div class="input-group mb-3">
                                    <input type="text" class="form-control" aria-describedby="basic-addon2" name="ubah_nim" id="ubah_nim" value="{{$diklat->nip}}">
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                        <div class="col">
                            <select class="custom-select mb-3" id="ubah_jenis_kelamin" name="ubah_jenis_kelamin">
                                <option selected="{{$diklat->jenis_kelamin}}">Pilih Jenis Kelamin</option>
                                <option value="1">Laki-laki</option>
                                <option value="2">Perempuan</option>
                            </select>
                        </div>
                        <div class="col">
                            <div class="input-group mb-3">
                                <input type="date" class="form-control" aria-describedby="basic-addon2" name="ubah_tanggal_lahir" id="ubah_tanggal_lahir">
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