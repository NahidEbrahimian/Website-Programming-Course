@extends('template')
@section('content')

<!-- checkout -->
	<div class="checkout">
		<div class="container">
			<h2>سبد خرید شما: <span>{{ $carts->count() }} کالا</span></h2>
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
					<tr class="rem1">
						<td class="invert">{{ $cart->id }}</td>
						<td class="invert-image">
                            <a href="single.html">
                                <img style="width: 100px;" src="{{ url($cart->product->images->first()->image) }}" alt=" " class="img-responsive" />
                            </a>
                        </td>
						<td class="invert">
							 <div class="quantity"> 
								<div class="quantity-select">                           
									<div class="entry value-minus">&nbsp;</div>
									<div class="entry value"><span>{{ $cart->count }}</span></div>
									<div class="entry value-plus active">&nbsp;</div>
								</div>
							</div>
						</td>
						<td class="invert">{{ $cart->product->name }}</td>
						
						<td class="invert">{{ $cart->product['price'] -  $cart->product['price_off']* $cart->product['price'] /100 }}</td>
						<td class="invert">
							<div class="rem">
								<div class="close1"> </div>
							</div>
							<script>$(document).ready(function(c) {
								$('.close1').on('click', function(c){
									$('.rem1').fadeOut('slow', function(c){
										$('.rem1').remove();
									});
									});	  
								});
						   </script>
						</td>
					</tr>
                    @endforeach
					<!-- <tr class="rem2">
						<td class="invert">2</td>
						<td class="invert-image"><a href="single.html"><img src="images/2.png" alt=" " class="img-responsive" /></a></td>
						<td class="invert">
							 <div class="quantity"> 
								<div class="quantity-select">                           
									<div class="entry value-minus">&nbsp;</div>
									<div class="entry value"><span>1</span></div>
									<div class="entry value-plus active">&nbsp;</div>
								</div>
							</div>
						</td>
						<td class="invert">Fortune oil</td>
					
						<td class="invert">$250.00</td>
						<td class="invert">
							<div class="rem">
								<div class="close2"> </div>
							</div>
							<script>$(document).ready(function(c) {
								$('.close2').on('click', function(c){
									$('.rem2').fadeOut('slow', function(c){
										$('.rem2').remove();
									});
									});	  
								});
						   </script>
						</td>
					</tr>
					<tr class="rem3">
						<td class="invert">3</td>
						<td class="invert-image"><a href="single.html"><img src="images/3.png" alt=" " class="img-responsive" /></a></td>
						<td class="invert">
							 <div class="quantity"> 
								<div class="quantity-select">                           
									<div class="entry value-minus">&nbsp;</div>
									<div class="entry value"><span>1</span></div>
									<div class="entry value-plus active">&nbsp;</div>
								</div>
							</div>
						</td>
						<td class="invert">Aashirvaad atta</td>
						
						<td class="invert">$15.00</td>
						<td class="invert">
							<div class="rem">
								<div class="close3"> </div>
							</div>
							<script>$(document).ready(function(c) {
								$('.close3').on('click', function(c){
									$('.rem3').fadeOut('slow', function(c){
										$('.rem3').remove();
									});
									});	  
								});
						   </script>
						</td>
					</tr> -->
								<!--quantity-->
									<script>
									$('.value-plus').on('click', function(){
										var divUpd = $(this).parent().find('.value'), newVal = parseInt(divUpd.text(), 10)+1;
										divUpd.text(newVal);
									});

									$('.value-minus').on('click', function(){
										var divUpd = $(this).parent().find('.value'), newVal = parseInt(divUpd.text(), 10)-1;
										if(newVal>=1) divUpd.text(newVal);
									});
									</script>
								<!--quantity-->
				</table>
			</div>
			<div class="checkout-left">	
				<div class="checkout-left-basket">
					<h4 style="background-color: #fe9126;" >ادامه فرایند خرید</h4>
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
		</div>
	</div>

@endsection