@extends('template')
@section('content')

<!-- checkout -->
<div class="checkout">
	<div class="container">
		@if($carts->count() > 0)
		<h2>سبد خرید شما: <span id="order_count">{{ $carts->count() }} کالا</span></h2>
		<div class="checkout-right">
			<table class="timetable_sub">
				<thead>
					<tr>
						<th>#</th>
						<th>کالا</th>
						<th>تعداد</th>
						<th>نام کالا</th>

						<th>قیمت</th>
						<th>حذف کالا</th>
					</tr>
				</thead>
				@foreach($carts as $cart)
				<tr id="{{ $cart->id }}" class="rem1">
					<td class="invert">{{ $cart->id }}</td>
					<td class="invert-image">
						<a href="single.html">
							<img style="width: 100px;" src="{{ url($cart->product->images->first()->image) }}" alt=" " class="img-responsive" />
						</a>
					</td>
					<td class="invert">
						<div class="quantity">
							<div class="quantity-select">
								<div class="entry value-minus" onclick='minus_count({{ $cart->id }}, "{{ csrf_token() }}")'>&nbsp;</div>
								<div class="entry value"><span id="count-{{ $cart->id }}">{{ $cart->count }}</span></div>
								<div class="entry value-plus active" onclick='add_count( {{ $cart->id }}, "{{ csrf_token() }}")'>&nbsp;</div>								
							</div>
						</div>
					</td>
					<td class="invert">{{ $cart->product->name }}</td>

					<td class="invert">{{ $cart->product['price'] -  $cart->product['price_off']* $cart->product['price'] /100 }}</td>
					<td class="invert">
						<div class="rem">
							<!-- <div class="close1" onclick='delete_order({{ $cart->id }}, "{{ csrf_token() }}")'> </div> -->
							<a class="button" href="{{ url("/delete-cart/$cart->id") }}"></a>
						</div>
					</td>
				</tr>
				@endforeach

				<script>
					$('.value-plus').on('click', function() {
						var divUpd = $(this).parent().find('.value'),
							newVal = parseInt(divUpd.text(), 10) + 1;
						divUpd.text(newVal);
					});

					$('.value-minus').on('click', function() {
						var divUpd = $(this).parent().find('.value'),
							newVal = parseInt(divUpd.text(), 10) - 1;
						if (newVal >= 1) divUpd.text(newVal);
					});
				</script>
				<!--quantity-->
			</table>
		</div>
		<div class="checkout-left">
			<div class="checkout-left-basket">
				<h4 style="background-color: #fe9126;">ادامه فرایند خرید</h4>
				<!-- <ul> -->
				<!-- @foreach($carts as $cart)
						<li>{{ $carts->count() }} کالا <i>-</i> 
                            <span>{{ $cart->product['price'] -  $cart->product['price_off']* $cart->product['price'] /100 }}</span>
                        </li>
                    @endforeach
                        <li> <i>-</i> <span>$15.00</span></li> -->
				<!-- <li>جمع سبد خرید {{ $cart->product['price'] -  $cart->product['price_off']* $cart->product['price'] /100 }} -->
				<!-- <span>$84.00</span> -->
				<!-- </li> -->
				<!-- </ul> -->
			</div>
			<!-- <div class="checkout-right-basket">
					<a href="single.html"><span class="glyphicon glyphicon-menu-left" aria-hidden="true"></span>Continue Shopping</a>
				</div>
				<div class="clearfix"> </div> -->
		</div>
		@else
			<div class="row">
				<div class="col justify-content-center text-center">
					<h3>سبد خرید شما خالی است. برای <a href="/">خرید</a> کلیک کنید.</h3>
				</div>
			</div>
		@endif
	</div>
</div>

@endsection