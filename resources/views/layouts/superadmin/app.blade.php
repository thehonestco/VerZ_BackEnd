<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <title>{{ config('app.name', 'verZ') }} | Dashboard</title>
    <meta name="author" content="thehonestco.in">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <!-- Theme Style -->
    <link rel="stylesheet" type="text/css" href="{{ asset('css/animate.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/animation.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/bootstrap.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/bootstrap-select.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('font/fonts.css') }}">
    <link rel="stylesheet" href="{{ asset('icon/style.css') }}">
    <link rel="shortcut icon" href="{{ asset('images/favicon.png') }}">
    <link rel="apple-touch-icon-precomposed" href="{{ asset('images/favicon.png') }}">
    <link href="{{ asset('plugins/select2/css/select2.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('plugins/select2/css/select2.css') }}" rel="stylesheet" />
    <link href="{{ asset('plugins/select2_bootstrap/css/select2-bootstrap4.min.css') }}" rel="stylesheet" />

    @yield('style')
</head>
<body class="body">
    <div id="wrapper">
        <div id="page" class="">
            @guest
                @yield('content')
            @else
            <div class="layout-wrap">
                @include('layouts.superadmin.sidebar')
                <div class="section-content-right">
                    @include('layouts.superadmin.topbar')
                    <div class="main-content">
                        <div class="main-content-inner">
                            @yield('content')
                        </div>
                        @include('layouts.superadmin.footer')
                    </div>
                </div>
            </div>
            @endguest
        </div>
    </div>

    <!-- Javascript -->
    <script src="{{ asset('js/jquery.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap-select.min.js') }}"></script>
    <script src="{{ asset('js/zoom.js') }}"></script>
    <script src="{{ asset('js/apexcharts/apexcharts.js') }}"></script>
    <script src="{{ asset('js/apexcharts/line-chart-1.js') }}"></script>
    <script src="{{ asset('js/apexcharts/line-chart-2.js') }}"></script>
    <script src="{{ asset('js/apexcharts/line-chart-3.js') }}"></script>
    <script src="{{ asset('js/apexcharts/line-chart-4.js') }}"></script>
    <script src="{{ asset('js/apexcharts/line-chart-5.js') }}"></script>
    <script src="{{ asset('js/apexcharts/line-chart-6.js') }}"></script>
    <!-- <script src="{{ asset('js/switcher.js') }}"></script> -->
    <script src="{{ asset('js/theme-settings.js') }}"></script>
    <script src="{{ asset('js/main.js') }}"></script>
    <script src="{{ asset('plugins/select2/js/select2.min.js') }}"></script>
    <script>
        $(document).ready(function() {
            $('.js-example-basic-multiple').select2({
                allowClear: true
            });
        });
    </script>
    @yield('script')
</body>
</html>
