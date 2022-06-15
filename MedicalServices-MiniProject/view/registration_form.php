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
                    <h5><?php echo $user_register == 'patient' ? "عضویت بیمار" : "عضویت پزشک" ?> </h5> 
                </div>
                <div class="card-body">
                    <form method="post" action="registration_process.php?user-register=<?php echo $user_register == 'patient' ? 1 : 2; ?>" enctype="multipart/form-data">

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
                                <?php if($user_register == "doctor") : ?>
                                    <?php echo
                                        '<label for="inputEmail4" class="form-label text-secondary" style="font-size: 15px;">کد نظام پزشکی</label>
                                        <input name="gmc-number" type="text" class="form-control" id="inputEmail4">'
                                    ?>
                                <?php endif; ?>
                                <?php if($user_register == "patient") : ?>
                                    <?php echo
                                        '<label for="inputEmail4" class="form-label text-secondary" style="font-size: 15px;">کد ملی </label>
                                        <input name="national-id" type="text" class="form-control" id="inputEmail4" placeholder="----------">'
                                    ?>
                                <?php endif; ?>
                            </div>
                            <div class="col-md-6 col-sm-12 mt-3">
                                <label for="inputPassword4" class="form-label text-secondary" style="font-size: 15px;">شماره همراه</label>
                                <input name="mobile-number" type="text" class="form-control " id="inputPassword4" placeholder=" ---------989+">
                            </div>
                        </div>
                        <?php if($user_register == "doctor") : ?>
                            <?php echo '<div class="row">
                                    <div class="col mt-3">
                                    <label class="form-label text-secondary" style="font-size: 15px;"> تخصص</label>
                                    <select class="w-100 form-select" style="height: 40px;" name="specialty" id="select-tag-specialty">'

                            ?>
                                    <?php foreach ($specialties as $specialty): ?>
                                        <?php echo '<option value=' ?> <?php echo $specialty["id"]; ?> <?php echo '>'; ?><?php echo $specialty["specialty"]; ?><?php echo '</option>'; ?>
                                    <?php endforeach ?>
                                    <?php echo '</select>

                                    </div>
                                </div>' ?>
    
                            <?php echo
                                '<div class="row">
                                    <div class="col-12 mt-3">
                                        <label for="inputEmail4" class="form-label text-secondary" style="font-size: 15px;">آدرس ایمیل</label>
                                        <input name="email" type="email" class="form-control" id="inputEmail4">
                                    </div>
                                </div>'; 
                                ?>
                       <?php  endif; ?>

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
                                <input checked name="gender" value="female" class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
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

                        <?php if($user_register == "doctor") : 
                        echo "<div class='row mt-3'>
                            <div class='col'>
                                <label for='files' class='btn text-secondary' style='font-size: 15px;'>افزودن تصویر</label>
                                <input type='file' name='image' id='image' class='form-control' aria-label='Last name'>
                            </div>
                        </div>";
                        endif; ?>
                        <div class=" d-grid gap-2">
                            <button type="submit" class="btn buttons mt-3">ذخیره</button>   
                        </div>                     

                    </form>
                </div>
            </div>
        </div>
    </div>
</div>



<?php include "footer.php"; ?>