<?php
    include "model/database.php";
    include "controller/functions.php";
    
    $user_id = $_SESSION["user_id"];
    $posts = $db->query("SELECT *, users.id AS user_id, 
                        posts.id AS post_id
                        FROM posts INNER JOIN users 
                        ON posts.user_id = users.id ORDER BY time DESC");

    // $following = $db->query("SELECT * FROM follows WHERE followers_id = $user_id");
    // $user_id = $_SESSION["user_id"];
    // $posts = $db->query("SELECT *, users.id AS user_id, 
    // posts.id AS post_id
    // FROM posts
    // INNER JOIN follows 
    // ON follows.followers_id = posts.user_id
    // INNER JOIN users ON posts.user_id = follows.followers_id
    // -- WHERE posts.user_id = $user_id
    // ORDER BY time DESC");


    $posts_array = array();
    
    foreach($posts as $post)
    {
        $post_id = $post["post_id"];
        $post["comments"] = $db->query("SELECT * FROM comments 
                                        INNER JOIN users 
                                        ON comments.user_id = users.id
                                        WHERE post_id = $post_id");
        $post["likes"] = $db->query("SELECT COUNT(*) AS count FROM likes WHERE post_id = $post_id")->fetch_assoc();
        $posts_array[] = $post; // append in python
    }
    
    require "view/home.php";
?>