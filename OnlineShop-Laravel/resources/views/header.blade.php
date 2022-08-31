	<!-- header -->
	<div style="height: 30px" class="agileits_header">
		<div class="w3l_offers container">
			<p style="font-size: 12px;">خرید با تخفیف 70 درصد با استفاده از کد: "SALE70%". <a href="products">خرید</a></p>
		</div>
		<div class="clearfix"> </div>
	</div>

	<div class="logo_products">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-lg-4 float-right">
					<div style="float: left;">
						<p class="phone_email"><i class="fa fa-phone" aria-hidden="true"></i>9841234567+</p>
					</div>
				</div>
				<div class="col-lg-4">
					<div style="width: 100%; float: center;" class="w3l_search">
						<form action="#" method="post">
							<input type="search" name="Search" placeholder="جستجوی محصولات..." required="">
							<button type="submit" class="btn btn-default search" aria-label="Left Align">
								<i class="fa fa-search" aria-hidden="true"> </i>
							</button>
							<div class="clearfix"></div>
						</form>
					</div>
				</div>
				<div class="col-lg-4">
					<div style="float: right;">
						<h1><a href="index.html" style="color: #fe9126;">آنلاین شاپ</a></h1>
					</div>
				</div>
			</div>
			<div class="clearfix"> </div>
		</div>
	</div>

	<div class="navigation-agileits">
		<div style="direction: rtl;" class="container">
			<nav class="navbar navbar-default">
				<!-- Brand and toggle get grouped for better mobile display -->
				<div class="navbar-header nav_2">
					<button type="button" class="navbar-toggle collapsed navbar-toggle1" data-toggle="collapse" data-target="#bs-megadropdown-tabs">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
				</div>
				<div class="row collapse navbar-collapse" id="bs-megadropdown-tabs">
					<div style="float: left;" class="col-6">
						<ul class="nav navbar-nav">
							<li style="margin-top: 8px;" class="product_list_header">
							<!-- <button class="w3view-cart" type="submit" name="submit" value=""><i class="fa fa-cart-arrow-down" aria-hidden="true"></i></button> -->
							<!-- <a class="w3view-cart" href="">
								<i class="fa fa-cart-arrow-down" aria-hidden="true"></i>
							</a> -->
								<!-- <form action="#" method="post" class="last">
									<input type="hidden" name="cmd" value="_cart">
									<input type="hidden" name="display" value="1"> -->
									<a style="padding-top: 0px;" href="/cart">
										<button class="w3view-cart" type="submit" name="submit" value=""><i class="fa fa-cart-arrow-down" aria-hidden="true"></i></button>
									</a>
								<!-- </form> -->
							</li>
							<li style="margin-top: 5px;">
							@auth
								<a href="/client/logout">
									<span style="color: white;" class=" font_menu px-1">خروج</span>
								</a>
							@endauth
							@guest
								<a href="/client/login">
									<span style="color: white;" class=" font_menu px-1">ورود | ثبت نام</span>
								</a>
							@endguest
							</li>
						</ul>
					</div>
					<div  style="float: right;" class="col-6">
						<ul class="nav navbar-nav">
							<li style="margin-top: 5px;"><a href="/products">محصولات</a></li>

							<li style="margin-top: 5px;"><a href="offers.html">تخفیف ها</a></li>

							<li style="margin-top: 5px;" class="dropdown">
								<a href="" class="dropdown-toggle" data-toggle="dropdown">دسته بندی ها<b class="caret"></b></a>
								<ul class="dropdown-menu multi-column columns-3">
									<div class="row">
										<div class="multi-gd-img">
											<ul class="multi-column-dropdown">
												@foreach($categories as $category)
												<li><a href="groceries.html">{{ $category->title }}</a></li>
												@endforeach
											</ul>
										</div>
									</div>
								</ul>
							</li>
							<li style="margin-top: 5px;" class="active"><a href="index.html" class="act">خانه</a></li>
						</ul>
					</div>
				</div>
			</nav>
		</div>
	</div>