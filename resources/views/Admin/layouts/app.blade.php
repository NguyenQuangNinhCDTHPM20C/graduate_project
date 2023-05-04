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
    <link rel="stylesheet" href="{{asset('css/Admin/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/Admin/bootstrap-datetimepicker.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/Admin/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/Admin/owl.theme.default.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/Admin/select2.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/Admin/dragula.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/Admin/dataTables.bootstrap4.min.css')}}">
    <!-- fonts style -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,500;0,600;0,700;1,400&display=swap"
        rel="stylesheet">
    <!-- font awesome style -->
    <link rel="stylesheet" href="{{asset('css/Admin/fontawesome.min.css') }}">
    <link rel="stylesheet" href="{{asset('css/Admin/all.min.css') }}">
    <!--css custome-->
    <link rel="stylesheet" href="{{asset('css/Admin/animate.css') }}">
    <link rel="stylesheet" href="{{asset('css/Admin/style.css')}}">
    @yield('style-libraries')
    {{--Styles custom--}}
    @yield('styles')
</head>

<body>
    <div id="global-loader">
        <div class="whirly-loader"> </div>
    </div>
    <div class="main-wrapper">
        @include('Admin.partial.header')

        @include('Admin.partial.sidebar')

        @yield('content')
    </div>
    {{--Scripts js custom--}}
    <script src="{{asset('js/Admin/main.js')}}"></script>
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
    <script src="{{asset('js/Admin/sweetalerts.min.js')}}">
    </script>
    <script src="{{asset('js/Admin/script.js')}}"></script>
    @yield('scripts')

</body>

</html>