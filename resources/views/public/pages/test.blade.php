@extends('Public.layouts.app')

@section('title', 'Double-N shop')

@section('styles')
    <style>
        .jq-toast-wrap {
            z-index: 900000 !important;
            display: block;
            position: fixed;
            width: 250px;
            pointer-events: none !important;
            letter-spacing: normal;
            z-index: 2000000005 !important;
        }

        .jq-toast-single {
            display: block;
            width: 100%;
            padding: 10px;
            margin: 0 0 5px;
            border-radius: 4px;
            font-size: 12px;
            font-family: arial, sans-serif;
            line-height: 17px;
            position: relative;
            pointer-events: all !important;
            background-color: #444;
            color: #fff;
        }

        .jq-toast-loader {
            display: block;
            position: absolute;
            top: -2px;
            height: 5px;
            width: 0;
            left: 0;
            border-radius: 5px;
            background: red;
        }

        .close-jq-toast-single {
            position: absolute;
            top: 3px;
            right: 7px;
            font-size: 14px;
            cursor: pointer;
        }

        .jq-toast-wrap .cart-msg {
            color: #000;
            margin: -11px;
            padding: 12px;
            background: #fff 0% 0% no-repeat padding-box;
            box-shadow: 3px 4px 6px #00000029;
            border-radius: 6px;
            text-align: center;
            width: 280px !important;
            max-width: 280px !important;
        }

        .jq-toast-wrap .cart-msg p {
            margin: 0 0 15px 0;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .jq-toast-wrap .cart-msg p i.text-red {
            background: #fd475a;
        }

        .jq-toast-wrap .cart-msg p i {
            font-size: 9px;
            background: #009981 0% 0% no-repeat padding-box;
            width: 18px;
            height: 18px;
            line-height: 18px;
            text-align: center;
            color: #fff;
            border-radius: 18px;
            display: block;
            margin-right: 5px;
        }

        .jq-toast-wrap .cart-msg a.button-red {
            background: #fd475a;
        }

        .jq-toast-wrap .cart-msg a.button {
            display: block;
            background: #009a82 0% 0% no-repeat padding-box;
            padding: 8px 10px;
            font-weight: bold;
            color: #fff;
            font-size: 12px;
            border-radius: 3px;
            text-align: center;
        }

        .jq-toast-single {
            text-align: left;
            display: none;
        }
    </style>
@endsection
@section('content')
    <button id="showToastBtn">show</button>
    <div class="jq-toast-wrap" role="alert" aria-live="polite" style="left: 643px; bottom: 20px;">
        <div class="jq-toast-single"><span class="jq-toast-loader"></span><span class="close-jq-toast-single">×</span>
            <div class="cart-msg">
                <p><i class="fa-solid fa-check"></i> <span>Đã xóa sản phẩm khỏi danh sách yêu
                        thích</span></p><a class="button button-red" href="/account/wishlist">Quản lý danh sách</a>
            </div>
        </div>
    </div>
@endsection
@section('scripts')
    <script>
        const showToastBtn = document.getElementById("showToastBtn");
        const toast = document.querySelector(".jq-toast-single");

        showToastBtn.addEventListener("click", () => {
            toast.style.display = "block"; // Hiển thị thông báo

            setTimeout(() => {
                toast.style.display = "none"; // Ẩn thông báo sau 10 giây
            }, 5000);
        });
    </script>

@endsection
