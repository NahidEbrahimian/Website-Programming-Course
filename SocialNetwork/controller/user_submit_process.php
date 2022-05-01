<?php

include "../model/database.php";

$password = $_POST["password"];
$confirm_password = $_POST["confirm-password"];

if($password !== $confirm_password)
{
    header("Location: ../view/submition_form.php");
}

else
{
    $first_name = $_POST["first-name"];
    $last_name = $_POST["last-name"];
    
    $account_name = $_POST["account-name"];
    $email = $_POST["email"];
    
    $mobile_number = $_POST["mobile-number"];
    
    $form_check_value = $_POST['gender'];
    
    $birthday = $_POST["date-of-birth"];
    
    if ($form_check_value == "female")
    {
        $gender = 0;
    } 
    else 
    {
        $gender = 1;
    }
    
    if(isset($_FILES["image"]))
    {
        $image_name = "../images/users/" . $_FILES["image"]["name"];
        $db->query("INSERT INTO users (first_name, last_name, user_name, password, email, image, mobile_number, gender, birthday) VALUES ('$first_name', '$last_name', '$account_name', '$email', '$password',  '$image_name', '$mobile_number', $gender. '$birthday')");
       
        move_uploaded_file($_FILES["image"]["tmp_name"] ,$image_name);
    }
    
    else
    {
        $db->query("INSERT INTO users (first_name, last_name, user_name, password, email, mobile_number, gender, birthday) VALUES ('$first_name', '$last_name', '$account_name', '$email', '$password', '$mobile_number', $gender, '$birthday')");
    }
    
    
    header("Location: ../view/index.php");
    
}
