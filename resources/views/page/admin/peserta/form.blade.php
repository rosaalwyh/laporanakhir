
<div class="modal fade" id="form_ubah_peserta" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="form-ubah-pesertaTitle">Form Ubah peserta</h5>
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
                                <input type="text" class="form-control" aria-describedby="basic-addon1" name="ubah_nama_lengkap" id="ubah_nama_lengkap" value="{{$peserta->nama_lengkap}}">
                                </div>
                            </div>
                            <div class="col">
                                <div class="input-group mb-3">
                                    <input type="text" class="form-control" aria-describedby="basic-addon2" name="ubah_nim" id="ubah_nim" value="{{$peserta->nim}}">
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col">
                                <div class="input-group mb-3">
                                    <input type="text" class="form-control" aria-describedby="basic-addon2" name="ubah_asal_kampus" id="ubah_asal_kampus" value="{{$peserta->asal_kampus}}">
                                </div>
                            </div>
                            <div class="col">
                                <div class="input-group mb-3">
                                    <input type="text" class="form-control" aria-describedby="basic-addon2" name="ubah_jurusan" id="ubah_jurusan" value="{{$peserta->jurusan}}">
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                        <div class="col">
                            <select class="custom-select mb-3" id="ubah_jenis_kelamin" name="ubah_jenis_kelamin">
                                <option selected="">Pilih Jenis Kelamin</option>
                                <option value="Laki-laki">Laki-laki</option>
                                <option value="Perempuan">Perempuan</option>
                            </select>
                        </div>
                        <div class="col">
                            <div class="input-group mb-3">
                                <input type="date" class="form-control" aria-describedby="basic-addon2" name="ubah_tanggal_lahir" id="ubah_tanggal_lahir">
                            </div>
                        </div>
                        </div>
                        <select class="custom-select mb-3" id="ubah_bagian" name="ubah_bagian_dituju">
                            <option selected="">Pilih bagian yang dituju</option>
                            <option value="Zal Kebidanan">Zal Kebidanan</option>
                            <option value="Zal Wanita">Zal Wanita</option>
                        </select>
                        <div class="input-group mb-3">
                            <div class="custom-file">
                                <input type="file" class="custom-file-input" id="ubah_proposal" aria-describedby="proposal" name="ubah_proposal">
                                <label class="custom-file-label" for="proposal">Pilih file Proposal</label>
                            </div>
                        </div>
                        <div class="input-group mb-3">
                            <div class="custom-file">
                                <input type="file" class="custom-file-input" id="ubah_ktm" name="ubah_ktm">
                                <label class="custom-file-label" for="ubah_ktm">Pilih file Kartu Tanda Mahasiswa</label>
                            </div>
                        </div>
                        <div class="input-group mb-3">
                            <div class="custom-file">
                                <input type="file" class="custom-file-input" id="ubah_surat_balasan"  name="ubah_surat_balasan">
                                <label class="custom-file-label" for="ubah_surat_balasan">Pilih file Surat Balasan</label>
                            </div>
                        </div>
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <div class="input-group-text">
                                    <input type="checkbox" id="ubah_checkbox">
                                </div>
                            </div>
                            <input type="text" class="form-control" nama="ubah_status" id="ubah_status">
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
{{-- Form tambah pendaftar --}}
<div class="modal fade" id="form_tambah_peserta" tabindex="-1" role="dialog" aria-labelledby="form-tambah-pesertaTitle" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="form-tambah-pesertaTitle">Form Tambah peserta</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
            <div class="col-lg-12">
                <div class="white_card card_height_100 mb_10">
                    <div class="white_card_body">
                        <form action="POST" action="#">
                            @csrf
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
                            <div class="form-row">
                            <div class="col">
                                <div class="input-group mb-3">
                                <input type="text" class="form-control @error('nama_lengkap') is-invalid @enderror" aria-label="Nama Lengkap" aria-describedby="basic-addon1" name="nama_lengkap" placeholder="Nama Lengkap">
                                @error('nama_lengkap')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                </div>
                            </div>
                            <div class="col">
                                <div class="input-group mb-3">
                                    <input type="text" class="form-control @error('nim') is-invalid @enderror" aria-label="NIM" aria-describedby="basic-addon2" name="nim" placeholder="Nomor Induk Mahasiswa">
                                    @error('nim')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col">
                                <div class="input-group mb-3">
                                    <input type="text" class="form-control @error('asal_kampus') is-invalid @enderror" aria-label="asal_kampus" aria-describedby="basic-addon2" name="asal_kampus" placeholder="Asal Kampus">
                                    @error('asal_kampus')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col">
                                <div class="input-group mb-3">
                                    <input type="text" class="form-control @error('jurusan') is-invalid @enderror" aria-label="jurusan" aria-describedby="basic-addon2" name="jurusan" placeholder="Jurusan">
                                    @error('jurusan')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                        <div class="col">
                            <select class="custom-select mb-3" id="jenis-kelamin" name="jenis_kelamin">
                                <option selected="">Pilih Jenis Kelamin</option>
                                <option value="Laki-laki">Laki-laki</option>
                                <option value="Perempuan">Perempuan</option>
                            </select>
                        </div>
                        <div class="col">
                            <div class="input-group mb-3">
                                <input type="date" class="form-control" aria-label="tanggal_lahir" aria-describedby="basic-addon2" name="tanggal_lahir">
                            </div>
                        </div>
                        </div>
                        <select class="custom-select mb-3" id="bagian" name="bagian_dituju">
                            <option selected="">Pilih bagian yang dituju</option>
                            <option value="1">Zal Kebidanan</option>
                            <option value="2">Zal Wanita</option>
                        </select>
                        <div class="input-group mb-3">
                            <div class="custom-file">
                                <input type="file" class="custom-file-input" id="proposal" aria-describedby="proposal" name="proposal">
                                <label class="custom-file-label" for="proposal">Pilih file Proposal</label>
                            </div>
                        </div>
                        <div class="input-group mb-3">
                            <div class="custom-file">
                                <input type="file" class="custom-file-input" id="ktm" aria-describedby="ktm" name="ktm">
                                <label class="custom-file-label" for="ktm">Pilih file Kartu Tanda Mahasiswa</label>
                            </div>
                        </div>
                        <div class="input-group mb-3">
                            <div class="custom-file">
                                <input type="file" class="custom-file-input" id="surat_balasan" aria-describedby="surat_balasan" name="surat_balasan">
                                <label class="custom-file-label" for="surat_balasan">Pilih file Surat Balasan</label>
                            </div>
                        </div>
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <div class="input-group-text">
                                    <input type="checkbox" aria-label="Status">
                                </div>
                            </div>
                            <input type="text" class="form-control" aria-label="Status" nama="status">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
          <button type="submit" class="btn btn-primary">Kirim</button>
        </div>
        </form>
      </div>
    </div>
</div>
{{-- End form tambah peserta --}}

