<?php
include "header.php";
include "database.php";

// if (!isset($_SESSION)) {
//     session_start();
// }

$albums = $db->query("SELECT * FROM albums");
$artists = $db->query("SELECT * FROM artists");
$idx = 1;
?>

<?php if ($_SESSION["login_status"] != null && $_SESSION["login_status"] == true) : ?>
    <div class="container">
        <h3 class="text-light mb-4">
            آلبوم ها
        </h3>
        <hr class="bg-light mb-5">
        <div class="row mt-3 justify-content-center">
            <div class="col-lg-3 col-md-6 col-sm-6">
                <?php include "admin_side.php"; ?>
            </div>

            <div class="col-lg-9 col-md-6 col-sm-6">
                <a href="admin_add_album.php" class="btn btn-success btn-lg">
                    <i class="fas fa-plus"></i>
                </a>
                <br>
                <br>
                <table class="table table-striped table-dark">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">تصویر</th>
                            <th scope="col">نام آلبوم</th>
                            <th scope="col"></th>
                        </tr>
                    </thead>

                    <tbody>
                        <?php foreach ($albums as $album) : ?>
                            <tr>
                                <th scope="row">
                                    <?php echo $idx; 
                                        $idx++;
                                    ?>
                                </th>
                                <td>
                                    <img src="<?php echo $album["image"]; ?>" class="img-fluid" width="100px" alt="">
                                </td>
                                <td>
                                    <?php echo $album["name"]; ?>
                                </td>
                                <td>
                                    <a href="admin_edit_album.php?album-id=<?php echo $album["id"]; ?>" class="btn btn-sm btn-info">
                                        <i class="fas fa-edit"></i>
                                    </a>
                                    <a href="admin_remove_album.php?album-id=<?php echo $album["id"]; ?>" class="btn btn-sm btn-danger">
                                        <i class="fas fa-trash"></i>
                                    </a>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

<?php
else :
    header("Location: index.php");
endif;
?>
<?php include "footer.php"; ?>