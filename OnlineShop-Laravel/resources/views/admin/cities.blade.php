@extends('admin_template')

@section('content')

<h4 style="margin-top: 15px;">شهر ها</h4>

@if(session("message"))
<div class="alert alert-{{ session('message_type') }}" role="alert">
    {{ session("message") }}
</div>
@endif

<a style="margin-top: 10px;" class="btn btn-success" href="{{url('/admin/cities/add')}}">افزودن شهر جدید</a>
<table id="tabel" class="table table-striped">
    <thead>
        <tr class="text-center">
            <th scope="col">#</th>
            <th scope="col">نام شهر </th>
            <th scope="col"> </th>
        </tr>
    </thead>

    <tbody>
    @foreach($cities as $city)
                <tr class="text-center">
                    <th scope="row">
                        {{ $city->id }}
                    </th>
                    <td>{{ $city->name }}</td>
                    <td>
                        <a class="btn btn-info" href="{{ url("admin/cities/edit/$city->id") }}">ویرایش</a>
                        <a class="btn btn-danger" href="{{ url("/admin/cities/delete/$city->id") }}">حذف</a>
                    </td>
                </tr>
                @endforeach
    </tbody>
</table>


@endsection