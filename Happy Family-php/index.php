<?php
    include "database.php";

    $payamha = mysqli_query($connection, "SELECT * FROM messages");
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
    </head>
    
    <body style="background-color: gray">
        <div class="container">
            <nav class="navbar navbar-expand-lg navbar-dark bg-dark mb-2 mt-2 rounded">
                <div class="container-fluid">
                    <a class="navbar-brand" href="#">
                        <img src="images/logo3.png" alt="" width="30" height="24">
                        خانواده خوشحال
                    </a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav me-auto mb-2 mb-lg-0"></ul>
                        
                        <form class="d-flex">
                            <input class="form-control me-2 mt-3" type="search" placeholder="Search" aria-label="Search">
                            <button class="btn btn-outline-success mt-3" type="submit">Search</button>
                        </form>
                    </div>
                </div>
            </nav>

            <div class="row mt=5">
                <div class="col=12">
                    <ul class="list-group">
                        <?php foreach($payamha as $payam): ?>

                        <li class="list-group-item d-flex justify-content-between align-items-start">
                            <div class="ms-2 me-auto">
                            <div class="fw-bold">

                                <?php echo $payam["name"]; ?>

                            </div>

                            <?php echo $payam["text"]; ?>

                            </div>
                            <span class="badge bg-primary rounded-pill">
                                
                                <?php echo $payam["time"]; ?>
                        
                            </span>
                        </li>
                        <?php endforeach; ?>
                    </ul>
                </div>
            </div>

            <!-- Button trigger modal -->
            <button type="button" style="position: fixed; bottom: 100px; left: 100px; width: 50px; height: 50px; border-radius: 100%;" id="btn-new-message" class="btn btn-success btn-new-message" data-bs-toggle="modal" data-bs-target="#exampleModal">
            +
            </button>

            <!-- Modal -->
            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">پیام جدید</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                        <form method="post" action="new_message.php">
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">نام</label>
                                <input type="text" name="name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                            </div>
                            <div class="mb-3">
                                <label for="exampleFormControlTextarea1" class="form-label">متن پیام</label>
                                <textarea class="form-control" name="text" id="exampleFormControlTextarea1" rows="3"></textarea>
                            </div>
                            <button type="submit" class="btn btn-primary">فرستادن</button>
                        </form>
                    </div>
                    </div>
                </div>
            </div>
        </div>
    
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
        <script src="js/bootstrap.js"></script>
    </body>
</html>


<form method="post" action="new_message.php">
 
</form>