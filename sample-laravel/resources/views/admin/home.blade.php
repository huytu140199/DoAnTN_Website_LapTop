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
                    <h4 class="page-title">Tổng quan</h4>
                    <div class="row">
                        <div class="col-4 col-sm-4">
                            <div class="card padding-right" style="background-color: #7d766e;">
                                <h5 class="header-card ">TỔNG KHÁCH HÀNG</h5>
                                <h3 class="body-card">{{ $allCustomer[0]->allCustomer }}</h3>
                                @if ($customerLastMonth[0]->customerLastMonth < $customerThisMonth[0]->customerThisMonth)
                                    <span class="number-card-up"><i class="fa-sharp fa-solid fa-arrow-up">
                                            {{ $a }}%</i></span>
                                @else
                                    <span class="number-card-down"><i class="fa-sharp fa-solid fa-arrow-down">
                                            {{ $b }}%</i></span>
                                @endif
                                <span class="bottom-card">Kể từ tháng trước</span>
                            </div>
                        </div>
                        <div class="col-4 col-sm-4">
                            <div class="card padding-right" style="background-color: antiquewhite;">
                                <h5 class="header-card ">TỔNG ĐƠN HÀNG</h5>
                                <h3 class="body-card">{{ $allOrders[0]->allOrders }}</h3>
                                @if ($ordersLastMonth[0]->ordersLastMonth < $ordersThisMonth[0]->ordersThisMonth)
                                    <span class="number-card-up"><i class="fa-sharp fa-solid fa-arrow-up">
                                            {{ $c }}%</i></span>
                                @else
                                    <span class="number-card-down"><i class="fa-sharp fa-solid fa-arrow-down">
                                            {{ $d }}%</i></span>
                                @endif

                                <span class="bottom-card">Kể từ tháng trước</span>
                            </div>
                        </div>

                        <div class="col-4 col-sm-4">
                            <div class="card " style="background-color: #1598b3;">
                                <h5 class="header-card ">DOANH THU </h5>
                                <h3 class="body-card">{{ $format }} VND</h3>
                                @if ($revenueLastMonth[0]->revenueLastMonth < $revenueThisMonth[0]->revenueThisMonth)
                                    <span class="number-card-up"><i class="fa-sharp fa-solid fa-arrow-up">
                                            {{ $e }}%</i></span>
                                @else
                                    <span class="number-card-down"><i class="fa-sharp fa-solid fa-arrow-down">
                                            {{ $f }}%</i></span>
                                @endif
                                <span class="bottom-card">Kể từ tháng trước</span>
                            </div>
                        </div>
                    </div>
                    {{-- </div> --}}
                    <div class="roww">
                        {{-- <div class="col-lg-8">
                            <div class="card">
                                <div class="card-body1">

                                    <h4 class="header-title mb-3">Revenue</h4>
                                    <div class="chart-content-bg">
                                        <div class="row text-center">
                                            <div class="col-md-6">
                                                <p class="text-card mb-0 mt-3">Current Week</p>
                                                <h2 class="font-weight-normal mb-3">
                                                    <small
                                                        class="mdi mdi-checkbox-blank-circle text-primary align-middle mr-1"></small>
                                                    <span>$58,254</span>
                                                </h2>
                                            </div>
                                            <div class="col-md-6">
                                                <p class="text-card mb-0 mt-3">Previous Week</p>
                                                <h2 class="font-weight-normal mb-3">
                                                    <small
                                                        class="mdi mdi-checkbox-blank-circle text-success align-middle mr-1"></small>
                                                    <span>$69,524</span>
                                                </h2>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="dash-item-overlay d-none d-md-block">
                                        <h5>Today's Earning: $2,562.30</h5>
                                        <p class="text-card font-13 mb-3 mt-2">Etiam ultricies nisi vel augue.
                                            Curabitur ullamcorper ultricies nisi. Nam eget dui.
                                            Etiam rhoncus...</p>
                                        <a href="javascript: void(0);" class="btn btn-outline-primary">View
                                            Statements
                                            <i class="mdi mdi-arrow-right ml-2"></i>
                                        </a>
                                    </div>
                                    <div id="revenue-chart" class="apex-charts mt-3" data-colors="#3688fc,#f9bc0d">
                                    </div>
                                </div>
                            </div>
                        </div> --}}
                        {{-- <div class="col-lg-4">
                            <div class="card">
                                <div class="card-body2">
                                    <div class="dropdown float-right">
                                        <a href="#" class="dropdown-toggle arrow-none card-drop"
                                            data-toggle="dropdown" aria-expanded="false">
                                            <i class="mdi mdi-dots-vertical"></i>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-right">
                                            <a href="javascript:void(0);" class="dropdown-item">Sales Report</a>
                                            <a href="javascript:void(0);" class="dropdown-item">Export Report</a>
                                            <a href="javascript:void(0);" class="dropdown-item">Profit</a>
                                            <a href="javascript:void(0);" class="dropdown-item">Action</a>
                                        </div>
                                    </div>
                                    <h4 class="header-title">Revenue By Location</h4>
                                    <div class="mb-4 mt-4">
                                        <div id="world-map-markers" style="height: 224px"></div>
                                    </div>
                                    <h5 class="mb-1 mt-0 font-weight-normal">New York</h5>
                                    <div class="progress-w-percent">
                                        <span class="progress-value font-weight-bold">72k </span>
                                        <div class="progress progress-sm">
                                            <div class="progress-bar bg-dark" role="progressbar" style="width: 72%;"
                                                aria-valuenow="72" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </div>
                                    <h5 class="mb-1 mt-0 font-weight-normal">San Francisco</h5>
                                    <div class="progress-w-percent">
                                        <span class="progress-value font-weight-bold">39k </span>
                                        <div class="progress progress-sm">
                                            <div class="progress-bar bg-warning" role="progressbar"
                                                style="width: 39%;" aria-valuenow="39" aria-valuemin="0"
                                                aria-valuemax="100"></div>
                                        </div>
                                    </div>
                                    <h5 class="mb-1 mt-0 font-weight-normal">Sydney</h5>
                                    <div class="progress-w-percent">
                                        <span class="progress-value font-weight-bold">25k </span>
                                        <div class="progress progress-sm">
                                            <div class="progress-bar bg-info" role="progressbar" style="width: 39%;"
                                                aria-valuenow="39" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </div>
                                    <h5 class="mb-1 mt-0 font-weight-normal">Singapore</h5>
                                    <div class="progress-w-percent mb-0">
                                        <span class="progress-value font-weight-bold">61k </span>
                                        <div class="progress progress-sm">
                                            <div class="progress-bar bg-success" role="progressbar"
                                                style="width: 61%;" aria-valuenow="61" aria-valuemin="0"
                                                aria-valuemax="100"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div> --}}
                    </div>

                </div>
                @include('admin.footer_admin')
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
