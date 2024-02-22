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

                                    <span class="mdi mdi-magnify search-icon"></span>

                                </div>
                            </form>

                        </div>
                    </div>
                    <div class="container-fluid">
                        <div class="row">
                            <div class="page-title-box">
                                <h4 class="page-title">Danh mục sản phẩm </h4>

                            </div>
                            <div class="row justify-content-center">

                                <table class="table table-striped table-centered " style="text-align:center">
                                    <thead>
                                        <tr>
                                            <th>STT</th>
                                            <th>Tên Danh Mục</th>
                                            <th>Tên Sản Phẩm</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @if (!empty($categories))
                                            @foreach ($categories as $key => $item)
                                                <tr>
                                                    <td>{{ $key + 1 }}</td>
                                                    <td>{{ $item->name_categories }}</td>
                                                    <td>{{ $item->name }}</td>
                                                </tr>
                                            @endforeach
                                        @else
                                            <tr>
                                                <td colspan="7">lỗi</td>
                                            </tr>
                                        @endif
                                    </tbody>
                                </table>
                                {{ $categories->links() }}

                            </div> @include('admin.footer')
                        </div>
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
