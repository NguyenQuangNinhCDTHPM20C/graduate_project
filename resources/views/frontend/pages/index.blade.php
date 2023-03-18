@extends('frontend.layouts.app')

@section('title', 'Double-N shop')

@section('style-libraries')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick-theme.css">
@stop

@section('styles')
    {{--custom css item suggest search--}}
    <style>
        .autocomplete-group { padding: 2px 5px; }
    </style>
@stop

@section('slider')
            <!-- this is slider -->
            @yield('slider')
            @include('frontend.partial.slider')
@stop

@section('why_us')
            <!-- this is why us -->
            @yield('why_us')
            @include('frontend.partial.why_us')
@stop

@section('content')
            <!-- this is content -->
            @yield('content')
            @include('frontend.components.product')
@stop

@section('client')
            <!-- this is comment -->
            @yield('client')
            @include('frontend.partial.client')
@stop

@section('scripts')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.js"></script>
    {{--jquery.autocomplete.js--}}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.devbridge-autocomplete/1.4.10/jquery.autocomplete.min.js"></script>
    {{--quick defined--}}
    <script>
      $(function () {
          // your custom javascript
      });
   </script>
@stop