<?php
include "database.php";

$name = $_POST["name"];
$id = $_POST["id"];
$artist_id = $_POST["artist-id"];

if($_FILES["image"]["name"] == "")
{
    $db->query("UPDATE albums SET name = '$name', artist_id = $artist_id WHERE id = $id");
    header("Location: admin_albums.php");
}
else
{
    if($_FILES["image"]["size"] > 5000000)
    {
        echo "فایل خیلی بزرگ ";
        header("Location: admin_edit_album.php");
    }
    else
    {
    $image_name = "images/albums/" . $_FILES["image"]["name"];
    $db->query("UPDATE albums SET name = '$name', image = '$image_name', artist_id = $artist_id WHERE id = $id");
    
    move_uploaded_file($_FILES["image"]["tmp_name"] ,$image_name);
    header("Location: admin_albums.php");
    }
    
}

?>