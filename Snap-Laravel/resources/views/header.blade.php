        <!-- header section strats -->
        <header class="header_section">
            <div class="container-fluid">
                <nav class="navbar navbar-expand-lg custom_nav-container ">
                    <a class="navbar-brand" href="index.html">
                        <span>
                            تاکسی آنلاین
                        </span>
                    </a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <div class="d-flex ml-auto flex-column flex-lg-row align-items-center">
                            <ul class="navbar-nav  ">
                                <li class="nav-item active">
                                    <a class="nav-link" href="/">خانه</a>
                                </li class="nav-item active">
                                @auth
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ url('/logout') }}">خروج از حساب کاربری</a>
                                </li>
                                @endauth
                                @guest
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ url('/driver_login') }}">ثبت نام | ورود راننده</a>
                                </li>
                                @endguest
                            </ul>
                        </div>
                    </div>
                </nav>
            </div>
        </header>
        <!-- end header section -->