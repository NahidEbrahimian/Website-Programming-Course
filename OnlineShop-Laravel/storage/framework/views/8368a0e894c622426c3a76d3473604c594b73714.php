
<?php $__env->startSection('content'); ?>

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
							<h6><?php echo e($product->count); ?>عدد</h6>
							</p>
						</b>
						<hr>
						<div class="row">
							<div class="col-lg-12">
								<p  style="font-size: 14px; color:darkgrey; margin-bottom: 15px;">قیمت:</p>

								<?php if($product['price_off'] > 0): ?>
								<h4>
									<?php echo e($product['price'] -  $product['price_off']* $product['price'] /100); ?> تومان<span><?php echo e($product['price']); ?> </span>
								</h4>
								<?php else: ?>
								<h4><?php echo e($product['price']); ?> تومان</h4>
								<?php endif; ?>
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
						<h3><?php echo e($product->name); ?></h3>
					</div>
					<div class="agileinfo_single_right " style="float: right;">
						<div style="margin-top: 15px; margin-right: 7px;" class="row">
							<div class="col">
								<div class="rating1" style="float: right;">
								<div>
								<span style="font-size: 13px;">
										<a href="">دیدگاه ها</a>
									</span>
									<i class="fa fa-star warning-star" aria-hidden="true">
										<span style="color: black;">3.6</span>
									</i>
								</div>
									<div>
									<small>نظر شما:</small>
									<div class="stars" dir="rtl"  onmouseout="clear_rate()"> 
										<i class="fa fa-star gray-star rating" aria-hidden="true" onmouseover="draw_rating(1)" onclick="add(1)"></i>
										<i class="fa fa-star gray-star rating" aria-hidden="true" onmouseover="draw_rating(2)" onclick="add(2)"></i>
										<i class="fa fa-star gray-star rating" aria-hidden="true" onmouseover="draw_rating(3)" onclick="add(3)"></i>
										<i class="fa fa-star gray-star rating" aria-hidden="true" onmouseover="draw_rating(4)" onclick="add(4)"></i>
										<i class="fa fa-star gray-star rating" aria-hidden="true" onmouseover="draw_rating(5)" onclick="add(5)"></i>
									</div>
									</div>
								</div>
							</div>
						</div>

						<div class="w3agile_description">
							<h4>توضیحات :</h4>
							<p><?php echo e($product->description); ?></p>
						</div>
					</div>
				</div>
				<div class="col-lg-3 col-md-6 col-sm-12">
					<div style="float: right;" class="agileinfo_single_left">
						<img id="example" src="<?php echo e(url($product->images->first()->image)); ?>" alt=" " class="img-responsive">
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
				<img src="<?php echo e(asset('images/small-icon1.svg')); ?>" style="width: 12%;" class="img-fluid mt-3" alt="">
				<span style="font-size: 15px; color:darkgray" class="mt-3">امکان پرداخت در محل</span>
			</a>
		</div>
		<div class="col-lg-3 col-md-6 col-sm-12 d-flex flex-column justify-content-center align-self-start">
			<a href="" class="text-decoration-none text-reset">
				<img src="<?php echo e(asset('images/small-icon2.svg')); ?>" style="width: 12%;" class="img-fluid mt-3" alt="">
				<span style="font-size: 15px; color:darkgray" class="mt-3">7 روز هفته، 24 ساعته </span>
			</a>
		</div>
		<div class="col-lg-3 col-md-6 col-sm-12 d-flex flex-column justify-content-center align-self-start">
			<a href="" class="text-decoration-none text-reset">
				<img src="<?php echo e(asset('images/small-icon4.svg')); ?>" style="width: 12%;" class="img-fluid mt-3" alt="">
				<span style="font-size: 15px; color:darkgray" class="mt-3"> 7 روز ضمانت بازگشت کالا</span>
			</a>
		</div>
		<div class="col-lg-3 col-md-6 col-sm-12 d-flex flex-column justify-content-center align-self-start">
			<a href="" class="text-decoration-none text-reset">
				<img src="<?php echo e(asset('images/small-icon5.svg')); ?>" style="width: 12%;" class="img-fluid mt-3" alt="">
				<span style="font-size: 15px; color:darkgray" class="mt-3">ضمانت اصل بودن کالا</span>
			</a>
		</div>
	</div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\wamp\www\OnlineShop-Laravel\resources\views/product.blade.php ENDPATH**/ ?>