<?php
    include "model/database.php";
    include "controller/functions.php";
    
    $user_id = $_SESSION["user_id"];
    $user_name = $_SESSION["user_name"];

    $posts = $db->query("SELECT *, users.id AS user_id, 
                        posts.id AS post_id
                        FROM posts INNER JOIN users 
                        ON posts.user_id = users.id
                        WHERE posts.user_id IN (SELECT followings_id FROM follows WHERE followers_id = $user_id)
                        ORDER BY time DESC");


    $posts_array = array();
    
    foreach($posts as $post)
    {
        $post_id = $post["post_id"];
        $post["comments"] = $db->query("SELECT *, comments.id AS comment_id FROM comments 
                                        INNER JOIN users 
                                        ON comments.user_id = users.id
                                        WHERE post_id = $post_id");
                                        
        $post["num_comments"] = $db->query("SELECT COUNT(*) AS count FROM comments 
                                            INNER JOIN users 
                                            ON comments.user_id = users.id
                                            WHERE post_id = $post_id")->fetch_assoc();;
                                            

        # NUMBER OF LICKES
        $post["likes"] = $db->query("SELECT COUNT(*) AS count FROM likes WHERE post_id = $post_id")->fetch_assoc();


        # CHECK IF POST IS LICKED OR NO
        $count = $db->query("SELECT * FROM likes WHERE post_id = $post_id AND user_id = $user_id")->num_rows;
        if($count == 1) //قبلا لایک نکرده پس اجاره داره لایک کنه
        {
            $post["like"] = 1;
        }
        else
        {
            $post["like"] = 0;
        }

        $posts_array[] = $post; // append in python
    }
    
    require "view/home.php";
?>