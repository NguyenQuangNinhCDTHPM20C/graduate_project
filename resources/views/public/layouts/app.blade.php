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
    <link href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.1.4/toastr.css" rel="stylesheet" />
    @yield('styles')
</head>

<body>
    @php
        use Illuminate\Support\Str;
    @endphp
    <!-- Messenger Plugin chat Code -->

    <div id="fb-root"></div>
    <script async defer crossorigin="anonymous"
        src="https://connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v17.0&appId=1284707605765260&autoLogAppEvents=1"
        nonce="HZS5fH7a"></script>
    @include('Public.partial.header')

    @yield('slider')

    @yield('content')

    <div class="hotline">
        <div>
            <strong>Bạn cần hỗ trợ?</strong>
            <a class="text-decoration-none" href="tel:{{ $settings->phone_number }}"><i class="fas fa-phone-alt"></i>
                <strong>{{ $settings->phone_number }}</strong></a>
        </div>
    </div>

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
    <!-- JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.1.0/js/toastr.js"></script>
    <script>
        $(document).ready(function() {
            toastr.options.timeOut = 5000;
            @if (Session::has('error'))
                toastr.error('{{ Session::get('error') }}');
            @elseif (Session::has('success'))
                toastr.success('{{ Session::get('success') }}');
            @elseif (Session::has('info'))
                toastr.info('{{ Session::get('info') }}');
            @endif
            @php
                session()->forget(['success', 'error', 'info']);
            @endphp
        });
    </script>
    @yield('scripts')

</body>

</html>
