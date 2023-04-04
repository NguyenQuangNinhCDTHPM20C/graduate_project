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
    <!-- bootstrap core css -->
    <link rel="stylesheet" href="backend/css/bootstrap.min.css">
    <link rel="stylesheet" href="backend/bootstrap-datetimepicker.min.css">
    <link rel="stylesheet" href="backend/owl.carousel.min.css">
    <link rel="stylesheet" href="backend/owl.theme.default.min.css">
    <link rel="stylesheet" href="backend/css/select2.min.css">
    <link rel="stylesheet" href="backend/css/dragula.min.css">
    <link rel="stylesheet" href="backend/dataTables.bootstrap4.min.css">
    <!-- fonts style -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,500;0,600;0,700;1,400&display=swap"
        rel="stylesheet">
    <!-- font awesome style -->
    <link rel="stylesheet" href="backend/css/fontawesome.min.css">
    <link rel="stylesheet" href="backend/css/all.min.css">
    <!--css custome-->
    <link rel="stylesheet" href="backend/css/animate.css">
    <link rel="stylesheet" href="backend/css/style.css">
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
    <div id="global-loader">
        <div class="whirly-loader"> </div>
    </div>
    <div class="main-wrapper">
        @include('backend.partial.header')

        @include('backend.partial.sidebar')

        @yield('content')
    </div>
    {{--Scripts js custom--}}
    <script src="backend/js/main.js"></script>
    {{--Scripts js common--}}
    <script src="https://dreamspos.dreamguystech.com/laravel/template/public/assets/js/jquery-3.6.0.min.js">
    </script>
    <script src="https://dreamspos.dreamguystech.com/laravel/template/public/assets/js/bootstrap.bundle.min.js">
    </script>
    <script src="https://dreamspos.dreamguystech.com/laravel/template/public/assets/js/feather.min.js"></script>
    <script src="https://dreamspos.dreamguystech.com/laravel/template/public/assets/js/jquery.slimscroll.min.js">
    </script>
    <script src="https://dreamspos.dreamguystech.com/laravel/template/public/assets/js/jquery.dataTables.min.js">
    </script>
    <script src="https://dreamspos.dreamguystech.com/laravel/template/public/assets/js/dataTables.bootstrap4.min.js">
    </script>
    <script src="https://dreamspos.dreamguystech.com/laravel/template/public/assets/plugins/select2/js/select2.min.js">
    </script>
    <script src="https://dreamspos.dreamguystech.com/laravel/template/public/assets/js/moment.min.js"></script>
    <script src="https://dreamspos.dreamguystech.com/laravel/template/public/assets/js/bootstrap-datetimepicker.min.js">
    </script>
    <script
        src="https://dreamspos.dreamguystech.com/laravel/template/public/assets/plugins/apexchart/apexcharts.min.js">
    </script>
    <script src="https://dreamspos.dreamguystech.com/laravel/template/public/assets/plugins/apexchart/chart-data.js">
    </script>
    <script src="https://dreamspos.dreamguystech.com/laravel/template/public/assets/plugins/clipboard/clipboard.min.js">
    </script>
    <script
        src="https://dreamspos.dreamguystech.com/laravel/template/public/assets/plugins/owlcarousel/owl.carousel.min.js">
    </script>
    <script
        src="https://dreamspos.dreamguystech.com/laravel/template/public/assets/plugins/fileupload/fileupload.min.js">
    </script>

    <script
        src="https://dreamspos.dreamguystech.com/laravel/template/public/assets/plugins/sweetalert/sweetalert2.all.min.js">
    </script>
    <script
        src="https://dreamspos.dreamguystech.com/laravel/template/public/assets/plugins/sweetalert/sweetalerts.min.js">
    </script>

    <script src="https://dreamspos.dreamguystech.com/laravel/template/public/assets/js/script.js"></script>
    @yield('scripts')

</body>

</html>