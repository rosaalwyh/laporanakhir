<div class="modal fade" id="form_tambah_pimpinan" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="form-ubah-pimpinanTitle">Form Tambah Pimpinan</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
            <div class="col-lg-12">
                <div class="white_card card_height_100 mb_10">
                    <div class="white_card_body">
                        <form action="{{route('admin.tambahpimpinan')}}" method="POST">
                        @csrf
                        <div class="input-group mb-3">
                        <input type="text" class="form-control" aria-describedby="basic-addon1" name="nama_lengkap" id="nama_lengkap" placeholder="Masukkan Nama Lengkap">
                        </div>
                        <select class="custom-select mb-3" id="user_id" name="user_id">
                            <option selected="">Pilih Username</option>
                            @foreach ($user as $user)
                            <option value="{{$user->id}}">{{$user->username}}</option>
                            @endforeach
                        </select>
                        <div class="input-group mb-3">
                            <input type="text" class="form-control" aria-describedby="basic-addon2" name="nip" id="nip" placeholder="Masukkan NIP" >
                        </div>
                        <div class="input-group mb-3">
                            <input type="date" class="form-control" aria-describedby="basic-addon2" name="tanggal_lahir" id="tanggal_lahir">
                        </div>
                        <select class="custom-select mb-3" id="jenis_kelamin" name="jenis_kelamin">
                            <option selected="">Pilih Jenis Kelamin</option>
                            <option value="Laki-Laki">Laki-laki</option>
                            <option value="Perempuan">Perempuan</option>
                        </select>
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