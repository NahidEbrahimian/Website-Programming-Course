@extends('template')
@section('content')

<div class="container mb-5">
    <h1 class="my-3" style="color: #282828;">انتخاب سفر </h1>
    <div style="background-color: #282828; color: #f7c621;" id="ُmessage" class="alert mb-3">
        برای پذیرش درخواست روی قبول کردن درخواست کلیک کنید.
    </div>
    <div id="googleMap" style="width:100%; height:400px;" class="rounded mt-3"></div>

    <div style="margin-top: 40px;" class="container px-0">
        <div class="row justify-content-center mx-0">
            <div class="col-md-5 col-sm-12 slider_section3 w-100 px-0 text-white">
                <div class="slider_form2 rounded">
                    <table id="tabel" class="table table-striped">
                        <thead>
                            <tr class="text-center text-white">
                                <th scope="col">#</th>
                                <!-- <th scope="col">نام مسافر </th> -->
                                <th scope="col"> مبدا </th>
                                <th scope="col">مقصد</th>
                                <th scope="col">هزینه سفر</th>
                                <th scope="col">وضعیت درخواست</th>
                            </tr>
                        </thead>

                        <tbody>
                            @foreach($requests as $request)
                            <tr class="text-center text-white">
                                <!-- <th scope="row" class="text-white">
                                    {{ $request->id }}
                                </th> -->
                                <td class="text-white">
                                    {{ $request->id }}
                                </td>
                                <td class="text-white">
                                    ({{ $request->lat_start }}, {{ $request->lng_start }})
                                </td>
                                <td class="text-white">
                                    ({{ $request->lat_end }}, {{ $request->lng_end }})
                                </td>
                                <td class="text-white">
                                    {{ $request->price }}
                                </td>

                                <td style="text-align: center;" >
                                    <button class="text-white" style="width: 100%; height: 40px; background-color: #f7c621; border: none;" onclick='accept_request({{ $request->id }}, "{{ csrf_token() }}")'>
                                        قبول کردن درخواست
                                    </button>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection