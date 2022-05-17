<div class="modal fade" id="form_tambah_mentor" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="form-tambah-mentorTitle">Form Tambah Mentor</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
            <div class="col-lg-12">
                <div class="white_card card_height_100 mb_10">
                    <div class="white_card_body">
                        <form action="{{route('admin.tambahmentor')}}" method="POST">
                        @csrf
                        <div class="form-row">
                            <div class="col">
                                <div class="input-group mb-3">
                                <input type="text" class="form-control" aria-describedby="basic-addon1" name="nama_lengkap" id="nama_lengkap" placeholder="Masukkan Nama Lengkap">
                                </div>
                            </div>
                            <select class="custom-select mb-3" id="user_id" name="user_id">
                                <option selected="">Pilih Username</option>
                                @foreach ($user as $user)
                                <option value="{{$user->id}}">{{$user->username}}</option>
                                @endforeach
                            </select>
                            <div class="col">
                                <div class="input-group mb-3">
                                    <input type="text" class="form-control" aria-describedby="basic-addon2" name="nip" id="nip" placeholder="Masukkan NIP">
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                        <div class="col">
                            <select class="custom-select mb-3" id="jenis_kelamin" name="jenis_kelamin">
                                <option selected="">Pilih Jenis Kelamin</option>
                                <option value="1">Laki-laki</option>
                                <option value="2">Perempuan</option>
                            </select>
                        </div>
                        <div class="col">
                            <div class="input-group mb-3">
                                <input type="date" class="form-control" aria-describedby="basic-addon2" name="tanggal_lahir" id="tanggal_lahir" placeholder="Masukkan Tanggal Lahir">
                            </div>
                        </div>
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

{{-- FORM UBAH PENDAFTAR --}}
<div class="modal fade" id="form_ubah_mentor" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="form-ubah-pendaftarTitle">Form Ubah Mentor</h5>
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
                                <input type="text" class="form-control" aria-describedby="basic-addon1" name="ubah_nama_lengkap" id="ubah_nama_lengkap" value="{{$mentor->nama_lengkap}}">
                                </div>
                            </div>
                            <div class="col">
                                <div class="input-group mb-3">
                                    <input type="text" class="form-control" aria-describedby="basic-addon2" name="ubah_nim" id="ubah_nim" value="{{$mentor->nip}}">
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                        <div class="col">
                            <select class="custom-select mb-3" id="ubah_jenis_kelamin" name="ubah_jenis_kelamin">
                                <option selected="{{$mentor->jenis_kelamin}}">Pilih Jenis Kelamin</option>
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
                        <select class="custom-select mb-3" id="ubah_bagian" name="ubah_bagian_dituju">
                            <option selected="">Pilih bagian yang dituju</option>
                            <option value="Zal Kebidanan">Zal Kebidanan</option>
                            <option value="Zal Wanita">Zal Wanita</option>
                        </select>
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