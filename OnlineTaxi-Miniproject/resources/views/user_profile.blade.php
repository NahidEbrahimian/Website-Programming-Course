@extends('template')
@section('content')

<div class="container mb-5">
    <h1 class="my-3" style="color: #282828;">سفر جدید</h1>
    <div style="background-color: #282828; color: #f7c621;" id="ُmessage" class="alert mb-3">
        لطفا مبدا را انتخاب کنید
    </div>
    <div id="googleMap" style="width:100%; height:400px;" class="rounded"></div>

    <div style="margin-top: 40px;" class="container px-0">
        <div class="row justify-content-center mx-0">
            <div class="col-md-5 col-sm-12 slider_section3 w-100 px-0">
                <div class="slider_form2">
                    <form method="post" action="{{ url('/request_taxi') }}">
                        <div class="row">
                            <div style="margin-top: 10px;" class="col-md-4 col-sm-12">
                                <span style="font-size: 14px; color: white;" class="exampleFormControlTexterea1 " class="form-label">
                                    مبدا:
                                </span>
                                <!-- <input name="start" type="text"> -->
                                <input id="lat-start" name="lat_start" type="text">
                                <input id="lng-start" name="lng_start" type="text">
                            </div>

                            <div style="margin-top: 10px;" class="col-md-4 col-sm-12">
                                <span style="font-size: 14px; color: white;" class="exampleFormControlTexterea1 " class="form-label">
                                    مقصد:
                                </span>
                                <!-- <input name="end" type="text"> -->
                                <input id="lat-end" name="lat_end" type="text">
                                <input id="lng-end" name="lng_end" type="text">
                            </div>
                            <div style="margin-top: 10px;" class="col-md-4 col-sm-12">
                                <span style="font-size: 14px; color: white;" class="exampleFormControlTexterea1 " class="form-label">
                                    هزینه سفر:
                                </span>
                                <input id="price" name="price" type="text">
                            </div>
                        </div>

                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        <div style="height: 40px;" class="btm_input mt-4">
                            <button type="submit">درخواست تاکسی</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

    @endsection