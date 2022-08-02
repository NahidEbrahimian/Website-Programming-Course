@extends('admin_template')

@section('content')

<!-- @if(session("message"))
<div class="alert alert-{{ session('message_type') }}" role="alert">
    {{ session("message") }}
</div>
@endif -->


<table id="tabel" class="text-center table table-striped">
    <thead>
        <tr class="text-center">
            <th scope="col">#</th>
            <th scope="col">نام  </th>
            <th scope="col">نام کاربری  </th>
            <th scope="col">شماره موبایل  </th>
            <th scope="col">ایمیل  </th>
            <th scope="col">شهر  </th>
            <th scope="col">آدرس  </th>
            <!-- <th scope="col"> </th> -->
        </tr>
    </thead>

    <tbody>
    @foreach($users as $user)
                <tr class="text-center">
                    <th scope="row">
                        {{ $user->id }}
                    </th>
                    <td>
                    <td>{{ $user->name }}</td>
                    <td>{{ $user->user_name }}</td>
                    <td>{{ $user->mobile_number }}</td>
                    <td>{{ $user->email }}</td>
                    <td>{{ $user->city->name }}</td>
                    <td>{{ $user->address }}</td>
                    </td>
                    <td>
                        <!-- <a class="btn btn-info" href="{{ url('admin/cities/edit/$city->id') }}">ویرایش</a> -->
                        <!-- <a class="btn btn-danger" href="{{ url('admin/cities/delete/$city->id') }}">حذف</a> -->
                    </td>
                </tr>
                @endforeach
    </tbody>
</table>

@endsection