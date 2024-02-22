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
          <form>

              <div class="input-group mb-3">

                  <input type="text" class="form-control dropdown-toggle" placeholder="Tìm kiếm..." id="top-search">
                  {{-- <div class="input-group-addon-search">

                                            <i class="fa-solid fa-magnifying-glass icon-search"></i>
                                        </div> --}}
                  <span class="mdi mdi-magnify search-icon"></span>

              </div>
          </form>

      </div>
  </div>
