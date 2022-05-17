{{-- Form tambah diklat --}}
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
                        <form action="{{route('admin.creatediklat')}}" method="POST">
                        @csrf
                        <div class="input-group mb-3">
                            <input type="text" class="form-control @error('nama_lengkap') is-invalid @enderror" aria-describedby="basic-addon1" name="nama_lengkap" id="nama_lengkap" placeholder="Masukkan Nama Lengkap">
                            @error('nama_lengkap')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="input-group mb-3">
                            <input type="text" class="form-control @error('nip') is-invalid @enderror" aria-describedby="basic-addon2" name="nip" id="nip" placeholder="Masukkan NIP">
                            @error('nip')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
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
                            <input type="text" class="form-control @error('jabatan') is-invalid @enderror" aria-describedby="basic-addon2" name="jabatan" id="jabatan" placeholder="Masukkan Jabatan">
                            @error('jabatan')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
          <button type="submit" class="btn btn-primary">Tambah</button>
        </form>
        </div>
      </div>
    </div>
</div>


{{-- Form Ubah Diklat --}}
<div class="modal fade" id="form_ubah_diklat" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="form_ubah_diklatTitle">Form Tambah Anggota</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
            <div class="col-lg-12">
                <div class="white_card card_height_100 mb_10">
                    <div class="white_card_body">
                        <form action="{{url('admin/editdiklat/'.$diklat->id)}}" method="POST">
                        @csrf
                        <div class="input-group mb-3">
                            <input type="text" class="form-control @error('nama_lengkap') is-invalid @enderror" aria-describedby="basic-addon1" name="nama_lengkap" id="ubah_nama_lengkap" value="{{$diklat->nama_lengkap}}">
                            @error('nama_lengkap')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="input-group mb-3">
                            <input type="text" class="form-control @error('nip') is-invalid @enderror" aria-describedby="basic-addon2" name="nip" id="ubah_nip" value="{{$diklat->nip}}">
                            @error('nip')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <select class="custom-select mb-3" id="ubah_jenis_kelamin" name="jenis_kelamin">
                            <option selected="">Pilih Jenis Kelamin</option>
                            <option value="1">Laki-laki</option>
                            <option value="2">Perempuan</option>
                        </select>
                        <div class="input-group mb-3">
                            <input type="date" class="form-control" aria-describedby="basic-addon2" name="tanggal_lahir" id="tanggal_lahir" value="{{$diklat->tanggal_lahir}}">
                        </div>
                        <div class="input-group mb-3">
                            <input type="text" class="form-control @error('jabatan') is-invalid @enderror" aria-describedby="basic-addon2" name="jabatan" id="ubah_jabatan" value="{{$diklat->jabatan}}">
                            @error('jabatan')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
          <button type="submit" class="btn btn-primary">Ubah</button>
        </form>
        </div>
      </div>
    </div>
    </div>