<?php
include "model/database.php";
include "controller/functions.php";

$username = $_SESSION["user_name"];
$user_id = $_SESSION["user_id"];

$posts = $db->query("SELECT * FROM posts WHERE user_id = $user_id");
$posts_count = $posts->num_rows;
$user = $db->query("SELECT * FROM users WHERE id = $user_id")->fetch_assoc();


$posts_array = array();

foreach($posts as $post)
{
    $post_id = $post["id"];
    $post["comments"] = $db->query("SELECT * FROM comments 
                                    INNER JOIN users 
                                    ON comments.user_id = users.id
                                    WHERE post_id = $post_id");
                                    
    $post["num_comments"] = $db->query("SELECT COUNT(*) AS count FROM comments 
                                        INNER JOIN users 
                                        ON comments.user_id = users.id
                                        WHERE post_id = $post_id")->fetch_assoc();
    
    $post["likes"] = $db->query("SELECT COUNT(*) AS count FROM likes WHERE post_id = $post_id")->fetch_assoc();
    $post["followers"] = $db->query("SELECT COUNT(*) AS count FROM follows WHERE followings_id = $user_id")->fetch_assoc();
    $post["followings"] = $db->query("SELECT COUNT(*) AS count FROM follows WHERE followers_id = $user_id")->fetch_assoc();
    
    $posts_array[] = $post; // append in python
}

    
require "view/personal_profile.php";
?>