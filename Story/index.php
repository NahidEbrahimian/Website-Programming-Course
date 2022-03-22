<?php
    include "database.php";

    $texts_story = $db->query("SELECT * FROM continue_story");
    $total = $texts_story->num_rows;
?>

<html lang="fa" dir="rtl">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="چهارماهی">
        <meta name="keywords" content="">
        <meta name="auther" content="0">
        <link type="text/css" rel="stylesheet" href="css/bootstrap.rtl.css">
        <link href="css/style.css" type="text/css" rel="stylesheet">
        <title>هزار و یک شب</title>
    </head>
    
    <body class="position: fixed justify-content: center">
        <div class="container px-5 mt-3">
            <nav class="navbar navbar-expand-lg mb-2 mt-2 rounded">
                <div class="container-fluid pb-2">
                    <a class="navbar-brand text-white" href="#">
                        هزار و یک  شب     
                       |
                        چهارماهی
                    </a>
                    <a class="nav-link text-white" href="admin.php">ورود به پنل مدیریت</a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent"></div>
                </div>
            </nav>

            <div class="row mt-2 rounded text-black">
                <div class="col">
                    <div class="card">
                        <div class="card-header">
                            چهارماهی
                        </div>
                        <div class="card-body">

                            <p class="card-text mb-4">
                                روزی روزگاری، ماهیگیری جوان در روستایی زندگی می کرد ...
                                پسرک هر روز بامداد قبل از سپیده دم به کنار دریا می رفت و با صیدی که از دریا به دست می آورد، چرخ زندگی خود و خانواده اش را می چرخاند.
                            </p>

                            <a href="story.php?x=1&ch_id=0" class="btn text-white mt-2" style="background-color: rgba(3, 75, 9, 0.5);">
                                    بعدی 
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
        <script src="js/bootstrap.js"></script>
        <script src="js/script.js"></script>

    </body>
</html>