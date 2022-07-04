<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="جلسه چهل یکم">
    <meta name="keywords" content="">
    <meta name="auther" content="0">
    <link href="{{ asset('/css/bootstrap.rtl.css') }}" type="text/css" rel="stylesheet">
    <link href="{{ asset('/css/style.css') }}" type="text/css" rel="stylesheet">
</head>

<body style="background-color: #f1f2f6; font-family: Cursive;">
    <div class="container mt-3">
        <div class="row justify-content-center">
            <div class="col-lg-9 col-md-12 col-sm-12">
                <nav class="navbar navbar-expand-lg navbar-light mb-2 ">
                    <a class="navbar-brand" href="#">
                        <i class="far fa-address-book"></i>Phonebook
                    </a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                            <li class="nav-item">
                                <a class="nav-link active" aria-current="page" href="/">view contacts</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link active" aria-current="page" href="add-contact" target="_blank">add contact</a>
                            </li>
                        </ul>
                    </div>
                </nav>
                <hr class="text-dark mb-4">
                <div class="table-responsive">
                    <table class="table table-bordered text-center table-striped mt-2">
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
                            @foreach($contacts as $contact)
                            <tr>
                                <td>{{ $contact->first_name; }}</td>
                                <td>{{ $contact->last_name; }}</td>
                                <td>{{ $contact->mobile_number; }}</td>
                                <td>{{ $contact->phone_number; }}</td>
                                <td>{{ $contact->email; }}</td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>

                <form action="delete-contact" method="post">
                    <input type="hidden" name="_token" value="{{ csrf_token()}}">
                    <button type="submit" style="position: absolute;" class="mt-1 position-absolute btn btn-danger rounded-0" data-bs-toggle="modal" data-bs-target="#exampleModal">
                        Delete
                    </button>
                </form>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="{{ asset('js/bootstrap.js') }}"></script>
</body>

</html>