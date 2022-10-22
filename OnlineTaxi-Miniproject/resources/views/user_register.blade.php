@extends('template')
@section('content')

<div style="margin-top: 80px;" class="container">
    <div class="row justify-content-center">
        <div class="col-md-5 col-sm-12 slider_section2">
            <div class="slider_form">
                <h4>
                    فرم ثبت نام
                </h4>
                <form method="post" action="{{ url('/register') }}">
                    <div class="row">
                        <div style="margin-top: 10px;" class="col-md-12 col-sm-12">
                            <label class="exampleFormControlTexterea1 " class="form-label">
                                <span style="font-size: 14px; color:darkgrey;">
                                    نام و نام خانوادگی
                                </span>
                            </label>
                            <input name="name" type="text">
                        </div>
                    </div>

                    <div class="row">
                        <div style="margin-top: 10px;" class="col-md-6 col-sm-12">
                            <label class="exampleFormControlTexterea1 " class="form-label">
                                <span style="font-size: 14px; color: darkgrey;">
                                    ایمیل
                                </span>
                            </label>
                            <input name="email" type="email">
                        </div>
                        <div style="margin-top: 10px;" class="col-md-6 col-sm-12">
                            <label class="exampleFormControlTexterea1 " class="form-label">
                                <span style="font-size: 14px; color: darkgrey;">
                                    شماره موبایل
                                </span>
                            </label>
                            <input name="phone_number" type="text">
                        </div>
                    </div>

                    <!-- <label style="margin-top: 10px;" class="exampleFormControlTexterea1 form-label">
                        <span style="font-size: 14px; color: darkgrey;">
                            جنسیت
                        </span>
                    </label> -->
                    <!-- <div class="row border px-2 pt-1" style="height: 40px; width: 99.5%; margin-right: 2px; border-color: #ced4da;">
                        <div class="col-6 form-check">
                            <input checked name="gender" value="female" class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                            <label class="exampleFormControlTexterea1 " class="form-label">
                                <span style="font-size: 14px; color: darkgrey;">
                                    زن
                                </span>
                            </label>
                        </div>
                        <div class="col-6 form-check">
                            <input name="gender" value="male" class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2">
                            <label class="exampleFormControlTexterea1 " class="form-label">
                                <span style="font-size: 14px; color: darkgrey;">
                                    مرد
                                </span>
                            </label>
                        </div> -->
                    <!-- </div> -->
                    <div class="row">
                        <div style="margin-top: 10px;"  class="col-md-6 col-sm-12">
                            <label class="exampleFormControlTexterea1 " class="form-label">
                                <span style="font-size: 14px; color: darkgrey;">
                                    گذرواژه
                                </span>
                            </label>
                            <input name="password" type="password">
                        </div>
                        <div style="margin-top: 10px;"  class="col-md-6 col-sm-12">
                            <label class="exampleFormControlTexterea1 " class="form-label">
                                <span style="font-size: 14px; color: darkgrey;">
                                    تکرار گذرواژه
                                </span>
                            </label>
                            <input name="confirm_password" type="password">
                        </div>
                    </div>
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <div style="height: 40px;" class="btm_input mt-4">
                        <button type="submit">عضویت</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>


@endsection