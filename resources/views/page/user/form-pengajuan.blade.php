@if(empty($pendaftar))
<div class="container mt-3" style="margin:auto;">
    <div class="container-body">
        <div class="col-lg-10">
            <div class="white_card card_height_100 mb_10">
                <div class="white_card_body">
                    <form action="POST" class="mt-5" action="{{route('user.tambahpendaftar')}}">
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
                        </div>
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
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                        <button type="submit" class="btn btn-primary">Kirim</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endif