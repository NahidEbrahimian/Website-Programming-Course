<?php
include "database.php";

$name = $_POST["name"];
$artist_id = $_POST["artist-id"];

if($_FILES["image"]["size"] > 5000000)
{
    echo "فایل خیلی بزرگ ";
    header("Location: admin_add_album.php");
}
else
{
$image_name = "images/albums/" . $_FILES["image"]["name"];
$db->query("INSERT INTO albums (name, image, artist_id) VALUES ('$name', '$image_name', $artist_id)");

move_uploaded_file($_FILES["image"]["tmp_name"] ,$image_name);
header("Location: admin_albums.php");
}
?>