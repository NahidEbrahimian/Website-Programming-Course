<?php
    // creat mysql object
    $db = new mysqli("localhost", "root", "", "music");
    // $db = new mysqli("localhost", "id18685167_musicdb", "7YY0T)JO<Z3O4yY-", "id18685167_music");


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