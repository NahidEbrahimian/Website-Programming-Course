
<?php $__env->startSection('content'); ?>

<div class="newproducts-w3agile">
	<div class="container">
		<h3>جدید ترین کالاها</h3>
		<div style="margin-top: 10px;" class="row">
			<?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
			<div style="float: right;" class=" col-lg-3 top_brand_left-1 agile_top_brands_grids">
				<div class="hover14 column">
					<div style="height: 400px;" class="agile_top_brand_left_grid">
						<?php if($product['price_off'] > 0): ?>
						<div class="agile_top_brand_left_grid_pos">
							<img src="<?php echo e(url('images/offer.png')); ?>" alt=" " class="img-responsive">
						</div>
						<?php endif; ?>
						<div class="agile_top_brand_left_grid1">
							<figure>
								<div class="snipcart-item block">
									<div class="snipcart-thumb">
										<a href="product/<?php echo e($product->id); ?>">
											<img style="width: 150px;" title=" " alt=" " src="<?php echo e(url($product->images->first()->image)); ?>">
										</a>
										<p><?php echo e($product->name); ?></p>
										<div class="stars">
											<i class="fa fa-star blue-star" aria-hidden="true"></i>
											<i class="fa fa-star blue-star" aria-hidden="true"></i>
											<i class="fa fa-star blue-star" aria-hidden="true"></i>
											<i class="fa fa-star blue-star" aria-hidden="true"></i>
											<i class="fa fa-star gray-star" aria-hidden="true"></i>
										</div>
										<?php if($product['price_off'] > 0): ?>
										<h4><?php echo e($product['price'] -  $product['price_off']* $product['price'] /100); ?> تومان<span><?php echo e($product['price']); ?> </span></h4>
										<?php else: ?>
										<h4><?php echo e($product['price']); ?> تومان</h4>
										<?php endif; ?>
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
			<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
		</div>
		<div class="clearfix"> </div>
	</div>
</div>

<div class="row justify-content-center">
	<div class="col=12">
		<?php echo e($products->links()); ?>

	</div>
</div>


<?php $__env->stopSection(); ?>
<?php echo $__env->make('template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\wamp\www\OnlineShop-Laravel\resources\views/products.blade.php ENDPATH**/ ?>