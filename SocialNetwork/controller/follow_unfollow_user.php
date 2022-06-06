<?php

include "model/database.php";
$user_follow = $_POST["user-follow"];
$user_id = $_SESSION["user_id"];

$count = $db->query("SELECT * FROM follows WHERE followings_id = $user_follow AND followers_id = $user_id")->num_rows;
if($count == 0)
{
    $db->query("INSERT INTO follows(followings_id, followers_id) VALUES($user_follow, $user_id)");
    echo "1";
}
else
{
    $db->query("DELETE FROM follows WHERE followings_id = $user_follow AND followers_id = $user_id");
    echo "0";
}

?>