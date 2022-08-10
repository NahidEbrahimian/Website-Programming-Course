@extends('template')
@section('content')

<div class="breadcrumbs">
	<div class="container">
		<ol class="breadcrumb breadcrumb1 animated wow slideInLeft" data-wow-delay=".5s">
			<li><a href="{{ url('/') }}"><span class="glyphicon glyphicon-home" aria-hidden="true"></span>خانه</a></li>
			<li class="active">ورود به حساب کاربری</li>
		</ol>
	</div>
</div>
<!-- login -->
<div class="login">
	<div class="container">
		<h2>ورود کاربر</h2>
		<div class="login-form-grids animated wow slideInUp" data-wow-delay=".5s">
			<form method="post" action="{{ url('/client/login') }}">
				<input style=" border-radius: 3px;" name="user_name" type="text" placeholder="آدرس ایمیل، نام کاربری و یا شماره موبایل" required=" ">
				<input style=" border-radius: 3px;" name="password" type="password" placeholder="گذرواژه" required=" ">
				<div style="margin-top: 15px;" class="form-check mb-4 mt-4 text-right">
					<input name="remember_me" type="checkbox" class="form-check-input">
					<label class="form-check-label" for="exampleCheck1" style="font-size: 14px;">مرا به خاطر بسپار</label>
				</div>
				<!-- <div class="form-check">
    <input name="remember_me" type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">Check me out</label>
  </div> -->
				<button style="width: 100%; height: 40px; margin-top: 25px; background-color: #fe9126; border: none; border-radius: 3px;" type="submit"> ورود</button>

				<div style="text-align: center;" class="forgot">
					<a href="#">فراموشی گذرواژه</a>
				</div>
				<input type="hidden" name="_token" value="{{ csrf_token() }}">
			</form>
		</div>
		<p><a href="/client/registere">ایجاد حساب کاربری</a> </p>
	</div>
</div>

@endsection