@extends('Public.layouts.app')

@section('title', 'Double-N shop')

@section('content')
    <div class="container">
        <h1>Payment</h1>

        @if ($errors->any())
            <div class="alert alert-danger">
                {{ $errors->first() }}
            </div>
        @endif

        <form action="{{ route('payment.process') }}" method="POST">
            @csrf
            <button type="submit" class="btn btn-primary">Pay with PayPal</button>
        </form>
    </div>
@endsection
