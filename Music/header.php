<!DOCTYPE html>

<?php
session_start();
?>

<html lang="fa" dir="rtl">

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

<body class="bg-black">

    <div class="container">
        <nav class="navbar navbar-expand-lg navbar-dark mb-2 mt-2 rounded">
            <a class="navbar-brand text-white" href="index.php"><b>موزیک</b></a>
            <a class="nav-link  text-white" href="index.php">صفحه اصلی <span class="sr-only"></span></a>
            <a class="nav-link justify-content-start text-white" href="artists.php">خواننده ها</a>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto  mb-lg-0"></ul>
                <?php if ($_SESSION["login_status"] != null && $_SESSION["login_status"] == true) : ?>
                    <a class="nav-link text-white" href="admin_logout.php">
                        <i class="fas fa-user"></i> خروج از حساب کاربری</a>
                <?php else : ?>
                    <a class="nav-link text-white" href="admin_login.php">
                        <i class="fas fa-user"></i> حساب کاربری</a>
                <?php endif; ?>
            </div>
        </nav>
    </div>

    <div class="container">
        <hr class="text-white mb-4">
    </div>