<?php
    include "model/database.php";

    $user_id = $_SESSION["user_id"];
    $post_id = $_POST["post_id"];
    $count = $db->query("SELECT * FROM likes WHERE post_id = $post_id AND user_id = $user_id")->num_rows;

    if($count == 0) //قبلا لایک نکرده پس اجاره داره لایک کنه
    {
        $db->query("INSERT INTO likes(post_id, user_id) VALUES($post_id, $user_id)");
        echo "1";
    }
    else // قبلا لایک کرده پس الان باید دیس لایک بشه
    {
        $db->query("DELETE FROM likes WHERE post_id = $post_id AND user_id = $user_id");
        echo "0";
    }

?>