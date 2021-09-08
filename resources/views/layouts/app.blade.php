<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Dashboard App') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <!-- Javascript -->
    <script src="{{ asset('assets/js/jquery/jquery-2.1.0.min.js') }}"></script>
    <script src="{{ asset('assets/js/bootstrap/bootstrap.js') }}"></script>
    <script src="{{ asset('assets/js/plugins/bootstrap-multiselect/bootstrap-multiselect.js') }}"></script>
    <script src="{{ asset('assets/js/plugins/jquery-slimscroll/jquery.slimscroll.min.js') }}"></script>
    <script src="{{ asset('assets/js/queen-common.js') }}"></script>
    <script src="{{ asset('assets/js/plugins/bootstrap-multiselect/bootstrap-multiselect.js') }}"></script>
    <script src="{{ asset('assets/js/plugins/bootstrap-slider/bootstrap-slider.js') }}"></script>
    <script src="{{ asset('assets/js/queen-form-layouts.js') }}"></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400italic,300,400,700' rel='stylesheet' type='text/css'>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/bootstrap.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('assets/css/ionicons.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('assets/css/main.css') }}" rel="stylesheet" type="text/css">

    <!-- Fav and touch icons -->
    <link rel="apple-touch-icon-precomposed" type="image/png" sizes="144x144" href="{{ asset('assets/ico/pln-favicon144x144.png') }}">
    <link rel="apple-touch-icon-precomposed" type="image/png" sizes="114x114" href="{{ asset('assets/ico/pln-favicon114x114.png') }}">
    <link rel="apple-touch-icon-precomposed" type="image/png" sizes="72x72" href="{{ asset('assets/ico/pln-favicon72x72.png') }}">
    <link rel="apple-touch-icon-precomposed" type="image/png" sizes="57x57" href="{{ asset('assets/ico/pln-favicon57x57.png') }}">
    <link rel="shortcut icon" href="{{ asset('assets/ico/favicon.ico') }}">
</head>

<body class="fixed-top-active dashboard">
    <div id="app">
        <!-- WRAPPER -->
        <div class="wrapper">

                    @yield('content')

        </div>
    </div>
    </div>
</body>

</html>
