<?php
include "database.php";
$music_id = $_GET["music-id"];
$db->query("DELETE FROM musics WHERE id = $music_id");

header("Location: admin_musics.php");
?>