<?php

include "model/database.php";

$password = $_POST["password"];
$username = $_POST["username"];

$hash_password = md5($password);

$result = $db->query("SELECT * FROM users WHERE user_name = '$username' AND password = '$hash_password'");
$user_count = $result->num_rows;

$validation_password = $db->query("SELECT * FROM users WHERE password = '$hash_password'");
$pass_count = $validation_password->num_rows;

$validation_user = $db->query("SELECT * FROM users WHERE  user_name = '$username'");
$username_count = $validation_user->num_rows;

$messages = array();
$message_type = array();

if($user_count == 1)
{
    $user = $result->fetch_assoc();

    $_SESSION["login_status"] = true;
    $_SESSION["user_name"] = $username;
    $_SESSION["user_id"] = $user["id"];
    header("Location: home.php");    
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
