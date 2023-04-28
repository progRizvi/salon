<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>@yield('title')</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- favicon
  ============================================ -->
    <link rel="shortcut icon" type="image/x-icon" href="img/favicon.ico">
    <!-- Google Fonts
  ============================================ -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,700,900" rel="stylesheet">
    <!-- Bootstrap CSS
  ============================================ -->
    <link rel="stylesheet" href="{{ url('css/bootstrap.min.css') }}">
    <!-- Bootstrap CSS
  ============================================ -->
    <link rel="stylesheet" href="{{ url('css/font-awesome.min.css') }}">
    <!-- nalika Icon CSS
  ============================================ -->
    <link rel="stylesheet" href="{{ url('css/nalika-icon.css') }}">
    <!-- owl.carousel CSS
  ============================================ -->
    <link rel="stylesheet" href="{{ url('css/owl.carousel.css') }}">
    <link rel="stylesheet" href="{{ url('css/owl.theme.css') }}">
    <link rel="stylesheet" href="{{ url('css/owl.transitions.css') }}">
    <!-- animate CSS
  ============================================ -->
    <link rel="stylesheet" href="{{ url('css/animate.css') }}">
    <!-- normalize CSS
  ============================================ -->
    <link rel="stylesheet" href="{{ url('css/normalize.css') }}">
    <!-- meanmenu icon CSS
  ============================================ -->
    <link rel="stylesheet" href="{{ url('css/meanmenu.min.css') }}">
    <!-- main CSS
  ============================================ -->
    <link rel="stylesheet" href="{{ url('css/main.css') }}">
    <!-- morrisjs CSS
  ============================================ -->
    <link rel="stylesheet" href="{{ url('css/morrisjs/morris.css') }}">
    <!-- mCustomScrollbar CSS
  ============================================ -->
    <link rel="stylesheet" href="{{ url('css/scrollbar/jquery.mCustomScrollbar.min.css') }}">
    <!-- metisMenu CSS
  ============================================ -->
    <link rel="stylesheet" href="{{ url('css/metisMenu/metisMenu.min.css') }}">
    <link rel="stylesheet" href="{{ url('css/metisMenu/metisMenu-vertical.css') }}">
    <!-- calendar CSS
  ============================================ -->
    <link rel="stylesheet" href="{{ url('css/calendar/fullcalendar.min.css') }}">
    <link rel="stylesheet" href="{{ url('css/calendar/fullcalendar.print.min.css') }}">
    <!-- style CSS
  ============================================ -->
    <link rel="stylesheet" href="{{ url('css/style.css') }}">
    <!-- responsive CSS
  ============================================ -->
    <link rel="stylesheet" href="{{ url('css/responsive.css') }}">
    <!-- modernizr JS
  ============================================ -->
    @notifyCss
    <script src="{{ url('js/vendor/modernizr-2.8.3.min.js') }}"></script>
    <style>
        .notify {
            margin-top: 100px;
            z-index: 10000;
        }
    </style>
</head>

<body>
    <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->

    <div class="left-sidebar-pro">
        <nav id="sidebar" class="">
            <div class="sidebar-header">
                <a href=""><img class="main-logo" src="img/logo/logo.png" alt="" width="92px" /></a>
                <strong><img src="img/logo/logosn.png" alt="" /></strong>
            </div>
            <div class="nalika-profile">
                <div class="profile-dtl">
                    <a href="#"><img src="img/notification/4.jpg" alt="" /></a>
                    <h2>{{ auth()->user()->first_name }} <span class="min-dtn">{{ auth()->user()->last_name }}</span>
                    </h2>
                </div>
                <div class="profile-social-dtl">
                    <ul class="dtl-social">
                        <li><a href="#"><i class="icon nalika-facebook"></i></a></li>
                        <li><a href="#"><i class="icon nalika-twitter"></i></a></li>
                        <li><a href="#"><i class="icon nalika-linkedin"></i></a></li>
                    </ul>
                </div>
            </div>

            {{-- sidebar --}}
            @include('backend.fixed.sidebar')
        </nav>
    </div>
    <!-- Start Welcome area -->
    <div class="all-content-wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="logo-pro">
                        <a href=""><img class="main-logo" src="img/logo/logo.png" alt=""
                                width="92px" /></a>
                    </div>
                </div>
            </div>
        </div>

        {{-- Top Bar --}}
        @include('backend.fixed.header')

        {{-- all content will show here --}}
        @yield('content')
        @include('notify::components.notify')

        @include('backend.fixed.footer')
    </div>


    {{-- All external js files --}}
    @include('backend.fixed.jsFile')
</body>

</html>
