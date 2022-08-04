@extends('template')
@section('content')

<div class="breadcrumbs">
    <div class="container">
        <ol class="breadcrumb breadcrumb1 animated wow slideInLeft" data-wow-delay=".5s">
            <li><a href="index.html"><span class="glyphicon glyphicon-home" aria-hidden="true"></span>خانه</a></li>
            <li class="active"> ثبت نام</li>
        </ol>
    </div>
</div>
<!-- register -->
<div class="register">
    <div class="container">
        <h2>فرم ثبت نام</h2>
        <div class="login-form-grids">
            <form action="{{ url('/client/registere') }}" method="post">
                <div class="row">
                    <div style="margin-top: 10px;" class="col-md-6 col-sm-12">
                        <label class="exampleFormControlTexterea1 " class="form-label">
                            <span style="font-size: 12px; color: gray;">
                                نام کاربری
                            </span>
                        </label>
                        <input name="user_name" type="text" class="form-control" id="inputPassword4" placeholder=" ">
                    </div>
                    <div style="margin-top: 10px;" class="col-md-6 col-sm-12 mt-3">
                        <label class="exampleFormControlTexterea1 " class="form-label">
                            <span style="font-size: 12px; color: gray;">
                                نام
                            </span>
                        </label>
                        <input name="name" type="text" class="form-control" id="inputEmail4" placeholder=" ">
                    </div>
                </div>

                <div class="row mt-5">
                    <div style="margin-top: 10px;" class="col-md-6 col-sm-12 mt-3">
                        <label class="exampleFormControlTexterea1 " class="form-label">
                            <span style="font-size: 12px; color: gray;">
                                ایمیل
                            </span>
                        </label>
                        <input style="margin-top: 14px;" name="email" type="email" class="form-control" id="inputEmail4" placeholder="ایمیل">
                    </div>
                    <div style="margin-top: 10px;" class="col-md-6 col-sm-12 mt-3">
                        <label for="inputEmail4" class="exampleFormControlTexterea1 " class="form-label">
                            <span style="font-size: 12px; color: gray;">
                                شماره موبایل
                            </span>
                        </label>
                        <input name="mobile-number" type="text" class="form-control " id="inputEmail4" placeholder=" شماره موبایل">
                    </div>
                </div>

                <div class="row mt-5">
                    <div style="margin-top: 10px;" class="col-md-6 col-sm-12 mt-3">
                        <label for="inputEmail4" class="exampleFormControlTexterea1 " class="form-label">
                            <span style="font-size: 12px; color: gray;">
                                تکرار گذرواژه
                            </span>
                        </label>
                        <input name="confirm-password" type="password" class="form-control" id="inputEmail4" placeholder=" ****">
                    </div>
                    <div style="margin-top: 10px;" class="col-md-6 col-sm-12 mt-3">
                        <label for="inputEmail4" class="exampleFormControlTexterea1 " class="form-label">
                            <span style="font-size: 12px; color: gray;">
                                گذرواژه
                            </span>
                        </label>
                        <input name="password" type="password" class="form-control" id="inputPassword4" placeholder=" ****">
                    </div>
                </div>

                <div class="row mt-5">
                    <div style="margin-top: 18px;" class="col-md-12 col-sm-12 mt-3">
                        <label for="inputEmail4" class="exampleFormControlTexterea1 " class="form-label">
                            <span style="font-size: 12px; color: gray;">
                                شهر محل سکونت
                            </span>
                        </label>
                        <select class="w-100 form-select" style="height: 40px; width: 100%;" name="city" id="select-tag-specialty">
                            @foreach($cities as $city)
                                <option value="{{ $city->id }}">{{ $city->name }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="row mt-5">
                    <div style="margin-top: 18px;" class="col-md-12 col-sm-12">
                        <label for="inputEmail4" class="exampleFormControlTexterea1 " class="form-label">
                            <span style="font-size: 12px; color: gray;">
                                آدرس دقیق منزل یا محل کار
                            </span>
                        </label>
                        <textarea name="address" rows="3" type="text" class="form-control mt-2" id="exampleFormControlTexterea1" placeholder="آدرس دقیق"></textarea>
                    </div>
                </div>
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <button style="width: 100%; height: 40px; margin-top: 35px; background-color: #fe9126; border: none; border-radius: 3px;" type="submit">ثبت نام</button>
            </form>
        </div>
    </div>
</div>

@endsection