@extends('layouts.layout')
@section('content')
<div class="main_content_iner ">
    <div class="container-fluid p-0">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="white_box mb_30">
                    <div class="row justify-content-center">
                        <div class="col-lg-6">
                            <!-- sign_in  -->
                            <img src="{{asset('assets/img/mini_logo.png')}}" class="center" alt="" style="">
                            <h5 class="text-center">Sistem Informasi Pengelolaan Data PKL</h5>
                            <div class="modal-content cs_modal">
                                <div class="modal-header justify-content-center theme_bg_1">
                                    <h5 class="modal-title text_white">Log in</h5>
                                </div>
                                <div class="modal-body">
                                    <form method="POST" action="{{ route('checklogin') }}">
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
                                        @csrf
                                        <div class="form-group">
                                            <input type="text" class="form-control @error('username') is-invalid @enderror" placeholder="Enter your username" name="username" value="{{ old('username') }}" autofocus>
                                            @error('username')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                        <div class="form-group">
                                            <input type="password" class="form-control @error('password') is-invalid @enderror" placeholder="Password" name="password" id="password" autocomplete="current-password">
                                            @error('password')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                        {{-- <a href="#" class="btn_1 full_width text-center">Log in</a> --}}
                                        <button type="submit" class="btn btn_1 full_width text-center">
                                            {{ __('Login') }}
                                        </button>
                                    </form>
                                        <p>Need an account?
                                            <a href="{{route('registrasi')}}"> Sign Up</a>
                                        </p>
                                        <div class="text-center">
                                            <a href="#" class="pass_forget_btn">Forget Password?</a>
                                        </div>
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