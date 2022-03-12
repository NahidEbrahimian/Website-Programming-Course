<?php

   include "database.php";
   session_start();

   $num_quizes = $db->query("SELECT * FROM questions");
   $num_quizes = $num_quizes->num_rows;

   $user_choice_id = $_POST["asnwer"];
   $q_id = $_POST["question_id"];

   $correct_choice = $db->query("SELECT * FROM answers WHERE is_true = 1 and question_id = $q_id");
   $correct_choice = $correct_choice->fetch_assoc(); // یک رکورد
   $correct_choice_id = $correct_choice["id"];

   if($user_choice_id == $correct_choice_id)
   {
    $_SESSION["user_score"]++;
   }

   $q_id++;
   if($q_id > $num_quizes)
   {
      header("Location: final.php");
   }
   else
   {
      header("Location: question.php?x=$q_id");
   }
?>