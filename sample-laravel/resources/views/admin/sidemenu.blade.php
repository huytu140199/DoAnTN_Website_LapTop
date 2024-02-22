<ul class="metismenu side-nav">

    <div class="side-nav-title side-nav-item"><a href="/admin">Trang chủ</a></div>

    <li class="side-nav-item">
        <a href="/admin/product">
            <div class="submenu-item-admin">
                <div class="side-nav-link">
                    <div class="side-nav-link-item">
                        <i class="fa-solid fa-store"></i>
                        <span>Quản lý sản phẩm</span>


                    </div>
                </div>
            </div>
        </a>

    </li>


    <li class="side-nav-item">
        <a href="/admin/user">
            <div class="submenu-item-admin ">
                <div class="side-nav-link">
                    <div class="side-nav-link-item">
                        <i class="fa-solid fa-store"></i>
                        <span>Quản lý khách hàng</span>


                    </div>
                </div>
            </div>
        </a>




    </li>
    <li class="side-nav-item">
        <a href="/admin/order">
            <div class="submenu-item-admin">
                <div class="side-nav-link">
                    <div class="side-nav-link-item">
                        <i class="fa-solid fa-store"></i>
                        <span>Quản lý đơn hàng</span>
                    </div>
                </div>
            </div>
        </a>

    </li>

</ul>


<script type="text/javascript">
    $(document).ready(function() {
        //jquery for toggle sub menus
        $('.side-nav-link').click(function() {
            $(this).next('.side-nav-second-level').slideToggle();
            $(this).find('.dropdown').toggleClass('rotate');
        });


    });
    window.addEventListener('load', function() {

        $(".metismenu  >li>a[href='" + location.pathname + "']").parent().addClass("active").each(function() {

            $(".metismenu >li>a[href='" + $(this).attr("href") + "']").parent().addClass("active")

        });

    })
</script>
