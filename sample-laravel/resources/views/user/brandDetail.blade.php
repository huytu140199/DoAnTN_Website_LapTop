<!DOCTYPE html>
<html lang="en">

<head>
    @include('user.header')
    <title>Tất cả sản phẩm</title>
</head>

<body>
    <main style="padding-top: 80px">
        <div class="content">
            <div id="products">
                <div class="dir">
                    <a href="/user">Trang chủ /</a> {{ $title }}
                </div>
                <div class="banner_products">
                    <img src="https://laptop88.vn/media/news/2707_trum-laptop-uu-dai-sinh-vien-2022.jpg" alt="">
                    <img src="https://bizweb.dktcdn.net/100/386/607/articles/banner-slide-2.jpg?v=1645442355823"
                        alt="">
                </div>


            </div>
        </div>
        <div class="layout_2" style="margin-top: 30px;margin-bottom: 50px">

            <div class="layout_2">

                <div class="layout_2-content">
                    <div class="d-flex justify-content-center w-100">
                        <div class="rows " style="margin-left: 35px">
                            @if (!empty($brand_detail))
                                @foreach ($brand_detail as $key => $item)
                                    <div cylass="rows-item">
                                        <div class="layout_card">
                                            <div class="card-content card">
                                                <a href="/user/product_detail/{{ $item->id_product }}"
                                                    class="img-product"><img src="{{ $item->image }}"
                                                        alt=""></a>
                                                <div class="card-code">{{ $item->id_product }}</div>
                                                <div class="card-title">
                                                    <a href="/user/product_detail/{{ $item->id_product }}">
                                                        {{ $item->name }}<br>
                                                        RAM: {{ $item->RAM }} <br>
                                                        CPU: {{ $item->CPU }}</a></a>

                                                </div>
                                                <div class="card-price fs-4">{{ number_format($item->price) }} VNĐ</div>
                                                @if ($item->quantity == 0)
                                                    <div class="card-status2"><i class="fa-solid fa-check"></i>Hết hàng
                                                    </div>
                                                @else
                                                    <div class="card-status1"><i class="fa-solid fa-check"></i>Còn hàng
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
                            @endif
                        </div>
                    </div>

                </div>


            </div>

        </div>
        {{ $brand_detail->links() }}
        </div>
    </main>
    @include('user.support')
    <div title="Về đầu trang" id="top-up">
        <i class="fas fa-arrow-circle-up"></i>
    </div>
    <div> @include('user.footer')</div>
</body>

</html>
<script src="{{ asset('js/user/home.js') }}"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script>
    //  button Top up
    // khoảng cách 500px thì xuất hiện nút Top-up
    var offset = 500;
    // thời gian di trượt 0.75s ( 1000 = 1s )
    var duration = 500;
    $(function() {
        $(window).scroll(function() {
            if ($(this).scrollTop() > offset)
                $('#top-up').fadeIn(duration);
            else
                $('#top-up').fadeOut(duration);
        });
        $('#top-up').click(function() {
            $('body,html').animate({
                scrollTop: 0
            }, duration);
        });
    });
</script>
