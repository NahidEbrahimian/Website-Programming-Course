@extends('admin_template')
@section('content')

<h2>افزودن محصول جدید</h2>
<form method="post" action=" {{ url('/admin/products/post') }}">
    <div class="row">
        <div style="margin-top: 10px;" class="col-md-12 col-sm-12">
            <label class="exampleFormControlTexterea1 " class="form-label">
                <span style="font-size: 12px; color: gray;">
                    نام محصول
                </span>
            </label>
            <input name="name" type="text" class="form-control" id="inputPassword4" placeholder=" ">
        </div>
    </div>

    <div class="row mt-5">
        <div style="margin-top: 18px;" class="col-md-12 col-sm-12">
            <label for="inputEmail4" class="exampleFormControlTexterea1 " class="form-label">
                <span style="font-size: 12px; color: gray;">
                    توضیحات
                </span>
            </label>
            <textarea name="text" rows="3" type="text" class="form-control mt-2" id="exampleFormControlTexterea1" placeholder=" "></textarea>
        </div>
    </div>

    <div class="row mt-5">
        <div style="margin-top: 10px;" class="col-md-6 col-sm-12 mt-3">
            <label class="exampleFormControlTexterea1 " class="form-label">
                <span style="font-size: 12px; color: gray;">
                    قیمت
                </span>
            </label>
            <input style="margin-top: 14px;" name="price" type="text" class="form-control" id="inputEmail4" placeholder="ایمیل">
        </div>
        <div style="margin-top: 10px;" class="col-md-6 col-sm-12 mt-3">
            <label for="inputEmail4" class="exampleFormControlTexterea1 " class="form-label">
                <span style="font-size: 12px; color: gray;">
                    درصد تخفیف(عدد بدون درصد و اعشار)
                </span>
            </label>
            <input name="price_off" type="text" class="form-control " id="inputEmail4" placeholder=" ">
        </div>
    </div>

    <div class="row mt-5">
        <div style="margin-top: 10px;" class="col-md-6 col-sm-12 mt-3">
            <label for="inputEmail4" class="exampleFormControlTexterea1 " class="form-label">
                <span style="font-size: 12px; color: gray;">
                    تعداد
                </span>
            </label>
            <input name="count" type="text" class="form-control" id="inputEmail4" placeholder=" ">
        </div>
        <div style="margin-top: 10px;" class="col-md-6 col-sm-12 mt-3">
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

    <label for="inputEmail4" class="exampleFormControlTexterea1 " class="form-label">
        <span style="font-size: 12px; color: gray;">
            افزودن تصویر
        </span>
    </label>
    <div style="margin-top: 10px;" class="input-group">
        <span class="input-group-btn">
            <a id="lfm" data-input="thumbnail" data-preview="holder" class="btn btn-primary">
                <i class="fa fa-picture-o"></i> Choose
            </a>
        </span>
        <input id="thumbnail" class="form-control" type="text" name="image">
    </div>
    <div id="holder" style="margin-top:15px;max-height:100px;">
    </div>

    <input type="hidden" name="_token" value="{{ csrf_token() }}">
    <button type="submit" class="btn btn-primary">ذخیره</button>
</form>

<script src="https://code.jquery.com/jquery-3.6.0.js"></script>
<script src="/vendor/laravel-filemanager/js/stand-alone-button.js"></script>
<script>
    $('#lfm').filemanager('image');
</script>

@endsection