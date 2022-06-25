<?php

    include "model/database.php";
    include "controller/functions.php";
    
    $user_id = $_SESSION["user_id"];
    $user_name = $_SESSION["user_name"];
    $_SESSION["display"] = true;

    $text = $_POST["text"];

    $specialties = $db->query("SELECT *, services.id AS service_id, 
                            specialties.id AS specialty_id
                            FROM services INNER JOIN specialties 
                            ON specialties.id = services.specialty_id
                            WHERE specialties.specialty LIKE '%$text%'");


    $specialties_array = array();
    
    foreach($specialties as $specialty)
    {
        $specialty_id = $specialty["specialty_id"];
        $doctor_id = $specialty['doctor_id'];
        $servise_id = $specialty['service_id'];

        $specialty["doctor"] = $db->query("SELECT * FROM doctors WHERE id = $doctor_id")->fetch_assoc();                                
        $specialty["date-time"] = $db->query("SELECT *, date_time.id AS date_time_id FROM date_time 
                            INNER JOIN services 
                            ON services.id = date_time.servise_id
                            WHERE services.specialty_id = $specialty_id");                                

        $specialties_array[] = $specialty; // append in python
    }
    
    require "view/user_page.php";
?>