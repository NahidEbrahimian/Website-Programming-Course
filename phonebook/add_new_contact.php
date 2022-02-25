<?php 

    include "database.php";

    $name = $_POST["name"];
    $family = $_POST["family"];
    $mobile = $_POST["mobile"];
    $phone = $_POST["phone"];
    $email = $_POST["email"];

    mysqli_query($connection, "INSERT INTO contacts(first_name, last_name, mobile_number, phone_number, email) VALUES ('$name', '$family', '$mobile', '$phone', '$email')");
    
    //redirect
    header("Location: index.php");

?>