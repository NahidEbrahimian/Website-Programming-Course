@extends('admin_template')

@section('content')

@if(session("message"))
<div class="alert alert-{{ session('message_type') }}" role="alert">
    {{ session("message") }}
</div>
@endif

<h4 style="margin-top: 15px;"> محصولات</h4>
<a style="margin-top: 10px;" class="btn btn-success" href="{{url('/admin/products/add')}}">افزودن محصول جدید</a>
<table id="tabel" class="table table-striped">
    <thead>
        <tr class="text-center">
            <th  scope="col">#</th>
			<th scope="col">تصویر  </th>
            <th scope="col">نام  </th>
			<th scope="col">دسته بندی  </th>
            <th scope="col">توضیحات  </th>
            <th scope="col"> تعداد  </th>
            <th scope="col">قیمت  </th>
            <th  scope="col">تخفیف(درصد)  </th>
			<th></th>
            <th></th>
        </tr>
    </thead>

    <tbody>
        @foreach($products as $product)
                <tr class="text-center">
                    <th scope="row">
                        {{ $product->id }}
                    </th>
					<td><img src="{{ $product->images->first()->image }}" class="img-fluid" width="400px" alt=""></td>
                    <td>{{ $product->name }}</td>
					<td>{{ $product->category->title }}</td>
                    <td>{{ $product->description }}</td>
                    <td>{{ $product->count }}</td>
                    <td>{{ $product->price }}</td>
                    <td>{{ $product->price_off }}%</td>
                    <td>
                        <a class="btn btn-info" href="{{ url('admin/products/edit/$product->id') }}">ویرایش</a>
                    </td>
                    <td>
                        <a class="btn btn-danger" href="{{ url('admin/products/delete/$product->id') }}">حذف</a>
                    </td>
                </tr>
             @endforeach
    </tbody>
</table>

@endsection