<?php
include "database.php";

$id = $_POST["id"];
$title = $_POST["title"];
$text = $_POST["text"];
$color = $_POST["color"];
$date = $_POST["date"] . " " . $_POST["time"];

$db->query("UPDATE tasks SET title = '$title', text = '$text', color = '$color', date_time = '$date' WHERE id = $id");

header("Location: index.php");

?>