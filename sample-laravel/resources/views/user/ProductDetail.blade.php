<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Chi tiết sản phẩm</title>
    <link rel="stylesheet" href="{{ asset('css/user/product-detail.css') }}">
    <link rel="stylesheet" href="{{ asset('css/user/icon.css') }}">
</head>

<body>
    @include('user.header')


    <div class="product-detail-box">
        <div class="d-flex  justify-content-center">
            <div class="product-detail">
                @if (!empty($products_detail))
                    @foreach ($products_detail as $key => $item)
                        <div class="router-text mb-3 fs-4"><a href="/user">Trang chủ</a> /
                            <b>{{ $item->name }}</b>
                        </div>

                        <div class="product-detail-content d-flex">

                            <div class="product-detail-content-left d-flex flex-column me-4">
                                <div class="product-detail-img mag magnify">
                                    <img data-toggle="magnify" src="{{ $item->image }}" alt="">
                                </div>
                                <div class="product-detail-insurance">
                                    <ul class="insurance-menu">
                                        <li class="insurance-item d-flex">
                                            <div class="mi mi-24 icon-reload me-2"></div>
                                            <div>Hư gì đổi nấy <b>12 tháng</b> (miễn phí tháng đầu)</div>
                                        </li>
                                        <li class="insurance-item d-flex">
                                            <div class="mi mi-24 icon-reload me-2"></div>
                                            <div>Bộ sản phẩm gồm: Thùng máy, Sạc Laptop, Cáp sạc</div>
                                        </li>
                                        <li class="insurance-item d-flex">
                                            <div class="mi mi-24 icon-reload me-2"></div>
                                            <div>Bảo hành chính hãng laptop <b>1 năm</b> tại các trung tâm bảo hành hãng
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="product-detail-content-right d-flex flex-column flex-1">
                                <div class="mt-4 font-weight-bold">[Mới 100% Full Box] Laptop Dell Precision 5760 -
                                    KJ37C -
                                    {{ $item->CPU }}</div>
                                <div class="product-detail-price mt-4 fs-2">{{ number_format($item->price) }} VNĐ</div>
                                <div class="mt-4">
                                    {{ $item->description }} <br>
                                    CPU: {{ $item->CPU }}<br>
                                    RAM: {{ $item->RAM }}<br>
                                    Ổ cứng: {{ $item->capacity }}<br>
                                </div>
                                <div style="display:flex">Số lượng: <p id="count"> {{ $item->quantity }}</p><br>
                                </div>

                                <div class="d-flex mt-4 flex-row align-items-center">
                                    <div class="pay-product-button d-flex flex-row">
                                        <button id="pay-product-btn-left" class="m-btn-apart me-1">-</button>
                                        <input id="product-pay-count" class="fs-4 me-1" value="1"
                                            style="width: 40px; text-align: center; border: none" name="quanty">
                                        <button id="pay-product-btn-right" class="m-btn-add me-5">+</button>
                                    </div>
                                    <div class="flex-1 d-flex">
                                        @if ($item->quantity == 0)
                                            <button class="ms-btn flex-1" style="background-color: gray" disabled>

                                                Đang hết hàng


                                            </button>
                                        @else
                                        {{-- <script>
                                            function textthaydoi() {
                                                 var value = $( this ).val();
                                                 $( "a#cong" ).text( value );
                                             }

                                             //Bắt sự kiện keyup của textbox
                                             $( "#product-pay-count" ).keyup(textthaydoi);

                                             //Cho #inputext phát sinh một sự kiện keyup ban đầu
                                             $( "#product-pay-count" ).keyup();
                                         </script> --}}
                                             <a class=" ms-btn flex-2" style="margin-left: 20px; text-align: center"
                                                href="/user/giohang/them/{{ $item->id_product }}" id="them">Thêm vào giỏ
                                                hàng</a>

                                        @endif
                                    </div>
                                </div>
                            </div>

                        </div>
                    @endforeach
                @else
                    <tr>
                        <td colspan="7">lỗi</td>
                    </tr>
                @endif

                <div class="product-detail-comment">
                    <div class="detail-comment">
                        <div class="product-detail-comment-title fs-4">
                            Phản hồi về sản phẩm
                        </div>
                        <ul class="comment-menu">
                            <li class="comment-item">
                                <div class="comment-item-author">
                                    <span class="item-author">Thiện</span>
                                    <span class="comment-item-place">Đã mua tại LAPRIK </span>
                                </div>
                                <div class="comment-content">Sẽ giới thiệu cho bạn bè, người thân </div>
                                <div class="comment-time">Đã phản hồi 1 tuần trước</div>
                            </li>
                            <li class="comment-item">
                                <div class="comment-item-author">
                                    <span class="item-author">Dũng</span>
                                    <span class="comment-item-place">Đã mua tại LAPRIK </span>
                                </div>
                                <div class="comment-content">Sẽ giới thiệu cho bạn bè, người thân </div>
                                <div class="comment-time">Đã phản hồi 1 tuần trước</div>
                            </li>
                            <li class="comment-item">
                                <div class="comment-item-author">
                                    <span class="item-author">Khánh</span>
                                    <span class="comment-item-place">Đã mua tại LAPRIK </span>
                                </div>
                                <div class="comment-content">Sẽ giới thiệu cho bạn bè, người thân </div>
                                <div class="comment-time">Đã phản hồi 1 tuần trước</div>
                            </li>
                            <li class="comment-item comment-item-input">
                                <div class="comment-item-author">
                                    <span class="item-author">User</span>
                                    <span class="comment-item-place">Đã mua tại LAPRIK </span>
                                </div>
                                <div class="comment-content"><input type="text" placeholder="Viết bình luận"> </div>

                            </li>
                        </ul>

                        <div class="d-flex mt-4 mt-5 comment-buttons justify-content-center">
                            <button class="btn btn-danger me-5 btn-w-369">Viết đánh giá</button>
                            <button class="btn btn-secondary btn-more-comment">Xem 7 đánh giá khác</button>
                        </div>
                    </div>
                </div>


                <div class="related-products-title fs-3">
                    <span>Sản phẩm liên quan</span>
                </div>

                <div class="related-products-box d-flex flex-row mb-3">
                    @if (!empty($products_relate))
                        @foreach ($products_relate as $key => $item)
                            <div class="item-related-products d-flex flex-column me-4">

                                <div class="related-products-img">
                                    <a href="/user/product_detail/{{ $item->id_product }}"> <img
                                            src="{{ $item->image }}" alt=""></a>
                                </div>
                                <div class="related-products-code d-flex  mt-1 mb-3">
                                    <div>{{ $item->id_product }}</div>
                                </div>
                                <div class="card-title-product">
                                    <a href="/user/product_detail/{{ $item->id_product }}"> {{ $item->name }}<br>
                                        RAM: {{ $item->RAM }} <br>
                                        CPU: {{ $item->CPU }}</a></a>

                                </div>
                                <div class="fs-4 item-related-price mt-2"> {{ number_format($item->price) }} VNĐ</div>
                                @if ($item->quantity == 0)
                                    <div class="card-status2"><i class="fa-solid fa-check"></i>Hết
                                        hàng
                                    </div>
                                @else
                                    <div class="card-status1"><i class="fa-solid fa-check"></i>Còn
                                        hàng
                                    </div>
                                @endif

                                <a href="/user/muahang/{{ $item->id_product }}">
                                    <div class="item-related-buy">
                                        Mua hàng
                                    </div>
                                </a>
                            </div>
                        @endforeach
                </div>
            @else
                <tr>
                    <td colspan="7">lỗi</td>
                </tr>
                @endif
            </div>
        </div>
        @include('user.footer')
    </div>
</body>

</html>
<script src="{{ asset('js/user/productdetail.js') }}"></script>

<script>
    ! function($) {

        "use strict";

        var Magnify = function(element, options) {
            this.init('magnify', element, options)
        }

        Magnify.prototype = {

            constructor: Magnify,
            init: function(type, element, options) {
                    var event = 'mousemove',
                        eventOut = 'mouseleave';

                    this.type = type
                    this.$element = $(element)
                    this.options = this.getOptions(options)
                    this.nativeWidth = 0
                    this.nativeHeight = 0

                    this.$element.wrap('<div class="magnify" \>');
                    this.$element.parent('.magnify').append('<div class="magnify-large" \>');
                    this.$element.siblings(".magnify-large").css("background", "url('" + this.$element.attr("src") +
                        "') no-repeat");


                    this.$element.parent('.magnify').on(event + '.' + this.type, $.proxy(this.check, this));
                    this.$element.parent('.magnify').on(eventOut + '.' + this.type, $.proxy(this.check, this));
                }

                ,
            getOptions: function(options) {
                    options = $.extend({}, $.fn[this.type].defaults, options, this.$element.data())

                    if (options.delay && typeof options.delay == 'number') {
                        options.delay = {
                            show: options.delay,
                            hide: options.delay
                        }
                    }

                    return options
                }

                ,
            check: function(e) {
                var container = $(e.currentTarget);
                var self = container.children('img');
                var mag = container.children(".magnify-large");
                if (!this.nativeWidth && !this.nativeHeight) {
                    var image = new Image();
                    image.src = self.attr("src");

                    this.nativeWidth = image.width;
                    this.nativeHeight = image.height;

                } else {

                    var magnifyOffset = container.offset();
                    var mx = e.pageX - magnifyOffset.left;
                    var my = e.pageY - magnifyOffset.top;

                    if (mx < container.width() && my < container.height() && mx > 0 && my > 0) {
                        mag.fadeIn(200);
                    } else {
                        mag.fadeOut(200);
                    }

                    if (mag.is(":visible")) {
                        var rx = Math.round(mx / container.width() * this.nativeWidth - mag.width() / 2) * -1;
                        var ry = Math.round(my / container.height() * this.nativeHeight - mag.height() / 2) * -
                            1;
                        var bgp = rx + "px " + ry + "px";

                        var px = mx - mag.width() / 3;
                        var py = my - mag.height() / 3;

                        mag.css({
                            left: px,
                            top: py,
                            backgroundPosition: bgp
                        });
                    }
                }

            }
        }



        $.fn.magnify = function(option) {
            return this.each(function() {
                var $this = $(this),
                    data = $this.data('magnify'),
                    options = typeof option == 'object' && option
                if (!data) $this.data('tooltip', (data = new Magnify(this, options)))
                if (typeof option == 'string') data[option]()
            })
        }


        $.fn.magnify.Constructor = Magnify

        $.fn.magnify.defaults = {
            delay: 0
        }



        $(window).on('load', function() {
            $('[data-toggle="magnify"]').each(function() {
                var $mag = $(this);
                $mag.magnify()
            })
        })

    }(window.jQuery);
</script>
