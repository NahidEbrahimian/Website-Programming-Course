@extends('template')
@section('content')

<!-- main-slider -->
<ul id="demo1">
	<li>
		<img src="{{ url('images/11.jpg') }}" alt="" />
	</li>
	<li>
		<img src="{{ url('images/22.jpg') }}" alt="" />
	</li>

	<li>
		<img src="{{ url('images/44.jpg') }}" alt="" />
	</li>
</ul>

<!--banner-bottom-->
<!--brands-->
<div style="background-color: white;" class="brands">
	<div class="container">
		<h3>دسته بندی ها</h3>
		<div class="justify-content-center row brands-agile">
			@foreach($categories as $category)
			<a href="#">
				<div style="margin-top: 10px;" class="col-lg-2 col-md-4 col-sm-6 rounded text-center">
					<div class="card mt-3 zoom">
						<img style="height:150px;" class="card-img-top" src="{{ $category->image }}" alt="Card image cap">
						<div class="card-body text-center">
							<p>{{ $category->title }}</p>
						</div>
					</div>
				</div>
			</a>
			@endforeach
			<div class="clearfix"></div>
		</div>
	</div>
</div>

<!-- //top-brands -->
<!-- Carousel
    ================================================== -->
<div id="myCarousel" class="carousel slide" data-ride="carousel">
	<!-- Indicators -->
	<ol class="carousel-indicators">
		<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
		<li data-target="#myCarousel" data-slide-to="1"></li>
		<li data-target="#myCarousel" data-slide-to="2"></li>
	</ol>
	<div class="carousel-inner" role="listbox">
		<div class="item active">
			<a href="beverages.html"> <img class="first-slide" src="{{ url('images/b1.jpg') }}" alt="First slide"></a>
		</div>
		<div class="item">
			<a href="personalcare.html"> <img class="second-slide " src="{{ url('images/b3.jpg') }}" alt="Second slide"></a>
		</div>
		<div class="item">
			<a href="household.html"><img class="third-slide " src="{{ url('images/b1.jpg') }}" alt="Third slide"></a>
		</div>
	</div>
</div>

<div class="newproducts-w3agile">
	<div class="container">
		<h3>تخفیف ها</h3>
		<div style="margin-top: 10px;" class="row">
			<div class="agile_top_brands_grids">
				@foreach($products as $product)
				@if($product['price_off'] > 0)
				<div style="float: right;" class="col-lg-3 col-md-6 col-sm-12 top_brand_left-1 agile_top_brands_grids">
					<div class="hover14 column">
						<div class="agile_top_brand_left_grid">
							@if($product['price_off'] > 0)
							<div class="agile_top_brand_left_grid_pos">
								<img src="{{ url('images/offer.png') }}" alt=" " class="img-responsive">
							</div>
							@endif
							<div class="agile_top_brand_left_grid1">
								<figure>
									<div class="snipcart-item block">
										<div class="snipcart-thumb">
											<a href="product/{{ $product->id }}">
												<img style="width: 150px;" title=" " alt=" " src="{{ $product->images->first()->image }}">
											</a>
											<p>{{ $product->name }}</p>
											<div class="stars" dir="rtl">
												<i class="fa fa-star warning-star" aria-hidden="true"></i>
												<span style="font-size: 14px; color: gray;">{{ $product->stars->avg("score") }}</span>
											</div>
											@if($product['price_off'] > 0)
											<h4>{{$product['price'] -  $product['price_off']* $product['price'] /100 }} تومان<span>{{ $product['price'] }} </span></h4>
											@else
											<h4>{{$product['price']}} تومان</h4>
											@endif
										</div>
										<div class="snipcart-details top_brand_home_details">
											<form action="#" method="post">
												<fieldset>
													<input type="hidden" name="cmd" value="_cart">
													<input type="hidden" name="add" value="1">
													<input type="hidden" name="business" value=" ">
													<input type="hidden" name="item_name" value="Fortune Sunflower Oil">
													<input type="hidden" name="amount" value="35.99">
													<input type="hidden" name="discount_amount" value="1.00">
													<input type="hidden" name="currency_code" value="USD">
													<input type="hidden" name="return" value=" ">
													<input type="hidden" name="cancel_return" value=" ">
													<input type="submit" name="submit" value="افزودن به سبد خرید" class="button">
												</fieldset>
											</form>
										</div>
									</div>
								</figure>
							</div>
						</div>
					</div>
				</div>
			</div>
			@endif
			@endforeach
			<div class="clearfix"> </div>
		</div>
	</div>
</div>

<!-- /.carousel -->
<!--banner-bottom-->
<div class="ban-bottom-w3l">
	<div class="container-fluid">
		<div class="col-md-6 ban-bottom3">
			<div class="ban-top">
				<img src="{{ url('images/p2.jpg') }}" class="img-responsive" alt="" />

			</div>
			<div class="ban-img">
				<div class=" ban-bottom1">
					<div class="ban-top">
						<img src="{{ url('images/p3.jpg') }}" class="img-responsive" alt="" />
					</div>
				</div>
				<div class="ban-bottom2">
					<div class="ban-top">
						<img src="{{ url('images/p4.jpg') }}" class="img-responsive" alt="" />
					</div>
				</div>
				<div class="clearfix"></div>
			</div>
		</div>
		<div class="col-md-6 ban-bottom">
			<div class="ban-top">
				<img src="{{ url('images/111.jpg') }}" class="img-responsive" alt="" />
			</div>
		</div>
		<div class="clearfix"></div>
	</div>
</div>

<!--//brands-->
<!-- new -->
<div class="newproducts-w3agile">
	<div class="container">
		<h3>جدید ترین کالاها</h3>
		<div style="margin-top: 10px;" class="row">
			@foreach($products as $product)
			<div style="float: right;" class="col-lg-3 col-md- 6col-sm-12 top_brand_left-1 agile_top_brands_grids">
				<div class="hover14 column">
					<div style="height: 400px;" class="agile_top_brand_left_grid">
						@if($product['price_off'] > 0)
						<div class="agile_top_brand_left_grid_pos">
							<img src="{{ url('images/offer.png') }}" alt=" " class="img-responsive">
						</div>
						@endif
						<div class="agile_top_brand_left_grid1">
							<figure>
								<div class="snipcart-item block">
									<div class="snipcart-thumb">
										<a href="product/{{ $product->id }}">
											<img style="width: 150px;" title=" " alt=" " src="{{ url($product->images->first()->image) }}">
										</a>
										<p>{{ $product->name }}</p>
										<div class="stars" dir="rtl">
											<i class="fa fa-star warning-star" aria-hidden="true"></i>
											<span style="font-size: 14px; color: gray;">{{ $product->stars->avg("score") }}</span>
										</div>
										@if($product['price_off'] > 0)
										<h4>{{$product['price'] -  $product['price_off']* $product['price'] /100 }} تومان<span>{{ $product['price'] }} </span></h4>
										@else
										<h4>{{$product['price']}} تومان</h4>
										@endif
									</div>
									<div class="snipcart-details top_brand_home_details">
										<form action="#" method="post">
											<fieldset>
												<input type="hidden" name="cmd" value="_cart">
												<input type="hidden" name="add" value="1">
												<input type="hidden" name="business" value=" ">
												<input type="hidden" name="item_name" value="Fortune Sunflower Oil">
												<input type="hidden" name="amount" value="35.99">
												<input type="hidden" name="discount_amount" value="1.00">
												<input type="hidden" name="currency_code" value="USD">
												<input type="hidden" name="return" value=" ">
												<input type="hidden" name="cancel_return" value=" ">
												<input type="submit" name="submit" value="افزودن به سبد خرید" class="button">
											</fieldset>
										</form>
									</div>
								</div>
							</figure>
						</div>
					</div>
				</div>
			</div>
			@endforeach
		</div>
		<div class="clearfix"> </div>
	</div>
</div>

<div style="margin-top: 40px; margin-bottom: 40px;" class="container-fluid text-secondary font-text text-center">
	<div class="row mx-4 mt-4">
		<div class="col-lg-3 col-md-4 col-sm-6 d-flex flex-column justify-content-center align-self-start">
			<a href="" class="text-decoration-none text-reset">
				<img src="{{ asset('images/small-icon1.svg') }}" style="width: 25%;" class="img-fluid mt-3" alt="">
				<p style="color:darkgray; margin-top: 10px;" class="mt-3">امکان پرداخت در محل</p>
			</a>
		</div>
		<div class="col-lg-3 col-md-4 col-sm-6 d-flex flex-column justify-content-center align-self-start">
			<a href="" class="text-decoration-none text-reset">
				<img src="{{ asset('images/small-icon2.svg') }}" style="width: 25%;" class="img-fluid mt-3" alt="">
				<p style="color:darkgray; margin-top: 10px;" class="mt-3">7 روز هفته، 24 ساعته </p>
			</a>
		</div>
		<div class="col-lg-3 col-md-4 col-sm-6 d-flex flex-column justify-content-center align-self-start">
			<a href="" class="text-decoration-none text-reset">
				<img src="{{ asset('images/small-icon4.svg') }}" style="width: 25%;" class="img-fluid mt-3" alt="">
				<p style="color:darkgray; margin-top: 10px;" class="mt-3"> 7 روز ضمانت بازگشت کالا</p>
			</a>
		</div>
		<div class="col-lg-3 col-md-4 col-sm-6 d-flex flex-column justify-content-center align-self-start">
			<a href="" class="text-decoration-none text-reset">
				<img src="{{ asset('images/small-icon5.svg') }}" style="width: 25%;" class="img-fluid mt-3" alt="">
				<p style="color:darkgray; margin-top: 10px;" class="mt-3">ضمانت اصل بودن کالا</p>
			</a>
		</div>
	</div>
</div>

@endsection