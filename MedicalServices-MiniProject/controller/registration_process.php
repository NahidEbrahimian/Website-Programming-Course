<?php

include "model/database.php";

$flag = 1;
$messages = array();
$message_type = array();


if($_SESSION["user-register"] == "patient")
{
    $user_register = 1;
}
else
{
    $user_register = 2;
}


if(isset($_POST["password"]))
{
    $password = $_POST["password"];
}
if(empty($_POST["password"]))
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
if(empty($_POST["confirm-password"]))
{
    $confirm_password = '';
}

if(isset($_POST["first-name"]))
{
    $first_name = $_POST["first-name"];
}
if(empty($_POST["first-name"]))
{
    $messages[] = "پر کردن فیلد نام اجباری است.";
    $message_type[] = "error";
    $flag = 0;
}

if(isset($_POST["last-name"]))
{
    $last_name = $_POST["last-name"];
}
if(empty($_POST["last-name"]))
{
    $messages[] = "پر کردن فیلد نام خانوادگی اجباری است.";
    $message_type[] = "error";
    $flag = 0;
}

if(isset($_POST["mobile-number"]))
{
    $mobile_number = $_POST["mobile-number"];
}
if(empty($_POST["mobile-number"]))
{
    $messages[] = "پر کردن فیلد شماره همراه اجباری است.";
    $message_type[] = "error";
    $flag = 0;
    $mobile_number = "";
}


if(isset($_POST["date-of-birth"]))
{
    $birthday = $_POST["date-of-birth"];
}
if(empty($_POST["date-of-birth"]))
{
    $messages[] = "پر کردن فیلد تاریخ تولد اجباری است.";
    $message_type[] = "error";
    $flag = 0;
}


if(isset($_POST['gender']))
{
    $form_check_value = $_POST['gender'];

    if ($form_check_value == "female")
    {
        $gender = 0;
    }
    
    else 
    {
        $gender = 1;
    }
}
if(empty($_POST['gender']))
{
    $messages[] = "لطفا جنسیت را مشخص کنید.";
    $message_type[] = "error";
    $flag = 0;
}

# CHECK THIS FIELDS FOR DOCTORS
if($_SESSION["user-register"] == "doctor")
{
    if(isset($_POST["email"]))
    {
        $email = $_POST["email"];
    }
    if(empty($_POST["email"]))
    {
        $messages[] = "پر کردن فیلد ایمیل اجباری است.";
        $message_type[] = "error";
        $flag = 0;
    }

    $specialty = $_POST["specialty"];

    if(isset($_POST["gmc-number"]))
    {
        $gmc_number = $_POST["gmc-number"];
    }
    if(empty($_POST["gmc-number"]))
    {
        $messages[] = "لطفا کد نظام پزشکی خود را وارد نمایید  .";
        $message_type[] = "error";
        $flag = 0;
        $gmc_number = "";
    }

    $user_count = $db->query("SELECT * FROM doctors WHERE GMC_number = '$gmc_number'")->num_rows;
    // $flag = 1;

    if($user_count > 0)
    {
        $messages[] = "کد نظام پزشکی شما تکراری است.";
        $message_type[] = "error";
        $flag = 0;
    }
}

# CHECK THIS FIELDS FOR PATIENTS
if($_SESSION["user-register"] == "patient")
{

    if(isset($_POST["national-id"]))
    {
        $national_id = $_POST["national-id"];
    }
    if(empty($_POST["national-id"]))
    {
        $messages[] = "پر کردن فیلد کد ملی اجباری است.";
        $message_type[] = "error";
        $flag = 0;
        $national_id = "";
    }

    $user_count = $db->query("SELECT * FROM patients WHERE national_ID = '$national_id'")->num_rows;
    // $flag = 1;

    if(strlen($national_id) < 10)
    {
        $messages[] = "کد ملی نامعتبر";
        $message_type[] = "error";
        $flag = 0;
    }

    if($user_count > 0)
    {
        $messages[] = "کد ملی شما تکراری است.";
        $message_type[] = "error";
        $flag = 0;
    }

}

if($password !== $confirm_password)
{
    $messages[] = "گذرواژه نابرابر";
    $message_type[] = "error";
    $flag = 0;
}


if($flag == 1)
{
    $hash_password = md5($password);

    if($_SESSION["user-register"] == "doctor")
    {
        if (isset($_FILES["image"]["name"]))
        {
            $media = "view/images/users/" . $_FILES["image"]["name"];
            move_uploaded_file($_FILES["image"]["tmp_name"] ,$media); 

            $db->query("INSERT INTO doctors (first_name, last_name, password, mobile_number, gender, birthday, email, specialty_id, GMC_number, image) VALUES('$first_name', '$last_name', '$hash_password', '$mobile_number', $gender, '$birthday', '$email', '$specialty', '$gmc_number', '$media')");
        }
        else
        {
            $db->query("INSERT INTO doctors (first_name, last_name, password, mobile_number, gender, birthday, email, specialty_id, GMC_number) VALUES('$first_name', '$last_name', '$hash_password', '$mobile_number', $gender, '$birthday', '$email', '$specialty', '$gmc_number')");
        }
    }
    else
    {
        $db->query("INSERT INTO patients (first_name, last_name, national_ID, password, mobile_number, gender, birthday) VALUES('$first_name', '$last_name', '$national_id', '$hash_password', '$mobile_number', $gender, '$birthday')");
    }
    $messages[] = "عضویت با موفقیت انجام شد.";
    $message_type[] = "success";
}

$_SESSION["message"] = $messages;
$_SESSION["message_type"] = $message_type;


if($flag == 1)
{
    header("Location: index.php");
}
else
{
    header("Location: registration_form.php?user-register=$user_register");
}

?>