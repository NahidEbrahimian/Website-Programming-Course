<?php
include "database.php";

$id = $_POST["id"];
$title = $_POST["title"];
$text = $_POST["text"];
$color = $_POST["color"];
$date = $_POST["date"] . " " . $_POST["time"];

$db->query("INSERT INTO tasks (title, text, color, date_time) VALUES ('$title', '$text', '$color', '$date')");

header("Location: index.php");

?>