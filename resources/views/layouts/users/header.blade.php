<header id="header">
    <div class="container main-menu">
     <div class="row align-items-center justify-content-between d-flex">
        <div id="logo">
            <a href="index.html"><img src="{{asset('assets/img/logobersih.png')}}" width="300px"/></a>
        </div>
        <nav id="nav-menu-container">
            <ul class="nav-menu">
                <li class="menu-active"><a href="{{route('home')}}" style="text-decoration: none">Home</a></li>
                <li><a href="#about" style="text-decoration: none">Tentang</a></li>
                <li><a href="{{ route('kuotapkl')}}" style="text-decoration: none">Kuota PKL</a></li>
                @if(!Auth::user())
                <li class="menu-has-children"><a href="{{route('login')}}" style="text-decoration: none">Pengajuan</a></li>
                @else 
                <li class="menu-has-children"><a href="{{route('user.pengajuan')}}" style="text-decoration: none">Pengajuan</a></li>
                @endif
                @if(!Auth::user())
                <li class="menu-has-children"><a href="{{route('login')}}" style="text-decoration: none">Login</a></li>
                <li><a href="{{route('registrasi')}}" style="text-decoration: none">Register</a></li>
                @endif
                @if(Auth::user())
                <li><a href="{{route('user.logout')}}" onclick="event.preventDefault();document.getElementById('logout-form').submit();" style="text-decoration: none">Log Out</a><form action="{{route('user.logout')}}" method="POST" class="d-none" id="logout-form">@csrf</form></li>
                @endif
            </ul>
        </nav>
     </div>
    </div>
</header>
    