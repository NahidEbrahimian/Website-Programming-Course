<?php 
    include "database.php";

    $num_quiz = $_GET["x"];
    
    $porsesh = $db->query("SELECT * FROM quistion WHERE id = $num_quiz"); // یک جدولی که یک رکورد دارد
    $porsesh = $porsesh->fetch_assoc(); // یک رکورد

    $pasokh_ha = $db->query("SELECT * FROM answers WHERE quistion_id = $num_quiz");

    $num_quizes = $db->query("SELECT * FROM quistion");
    $num_quizes = $num_quizes->num_rows;

    session_start();
    $_SESSION["start_time"] = microtime(true);
?>

<html lang="fa" dir="rtl">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="جلسه بیست چهارم">
        <meta name="keywords" content="">
        <meta name="auther" content="0">
        <link type="text/css" rel="stylesheet" href="css/bootstrap.rtl.css">
        <link href="css/style.css" type="text/css" rel="stylesheet">
        <title>وبسایت آزمونک</title>
    </head>
    
    <body style="background-color: gray" class="xyz" onload="timer('0.5')">
        <div class="container">
            <nav class="navbar navbar-expand-lg navbar-dark bg-dark mb-2 mt-2 rounded">
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

            <div class="row mt-2">
                <div class="col">
                <div class="card">
                    <div class="card-header">
                         سوال 
                         <?php echo $porsesh["id"]; ?>
                         از
                         <?php echo $num_quizes; ?>

                         <button type="button" class="btn btn-white rounded-circle btn-xl float-end">
                            <span id="time">

                            </span>
                         </button>                         
                    </div>

                    <div class="card-body">
                        <p>
                            <?php echo $porsesh["text"]; ?>
                        </p>
                        <form action="process.php" method="post">
                            <input type="hidden" value="<?php echo $porsesh["id"]; ?>" name="quistion_id">
                            <?php foreach($pasokh_ha as $pasokh): ?>
                                <div class="form-check">
                                    <input class="form-check-input answers" type="radio" value="<?php echo $pasokh["id"]; ?>" name="asnwer">
                                    <label class="form-check-label mb-1" for="flexRadioDefault1">
                                        <?php echo $pasokh["text"]; ?>
                                    </label>
                                </div>
                            <?php endforeach; ?>

                            <button type="submit" class="btn btn-primary mt-3">بعدی</button>
                            
                        </form>
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