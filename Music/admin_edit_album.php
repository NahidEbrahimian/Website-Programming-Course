<?php
include "header.php";
include "database.php";

// if(!isset($_SESSION)) 
// { 
//     session_start(); 
// }

$album_id = $_GET["album-id"];
$album = $db->query("SELECT * FROM albums WHERE id = $album_id")->fetch_assoc();

$artist_id = $album["artist_id"];
$artist = $db->query("SELECT * FROM artists WHERE id = $artist_id")->fetch_assoc();

$artists = $db->query("SELECT * FROM artists")
?>

<?php if ($_SESSION["login_status"] != null && $_SESSION["login_status"] == true) : ?>
    <div class="container">
        <h3 class="text-light mb-4">
            ویرایش آلبوم
        </h3>
        <hr class="bg-light mb-5">
        <div class="row mt-3 justify-content-center">
            <div class="col-lg-3 col-md-6 col-sm-6">
                <?php include "admin_side.php"; ?>
            </div>

            <div class="col-lg-9 col-md-6 col-sm-6">
                <form method="post" action="admin_edit_album_proccess.php" enctype="multipart/form-data">
                    <div class="row">
                        <div class="col">
                            <label for="files" class="btn">نام آلبوم</label>
                            <input type="text" value="<?php echo $album["name"]; ?>" name="name" class="form-control" placeholder="نام خواننده" aria-label="First name">
                        </div>
                        <div class="col">
                            <label for="files" class="btn">افزودن تصویر</label>
                            <input type="file" name="image" class="form-control" aria-label="Last name">
                        </div>
                    </div>
                    <div class="row mt-3">
                        <div class="col">
                            <select class="form-select w-100" aria-label="Default select example" name="artist-id">
                                <option selected>نام خواننده</option>
                                <?php foreach ($artists as $artist) : ?>
                                    <option value="<?php echo $artist["id"]; ?>"><?php echo $artist["name"]; ?></option>
                                <?php endforeach; ?>
                            </select>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary mt-3">ذخیره</button>
                    <input type="hidden" value="<?php echo $album["id"]; ?>" name="id">
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