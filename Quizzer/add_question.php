<?php 

    include "database.php";

    $question = $_POST["qestion_text"];

    $db->query("INSERT INTO questions (text) VALUES ('$question')");
    $question_id = $db->insert_id; //آیدی آخرین چیزی که در دیتابیس درج شده

    $true_answer_index = $_POST["true_answer"];
    foreach ($_POST["answer"] as $i => $answer)
    {
        if($i+1 == $true_answer_index)
        {
            $is_true = 1;
        }
        else
        {
            $is_true = 0;
        }

        $db->query("INSERT INTO answers (text, is_true, question_id) VALUES ('$answer', '$is_true', '$question_id')");
    }

    //redirect
    header("Location: index.php");


?>