@extends('admin_template')
@section('content')

<h3>افزودن محصول جدید</h3>
<div class="row justify-content-center">
    <div class="col-8">
        <form method="post" action=" {{ url('/admin/products/post') }}">
            <div class="row">
                <div style="margin-top: 20px;" class="col-md-12 col-sm-12">
                    <label class="exampleFormControlTexterea1 " class="form-label">
                        <span style="font-size: 12px; color: gray;">
                            نام محصول
                        </span>
                    </label>
                    <input name="name" type="text" class="form-control" id="inputPassword4" placeholder=" ">
                </div>
            </div>

            <div class="row mt-5">
                <div class="col-md-12 col-sm-12">
                    <label for="inputEmail4" class="exampleFormControlTexterea1 " class="form-label">
                        <span style="font-size: 12px; color: gray;">
                            توضیحات
                        </span>
                    </label>
                    <textarea name="text" rows="3" type="text" class="form-control mt-2" id="exampleFormControlTexterea1" placeholder=" "></textarea>
                </div>
            </div>

            <div class="row mt-5">
                <div class="col-md-6 col-sm-12 mt-3">
                    <label class="exampleFormControlTexterea1 " class="form-label">
                        <span style="font-size: 12px; color: gray;">
                            قیمت
                        </span>
                    </label>
                    <input name="price" type="text" class="form-control" id="inputEmail4" placeholder="">
                </div>
                <div class="col-md-6 col-sm-12 mt-3">
                    <label for="inputEmail4" class="exampleFormControlTexterea1 " class="form-label">
                        <span style="font-size: 12px; color: gray;">
                            درصد تخفیف(عدد بدون درصد و اعشار)
                        </span>
                    </label>
                    <input  name="price_off" type="text" class="form-control " id="inputEmail4" placeholder=" ">
                </div>
            </div>

            <div style="margin-top: 45px;" class="row">
                <div  class="col-md-6 col-sm-12 mt-3">
                    <label for="inputEmail4" class="exampleFormControlTexterea1 " class="form-label">
                        <span style="font-size: 12px; color: gray;">
                            تعداد
                        </span>
                    </label>
                    <input name="count" type="text" class="form-control" id="inputEmail4" placeholder=" ">
                </div>
                <div class="col-md-6 col-sm-12 mt-3">
                    <label for="inputEmail4" class="exampleFormControlTexterea1 " class="form-label">
                        <span style="font-size: 12px; color: gray;">
                            دسته بندی
                        </span>
                    </label>
                    <select class="w-100 form-select" style="height: 40px; width: 100%;" name="category_id" id="select-tag-specialty">
                        @foreach($categories as $category)
                        <option value="{{ $category->id }}">{{ $category->title }}</option>
                        @endforeach
                    </select>
                </div>
            </div>

            <label style="margin-top: 45px;"  for="inputEmail4" class="exampleFormControlTexterea1 " class="form-label">
                <span style="font-size: 12px; color: gray;">
                    افزودن تصویر
                </span>
            </label>
            <div style="margin-top: 10px;" class="input-group">
                <span class="input-group-btn">
                    <a id="lfm" data-input="thumbnail" data-preview="holder" class="btn btn-primary">
                        <i class="fa fa-picture-o"></i> انتخاب فایل
                    </a>
                </span>
                <input id="thumbnail" class="form-control" type="text" name="image">
            </div>
            <div id="holder" style="margin-top:15px;max-height:100px;">
            </div>

            <input type="hidden" name="_token" value="{{ csrf_token() }}">
            <button style="width: 100%; height: 40px; margin-top: 40px; margin-bottom: 40px;" type="submit" class="btn btn-primary">ذخیره</button>
        </form>
    </div>
</div>


<script src="https://code.jquery.com/jquery-3.6.0.js"></script>
<script src="/vendor/laravel-filemanager/js/stand-alone-button.js"></script>
<script>
    $('#lfm').filemanager('image');
</script>

@endsection