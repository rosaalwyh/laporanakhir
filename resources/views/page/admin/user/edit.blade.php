@extends('layouts.admin.app')
@section('content')
<div class="container mt-4" style="margin: auto;">
<div class="card" style="margin: auto;">
    <div class="col-lg-12">
        <div class="white_card card_height_100 mb_10">
            <div class="white_card_body mt-4">
                <form action="/admin/update_user/{{$user->id}}" method="POST" id="editFormUser" style="margin: auto;">
                @csrf
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
                    <option>Pilih Role</option>
                    <option value="1" @if($user->role == 1) selected @endif>Admin</option>
                    <option value="2" @if($user->role == 2) selected @endif>User</option>
                    <option value="3" @if($user->role == 3) selected @endif>Bagian Diklat</option>
                    <option value="4" @if($user->role == 4) selected @endif>Mentor</option>
                    <option value="5" @if($user->role == 5) selected @endif>Pimpinan</option>
                    <option value="6" @if($user->role == 6) selected @endif>Peserta</option>
                    <option value="7" @if($user->role == 7) selected @endif>Pendaftar</option>
                </select>
                <div class="footer center" style="margin: auto;">
                    <a href="{{route('admin.user')}}" class="btn btn-secondary" data-dismiss="modal">Batal</a>
                    <button type="submit" class="btn btn-primary">Ubah</button>
                </div>
            </form>
            </div>
        </div>
    </div>
</div>
</div>
@endsection