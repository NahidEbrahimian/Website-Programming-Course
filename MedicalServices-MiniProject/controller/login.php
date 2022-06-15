<?php

include "model/database.php";

$password = $_POST["password"];
$ID = $_POST["username"];
$user_login = $_POST["user-login"];

$hash_password = md5($password);

if($user_login == "patient")
{
    $result = $db->query("SELECT * FROM patients WHERE national_ID = '$ID' AND password = '$hash_password'");
    $user_count = $result->num_rows;

    $validation_password = $db->query("SELECT * FROM patients WHERE password = '$hash_password'");
    $pass_count = $validation_password->num_rows;

    $validation_user = $db->query("SELECT * FROM patients WHERE  national_ID = '$ID'");
    $username_count = $validation_user->num_rows;
}

else
{
    $result = $db->query("SELECT * FROM doctors WHERE GMC_number = '$ID' AND password = '$hash_password'");
    $user_count = $result->num_rows;

    $validation_password = $db->query("SELECT * FROM doctors WHERE password = '$hash_password'");
    $pass_count = $validation_password->num_rows;

    $validation_user = $db->query("SELECT * FROM doctors WHERE  GMC_number = '$ID'");
    $username_count = $validation_user->num_rows;  
}

$messages = array();
$message_type = array();

if($user_count == 1)
{
    $user = $result->fetch_assoc();

    $_SESSION["login_status"] = true;
    $_SESSION["user_name"] = $user["first_name"] . " " . $user["last_name"];
    $_SESSION["user_id"] = $user["id"];
    $_SESSION["user-login"] = $user_login;

    header("Location: user_page.php");    
}

else
{
    if($username_count == 0 && $pass_count == 0)
    {
        $messages[] = "نام کاربری و گذرواژه نامعتبر";
        $message_type[] = "error";
    }
    else
    {
        if($username_count == 0)
        {
            $messages[] = "نام کاربری نامعتبر";
            $message_type[] = "error";
        }
        if($pass_count == 0)
        {
            $messages[] = "گذرواژه نامعتبر";
            $message_type[] = "error";
        }
    }

    $_SESSION["message"] = $messages;
    $_SESSION["message_type"] = $message_type;
    header("Location: index.php");
}

?>
