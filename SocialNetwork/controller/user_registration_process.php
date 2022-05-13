<?php

include "model/database.php";

$flag_user = 1;

if(isset($_POST["password"]))
{
    $password = $_POST["password"];
}
else
{
    $messages[] = "پر کردن فیلد  گذرواژه اجباری است.";
    $message_type[] = "error";
    $flag = 0;
    $password = "";
}

if(isset($_POST["confirm-password"]))
{
    $confirm_password = $_POST["confirm-password"];
}
else
{
    $confirm_password = "";
}

if(isset($_POST["first-name"]))
{
    $first_name = $_POST["first-name"];
}
else
{
    $messages[] = "پر کردن فیلد نام اجباری است.";
    $message_type[] = "error";
    $flag = 0;
}

if(isset($_POST["last-name"]))
{
    $last_name = $_POST["last-name"];
}
else
{
    $messages[] = "پر کردن فیلد نام خانوادگی اجباری است.";
    $message_type[] = "error";
    $flag = 0;
}
if(isset($_POST["account-name"]))
{
    $user_name = $_POST["account-name"];
}
else
{
    $messages[] = "پر کردن فیلد نام کاربری اجباری است.";
    $message_type[] = "error";
    $flag = 0;
    $user_name = "";
    $flag_user = 0;
}
if(isset($_POST["email"]))
{
    $email = $_POST["email"];
}
else
{
    $messages[] = "پر کردن فیلد ایمیل اجباری است.";
    $message_type[] = "error";
    $flag = 0;
}

if(isset($_POST["mobile-number"]))
{
    $mobile_number = $_POST["mobile-number"];
}

if(isset($_POST['gender']))
{
    $form_check_value = $_POST['gender'];

}

if(isset($_POST["date-of-birth"]))
{
    $birthday = $_POST["date-of-birth"];
}


if(isset($_POST["bio"]))
{
    $bio = $_POST["bio"];
}

if(isset($_POST['gender']))
{
    if ($form_check_value == "female")
    {
        $gender = 0;
    }
    
    else 
    {
        $gender = 1;
    }
}
else
{
    $messages[] = "لطفا جنسیت را انتخاب کنید.";
    $message_type[] = "error";
    $flag = 0;
}

$user_count = $db->query("SELECT * FROM users WHERE user_name = '$user_name'")->num_rows;
$flag = 1;
$messages = array();
$message_type = array();

if($password !== $confirm_password)
{
    $messages[] = "گذرواژه نابرابر";
    $message_type[] = "error";
    $flag = 0;
}

if(strlen($user_name) < 4)
{
    $messages[] = "نام کاربری نامعتبر";
    $message_type[] = "error";
    $flag = 0;
}

if($user_count > 0)
{
    $messages[] = "نام کاربری شما تکراری است.";
    $message_type[] = "error";
    $flag = 0;
}

if($flag == 1)
{
    $hash_password = md5($password);
    if(isset($bio))
    {
        $db->query("INSERT INTO users (first_name, last_name, user_name, password, email, mobile_number, gender, birthday, bio) VALUES('$first_name', '$last_name', '$user_name', '$hash_password', '$email', '$mobile_number', $gender, '$birthday', '$bio')");
    }
    else
    {
        $db->query("INSERT INTO users (first_name, last_name, user_name, password, email, mobile_number, gender, birthday) VALUES('$first_name', '$last_name', '$user_name', '$hash_password', '$email', '$mobile_number', $gender, '$birthday')");
        $messages[] = "عضویت با موفقیت انجام شد.";
        $message_type[] = "success";
    }
}

$_SESSION["message"] = $messages;
$_SESSION["message_type"] = $message_type;

if($flag == 1)
{
    header("Location: index.php");
}
else
{
    header("Location: registration_form.php");
}

?>