<?php
include "header.php";
include "database.php";

$album_id = $_GET["album_id"];
$musics = $db->query("SELECT * FROM musics WHERE album_id = $album_id");

$album = $db->query("SELECT * FROM albums WHERE id = $album_id")->fetch_assoc();
$artist_id = $album["artist_id"];
$artist = $db->query("SELECT * FROM artists WHERE id = $artist_id")->fetch_assoc();

?>

<div class="container">
    <div class="row mt-3">
        <h2 class="text-white">آهنگ ها</h2>
        <hr class="text-white">
        <?php if ($musics->num_rows == 0) : ?>
            <div class="alert alert-dark" role="alert">
                هنوز آهنگ های این آلبوم به سایت اضافه نشده است!
            </div>

        <?php else : ?>
            <div class="col-lg-3 col-md-12 col-sm-12 mb-3">
                <?php foreach ($musics as $music) : ?>
                    <a href="#" class="text-decoration-none link-dark">
                        <ul class="list-group">
                            <li class="list-group-item d-flex mt-1 align-items-center" onclick="play_music('<?php echo $music["mp3"]; ?>','<?php echo $music["image"]; ?>')">
                                <div class="col col-lg col-lg col-md col-sm">
                                    <h6 class="text-nowrap"><?php echo $artist["name"]; ?></h6>
                                    <p class="text-nowrap"><?php echo $music["name"]; ?></p>
                                </div>
                                <span class="col col-lg col-md col-sm">
                                    <img class="img-thumbnail float-end" width="70px" src="<?php echo $music["image"]; ?>">
                                </span>
                            </li>
                        </ul>
                    </a>

                <?php endforeach; ?>
            </div>
            <div class="col-lg-9 col-md-12 col-sm-12 d-flex flex-column justify-content-center align-items-center">
                <img src="<?php echo $album["image"]; ?>"  id="music-image" class="img-fluid rounded-3" width="300px">
                <br>
                <audio src="" id="music-player" controls class="mt-3"></audio>
            </div>
        <?php endif; ?>
    </div>
</div>

<script>
    function play_music(music_path, image_path) {
        var music_player = document.getElementById("music-player");
        music_player.setAttribute("src", music_path);
        music_player.play();

        var music_image = document.getElementById("music-image");
        music_image.setAttribute("src", image_path);
    }
</script>

<?php include "footer.php"; ?>