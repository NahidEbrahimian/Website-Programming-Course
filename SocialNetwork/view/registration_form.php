<?php
include "header.php";
include "view/navbar.php";
include "model/database.php";
?>


<div class="container">

<?php if(isset($_SESSION["message"])): ?>
    

    <div class="row justify-content-center mt-5">
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
        <div class="col-lg-6 col-md-6 col-sm-12">
            <div class="card shadow border-0 rounded-3">
                <div class="card-header">
                    <h5> عضویت </h5> 
                </div>
                <div class="card-body">
                    <form method="post" action="user_registration_process">

                        <div class="row">
                            <div class="col-md-6 col-sm-12 mt-3">
                                <label for="inputEmail4" class="form-label text-secondary" style="font-size: 15px;">نام</label>
                                <input name="first-name" type="text" class="form-control" id="inputEmail4">
                            </div>
                            <div class="col-md-6 col-sm-12 mt-3">
                                <label for="inputPassword4" class="form-label text-secondary" style="font-size: 15px;">نام خانوادگی</label>
                                <input name="last-name" type="text" class="form-control" id="inputPassword4">
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6 col-sm-12 mt-3">
                                <label for="inputEmail4" class="form-label text-secondary" style="font-size: 15px;">نام کاربری</label>
                                <input name="account-name" type="text" class="form-control" id="inputEmail4">
                            </div>
                            <div class="col-md-6 col-sm-12 mt-3">
                                <label for="inputPassword4" class="form-label text-secondary" style="font-size: 15px;">شماره همراه</label>
                                <input name="mobile-number" type="text" class="form-control " id="inputPassword4" placeholder=" ---------989+">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12 mt-3">
                                <label for="inputEmail4" class="form-label text-secondary" style="font-size: 15px;">آدرس ایمیل</label>
                                <input name="email" type="email" class="form-control" id="inputEmail4">
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6 col-sm-12 mt-3">
                                <label for="inputPassword4" class="form-label text-secondary" style="font-size: 15px;">گذرواژه</label>
                                <input name="password" type="password" class="form-control" id="inputEmail4" placeholder=" ****">
                            </div>
                            <div class="col-md-6 col-sm-12 mt-3">
                                <label for="inputPassword4" class="form-label text-secondary" style="font-size: 15px;"> تکرار گذرواژه</label>
                                <input name="confirm-password" type="password" class="form-control" id="inputPassword4" placeholder=" ****">
                            </div>
                        </div>

                        <label for="inputPassword4" class="form-label text-secondary mt-4" style="font-size: 15px;">جنسیت</label>
                        <div class="row border rounded px-2 pt-1" style="height: 40px; width: 99.5%; margin-right: 2px; border-color: #ced4da;">
                            
                            <div class="col-6 form-check">
                                <input name="gender" value="female" class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                                <label class="form-check-label" for="flexRadioDefault1">
                                    زن
                                </label>
                            </div>
                            <div class="col-6 form-check">
                                <input name="gender" value="male" class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2">
                                <label class="form-check-label" for="flexRadioDefault2">
                                    مرد
                                </label>
                            </div>
                        </div>


                        <label for="inputPassword4" class="form-label text-secondary mt-4" style="font-size: 15px;">تاریخ تولد</label>
                        <div class="col-12">
                            <div class="input-group">
                                <div class="input-group">
                                <span id="dtp1" class="input-group-text cursor-pointer" data-mds-dtp-guid="d6322030-c6e3-4324-a7b6-b280f644a32e" data-bs-original-title="" title="" data-mds-dtp-group="group1" data-from-date="true"> <i class="far fa-calendar-alt" style="color: #57606f;"></i> </span>
                                <input type="text" name="date-of-birth" data-name="dtp1-text" class="form-control" placeholder="تاریخ تولد">

                                </div>
                            </div>
                        </div>

                        <div class="row mt-3">
                            <div class="col-12">
                                <label class="exampleFormControlTexterea1 text-secondary" class="form-label"> بیوگرافی</label>
                                <textarea name="bio" rows="3" type="text" class="form-control mt-2" id="exampleFormControlTexterea1"></textarea>
                            </div>
                        </div>

                        <div class="row mt-3">
                            <div class="col">
                                <label for="files" class="btn text-secondary" style="font-size: 15px;">افزودن تصویر</label>
                                <input type="file" name="image" id="image" class="form-control" aria-label="Last name">
                            </div>
                        </div>
                        <div class=" d-grid gap-2">
                            <button type="submit" class="btn btn-success mt-3">ذخیره</button>   
                        </div>                     

                    </form>
                </div>
            </div>
        </div>
    </div>
</div>



<?php include "footer.php"; ?>