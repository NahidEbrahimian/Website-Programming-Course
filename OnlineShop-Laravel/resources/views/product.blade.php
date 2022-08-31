@extends('template')
@section('content')

<!-- //navigation -->
<!-- breadcrumbs -->
<div class="breadcrumbs">
	<div class="container">
		<ol class="breadcrumb breadcrumb1 animated wow slideInLeft" data-wow-delay=".5s">
			<li><a href="index.html"><span class="glyphicon glyphicon-home" aria-hidden="true"></span>خانه</a></li>
			<li class="active">کالاهای دیجیتال</li>
		</ol>
	</div>
</div>
<!-- //breadcrumbs -->
<div class="products">
	<div class="container te-right">
		<div class="agileinfo_single">
			<div class="row">
				<div class="col-lg-3 col-md-6 col-sm-12">
					<div class="snipcart-item block">
						<div style="margin-bottom: 45px;" class="row">
							<div style="font-size: 14px;" class="col">
								<b>فروشنده</b>
							</div>
						</div>
						<div class="row">
							<div style="font-size: 13px;" class="col">
								عملکرد:
								<span style="color: #ffc107;">خیلی خوب</span>
							</div>
						</div>
						<hr>
						<b>
							موجودی در انبار:
							<p style="margin-top: 10px;">
							<h6>{{ $product->count }}عدد</h6>
							</p>
						</b>
						<hr>
						<div class="row">
							<div class="col-lg-12">
								<p style="font-size: 14px; color:darkgrey; margin-bottom: 15px;">قیمت:</p>

								@if($product['price_off'] > 0)
								<h4>
									{{$product['price'] -  $product['price_off']* $product['price'] /100 }} تومان<span>{{ $product['price'] }} </span>
								</h4>
								@else
								<h4>{{$product['price']}} تومان</h4>
								@endif
							</div>
						</div>
						<hr>
						<div class="row">
							<div class="col-12">
								<form action="#" method="post">
									<button style="width: 100%; height: 40px; margin-top: 25px; background-color: #fe9126; border: none; border-radius: 3px;" type="submit" onclick='add_to_cart({{ $product->id }}, "{{ csrf_token() }}")'> 
									افزودن به سبد خرید
									</button>
								</form>
							</div>
						</div>
					</div>
				</div>
				<div class="col-lg-6 col-md-6 col-sm-12">
					<div class="agileinfo_single_right " style="float: right;">
						<h3>{{ $product->name }}</h3>
					</div>
					<div class="agileinfo_single_right " style="float: right;">
						<div style="margin-top: 20px; margin-right: 7px;" class="row">
							<div class="col-4">
								<div class="rating1" style=" margin-left: 10px; float: right;">
									<div class="stars" dir="rtl">
										<i class="fa fa-star warning-star" aria-hidden="true"></i>
										<span style="font-size: 14px; color: gray;">{{ $product->stars->avg("score") }} ({{ $product->stars->count()}})</span>
									</div>
								</div>
							</div>
							<div class="col-4">
								<div class="rating1" style="float: right;">
									<span style="font-size: 14px;">
										<a href="">دیدگاه ها</a>
									</span>

									<div>
										<small>نظر شما:</small>
										<div class="stars" dir="rtl" onmouseout="clear_rate()">
											<i class="fa fa-star gray-star rating" aria-hidden="true" onmouseover="draw_rating(1)" onclick='add_rating(1, {{ $product->id }}, "{{ csrf_token() }}")'></i>
											<i class="fa fa-star gray-star rating" aria-hidden="true" onmouseover="draw_rating(2)" onclick='add_rating(2, {{ $product->id }}, "{{ csrf_token() }}")'></i>
											<i class="fa fa-star gray-star rating" aria-hidden="true" onmouseover="draw_rating(3)" onclick='add_rating(3, {{ $product->id }}, "{{ csrf_token() }}")'></i>
											<i class="fa fa-star gray-star rating" aria-hidden="true" onmouseover="draw_rating(4)" onclick='add_rating(4, {{ $product->id }}, "{{ csrf_token() }}")'></i>
											<i class="fa fa-star gray-star rating" aria-hidden="true" onmouseover="draw_rating(5)" onclick='add_rating(5, {{ $product->id }}, "{{ csrf_token() }}")'></i>
										</div>
									</div>
								</div>
							</div>
						</div>

						<div class="w3agile_description">
							<h4>توضیحات :</h4>
							<p>{{ $product->description }}</p>
						</div>
					</div>
				</div>
				<div class="col-lg-3 col-md-6 col-sm-12">
					<div style="float: right;" class="agileinfo_single_left">
						<img id="example" src="{{ url($product->images->first()->image) }}" alt=" " class="img-responsive">
					</div>
				</div>
			</div>
			<div class="clearfix"> </div>
		</div>
	</div>
</div>
<hr>
<div style="margin-top: 40px; margin-bottom: 40px;" class="container-fluid text-secondary font-text text-center">
	<div class="row mx-4 mt-4">
		<div class="col-lg-3 col-md-6 col-sm-12 d-flex flex-column justify-content-center align-self-start">
			<a href="" class="text-decoration-none text-reset">
				<img src="{{ asset('images/small-icon1.svg') }}" style="width: 12%;" class="img-fluid mt-3" alt="">
				<span style="font-size: 15px; color:darkgray" class="mt-3">امکان پرداخت در محل</span>
			</a>
		</div>
		<div class="col-lg-3 col-md-6 col-sm-12 d-flex flex-column justify-content-center align-self-start">
			<a href="" class="text-decoration-none text-reset">
				<img src="{{ asset('images/small-icon2.svg') }}" style="width: 12%;" class="img-fluid mt-3" alt="">
				<span style="font-size: 15px; color:darkgray" class="mt-3">7 روز هفته، 24 ساعته </span>
			</a>
		</div>
		<div class="col-lg-3 col-md-6 col-sm-12 d-flex flex-column justify-content-center align-self-start">
			<a href="" class="text-decoration-none text-reset">
				<img src="{{ asset('images/small-icon4.svg') }}" style="width: 12%;" class="img-fluid mt-3" alt="">
				<span style="font-size: 15px; color:darkgray" class="mt-3"> 7 روز ضمانت بازگشت کالا</span>
			</a>
		</div>
		<div class="col-lg-3 col-md-6 col-sm-12 d-flex flex-column justify-content-center align-self-start">
			<a href="" class="text-decoration-none text-reset">
				<img src="{{ asset('images/small-icon5.svg') }}" style="width: 12%;" class="img-fluid mt-3" alt="">
				<span style="font-size: 15px; color:darkgray" class="mt-3">ضمانت اصل بودن کالا</span>
			</a>
		</div>
	</div>
</div>

<hr>

<!-- <div class="container">
	<a style="border-color:none;" id="patient-btn" onclick="comments()" type="submit" class="btn">دیدگاه کاربران</a>
	<a style="border-color:none; " id="doctor-btn" onclick="send_comment()" type="submit" class="btn">ثبت دیدگاه</a>
	<div id="comments" style="margin-top: 10px; display: block;">
		<ul class="list-group list-group-flush">
			@foreach($product->comments as $comment)
			<li class="list-group-item text-right px-0">
				<div class="row">
					<small class="text-muted">{{$comment->user->name}} | {{$comment->created_at}} </small>
				</div>
				<div class="d-flex my-2" dir="rtl">
					<div class=" row">
						<i class="fa fa-star warning-star rating" aria-hidden="true"></i>
						<i class="fa fa-star warning-star rating" aria-hidden="true"></i>
						<i class="fa fa-star warning-star rating" aria-hidden="true"></i>
						<i class="fa fa-star warning-star rating" aria-hidden="true"></i>
						<i class="fa fa-star warning-star rating" aria-hidden="true"></i>
						<span style="font-size: 14px; color: gray;">({{ $product->stars->first()->score }})</span>
					</div>
				</div>
				<div style="margin-top: 5px;" class="row">
					<p class="my-2">{{$comment->text}}</p>
				</div>
			</li>
			@endforeach
		</ul>
	</div> -->

	<!-- <div id="send-comment" style="margin-top: 10px; display: None;">
		<div class="stars" dir="rtl" onmouseout="clear_rate()">
			<i class="fa fa-star gray-star rating" aria-hidden="true" onmouseover="draw_rating(1)" onclick="add(1)"></i>
			<i class="fa fa-star gray-star rating" aria-hidden="true" onmouseover="draw_rating(2)" onclick="add(2)"></i>
			<i class="fa fa-star gray-star rating" aria-hidden="true" onmouseover="draw_rating(3)" onclick="add(3)"></i>
			<i class="fa fa-star gray-star rating" aria-hidden="true" onmouseover="draw_rating(4)" onclick="add(4)"></i>
			<i class="fa fa-star gray-star rating" aria-hidden="true" onmouseover="draw_rating(5)" onclick="add(5)"></i>
		</div>
	</div> -->
<!-- </div> -->

@endsection