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
                                <a class="nav-link  nav-user  ">
                                    <span class="account-user-avatar">
                                        <img src="/images/avatar-1.jpg" alt="user-image" class="rounded-circle">
                                    </span>
                                    <span class="account-user-name"> {{Auth::user()->name}}
                                    </a>

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
                            <div class="page-title-box">
                                <h4 class="page-title">Tất cả sản phẩm </h4>

                                <form action="/admin/add_product/">
                                    <button class="btn btn-danger pe-4 ps-4" type="submit">+ Thêm mới</button>
                                </form>
                            </div>
                            <div class="row justify-content-center">

                                <table class="table table-striped table-centered " style="text-align:center">
                                    <thead>
                                        <tr>
                                            <th>STT</th>
                                            <th>Nhà Cung Cấp</th>
                                            <th>Danh Mục</th>
                                            <th>Tên Sản Phẩm</th>
                                            <th>Hình Ảnh</th>
                                            <th>Giá</th>
                                            <th>Số Lượng</th>
                                            <th>Sửa</th>
                                            <th>Xóa</th>
                                            <th>Nhập</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @if (!empty($products->toArray()["per_page"]))
                                        @foreach ($products->toArray()["data"] as $key => $item)
                                        <tr>
                                            <td>{{ $key + 1 }}</td>
                                            <td>{{ $item["name_supplier"] }}</td>
                                            <td>{{ $item["name_categories"]}}</td>
                                            <td>{{ $item["name"] }}</td>
                                            <td> <img src="{{ $item['image'] }}" alt="" height="40"></td>
                                            <td>{{ number_format($item["price"]) }} VNĐ</td>
                                            <td>{{ $item["quantity"] }}</td>
                                            <td> <a href="edit_product/{{ $item['id_product'] }}"><i
                                                        class="fa-solid fa-pen"></i></a></td>
                                            <td>
                                                {{-- <a href="delete_product/{{ $item['id_product'] }}">
                                                <i class="fa-sharp fa-solid fa-trash"></i></a> --}}

                                                <form method="GET"
                                                    action="/admin/delete_product/{{ $item['id_product'] }}">
                                                    @csrf
                                                    <input name="_method" type="hidden" value="DELETE">
                                                    <a class=" btn-flat show_confirm" data-toggle="tooltip"
                                                        title='Delete'><i class="fa-sharp fa-solid fa-trash"></i></a>
                                                </form>
                                            </td>
                                            {{-- <td><a href="delete_product/{{ $item->id_product }}">
                                            <i class="fa-solid fa-solid fa-download"></i></a>
                                            </td> --}}
                                            <td>
                                                <form method="GET"
                                                    action="/admin/import_product/{{ $item['id_product'] }}">
                                                    @csrf
                                                    <input type="hidden">
                                                    <a class=" btn-flat show_confirm1 btn-product" data-toggle="tooltip"
                                                        title='Nhập sản phẩm' onclick="confirmDelete()"><i
                                                            class="fa-solid fa-solid fa-download"></i></a>
                                                </form>
                                            </td>
                                        </tr>
                                        @endforeach
                                        @else
                                        <tr>
                                            <td colspan="7">lỗi</td>
                                        </tr>
                                        @endif
                                    </tbody>
                                </table>

                            </div>
                            {{$products->links()}}

                            @include('admin.footer')
                        </div>
                    </div>

                    <div class="m-popup-wrapper">
                        <div class="position-relative m-popup">
                            <div class="m-popup-container p-4">
                                <div class="m-close-popup"><i class="fas fa-window-close"></i></div>
                                <div class="d-flex mt-4">
                                    <div class="me-2 font-weight-bold">Số lượng:</div>
                                    <input type="text" class="input flex-1">
                                </div>
                                <div class="d-flex justify-content-center mt-3 mb-4">
                                    <a href="#"> <button class="btn btn-primary">Xác
                                            nhận</button></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- popup so luong -->
                    <script type="text/javascript">
                    $(".btn-product").click(function(e) {
                        e.preventDefault();
                        $(".m-popup-wrapper").show();
                    });
                    $(".m-close-popup").click(function() {
                        $(".m-popup-wrapper").hide();
                    });
                    </script>
                    <!-- end -->
                    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.0/sweetalert.min.js"></script>
                    <script type="text/javascript">
                    $('.show_confirm').click(function(event) {

                            var form = $(this).closest("form");

                            var name = $(this).data("name");

                            event.preventDefault();

                            swal({
                                    text: `Khách hàng sẽ bị xóa. Bạn có chắc không?`,
                                    buttons: true,
                                    icon: 'warning',
                                    dangerMode: true,
                                })
                                .then((willDelete) => {
                                    if (willDelete) {
                                        swal("Xoá thành công ", {
                                            icon: "success",
                                        });
                                        form.submit();
                                    } else {
                                        form.closest();
                                    }
                                });
                        },
                        $('.show_confirm1').click(function(event) {

                            var form = $(this).closest("form");

                            var name = $(this).data("name");

                            event.preventDefault();

                            Swal.fire({
                                title: 'Submit your Github username',
                                input: 'text',
                                inputAttributes: {
                                    autocapitalize: 'off'
                                },
                                showCancelButton: true,
                                confirmButtonText: 'Look up',
                                showLoaderOnConfirm: true,
                                preConfirm: (login) => {
                                    return fetch(`//api.github.com/users/${login}`)
                                        .then(response => {
                                            if (!response.ok) {
                                                throw new Error(response.statusText)
                                            }
                                            return response.json()
                                        })
                                        .catch(error => {
                                            Swal.showValidationMessage(
                                                `Request failed: ${error}`
                                            )
                                        })
                                },
                                allowOutsideClick: () => !Swal.isLoading()
                            }).then((result) => {
                                if (result.isConfirmed) {
                                    Swal.fire({
                                        title: `${result.value.login}'s avatar`,
                                        imageUrl: result.value.avatar_url
                                    })
                                }
                            });
                        }),



                    );
                    </script>



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
