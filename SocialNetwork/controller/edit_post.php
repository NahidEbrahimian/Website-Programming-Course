<?php
    include "model/database.php";

    $post_id = $_POST["post_id"];
    $text = $_POST["text"];

    $db->query("UPDATE posts SET caption = '$text' WHERE id = $post_id");

    header("Location: personal_profile.php");
?>