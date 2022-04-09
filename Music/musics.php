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
            <div class="col-3 rounded-2">
                <div class="list-group">
                    <?php foreach ($musics as $music) : ?>
                        <button class="list-group-item list-group-item-action" onclick="play_music('<?php echo $music["mp3"]; ?>')">
                            <div class="row">
                                <div class="col-8">
                                    <h6>
                                        <?php echo $artist["name"]; ?>
                                    </h6>
                                    <?php echo $music["name"]; ?>
                                </div>

                                <div class="col-4">
                                    <img src="<?php echo $music["image"]; ?>" class="img-thumbnail" alt="Card image cap">
                                </div>
                            </div>
                        </button>
                    <?php endforeach; ?>
                    </div>
            </div>
        <?php endif; ?>

            <div class="col-9 rounded-2">
                <center>
                    <img src="<?php echo $album["image"]; ?>" class="img-fluid" alt="Card image cap">
                    <br>
                    <audio id="music-player" src="" controls class="mt-3"></audio>
                </center>
            </div>
    </div>
</div>

<script>
    function play_music(music_path)
    {
        var music_player = document.getElementById("music-player");
        music_player.setAttribute("src", music_path);
        music_player.play();
    }
</script>

<?php include "footer.php"; ?>