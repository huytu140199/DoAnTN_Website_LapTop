<meta charset="utf-8" />
<link rel="shortcut icon" type="image/png" href="/images/logo.png" />

<title>{{ $title }}</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description" />
<meta content="Coderthemes" name="author" />
<!-- App favicon -->
<!-- <link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}"> -->
<link rel="stylesheet" type="text/css" href="{{ asset('css/user.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('css/app.css') }}">
<link rel="stylesheet" type="text/js" href="{{ asset('css/app.js') }}">
<link rel="stylesheet" type="text/js" href="{{ asset('css/user.js') }}">
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
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
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js" charset="utf-8"></script>
{{-- <script src="https://kit.fontawesome.com/bbd3122010.js" crossorigin="anonymous"></script> --}}
<!-- Bootstrap CSS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css"
    integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">

<!-- font awesome  -->
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css"
    integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.css" />


<link rel="stylesheet" href="{{ asset('css/user/header.css') }}">


{{-- TUyet roi --}}
<img style="position:fixed;z-index:9999;top:0;left:0;height:105px;"
    src="https://lh6.googleusercontent.com/-c8CoUvCourw/UMcWWTeBE-I/AAAAAAAABcU/q-j9X7733zw/s150/top-left.png" />
<img style="position:fixed;z-index:9999;top:0;right:0;height:105px;"
    src="https://lh5.googleusercontent.com/-JABklf9ModU/UMcWWzSSJ4I/AAAAAAAABcY/g4sZMhrgjXU/s150/top-right.png" />

<img style="position:fixed;z-index:9999;bottom:30px;left:30px"
    src="https://lh4.googleusercontent.com/-mEgGUg-ou4k/UMcz0qy2NhI/AAAAAAAABc0/gF1uW4iE6y0/s180/bottom-left.png"
    class="CayThong" />

{{-- end --}}
<div class="m-header d-flex align-items-center">
    <div class="m-header-box">
        <div class="m-logo">
            <a href="/user"><img src="\images\logo.png" alt=""></a>
        </div>
        <div class="m-search-box flex-1 d-flex justify-content-center">
            <div class="m-search">
                <form method="get" action="{{ route('searchProduct') }}">
                    <input type="text" class="m-input-search" name="key" placeholder="Tìm kiếm sản phẩm">
                    <a href="" class="btn  btn-dark" type="submit" id="searchsubmit"> <i
                            class="fas fa-search"></i></a>
                </form>
            </div>
        </div>
        <div class="d-flex header-right d-flex align-items-center">

            @if (Auth::check() == false)
                <a href="/login" class="header-text me-3 m-login" style="color:black ;">Đăng nhập</a>
                <a href="/register" class="header-text me-3" style="color:black ;">Đăng ký</a>
            @else
                <span class="header-text me-3"> Xin chào, {{ Auth::user()->name }}</span>
            @endif



            <div class="m-icon-shopping"><a href="/user/giohang" style="color:black ;"><i
                        class="fa-solid fa-cart-shopping" style="font-size: 1.5em; ;"></i></a></div>
            @if (Auth::check() == true)
                <div class="m-icon-bars">
                    <i class="fa-solid fa-bars" tyle="font-size: 1.5em; ;"></i>
                    <div class="bars-menu">
                        <div class="dropdown-content">
                            <a href="/profile">Thông tin tài khoản</a>
                            <a href="/purchase">Đơn hàng của bạn</a>
                            <a href="/logout">Đăng xuất</a>
                        </div>

                    </div>
                </div>
            @endif

        </div>
    </div>
</div>

<script src="{{ asset('js/user/header.js') }}"></script>
