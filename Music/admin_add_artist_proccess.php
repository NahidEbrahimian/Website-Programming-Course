<?php
include "database.php";

$name = $_POST["name"];
if($_FILES["image"]["size"] > 5000000)
{
    echo "فایل خیلی بزرگ ";
    header("Location: admin_add_artist.php");
}
else
{
$image_name = "images/artists/" . $_FILES["image"]["name"];
$db->query("INSERT INTO artists (name, image) VALUES ('$name', '$image_name')");

move_uploaded_file($_FILES["image"]["tmp_name"] ,$image_name);
header("Location: admin_artists.php");
}
?>