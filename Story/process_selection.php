<?php

   include "database.php";

   $choice_id = $_POST["choice_id"];
   $texts_story = $db->query("SELECT * FROM continue_story WHERE choice_id = $choice_id");

   foreach($texts_story as $text) 
   {
      if ($text["choice_id"] == $choice_id)
      {
         $story_id = $text["id"];
         break;
      }
      echo "The number is: $x <br>";
      }

   $num_text = $db->query("SELECT * FROM continue_story WHERE choice_id = $choice_id");
   $num_text = $num_text->num_rows;

   header("Location: story.php?x=$story_id&ch_id=$choice_id");
?>