<?php
include "header.php";
include "database.php";

// if(!isset($_SESSION)) 
// { 
//     session_start(); 
// }

$music_id = $_GET["music-id"];
$music = $db->query("SELECT * FROM musics WHERE id = $music_id")->fetch_assoc();

$album_id = $music["album_id"];
$primary_album = $db->query("SELECT * FROM albums WHERE id = $album_id")->fetch_assoc();

$albums = $db->query("SELECT * FROM albums")
?>

<?php if ($_SESSION["login_status"] != null && $_SESSION["login_status"] == true) : ?>
    <div class="container">
        <h3 class="text-light mb-4">
            ویرایش آهنگ
        </h3>
        <hr class="bg-light mb-5">
        <div class="row mt-3 justify-content-center">
            <div class="col-lg-3 col-md-6 col-sm-6">
                <?php include "admin_side.php"; ?>
            </div>

            <div class="col-lg-9 col-md-6 col-sm-6">
                <form method="post" action="admin_edit_music_proccess.php" enctype="multipart/form-data">
                    <div class="row">
                        <div class="col">
                            <label for="files" class="btn">نام آهنگ</label>
                            <input type="text" value="<?php echo $music["name"]; ?>" name="name" class="form-control" placeholder="نام خواننده" aria-label="First name">
                        </div>
                        <div class="col">
                            <label for="files" class="btn">افزودن تصویر</label>
                            <input type="file" name="image" class="form-control" aria-label="Last name">
                        </div>
                        <div class="col">
                            <label for="files" class="btn">افزودن فایل mp3</label>
                            <input type="file" name="mp3" class="form-control" aria-label="Last name">
                        </div>
                    </div>
                    <div class="row mt-3">
                        <div class="col">
                            <label for="files" class="btn">نام آلبوم</label>
                            <select class="form-select w-100" aria-label="Default select example" name="album-id">
                                <option selected><?php echo $primary_album["name"]; ?></option>
                                <?php foreach ($albums as $album) : ?>
                                    <option value="<?php echo $album["id"]; ?>"><?php echo $album["name"]; ?></option>
                                <?php endforeach; ?>
                            </select>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary mt-3">ذخیره</button>
                    <input type="hidden" value="<?php echo $music["id"]; ?>" name="id">
                    <input type="hidden" value="<?php echo $primary_album["id"]; ?>" name ="primary_album_id">
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