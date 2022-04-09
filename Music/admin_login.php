<?php
include "header.php";
?>

<div class="container">
    <div class="row mt-3 justify-content-center">
        <div class="col-lg-4 col-md-6 col-sm-12">
            <div class="card">
                <div class="card-header">
                                ورود به پنل مدیریت
                </div>
                <div class="card-body">
                    <form method="post" action="admin_login_process.php">
                        <div class="mb-3">
                            <label class="form-label">نام کاربری</label>
                            <input type="text" class="form-control" name="username">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">گذرواژه</label>
                            <input type="password" class="form-control" name="password">
                        </div>
                        <div class="form-check mb-3">
                            <input type="checkbox" class="form-check-input">
                            <label class="form-check-label" for="exampleCheck1">مرا به خاطر بسپار</label>
                        </div>
                        <button type="submit" class="btn btn-primary">ورود</button>
                    </form>

                </div>
            </div>
        </div>
    </div>
</div>

<?php include "footer.php"; ?>