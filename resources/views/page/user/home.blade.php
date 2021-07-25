@extends('layouts.users.app')
@section('content')
<section class="home-banner-area">
    <div class="container">
        <div class="row fullscreen d-flex align-items-center justify-content-between">
            <div class="home-banner-content col-lg-6 col-md-6">
                <h3>Sistem Informasi Pengelolaan Data<br>Praktik Kerja Lapangan</h3>
                <p>Membagikan informasi mengenai praktik kerja lapangan dan menjadi wadah pendaftaran & pengumuman mengenai praktik kerja lapangan</p>
            </div>
        </div>
    </div>
</section>

<section class="feature-area section-gap-top" id="about">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-6">
                <div class="single-feature">
                    <a href="#" class="title" style="text-decoration: none">
                        <img src="{{asset('assets/img/pkl/foto1.jpg')}}" width="300px" alt="">
                        <h3>Supportive</h3>
                    </a>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="single-feature">
                    <a href="#" class="title" style="text-decoration: none">
                        <img src="{{asset('assets/img/pkl/foto3.jpg')}}" width="300px" alt="">
                        <h3>Professional Service</h3>
                    </a>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="single-feature">
                    <a href="#" class="title" style="text-decoration: none">
                        <img src="{{asset('assets/img/pkl/foto2.jpg')}}" width="300px" alt="">
                        <h3>Great Support</h3>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection