@extends('template')
@section('content')

<div style="margin-top: 80px;" class="container pb-5">
    <div class="row justify-content-center">
        <div class="col-md-6 col-sm-12 slider_section2">
            <div class="slider_form">
                <h4>
                    فرم ثبت نام راننده
                </h4>
                <h6 class="text-white">مشخصات فردی</h6>
                <hr style="width: 25%; color: darkgrey;">
                <form method="post" action="{{ url('/driver_register') }}">
                    <div class="row">
                        <div style="margin-top: 10px;" class="col-md-6 col-sm-12">
                            <label class="exampleFormControlTexterea1 " class="form-label">
                                <span style="font-size: 14px; color: darkgrey;">
                                    نام و نام خانوادگی
                                </span>
                            </label>
                            <input name="name" type="text">
                        </div>
                        <div style="margin-top: 10px;" class="col-md-6 col-sm-12">
                            <label class="exampleFormControlTexterea1 " class="form-label">
                                <span style="font-size: 14px; color: darkgrey;">
                                    کد ملی
                                </span>
                            </label>
                            <input name="national_number" type="text">
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

                    <div class="row" style="margin-top: 15px; " >
                        <label class="exampleFormControlTexterea1 " class="form-label">
                            <span style="font-size: 14px; color: darkgrey;">
                                افزودن تصویر
                            </span>
                        </label>
                        <div style=" padding-left:0px;" class="row pl-0 mt-2">
                            <div style="height: 40px;" class="col-lg-3 col-md-6 col-sm-6">
                                <span class="input-group-btn">
                                    <a style="font-size: 13px; background-color:#f7c621;" id="lfm" data-input="thumbnail" data-preview="holder" class="btn text-white h-100">
                                        <i class="fa fa-picture-o"></i> انتخاب فایل
                                    </a>
                                </span>
                            </div>
                            <div style="padding-left: 0px;" class="col-lg-9 col-md-6 col-sm-6">
                                <input id="thumbnail" type="text" name="image">
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div style="margin-top: 10px;" class="col-md-6 col-sm-12">
                            <label class="exampleFormControlTexterea1 " class="form-label">
                                <span style="font-size: 14px; color: darkgrey;">
                                    گذرواژه
                                </span>
                            </label>
                            <input name="password" type="password">
                        </div>
                        <div style="margin-top: 10px;" class="col-md-6 col-sm-12">
                            <label class="exampleFormControlTexterea1 " class="form-label">
                                <span style="font-size: 14px; color: darkgrey;">
                                    تکرار گذرواژه
                                </span>
                            </label>
                            <input name="confirm_password" type="password">
                        </div>
                    </div>

                    <h6 class="text-white mt-5">مشخصات خودرو</h6>
                    <hr style="width: 25%; color: darkgrey;">
                    <div class="row">
                        <div style="margin-top: 10px;" class="col-md-6 col-sm-12">
                            <label class="exampleFormControlTexterea1 " class="form-label">
                                <span style="font-size: 14px; color: darkgrey;">
                                    نام خودرو
                                </span>
                            </label>
                            <input name="car_name" type="text">
                        </div>
                        <div style="margin-top: 10px;" class="col-md-6 col-sm-12">
                            <label class="exampleFormControlTexterea1 " class="form-label">
                                <span style="font-size: 14px; color: darkgrey;">
                                    شماره پلاک
                                </span>
                            </label>
                            <input name="pelak" type="text">
                        </div>
                    </div>

                    <div class="row">
                        <div class="col">
                            <label for="inputEmail4" class="exampleFormControlTexterea1 " class="form-label">
                                <span style="font-size: 12px; color: gray;">
                                    رنگ
                                </span>
                            </label>
                            <select class="w-100 form-select" style="height: 40px; width: 100%;" name="color_id" id="select-tag-specialty">
                                @foreach($colors as $color)
                                <option value="{{ $color->id }}">{{ $color->name }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div style="margin-top: 20px; " class="row">
                        <label class="exampleFormControlTexterea1 " class="form-label">
                            <span style="font-size: 14px; color: darkgrey;">
                                افزودن تصویر
                            </span>
                        </label>
                        <div style=" padding-left:0px;" class="row pl-0 mt-2">
                            <div style="height: 40px;" class="col-lg-3 col-md-6 col-sm-6">
                                <span class="input-group-btn">
                                    <a style="font-size: 13px; background-color:#f7c621;" id="lfm" data-input="thumbnail" data-preview="holder" class="btn h-100 text-white">
                                        <i class="fa fa-picture-o"></i> انتخاب فایل
                                    </a>
                                </span>
                            </div>
                            <div style="padding-left: 0px;" class="col-lg-9 col-md-6 col-sm-6">
                                <input id="thumbnail" type="text" name="car_image">
                            </div>
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