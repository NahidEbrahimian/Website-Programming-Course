<html lang="fa" dir="rtl">

<head>
  <meta charset="utf-8">
  <meta charset="utf8">
  <meta name="description" content="جلسه هفدهم">
  <meta name="keywords" content="">
  <meta name="auther" content="0">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="{{ asset('/css/bootstrap.rtl.css') }}" type="text/css" rel="stylesheet">
  <link href="{{ asset('/css/style.css') }}" type="text/css" rel="stylesheet">
  <link href="{{ asset('/css/all.css') }}" type="text/css" rel="stylesheet">
</head>

<body>
  <nav class="navbar navbar-expand-lg navbar-light bg-white pb-0">
    <div class="container-fluid" style="width: 100%">
      <a class="navbar-brand" href="#">
        <img src="{{ asset('images/logo.svg') }}" alt="" height="24">
      </a>

      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse mt-1" id="navbarSupportedContent">
        <form class="d-flex">
          <input class="form-control me-1 border-0 border3 font_menu" id="search" type="search"
            placeholder="جستجو در دیجی کالا ..." aria-label="Search">
          <!-- <button class="btn btn-outline-success" type="submit">Search</button> -->
        </form>
      </div>

      <!-- Button trigger modal -->
      <button type="button" class="btn btn-outline-secondary border3" id="loggin" data-bs-toggle="modal"
        data-bs-target="#staticBackdrop">
        <span><i class="far fa-user fa-lg"></i></span>
        <span class="font_menu px-1">ورود به حساب کاربری</span>
      </button>
      <button type="button" class="btn btn-outline-white border3 pr-4 ml-0" id="loggin" data-bs-toggle="modal" data-bs-target="#staticBackdrop"></button>
        <i class="far fa-shopping-cart fa-lg"></i>
      </button>

      <!-- Modal -->
      <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
        aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="staticBackdropLabel">Modal title</h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
              ...
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
              <button type="button" class="btn btn-primary">Understood</button>
            </div>
          </div>
        </div>
      </div>
    </div>
  </nav>

  <nav class="navbar navbar-expand-lg  navbar-light bg-white pt-0 pb-0">
    <div class="container-fluid">
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0 ">
          <li class="nav-item font_menu ">
            <a class="nav-link " aria-current="page" href=""> <i class="bi bi-justify"></i> دسته بندی کالاها </a>
          </li>
          <li class="nav-item font_menu">
            <a class="nav-link" href=""> <i class="bi bi-basket"></i>|</a>
          </li>
          <li class="nav-item font_menu">
            <a class="nav-link" href=""> <i class="bi bi-basket"></i> سوپر مارکت </a>
          </li>
          <li class="nav-item font_menu">
            <a class="nav-link" href=""> <i class="bi bi-percent"></i>تخفیف ها و پیشنهادها </a>
          </li>
          <li class="nav-item font_menu">
            <a class="nav-link" href="">دیجی کالای من </a>
          </li>
          <li class="nav-item font_menu">
            <a class="nav-link" href="">دیجی پلاس </a>
          </li>
          <li class="nav-item font_menu">
            <a class="nav-link" href="">دیجی کلاب </a>
          </li>
          <li class="nav-item font_menu">
            <a class="nav-link" href="#">دیجی پی </a>
          </li>
          <li class="nav-item font_menu">
            <a class="nav-link" href="">سوالی دارید؟ </a>
          </li>
          <li class="nav-item font_menu">
            <a class="nav-link" href="">فروشنده شوید </a>
          </li>
        </ul>
      </div>
      <p class="nav-item mb-0">
        <a class="nav-link text-secondary font_menu px-0" href="">لطفا شهر و استان خود را انتخاب کنید<span class="px-2"><i class="far fa-map-marker-alt fa-lg"></i></span></a>
      </p>
    </div>
  </nav>

  <div class="container-fluid body-color mt-3 pb-4">

    <div class="container-fluid px-0">
      <div class="row pt-3">
        <div class="col-lg-12" style="width: 100%;">
          <img src="{{ asset('images/ads.gif') }}" class="img-fluid border" alt="گیف تبلیغاتی">
        </div>
      </div>

      <div class="row">
        <div class="col-8 col-lg-8 col-md-8 col-sm-12  mt-3">
          <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-indicators">
              <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active"
                aria-current="true" aria-label="Slide 1"></button>
              <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
                aria-label="Slide 2"></button>
              <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"
                aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner border">
              <div class="carousel-item active">
                <img src="{{ asset('images/03.jpg') }}" class="d-block w-100 border" alt="...">
              </div>
              <div class="carousel-item">
                <img src="{{ asset('images/04.jpg') }}" class="d-block w-100 border" alt="...">
              </div>
              <div class="carousel-item">
                <img src="{{ asset('images/05.jpg') }}" class="d-block w-100 border" alt="...">
              </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"
              data-bs-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"
              data-bs-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Next</span>
            </button>
          </div>

        </div>
        <div class="col-4 col-lg-4 col-md-4 col-sm-12  mt-3">
          <div class="row border1">
            <img src="{{ asset('images/06.jpg') }}" class="d-block w-90 border1" alt="...">

          </div>
          <div class="row mt-3 border1">
            <img src="{{ asset('images/07.jpg') }}" class="d-block w-90 border1" alt="...">
          </div>
        </div>
      </div>
    </div>

    <div class="row bg-danger mt-3 pt-4 pb-3 text-secondary">
      <div class="col">
        <div class="container-fluid px-0">
          <div class="row">
            <div class="col-lg d-none d-lg-block d-xl-block d-xxl-block">
              <img src="{{ asset('images/08.png') }}" class="img-fluid" alt="پیشنهاد شگفت انگیز">
              <button type="button" class="btn btn-outline-light">مشاهد همه</button>
            </div>
            <div class="col-lg col-md-6 col-sm-12 mb-2 mt-2">
              <div class="card border2">
                <img src="{{ asset('images/09.jpg') }}" class="card-img-top border2" alt="...">
                <div class="card-body">
                  <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                    card's content.</p>
                  <p class="card-text text-center">قیمت</p>
                </div>
              </div>
            </div>
            <div class="col-lg col-sm-12 col-md-6 mb-2 mt-2">
              <div class="card border2">
                <img src="{{ asset('images/10.jpg') }}" class="card-img-top border2" alt="...">
                <div class="card-body">
                  <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                    card's content.</p>
                  <p class="card-text text-center">قیمت</p>
                </div>
              </div>
            </div>
            <div class="col-lg col-md-6 col-sm-12 mb-2 mt-2">
              <div class="card border2">
                <img src="{{ asset('images/11.jpg') }}" class="card-img-top border2" alt="...">
                <div class="card-body">
                  <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                    card's content.</p>
                  <p class="card-text text-center">قیمت</p>
                </div>
              </div>
            </div>
            <div class="col-lg col-md-6 col-sm-12 mb-2 mt-2">
              <div class="card border2">
                <img src="{{ asset('images/12.jpg') }}" class="card-img-top border2" alt="...">
                <div class="card-body">
                  <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                    card's content.</p>
                  <p class="card-text text-center">قیمت</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="container-fluid pt-4 mt-3 px-0">
      <div class="row justify-content-center">
        <div class="col-lg col-md-6 col-sm-12 mb-3">
          <img style="width: 100%; height: auto;" src="{{ asset('images/13.jpg') }}" class="img-fluid border2">
        </div>
        <div class="col-lg col-md-6 col-sm-12 border2 mb-3">
          <img style="width: 100%; height: auto;" src="{{ asset('images/14.jpg') }}" class="img-fluid border2">
        </div>
        <div class="col-lg col-md-6 col-sm-12 border2 mb-3">
          <img style="width: 100%; height: auto;" src="{{ asset('images/13.jpg') }}" class="img-fluid border2">
        </div>
        <div class="col-lg col-md-6 col-sm-12 border2 mb-3 float-center">
          <img style="width: 100%; height: auto;" src="{{ asset('images/16.jpg') }}" class="img-fluid border2">
        </div>
      </div>
    </div>

    <div class="row mt-3 pt-4 pb-3 text-secondary" id="green-bg">
      <div class="col">
        <div class="container-fluid px-0">
          <div class="row">
            <div class="col-lg d-none d-lg-block d-xl-block d-xxl-block">
              <img src="{{ asset('images/08.png') }}" class="img-fluid" alt="پیشنهاد شگفت انگیز">
              <button type="button" class="btn btn-outline-light">مشاهد همه</button>
            </div>
            <div class="col-lg col-md-6 col-sm-12 mb-2 mt-2">
              <div class="card border2">
                <img src="{{ asset('images/09.jpg') }}" class="card-img-top border2" alt="...">
                <div class="card-body">
                  <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                    card's content.</p>
                  <p class="card-text text-center">قیمت</p>
                </div>
              </div>
            </div>
            <div class="col-lg col-sm-12 col-md-6 mb-2 mt-2">
              <div class="card border2">
                <img src="{{ asset('images/10.jpg') }}" class="card-img-top border2" alt="...">
                <div class="card-body">
                  <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                    card's content.</p>
                  <p class="card-text text-center">قیمت</p>
                </div>
              </div>
            </div>
            <div class="col-lg col-md-6 col-sm-12 mb-2 mt-2">
              <div class="card border2">
                <img src="{{ asset('images/11.jpg') }}" class="card-img-top border2" alt="...">
                <div class="card-body">
                  <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                    card's content.</p>
                  <p class="card-text text-center">قیمت</p>
                </div>
              </div>
            </div>
            <div class="col-lg col-md-6 col-sm-12 mb-2 mt-2">
              <div class="card border2">
                <img src="{{ asset('images/12.jpg') }}" class="card-img-top border2" alt="...">
                <div class="card-body">
                  <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                    card's content.</p>
                  <p class="card-text text-center">قیمت</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="contaner-fluid mt-3 py-4 px-0">
      <div class="row">
        <div class="col-lg col-md-6 col-sm-12 mb-3">
          <img src="{{ asset('images/17.jpg') }}" class="img-fluid  border2">
        </div>
        <div class="col-lg col-md-6 col-sm-12">
          <img src="{{ asset('images/18.jpg') }}" class="img-fluid  border2">
        </div>
      </div>
    </div>

    <div class="container-fluid">
      <div class="row mt-0 py-0">
        <div class="col col-lg border2 bg-white ml-4 mb-3" >
          <div class="row">
            <div class="card-header bg-white border-bottom mt-2 border2 border-color mb-3">
              <h5 class="text-secondary">گوشی موبایل</h5>
              <p class="font-text text-secondary">بر اساس بازدیدهای شما</p>
            </div>
            <div class="col-lg col-md-6 col-sm-12 mb-2 mt-2">
              <div class="card border-white">
                <img src="{{ asset('images/mb4.jpg') }}" class="card-img-top border2" alt="...">
                <div class="card-body">
                  <p class="card-text text-center text-secondary">Some quick example text to build on the card title and
                    make up the bulk of the card's content.</p>
                  <p class="card-text text-center">قیمت</p>
                </div>
              </div>
            </div>
            <div class="col-lg col-md-6 col-sm-12 mb-2 mt-2">
              <div class="card   border-white">
                <img src="{{ asset('images/mb1.jpg') }}" class="card-img-top border2" alt="...">
                <div class="card-body">
                  <p class="card-text text-center text-secondary">Some quick example text to build on the card title and
                    make up the bulk of the card's content.</p>
                  <p class="card-text text-center">قیمت</p>
                </div>
              </div>
            </div>
            <div class="col-lg col-md-6 col-sm-12 mb-2 mt-2">
              <div class="card border-white">
                <img src="{{ asset('images/mb2.jpg') }}" class="card-img-top border2" alt="...">
                <div class="card-body">
                  <p class="card-text text-center text-secondary">Some quick example text to build on the card title and
                    make up the bulk of the card's content.</p>
                  <p class="card-text text-center">قیمت</p>
                </div>
              </div>
            </div>
            <div class="col-lg col-md-6 col-sm-12 mb-2 mt-2">
              <div class="card border-white">
                <img src="{{ asset('images/mb3.jpg') }}" class="card-img-top border2" alt="...">
                <div class="card-body">
                  <p class="card-text text-center text-secondary">Some quick example text to build on the card title and
                    make up the bulk of the card's content.</p>
                  <p class="card-text text-center pb-3">قیمت</p>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- <div class="col-2 border2 bg-white">
          <div class="row">
            <div class="card-header bg-white border-bottom border-color mt-2 border2  mb-2">
              <p class="font-text text-secondary text-center">پیشنهادهای لحظه‌ای برای شما</p>
            </div>
            <div class="col-lg col-md-6 col-sm-12 mb-2 mt-2 px-0 ml-0 mr-0">
              <div class="card border-white">
                <img src="img/mb4.jpg" class="card-img-top border2" alt="...">
                <div class="card-body">
                  <p class="card-text text-center text-secondary">Some quick example text to build on the card title and
                    make up the bulk of the card's content.</p>
                  <p class="card-text text-center pb-3">قیمت</p>
                </div>
              </div>
            </div>
          </div>
        </div> -->
      </div>
    </div>

    <div class="container-fluid">
      <div class="row mt-3 bg-white border2">
        <h6 class="text-center mt-4 text-secondary">بیش از ۶،۰۰۰،۰۰۰ کالا در دسته‌بندی‌های مختلف</h6>
        <div class="col-lg col-md col-sm text-center mt-3 font-text mb-3 ">
          <a href=""><span class="bi bi-tv fs-1 text-primery"></span></a>
          <p class="text-dark mt-3">کالای دیجیتال</p>
          <p class="text-primary mt-3 pt-3">+102000 کالا</p>
        </div>
        <div class="col-lg col-md col-sm text-center mt-3 font-text">
          <a href=""><span class="bi bi-wrench fs-1 text-primery"></span></a>
          <p class="text-dark mt-3">خودرو، ابزار و تجهیزات </p>
          <p class="text-primary mt-3 pt-3">+180000 کالا</p>
        </div>
        <div class="col-lg col-md col-sm text-center mt-3 font-text">
          <a href=""><span class="bi bi-file-zip fs-1 text-primery"></span></a>
          <p class="text-dark mt-3">مد و پوشاک</p>
          <p class="text-primary mt-3 pt-3">+802000 کالا</p>
        </div>
        <div class="col-lg col-md col-sm text-center mt-3 font-text">
          <a href=""><span class="bi bi-piggy-bank fs-1 text-primery"></span></a>
          <p class="text-dark mt-3">اسباب بازی، کودک و نوزاد</p>
          <p class="text-primary mt-3">+83000 کالا</p>
        </div>
        <div class="col-lg col-md col-sm text-center  mt-3 font-text">
          <a href=""><span class="bi bi-basket2 fs-1 text-primery"></span></a>
          <p class="text-dark mt-3">کالاهای مارکتی</p>
          <p class="text-primary mt-3 pt-3">+73000 کالا</p>
        </div>
        <div class="col-lg col-md col-sm text-center  mt-3 font-text">
          <a href=""><span class="bi bi-suit-heart fs-1 text-primery"></span></a>
          <p class="text-dark mt-3">زیبایی و سلامت</p>
          <p class="text-primary mt-3 pt-3">+115000 کالا</p>
        </div>
        <div class="col-lg col-md col-sm text-center  mt-3 font-text">
          <a href=""><span class="bi bi-house fs-1 text-primery"></span></a>
          <p class="text-dark mt-3">خانه و آشپزخانه</p>
          <p class="text-primary mt-3 pt-3">+609000 کالا</p>
        </div>
        <div class="col-lg col-md col-sm text-center  mt-3 font-text">
          <a href=""><span class="bi bi-pen fs-1 text-primery"></span></a>
          <p class="text-dark mt-3">کتاب، لوازم التحریر و هنر</p>
          <p class="text-primary mt-3">+302000 کالا</p>
        </div>
        <div class="col-lg col-md col-sm text-center  mt-3 font-text">
          <a href=""><span class="bi bi-yin-yang fs-1 text-primery"></span></a>
          <p class="text-dark mt-3">ورزش و سفر</p>
          <p class="text-primary mt-3 pt-3">+48000 کالا</p>
        </div>
        <div class="col-lg col-md col-sm text-center  mt-3 font-text">
          <a href=""><span class="bi bi-gem fs-1 text-primery"></span></a>
          <p class="text-dark mt-3">محصولات بومی و محلی</p>
          <p class="text-primary mt-3">+4000 کالا</p>
        </div>
      </div>
    </div>
  </div>

  <footer>
    <div class="container-fluid bg-white mt-3 pb-4">
      <div class="container mx-3">
        <div class="row ">
          <div class="col-lg col-md col-sm mt-4 px-0 mx-0 py-0">
            <img src="{{ asset('images/logo-persian.svg') }}" class="img-fluid rounded-3" alt="...">
            <p class="mt-3 font_text ">
              <span class="text-secondary">تلفن پشتیبانی:</span>
              <span class="mx-3 text-secondary"> ۶۱۹۳۰۰۰۰ - ۰۲۱</span>
              <span class="mr-3" style="color: rgb(221, 221, 221);">|</span>
              <span class="mx-3 text-secondary">۶۲۹۹۹۹۱۱ - ۰۲۱</span>
              <span class="mx-3" style="color: rgb(221, 221, 221);">|</span>
              <span class="text-secondary">هفت روز هفته، ۲۴ ساعت شبانه‌روز، پاسخگوی شما هستیم.</span>
            </p>
          </div>
        </div>
      </div>

      <div class="container-fluid text-secondary font-text text-center">
        <div class="row mx-4 mt-4">
          <div class="col-lg col-md col-sm d-flex flex-column justify-content-center align-self-center">
            <a href="" class="text-decoration-none text-reset">
                  <img src="{{ asset('images/f1.svg') }}" style="width: 20%;" class="img-fluid mt-3" alt="">
                  <p class="mt-3">امکان تحویل اکسپرس</p>
            </a>
          </div>
          <div class="col-lg col-md col-sm d-flex flex-column justify-content-center align-self-start">
            <a href="" class="text-decoration-none text-reset">
              <img src="{{ asset('images/f2.svg') }}" style="width: 20%;" class="img-fluid mt-3" alt="">
              <p class="mt-3">امکان پرداخت در محل</p>
            </a>
          </div>
          <div class="col-lg col-md col-sm d-flex flex-column justify-content-center align-self-start">
            <a href="" class="text-decoration-none text-reset">
              <img src="{{ asset('images/f3.svg') }}" style="width: 20%;" class="img-fluid mt-3" alt="">
              <p class="mt-3">7 روز هفته، 24 ساعته </p>
            </a>
          </div>
          <div class="col-lg col-md col-sm d-flex flex-column justify-content-center align-self-start">
            <a href="" class="text-decoration-none text-reset">
              <img src="{{ asset('images/f4.svg') }}" style="width: 20%;" class="img-fluid mt-3" alt="">
              <p class="mt-3"> 7 روز ضمانت بازگشت کالا</p>
            </a>
          </div>
          <div class="col-lg col-md col-sm d-flex flex-column justify-content-center align-self-start">
            <a href="" class="text-decoration-none text-reset">
              <img src="{{ asset('images/f5.svg') }}" style="width: 20%;" class="img-fluid mt-3" alt="">
              <p class="mt-3">ضمانت اصل بودن کالا</p>
            </a>
          </div>
        </div>
      </div>
      <hr>
      <div class="container-fluid text-center">
        <div class="row">
          <div class="col-lg-3 col-md-6 col-sm-12 pt-3">
            <ul class="list-group list-group-flush">
              <li class="list-group-item bg-white border-0 fw-bolder text-secondary"><a href=""
                  class="text-decoration-none text-reset">با دیجی‌کالا</a></li>
              <li class="list-group-item bg-white border-0 text-secondary"><a href=""
                  class="text-decoration-none text-reset">اتاق خبر دیجی‌کالا</a></li>
              <li class="list-group-item bg-white border-0 text-secondary"><a href=""
                  class="text-decoration-none text-reset">فروش در دیجی‌کالا</a></li>
              <li class="list-group-item bg-white border-0 text-secondary"><a href=""
                  class="text-decoration-none text-reset">فرصت‌های شغلی</a></li>
              <li class="list-group-item bg-white border-0 text-secondary"><a href=""
                  class="text-decoration-none text-reset">تماس با دیجی‌کالا</a></li>
              <li class="list-group-item bg-white border-0 text-secondary"><a href=""
                  class="text-decoration-none text-reset">درباره دیجی‌کالا</a></li>
            </ul>
          </div>

          <div class="col-lg-3 col-md-6 col-sm-12 pt-3">
            <ul class="list-group list-group-flush ">
              <li class="list-group-item bg-white border-0 fw-bolder text-secondary"><a href=""
                  class="text-decoration-none text-reset"> خدمات مشتریان</a></li>
              <li class="list-group-item bg-white border-0 text-secondary"><a href=""
                  class="text-decoration-none text-reset"> پاسخ به پرسش‌های متداول</a></li>
              <li class="list-group-item bg-white border-0 text-secondary"><a href=""
                  class="text-decoration-none text-reset"> رویه‌های بازگرداندن کالا</a></li>
              <li class="list-group-item bg-white border-0 text-secondary"><a href=""
                  class="text-decoration-none text-reset">شرایط استفاده </a></li>
              <li class="list-group-item bg-white border-0 text-secondary"><a href=""
                  class="text-decoration-none text-reset">حریم خصوصی</a></li>
              <li class="list-group-item bg-white border-0 text-secondary"><a href=""
                  class="text-decoration-none text-reset">گزارش باگ</a></li>
            </ul>
          </div>

          <div class="col-lg-3 col-md-6 col-sm-12 pt-3">
            <ul class="list-group list-group-flush ">
              <li class="list-group-item bg-white border-0 fw-bolder text-secondary"><a href=""
                  class="text-decoration-none text-reset"> راهنمای خرید از دیجی‌کالا</a></li>
              <li class="list-group-item bg-white border-0 text-secondary"><a href=""
                  class="text-decoration-none text-reset">نحوه ثبت سفارش</a></li>
              <li class="list-group-item bg-white border-0 text-secondary"><a href=""
                  class="text-decoration-none text-reset">رویه ارسال سفارش</a></li>
              <li class="list-group-item bg-white border-0 text-secondary"><a href=""
                  class="text-decoration-none text-reset"> شیوه‌های پرداخت</a></li>
            </ul>
          </div>

          <div class="col-lg-3 col-md-6 col-sm-12 pt-3">
            <ul class="list-group list-group-flush ">
              <li class="list-group-item bg-white border-0 fw-bolder text-secondary"> با ما همراه باشید</li>
              <li class="list-group-item bg-white border-0">
                <a href="#" class="text-secondary px-3" role="button" data-bs-toggle="button">
                  <span><i class="fab fa-twitter fa-lg"></i></span>
                </a>
                <a href="#" class="text-secondary px-3" role="button" data-bs-toggle="button">
                  <span class="fab fa-linkedin fa-lg"></span>
                </a>
                <a href="#" class="text-secondary  px-3" role="button" data-bs-toggle="button">
                  <span><i class="fab fa-instagram fa-lg"></i></span>
                </a>
              </li>
              <li class="list-group-item border-0 text-secondary fw-bolder mt-4 pt-4"> از جدیدترین تخفیف‌ها باخبر شوید </li>
              <li class="list-group-item bg-white border-0 " > 
                <form class="d-flex">
                    <input class="form-control me-2 border-0 text-center border3" style="background-color: rgb(240, 240, 240);" id="loggin" type="email" placeholder="آدرس ایمیل خود را وارد نمایید" aria-label="email">
                    <button class="btn btn-outline-white text-secondary border3" style="background-color: rgb(221, 221, 221);" type="submit">ثبت</button>
                </form>                                
              </li>
            </ul>
          </div>
        </div>
      </div>
      <div class="container-fluid">
        <div class="row mt-3 border2 py-3" style="background-color: rgb(41, 41, 99);">
          <div class="col-lg-6 col-md-6 col-sm-12 d-flex border2">
            <img src="{{ asset('images/f6.svg') }}" class="img-fluid  text-right" alt="">
            <p class="text-light fs-4 mx-3"  text-right >دانلود اپلیکیشن دیجی کالا</p>
          </div>
          <div class="col-lg-3 col-md-3 col-sm-12 d-flex border2 justify-content-center">
            <img src="{{ asset('images/f7.svg') }}" class="img-fluid rounded-3 mx-3 mt-1" alt="">
          </div>
          <div class="col-lg-3 col-md-3 col-sm-12 d-flex border2 justify-content-center">
            <img src="{{ asset('images/f9.svg') }}" class="img-fluid rounded-3 mt-1" alt="">
          </div>
        </div>
      </div>
    </div>
  </footer>


  </div>

  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"
    integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB"
    crossorigin="anonymous"></script>
  <script src="{{ asset('js/bootstrap.js') }}"></script>

</body>

</html>