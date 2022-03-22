<?php

   include "database.php";
   session_start();

   $choice_id = $_POST["choice_id"];
   $story_id = $_POST["story_id"];


   $texts = $db->query("SELECT * FROM continue_story WHERE choice_id = $choice_id");
   $num_text = $texts->num_rows;

   $story_id++;
   $text_story = $db->query("SELECT * FROM continue_story WHERE id = $story_id and choice_id = $choice_id"); // یک جدولی که یک رکورد دارد
   $text_story = $text_story->fetch_assoc();

   if($text_story == "" &&  $choice_id == 0)
   {
      header("Location: selection.php");
   }
   elseif($text_story == "" &&  $choice_id != 0)
   {
      header("Location: final.php");
   }
   else
   {
      header("Location: story.php?x=$story_id&ch_id=$choice_id");
   }
?>