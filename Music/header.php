<?php
session_start();
if (!isset($_SESSION['login_status']))
{
    $_SESSION["login_status"] = false;
}
?>

<!DOCTYPE html>

<html lang="fa" dir="rtl" style="height: 100%;">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="موزیک">
    <meta name="keywords" content="">
    <meta name="auther" content="0">
    <link type="text/css" rel="stylesheet" href="css/bootstrap.rtl.css">
    <link href="css/style.css" type="text/css" rel="stylesheet">
    <link href="css/all.css" type="text/css" rel="stylesheet">
    <title>موزیک</title>
</head>

<body class="bg-black" style="position: relative; min-height: 100%; padding-bottom: 12rem;">

    <div class="container">
        <nav class="navbar navbar-expand-lg navbar-dark mb-2 mt-2 rounded ">
            <div class="container-fluid">
                <a class="navbar-brand text-light" href="index.php"><b>موزیک</b></a>

                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarColor01">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0 col-lg-auto me-lg-auto justify-content-center ">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="index.php">صفحه اصلی</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="artists.php">خواننده ها</a>
                        </li>
                    </ul>
                    <?php if ($_SESSION["login_status"] != null && $_SESSION["login_status"] == true) : ?>
                        <div class="text-start">
                            <a a class="nav-link text-white" href="admin_logout.php">
                                <i class="fas fa-user mx-1"></i> خروج از پنل مدیریت
                            </a>
                        </div>
                    <?php else : ?>
                        <div class="text-start">
                            <a a class="nav-link text-white" href="admin_login.php">
                                <i class="fas fa-user mx-1"></i>ورود 
                            </a>
                        </div>
                    <?php endif; ?>
                </div>
            </div>
        </nav>
    </div>

    <div class="container">
        <hr class="text-white mb-4">
    </div>