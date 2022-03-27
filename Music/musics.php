<?php
include "header.php";
include "database.php";

$album_id = $_GET["album_id"];
$musics = $db->query("SELECT * FROM musics WHERE album_id = $album_id");
?>

<div class="container">
    <div class="row mt-3">
        <h2>آهنگ ها</h2>
        <hr>
        <?php if ($musics->num_rows == 0) : ?>
            <div class="alert alert-dark" role="alert">
                هنوز آهنگ های این آلبوم به سایت اضافه نشده است!
            </div>

        <?php else : ?>
            <div class="col-3 rounded-2">
                <?php foreach ($musics as $music) : ?>
                    <div class="mt-3">
                        <ol class="list-group list-group-numbered">
                            <li class="list-group-item">
                            <img class="card-img-top display-inline" src="<?php echo $music["image"]; ?>" alt="Card image cap">
                        <!-- <div class="card-body"> -->
                            <span class="text-center"><?php echo $music["name"]; ?></span>
                        <!-- </div> -->
                            </li>
                        </ol>

                    </div>
                <?php endforeach; ?>
            </div>
        <?php endif; ?>
    </div>
</div>

<?php include "footer.php"; ?>  
