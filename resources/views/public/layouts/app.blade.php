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
    <!-- Favicon -->
    <!-- <link href="img/favicon.ico" rel="icon"> -->
    <!-- <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css'> -->
    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">

    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/Public/fontawesome.min.css">
    <!-- Libraries Stylesheet -->
    <link href="css/Public/animate.min.css" rel="stylesheet">
    <link href="css/Public/owl.carousel.min.css" rel="stylesheet">

    @yield('style-libraries')
    {{--Styles custom--}}
    <!-- Custom styles for this template -->
    <link href="css/Public/style.css" rel="stylesheet">

    @yield('styles')
</head>

<body>
    @include('Public.partial.header')

    @yield('slider')

    @yield('content')

    @include('Public.partial.footer')

    {{--Scripts js common--}}
    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
    <script src="js/Public/easing.min.js"></script>
    <script src="ljs/Public/owl.carousel.min.js"></script>

    <!-- Contact Javascript File -->
    <script src="js/Public/jqBootstrapValidation.min.js"></script>
    <script src="js/Public/contact.js"></script>

    <!-- Template Javascript -->
    <script src="js/Public/main.js"></script>
    @yield('scripts')

</body>

</html>