@extends('Public.layouts.app')

@section('title', 'Double-N shop')

@section('content')
    <div class="container">
        <h1>Payment Status</h1>

        @if ($errors->any())
            <div class="alert alert-danger">
                @foreach ($errors->all() as $error)
                    {{ $error }}
                @endforeach
            </div>
        @endif

        @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        {{-- <div class="alert alert-info">
            Payment status: {{ $success }}
        </div> --}}
    </div>
@endsection
