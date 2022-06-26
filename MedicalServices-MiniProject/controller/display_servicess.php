<?php

    include "model/database.php";
    include "controller/functions.php";
    
    $user_id = $_SESSION["user_id"];
    $user_name = $_SESSION["user_name"];
    $_SESSION["display"] = true;

    $servicess = $db->query("SELECT *, services.id AS service_id, 
                            date_time.id AS date_time_id
                            FROM services INNER JOIN date_time 
                            ON date_time.servise_id = services.id
                            WHERE services.doctor_id=$user_id");

    $rservicess_array = array();
    foreach($servicess as $service)
    {                        
        $rservicess_array[] = $service; // append in python
    }
    
    $display_servicess = true;
    $display_reserved_appointment = false;

    require "view/user_page.php";
?>