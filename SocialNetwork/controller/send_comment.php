<?php

include "model/database.php";
$text = $_POST["text"];
$post_id = $_POST["post_id"];
$user_id = $_SESSION["user_id"];

if(!empty($text))
{
    $db->query("INSERT INTO comments(text, post_id, user_id) VALUES('$text', $post_id, $user_id)");

}

// header("Location: home.php");
?>