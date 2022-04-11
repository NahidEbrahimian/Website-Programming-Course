<?php
include "header.php";
include "database.php";

// if(!isset($_SESSION)) 
// { 
//     session_start(); 
// }

$artist_id = $_GET["artist-id"];
$artist = $db->query("SELECT * FROM artists WHERE id = $artist_id")->fetch_assoc();

?>

<?php if ($_SESSION["login_status"] != null && $_SESSION["login_status"] == true) : ?>
    <div class="container">
        <h3 class="text-light mb-4">
            ویرایش خواننده 
        </h3>
        <hr class="bg-light mb-5">
        <div class="row mt-3 justify-content-center">
            <div class="col-lg-3 col-md-6 col-sm-6">
                <?php include "admin_side.php"; ?>
            </div>

            <div class="col-lg-9 col-md-6 col-sm-6">                
                <form method="post" action="admin_edit_artist_proccess.php" enctype="multipart/form-data">
                    <div class="row">
                        <div class="col">
                        <label for="files" class="btn">نام خواننده</label>
                            <input type="text" value="<?php echo $artist["name"]; ?>" name="name" class="form-control" placeholder="نام خواننده" aria-label="First name">
                        </div>
                        <div class="col">
                            <label for="files" class="btn">افزودن تصویر </label>
                            <input type="file" name="image" class="form-control" aria-label="Last name">
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary mt-3">ذخیره</button>
                    <input type="hidden" value="<?php echo $artist["id"]; ?>" name = "id">
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