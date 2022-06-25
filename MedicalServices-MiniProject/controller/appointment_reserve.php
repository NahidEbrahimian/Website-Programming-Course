<?php
    include "model/database.php";

    $user_id = $_SESSION["user_id"];
    $date_time_id = $_POST["date_time_id"];

    $selected_time = $db->query("SELECT * FROM date_time WHERE id = $date_time_id")->fetch_assoc();
    $count = $db->query("SELECT * FROM date_time WHERE id = $date_time_id AND reserved=1")->num_rows;
    // $count_reserved_with_user = $db->query("SELECT * FROM date_time WHERE id = $date_time_id AND patient_id=$user_id AND reserved=1")->num_rows;

    if($count == 0) //قبلا رزرو نکرده پس اجاره داره رزرو کنه
    {
        $db->query("UPDATE date_time SET reserved = 1, patient_id = $user_id WHERE id=$date_time_id");
        echo "1";
    }
    else // قبلا رزرو کرده پس الان باید لغو بشه
    {
        $db->query("UPDATE date_time SET reserved = 0 , patient_id = 0 WHERE id=$date_time_id");
        echo "0";
    }
?>