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
                        <div class="app-search dropdown d-none d-lg-block">
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
                                    <h4 class="page-title">Import sản phẩm</h4>
                                </div>
                            </div>
                        </div>
                        <div class="row justify-content-center">
                            <div class="col-xl-10 col-lg-10 ">
                                <form action="process_add_product.php" method="post" enctype="multipart/form-data">
                                    <table class="table table-striped mb-0">
                                        <tr>
                                            <th>Mã Danh Mục</th>
                                            <td>
                                                <select name="id_category">
                                                    <option value="1">1-DELL</option>
                                                    <option value="2">2-ASUS</option>
                                                    <option value="3">3-HP</option>
                                                    <option value="4">4-MACBOOK</option>

                                                </select>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th>Mã sản phẩm</th>
                                            <td>
                                                <select name="id_manufacturer">
                                                    <option value="1">XPS</option>
                                                    <option value="2">Vostro</option>
                                                    <option value="3">Gaming</option>

                                                </select>
                                            </td>

                                        </tr>

                                        <tr>
                                            <th>Tên Sản Phẩm</th>
                                            <td> <input type="text" name="product_name" style="width:62%"></td>
                                        </tr>
                                        <tr>
                                            <th>Giá</th>
                                            <td><input type="text" name="price"></td>
                                        </tr>
                                        <tr>
                                            <th>Hình Ảnh</th>
                                            <td><img src="/images/laptop_hp.jpg" alt="" height="50"></td>
                                        </tr>
                                        <tr>
                                            <th>Số Lượng</th>
                                            <td><input type="number" name="quantity" min="0"></td>
                                        </tr>
                                        <tr>
                                            <th>Mô Tả</th>
                                            <td>
                                                <textarea name="description" rows="5" cols="60"></textarea>
                                            </td>
                                        </tr>
                                        <th>
                                            <button type="submit">Lưu</button>
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
