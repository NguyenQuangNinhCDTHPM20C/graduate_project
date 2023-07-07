<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    {{-- CSRF Token --}}
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title', config('app.name', '@Master Layout'))</title>

    {{-- Styles css common --}}
    <link rel="shortcut icon" type="image/png" href="{{ asset($settings->favicon) }}" />
    <!-- Favicon -->
    <!-- <link href="img/favicon.ico" rel="icon"> -->
    <!-- <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css'> -->
    <!-- Google Web Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">

    <!-- Font Awesome -->
    <link href="{{ asset('css/Public/all.min.css') }}" rel="stylesheet">
    <!-- Libraries Stylesheet -->
    <link rel="stylesheet" href="{{ asset('css/Public/animate.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/Public/owl.carousel.min.css') }}">

    @yield('style-libraries')
    {{-- Styles custom --}}
    <!-- Custom styles for this template -->
    <link rel="stylesheet" href="{{ asset('css/Public/style.css') }}">
    @yield('styles')
</head>

<body>
    @php
        use Illuminate\Support\Str;
    @endphp

    <div id="fb-root"></div>
    <script async defer crossorigin="anonymous"
        src="https://connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v17.0&appId=1284707605765260&autoLogAppEvents=1"
        nonce="HZS5fH7a"></script>
    @include('Public.partial.header')

    @yield('slider')

    @yield('content')

    @include('Public.partial.footer')

    {{-- Scripts js common --}}
    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
    <script src="js/Public/easing.min.js"></script>
    <script src="js/Public/owl.carousel.min.js"></script>

    <!-- Contact Javascript File -->
    <script src="js/Public/jqBootstrapValidation.min.js"></script>
    <script src="js/Public/contact.js"></script>

    <!-- Template Javascript -->
    <script src="js/Public/main.js"></script>
    @yield('scripts')

</body>

</html>
