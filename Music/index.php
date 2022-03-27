<?php 
include "header.php";
include "database.php";

$Neueste_albums = $db-> query("SELECT * FROM albums ORDER BY date_added DESC LIMIT 6")

?>

<div class="container mt-3">
    <div class="row">
        <div class="col-12">
            <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-indicators ">
                    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
                </div>
                <div class="carousel-inner rounded">
                    <div class="carousel-item active">
                        <img src="images/sliders/01.jpg" class="d-block w-100" alt="...">
                        <div class="carousel-caption d-none d-md-block">
                            <h5>First slide label</h5>
                            <p>Some representative placeholder content for the first slide.</p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="images/sliders/02.jpg" class="d-block w-100" alt="...">
                        <div class="carousel-caption d-none d-md-block">
                            <h5>Third slide label</h5>
                            <p>Some representative placeholder content for the third slide.</p>
                        </div>
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

    <div class="row mt-3">
        <h2> جدیدترین آلبوم ها</h2>
        <hr>
        <?php foreach ($Neueste_albums as $Neueste_album) : ?>
            <div class="col-3 rounded">
                <!-- <a href="albums.php?artist_id=<?php echo $artist["id"]; ?>" class="my-card text-decoration-none text-dark"> -->
                    <div class="card mt-3 zoom">
                        <img class="card-img-top" src="<?php echo $Neueste_album["image"]; ?>" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title text-center"><?php echo $Neueste_album["name"]; ?></h5>
                        </div>
                    </div>
                <!-- </a> -->
            </div>
        <?php endforeach; ?>
    </div>
    
</div>

<?php include "footer.php"; ?>