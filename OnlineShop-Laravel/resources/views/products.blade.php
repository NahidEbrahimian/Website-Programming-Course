@extends('template')
@section('content')

<div class="newproducts-w3agile">
	<div class="container">
		<h3>جدید ترین کالاها</h3>
		<div style="margin-top: 10px;" class="row">
			@foreach($products as $product)
			<div style="float: right;" class=" col-lg-3 top_brand_left-1 agile_top_brands_grids">
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
										<div class="stars">
											<i class="fa fa-star blue-star" aria-hidden="true"></i>
											<i class="fa fa-star blue-star" aria-hidden="true"></i>
											<i class="fa fa-star blue-star" aria-hidden="true"></i>
											<i class="fa fa-star blue-star" aria-hidden="true"></i>
											<i class="fa fa-star gray-star" aria-hidden="true"></i>
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

<div class="row justify-content-center">
	<div class="col=12">
		{{ $products->links() }}
	</div>
</div>


@endsection