<html lang="fa" dir="rtl">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="keywords" content="">
        <meta name="auther" content="0">
        <link type="text/css" rel="stylesheet" href="{{ asset('/css/bootstrap.rtl.css') }}">
        <link href="{{ asset('/css/style.rtl.css') }}" type="text/css" rel="stylesheet">
        <title>وبسایت آزمونک</title>
        <title>
            وبسایت آزمونک
            |
             مدیریت
        </title>
    </head>
    
    <body style="background-color: rgb(5, 39, 18)">
        <div class="container">
            <nav style="background-color: rgb(226, 169, 13)" class="navbar navbar-expand-lg navbar-dark mb-2 mt-2 rounded">
                <div class="container-fluid">
                    <a class="navbar-brand" href="#">
                        آزمونک - پنل مدیریت
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
                         افزودن پرسش جدید
                    </div>
                    <div class="card-body">
                        <form action="add-question" method="post">
                             <input type="hidden" name="_token" value="{{ csrf_token() }}">
                            <div class="mb-3">
                                <label class="form-label">پرسش </label>
                                <input type="text" class="form-control" name="qestion-text">
                            </div>

                            <button type="button" class="btn btn-success btn-sm" onclick="add_Answer()">+</button>
                            <button style="width: 30px;" type="button" class="btn btn-danger btn-sm" onclick="remove_Answer()">-</button>

                            <div id="answers">
                                <div class="mb-3">
                                    <label class="form-label">پاسخ1</label>
                                    <input type="text" class="form-control" name="answer[]">
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">پاسخ2</label>
                                    <input type="text" class="form-control" name="answer[]">
                                </div>
                            </div>

                            <div class="mb-3">
                                <label class="form-label"> پاسخ درست</label>
                                <input type="number" class="form-control" name="true-answer" value="1" min="1">
                            </div>

                            <button type="submit" class="btn btn-success">ذخیره</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
        <script src="{{ asset('js/bootstrap.js') }}"></script>
        <script src="{{ asset('js/script.js') }}"></script>
       
    </body>
</html>