<?php 
    include "database.php";

    $step = $_GET["x"];
    $choice_id = $_GET["ch_id"];
    
    $text_story = $db->query("SELECT * FROM continue_story WHERE id = $step and choice_id = $choice_id"); // یک جدولی که یک رکورد دارد
    $text_story = $text_story->fetch_assoc(); // یک رکورد
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
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    </div>
                </div>
            </nav>

            <div class="row mt-2 text-black">
                <div class="col">
                    <div class="card" style="background-color: rgba(255, 255, 255, 0.5)">
                        <div class="card-header">
                            چهارماهی
                        </div>

                        <div class="card-body">
                            <p>
                                <?php echo $text_story["text"]; ?>
                            </p>
                            <form action="process.php" method="post">
                            
                                <input type="hidden" value="<?php echo $text_story["id"]; ?>" name="story_id">
                                <input type="hidden" value="<?php echo $text_story["choice_id"]; ?>" name="choice_id">

                                <button type="submit" class="btn mt-2 text-white" style="background-color: rgba(3, 75, 9, 0.5);">بعدی</button>
                                
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