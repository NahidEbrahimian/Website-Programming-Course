<?php
include "header.php";
include "database.php";

if(!isset($_SESSION)) 
{ 
    session_start(); 
}

$albums = $db->query("SELECT * FROM musics");
?>

<?php if ($_SESSION["login_status"] != null && $_SESSION["login_status"] == true) : ?>
    <div class="container">
        <h3 class="text-light mb-4">
            افزودن آهنگ جدید
        </h3>
        <hr class="bg-light mb-5">
        <div class="row mt-3 justify-content-center">
            <div class="col-lg-3 col-md-6 col-sm-6">
                <?php include "admin_side.php"; ?>
            </div>

            <div class="col-9">
                <form method="post" action="admin_add_music_proccess.php" enctype="multipart/form-data">
                    <div class="row">
                        <div class="col">
                            <input type="text" name="name" class="form-control" placeholder="نام آهنگ" aria-label="First name">
                        </div>
                        <div class="col">
                            <input type="text" name="id" class="form-control" placeholder="id آلبوم" aria-label="First name">
                        </div>
                    </div>
                    <div class="row mt-3">
                        <div class="col">
                            <label for="files" class="btn">افزودن تصویر</label>
                            <input type="file" name="image" class="form-control" aria-label="Last name">
                        </div>
                        <div class="col">
                            <label for="files" class="btn">افزودن فایل mp3</label>
                            <input type="file" name="mp3" class="form-control" aria-label="Last name">
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary mt-3">ذخیره</button>
                </form>
            </div>
        </div>
    </div>

<?php
else :
    header("Location: index.php");
endif;
?>
<?php include "footer.php"; ?>