<?php
    include "database.php";

    $contacts = mysqli_query($connection, "SELECT * FROM contacts");
?>

<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="جلسه بیست چهارم">
        <meta name="keywords" content="">
        <meta name="auther" content="0">
        <link type="text/css" rel="stylesheet" href="css/bootstrap.css">
        <link href="css/style.css" type="text/css" rel="stylesheet">
    </head>
    
    <body>
        <div class="container mt-3">
            <nav class="navbar navbar-expand-lg navbar-dark bg-dark mb-2 ">
                <div class="container-fluid">
                    <a class="navbar-brand" href="#">
                         Phonebook
                    </a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                            <li class="nav-item">
                                <a class="nav-link active" aria-current="page" href="index.php">view contacts</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link active" aria-current="page" href="add_contact.php" target="_blank">add contact</a>
                            </li>
                        </ul>
                        <form class="d-flex mt-3">
                            <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                            <button class="btn btn-outline-success" type="submit">Search</button>
                        </form>
                    </div>
                </div>
            </nav>

            <div class="table-responsive">
                <table class="table table-bordered text-center table-dark table-striped mt-2">
                    <thead>
                        <tr>
                            <th>First Name</th>
                            <th>Last Name</th>
                            <th>Mobile Number</th>
                            <th>Phone Number</th>
                            <th>Email</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach($contacts as $contact): ?>
                            <tr>
                                <td><?php echo $contact["first_name"]; ?></td>
                                <td><?php echo $contact["last_name"]; ?></td>
                                <td><?php echo $contact["mobile_number"]; ?></td>
                                <td><?php echo $contact["phone_number"]; ?></td>
                                <td><?php echo $contact["email"]; ?></td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
            
            <form action="delet.php" method="post">
                <button type="button" style="position: absolute;" class="mt-1 position-absolute btn btn-danger rounded-0" data-bs-toggle="modal" data-bs-target="#exampleModal">
                    Delete
                </button>
            </form>

        </div>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
        <script src="js/bootstrap.js"></script>
    </body>
</html>