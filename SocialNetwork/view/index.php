<?php
include "header.php";
include "navbar.php";
include "model/database.php";
?>


<div class="container">

    <?php if(isset($_SESSION["message"])): ?>
    
    <div class="row justify-content-center mt-3">
        <?php for($i=0, $len=count($_SESSION["message"]); $i<$len; $i++): ?> 
        <div class="col-12">
            <?php if($_SESSION["message_type"][$i] == "success"): ?>
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                <?php echo $_SESSION["message"][$i]; ?>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
            <?php elseif($_SESSION["message_type"][$i] == "error"): ?>
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                <?php echo $_SESSION["message"][$i]; ?>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
            <?php endif ?>
        </div>
        <?php endfor; ?>
    </div>
    
    <?php unset($_SESSION["message"]); ?>
    <?php endif; ?>

    <div class="row mt-5 justify-content-center">
        <div class="col-lg-4 col-md-6 col-sm-12">
            <div class="card shadow border-0 rounded-3">
                <div class="card-header py-3">
                     ورود به حساب کاربری  
                </div>
                <div class="card-body">
                    <form method="post" action="user_login">
                        <div class="mb-4">
                            <label class="form-label" style="font-size: 15px;">نام کاربری</label>
                            <input type="text" class="form-control" name="username" placeholder="ایمیل یا شماره موبایل">
                        </div>
                        <div class="mb-4">
                            <label class="form-label" style="font-size: 15px;">گذرواژه</label>
                            <input type="password" class="form-control" name="password" placeholder="****">
                        </div>
                        <div class="form-check mb-4 text-right">
                            <input type="checkbox" class="form-check-input">
                            <label class="form-check-label" for="exampleCheck1" style="font-size: 14px;">مرا به خاطر بسپار</label>
                        </div>

                        <div class="d-grid gap-2 mb-3">
                            <button type="submit" class="btn btn-primary">ورود</button>
                        </div>

                    </form>
                    <a href="" class="text-decoration-none">
                        <p class="text-center mt-2" style="font-size: 14px;">فراموشی رمز عبور</p>
                    </a>

                    <hr class="text-dark mb-3">

                    <!-- Button trigger modal -->
                    <div class="text-center">
                        <a href="registration_form.php">
                            <button type="button" class="btn btn-success" style="font-size: 15px;">
                            عضویت
                            </button>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<?php include "footer.php"; ?>