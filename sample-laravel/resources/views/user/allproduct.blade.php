<!DOCTYPE html>
<html lang="en">


<head>
    @include('user.header')
    <link rel="stylesheet" href="{{ asset('css/user/allproduct.css') }}">
</head>

<body>
    <main style="min-width: 1325px;">
        <div class="dir">
            <a href="/user">Trang chủ /</a> Tất cả sản phẩm
        </div>
        <div class="banner_products">
            <img src="https://laptop88.vn/media/news/2707_trum-laptop-uu-dai-sinh-vien-2022.jpg" alt="">
            <img src="https://bizweb.dktcdn.net/100/386/607/articles/banner-slide-2.jpg?v=1645442355823" alt="">
        </div>

        <div class="content-product">
            <div class="content-left">
                <div class="selector-row r1">
                    <div class="selector-title">Hãng sản xuất:</div>
                    <div class="selector-items">
                        <label class="selector-form-item">Tất cả
                            <input type="checkbox" id="row1-all" checked value="all" name="all">
                            <span class="checkmark"></span>
                        </label>
                        <label class="selector-form-item">Asus
                            <input type="checkbox" id="row1-asus" value="asus" name="asus">
                            <span class="checkmark"></span>
                        </label>
                        <label class="selector-form-item">Acer
                            <input type="checkbox" id="row1-acer" value="acer" name="acer">
                            <span class="checkmark"></span>
                        </label>
                        <label class="selector-form-item">Lenovo
                            <input type="checkbox" id="row1-lenovo" value="lenovo" name="lenovo">
                            <span class="checkmark"></span>
                        </label>
                        <label class="selector-form-item">Dell
                            <input type="checkbox" id="row1-Dell" value="dell" name="dell">
                            <span class="checkmark"></span>
                        </label>
                        <label class="selector-form-item">Apple
                            <input type="checkbox" id="row1-apple" value="apple" name="apple">
                            <span class="checkmark"></span>
                        </label>
                        <label class="selector-form-item">HP
                            <input type="checkbox" id="row1-hp" value="hp" name="hp">
                            <span class="checkmark"></span>
                        </label>
                    </div>
                </div>
                <div class="selector-row r2">
                    <div class=" selector-title">Mức giá:</div>
                    <div class="selector-items colum-item">
                        <label class="selector-form-item colum">Tất cả
                            <input type="checkbox" id="row2-all" checked value="all" name="all">
                            <span class="checkmark"></span>
                        </label>
                        <label class="selector-form-item colum">5 triệu - 10 triệu
                            <input type="checkbox" id="row2-5-10" value="t510" name="5to10">
                            <span class="checkmark"></span>
                        </label>
                        <label class="selector-form-item colum">10 triệu - 15 triệu
                            <input type="checkbox" id="row2-10-15" value="t1015" name="10to15">
                            <span class="checkmark"></span>
                        </label>
                        <label class="selector-form-item colum">15 triệu - 20 triệu
                            <input type="checkbox" id="row2-15-20" value="t1520" name="15to20">
                            <span class="checkmark"></span>
                        </label>
                        <label class="selector-form-item colum">20 triệu - 25 triệu
                            <input type="checkbox" id="row2-20-25" value="t2025" name="20to25">
                            <span class="checkmark"></span>
                        </label>
                        </label>
                    </div>

                </div>
                <div class="selector-row r3">
                    <div class="selector-title">CPU:</div>
                    <div class="selector-items colum-item">
                        <label class="selector-form-item colum">Tất cả
                            <input type="checkbox" id="row3-all" checked value="all" name="all">
                            <span class="checkmark"></span>
                        </label>
                        <label class="selector-form-item colum">Intel core i3
                            <input type="checkbox" id="row3-corei3" value="corei3" name="corei3">
                            <span class="checkmark"></span>
                        </label>
                        <label class="selector-form-item colum">Intel core i5
                            <input type="checkbox" id="row3-corei5" value="corei5" name="corei5">
                            <span class="checkmark"></span>
                        </label>
                        <label class="selector-form-item colum">Intel core i7
                            <input type="checkbox" id="row3-corei7" value="corei7" name="corei7">
                            <span class="checkmark"></span>
                        </label>
                    </div>
                </div>
                <!-- ram -->
                <div class="selector-row r4">
                    <div class="selector-title">Ram:</div>
                    <div class="selector-items">
                        <label class="selector-form-item">Tất cả
                            <input type="checkbox" checked id="row4-all" value="all" name="all">
                            <span class="checkmark"></span>
                        </label>
                        <label class="selector-form-item">4g
                            <input type="checkbox" id="row4-4g" value="4g" name="4g">
                            <span class="checkmark"></span>
                        </label>
                        <label class="selector-form-item">8g
                            <input type="checkbox" id="row4-8g" value="8g" name="8g">
                            <span class="checkmark"></span>
                        </label>
                        <label class="selector-form-item">16g
                            <input type="checkbox" id="row4-16g" value="16g" name="16g">
                            <span class="checkmark"></span>
                        </label>
                        <label class="selector-form-item">32g
                            <input type="checkbox" id="row4-32g" value="32g" name="32g">
                            <span class="checkmark"></span>
                        </label>
                        <label class="selector-form-item">64g
                            <input type="checkbox" id="row4-64g" value="64g" name="64g">
                            <span class="checkmark"></span>
                        </label>
                    </div>
                </div>
                <!-- screen -->
                <div class="selector-row r5">
                    <div class="selector-title">Màn hình:</div>
                    <div class="selector-items">
                        <label class="selector-form-item">Tất cả
                            <input type="checkbox" id="row5-all" checked value="all" name="all">
                            <span class="checkmark"></span>
                        </label>
                        <label class="selector-form-item">13inch
                            <input type="checkbox" id="row5-13inch" value="13inch" name="13inch">
                            <span class="checkmark"></span>
                        </label>
                        <label class="selector-form-item">14inch
                            <input type="checkbox" id="row5-14inch" value="14inch" name="14inch">
                            <span class="checkmark"></span>
                        </label>
                        <label class="selector-form-item">15inch
                            <input type="checkbox" id="row5-15inch" value="15inch" name="15inch">
                            <span class="checkmark"></span>
                        </label>
                    </div>
                </div>

            </div>
            <div class="content-right">
                <div class="layout_2">

                    <div class="layout_2" style="margin-bottom: 50px">

                        <div class="layout_2-content">
                            <div class="d-flex justify-content-center w-100">
                                <div class="rows ">
                                    @if (!empty($all_products))
                                        @foreach ($all_products as $key => $item)
                                            <div class="rows-item">
                                                <div class="layout_card">
                                                    <div class="card-content card">
                                                        <a href="/user/product_detail/{{ $item->id_product }}"
                                                            class="img-product"><img src="{{ $item->image }}"
                                                                alt=""></a>
                                                        <div class="card-code">{{ $item->id_product }}</div>
                                                        <div class="card-title">
                                                            <a href="/user/product_detail/{{ $item->id_product }}">
                                                                {{ $item->name }}<br>
                                                                RAM: {{ $item->RAM }}<br>
                                                                CPU: {{ $item->CPU }}</a>

                                                        </div>
                                                        <div class="card-price fs-4">{{ number_format($item->price) }}
                                                            VNĐ
                                                        </div>
                                                        @if ($item->quantity == 0)
                                                            <div class="card-status2"><i
                                                                    class="fa-solid fa-check"></i>Hết hàng
                                                            </div>
                                                        @else
                                                            <div class="card-status1"><i
                                                                    class="fa-solid fa-check"></i>Còn hàng
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
                    {{ $all_products->links() }}

                </div>
            </div>
        </div>
        </div>
    </main>
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
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="{{ asset('js/user/allproduct.js') }}"></script>
<script src="{{ asset('js/user/home.js') }}"></script>
