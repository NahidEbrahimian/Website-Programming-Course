@extends('admin_template')

@section('content')
<h2>ویرایش شهر </h2>
<form method="post" action="{{ url('admin/cities/edit)' }}">   
    <div class="mb-3">
        <label class="form-label" for="">نام</label>
        <input value="{{ $city->name }}" type="text" name="name" class="form-control">
    </div>
    <input type="hidden" name="id" value="{{ $city->id }}">
    <input type="hidden" name="_token" value="{{ csrf_token() }}">
    <button type="submit" class="btn btn-primary">ذخیره</button>
</form>

@endsection