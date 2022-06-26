<?php

    include "model/database.php";
    include "controller/functions.php";

    $text = $_POST["text"];
    $date = $_POST["date"];
    $start_time = new DateTime($_POST["start-time"]);
    $end_time = new DateTime($_POST["end-time"]);

    $reserved = 0;
    $patient_id = 0;
    $specialty_id = $_SESSION["user"]["specialty_id"];

    $visit_time = $_POST["visite-time"];
    $doctor_id = $_SESSION["user"]["id"];

    $interval = DateInterval::createFromDateString($visit_time . " " . "min");
    $times = new DatePeriod($start_time, $interval, $end_time);

    # ADD TO SERVICWS TABEL
    $db->query("INSERT INTO services (text, doctor_id, specialty_id) VALUES ('$text', $doctor_id, $specialty_id)");
    $servise_id = $db->insert_id;

    # ADD TO DATE_TIME TABEL
    foreach($times as $time)
    {
        $time = $time->format('H:i');
        $db->query("INSERT INTO date_time (date, time, servise_id, patient_id, reserved) VALUES ('$date', '$time', $servise_id, $patient_id, $reserved)");
    }

    $display_servicess = false;
    $display_reserved_appointment = false;

    require "view/user_page.php";
?>