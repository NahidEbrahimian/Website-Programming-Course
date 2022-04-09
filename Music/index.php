<?php
include "header.php";
include "database.php";

$Neueste_albums = $db->query("SELECT * FROM albums ORDER BY date_added DESC LIMIT 6");
$Popular_musics = $db->query("SELECT * FROM musics WHERE album_id = 5");
$Popular_artists = $db->query("SELECT * FROM artists WHERE id = 1 OR id = 2 OR id = 3 OR id = 4 OR id = 5 OR id = 6");
?>

<div class="container mt-3">
    <div class="row">
        <div class="col-6">
            <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-indicators ">
                    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
                </div>
                <div class="carousel-inner rounded">
                    <div class="carousel-item active">
                        <img src="images/sliders/01.jpg" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="images/sliders/02.jpg" class="d-block w-100" alt="...">
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>

        <div class="col-6">
            <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-indicators ">
                    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
                </div>
                <div class="carousel-inner rounded">
                    <div class="carousel-item active">
                        <img src="images/sliders/01.jpg" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="images/sliders/02.jpg" class="d-block w-100" alt="...">
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>
    </div>

    <div class="row mt-5">
        <h3 class="text-white"> جدیدترین آلبوم ها</h3>
        <hr class="text-white mt-2">
        <?php foreach ($Neueste_albums as $Neueste_album) : ?>
            <div class="col-lg-2 col-md-4 col-sm-12 rounded">
                <a href="musics.php?album_id=<?php echo $Neueste_album["id"]; ?>" class="my-card text-decoration-none text-dark">
                    <div class="card mt-3 zoom">
                        <img style="height:150px;" class="card-img-top" src="<?php echo $Neueste_album["image"]; ?>" alt="Card image cap">
                        <div class="card-body">
                            <h6 class="card-title text-center"><?php echo $Neueste_album["name"]; ?></h6>
                        </div>
                    </div>
                </a>
            </div>
        <?php endforeach; ?>
    </div>
    <div class="row mt-5">
        <h3 class="text-white"> پر بازدیدترین آهنگ ها</h3>
        <hr class="text-white mt-2">
        <?php foreach ($Popular_musics as $Popular_music) : ?>
            <div class="col-lg-2 col-md-4 col-sm-6 rounded">
                <div class="card mt-3 zoom">
                    <img style="height:150px;" class="card-img-top" src="<?php echo $Popular_music["image"]; ?>" alt="Card image cap">
                    <div class="card-body">
                        <h6 class="card-title text-center"><?php echo $Popular_music["name"]; ?></h6>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
    </div>

    <div class="row mt-5">
        <h3 class="text-white"> محبوب ترین خواننده ها</h3>
        <hr class="text-white mt-2">
        <?php foreach ($Popular_artists as $Popular_artist) : ?>
            <div class="col-lg-4 col-md-4 col-sm-12 rounded text-center text-white mt-5 zoom">
                <a href="musics.php?album_id=<?php echo $Popular_artist["id"]; ?>" class="my-card text-decoration-none text-white">
                    <img style="width: 250px; height: 250px; border-radius: 100%; border-white;" class="card-img-top" src="<?php echo $Popular_artist["image"]; ?>" alt="Card image cap">
                    <h6 class="card-title text-center mt-2"><?php echo $Popular_artist["name"]; ?></h6>
                </a>
            </div>
        <?php endforeach; ?>
    </div>

</div>

<?php include "footer.php"; ?>