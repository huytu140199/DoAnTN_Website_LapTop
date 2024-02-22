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
    <div class="dir_pay"><a href="/user">Trang chủ /</a> <b>Thanh toán đơn hàng</b></div>

    <main id="pay" class="container" style="padding-top: 10px">


        @if (Cart::count() > 0)
            <table id="table-pay-product">
                <thead>
                    <tr>

                        <th style="width:30%;">Sản Phẩm</th>
                        <th style="text-align: center; width: 20%;">Số lượng</th>
                        <th style="width:15%;">Đơn giá</th>
                        <th style="width:15%;">Thành tiền</th>
                        <th style="text-align: center; width: 10%;">Xóa</th>
                    </tr>
                </thead>
                <tbody>

                    @if (!empty($content))
                        @foreach ($content as $key => $item)
                            <tr>


                                <td>{{ $item->name }} </td>

                                <td>
                                    <div class="pay-product-button">
                                        <a href="/user/giohang/tru/{{ $item->rowId }}/{{ $item->qty }}"><i
                                                id="pay-product-btn-left" class="fa-regular fa-square-minus"></i></a>
                                        <span id="product-pay-count">{{ $item->qty }} </span>
                                        <a href="/user/giohang/cong/{{ $item->rowId }}/{{ $item->qty }}"><i
                                                class="fa-regular fa-square-plus"></i></a>
                                    </div>

                                </td>
                                <td>{{ number_format($item->price, 0) }} VNĐ</td>
                                <td>{{ number_format($item->price * $item->qty, 0) }} VNĐ</td>

                                <td style="text-align: center;"><a href="/user/giohang/xoa/{{ $item->rowId }}"><i
                                            class="fa-sharp fa-solid fa-trash"></i></a> </td>


                            </tr>
                        @endforeach
                    @else
                        <tr>
                            <td colspan="7">lỗi</td>
                        </tr>
                    @endif
                </tbody>
            </table>

            <form class="pay-content" method="POST" action="/user/giohang/dathang">
                <div class="pay-info">
                    <div class="pay-info-title">
                        <b>Thông tin nhận hàng</b>
                    </div>
                    <hr style="height:1px;border:none;color:#333;background-color:#333;">
                    <div class="form-control-pay">
                        <label for="name">Họ tên người nhận (<span style="color: red;">*</span>)</label>
                        <input minlength="6" pattern="[A-Za-z]{*}" id="namePay" required type="text" name="namePay">
                    </div>
                    <div class="form-control-pay">
                        <label for="address">Địa chỉ cụ thể (<span style="color: red;">*</span>)</label>
                        <input   id="address" type="text" name="address">
                    </div>
                    <div class="form-address">
                        <select name="city" id="city">
                        </select>
                        <select name="ward" id="ward">
                        </select>
                        <select name="district" id="district">

                        </select>
                    </div>


                    <div class="note-form d-flex mt-4 flex-column" style="width: 100%;">
                        <label for="" style="width: 100%;">Ghi chú </label>
                        <textarea name="" id="note"></textarea>
                    </div>
                    <div class="d-flex" style="width: 100%;">
                        <div class="form-control-pay" style="width: 45%;">
                            <label for="">Số điện thoại (<span style="color: red;">*</span>)</label>
                            <input   pattern="[0-9]{10}" type="text" name="phone" id="phone">
                        </div>
                        <div class="form-control-pay" style="width: 45%; margin-left: 10%">
                            <label for="">Email</label>
                            <input type="email" type="text" name="email" id="email">
                        </div>
                    </div>
                    @csrf
                </div>
                <div class="pay-bill">
                    <div class="pay-info-title"><b>Hóa đơn của bạn</b></div>
                    <hr style="height:1px;border:none;color:#333;background-color:#333;">
                    <table>
                        <thead>
                            <tr>
                                <th style="text-align: left">Sản phẩm</th>
                                <th style="width: 30%;">Số lượng</th>
                                <th>Đơn giá</th>
                            </tr>
                        </thead>
                        <tbody>
                            @if (!empty($content))
                                @foreach ($content as $key => $item)
                                    <tr>
                                        <td style="text-align: left">{{ $item->name }} </td>
                                        <td>{{ $item->qty }} </td>
                                        <td>{{ number_format($item->price) }} VNĐ</td>

                                    </tr>
                                @endforeach
                                <tr>
                                    <td style="text-align: left">Tổng tiền</td>
                                    <td> </td>
                                    <td>{{ $totalPrice }}VNĐ</td>

                                </tr>
                            @else
                                <tr>
                                    <td colspan="7">lỗi</td>
                                </tr>
                            @endif
                        </tbody>
                    </table>

                    <div class="type-pay">
                        <div class="type-pay-title">
                            <b>Lựa chọn hình thức thanh toán:</b>
                        </div>
                        <div class="select-type-pay">
                            <input type="radio" name="bank" id="code" checked>
                            <label for="code">COD</label>
                        </div>
                        <div class="select-type-pay">
                            <input type="radio" name="bank" id="bank">
                            <label for="code">Chuyển khoản ngân hàng</label>
                        </div>
                        <button class="btn-order" type="submit"> Đặt hàng</button>
                    </div>
                </div>

            </form>

            {{-- <div class="pay-banner">
                <div class="pay-banner-content d-flex flex-column">
                    <b>Đặt hàng thành công</b>
                    <span>Mã số đơn hàng của bạn là <span style="color: orangered">abcded</span></span>
                </div>
                <div class="pay-banner-acctions">
                    <button><a href="#">IN HÓA ĐƠN</a></button>
                    <button><a href="/user">TIẾP TỤC MUA HÀNG</a></button>
                </div>
            </div> --}}
        @else
            <div class="cart-is-empty-box">
                <div class="cart-is-empty-box-img">
                    <img src="https://bizweb.dktcdn.net/100/333/755/themes/688335/assets/empty_cart.png?1647314197820"
                        alt="" title="Giỏ hàng rỗng">
                </div>
                <div class="btn-keep-buying">
                    <button class="btn btn-success"><a href="/user">GIỎ HÀNG TRỐNG</a></button>
                </div>
            </div>

        @endif
    </main>
    @include('user.support')
    @include('user.footer')

</body>

</html>
<script src="{{ asset('js/user/pay.js') }}"></script>
<script src="{{ asset('js/user/home.js') }}"></script>
