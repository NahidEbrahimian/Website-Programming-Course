<?php
include "database.php";

$name = $_POST["name"];
$id = $_POST["id"];

if($_FILES["image"]["name"] == "")
{
    $db->query("UPDATE artists SET name = '$name' WHERE id = $id");
    header("Location: admin_artists.php");
}
else
{
    if($_FILES["image"]["size"] > 5000000)
    {
        echo "فایل خیلی بزرگ ";
        header("Location: admin_edit_artist.php");
    }
    else
    {
    $image_name = "images/artists/" . $_FILES["image"]["name"];
    $db->query("UPDATE artists SET name = '$name', image = '$image_name' WHERE id = $id");
    
    move_uploaded_file($_FILES["image"]["tmp_name"] ,$image_name);
    header("Location: admin_artists.php");
    }
    
}

?>