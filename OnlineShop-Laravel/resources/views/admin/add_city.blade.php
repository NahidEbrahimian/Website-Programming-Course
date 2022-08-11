@extends('admin_template')
@section('content')

<h3>افزودن شهر جدید</h3>
<div  class="row  justify-content-center">
    <div class="col-8 ">
    <form method="post" action=" {{ url('/admin/cities/post') }}">
    <div class="mb-3">
        <label style="margin-top: 20px;" class="form-label" for="">نام شهر</label>
        <input type="text" name="name" class="form-control">
    </div>
    <input type="hidden" name="_token" value="{{ csrf_token() }}">
    <button  style=" height: 40px; margin-top: 25px; margin-bottom: 40px;"  type="submit" class="btn btn-primary">ذخیره</button>
</form>
    </div>
</div>

@endsection