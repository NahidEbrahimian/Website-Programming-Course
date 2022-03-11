<?php

   include "database.php";
   session_start();

   $num_quizes = $db->query("SELECT * FROM quistion");
   $num_quizes = $num_quizes->num_rows;

   $user_choice_id = $_POST["asnwer"];
   $q_id = $_POST["quistion_id"];

   $correct_choice = $db->query("SELECT * FROM answers WHERE is_true = 1 and quistion_id = $q_id");
   $correct_choice = $correct_choice->fetch_assoc(); // یک رکورد
   $correct_choice_id = $correct_choice["id"];

   if($user_choice_id == $correct_choice_id)
   {
    $_SESSION["user_score"]++;
   }

   $passed_time = microtime(true) - $_SESSION["start_time"];
   if (($num_quizes / 2) * 60 < $passed_time)
   {
      header("Location: final.php");
   }

   else
   {
      $q_id++;
      if($q_id > $num_quizes)
      {
       header("Location: final.php");
      }
      else
      {
       header("Location: quistion.php?x=$q_id");
      }
   }
?>