@extends('admin_template')

@section('content')

<h4 style="margin-top: 15px;"> کاربران</h4>

<table style="margin-top: 10px;" id="tabel" class="text-center table table-striped">
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
                    <td>{{ $user->name }}</td>
                    <td>{{ $user->user_name }}</td>
                    <td>{{ $user->mobile_number }}</td>
                    <td>{{ $user->email }}</td>
                    <td>{{ $user->city->name }}</td>
                    <td>{{ $user->address }}</td>
                </tr>
                @endforeach
    </tbody>
</table>

@endsection