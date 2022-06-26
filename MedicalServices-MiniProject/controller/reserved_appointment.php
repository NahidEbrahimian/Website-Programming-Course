<?php

    include "model/database.php";
    include "controller/functions.php";
    
    $user_id = $_SESSION["user_id"];
    $user_name = $_SESSION["user_name"];
    $_SESSION["display"] = true;

    $reserved_appointments = $db->query("SELECT *, services.id AS service_id, 
                            date_time.id AS date_time_id
                            FROM services INNER JOIN date_time 
                            ON date_time.servise_id = services.id
                            WHERE services.doctor_id=$user_id AND date_time.reserved=1");

    $reserved_appointment_array = array();
    foreach($reserved_appointments as $reserved_appointment)
    {                        
        $reserved_appointment_array[] = $reserved_appointment; // append in python
    }

    $display_servicess = false;
    $display_reserved_appointment = true;
    
    require "view/user_page.php";
?>