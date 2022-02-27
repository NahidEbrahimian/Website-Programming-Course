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
        <div style="width: 30%" class="container">
            <div class="mt-1">
                <form  method="post" action="add_new_contact.php">
                    <div class="rounded-2 bg-dark px-4 pb-4">
                        <div class="row text-center">
                            <h3 class="mt-3 text-white" >Add New Contact</h3>
                        </div>
                        <hr style="color: white" class="px-0">
                        <label class="form-label text-white mt-3"  >First Name</label>
                        <input type="text" class="form-control m-0" name="name" >
                        <label class="form-label text-white mt-3" >Last Name</label>
                        <input type="text" class="form-control" name="family">
                        <label class="form-label text-white mt-3" >Mobile Number</label>
                        <input type="text" class="form-control" name="mobile">
                        <label class="form-label text-white mt-3" >Phone Number</label>
                        <input type="text" class="form-control" name="phone">
                        <label class="form-label text-white mt-3" >Email</label>
                        <input type="email" class="form-control" name="email">
                    </div>
                    <div>
                        <button type="submit" class="btn btn-primary text-white mt-2">Save Contact</button>
                    </div>
                </form>
            </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
        <script src="js/bootstrap.js"></script>
    </body>
</html>