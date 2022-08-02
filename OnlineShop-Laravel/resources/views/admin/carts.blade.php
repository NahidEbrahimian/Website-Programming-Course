@extends('admin_template')

@section('content')

<h4 style="margin-top: 15px;">سفارش ها</h4>

<table style="margin-top: 10px;" id="tabel" class="text-center table table-striped">
    <thead>
        <tr class="text-center">
            <th scope="col">#</th>
            <th scope="col">نام کاربری  </th>
            <th scope="col">سفارش  </th>
            <th scope="col">تعداد  </th>
        </tr>
    </thead>

    <tbody>
    @foreach($carts as $cart)
                <tr class="text-center">
                    <th scope="row">
                        {{ $cart->id }}
                    </th>
                    <td>{{ $cart->user->user_name }}</td>
                    <td>{{ $cart->product->name }}</td>
                    <td>{{ $cart->count }}</td>
                    <td>
                        <!-- <a class="btn btn-info" href="{{ url('admin/cities/edit/$city->id') }}">ویرایش</a> -->
                        <!-- <a class="btn btn-danger" href="{{ url('admin/cities/delete/$city->id') }}">حذف</a> -->
                    </td>
                </tr>
                @endforeach
    </tbody>
</table>

@endsection