<?php include "header.php";
include "database.php";

$artists = $db->query("SELECT * FROM artists");
?>

<div class="container">
    <div class="row mt-3">
        <h2 class="text-white">خواننده ها</h2>
        <hr class="text-white">
        <?php foreach ($artists as $artist) : ?>
            <div class="col-3 rounded">
                <a href="albums.php?artist_id=<?php echo $artist["id"]; ?>" class="my-card text-decoration-none text-dark">
                    <div class="card mt-3 zoom">
                        <img style="height:250px;" class="card-img-top" src="<?php echo $artist["image"]; ?>" alt="Card image cap">
                        <div class="card-body">
                            <h6 class="card-title text-center"><?php echo $artist["name"]; ?></h6>
                        </div>
                    </div>
                </a>
            </div>
        <?php endforeach; ?>
    </div>
</div>

<?php include "footer.php"; ?>