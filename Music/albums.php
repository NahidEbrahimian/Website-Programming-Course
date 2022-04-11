<?php
include "header.php";
include "database.php";

$artist_id = $_GET["artist_id"];
$albums = $db->query("SELECT * FROM albums WHERE artist_id	= $artist_id");
?>

<div class="container">
    <div class="row mt-3">
        <h2 class="text-white">آلبوم ها</h2>
        <hr class="text-white">
        <?php if ($albums->num_rows == 0) : ?>
            <div class="alert alert-dark" role="alert">
                هنوز آلبوم های این خواننده به سایت اضافه نشده است!
            </div>

        <?php else : ?>
            <?php foreach ($albums as $album) : ?>
                <div class="col-lg-3 col-md-4 col-sm-6 rounded-2">
                    <a href="musics.php?album_id=<?php echo $album["id"]; ?>" class="my-card text-decoration-none text-dark">
                        <div class="card mt-3 zoom ">
                            <img class="card-img-top" src="<?php echo $album["image"]; ?>" alt="Card image cap">
                            <div class="card-body">
                                <h5 class="card-title text-center"><?php echo $album["name"]; ?></h5>
                            </div>
                        </div>
                    </a>
                </div>
            <?php endforeach; ?>
        <?php endif; ?>
    </div>
</div>

<?php include "footer.php"; ?>