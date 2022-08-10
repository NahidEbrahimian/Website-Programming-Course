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
									<button style="width: 100%; height: 40px; margin-top: 25px; background-color: #fe9126; border: none; border-radius: 3px;" type="submit"> افزودن به سبد خرید</button>
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
						<div style="margin-top: 15px; margin-right: 7px;" class="row">
							<div class="col">
								<div class="rating1" style="float: right;">
									<span style="font-size: 13px;">
										<a href="">دیدگاه ها</a>
									</span>
									<i class="fa fa-star blue-star" aria-hidden="true">
										<span style="color: black;">3.6</span>
									</i>
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
<!-- new -->
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
@endsection