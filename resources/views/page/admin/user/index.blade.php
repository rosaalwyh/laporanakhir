@extends('layouts.admin.app')
@section('content')
<div class="main_content_iner ">
    <div class="container-fluid p-0">
        <div class="row justify-content-center">
            <div class="col-lg-12">
                <div class="white_card card_height_100 mb_30">
                    <div class="white_card_header">
                        <div class="box_header m-0">
                            <div class="main-title">
                                <h3 class="m-0">Data User</h3>
                            </div>
                        </div>
                    </div>
                    
                    <div class="white_card_body">
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
                        <div class="QA_section">
                            <div class="white_box_tittle list_header">
                                <div class="box_right d-flex lms_block">
                                    {{-- <div class="serach_field_2"> --}}
                                        {{-- <div class="search_inner">
                                            <form Active="#">
                                                <div class="search_field">
                                                    <input type="text" placeholder="Search content here...">
                                                </div>
                                                <button type="submit"> <i class="ti-search"></i> </button>
                                            </form>
                                        </div> --}}
                                    {{-- </div> --}}
                                    @if(Auth::user()->role == 1 OR Auth::user()->role == 3)
                                    <div class="add_button ml-10">
                                        <a href="#" data-toggle="modal" data-target="#form_tambah_user" class="btn_1">Tambah Userr</a>
                                    </div>
                                    @endif
                                </div>
                            </div>
    
                            <div class="QA_table mb_30">
                                <!-- table-responsive -->
                                <table class="table table-responsive lms_table_active3" id="tabel-user">
                                    <thead>
                                        <tr>
                                          <th scope="col">Username</th>
                                          <th scope="col">Email</th>
                                          <th scope="col">Role</th>
                                          {{-- <th scope="col">Status</th> --}}
                                          @if(Auth::user()->role == 1)
                                          <th scope="col">Action</th>
                                          @endif
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th scope="col">Username</th>
                                            <th scope="col">Email</th>
                                            <th scope="col">Role</th>
                                            {{-- <th scope="col">Status</th> --}}
                                            @if(Auth::user()->role == 1)
                                            <th scope="col">Action</th>
                                            @endif
                                          </tr>
                                    </tfoot>
                                    <tbody>                                       
                                        @foreach ($user as $user)
                                        <tr>
                                            <th scope="row"><a href="#" class="question_content"></a>{{$user->username}}</th>
                                            <td>{{$user->email}}</td>
                                            <td>{{$user->role}}</td>
                                            @if(Auth::user()->role == 1)
                                            <td>
                                                <div class="action_btns d-flex">
                                                    <a href="/admin/edit_user/{{$user->id}}" class="action_btn mr_10"> <i class="far fa-edit"></i></a>
                                                    <form action="{{url('admin/hapususer/'. $user->id)}}" method="POST" onsubmit="return confirm('Apakah anda yakin ingin menghapus data?')">
                                                        @method('delete')
                                                        @csrf
                                                        <button class="action_btn"> <i class="fas fa-trash"></i> </button>
                                                    </form>
                                                </div>
                                            </td>
                                            @endif
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


@include('page.admin.user.form')

@section('js')
<script>
    $(document).ready( function () {
        $('#tabel-user').DataTable();
        //start edit user
        // table.on('click', '.editUser', function(){
        //     $tr = $(this).closest('tr');
        //     if($($tr).hasClass('child')){
        //         $tr = $tr.prev('.parent');
        //     }
        //     var data = table.row($tr).data();
        //     console.log(data);
        //     $('#username').val(data[1]);
        //     $('#email').val(data[2]);
        //     $('#role').val(data[3]);

        //     $('#ditFormUser').attr('action', 'admin/edit_user' + data[0]);
        //     $('#form_ubah_user').modal('show');
        // });
        //end edit user
    });

    
</script>
@endsection
@endsection