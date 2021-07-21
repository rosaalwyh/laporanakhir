@extends('layouts.layout')
@section('content')
<div class="main_content_iner ">
    <div class="container-fluid p-0">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="white_box mb_30">
                    <div class="row justify-content-center">
                        <div class="col-lg-8">
                            <!-- sign_in  -->
                            <img src="{{asset('assets/img/mini_logo.png')}}" class="center" alt="" style="">
                            <h5 class="text-center">Sistem Informasi Pengelolaan Data PKL</h5>
                            <div class="modal-content cs_modal" id="sign_up">
                                <div class="modal-header theme_bg_1 justify-content-center">
                                    <h5 class="modal-title text_white">Registrasi</h5>
                                </div>
                                <div class="modal-body">
                                    <form method="POST" action="{{route('regis')}}">
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
                                            <input type="text" class="form-control @error('username') is-invalid @enderror" placeholder="Username" name="username"  value="{{ old('username') }}">
                                            @error('username')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                            </div>
                                            <div class="col">
                                                <input type="text" class="form-control @error('email') is-invalid @enderror" placeholder="Enter your email" name="email"  value="{{ old('email') }}">
                                                @error('email')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="form-row">
                                            <div class="col">
                                            <input type="password" class="form-control @error('password') is-invalid @enderror" placeholder="Password" name="password">
                                            @error('password')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                            </div>
                                            <div class="col">
                                                <input type="password" class="form-control @error('cpassword') is-invalid @enderror" placeholder="Confirm Password" name="cpassword">
                                            @error('cpassword')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                            </div>
                                        </div>
                                        <div class="form-group cs_check_box">
                                            <input type="checkbox" id="check_box" class="common_checkbox">
                                            <label for="check_box">
                                                Keep me up to date
                                            </label>
                                        </div>
                                        <button type="submit" class="btn btn_1 full_width text-center">Registrasi
                                        </button>
                                    </form>
                                        <p>Need an account? <a href="{{route('login')}}">Log in</a></p>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection