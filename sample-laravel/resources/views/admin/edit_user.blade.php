<!DOCTYPE html>
<html lang="en">

<head>
    @include('admin.header')

</head>

<body>

    <body>
        <div class="wrapper">
            <div class="left-side-menu">
                <a href="/admin" class="logo text-center">
                    <span class="logo-lg">
                        <img src="/images/logo.png" alt="" height="70">
                    </span>
                    <span class="logo-sm">
                        <img src="/template/admin/assets/images/logo.png" alt="" height="40">
                    </span>
                </a>

                <div class="h-100" id="left-side-menu-container" data-simplebar>
                    @include('admin.sidemenu')
                    <div class="clearfix"></div>
                </div>
            </div>

            <div class="content-page">
                <div class="content">
                    <div class="navbar-custom">
                        <ul class="list-unstyled topbar-right-menu float-right mb-0">
                            <li class="account">
                                <div class="nav-link  nav-user  ">
                                    <span class="account-user-avatar">
                                        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTDZ3sl-uWEz_3FQhY92IoGCiRwUjDe73vUEg&usqp=CAU"
                                            alt="user-image" class="rounded-circle">
                                    </span>
                                    <span class="account-user-name"> {{Auth::user()->name}}
                                        <a href="/logout" class="sign-out-admin-icon"> <i class="fas fa-sign-out-alt"
                                            title="đăng xuất"></i></a>
                                </div>


                            </li>
                        </ul>
                        <button class="button-menu-mobile open-left disable-btn">
                            <i class="mdi mdi-menu"></i>
                        </button>
                        <div class="app-search dropdown header-admin-menu">
                            <form>

                                <div class="input-group mb-3">

                                    <input type="text" class="form-control dropdown-toggle" placeholder="Tìm kiếm..."
                                        id="top-search">
                                    {{-- <div class="input-group-addon-search">

                                            <i class="fa-solid fa-magnifying-glass icon-search"></i>
                                        </div> --}}
                                    <span class="mdi mdi-magnify search-icon"></span>

                                </div>
                            </form>

                        </div>
                    </div>
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-12">
                                <div class="page-title-box">
                                    <h4 class="page-title">Sửa thông tin khách hàng</h4>
                                </div>
                            </div>
                        </div>
                        <div class="row justify-content-center">
                            <div class="col-xl-10 col-lg-10 ">
                                <form action="process_add_product.php" method="post" enctype="multipart/form-data">
                                    <table class="table table-striped mb-0">
                                        <tr>
                                            <th>Họ tên: </th>
                                            <td> <input type="text" name="product_name" style="width:62%"
                                                    value="Nguyễn Văn A"> </td>
                                        </tr>
                                        <tr>
                                            <th>Email: </th>
                                            <td> <input type="text" name="product_name" style="width:62%"
                                                    value="abcd@gmail.com"> </td>
                                        </tr>

                                        <tr>
                                            <th>Địa chỉ: </th>
                                            <td> <input type="text" name="product_name" style="width:62%"
                                                    value="21 ngõ 30 đường phùng khoang">

                                                <div class="dia-chi">
                                                    <select name="id_tinh">
                                                        <option value="1">Hà nội</option>
                                                        <option value="2">Đà nẵng</option>
                                                        <option value="3">Bắc Ninh</option>
                                                        <option value="4">Bắc Giang</option>
                                                    </select>
                                                    <select name="id_tinh">
                                                        <option value="1">Hà nội</option>
                                                        <option value="2">Đà nẵng</option>
                                                        <option value="3">Bắc Ninh</option>
                                                        <option value="4">Bắc Giang</option>
                                                    </select>
                                                    <select name="id_tinh">
                                                        <option value="1">Hà nội</option>
                                                        <option value="2">Đà nẵng</option>
                                                        <option value="3">Bắc Ninh</option>
                                                        <option value="4">Bắc Giang</option>
                                                    </select>
                                                </div>


                                            </td>

                                        </tr>


                                        <tr>
                                            <th>Số điện thoại: </th>
                                            <td> <input type="text" name="product_name" style="width:62%"
                                                    value="0965600100" readonly> </td>
                                        </tr>
                                        <tr>
                                            <th>Giới tính: </th>
                                            <td>
                                                <div>
                                                    <label class="radio-inline">
                                                        <input type="radio" name="optradio" checked>Nam
                                                    </label>
                                                    <label class="radio-inline">
                                                        <input type="radio" name="optradio">Nữ
                                                    </label>
                                                </div>


                                            </td>
                                        </tr>
                                        <th>
                                            <button type="submit">Cập nhật</button>
                                        </th>



                                    </table>
                                </form>
                            </div>
                        </div>
                    </div>

                </div>
                @include('admin.footer')

            </div>
        </div>

        <div class="rightbar-overlay"></div>
        <script src="/template/admin/assets/js/vendor.min.js"></script>
        <script src="/template/admin/assets/js/app.min.js"></script>
        <script src="/template/admin/assets/js/vendor/apexcharts.min.js"></script>
        <script src="/template/admin/assets/js/vendor/jquery-jvectormap-1.2.2.min.js"></script>
        <script src="/template/admin/assets/js/vendor/jquery-jvectormap-world-mill-en.js"></script>
        <script src="/template/admin/assets/js/pages/demo.dashboard.js"></script>
    </body>

</html>
