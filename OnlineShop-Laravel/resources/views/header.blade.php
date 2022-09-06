	<!-- header -->
	<div style="padding: 10px" class="agileits_header">
		<div class="w3l_offers container">
			<p style="font-size: 12px; text-align: center;">خرید با تخفیف 70 درصد با استفاده از کد: "SALE70%". <a href="products">خرید</a></p>
		</div>
		<div class="clearfix"> </div>
	</div>

	<div class="logo_products">
		<div class="container-fluid">
			<div class="row justify-content-center">
				<div style="float: center;" class="col-lg-4 col-md-3 col-sm-12">
					<div>
						<p style="text-align: center;" class="phone_email"><i class="fa fa-phone" aria-hidden="true"></i>98-41234567+</p>
					</div>
				</div>
				<div class="col-lg-4 col-md-5 col-sm-12">
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
				<div class="col-lg-4 col-md-4 col-sm-12">
					<div>
						<h1 style="text-align: center;">
							<a href="index.html" style="color: #fe9126; text-align: center;">آنلاین شاپ</a>
						</h1>
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
					<div class="col-lg-6 col-md-6 col-sm-6">
						<div style="float: left; padding:10px;">
							<ul class="nav navbar-nav">
								<li class="product_list_header">
									@auth
									<a style="padding-top: 5px;" href="/cart">
										<button class="w3view-cart" type="submit" name="submit" value="">
											<i class="fa fa-cart-arrow-down" aria-hidden="true"></i>
										</button>
									</a>
									@endauth
								</li>
								<li>
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

					</div>
					<div class="col-lg-6 col-md-6 col-sm-6">
						<div style="float: right; padding:10px;">
							<ul class="nav navbar-nav">
								<li><a href="/products">محصولات</a></li>

								<li><a href="offers.html">تخفیف ها</a></li>

								<li class="dropdown">
									<a href="" class="dropdown-toggle" data-toggle="dropdown">دسته بندی ها<b class="caret"></b></a>
									<ul class="dropdown-menu multi-column columns-3">
										<div class="row">
											<div class="multi-gd-img">
												<ul class="multi-column-dropdown">
													@foreach($categories as $category)
													<li>
														<a style="text-align: right;" href="groceries.html">{{ $category->title }}</a>
													</li>
													@endforeach
												</ul>
											</div>
										</div>
									</ul>
								</li>
								<li class="active"><a href="/" class="act">خانه</a></li>
							</ul>
						</div>

					</div>
				</div>
			</nav>
		</div>
	</div>