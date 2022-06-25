<?php
include "view/header.php";
include "view/navbar.php";
$idx = 1;
?>

<div class="container">
    <?php if ($_SESSION["user-login"] == 'patient') : ?>
        <div class="row justify-content-center mt-5">
            <div class="col-lg-8 col-md-12 col-sm-12">
                <form method="post" action="search" class="d-flex">
                    <input style="font-size: 13px;" name="text" class="form-control me-2 mt-1" type="search" placeholder="تخصص مورد نظر را وارد کنید" aria-label="Search">
                    <button onclick="dispaly_tabel()" class="btn btn-outline-secondary mt-1" type="submit" style="width: 90px;">
                        <span style="font-size: 12px;">جستجو</span>
                        <span><i class="fa fa-search" style="font-size: 12px;"></i></span>
                    </button>
                </form>
            </div>
        </div>
        <?php if (isset($_SESSION["display"])) : ?>
            <?php if ($_SESSION["display"] == true) : ?>
                <div class="row justify-content-center mt-5">
                    <div class="col">
                        <table id="tabel" class="table table-striped">
                            <thead>
                                <tr class="text-center">
                                    <th scope="col">#</th>
                                    <th scope="col">نام پزشک </th>
                                    <th scope="col"> تخصص </th>
                                    <th scope="col">توضیحات</th>
                                    <th scope="col">تاریخ</th>
                                    <th scope="col">ساعت</th>
                                    <th scope="col">وضعیت</th>
                                </tr>
                            </thead>

                            <tbody>
                                <?php foreach ($specialties_array as $specialty) : ?>
                                    <?php foreach ($specialty["date-time"] as $date_time): ?>
                                    <tr class="text-center">
                                        <th scope="row">
                                            <?php echo $idx;
                                            $idx++;
                                            ?>
                                        </th>
                                        <td>
                                            <?php echo $specialty["doctor"]["first_name"] . " " . $specialty["doctor"]["last_name"]; ?>
                                        </td>
                                        <td>
                                            <?php echo $specialty["specialty"]; ?>
                                        </td>
                                        <td>
                                            <?php echo $specialty["text"]; ?>
                                        </td>
                                        <td>
                                            <?php echo $date_time["date"]; ?>
                                        </td>
                                        <td>
                                            <?php echo $date_time["time"]; ?>
                                        </td>
                                        <td style="text-align: center;">
                                            <?php if($date_time["reserved"]==0): ?>
                                                <form id="form-reserve-<?php echo $date_time['date_time_id']; ?>" class="d-flex">
                                                <input type="hidden" name="date_time_id" value="<?php echo $date_time['date_time_id']; ?>">
                                                    <button onclick="appointment_reserve(<?php echo $date_time['date_time_id']; ?>)" class="btn btn-outline-None mt-1" type="button" style="width: 90px; color: green; margin:auto;">
                                                        <span id="reserve-span-<?php echo $date_time["date_time_id"]; ?>" style="font-size: 13px;">رزرو نوبت</span>
                                                        <!-- <span><i class="fa fa-search" style="font-size: 12px;"></i></span> -->
                                                    </button>
                                                </form>
                                            <?php elseif($date_time["reserved"]==1): ?>
                                                <?php if($date_time["patient_id"]==$user_id): ?>
                                                    <form id="form-reserve-<?php echo $date_time["date_time_id"]; ?>" class="d-flex">
                                                    <input type="hidden" name="date_time_id" value="<?php echo $date_time['date_time_id']; ?>">
                                                        <button onclick="appointment_reserve(<?php echo $date_time['date_time_id']; ?>)" class="btn btn-outline-None mt-1" type="button" style="width: 90px; color: red; margin:auto;">
                                                            <span id="reserve-span-<?php echo $date_time["date_time_id"]; ?>" style="font-size: 12px;">لغو رزرو </span>
                                                            <!-- <span><i class="fa fa-search" style="font-size: 12px;"></i></span> -->
                                                        </button>
                                                    </form>
                                                <?php else: ?>
                                                    <p class="text-center" style="font-size: 12px;">رزرو شده</p>
                                                <?php endif; ?>
                                            <?php endif; ?>
                                        </td>
                                    </tr>
                                    <?php endforeach; ?>
                                <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            <?php endif; ?>
        <?php endif; ?>
    <?php endif; ?>

    <?php if ($_SESSION["user-login"] == 'doctor') : ?>
        <div class="row mt-5">

            <div class="col-lg-3 col-md-12 col-sm-12">
                <?php include "view/side.php"; ?>
            </div>
            <div class="col-lg-9 col-md-12 col-sm-12">
                <div class="card">
                    <div class="card-header">
                         افزودن خدمات جدید
                    </div>
                    <div class="card-body">
                        <form action="add-service" method="post">
                            <div>
                                <label class="form-label text-secondary mt-4" style="font-size: 15px;">توضیحات</label>
                                <input type="text" class="form-control" name="text">
                            </div>

                            <div id="answers">
                                <div class="row">
                                    <div class="my-2 col-lg-6 col-md-6 col-sm-12 d-flex flex-column justify-content-center align-items-right">
                                        <label class="form-label text-secondary mt-4" style="font-size: 15px;">تاریخ </label>
                                        <div class="input-group">
                                            <span id="dtp1" class="input-group-text cursor-pointer" data-mds-dtp-guid="d6322030-c6e3-4324-a7b6-b280f644a32e" data-bs-original-title="" title="" data-mds-dtp-group="group1" data-from-date="true"> <i class="far fa-calendar-alt" style="color: #57606f;"></i> </span>
                                            <input type="text" name="date" data-name="dtp1-text" class="form-control" placeholder="تاریخ ">
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="my-2 col-lg-6 col-md-6 col-sm-12 d-flex flex-column justify-content-center align-items-right">
                                        <label class="form-label text-secondary mt-4" style="font-size: 15px;">از ساعت </label>
                                        <input name="start-time" type="time" id="start"  value="<?php echo date('H:i'); ?>">
                                    </div>

                                    <div class="my-2 col-lg-6 col-md-6 col-sm-12 d-flex flex-column justify-content-center align-items-right">
                                        <label class="form-label text-secondary mt-4" style="font-size: 15px;">تا ساعت </label>
                                        <input name="end-time" type="time" id="start"  value="<?php echo date('H:i'); ?>">
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="my-2 col-lg-6 col-md-6 col-sm-12 d-flex flex-column justify-content-center align-items-right">
                                        <label class="form-label text-secondary mt-4" style="font-size: 15px;">مدت زمان ویزیت(دقیقه)  </label>
                                        <input type="number" class="form-control" name="visite-time" value="10" min="10" step="5">
                                    </div>
                                </div>
                            </div>
                            <div class=" d-grid gap-2">
                                <button type="submit" class="btn btn-success mt-3 float-end">ذخیره</button>
                            <div class=" d-grid gap-2">
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <?php if (isset($_SESSION["display"])) : ?>
            <?php if ($_SESSION["display"] == true) : ?>
                <div class="row justify-content-center mt-5">
                    <div class="col">
                        <!-- <a href="admin_add_music.php" class="btn btn-success btn-lg">
                        <i class="fas fa-plus"></i>
                    </a>
                    <br>
                    <br> -->

                        <!-- style="display: Block;"  -->
                        <table id="tabel" class="table table-striped table-dark">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <!-- <th scope="col">تصویر</th> -->
                                    <th scope="col">نام پزشک </th>
                                    <th scope="col"> تخصص </th>
                                    <th scope="col">توضیحات</th>
                                    <th scope="col">وضعیت</th>
                                </tr>
                            </thead>

                            <tbody>
                                <?php foreach ($specialties_array as $specialty) : ?>
                                    <tr>
                                        <th scope="row">
                                            <?php echo $idx;
                                            $idx++;
                                            ?>
                                        </th>
                                        <td>
                                            <!-- <img src="<?php echo $music["image"]; ?>" class="img-fluid" width="100px" alt=""> -->
                                            <?php echo $specialty["doctor"]["first_name"] . " " . $specialty["doctor"]["last_name"]; ?>
                                        </td>
                                        <td>
                                            <?php echo $specialty["specialty"]; ?>
                                        </td>
                                        <td>
                                            <?php echo $specialty["text"]; ?>
                                        </td>
                                        <td>
                                            رزرو
                                        </td>
                                        <!-- <td>
                                        <a href="admin_edit_music.php?music-id=<?php echo $music["id"]; ?>" class="btn btn-sm btn-info">
                                            <i class="fas fa-edit"></i>
                                        </a>
                                        <a href="admin_remove_music.php?music-id=<?php echo $music["id"]; ?>" class="btn btn-sm btn-danger">
                                            <i class="fas fa-trash"></i>
                                        </a>
                                    </td> -->
                                    </tr>
                                <?php endforeach; ?>
                            </tbody>
                        </table>
                        <!-- </div> -->
                    </div>
                </div>
            <?php endif; ?>
        <?php endif; ?>


    <?php endif; ?>
</div>



<?php include "view/footer.php"; ?>