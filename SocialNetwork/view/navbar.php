<?php
include "header.php";
include "model/database.php";
if (!isset($_SESSION["login_status"])) {
    $_SESSION["login_status"] = false;
}
?>

<div class="container-light pt-2 pb-1">
    <div class="container">
        <nav class="navbar navbar-expand-lg navbar-dark mb-2 rounded ">
            <div class="container-fluid">
                <?php if ($_SESSION["login_status"] == null || $_SESSION["login_status"] == false) : ?>
                    <a class="nav-link text-dark fs-6" href="index.php"><b>شبکه اجتماعی</b></a>
                <?php endif; ?>
                <button class="navbar-toggle navbar-toggler" type="button btn-dark" data-bs-toggle="collapse" data-bs-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarColor01">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0 col-lg-auto me-lg-auto justify-content-center ">
                        <?php if ($_SESSION["login_status"] == null || $_SESSION["login_status"] == false) : ?>
                            <li class="nav-item">
                                <a class="text-dark nav-link active fs-6" aria-current="page" href="index.php">صفحه اصلی</a>
                            </li>
                        <?php endif; ?>

                        <?php if ($_SESSION["login_status"] != null && $_SESSION["login_status"] == true) : ?>
                            <?php
                            $user_id = $_SESSION["user_id"];
                            $user = $db->query("SELECT * FROM users WHERE id = $user_id")->fetch_assoc();
                            ?>
                            <li class="nav-item mx-4">
                                <a class="text-dark nav-link active fs-6" aria-current="page" href="personal_profile.php">
                                    <span>
                                        <?php if (isset($user["image"])) : ?>
                                            <img style="width: 30px;" src="<?php echo $user["image"]; ?>" class="img-fluid rounded-circle" alt="">
                                        <?php else : ?>
                                            <img style="width: 30px;" src="view/images/users/default.jpg" class="img-fluid rounded-circle" alt="">
                                        <?php endif; ?>
                                    </span>
                                    <span> <?php echo $_SESSION["user_name"]; ?> </span>
                                </a>
                            </li>
                            <ul class="navbar-nav me-auto mb-2 mb-lg-0"></ul>
                            <li class="nav-item mx-4">
                                <a a class="nav-link text-dark fs-6" href="logout">
                                    <i class="fas fa-user mx-1"></i> خروج از حساب کاربری
                                </a>
                            </li>
                        
                </div>

                </ul>

                <div class="text-start">
                    <form method="post" action="search" class="d-flex">
                        <input name="text" class="form-control me-2 mt-1" type="search" placeholder="جستجو" aria-label="Search">
                        <button class="btn btn-outline-secondary mt-1" type="submit">جستجو</button>
                    </form>
                </div>
                        <?php endif; ?>
            </div>
        </nav>
        <hr class="text-dark mt-0">
    </div>
    
</div>


</div>