<!DOCTYPE html>
<html lang="en">


<head>
    @include('user.header')
    <link rel="stylesheet" href="{{ asset('css/user/allproduct.css') }}">
</head>

<body>
    <main>
        <div class="dir">
            <a href="/user">Trang chủ /</a> Kết quả tìm kiếm
        </div>
        <div class="banner_products">
            <img src="https://laptop88.vn/media/news/2707_trum-laptop-uu-dai-sinh-vien-2022.jpg" alt="">
            <img src="https://bizweb.dktcdn.net/100/386/607/articles/banner-slide-2.jpg?v=1645442355823" alt="">
        </div>
        <div class="banner-text ">{{ $count }} kết quả với từ khoá "<span
                style="color:black">{{ $key }}</span>"</div>
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
                                <div class="rows " style="padding-left: 3%">
                                    @if ($search->toArray() != null)
                                        @foreach ($search as $key => $item)
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
                                                                RAM: {{ $item->RAM }}<br>
                                                                CPU: {{ $item->CPU }}</a>
                                                        </div>
                                                        <div class="card-price">{{ number_format($item->price) }} VNĐ
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
                                                    <a href="/user/muahang/{{ $item->id_product }}"><button>Mua
                                                            Hàng</button></a>
                                                </div>
                                            </div>
                                        @endforeach
                                        {{-- @else
                                        <tr>
                                            <td colspan="7"><h1>Không có kết quả nào với từ khoá "<span style="color:red">{{$key}}</span>"</h1></td>
                                        </tr> --}}
                                    @endif

                                </div>

                            </div>
                        </div>

                    </div>

                </div>
            </div>
        </div>
        </div>
    </main>
    <div>
        <div data-b24-crm-button-shadow="" class="b24-widget-button-shadow" id="sudovn-btn-shadow"></div>
        <div dir="ltr" data-b24-crm-button-cont=""
            class="b24-widget-button-wrapper b24-widget-button-position-bottom-right b24-widget-button-visible"
            id="sudovn-btn-wrapper">
            <div id="sudovn-btn-title">Bạn cần hỗ trợ?</div>
            <div id="sudovn-btn-social"><a href="tel:0123456789" target="_blank" rel="nofollow"
                    class="sudovn-btn-social-item">
                    <div class="sudovn-btn-social-item-icon"><img
                            src="data:image/png;base64,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">
                    </div>
                    <div class="sudovn-btn-social-item-label">Hotline</div>
                </a><a href="https://zalo.me/0974967185" target="_blank" rel="nofollow"
                    class="sudovn-btn-social-item">
                    <div class="sudovn-btn-social-item-icon"><svg xmlns="http://www.w3.org/2000/svg" x="0px"
                            y="0px" width="40" height="40" viewBox="0 0 172 172" style="fill:#000">
                            <g fill="none" fill-rule="nonzero" stroke="none" stroke-width="1"
                                stroke-linecap="butt" stroke-linejoin="miter" stroke-miterlimit="10"
                                stroke-dasharray="" stroke-dashoffset="0" font-family="none" font-weight="none"
                                font-size="none" text-anchor="none" style="mix-blend-mode:normal">
                                <path d="M0,172v-172h172v172z" fill="none"></path>
                                <g fill="#3498db">
                                    <path
                                        d="M30.96,13.76c-9.45834,0 -17.2,7.74166 -17.2,17.2v110.08c0,9.45834 7.74166,17.2 17.2,17.2h110.08c9.45834,0 17.2,-7.74166 17.2,-17.2v-110.08c0,-9.45834 -7.74166,-17.2 -17.2,-17.2zM30.96,20.64h22.63547c-12.28454,12.78196 -19.19547,29.30221 -19.19547,46.44c0,17.7504 7.25894,34.74346 20.33094,47.60906c0.4128,0.7224 0.756,4.26452 -0.8264,8.35812c-0.9976,2.58 -2.99361,5.94986 -6.8464,7.22266c-1.4792,0.4816 -2.44133,1.93231 -2.33813,3.48031c0.1032,1.548 1.24109,2.85493 2.75469,3.16453c9.8728,1.9608 16.2661,-1.00002 21.4261,-3.33922c4.644,-2.1328 7.71017,-3.57921 12.42297,-1.65281c9.632,3.7496 19.88105,5.67735 30.47625,5.67735c14.08228,0 27.62822,-3.43749 39.56,-9.93031v13.37031c0,5.73958 -4.58042,10.32 -10.32,10.32h-110.08c-5.73958,0 -10.32,-4.58042 -10.32,-10.32v-110.08c0,-5.73958 4.58042,-10.32 10.32,-10.32zM113.52,51.6c1.892,0 3.44,1.548 3.44,3.44v30.96c0,1.892 -1.548,3.44 -3.44,3.44c-1.892,0 -3.44,-1.548 -3.44,-3.44v-30.96c0,-1.892 1.548,-3.44 3.44,-3.44zM61.92,55.04h17.2c1.2384,0 2.41095,0.68639 3.03015,1.78719c0.5848,1.0664 0.5461,2.4072 -0.1075,3.4736l-13.92797,22.25922h11.00531c1.892,0 3.44,1.548 3.44,3.44c0,1.892 -1.548,3.44 -3.44,3.44h-17.2c-1.2384,0 -2.41095,-0.68639 -3.03015,-1.78719c-0.5848,-1.0664 -0.5461,-2.4072 0.1075,-3.4736l13.92797,-22.25922h-11.00531c-1.892,0 -3.44,-1.548 -3.44,-3.44c0,-1.892 1.548,-3.44 3.44,-3.44zM94.6,65.36c2.0984,0 4.05732,0.58211 5.81172,1.54531c0.6192,-0.8944 1.58428,-1.54531 2.78828,-1.54531c1.892,0 3.44,1.548 3.44,3.44v17.2c0,1.892 -1.548,3.44 -3.44,3.44c-1.204,0 -2.16908,-0.65091 -2.78828,-1.54531c-1.7544,0.9632 -3.71332,1.54531 -5.81172,1.54531c-6.6392,0 -12.04,-5.4008 -12.04,-12.04c0,-6.6392 5.4008,-12.04 12.04,-12.04zM132.44,65.36c6.6392,0 12.04,5.4008 12.04,12.04c0,6.6392 -5.4008,12.04 -12.04,12.04c-6.6392,0 -12.04,-5.4008 -12.04,-12.04c0,-6.6392 5.4008,-12.04 12.04,-12.04zM94.6,72.24c-0.3569,0 -0.70513,0.0389 -1.0414,0.1075c-0.67255,0.1372 -1.29873,0.40218 -1.84766,0.77265c-0.54892,0.37047 -1.02031,0.84186 -1.39078,1.39078c-0.37047,0.54892 -0.63546,1.17511 -0.77265,1.84766c-0.0686,0.33627 -0.1075,0.6845 -0.1075,1.0414c0,0.3569 0.0389,0.70513 0.1075,1.0414c0.0686,0.33627 0.16528,0.65871 0.29563,0.9675c0.13034,0.3088 0.29179,0.6057 0.47703,0.88016c0.18524,0.27446 0.39829,0.52594 0.63156,0.75922c0.23328,0.23327 0.48476,0.44633 0.75922,0.63156c0.54892,0.37047 1.17511,0.63546 1.84766,0.77265c0.33627,0.0686 0.6845,0.1075 1.0414,0.1075c0.3569,0 0.70513,-0.0389 1.0414,-0.1075c2.35392,-0.48019 4.1186,-2.5542 4.1186,-5.0525c0,-2.8552 -2.3048,-5.16 -5.16,-5.16zM132.44,72.24c-0.3569,0 -0.70513,0.0389 -1.0414,0.1075c-0.33627,0.0686 -0.65871,0.16528 -0.9675,0.29563c-0.3088,0.13034 -0.6057,0.29179 -0.88016,0.47703c-0.27446,0.18524 -0.52594,0.39829 -0.75922,0.63156c-0.46655,0.46655 -0.8479,1.02179 -1.10859,1.63938c-0.13035,0.30879 -0.22703,0.63123 -0.29563,0.9675c-0.0686,0.33627 -0.1075,0.6845 -0.1075,1.0414c0,0.3569 0.0389,0.70513 0.1075,1.0414c0.0686,0.33627 0.16528,0.65871 0.29563,0.9675c0.13034,0.3088 0.29179,0.6057 0.47703,0.88016c0.18524,0.27446 0.39829,0.52594 0.63156,0.75922c0.23328,0.23327 0.48476,0.44633 0.75922,0.63156c0.27446,0.18523 0.57136,0.34669 0.88016,0.47703c0.30879,0.13035 0.63123,0.22703 0.9675,0.29563c0.33627,0.0686 0.6845,0.1075 1.0414,0.1075c0.3569,0 0.70513,-0.0389 1.0414,-0.1075c2.35392,-0.48019 4.1186,-2.5542 4.1186,-5.0525c0,-2.8552 -2.3048,-5.16 -5.16,-5.16z">
                                    </path>
                                </g>
                            </g>
                        </svg></div>
                    <div class="sudovn-btn-social-item-label">Zalo</div>
                </a><a href="https://m.me/huytu.pro" target="_blank" rel="nofollow" class="sudovn-btn-social-item">
                    <div class="sudovn-btn-social-item-icon"><img
                            src="data:image/png;base64,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">
                    </div>
                    <div class="sudovn-btn-social-item-label">messenger</div>
                </a>
                <div class="sudovn-credit"> <a href="" target="_blank" rel="nofollow"
                        style="font-weight: 400;">LapRik</a></div>
            </div>
            <div data-b24-crm-button-block-button="" class="b24-widget-button-inner-container"
                id="sudovn-btn-inner-container">
                <div data-b24-crm-button-block-border="" class="b24-widget-button-inner-mask"
                    style="background:#00aeef"></div>
                <div class="b24-widget-button-block">
                    <div data-b24-crm-button-pulse="" class="b24-widget-button-pulse b24-widget-button-pulse-animate"
                        style="border-color:#00aeef"></div>
                    <div data-b24-crm-button-block-inner="" class="b24-widget-button-inner-block"
                        style="background:#00aeef">
                        <div class="b24-widget-button-icon-container" id="sudovn-btn-icon-container">
                            <div data-b24-crm-button-icon="crmform" class="b24-widget-button-inner-item"
                                style="display:none"><svg class="b24-crm-button-icon"
                                    xmlns="http://www.w3.org/2000/svg" width="28" height="28"
                                    viewBox="0 0 24 28">
                                    <path class="b24-crm-button-webform-icon" fill=" #FFFFFF" fill-rule="evenodd"
                                        d="M815.406703,961 L794.305503,961 C793.586144,961 793,961.586144 793,962.305503 L793,983.406703 C793,984.126062 793.586144,984.712206 794.305503,984.712206 L815.406703,984.712206 C816.126062,984.712206 816.712206,984.126062 816.712206,983.406703 L816.712206,962.296623 C816.703325,961.586144 816.117181,961 815.406703,961 L815.406703,961 Z M806.312583,979.046143 C806.312583,979.454668 805.975106,979.783264 805.575462,979.783264 L796.898748,979.783264 C796.490224,979.783264 796.161627,979.445787 796.161627,979.046143 L796.161627,977.412044 C796.161627,977.003519 796.499105,976.674923 796.898748,976.674923 L805.575462,976.674923 C805.983987,976.674923 806.312583,977.0124 806.312583,977.412044 L806.312583,979.046143 L806.312583,979.046143 Z M813.55946,973.255747 C813.55946,973.664272 813.221982,973.992868 812.822339,973.992868 L796.889868,973.992868 C796.481343,973.992868 796.152746,973.655391 796.152746,973.255747 L796.152746,971.621647 C796.152746,971.213122 796.490224,970.884526 796.889868,970.884526 L812.813458,970.884526 C813.221982,970.884526 813.550579,971.222003 813.550579,971.621647 L813.550579,973.255747 L813.55946,973.255747 Z M813.55946,967.45647 C813.55946,967.864994 813.221982,968.193591 812.822339,968.193591 L796.889868,968.193591 C796.481343,968.193591 796.152746,967.856114 796.152746,967.45647 L796.152746,965.82237 C796.152746,965.413845 796.490224,965.085249 796.889868,965.085249 L812.813458,965.085249 C813.221982,965.085249 813.550579,965.422726 813.550579,965.82237 L813.550579,967.45647 L813.55946,967.45647 Z"
                                        transform="translate(-793 -961)"></path>
                                </svg></div>
                            <div data-b24-crm-button-icon="callback" class="b24-widget-button-inner-item"
                                style="display:none"><svg class="b24-crm-button-icon"
                                    xmlns="http://www.w3.org/2000/svg" width="28" height="28"
                                    viewBox="0 0 28 30">
                                    <path class="b24-crm-button-call-icon" fill="#FFFFFF" fill-rule="evenodd"
                                        d="M940.872414,978.904882 C939.924716,977.937215 938.741602,977.937215 937.79994,978.904882 C937.08162,979.641558 936.54439,979.878792 935.838143,980.627954 C935.644982,980.833973 935.482002,980.877674 935.246586,980.740328 C934.781791,980.478121 934.286815,980.265859 933.840129,979.97868 C931.757607,978.623946 930.013117,976.882145 928.467826,974.921839 C927.701216,973.947929 927.019115,972.905345 926.542247,971.731659 C926.445666,971.494424 926.463775,971.338349 926.6509,971.144815 C927.36922,970.426869 927.610672,970.164662 928.316918,969.427987 C929.300835,968.404132 929.300835,967.205474 928.310882,966.175376 C927.749506,965.588533 927.206723,964.77769 926.749111,964.14109 C926.29156,963.50449 925.932581,962.747962 925.347061,962.154875 C924.399362,961.199694 923.216248,961.199694 922.274586,962.161118 C921.55023,962.897794 920.856056,963.653199 920.119628,964.377388 C919.437527,965.045391 919.093458,965.863226 919.021022,966.818407 C918.906333,968.372917 919.274547,969.840026 919.793668,971.269676 C920.856056,974.228864 922.473784,976.857173 924.43558,979.266977 C927.085514,982.52583 930.248533,985.104195 933.948783,986.964613 C935.6148,987.801177 937.341181,988.444207 939.218469,988.550339 C940.510236,988.625255 941.632988,988.288132 942.532396,987.245549 C943.148098,986.533845 943.842272,985.884572 944.494192,985.204083 C945.459999,984.192715 945.466036,982.969084 944.506265,981.970202 C943.359368,980.777786 942.025347,980.091055 940.872414,978.904882 Z M940.382358,973.54478 L940.649524,973.497583 C941.23257,973.394635 941.603198,972.790811 941.439977,972.202844 C940.97488,970.527406 940.107887,969.010104 938.90256,967.758442 C937.61538,966.427182 936.045641,965.504215 934.314009,965.050223 C933.739293,964.899516 933.16512,965.298008 933.082785,965.905204 L933.044877,966.18514 C932.974072,966.707431 933.297859,967.194823 933.791507,967.32705 C935.117621,967.682278 936.321439,968.391422 937.308977,969.412841 C938.23579,970.371393 938.90093,971.53815 939.261598,972.824711 C939.401641,973.324464 939.886476,973.632369 940.382358,973.54478 Z M942.940854,963.694228 C940.618932,961.29279 937.740886,959.69052 934.559939,959.020645 C934.000194,958.902777 933.461152,959.302642 933.381836,959.8878 L933.343988,960.167112 C933.271069,960.705385 933.615682,961.208072 934.130397,961.317762 C936.868581,961.901546 939.347628,963.286122 941.347272,965.348626 C943.231864,967.297758 944.53673,969.7065 945.149595,972.360343 C945.27189,972.889813 945.766987,973.232554 946.285807,973.140969 L946.55074,973.094209 C947.119782,972.993697 947.484193,972.415781 947.350127,971.835056 C946.638568,968.753629 945.126778,965.960567 942.940854,963.694228 Z"
                                        transform="translate(-919 -959)"></path>
                                </svg></div>
                            <div data-b24-crm-button-icon="openline"
                                class="b24-widget-button-inner-item b24-widget-button-icon-animation"><svg
                                    class="b24-crm-button-icon b24-crm-button-icon-active"
                                    xmlns="http://www.w3.org/2000/svg" width="28" height="28"
                                    viewBox="0 0 28 29">
                                    <path class="b24-crm-button-chat-icon" fill="#FFFFFF" fill-rule="evenodd"
                                        d="M878.289968,975.251189 L878.289968,964.83954 C878.289968,963.46238 876.904379,962 875.495172,962 L857.794796,962 C856.385491,962 855,963.46238 855,964.83954 L855,975.251189 C855,976.924031 856.385491,978.386204 857.794796,978.090729 L860.589592,978.090729 L860.589592,981.876783 L860.589592,983.76981 L861.521191,983.76981 C861.560963,983.76981 861.809636,982.719151 862.45279,982.823297 L866.179185,978.090729 L875.495172,978.090729 C876.904379,978.386204 878.289968,976.924031 878.289968,975.251189 Z M881.084764,971.465135 L881.084764,976.197702 C881.43316,978.604561 879.329051,980.755508 876.426771,980.93027 L868.042382,980.93027 L866.179185,982.823297 C866.400357,983.946455 867.522357,984.94992 868.973981,984.716324 L876.426771,984.716324 L879.221567,988.502377 C879.844559,988.400361 880.153166,989.448891 880.153166,989.448891 L881.084764,989.448891 L881.084764,987.555864 L881.084764,984.716324 L882.947962,984.716324 C884.517696,984.949819 885.742758,983.697082 885.742758,981.876783 L885.742758,974.304675 C885.742659,972.717669 884.517597,971.465135 882.947962,971.465135 L881.084764,971.465135 Z"
                                        transform="translate(-855 -962)"></path>
                                </svg></div>
                        </div>
                        <div class="b24-widget-button-inner-item b24-widget-button-close" id="sudovn-btn-close"><svg
                                class="b24-widget-button-icon b24-widget-button-close-item"
                                xmlns="http://www.w3.org/2000/svg" width="29" height="29"
                                viewBox="0 0 29 29">
                                <path fill="#FFF" fill-rule="evenodd"
                                    d="M18.866 14.45l9.58-9.582L24.03.448l-9.587 9.58L4.873.447.455 4.866l9.575 9.587-9.583 9.57 4.418 4.42 9.58-9.577 9.58 9.58 4.42-4.42">
                                </path>
                            </svg></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
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
