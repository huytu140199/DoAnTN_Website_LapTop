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
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-12">
                                <div class="page-title-box">
                                    <h4 class="page-title">Sửa thông tin sản phẩm</h4>
                                </div>
                            </div>
                        </div>
                        <div class="row justify-content-center">
                            <div class="col-xl-10 col-lg-10 ">
                                <form action="/admin/editProduct/{{ $products[0]->id_product }}" method="post"
                                    enctype="multipart/form-data">
                                    <table class="table table-striped mb-0">
                                        <tr>
                                            <th>Nhà cung cấp</th>
                                            <td>
                                                <select name="id_supplier">
                                                    @if (!empty($supplier))
                                                        @foreach ($supplier as $key => $items)
                                                            <option value="{{ $items->id_supplier }}" selected="">
                                                                {{ $items->name_supplier }}
                                                            </option>
                                                        @endforeach
                                                    @else
                                                        <option value="lỗi">Lỗi</option>
                                                    @endif
                                                </select>
                                            </td>
                                        </tr>

                                        <tr>
                                            <th>Hãng</th>
                                            <td>
                                                <select name="id_brand">
                                                    @if (!empty($brand))
                                                        @foreach ($brand as $key => $items)
                                                            <option value="{{ $items->id_brand }}" selected="">
                                                                {{ $items->name_brand }}
                                                            </option>
                                                        @endforeach
                                                    @else
                                                        <option value="lỗi">Lỗi</option>
                                                    @endif
                                                </select>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th>Danh mục</th>
                                            <td>
                                                <select name="id_categories">
                                                    @if (!empty($categories))
                                                        @foreach ($categories as $key => $items)
                                                            <option value="{{ $items->id_categories }}" selected="">
                                                                {{ $items->name_categories }}
                                                            </option>
                                                        @endforeach
                                                    @else
                                                        <option value="lỗi">Lỗi</option>
                                                    @endif
                                                </select>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th>Tên Sản Phẩm</th>
                                            <td> <input type="text" name="name" style="width:30%"
                                                    value="{{ $products[0]->name }}"> </td>
                                        </tr>
                                        <tr>
                                            <th>Giá</th>
                                            <td><input type="text" name="price" value="{{ $products[0]->price }}">
                                            </td>
                                        </tr>
                                        <tr>
                                            <th>Hình Ảnh</th>
                                            <td><input class="file-upload upload-button" type="file" name="img"
                                                    accept="image/*" value="{{ $products[0]->image }}">
                                                <img class="profile-pic" src="{{ $products[0]->image }}" alt=""
                                                    height="80">
                                            </td>
                                        </tr>
                                        <tr>
                                            <th>RAM</th>
                                            <td><input type="text" value="{{ $products[0]->ram }}"
                                                    name="ram"><img src="{{ $products[0]->ram }}" alt="">
                                            </td>
                                        </tr>
                                        <tr>
                                            <th>CPU</th>
                                            <td><input type="text" value="{{ $products[0]->cpu }}"
                                                    name="cpu"><img src="{{ $products[0]->cpu }}" alt="">
                                            </td>
                                        </tr>
                                        <tr>
                                            <th>Bộ nhớ</th>
                                            <td><input type="text" value="{{ $products[0]->capacity }}"
                                                    name="capacity"><img src="{{ $products[0]->capacity }}"
                                                    alt=""></td>
                                        </tr>
                                        <tr>
                                            <th>Số lượng</th>
                                            <td><input type="text" value="{{ $products[0]->quantity }}"
                                                    disabled="true" name="quantity"><img
                                                    src="{{ $products[0]->quantity }}" alt=""></td>
                                        </tr>
                                        <tr>
                                            <th>Mô Tả</th>
                                            <td>
                                                <textarea name="description" rows="5" cols="60">{{ $products[0]->description }}</textarea>
                                            </td>
                                        </tr>



                                    </table>
                                    <div class="btn-admin ">
                                        <form method="GET"
                                            action="/admin/import_product/{{ $products[0]->id_product }}">
                                            @csrf
                                            <button class="btn btn-danger show_confirm pe-4 ps-4" type="submit"> Cập
                                                nhật</button>
                                        </form>

                                        <a class="btn btn-danger pe-4 ps-4" type="submit" href="/admin/product"
                                            style="margin-left: 50px;">Huỷ
                                        </a>

                                    </div>


                                    @csrf
                                </form>
                            </div>
                        </div>
                    </div>

                </div>
                @include('admin.footer')
                <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.0/sweetalert.min.js"></script>

                <script type="text/javascript">
                    $('.show_confirm').click(function(event) {

                        var form = $(this).closest("form");

                        var name = $(this).data("name");

                        event.preventDefault();

                        swal({
                                text: `Thông tin sản phẩm sẽ được cập nhật. Bạn có chắc không?`,
                                buttons: true,
                                icon: 'warning',
                                dangerMode: true,
                            })
                            .then((willDelete) => {
                                if (willDelete) {
                                    swal("Cập nhật thành công ", {
                                        icon: "success",
                                    });
                                    form.submit();
                                } else {
                                    form.closest();
                                }
                            });
                    });
                </script>
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

<script>
    $(document).ready(function() {


        var readURL = function(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();

                reader.onload = function(e) {
                    $('.profile-pic').attr('src', e.target.result);
                }

                reader.readAsDataURL(input.files[0]);
            }
        }


        $(".file-upload").on('change', function() {
            readURL(this);
        });

        $(".upload-button").on('click', function() {
            $(".file-upload").click();
        });
    });
</script>
