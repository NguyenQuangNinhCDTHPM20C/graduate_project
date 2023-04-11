@extends('Public.layouts.app')

@section('title', 'Double-N shop')
@section('styles')
<link href="css/Public/auth/stylelogin.css" rel="stylesheet">
@stop
@section('content')
<!-- form section start -->
<section class="w3l-hotair-form">
    <h1></h1>
    <div class="container">
        <!-- /form -->
        <div class="workinghny-form-grid">
            <div class="main-hotair">
                <div class="content-wthree">
                    <h2>LOG IN</h2>
                    <form action="#" method="post">
                        <input type="text" class="text" name="text" placeholder="User Name" required="" autofocus>
                        <input type="password" class="password" name="password" placeholder="User Password" required=""
                            autofocus>
                        <div class="split">
                            <p>OR</p>
                        </div>
                        <div class="d-flex iconlog">
                            <a class=" btn-square mr-2 btn-link google" href="#"><img
                                    src="https://cdn-icons-png.flaticon.com/512/2991/2991148.png" alt=""
                                    style="width:50%"></a>
                            <a class="btn-square mr-2 btn-link facebook" href="#"><i class="fab fa-facebook-f"></i></a>
                        </div>

                        <button class="btnlog" type="submit">Log In</button>
                    </form>
                    <p class="account">Don't have an account? <a href="{{route('logup')}}">Register</a></p>
                </div>
                <div class="w3l_form align-self">
                    <div class="left_grid_info">
                        <img src="images/1.png" alt="" class="img-fluid">
                    </div>
                </div>
            </div>
        </div>
        <!-- //form -->
    </div>
</section>
<!-- //form section start -->
@stop
@section('scripts')
@stop