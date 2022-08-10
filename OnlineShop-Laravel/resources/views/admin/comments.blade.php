@extends('admin_template')

@section('content')

<h4 style="margin-top: 15px;">کامنت ها</h4>

@if(session("message"))
<div class="alert alert-{{ session('message_type') }}" role="alert">
    {{ session("message") }}
</div>
@endif


<table style="margin-top: 10px;" id="tabel" class="text-center table table-striped">
    <thead>
        <tr class="text-center">
            <th scope="col">#</th>
            <th scope="col">نام کاربری  </th>
            <th scope="col">کامنت  </th>
            <th scope="col">محصول  </th>
            <!-- <th scope="col"> </th> -->
        </tr>
    </thead>

    <tbody>
    @foreach($comments as $comment)
                <tr class="text-center">
                    <th scope="row">
                        {{ $comment->id }}
                    </th>
                    <td>{{ $comment->user->user_name }}</td>
                    <td>{{ $comment->text }}</td>
                    <td>{{ $comment->product->name }}</td>
                    <td>
                        <a class="btn btn-danger" href="{{ url("admin/comments/delete/$comment->id") }}">حذف</a>
                    </td>
                </tr>
                @endforeach
    </tbody>
</table>

@endsection