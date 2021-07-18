<html lang="zxx">


<!-- Mirrored from demo.dashboardpack.com/user-management-html/ by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 06 Jul 2021 05:01:54 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <title>Management Admin</title>

    <link rel="icon" href="{{ asset('assets/img/logo_mini.png')}}" type="image/png">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css')}}" />
    <!-- themefy CSS -->
    <link rel="stylesheet" href="{{ asset('assets/vendors/themefy_icon/themify-icons.css')}}" />
    <!-- select2 CSS -->
    <link rel="stylesheet" href="{{ asset('assets/vendors/niceselect/css/nice-select.css')}}" />
    <!-- owl carousel CSS -->
    <link rel="stylesheet" href="{{ asset('assets/vendors/owl_carousel/css/owl.carousel.css')}}" />
    <!-- gijgo css -->
    <link rel="stylesheet" href="{{ asset('assets/vendors/gijgo/gijgo.min.css')}}" />
    <!-- font awesome CSS -->
    <link rel="stylesheet" href="{{ asset('assets/vendors/font_awesome/css/all.min.css')}}" />
    <link rel="stylesheet" href="{{ asset('assets/vendors/tagsinput/tagsinput.css')}}" />

    <!-- date picker -->
     <link rel="stylesheet" href="{{ asset('assets/vendors/datepicker/date-picker.css')}}" />

     <link rel="stylesheet" href="{{ asset('assets/vendors/vectormap-home/vectormap-2.0.2.css')}}" />
     
     <!-- scrollabe  -->
     <link rel="stylesheet" href="{{ asset('assets/vendors/scroll/scrollable.css')}}" />
    <!-- datatable CSS -->
    <link rel="stylesheet" href="{{ asset('assets/vendors/datatable/css/jquery.dataTables.min.css')}}" />
    <link rel="stylesheet" href="{{ asset('assets/vendors/datatable/css/responsive.dataTables.min.css')}}" />
    <link rel="stylesheet" href="{{ asset('assets/vendors/datatable/css/buttons.dataTables.min.css')}}" />
    <!-- text editor css -->
    <link rel="stylesheet" href="{{ asset('assets/vendors/text_editor/summernote-bs4.css')}}" />
    <!-- morris css -->
    <link rel="stylesheet" href="{{ asset('assets/vendors/morris/morris.css')}}">
    <!-- metarial icon css -->
    <link rel="stylesheet" href="{{ asset('assets/vendors/material_icon/material-icons.css')}}" />

    <!-- menu css  -->
    <link rel="stylesheet" href="{{ asset('assets/css/metisMenu.css')}}">
    <!-- style CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/style.css')}}" />
    <link rel="stylesheet" href="{{ asset('assets/css/colors/default.css" id="colorSkinCSS')}}">
</head>
<body class="crm_body_bg">

    @include('layouts.sidebar')

    @include('layouts.header')
    @yield('content')
    @yield('footer')


    
<div id="back-top" style="display: none;">
    <a title="Go to Top" href="#">
        <i class="ti-angle-up"></i>
    </a>
</div>

<!-- footer  -->
<script src="{{asset('assets/js/jquery-3.4.1.min.js')}}"></script>
<!-- popper js -->
<script src="{{asset('assets/js/popper.min.js')}}"></script>
<!-- bootstarp js -->
<script src="{{asset('assets/js/bootstrap.min.js')}}"></script>
<!-- sidebar menu  -->
<script src="{{asset('assets/js/metisMenu.js')}}"></script>
<!-- waypoints js -->
<script src="{{asset('assets/vendors/count_up/jquery.waypoints.min.js')}}"></script>
<!-- waypoints js -->
<script src="{{asset('assets/vendors/chartlist/Chart.min.js')}}"></script>
<!-- counterup js -->
<script src="{{asset('assets/vendors/count_up/jquery.counterup.min.js')}}"></script>

<!-- nice select -->
<script src="{{asset('assets/vendors/niceselect/js/jquery.nice-select.min.js')}}"></script>
<!-- owl carousel -->
<script src="{{asset('assets/vendors/owl_carousel/js/owl.carousel.min.js')}}"></script>

<!-- responsive table -->
<script src="{{asset('assets/vendors/datatable/js/jquery.dataTables.min.js')}}"></script>
<script src="{{asset('assets/vendors/datatable/js/dataTables.responsive.min.js')}}"></script>
<script src="{{asset('assets/vendors/datatable/js/dataTables.buttons.min.js')}}"></script>
<script src="{{asset('assets/vendors/datatable/js/buttons.flash.min.js')}}"></script>
<script src="{{asset('assets/vendors/datatable/js/jszip.min.js')}}"></script>
<script src="{{asset('assets/vendors/datatable/js/pdfmake.min.js')}}"></script>
<script src="{{asset('assets/vendors/datatable/js/vfs_fonts.js')}}"></script>
<script src="{{asset('assets/vendors/datatable/js/buttons.html5.min.js')}}"></script>
<script src="{{asset('assets/vendors/datatable/js/buttons.print.min.js')}}"></script>

<!-- datepicker  -->
<script src="{{asset('assets/vendors/datepicker/datepicker.js')}}"></script>
<script src="{{asset('assets/vendors/datepicker/datepicker.en.js')}}"></script>
<script src="{{asset('assets/vendors/datepicker/datepicker.custom.js')}}"></script>

<script src="{{asset('assets/js/chart.min.js')}}"></script>
<script src="{{asset('assets/vendors/chartjs/roundedBar.min.js')}}"></script>

<!-- progressbar js -->
<script src="{{asset('assets/vendors/progressbar/jquery.barfiller.js')}}"></script>
<!-- tag input -->
<script src="{{asset('assets/vendors/tagsinput/tagsinput.js')}}"></script>
<!-- text editor js -->
<script src="{{asset('assets/vendors/text_editor/summernote-bs4.js')}}"></script>
<script src="{{asset('assets/vendors/am_chart/amcharts.js')}}"></script>

<!-- scrollabe  -->
<script src="{{asset('assets/vendors/scroll/perfect-scrollbar.min.js')}}"></script>
<script src="{{asset('assets/vendors/scroll/scrollable-custom.js')}}"></script>

<!-- vector map  -->
<script src="{{asset('assets/vendors/vectormap-home/vectormap-2.0.2.min.js')}}"></script>
<script src="{{asset('assets/vendors/vectormap-home/vectormap-world-mill-en.js')}}"></script>

<!-- apex chrat  -->
<script src="{{asset('assets/vendors/apex_chart/apex-chart2.js')}}"></script>
<script src="{{asset('assets/vendors/apex_chart/apex_dashboard.js')}}"></script>

<!-- <script src="{{asset('assets/vendors/echart/echarts.min.js')}}"></script> -->


<script src="{{asset('assets/vendors/chart_am/core.js')}}"></script>
<script src="{{asset('assets/vendors/chart_am/charts.js')}}"></script>
<script src="{{asset('assets/vendors/chart_am/animated.js')}}"></script>
<script src="{{asset('assets/vendors/chart_am/kelly.js')}}"></script>
<script src="{{asset('assets/vendors/chart_am/chart-custom.js')}}"></script>
<!-- custom js -->
<script src="{{asset('assets/js/dashboard_init.js')}}"></script>
<script src="{{asset('assets/js/custom.js')}}"></script>
</body>

<!-- Mirrored from demo.dashboardpack.com/user-management-html/ by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 06 Jul 2021 05:04:48 GMT -->
</html>
{{-- <!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    {{ config('app.name', 'Laravel') }}
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                            @if (Route::has('login'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                </li>
                            @endif

                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        <main class="py-4">
            @yield('content')
        </main>
    </div>
</body>
</html> --}}
