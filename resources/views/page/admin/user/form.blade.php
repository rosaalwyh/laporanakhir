{{-- Form tambah diklat --}}
<div class="modal fade" id="form_tambah_user" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="form-ubah-userTitle">Form Tambah Anggota</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
            <div class="col-lg-12">
                <div class="white_card card_height_100 mb_10">
                    <div class="white_card_body">
                        <form action="{{route('admin.add_user')}}" method="POST">
                        @csrf
                        <div class="input-group mb-3">
                            <input type="text" class="form-control @error('username') is-invalid @enderror" aria-describedby="basic-addon1" name="username" id="username" placeholder="Masukkan Nama Lengkap">
                            @error('username')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="input-group mb-3">
                            <input type="text" class="form-control @error('email') is-invalid @enderror" aria-describedby="basic-addon2" name="email" id="email" placeholder="Masukkan E-mail">
                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <select class="custom-select mb-3" id="role" name="role">
                            <option selected="">Pilih Role</option>
                            <option value="1">Admin</option>
                            <option value="2">User</option>
                            <option value="3">Bagian Diklat</option>
                            <option value="4">Mentor</option>
                            <option value="5">Pimpinan</option>
                            <option value="6">Peserta</option>
                            <option value="7">Pendaftar</option>
                        </select>
                        <div class="input-group mb-3">
                            <input type="password" class="form-control @error('password') is-invalid @enderror" aria-describedby="basic-addon2" name="password" id="password" placeholder="Masukkan Password">
                            @error('password')
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

{{-- Form tambah diklat --}}
<div class="modal fade" id="form_ubah_user" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-ubah-title" id="form-ubah-userTitle"></h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
            <div class="col-lg-12">
                <div class="white_card card_height_100 mb_10">
                    <div class="white_card_body">
                        <form action="#" id="editFormUser">
                        @csrf
                        {{ method_field('POST') }}
                        <input type="text" name="id" class="form-control" value="{{ $user->id }}" id="user_id">
                        <div class="input-group mb-3">
                            <input type="text" class="form-control @error('username') is-invalid @enderror" aria-describedby="basic-addon1" name="username" id="ubah_username" value="{{$user->username}}">
                            @error('username')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="input-group mb-3">
                            <input type="text" class="form-control @error('email') is-invalid @enderror" aria-describedby="basic-addon2" name="email" id="ubah_email" value="{{$user->email}}">
                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <select class="custom-select mb-3" id="ubah_role" name="role">
                            <option selected="">Pilih Role</option>
                            <option value="1">Admin</option>
                            <option value="2">User</option>
                            <option value="3">Bagian Diklat</option>
                            <option value="4">Mentor</option>
                            <option value="5">Pimpinan</option>
                            <option value="6">Peserta</option>
                            <option value="7">Pendaftar</option>
                        </select>
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