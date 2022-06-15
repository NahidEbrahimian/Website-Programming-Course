<?php
    include "model/database.php";

    $user_register = $_SESSION["user-register"];
    $specialties = $db->query("SELECT * FROM specialties");
    require "view/registration_form.php";
?>