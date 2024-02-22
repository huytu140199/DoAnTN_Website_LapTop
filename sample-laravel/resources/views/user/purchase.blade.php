<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Trạng thái mua hàng</title>
    <link rel="stylesheet" href="{{ asset('css/user/purchase.css') }}">
    <link rel="stylesheet" href="{{ asset('css/user/icon.css') }}">
</head>

<body>
    @include('user.header')

    <div class="container-purchase">
        <div class="d-flex justify-content-center">
            <div class="purchase-main">
                <div class="purchase-header">
                    <div class="purchase-header-top flex-center">
                        <div class="flex-1 purchase-header-left"><a href="">Trở lại </a></div>
                        <div class="flex-1"></div>
                        <div class="flex-1 text-uppercase purchase-header-right">
                            <span> ID ĐƠN HÀNG 1233DN53</span>
                            <span>giao hàng thành công</span>
                        </div>
                    </div>
                    <div class="purchase-header-bottom flex-center">
                        <ul class="purchase-menu-icon flex">
                            <li class="purchase-item">
                                <div class="purchase-icon">
                                    <div class="item-icon">
                                        <div class="mi mi-60 "><i class="fa-solid fa-file"></i></div>

                                    </div>
                                </div>
                                <div class="purchase-item-title">Chờ xử lý</div>
                                <div class="purchase-item-time">10:10</div>
                                <div class="purchase-item-date">09-10-2022</div>
                            </li>
                            <li class="purchase-line flex-1">
                                <div class="line"></div>
                            </li>
                            <li class="purchase-item">
                                <div class="purchase-icon">
                                    <div class="item-icon">
                                        <div class="mi mi-60 icon-done"><i class="fa-solid fa-check-double"></i></i>
                                        </div>
                                    </div>
                                </div>
                                <div class="purchase-item-title">Đang chuẩn bị hàng</div>
                                <div class="purchase-item-time">10:10</div>
                                <div class="purchase-item-date">09-10-2022</div>
                            </li>
                            <li class="purchase-line flex-1">
                                <div class="line"></div>
                            </li>
                            <li class="purchase-item">
                                <div class="purchase-icon">
                                    <div class="item-icon">
                                        <div class="mi mi-60 icon-cargo-truck"><i
                                                class="fa-sharp fa-solid fa-truck"></i></div>
                                    </div>
                                </div>
                                <div class="purchase-item-title">Đang giao </div>
                                <div class="purchase-item-time">19:00</div>
                                <div class="purchase-item-date">20-10-2022</div>
                            </li>
                            <li class="purchase-line flex-1">
                                <div class="line"></div>
                            </li>
                            <li class="purchase-item">
                                <div class="purchase-icon">
                                    <div class="item-icon">
                                        <div class="mi mi-60 icon-star"><i class="fa-solid fa-star"></i></div>
                                    </div>
                                </div>
                                <div class="purchase-item-title">Đã giao</div>
                                <div class="purchase-item-time">10:10</div>
                                <div class="purchase-item-date">09-10-2022</div>
                            </li>
                        </ul>
                    </div>
                </div>



                <div class="purchase-content">
                    <div class="purchase-content-top flex">
                        <div class="purchase-content-top-left flex-1">
                            <div class="d-flex justify-content-center">
                                <span class="purchase-content-text">Vui lòng kiểm tra tất cả các sản phẩm trong đơn hàng
                                    trước khi xác nhận “ Đã nhận được
                                    hàng
                                    “ . nếu hàng nhận được bạn có vấn đề , bạn có thể gửi yêu cầu trả hàng</span>
                            </div>
                        </div>
                        <div class="purchase-content-top-right">
                            <button class="btn btn-danger">Đã nhận hàng</button>
                            <button class="btn btn btn-outline-secondary btn-light">Hủy đơn hàng</button>
                            <button class="btn btn-secondary">Yêu cầu trả hàng</button>
                            <button class="btn btn-secondary">Liên hệ người bán</button>
                        </div>
                    </div>
                    <div class="purchase-content-bottom d-flex">
                        <div class="purchase-content-bottom-left flex-1">
                            <div class="purchase-content-bottom-title font-weight-500 fs-4">Địa chỉ nhận hàng</div>
                            <div class="purchase-username font-weight-500 mt-3">Nguyễn Văn Thanh</div>
                            <div class="purchase-user-phone text-color-light">(+84) 9643221234</div>
                            <div class="purchase-user-place text-color-light">
                                256 ngõ 10 Nguyễn Xiển, Thanh Xuân, Cầu Giấy, Hà Nội
                            </div>
                        </div>
                        <div class="purchase-content-bottom-right flex-1">
                            <div class=""></div>

                            <div class="mt-5">
                                <div class="purchase-content-bottom-title font-weight-500 fs-4"
                                    style="padding-left: 2rem">Tình trạng đơn hàng
                                </div>
                                <ul class="purchase-menu pt-4">
                                    <li class="d-flex align-items-center">
                                        <div class="item-radio-active me-2"></div>
                                        <div class="font-weight-500 me-4">9:25 09-10-2022</div>
                                        <div class="text-primary">Giao hàng thành công</div>
                                    </li>
                                    <li class="d-flex align-items-center mt-2">
                                        <div class="item-radio-active me-2"></div>
                                        <div class="font-weight-500 me-4">9:25 09-10-2022</div>
                                        <div class="text-color-light">Đang giao hàng</div>
                                    </li>
                                    <li class="d-flex align-items-center mt-2">
                                        <div class="item-radio-active me-2"></div>
                                        <div class="font-weight-500 me-4">9:25 09-10-2022</div>
                                        <div class="text-color-light">Đơn hàng đã đến kho Thanh Xuân</div>
                                    </li>
                                    <li class="d-flex align-items-center mt-2">
                                        <div class="item-radio-active me-2"></div>
                                        <div class="font-weight-500 me-4">9:25 09-10-2022</div>
                                        <div class="text-color-light">Đơn hàng đã xuất kho</div>
                                    </li>
                                    <li class="d-flex align-items-center mt-2">
                                        <div class="item-radio-active me-2"></div>
                                        <div class="font-weight-500 me-4">9:25 09-10-2022</div>
                                        <div class="text-color-light">Đơn hàng đã đến kho SOC</div>
                                    </li>
                                    <li class="d-flex align-items-center mt-2">
                                        <div class="item-radio-active me-2"></div>
                                        <div class="font-weight-500 me-4">9:25 09-10-2022</div>
                                        <div class="text-color-light">Đơn hàng đã xuất kho</div>
                                    </li>
                                    <li class="d-flex align-items-center mt-2">
                                        <div class="item-radio-active me-2"></div>
                                        <div class="font-weight-500 me-4">9:25 09-10-2022</div>
                                        <div class="text-color-light">Lấy hàng thành công</div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>




                <div class="purchase-footer mt-3 mb-5">
                    <div class="purchase-footer-title">Surface laptop Go</div>
                    <div class="purchase-footer-main d-flex">
                        <div class="purchase-footer-main-left me-5">
                            <img src="https://img.websosanh.vn/v10/users/review/images/zb7yqhofsl4sl/1568434178299_8049307.jpg?compress=85"
                                alt="">
                        </div>
                        <div class="purchase-footer-main-right flex-1">
                            <div class="font-weight-500">Surface Laptop Go 12.4” Multi - Touch - Intel Core i5 - 1035G1
                                /
                                8GB / 128GB (Sandstone)</div>
                            <div class="d-flex justify-content-between mt-4">
                                <div class="text-secondary">Phân loại hàng: Màu hồng ,Số lượng x1</div>
                                <div class="text-danger font-weight-500"> 17.990.000VNĐ</div>
                            </div>
                        </div>
                    </div>
                    <div class="">
                        <table class="m-table">
                            <tr>
                                <td class="font-weight-500">Tổng số tiền hàng</td>
                                <td class="text-danger font-weight-500">17.990.000VNĐ</td>
                            </tr>
                            <tr>
                                <td class="font-weight-500">Phí vận chuyển</td>
                                <td class="text-danger font-weight-500">30.000VNĐ</td>
                            </tr>
                            <tr>
                                <td class="font-weight-500">Tổng số tiền</td>
                                <td class="text-danger font-weight-500">18.020.000VNĐ</td>
                            </tr>
                        </table>
                    </div>
                </div>

            </div>
        </div>
        @include('user.support')
        @include('user.footer')
    </div>



</body>

</html>
<script src="{{ asset('js/user/home.js') }}"></script>
