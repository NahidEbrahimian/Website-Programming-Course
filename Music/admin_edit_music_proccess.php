<?php
include "database.php";

$name = $_POST["name"];
$id = $_POST["id"];
$album_id = $_POST["album-id"];

if($_FILES["image"]["name"] == "")
{
    $db->query("UPDATE musics SET name = '$name', album_id = $album_id WHERE id = $id");
    header("Location: admin_musics.php");
}
else
{
    if($_FILES["image"]["size"] > 5000000)
    {
        echo "فایل خیلی بزرگ ";
        header("Location: admin_edit_music.php");
    }
    else
    {
    $image_name = "images/musics/" . $_FILES["image"]["name"];
    $db->query("UPDATE musics SET name = '$name', image = '$image_name', album_id = $album_id WHERE id = $id");
    
    move_uploaded_file($_FILES["image"]["tmp_name"] ,$image_name);
    header("Location: admin_musics.php");
    }
    
}

?>