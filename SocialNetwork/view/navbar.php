<div class="container">
        <nav class="navbar navbar-expand-lg navbar-light mb-2 mt-2 rounded ">
            <div class="container-fluid">
                <a class="navbar-brand text-dark fs-6" href="index.php"><b>شبکه اجتماعی</b></a>

                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarColor01">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0 col-lg-auto me-lg-auto justify-content-center ">
                        <li class="nav-item">
                            <a class="nav-link active fs-6" aria-current="page" href="index.php">صفحه اصلی</a>
                        </li>
                    </ul>
                    <?php //if ($_SESSION["login_status"] != null && $_SESSION["login_status"] == true) : ?>
                        <!-- <div class="text-start">
                            <a a class="nav-link text-white" href="admin_logout.php">
                                <i class="fas fa-user mx-1"></i> خروج از پنل مدیریت
                            </a>
                        </div> -->
                    <?php //else : ?>
                        <!-- <div class="text-start">
                            <a a class="nav-link text-white" href="admin_login.php">
                                <i class="fas fa-user mx-1"></i>ورود 
                            </a>
                        </div> -->
                    <?php // endif; ?>
                </div>
            </div>
        </nav>
    </div>

    <div class="container">
        <hr class="text-dark mb-4">
    </div>