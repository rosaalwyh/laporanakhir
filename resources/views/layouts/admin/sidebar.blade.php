<!-- sidebar  -->
@if(Auth::user()->role !== 2)
<nav class="sidebar">
    <div class="logo d-flex justify-content-between">
        <a class="large_logo" href="{{route('admin.dashboard')}}"><img src="{{asset('assets/img/logoo.png')}}" alt=""></a>
        <a class="small_logo" href="#"><img src="{{asset('assets/img/minilogo.png')}}" alt=""></a>
        <div class="sidebar_close_icon d-lg-none">
            <i class="ti-close"></i>
        </div>
    </div>
    <ul id="sidebar_menu">
        <li class="">
            <a class="has-arrow" href="#" aria-expanded="false">
                <div class="nav_icon_small">
                    <img src="{{asset('assets/img/menu-icon/2.svg')}}" alt="">
                </div>
                <div class="nav_title">
                    <span>Application </span>
                </div>
            </a>
            <ul>
              @if (Auth::user()->role == 1 or Auth::user()->role == 3 or Auth::user()->role == 4 or Auth::user()->role == 5)
              <li><a href="{{ route('blank_page') }}">Laporan</a></li>
              @endif
              @if (Auth::user()->role == 1 or Auth::user()->role == 4)
              <li><a href="{{ route('admin.nilai') }}">Daftar Nilai</a></li>
              <li><a href="{{ route('admin.nilai-seminar') }}">Daftar Nilai Seminar</a></li>
              @endif
              @if (Auth::user()->role == 1 or Auth::user()->role == 3)
              <li><a href="{{ route('admin.sertifikat') }}">Sertifikat</a></li>
              <li><a href="{{ route('admin.suratbalasan') }}">Surat Balasan</a></li>
              @endif
              @if(Auth::user()->role == 7)
              <li><a href="{{ route('pendaftar.suratbalasan') }}">Surat Balasan</a></li>
              @endif
              @if(Auth::user()->role == 6)
              <li><a href="{{ route('peserta.suratbalasan') }}">Surat Balasan</a></li>
              <li><a href="{{ route('peserta.nilaiseminar') }}">Nilai Seminar</a></li>
              <li><a href="{{ route('peserta.sertifikat') }}">Sertifikat</a></li>
              @endif
            </ul>
        </li>
        <li class="">
            <a   class="has-arrow" href="#" aria-expanded="false">
              <div class="nav_icon_small">
                <img src="{{asset('assets/img/menu-icon/5.svg')}}" alt="">
            </div>
            <div class="nav_title">
                <span>Users</span>
            </div>
            </a>
            <ul>
              @if (Auth::user()->role == 1)
              <li><a href="{{ route('admin.user') }}">User</a></li>
              @endif
              @if (Auth::user()->role == 1)
              <li><a href="{{ route('admin.pimpinan') }}">Pimpinan</a></li>
              @elseif(Auth::user()->role == 5)
              <li><a href="{{ route('pimpinan.dashboard') }}">Pimpinan</a></li>
              @endif
              @if (Auth::user()->role == 1)
              <li><a href="{{ route('admin.diklat') }}">Pegawai Diklat</a></li>
              @elseif(Auth::user()->role == 3)
              <li><a href="{{ route('diklat.dashboard') }}">Pegawai Diklat</a></li>
              @endif
              @if (Auth::user()->role == 1)
              <li><a href="{{ route('admin.mentor') }}">Mentor</a></li>
              @elseif(Auth::user()->role == 4)
              <li><a href="{{ route('mentor.dashboard') }}">Mentor</a></li>
              @endif
              @if (Auth::user()->role == 1 or Auth::user()->role == 3 or Auth::user()->role == 4 or Auth::user()->role == 5)
              <li><a href="{{ route('admin.peserta') }}">Peserta PKL</a></li>
              @elseif(Auth::user()->role == 6)
              <li><a href="{{ route('peserta.dashboard') }}">Peserta PKL</a></li>
              @endif
              @if (Auth::user()->role == 1 or Auth::user()->role == 3 or Auth::user()->role == 5)
              <li><a href="{{ route('admin.pendaftar') }}">Pendaftar</a></li>
              @elseif(Auth::user()->role == 7)
              <li><a href="{{ route('pendaftar.dashboard') }}">Pendaftar</a></li>
              @endif
            </ul>
        </li>
      </ul>
</nav>
 <!--/ sidebar  -->
@else
<nav class="sidebar">
  <div class="logo d-flex justify-content-between">
      <a class="large_logo" href="#"><img src="{{asset('assets/img/logoo.png')}}" alt=""></a>
      <a class="small_logo" href="#"><img src="{{asset('assets/img/minilogo.png')}}" alt=""></a>
      <div class="sidebar_close_icon d-lg-none">
          <i class="ti-close"></i>
      </div>
  </div>
  <ul id="sidebar_menu">
      <li class="">
          <a href="#" aria-expanded="false">
              <div class="nav_icon_small">
                  <img src="{{asset('assets/img/menu-icon/2.svg')}}" alt="">
              </div>
                <div class="nav_title">
                    <span>Pengajuan </span>
                </div>
              </a>
      </li>
      @if(Auth::user()->role == 6)
      <li class="">
        <a href="" aria-expanded="false">
          <div class="nav_icon_small">
            <img src="{{asset('assets/img/menu-icon/5.svg')}}" alt="">
        </div>
        <div class="nav_title">
            <span>Login Peserta</span>
        </div>
        </a>
      </li>
      @endif
      
    </ul>
</nav>
@endif