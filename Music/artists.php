<?php include "header.php";
include "database.php";

$artists = $db->query("SELECT * FROM artists");
?>

<div class="container">
    <div class="row mt-3">
        <h2>خواننده ها</h2>
        <hr>
        <?php foreach ($artists as $artist) : ?>
            <div class="col-3 rounded">
                <a href="albums.php?artist_id=<?php echo $artist["id"]; ?>" class="my-card text-decoration-none text-dark">
                    <div class="card mt-3 zoom">
                        <img class="card-img-top" src="<?php echo $artist["image"]; ?>" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title text-center"><?php echo $artist["name"]; ?></h5>
                        </div>
                    </div>
                </a>
            </div>
        <?php endforeach; ?>
    </div>
</div>

<?php include "footer.php"; ?>