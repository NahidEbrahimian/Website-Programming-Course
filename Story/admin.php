<html lang="fa" dir="rtl">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="چهارماهی">
        <meta name="keywords" content="">
        <meta name="auther" content="0">
        <link type="text/css" rel="stylesheet" href="css/bootstrap.rtl.css">
        <link href="css/style.css" type="text/css" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css">
        <title>هزار و یک شب</title>
    </head>
    
    <body class="position: fixed justify-content: center">
        <div class="container px-5">
            <nav class="navbar navbar-expand-lg mb-2 mt-2 rounded">
                <div class="container-fluid pb-2">
                    <a class="navbar-brand  text-white" href="index.php">
                        هزار و یک  شب     
                       |
                        چهارماهی
                       |
                       پنل مدیریت 
                        
                    </a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">

                    </div>
                </div>
            </nav>

            <div class="row mt-2">
                <div class="col">
                <div class="card" style="background-color: rgba(255, 255, 255, 0.5)">
                    <div class="card-header">
                         افزودن انتخاب جدید
                    </div>
                    <div class="card-body">
                        <form action="add_selection.php" method="post">
                            <div class="mb-3">
                                <label class="form-label">انتخاب</label>
                                <input type="text" class="form-control" name="text_story">
                            </div>

                            <button type="button" class="btn btn-success btn-sm" onclick="add_selection()">
                                <i class="fa-duotone fa-plus"></i>
                            </button>
                            <button type="button" class="btn btn-danger btn-sm" onclick="remove_selection()">
                                <i class="fa-duotone fa-minus"></i>
                            </button>
                            
                            <div id="answers" class="mb-3 mt-3">
                                <div class="mb-3">
                                    <label class="form-label">ادامه داستان</label>
                                    <input type="text" class="form-control" name="answer[]">
                                </div>
                            </div>

                            <button type="submit" class="btn" style="background-color: rgba(3, 75, 9, 0.5);">ذخیره</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
        <script src="js/bootstrap.js"></script>
        <script src="js/script.js"></script>
       
    </body>
</html>