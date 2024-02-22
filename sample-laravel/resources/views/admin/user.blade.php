<?php

// tạo kết nối
$connect = mysqli_connect('localhost', 'root', '', 'laravel');
// kiểm kết nối
$sql = 'SELECT `image`, `name`, `email`, `password`, `address`, `phone`, `gender`  FROM `users` ';
$result = mysqli_query($connect, $sql);
?>


<!DOCTYPE html>
<html lang="en">

<head>
    @include('admin.header')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">
</head>

<body>
    <style>
        * {
            box-sizing: border-box;
        }

        body {
            font-family: Arial, Helvetica, sans-serif;
            line-height: 1.3;
        }

        #wrapper {
            min-width: 100vh;
        }

        button#btn-open {
            background: #ddd;
            color: black;
            border: none;
            cursor: pointer;
            box-shadow: 0px 2px 4px rgba(0, 0, 0, 0.5);
        }

        #modal-container {
            height: 100vh;
            background: rgba(0, 0, 0, 0.5);
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            opacity: 0;
            pointer-events: none;
            transition: all 0.25s ease-in-out;
        }

        #modal-container.show {
            opacity: 1;
            pointer-events: all;
        }

        #modal {
            background: #fff;
            max-width: 500px;
            position: relative;
            left: 55%;
            top: 0px;
            margin-top: 100px;
            transform: translateX(-50%);
            transition: all 0.25s ease-in-out;
        }

        #modal-container.show #modal {
            top: 100px;
        }

        #modal .modal-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 15px 20px;
            border-bottom: 1px solid #dedede;
        }

        #modal .modal-header h3 {
            margin: 0;
        }

        button#btn-close {
            outline: none;
            border: none;
            cursor: pointer;
            background: transparent;
            color: black;
        }

        #modal .modal-body {
            padding: 10px 20px 15px;
        }

        button#option {
            outline: none;
            border: none;
            cursor: pointer;
        }
    </style>
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
                                </span>
                                <a href="/logout" class="sign-out-admin-icon"> <i class="fas fa-sign-out-alt"
                                        title="đăng xuất"></i></a>
                            </div>


                        </li>
                    </ul>
                    <button class="button-menu-mobile open-left disable-btn">
                        <i class="mdi mdi-menu"></i>
                    </button>
                    <div class="app-search dropdown header-admin-menu">
                        <form method="get" action="{{ route('searchUserAdmin') }}">


                            <div class="input-group mb-3">

                                <input type="text" class="form-control dropdown-toggle" placeholder="Tìm kiếm..." id="top-search" name='key'>
                                {{-- <div class="input-group-addon-search">

                                                          <i class="fa-solid fa-magnifying-glass icon-search"></i>
                                                      </div> --}}
                                <span class="mdi mdi-magnify search-icon"></span>

                            </div>
                        </form>

                    </div>
                </div>
                <div class="row justify-content-center">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="page-title-box">
                                <h4 class="page-title">Danh sách khách hàng </h4>

                            </div>
                            <div class="row justify-content-center">
                                <table class="table table-striped table-centered " style="text-align:center">
                                    <thead>
                                        <tr>
                                            <th>STT</th>
                                            <th>Họ tên</th>
                                            <th>Email</th>
                                            <th>Địa chỉ</th>
                                            <th>Số điện thoại</th>
                                            <th>Giới tính</th>
                                            <th>Ảnh đại diện</th>
                                            <th>Lịch sử </th>
                                            <th>Xóa</th>

                                        </tr>
                                    </thead>
                                    <tbody>
                                        @if (!empty($users))
                                            @foreach ($users as $key => $item)
                                                <tr>
                                                    <td>{{ $key + 1 }}</td>
                                                    <td>{{ $item->name }}</td>
                                                    <td>{{ $item->email }}</td>
                                                    <td>{{ $item->address }}</td>
                                                    <td>{{ $item->phone }}</td>
                                                    @if ($item->gender == 0)
                                                        <td>Nam</td>
                                                    @else
                                                        <td>Nữ</td>
                                                    @endif
                                                    <td> <img src="{{ $item->image }}" alt="" height="40">
                                                    </td>

                                                    <td><a href="/admin/user/purchase_history/{{ $item->id_user }}"><i
                                                                class="fa-solid fa-history"></i></a></td>
                                                    </td>
                                                    <td>
                                                        <form method="GET"
                                                            action="/admin/delete_user/{{ $item->id_user }}">
                                                            @csrf
                                                            <input name="_method" type="hidden" value="DELETE">
                                                            <a class=" btn-flat show_confirm" data-toggle="tooltip"
                                                                title='Delete'><i
                                                                    class="fa-sharp fa-solid fa-trash"></i></a>
                                                        </form>
                                                    </td>
                                                </tr>
                                                </tr>
                                            @endforeach
                                        @else
                                            <tr>
                                                <td colspan="9">Không có dữ liệu</td>
                                            </tr>
                                        @endif
                                </table>
                                <form action="remove_product.php" method="post" id="xoa">
                                    <input type="hidden" id="id" name="id">
                                </form>
                                {{ $users->links() }}


                            </div>
                        </div>
                    </div>

                </div>
                <div style="position: relative; left: -280px;"> @include('admin.footer_admin')</div>
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
    });
</script>
@section('scripts')
    <script>
        $(document).ready(function() {
            $('.servicedeletebtn').click(function(e) {
                e.preventDefault();

                swal({
                    title: "Are you sure?",
                    text: "Once deleted, you will not be able to recover this imaginary file!",
                    icon: "warning",
                    buttons: true,
                    dangerMode: true,
                }).then(willDelete) => {
                    if (willDelete) {
                        swal("Poof! Your imaginary file has been deleted!", {
                            icon: "success",
                        });
                    } else {
                        swal("Your imaginary file is safe!");
                    }
                }
            });
        });
    </script>
@endsection
