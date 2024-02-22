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
                                    <span class="account-user-name"> {{ Auth::user()->name }}
                                        <a href="/logout" class="sign-out-admin-icon"> <i class="fas fa-sign-out-alt"
                                                title="đăng xuất"></i></a>
                                </div>


                            </li>
                        </ul>
                        <button class="button-menu-mobile open-left disable-btn">
                            <i class="mdi mdi-menu"></i>
                        </button>
                        <div class="app-search dropdown header-admin-menu">
                            <form method="get" action="{{ route('searchProductAdmin') }}">

                                <div class="input-group mb-3">
                                    <input type="text" class="form-control dropdown-toggle" name="key"
                                        placeholder="Tìm kiếm sản phẩm">


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
                                <div class="banner-text "style="margin-top: 10px">
                                    <h4>{{ $count }} kết quả với từ khoá "<span
                                            style="color:black">{{ $key }}</span>"</h4>
                                </div>
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
                                        @if (!empty($products->toArray()['per_page']))
                                            @foreach ($products as $key => $item)
                                                <tr>
                                                    <td>{{ $key + 1 }}</td>
                                                    <td>{{ $item['name_supplier'] }}</td>
                                                    <td>{{ $item['name_categories'] }}</td>
                                                    <td>{{ $item['name'] }}</td>
                                                    <td> <img src="{{ $item['image'] }}" alt="" height="40">
                                                    </td>
                                                    <td>{{ number_format($item['price']) }} VNĐ</td>
                                                    <td>{{ $item['quantity'] }}</td>
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
                                                                title='Delete'><i
                                                                    class="fa-sharp fa-solid fa-trash"></i></a>
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
                                                            <a href="#"
                                                                class=" btn-flat show_confirm1 btn-add-product"
                                                                data-toggle="tooltip" title='Nhập sản phẩm'
                                                                onclick="confirmDelete()"><i
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
                            {{ $products->links() }}

                            @include('admin.footer')
                        </div>
                    </div>

                    <!-- modal add prodcut -->
                    <div class=" modal modal-add-roduct">
                        <div class="modal-content modal-add-product-content">
                            <form class="form-horizontal" method="get" onsubmit="submitForm(event)">
                                <div class="modal-header">
                                    <strong>Nhập số lượng sản phẩm</strong>
                                </div>

                                <div class="modal-body">
                                    <div class="form-group">
                                        <label for="dummyText" class="control-label col-xs-4">Số lượng</label>
                                        <div class="input-group col-xs-7">
                                            <input type="text" id="quantity" class="form-control">
                                        </div>
                                    </div>
                                </div>

                                <div class="modal-footer footer-popup">
                                    <button class="swal-button swal-button--cancel cancal-addproduct"
                                        type="button">Cancel</button>
                                    <a class="swal-button swal-button--confirm swal-button--danger" id="btn-submit"> OK
                                    </a>

                                </div>

                            </form>
                        </div>
                        <!-- modal add prodcut -->
                        <script type="text/javascript">
                            //
                            // url input
                            const btnSm = $("#btn-submit")
                            const valueInput = $("#quantity")

                            // change url link
                            const path = "google.com"
                            btnSm.click(() => {

                                location.href = `${path}/${valueInput.val()}`
                                console.log(`${path}/${valueInput.val()}`);
                            })

                            // end url input
                            $(document).ready(function() {
                                var modal = $('.modal');
                                var btn = $('.btn-add-product');
                                var btnclose = $('.cancal-addproduct');

                                btn.click(function() {
                                    modal.show();
                                });

                                btnclose.click(function() {
                                    modal.hide();
                                });

                                $(window).on('click', function(e) {
                                    if ($(e.target).is('.modal')) {
                                        modal.hide();
                                    }
                                });
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
                            }, );
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
