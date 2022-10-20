<html lang="fa" dir="rtl">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="اسنپ">
    <meta name="keywords" content="">
    <meta name="auther" content="0">
    <link href="{{ asset('/css/bootstrap.rtl.css') }}" type="text/css" rel="stylesheet">
    <link href="{{ asset('/css/style.css') }}" type="text/css" rel="stylesheet">
    <title>تاکسی آنلاین</title>
</head>

<body>

    @include('header')

    @yield('content')

    <script src="js/script.js"></script>
    <script src="js/bootstrap.js"></script>
    <script src="js/notification.js"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCzWoesziBHdpAeWIGUQoaBBK4cazNwL2s&callback=myMap"></script>
</body>

</html>