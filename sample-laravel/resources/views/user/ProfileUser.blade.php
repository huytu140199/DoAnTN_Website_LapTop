<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Thông tin khách hàng</title>

    <link rel="stylesheet" href="{{ asset('css/user/profile.css') }}">
</head>

<body>
    @include('user.header')

    <div class="m-profile ">

        <div class="m-profile-container">
            <div class="m-profile-box ">
                <div class="m-profile-main">
                    <div class="m-profile-router d-flex ">
                        <span class="fs-4 "><a href="/user">Trang chủ</a> /</span>
                        <span class="fs-4 ms-2" style="font-weight: 500;">Thông tin khách hàng</span>
                    </div>
                    <div class="m-profile-avatar">

                        <div class="profile-avatar-box row">
                            <div class="">
                                <div class="circle">
                                    <img class="profile-pic"
                                        src="https://as2.ftcdn.net/v2/jpg/03/49/49/79/1000_F_349497933_Ly4im8BDmHLaLzgyKg2f2yZOvJjBtlw5.jpg">

                                </div>
                                <div class="p-image">
                                    <i class="fa fa-camera upload-button"></i>
                                    <input class="file-upload" type="file" accept="image/*" />
                                </div>
                            </div>
                        </div>
                        <!-- <div class="profile-camera"></div> -->

                    </div>
                    <div class="m-profile-content">
                        <div class="profile-content-item d-flex">
                            <div class="profile-content-left">
                                Tên:
                            </div>
                            <div class="profile-content-right">
                                <div class="profile-content-right-input">
                                    <i class="fa-solid fa-pen m-icon-edit"></i>
                                    <input id="name" minlength="6" pattern="[A-Za-z]{*}" type="text"
                                        class="profile-input-text" value="{{ Auth::user()->name }}">
                                </div>

                            </div>
                        </div>
                        <div class="profile-content-item d-flex">
                            <div class="profile-content-left">
                                Số điện thoại:
                            </div>
                            <div class="profile-content-right">
                                <div class="profile-content-right-input">

                                    <input id=" phone" type="text" class="profile-input-text"
                                        value="{{ Auth::user()->phone }}" readonly style="background-color: #F1F1F1;">
                                </div>
                            </div>
                        </div>
                        <div class="profile-content-item d-flex">
                            <div class="profile-content-left">
                                Email:
                            </div>
                            <div class="profile-content-right">
                                <div class="profile-content-right-input">
                                    <i class="fa-solid fa-pen m-icon-edit"></i>
                                    <input id="email" type="text" class="profile-input-text"
                                        value="{{ Auth::user()->email }}">
                                </div>
                            </div>
                        </div>
                        <div class="profile-content-item d-flex">
                            <div class="profile-content-left">
                                Địa chỉ cụ thể:
                            </div>
                            <div class="profile-content-right">
                                <div class="profile-content-right-input">
                                    <i class="fa-solid fa-pen m-icon-edit"></i>
                                    <input id="address" type="text" class="profile-input-text"
                                        value="{{ Auth::user()->address }}">
                                </div>
                            </div>
                        </div>
                        <div class="profile-content-item d-flex">
                            <div class="profile-content-left">
                            </div>
                            <div class="profile-content-right">
                                <div class="form-address">
                                    <select name="city" id="city">
                                    </select>
                                    <select name="ward" id="ward">
                                    </select>
                                    <select name="district" id="district">

                                    </select>
                                </div>

                            </div>
                        </div>

                        <div class="profile-content-item d-flex">
                            <div class="profile-content-left">
                                Giới tính:
                            </div>
                            <div class="profile-content-right">
                                <div class="h-100 d-flex align-items-center me-4">
                                    @if (Auth::user()->gender == 1)
                                        <input type="radio" class="profile-input-radio" name="gender" checked>
                                    @else
                                        <input type="radio" class="profile-input-radio" name="gender">
                                    @endif
                                    <label for="" class="profile-input-radio-text mb-0">Nam</label>
                                </div>

                                <div class=" h-100 d-flex align-items-center">
                                    @if (Auth::user()->gender == 0)
                                        <input type="radio" class="profile-input-radio" name="gender" checked>
                                    @else
                                        <input type="radio" class="profile-input-radio" name="gender">
                                    @endif <label for="" class="mb-0">Nữ</label>
                                </div>
                            </div>
                        </div>


                        <div class="profile-content-item d-flex">
                            <button class="btn btn-danger pe-4 ps-4 btn-profile">Cập nhật</button>

                        </div>
                    </div>
                </div>
            </div>
        </div>
        @include('user.support')
        @include('user.footer')
    </div>

</body>

</html>
<script src="{{ asset('js/user/home.js') }}"></script>
<script src="{{ asset('js/user/profile.js') }}"></script>
<script>
    const payProductButton = $(".btn-profile");


    const btnOrder = $(".btn-profile");

    btnOrder.click((e) => {
        let err = false;
        // e.preventDefault();


        if (err) {
            e.preventDefault();
            return;
        }

        // alert(`Thank you, ${$("#namePay").val()}`);

        // name.val("");
    });
</script>
