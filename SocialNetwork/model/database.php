<?php
    // creat mysql object
    // $db = new mysqli("localhost", "root", "", "social_network");
    $db = new mysqli("localhost", "id18865666_socialnetworkdb", "7YY0T)JO<Z3O4yY-", "id18865666_socialnetwork");


    if($db->connect_error)
    {
        echo "error";
        echo $db->connect_error;
    }

    else
    {
        $db->query("SET CHARACTER SET utf8");
    }
?>