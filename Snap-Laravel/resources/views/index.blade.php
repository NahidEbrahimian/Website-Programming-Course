<html lang="fa" dir="rtl">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="اسنپ">
    <meta name="keywords" content="">
    <meta name="auther" content="0">
    <link href="css/bootstrap.rtl.css" type="text/css" rel="stylesheet">
    <title>اسنپ</title>
</head>

<body class="position: fixed justify-content: center">
    <div class="container">
        <h1>اسنپ تاکسی</h1>
        <div id="ُmessage" class="alert alert-success my-3">
            لطفا مبدا را انتخاب کنید
        </div>
        <div id="googleMap" style="width:100%;height:400px;"></div>
        <!-- <p id="lat-start"></p>
        <p id="lng-start"></p>
        <p id="lat-end"></p>
        <p id="lng-end"></p> -->
    </div>


    <div class="hero_area">
    <!-- header section strats -->
    <header class="header_section">
      <div class="container-fluid">
        <nav class="navbar navbar-expand-lg custom_nav-container ">
          <a class="navbar-brand" href="index.html">
            <span>
              Urotaxi
            </span>
          </a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>

          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <div class="d-flex ml-auto flex-column flex-lg-row align-items-center">
              <ul class="navbar-nav  ">
                <li class="nav-item active">
                  <a class="nav-link" href="index.html">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="about.html"> About</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="service.html"> Services </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="news.html"> News</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="contact.html">Contact Us</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">Login</a>
                </li>
              </ul>
            </div>
          </div>
        </nav>
      </div>
    </header>
    <!-- end header section -->
    <!-- slider section -->
    <section class=" slider_section ">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-7 ">
            <div class="box">
              <div class="detail-box">
                <h4>
                  Welcome to
                </h4>
                <h1>
                  UROTAXI
                </h1>
              </div>
              <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                  <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                  <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                  <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                  <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
                  <li data-target="#carouselExampleIndicators" data-slide-to="4"></li>
                </ol>
                <div class="carousel-inner">
                  <div class="carousel-item active">

                    <div class="img-box">
                      <img src="images/slider-img.png" alt="">
                    </div>
                  </div>
                  <div class="carousel-item">
                    <div class="img-box">
                      <img src="images/slider-img.png" alt="">
                    </div>
                  </div>
                  <div class="carousel-item">
                    <div class="img-box">
                      <img src="images/slider-img.png" alt="">
                    </div>
                  </div>
                  <div class="carousel-item">
                    <div class="img-box">
                      <img src="images/slider-img.png" alt="">
                    </div>
                  </div>
                  <div class="carousel-item">
                    <div class="img-box">
                      <img src="images/slider-img.png" alt="">
                    </div>
                  </div>
                </div>
              </div>

              <div class="btn-box">
                <a href="" class="btn-1">
                  Read More
                </a>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-5 ">
            <div class="slider_form">
              <h4>
                Get A Taxi Now
              </h4>
              <form action="">
                <input type="text" placeholder="Car Type">
                <input type="text" placeholder="Pick Up Location">
                <input type="text" placeholder="Drop Location">
                <div class="btm_input">
                  <input type="text" placeholder="Your Phone Number">
                  <button>Book Now</button>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>

    </section>
    <!-- end slider section -->
  </div>


  
    <script src="js/script.js"></script>
    <script src="js/bootstrap.js"></script>
    <script src="js/notification.js"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCzWoesziBHdpAeWIGUQoaBBK4cazNwL2s&callback=myMap"></script>
</body>

</html>