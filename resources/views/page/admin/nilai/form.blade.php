<div class="modal fade" id="form_tambah_nilai" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="form-ubah-nilaiTitle">Form Tambah Nilai</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
            <div class="col-lg-12">
                <div class="white_card card_height_100 mb_10">
                  <div class="white_card_body">
                    <form action="{{route('admin.tambahnilai')}}" method="POST">
                    @csrf
                    <div class="form-row">
                      <div class="col">
                        <select class="custom-select mb-3" id="peserta_id" name="peserta_id" required>
                          <option>Pilih Peserta</option>
                          @foreach ($peserta as $peserta)
                          <option value="{{$peserta->id}}">{{$peserta->nama_lengkap}}</option>
                          @endforeach
                        </select>
                      </div>
                      <div class="col">
                        <div class="input-group mb-3">
                          <textarea class="form-control" aria-describedby="basic-addon2" name="praktik" id="praktik" rows="5" cols="50" placeholder="Masukkan Nilai Praktik" required></textarea>
                        </div>
                      </div>
                    </div>
                  
                    <div class="form-row">
                      <div class="col">
                        <div class="input-group mb-3">
                            <textarea class="form-control" aria-describedby="basic-addon2" name="partisipasi" id="partisipasi" rows="5" cols="50" placeholder="Masukkan Nilai Partisipasi" required></textarea>
                        </div>
                      </div>
                      <div class="col">
                        <div class="input-group mb-3">
                            <textarea class="form-control" aria-describedby="basic-addon2" name="capaian" id="capaian" rows="5" cols="50" placeholder="Masukkan Nilai Capaian" required></textarea>
                        </div>
                      </div>
                    </div>

                    <div class="form-row">
                      <div class="col">
                      <div class="input-group mb-3">
                          <textarea class="form-control" aria-describedby="basic-addon2" name="etika" id="etika" rows="5" cols="50" placeholder="Masukkan Nilai Etika" required></textarea>
                      </div>
                    </div>
                    <div class="col">
                      <div class="input-group mb-3">
                          <textarea class="form-control" aria-describedby="basic-addon2" name="askep" id="askep" rows="5" cols="50" placeholder="Masukkan Nilai Askep" required></textarea>
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
        </div>
      </form>
      </div>
    </div>
</div>

{{-- Form ubah nilai --}}
<div class="modal fade" id="form_ubah_nilai" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="form-ubah-nilaiTitle">Form Ubah Nilai</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
          <div class="col-lg-12">
              <div class="white_card card_height_100 mb_10">
                  <div class="white_card_body">
                              <div class="input-group mb-3">
                                  <textarea class="form-control" aria-describedby="basic-addon2" name="ubah_partisipasi" id="ubah_partisipasi" rows="5" cols="50">{{$nilai->partisipasi}}</textarea>
                              </div>
                              <div class="input-group mb-3">
                                  <textarea class="form-control" aria-describedby="basic-addon2" name="ubah_capaian" id="ubah_capaian" rows="5" cols="50">{{$nilai->capaian}}</textarea>
                              </div>
                              <div class="input-group mb-3">
                                  <textarea class="form-control" aria-describedby="basic-addon2" name="ubah_etika" id="ubah_etika" rows="5" cols="50">{{$nilai->etika}}</textarea>
                              </div>
                              <div class="input-group mb-3">
                                  <textarea class="form-control" aria-describedby="basic-addon2" name="ubah_askep" id="ubah_askep" rows="5" cols="50">{{$nilai->askep}}</textarea>
                              </div>
                              <div class="input-group mb-3">
                                  <textarea class="form-control" aria-describedby="basic-addon2" name="ubah_praktik" id="ubah_praktik" rows="5" cols="50">{{$nilai->praktik}}</textarea>
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
{{-- End form ubah nilai --}}

{{-- Form tambah nilai seminar --}}

{{-- End form tambah nilai seminar --}}

{{-- Form tambah nilai seminar --}}
<div class="modal fade" id="form_ubah_nilai_seminar" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="form_ubah_nilai_seminarTitle">Form Tambah Nilai</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
          <div class="col-lg-12">
              <div class="white_card card_height_100 mb_10">
                  <div class="white_card_body">
                              <div class="input-group mb-3">
                                <input type="text" class="form-control" aria-describedby="basic-addon1" name="pre_test" id="pre_test" value="{{$nilai->pre_test}}">
                              </div>
                              <div class="input-group mb-3">
                                <input type="text" class="form-control" aria-describedby="basic-addon1" name="post_test" id="post_test" value="{{$nilai->post_test}}">
                              </div>
                              <div class="input-group mb-3">
                                <input type="text" class="form-control" aria-describedby="basic-addon1" name="total_nilai" id="total_nilai" value="{{$nilai->total_nilai}}">
                              </div>
                  </div>
              </div>
          </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
        <button type="submit" class="btn btn-primary">Tambah</button>
      </div>
    </div>
  </div>
</div>
{{-- End form tambah nilai seminar --}}