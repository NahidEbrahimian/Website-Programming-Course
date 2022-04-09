<?php
session_start();

$username = $_POST["username"];
$password = $_POST["password"];

if($username == "nahid" && $password == "1234")
{
    $_SESSION["login_status"] = true;
    header("Location: admin_dashboard.php");
}
else
{
    header("Location: admin_login.php");
}
?>