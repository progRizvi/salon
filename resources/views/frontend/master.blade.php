<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title')</title>

    <!-- Styles -->

    <link href='{{ asset('images/favicon/favicon.png') }}' rel='shortcut icon' media=''>
    <link href='{{ asset('summernote-0.8.9/summernote-lite.css') }}' rel='stylesheet'>
    <link href='{{ asset('line-awesome/css/line-awesome.min.css') }}' rel='stylesheet'>
    <link href='{{ asset('css/app.css') }}' rel='stylesheet'>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css" rel="stylesheet">
    <link rel="stylesheet" href="cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">

    <!--Let browser know website is optimized for mobile-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    @notifyCss
    <style>
        .notify {
            margin-top: 100px;
            z-index: 10000;
        }

        .mobile-btn:hover {
            color: #fff;
        }

        .text-info.mobile-btn:hover {
            color: #fff;
        }
    </style>
</head>

<body id="home">
    <div id="app">
        <main id="app">
            @yield('content')
            @include('notify::components.notify')
        </main>
        <script src='{{ asset('/js/lang.js') }}'></script>
        <script src='{{ asset('/js/locales-all.js') }}'></script>
        <script src='{{ asset('/js/creative.js') }}'></script>
        <script src='{{ asset('/js/jquery.easing.min.js') }}'></script>
        <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
        <script src='{{ asset('/summernote-0.8.9/summernote-lite.js') }}'></script>
        <script src='{{ asset('/js/accounting.js') }}'></script>
        <script src='{{ asset('/js/app.js') }}'></script>
        <script src="https://checkout.stripe.com/checkout.js"></script>
        <script src="cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
        <script>
            Command: toastr["error"]("My name is Inigo Montoya. You killed my father. Prepare to die!")
            toastr.options = {
                "closeButton": true,
                "debug": false,
                "newestOnTop": false,
                "progressBar": true,
                "positionClass": "toast-top-right",
                "preventDuplicates": true,
                "onclick": null,
                "showDuration": "300",
                "hideDuration": "1000",
                "timeOut": "3000",
                "extendedTimeOut": "1000",
                "showEasing": "swing",
                "hideEasing": "linear",
                "showMethod": "fadeIn",
                "hideMethod": "fadeOut"
            }
        </script>
        <script>
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
        </script>
        @include('frontend.fixed.jsFiles')

        @yield('scripts')

    </div>
</body>
