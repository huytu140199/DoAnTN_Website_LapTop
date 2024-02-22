<!DOCTYPE html>
<html lang="en">

<head>
    @include('user.header')
</head>

<body>
    <main>
        <div class="home">
            <div class="sitebar" id="sitebar">
                <div class="sitebar_link-title">
                    {{-- @if (Auth::check())
                        @if (isset($user))
                        {{"thanhf coong ".$user}}
                        @endif
                    @else


                     @endif --}}


                    <p class="sitebar-item-title">Danh mục sản phẩm

                    </p>
                </div>
                <a href="/user/all_product" class="sitebar_link">
                    <p class="sitebar-item">Tất cả sản phẩm</p>

                </a>
                <a href="/user/brand/5" class="sitebar_link">
                    <p class="sitebar-item">Macbook</p>

                </a>
                <a href="/user/brand/1" class="sitebar_link">
                    <p class="sitebar-item">Laptop Dell</p>

                </a>
                <a href="/user/brand/2" class="sitebar_link">
                    <p class="sitebar-item">Laptop Asus</p>

                </a>
                <a href="/user/brand/4" class="sitebar_link">
                    <p class="sitebar-item">Laptop HP</p>

                </a>
                <a href="/user/brand/3" class="sitebar_link">
                    <p class="sitebar-item">Laptop Lenovo</p>

                </a>
                <a href="/user/categories/5" class="sitebar_link">
                    <p class="sitebar-item">Laptop Văn Phòng</p>

                </a>
                <a href="/user/categories/1" class="sitebar_link">
                    <p class="sitebar-item">Laptop Gaming</p>

                </a>
            </div>

            <div class="mainRight">
                <div class="home_swiper">
                    <div class="swiper mySwiper">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <img src="https://genk.mediacdn.vn/2019/4/23/photo-1-15560365277871628784452.jpg"
                                    alt="">
                            </div>
                            <div class="swiper-slide"><img
                                    src="https://laptopxachtay.com.vn/Images/Album/6dc964b0-3a41-4ac4-8113-4c726c793061.jpg?width=680&"
                                    alt=""></div>
                            <div class="swiper-slide"><img
                                    src="https://cdn.tgdd.vn/Files/2020/09/09/1288540/thumb_dell_800x450.jpg"
                                    alt="">
                            </div>
                            <div class="swiper-slide"><img
                                    src="https://kimlongcenter.com/upload/image/TOP%20laptop%20dell.png" alt="">
                            </div>
                        </div>
                        <div class="swiper-button-next "></div>
                        <div class="swiper-button-prev "></div>
                        <div class="swiper-pagination"></div>
                    </div>
                </div>
            </div>
        </div>

        <div class="content">
            <div class="layout_1">
                <div class="banner-text "><a href="/user/categories/5">LAPTOP VĂN PHÒNG BÁN CHẠY</a></div>
                <div class="layout_1-swiper">
                    <div class="swiper mySwiperLayout">

                        <div class="swiper-wrapper">
                            @if (!empty($products_office))
                                @foreach ($products_office as $key => $item)
                                    <div class="swiper-slide">
                                        <div class="layout_card">
                                            <div class="card-content card">
                                                <a href="user/product_detail/{{ $item->id_product }}"
                                                    class="img-product"><img src="{{ $item->image }}"
                                                        alt=""></a>
                                                <div class="card-code">{{ $item->id_product }}</div>

                                                <div class="card-title "> <br> <a
                                                        href="user/product_detail/{{ $item->id_product }}">
                                                        {{ $item->name }}<br>
                                                        RAM: {{ $item->RAM }} <br>
                                                        CPU: {{ $item->CPU }}</a></a>

                                                </div>
                                                <div class="card-price fs-4">{{ number_format($item->price) }} VNĐ</div>
                                                @if ($item->quantity == 0)
                                                    <div class="card-status2"><i class="fa-solid fa-check"></i>Hết
                                                        hàng</div>
                                                @else
                                                    <div class="card-status1"><i class="fa-solid fa-check"></i>Còn
                                                        hàng</div>
                                                @endif
                                            </div>
                                            @if ($item->quantity == 0)
                                                <a href="/user/muahang/{{ $item->id_product }}"><button disabled>Mua Hàng</button></a>

                                            @else
                                                <a href="/user/muahang/{{ $item->id_product }}"><button>Mua Hàng</button></a>
                                            @endif
                                        </div>
                                    </div>
                                @endforeach
                        </div>
                    @else
                        <tr>
                            <td colspan="7">lỗi</td>
                        </tr>
                        @endif
                        <div class="swiper-button-next"></div>
                        <div class="swiper-button-prev"></div>
                        <div class="swiper-pagination"></div>
                    </div>
                </div>
            </div>
            <div class="layout_2">
                <div class="banner-text "><a href="/user/categories/2">LAPTOP SINH VIÊN BÁN CHẠY</a></div>
                <div class="contentlayout1 hideContent1">
                    <div class="layout_2-content">
                        <div class="d-flex justify-content-center w-100">

                            <div class="rows ">
                                @if (!empty($products_student))
                                    @foreach ($products_student as $key => $item)
                                        <div cylass="rows-item">
                                            <div class="layout_card">
                                                <div class="card-content card">
                                                    <a href="user/product_detail/{{ $item->id_product }}"
                                                        class="img-product"><img src="{{ $item->image }}"
                                                            alt=""></a>
                                                    <div class="card-code">{{ $item->id_product }}</div>
                                                    <div class="card-title">
                                                        <a href="user/product_detail/{{ $item->id_product }}">
                                                            {{ $item->name }}<br>
                                                            RAM: {{ $item->RAM }} <br>
                                                            CPU: {{ $item->CPU }}</a>
                                                        </a>

                                                    </div>
                                                    <div class="card-price fs-4">{{ number_format($item->price) }} VNĐ
                                                    </div>
                                                    @if ($item->quantity == 0)
                                                        <div class="card-status2" style="padding-top: 10px"><i
                                                                class="fa-solid fa-check"></i>Hết
                                                            hàng
                                                        </div>
                                                    @else
                                                        <div class="card-status1" style="padding-top: 10px"><i
                                                                class="fa-solid fa-check"></i>Còn
                                                            hàng
                                                        </div>
                                                    @endif
                                                </div>
                                                @if ($item->quantity == 0)
                                                <a href="/user/muahang/{{ $item->id_product }}"><button disabled>Mua Hàng</button></a>

                                                @else
                                                    <a href="/user/muahang/{{ $item->id_product }}"><button>Mua Hàng</button></a>
                                                @endif
                                            </div>
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

                </div>
                <div class="show-more1">
                    <button class="btn-show">Xem Thêm</button>
                </div>

                <div class="contentlayout hideContent">
                    <div class="layout_3">
                        <div class="banner-text " style="margin-top: 1rem"><a href="/user/categories/1">LAPTOP GAMING
                                BÁN CHẠY</a></div>
                        <div class="layout_3-content  ">
                            <div class="d-flex justify-content-center w-100 ">

                                <div class="rows ">
                                    @if (!empty($products_gaming))
                                        @foreach ($products_gaming as $key => $item)
                                            <div cylass="rows-item">
                                                <div class="layout_card">
                                                    <div class="card-content card">
                                                        <a href="user/product_detail/{{ $item->id_product }}"
                                                            class="img-product"><img src="{{ $item->image }}"
                                                                alt=""></a>
                                                        <div class="card-code">{{ $item->id_product }}</div>
                                                        <div class="card-title">
                                                            <a href="user/product_detail/{{ $item->id_product }}">
                                                                {{ $item->name }}<br>
                                                                RAM: {{ $item->RAM }} <br>
                                                                CPU: {{ $item->CPU }}</a></a>

                                                        </div>
                                                        <div class="card-price fs-4">{{ number_format($item->price) }}
                                                            VNĐ
                                                        </div>
                                                        @if ($item->quantity == 0)
                                                            <div class="card-status2" style="padding-top: 10px"><i
                                                                    class="fa-solid fa-check"></i>Hết
                                                                hàng
                                                            </div>
                                                        @else
                                                            <div class="card-status1" style="padding-top: 10px"><i
                                                                    class="fa-solid fa-check"></i>Còn
                                                                hàng
                                                            </div>
                                                        @endif
                                                    </div>
                                                    @if ($item->quantity == 0)
                                                <a href="/user/muahang/{{ $item->id_product }}"><button disabled>Mua Hàng</button></a>

                                            @else
                                                <a href="/user/muahang/{{ $item->id_product }}"><button>Mua Hàng</button></a>
                                            @endif
                                                </div>
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


                    </div>

                </div>
                <div class="show-more">
                    <button class="btn-show" style="margin-bottom: 25px">Xem Thêm</button>
                </div>
            </div>
    </main>
    <div id="popup-centrer">
        <div class="popUpBannerBox">
            <div class="popUpBannerInner">
                <div class="popUpBannerContent">
                    <p><a href="#" class="closeButton"><i class="fas fa-window-close"></i></a></p>
                    <a href="/user/categories/1"><img
                            src="https://i.ytimg.com/vi/BAZxv8brDRE/maxresdefault.jpg" /></a>
                    <div class="buton-popup-center">
                        <a href="/user/categories/1" class="button-popup">Mua ngay !</a>
                    </div>
                </div>
            </div>
        </div>

    </div>
    @include('user.support')
    <div title="Về đầu trang" id="top-up">
        <i class="fas fa-arrow-circle-up"></i>
    </div>
    <div> @include('user.footer')</div>



</body>

</html>

<script src="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.js"></script>


<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
    integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
</script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js"
    integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js"
    integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
</script>
<script src="http://code.jquery.com/jquery-1.11.0.min.js"></script>
<script src="{{ asset('js/user/home.js') }}"></script>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.min.js"></script>

<script>
    $(".show-more button").on("click", function() {
        var $this = $(this);
        var $content = $this.parent().prev("div.contentlayout");
        var linkText = $this.text().toUpperCase();

        if (linkText === "XEM THÊM") {
            linkText = "Thu gọn";
            $content.switchClass("hideContent", "showContent", 400);
        } else {
            linkText = "Xem thêm";
            $content.switchClass("showContent", "hideContent", 400);
        };

        $this.text(linkText);
    });
</script>
<script>
    $(".show-more1 button").on("click", function() {
        var $this = $(this);
        var $content = $this.parent().prev("div.contentlayout1");
        var linkText = $this.text().toUpperCase();

        if (linkText === "XEM THÊM") {
            linkText = "Thu gọn";
            $content.switchClass("hideContent1", "showContent1", 400);
        } else {
            linkText = "Xem thêm";
            $content.switchClass("showContent1", "hideContent1", 400);
        };

        $this.text(linkText);
    });
</script>
