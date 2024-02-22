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
                    @include('admin.header_menu')
                    <!-- Lịch sử mua hàng -->

                    <div class="row justify-content-center">
                        <div class="container-fluid">
                            <div class="row">
                                <div class="page-title-box">
                                    <h4 class="page-title" style="border-bottom:1px solid ;">Lịch sử mua hàng </h4>
                                </div>
                                <div class="row justify-content-center">
                                    <div class="name_user">
                                        {{ $nameUser[0]->name }}
                                    </div>


                                    <div style="padding-top: 20px;">
                                        <h5 style="float:left ; font-weight: bold;">Tổng tiền đã mua:
                                            {{ $sum_total_price[0]->total }}</h5>

                                        @if (!empty($history))
                                            <h5 style="float: right ;font-weight: bold">Số lượng đơn hàng:
                                                {{ $history[0]->quantity }}</h5>
                                        @else
                                            <h5 style="float: right ;font-weight: bold">Số lượng đơn hàng: 0</h5>
                                        @endif


                                    </div>
                                    <table class="table table-striped table-centered " style="text-align:center">
                                        <thead>
                                            <tr>
                                                <th>STT</th>
                                                <th>Mã đơn hàng</th>
                                                <th>Ngày mua</th>
                                                <th>Tên sản phẩm</th>
                                                <th>Số lượng</th>
                                                <th>Giá tiền</th>
                                                <th>Tổng tiền</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @if (!empty($history))
                                                @foreach ($history as $key => $item)
                                                    <tr>
                                                        <td>{{ $key + 1 }}</td>
                                                        <td>{{ $item->id_bill }}</td>
                                                        <td>{{ $item->created_at }}</td>
                                                        <td>{{ $item->name }}</td>
                                                        <td>{{ $item->quantity }}</td>
                                                        <td>{{ $item->price }}</td>
                                                        <td>{{ $item->total_price }}</td>
                                                    </tr>
                                                @endforeach
                                            @else
                                                <tr>
                                                    <td colspan="7">Không có đơn hàng nào.</td>
                                                </tr>
                                            @endif
                                    </table>
                                    <form action="remove_product.php" method="post" id="xoa">
                                        <input type="hidden" id="id" name="id">
                                    </form>
                                </div>
                                {{-- {{$products->links()}} --}}
                            </div>
                        </div>
                    </div>

                </div>
                @include('admin.footer')
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
