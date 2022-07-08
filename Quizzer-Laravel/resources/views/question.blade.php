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
    </head>
    
    <body style="background-color: rgb(5, 39, 18)" onload="timer('0.5')">
        <div class="container">
            <nav style="background-color: rgb(226, 169, 13)" class="navbar navbar-expand-lg navbar-dark mb-2 mt-2 rounded">
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
                         {{$quiz_index}}
                         از
                         {{ $count_qestion }}

                         <button type="button" class="btn btn-white rounded-circle btn-xl float-end" id="time">

                         </button>                         
                    </div>

                    <div class="card-body">
                        <p>
                            {{$qestion->text}}
                        </p>
                        <form method="post" action="/check-answer">
                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                            <input type="hidden" name="question-id" value="{{ $qestion->id }}">
                            @foreach($qestion->answers as $answer)
                                <div class="form-check">
                                    <input class="form-check-input answers" type="radio" name="answer" value="{{ $answer->id }}">
                                    <label class="form-check-label mb-1" for="flexRadioDefault1">
                                        {{ $answer->text }}
                                    </label>
                                </div>
                            @endforeach
                            <button type="submit" class="btn btn-success mt-3">بعدی</button>
                        </form>
                    </div>
                    </div>
                </div>
            </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
        <script src="{{ asset('js/bootstrap.js') }}"></script>
        <script src="{{ asset('js/script.js') }}"></script>
    </body>
</html>
