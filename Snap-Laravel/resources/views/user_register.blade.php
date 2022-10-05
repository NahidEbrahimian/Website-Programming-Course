@extends('template')
@section('content')

<div style="margin-top: 80px;" class="container">
    <div class="row justify-content-center">
        <div class="col-md-5 col-sm-12 slider_section2 hero_area_register">
            <div class="slider_form">
                <h4>
                    فرم ثبت نام
                </h4>
                <form method="post" action="{{ url('/login') }}">
                <div class="row">
                    <div style="margin-top: 10px;" class="col-md-12 col-sm-12">
                        <label class="exampleFormControlTexterea1 " class="form-label">
                            <span style="font-size: 14px; color: gray;">
                                نام و نام خانوادگی
                            </span>
                        </label>
                        <input name="user_name" type="text" >
                    </div>
                </div>

                <div class="row">
                    <div style="margin-top: 10px;" class="col-md-6 col-sm-12">
                        <label class="exampleFormControlTexterea1 " class="form-label">
                            <span style="font-size: 14px; color: gray;">
                               ایمیل
                            </span>
                        </label>
                        <input name="email" type="email">
                    </div>
                    <div style="margin-top: 10px;" class="col-md-6 col-sm-12">
                        <label class="exampleFormControlTexterea1 " class="form-label">
                            <span style="font-size: 14px; color: gray;">
                               شماره موبایل
                            </span>
                        </label>
                        <input name="phone-number" type="text">
                    </div>
                </div>
                

                <div class="row">
                    <div style="margin-top: 10px;" class="col-md-6 col-sm-12">
                        <label class="exampleFormControlTexterea1 " class="form-label">
                            <span style="font-size: 14px; color: gray;">
                               گذرواژه
                            </span>
                        </label>
                        <input name="password" type="password">
                    </div>
                    <div style="margin-top: 10px;" class="col-md-6 col-sm-12">
                        <label class="exampleFormControlTexterea1 " class="form-label">
                            <span style="font-size: 14px; color: gray;">
                               تکرار گذرواژه 
                            </span>
                        </label>
                        <input name="confirm-password" type="password">
                    </div>
                </div>
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <div style="height: 40px;" class="btm_input mt-5">
                        <button type="submit">عضویت</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>


@endsection