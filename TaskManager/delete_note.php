<?php
include "database.php";
$note_id = $_GET["note-id"];
$db->query("DELETE FROM tasks WHERE id = $note_id");

header("Location: index.php");
?>