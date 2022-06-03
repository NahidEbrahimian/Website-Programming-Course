<?php
    include "model/database.php";

    $comment_id = $_POST["comment_id"];
    $db->query("DELETE FROM comments WHERE id = $comment_id");

?>