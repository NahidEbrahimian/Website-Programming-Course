<?php
include "header.php";
include "database.php";

// if(!isset($_SESSION)) 
// { 
//     session_start(); 
// }

$artists = $db->query("SELECT * FROM artists");
$idx = 1;
?>

<?php if ($_SESSION["login_status"] != null && $_SESSION["login_status"] == true) : ?>
    <div class="container">
        <h3 class="text-light mb-4">
             خواننده ها
        </h3>
        <hr class="bg-light mb-5">
        <div class="row mt-3 justify-content-center">
            <div class="col-lg-3 col-md-6 col-sm-6">
                <?php include "admin_side.php"; ?>
            </div>

            <div class="col-lg-9 col-md-6 col-sm-6">  
                <a href="admin_add_artist.php" class="btn btn-success btn-lg">
                    <i class="fas fa-plus"></i>
                </a>
                <br>
                <br>
                <table class="table table-striped table-dark">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">تصویر</th>
                            <th scope="col">نام خواننده</th>
                            <th scope="col"></th>
                        </tr>
                    </thead>

                    <tbody>
                        <?php foreach ($artists as $artist) : ?>
                            <tr>
                                <th scope="row">
                                    <?php echo $idx; 
                                    $idx++;
                                    ?>
                                </th>
                                <td>
                                    <img src="<?php echo $artist["image"]; ?>" class="img-fluid" width="100px" alt="">
                                </td>
                                <td>
                                    <?php echo $artist["name"]; ?>
                                </td>
                                <td>
                                    <a href="admin_edit_artist.php?artist-id=<?php echo $artist["id"]; ?>" class="btn btn-sm btn-info">
                                        <i class="fas fa-edit"></i>
                                    </a>
                                    <a href="admin_remove_artist.php?artist-id=<?php echo $artist["id"]; ?>" class="btn btn-sm btn-danger">
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