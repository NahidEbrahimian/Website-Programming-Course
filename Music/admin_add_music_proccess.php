<?php
include "database.php";

$name = $_POST["name"];
$album_id = $_POST["album-id"];

// if($_FILES["image"]["size"] > 5000000)
// {
//     echo "فایل خیلی بزرگ ";
// //     header("Location: admin_add_music.php");
// }
// else
// {

$music_name = "musics/" . $_FILES["mp3"]["name"];
$image_name = "images/musics/" . $_FILES["image"]["name"];

echo $music_name;
$db->query("INSERT INTO musics (name, image, album_id, mp3) VALUES ('$name', '$image_name', '$album_id', '$music_name')");
// $db->query("INSERT INTO musics (name, image, album_id) VALUES ('$name', '$image_name', '$album_id')");

move_uploaded_file($_FILES["image"]["tmp_name"] ,$image_name);
move_uploaded_file($_FILES["mp3"]["tmp_name"] ,$music_name);

header("Location: admin_musics.php");
// }
?>