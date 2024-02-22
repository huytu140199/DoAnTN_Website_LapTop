<!DOCTYPE html>
<html lang="en">

<head>
    @include('admin.header')

</head>

<body style="background-color: #F5F5F5">
    @include('user.header')

    <div class="container-fluid">
        <div class=" form-login  justify-content-center align-items-center m-0" style="height: 100vh;">
            <div class="login-box">
                <div class="header-form-login">

                    <h1 class=" ">Đăng nhập tài khoản</h1>
                </div>
                <div class="login_oueter">

                    <form action="{{ url('login') }}" method="POST" id="login" autocomplete="off"
                        class="bg-light border p-3">
                        @include('admin.alert')

                        <div class="form-row ">

                            <div class="col-12">
                                <h6>Số điện thoại</h6>
                                <div class="input-group mb-3">

                                    <input name="phone" type="tel" value="" {{-- pattern="(84|0[3|5|7|8|9])+([0-9]{8})\b"  --}}
                                        class="input form-control" {{-- required ="ádads"  --}} {{-- oninvalid="this.setCustomValidity('Vui lòng nhập đúng định dạng số điện thoại')"
                                    oninput="this.setCustomValidity('')" --}}
                                        id="phone" placeholder="Nhập số điện thoại" aria-label="Nhập số điện thoại"
                                        aria-describedby="basic-addon1" />

                                </div>
                            </div>
                            <div class="col-12">
                                <h6>Mật khẩu</h6>

                                <div class="input-group mb-3">

                                    <input name="password" type="password" value="" class="input form-control"
                                        id="password" placeholder="Nhập mật khẩu" required="true" required="ádads"
                                        oninvalid="this.setCustomValidity('Vui lòng nhập mật khẩu')"
                                        oninput="this.setCustomValidity('')" aria-label="Nhập mật khẩu"
                                        aria-describedby="basic-addon1" />
                                    <div class="input-group-append">
                                        <span class="input-group-text" onclick="password_show_hide();">
                                            <i class="fas fa-eye" id="show_eye"></i>
                                            <i class="fas fa-eye-slash d-none" id="hide_eye"></i>
                                        </span>
                                    </div>
                                </div>

                            </div>
                            <div class="col-12">
                                <div class="form-group form-check text-left">
                                    <input type="checkbox" name="remember" class="form-check-input" id="remember_me" />
                                    <label class="form-check-label" for="remember_me">Ghi nhớ đăng nhập</label>
                                </div>
                                <div class="  text-right">
                                    <a href="#">Quên mật khẩu ?</a>
                                </div>
                            </div>

                            <div class="col-12 center-button">
                                <button class=" btn btn-primary  " type="submit" name="signin">Đăng nhập</button>
                            </div>
                        </div>
                        @csrf

                    </form>
                </div>
                <div class="Register-account-link">
                    <p>Bạn chưa có tài khoản ?<a href="/register"> Đăng ký</a></p>
                </div>
            </div>

        </div>
    </div>
    @include('user.footer')

    <script>
        function password_show_hide() {
            var x = document.getElementById("password");
            var show_eye = document.getElementById("show_eye");
            var hide_eye = document.getElementById("hide_eye");
            hide_eye.classList.remove("d-none");
            if (x.type === "password") {
                x.type = "text";
                show_eye.style.display = "none";
                hide_eye.style.display = "block";
            } else {
                x.type = "password";
                show_eye.style.display = "block";
                hide_eye.style.display = "none";

            }
        }
    </script>



</body>

</html>
