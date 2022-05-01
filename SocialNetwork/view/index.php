<?php
include "header.php";
include "../model/database.php";

// $notes = $db->query("SELECT * FROM tasks");
// $colors = $db->query("SELECT * FROM colors");

?>


<div class="container">
    <div class="row mt-5 justify-content-center">
        <div class="col-lg-4 col-md-6 col-sm-12">
            <div class="card shadow border-0 rounded-3">
                <!-- <div class="card-header">
                     ورود  
                </div> -->
                <div class="card-body">
                    <form method="post" action="registration_form.php">
                        <div class="mb-3">
                            <label class="form-label">نام کاربری</label>
                            <input type="text" class="form-control" name="username">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">گذرواژه</label>
                            <input type="password" class="form-control" name="password">
                        </div>
                        <div class="form-check mb-3 text-right">
                            <input type="checkbox" class="form-check-input">
                            <label class="form-check-label" for="exampleCheck1">مرا به خاطر بسپار</label>
                        </div>

                        <div class="d-grid gap-2">
                            <button type="submit" class="btn btn-primary">ورود</button>
                        </div>

                    </form>
                    <a href="">
                        <p class="text-center fs-6 mt-2">فراموشی رمز عبور</p>
                    </a>

                    <hr class="text-dark mb-3">

                    <!-- Button trigger modal -->
                    <div class="text-center">
                        <a href="submition_form.php">
                            <button type="button" class="btn btn-success"">
                                نام نویسی
                            </button>
                        </a>
                    </div>


                    <!-- <form action="controller/user_submit_process.php" method="post"> -->
                    <!-- Modal -->
                    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <div>
                                        <h5 class="modal-title" id="exampleModalLabel">نام نویسی</h5>
                                        <!-- <P class="text-secondary">سریع و راحت</P> -->
                                    </div>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>

                                <div class="modal-body mt-3">
                                    <form class="row g-3" action="../controller/user_submit_process.php" method="post">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label for="inputEmail4" class="form-label text-secondary fs-6">نام</label>
                                                <input name="first-name" type="text" class="form-control" id="inputEmail4">
                                            </div>
                                            <div class="col-md-6">
                                                <label for="inputPassword4" class="form-label text-secondary fs-6">نام خانوادگی</label>
                                                <input name="last-name" type="text" class="form-control" id="inputPassword4">
                                            </div>
                                        </div>

                                        <div class="row mt-3">
                                            <div class="col-md-6">
                                                <label for="inputEmail4" class="form-label text-secondary fs-6">نام کاربری</label>
                                                <input name="account-name" type="text" class="form-control" id="inputEmail4">
                                            </div>
                                            <div class="col-md-6">
                                                <label for="inputPassword4" class="form-label text-secondary fs-6">شماره همراه</label>
                                                <input name="mobile-number" type="text" class="form-control" id="inputPassword4">
                                            </div>
                                        </div>
                                        <div class="row mt-3">
                                            <div class="col-12">
                                                <label for="inputEmail4" class="form-label text-secondary fs-6">آدرس ایمیل</label>
                                                <input name="email" type="email" class="form-control" id="inputEmail4">
                                            </div>
                                        </div>

                                        <div class="row mt-3">
                                            <div class="col-md-6">
                                                <label for="inputPassword4" class="form-label text-secondary fs-6">گذرواژه</label>
                                                <input name="password" type="password" class="form-control" id="inputEmail4">
                                            </div>
                                            <div class="col-md-6">
                                                <label for="inputPassword4" class="form-label text-secondary fs-6">وارد کردن مجدد گذرواژه</label>
                                                <input name="confirm-password" type="password" class="form-control" id="inputPassword4">
                                            </div>
                                        </div>

                                        <div class="row mt-3 px-4">
                                            <label for="inputPassword4" class="form-label text-secondary fs-6">جنسیت</label>
                                            <div class="col form-check">
                                                <input name="gender" value="female" class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                                                <label class="form-check-label" for="flexRadioDefault1">
                                                    زن
                                                </label>
                                            </div>
                                            <div class="col form-check">
                                                <input name="gender" value="male" class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2" checked>
                                                <label class="form-check-label" for="flexRadioDefault2">
                                                    مرد
                                                </label>
                                            </div>
                                        </div>


                                        <!-- <div class="col-12">
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text cursor-pointer" id="date1"  data-mdpersiandatetimepicker="" data-original-title=""  title="">اینجا کلیک کنید</span>
                                                </div>
                                                <input type="text" id="inputDate1" class="form-control" placeholder="تاریخ تولد" aria-label="date1" aria-describedby="date1">
                                            </div> -->
                                        <!-- <label for="inputAddress" class="form-label">Address</label>
                                            <input type="text" class="form-control" id="inputAddress" placeholder="1234 Main St"> -->
                                        <!-- </div> -->

                                        <div class="row mt-3">
                                            <div class="col-12">
                                                <label for="files" class="btn text-secondary fs-6">افزودن تصویر</label>
                                                <input type="file" name="image" class="form-control" aria-label="Last name">
                                            </div>
                                        </div>


                                    </form>
                                </div>
                                <div class="modal-footer">
                                    <!-- <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button> -->
                                    <button type="button" class="btn btn-primary">ذخیره</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- </form> -->

                </div>
            </div>
        </div>
    </div>


</div>


<?php include "footer.php"; ?>