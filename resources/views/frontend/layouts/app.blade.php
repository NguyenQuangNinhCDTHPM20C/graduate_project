<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    {{--CSRF Token--}}
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title', config('app.name', '@Master Layout'))</title>

    {{--Styles css common--}}
    <link rel="shortcut icon" type="image/png" href="https://img.icons8.com/color/1x/shop.png" />
    <!-- General CSS Files -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- INCLUDE FONTS -->
    <link rel="stylesheet" href="{{ asset('assets/css/fontawsome/all.min.css') }}">
    <link href="//fonts.googleapis.com/css?family=Nunito:400,600,700,800" rel="stylesheet">
    <!-- CSS Libraries -->
    <!-- Template CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/style.css?v' . time()) }}">
    <link rel="stylesheet" href="{{ asset('assets/css/font/flaticon.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/components.css') }}">
    <link href="{{ asset('assets/css/select2.min.css') }}" rel="stylesheet" />
    <!--defaut-->
    <link rel="stylesheet" href="{{ asset('css/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    @yield('style-libraries')
    {{--Styles custom--}}
    <!-- Custom styles for this template -->
    <link rel="stylesheet" href="css/style.css" rel="stylesheet" />
    <!-- responsive style -->
    <link rel="stylesheet" href="css/responsive.css" rel="stylesheet" />
    @yield('styles')
</head>

<body>
    @include('frontend.partial.header')

    @yield('slider')

    @yield('why_us')

    @yield('content')

    @yield('client')

    @include('frontend.partial.footer')

    {{--Scripts js common--}}
    <script src="{{ asset('js/jquery-3.4.1.js') }}"></script>
    {{--Scripts link to file or js custom--}}
    <!-- jQery -->
    <script src="js/jquery-3.4.1.min.js"></script>
    <!-- bootstrap js -->
    <script src="js/bootstrap.js"></script>
    <!-- custom js -->
    <script src="js/custom.js"></script>
    @yield('scripts')

</body>

</html>