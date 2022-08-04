@extends('admin_template')

@section('content')
<h2>افزودن شهر جدید</h2>
<form method="post" action=" {{ url('/admin/cities/post') }}">
    <div class="mb-3">
        <label class="form-label" for="">نام</label>
        <input type="text" name="name" class="form-control">
    </div>
    <input type="hidden" name="_token" value="{{ csrf_token() }}">
    <button type="submit" class="btn btn-primary">ذخیره</button>
</form>

@endsection