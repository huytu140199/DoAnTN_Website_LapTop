<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Thanh toán giỏ hàng</title>
    <link rel="stylesheet" href="{{ asset('css/user/purchase.css') }}">
    <link rel="stylesheet" href="{{ asset('css/user/icon.css') }}">
    <link rel="stylesheet" href="{{ asset('css/user/pay.css') }}">
</head>

<body style="background-color: #F5F5F5">
    @include('user.header')

    <main id="pay" class="container">


        <div class="pay-success">
            <div>
                <img src="https://shopta.vn/images/2015/11/dat-hang-thanh-cong.jpg" alt="">
            </div>
            {{-- <span>Mã số đơn hàng của bạn là <span style="color: orangered">abcded</span></span> --}}
            <div class="pay-banner-acctions">
                <button class="button-pay"><a href="#">IN HÓA ĐƠN</a></button>
                <a class="button-pay" href="/user">TIẾP TỤC MUA HÀNG</a>
            </div>
        </div>




    </main>
    @include('user.support')
    @include('user.footer')

</body>

</html>
<script src="{{ asset('js/user/pay.js') }}"></script>
<script src="{{ asset('js/user/home.js') }}"></script>
