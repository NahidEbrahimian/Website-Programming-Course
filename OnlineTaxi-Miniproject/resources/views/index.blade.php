@extends('template')
<div class="hero_area">
    @section('content')
    <!-- slider section -->
    <div dir="ltr" class="container slider_section">
        <div class="row">
            <div class="col-lg-7 col-md-7">
                <div class="box">
                    <!-- <div style="text-align: left;" class="detail-box">
                        <h1>
                            تاکسی آنلاین
                        </h1>
                    </div> -->
                    <div class="carousel-item active">
                        <div class="img-box">
                            <img class="image-fluid" src="images/slider-img.png" alt="">
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-5 col-md-5 text-center mt5">
                <div class="slider_form">
                    <h4>
                        درخواست تاکسی
                    </h4>
                    <form method="post" action="{{ url('/login') }}">
                        <input name="user_name" type="text" placeholder="شماره موبایل">
                        <input name="password" type="password" placeholder="گذرواژه">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        <div style="height: 40px;" class="btm_input">
                            <button>ورود به وب اپلیکیشن</button>
                        </div>
                    </form>
                    <a class="text-warning" href="{{ url('/register') }}">عضویت</a>
                </div>
            </div>
        </div>
    </div>
    <!-- end slider section -->
    @endsection
