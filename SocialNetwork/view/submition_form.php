<?php
include "header.php";
include "../model/database.php";
?>


<div class="container">
    <div class="row mt-5 justify-content-center">
        <div class="col-lg-6 col-md-6 col-sm-12">
            <div class="card shadow border-0 rounded-3">
                <div class="card-header">
                    <h5> نام نویسی </h5> 
                </div>
                <div class="card-body">
                    <form method="post" action="../controller/user_submit_process.php">

                        <div class="row">
                            <div class="col-md-6 col-sm-12 mt-3">
                                <label for="inputEmail4" class="form-label text-secondary fs-6">نام</label>
                                <input name="first-name" type="text" class="form-control" id="inputEmail4">
                            </div>
                            <div class="col-md-6 col-sm-12 mt-3">
                                <label for="inputPassword4" class="form-label text-secondary fs-6">نام خانوادگی</label>
                                <input name="last-name" type="text" class="form-control" id="inputPassword4">
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6 col-sm-12 mt-3">
                                <label for="inputEmail4" class="form-label text-secondary fs-6">نام کاربری</label>
                                <input name="account-name" type="text" class="form-control" id="inputEmail4">
                            </div>
                            <div class="col-md-6 col-sm-12 mt-3">
                                <label for="inputPassword4" class="form-label text-secondary fs-6">شماره همراه</label>
                                <input name="mobile-number" type="text" class="form-control" id="inputPassword4">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12 mt-3">
                                <label for="inputEmail4" class="form-label text-secondary fs-6">آدرس ایمیل</label>
                                <input name="email" type="email" class="form-control" id="inputEmail4">
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6 col-sm-12 mt-3">
                                <label for="inputPassword4" class="form-label text-secondary fs-6">گذرواژه</label>
                                <input name="password" type="password" class="form-control" id="inputEmail4">
                            </div>
                            <div class="col-md-6 col-sm-12 mt-3">
                                <label for="inputPassword4" class="form-label text-secondary fs-6"> تکرار گذرواژه</label>
                                <input name="confirm-password" type="password" class="form-control" id="inputPassword4">
                            </div>
                        </div>

                        <label for="inputPassword4" class="form-label text-secondary fs-6 mt-4">جنسیت</label>
                        <div class="row border rounded px-2 pt-1" style="height: 40px; width: 99.5%; margin-right: 2px; border-color: #ced4da;">
                            
                            <div class="col-6 form-check">
                                <input name="gender" value="female" class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                                <label class="form-check-label" for="flexRadioDefault1">
                                    زن
                                </label>
                            </div>
                            <div class="col-6 form-check">
                                <input name="gender" value="male" class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2" checked>
                                <label class="form-check-label" for="flexRadioDefault2">
                                    مرد
                                </label>
                            </div>
                        </div>


                        <label for="inputPassword4" class="form-label text-secondary fs-6 mt-4">تاریخ تولد</label>
                        <div class="col-12">
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text cursor-pointer" id="date1" data-mdpersiandatetimepicker="" data-original-title="" title="">اینجا کلیک کنید</span>
                                </div>
                                <input name="date-of-birth" type="text" id="inputDate1" class="form-control" placeholder="تاریخ تولد" aria-label="date1" aria-describedby="date1">
                            </div>
                        </div>

                        <div class="row mt-4 mb-3">
                            <div class="col">
                                <label for="files" class="btn text-secondary fs-6">افزودن تصویر</label>
                                <input type="file" name="image" id="image" class="form-control" aria-label="Last name">
                            </div>
                        </div>

                        <button type="submit" class="btn btn-success mt-3">ذخیره</button>                        

                    </form>
                </div>
            </div>
        </div>
    </div>
</div>



<?php include "footer.php"; ?>