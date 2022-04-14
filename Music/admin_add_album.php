<?php
include "header.php";
include "database.php";

// if (!isset($_SESSION)) {
//     session_start();
// }

$artists = $db->query("SELECT * FROM artists");
?>

<?php if ($_SESSION["login_status"] != null && $_SESSION["login_status"] == true) : ?>
    <div class="container">
        <h3 class="text-light mb-4">
            افزودن آلبوم جدید
        </h3>
        <hr class="bg-light mb-5">
        <div class="row mt-3 justify-content-center">
            <div class="col-lg-3 col-md-6 col-sm-6">
                <?php include "admin_side.php"; ?>
            </div>

            <div class="col-lg-9 col-md-6 col-sm-6">
                <form method="post" action="admin_add_album_proccess.php" enctype="multipart/form-data">
                    <div class="row">
                        <div class="col">
                            <label for="TEXT" class="btn">نام آلبوم</label>
                            <input type="text" name="name" class="form-control" placeholder="نام آلبوم" aria-label="First name">
                        </div>
                        <div class="col">
                            <label for="files" class="btn">افزودن تصویر </label>
                            <input type="file" name="image" class="form-control" aria-label="Last name">
                        </div>
                    </div>

                    <div class="row mt-3">
                        <div class="col">
                            <label for="files" class="btn">نام خواننده</label>
                            <select class="form-select w-100" aria-label="Default select example" name="artist-id">
                            <?php foreach ($artists as $artist) : ?>
                                    <option value="<?php echo $artist["id"]; ?>"><?php echo $artist["name"]; ?></option>
                                <?php endforeach; ?>
                            </select>
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