<?php
include "model/database.php";

$username = $_SESSION["user_name"];
$user_id = $_SESSION["user_id"];

$posts = $db->query("SELECT * FROM posts WHERE user_id = $user_id");
$posts_count = $posts->num_rows;
$user = $db->query("SELECT * FROM users WHERE id = $user_id")->fetch_assoc();

require "view/personal_profile.php";
?>