<?php 

    include "database.php";

    $text = $_POST["text_story"];

    $db->query("INSERT INTO choice (text) VALUES ('$text')");
    $choice_id = $db->insert_id; //آیدی آخرین چیزی که در دیتابیس درج شده

    foreach ($_POST["answer"] as $text)
    {
        $db->query("INSERT INTO continue_story (text, choice_id) VALUES ('$text', '$choice_id')");
    }

    //redirect
    header("Location: index.php");
?>