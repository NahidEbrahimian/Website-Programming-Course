<?php

include "model/database.php";

$text = $_POST["text"];
$user_id = $_SESSION["user_id"];

if($text == "")
{
    $_SESSION["message"] = "کپشن نمی تواند خالی باشد";
    $_SESSION["message_type"] = "error";
}
else
{
    $db->query("INSERT INTO posts (caption, user_id) VALUES('$text', '$user_id')");
}
header("Location: home.php");

?>