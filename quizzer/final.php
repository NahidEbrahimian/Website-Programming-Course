<?php
    include "database.php";
    session_start();

    $num_quizes = $db->query("SELECT * FROM questions");
    $num_quizes = $num_quizes->num_rows;
    $score = ($_SESSION["user_score"] / $num_quizes ) * 100;
?>

<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="جلسه بیست ششم">
        <meta name="keywords" content="">
        <meta name="auther" content="0">
        <link type="text/css" rel="stylesheet" href="css/bootstrap.rtl.css">
        <title>وبسایت آزمونک</title>
    </head>

    <body lang="fa" dir="rtl" class="bg-white"style="font-family:'Tahoma'">
        <div class="container justify-content-center">
            <nav class="navbar navbar-expand-lg navbar-dark bg-dark mb-5 mt-2 rounded">
                <div class="container-fluid">
                    <a class="navbar-brand" href="#">
                        آزمونک
                    </a>

                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav me-auto mb-2 mb-lg-0"></ul>
                        <form class="d-flex">
                            <input class="form-control me-2 mt-3" type="search" placeholder="جستجو" aria-label="Search">
                            <button class="btn btn-outline-success mt-3" type="submit">جستجو</button>
                        </form>
                    </div>
                </div>
            </nav>

            <h1 class="text-center mb-4 mt-5">نتیجه:</h1>

            <h5 class="text-center mb-4">
                <span><?php echo  $_SESSION["user_score"]; ?></span>
                <span>از</span>
                <span><?php echo $num_quizes ?></span>
            </h5>

            <h5 class="text-center mb-4">
                <span class="font-weight-bold">%</span>
                <span class="font-weight-bold"><?php echo $score; ?></span>
            </h5>

            
            <?php if ($score <= 30): ?>
                <p class="text-center mb-4">نیاز به مطالعه خیلی بیشتر 🙁☹️😞</p>
            <?php endif ?>
            
            <?php if ($score > 30 && $score <= 60): ?>
                <h5 class="text-center mb-4">نیاز به مطالعه بیشتر ☹️</h5>
            <?php endif ?>

            <?php if ($score > 60 && $score <= 80): ?>
                <p class="text-center mb-4">خوب 😊</p>
            <?php endif ?>

            <?php if ( $score > 80):?>
                <p class="text-center mb-4">عالی 😇🤩</p>
            <?php endif ?>

            <p class="text-center mb-4">
                <a href="index.php" class="btn btn-success">
                    تلاش مجدد
                </a>
            </p>

        </div>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
        <script src="js/bootstrap.js"></script>
    </body>
</html>
