@extends('layouts.admin.app')
@section('content')
<div class="main_content_iner overly_inner ">
    <div class="container-fluid p-0 ">
        <!-- page title  -->
        <div class="row">
            <div class="col-12">
                <div class="page_title_box d-flex flex-wrap align-items-center justify-content-between">
                    <div class="page_title_left d-flex align-items-center">
                        <h3 class="f_s_25 f_w_700 dark_text mr_30" >Dashboard</h3>
                        <ol class="breadcrumb page_bradcam mb-0">
                            <li class="breadcrumb-item"><a href="javascript:void(0);">Home</a></li>
                            <li class="breadcrumb-item active">Analytic</li>
                        </ol>
                    </div>
                    <div class="container">
                        <table class="table" id="tabel_laporan">
                            <thead class="thead-dark">
                              <tr>
                                <th scope="col">No</th>
                                <th scope="col">File Laporan</th>
                                <th scope="col">Jumlah Pendaftar</th>
                                <th scope="col">Jumlah Peserta</th>
                              </tr>
                            </thead>
                            <tbody>
                            </tbody>
                          </table>
                    </div>
                    <div class="page_title_right">
                        <div class="page_date_button d-flex align-items-center"> 
                            <img src="img/icon/calender_icon.svg" alt="">
                            {{-- July 7, 2020 - August 31, 2020 --}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row ">
        </div>
    </div>
</div>

@yield('footer')
</section>
@push('js')
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.25/js/jquery.dataTables.js"></script>

<script>
    $(document).ready(function(){
        tampil()
    })

    function tampil(){
        $('#tabel_laporan').DataTable({
            serverside : true,
            responsive : true,
            ajax : {
                url : "{{route('admin.laporan')}}"
            },
            columns : [
                        { "data" : null, "sortable" : false,
                            render : function(data, type, row, meta){
                                    return meta.row + meta.setttings.iDisplayStart +1
                                    }
                        },
                        {data: 'file_laporan', name: 'file_laporan'},
                        {data: 'jumlah_pendaftar', name: 'jumlah_pendaftar'},
                        {data: 'jumlah_peserta', name: 'jumlah_peserta'}
                      ]
        })
    }
</script>
@endpush
@endsection