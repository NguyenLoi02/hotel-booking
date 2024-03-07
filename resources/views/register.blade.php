<!DOCTYPE html>
<html lang="en">
<head>
	<title>HL</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ asset('fontend/login/vendor/bootstrap/css/bootstrap.min.css') }}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ asset('fontend/login/fonts/font-awesome-4.7.0/css/font-awesome.min.css') }}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ asset('fontend/login/fonts/Linearicons-Free-v1.0.0/icon-font.min.css') }}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ asset('fontend/login/vendor/animate/animate.css') }}">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="{{ asset('fontend/login/vendor/css-hamburgers/hamburgers.min.css') }}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ asset('fontend/login/vendor/animsition/css/animsition.min.css') }}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ asset('fontend/login/vendor/select2/select2.min.css') }}">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="{{ asset('fontend/login/vendor/daterangepicker/daterangepicker.css') }}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ asset('fontend/login/css/util.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('fontend/login/css/main.css') }}">

	<link rel="stylesheet" href="{{ asset('fontend/fonts/fontawesome-free-6.5.1-web/css/all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('fontend/css/style1.css') }}">

<!--===============================================================================================-->
</head>
<body style="background-color: #666666;">
	
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<div class="limiter-icon">
					<a href="{{route('home')}}"><i class="fa-solid fa-arrow-left"></i></a>
				</div>
				<form class="login100-form validate-form" action="{{ URL::to('/post-register') }}" method="POST">
					@csrf
					<span class="login100-form-title p-b-43">
						Đăng ký
					</span>
					
					
					<div class="wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
						<input class="input100" type="Email" name="Email">
						<span class="focus-input100"></span>
						<span class="label-input100">Email</span>
						@error('Email')
                        <span style="color: red">{{ $message }}</span>
                    	@enderror
					</div>
					
					
					<div class="wrap-input100 validate-input" data-validate="Ho dem is required">
						<input class="input100" type="text" name="HoDem">
						<span class="focus-input100"></span>
						<span class="label-input100">Họ đệm</span>
						@error('HoDem')
                        <span style="color: red">{{ $message }}</span>
                    	@enderror
					</div>

					<div class="wrap-input100 validate-input" data-validate="Password is required">
						<input class="input100" type="text" name="Ten">
						<span class="focus-input100"></span>
						<span class="label-input100">Tên</span>
						@error('Ten')
                        <span style="color: red">{{ $message }}</span>
                    	@enderror
					</div>
			
                    <div class="wrap-input100 validate-input" data-validate="Password is required">
						<input class="input100" type="password" name="Password">
						<span class="focus-input100"></span>
						<span class="label-input100">Mật khẩu</span>
						@error('Password')
                        <span style="color: red">{{ $message }}</span>
                    	@enderror
					</div>
                    <div class="wrap-input100 validate-input" data-validate="Password is required">
						<input class="input100" type="password" name="ComfirmPass">
						<span class="focus-input100"></span>
						<span class="label-input100">Nhập lại mật khẩu</span>
						@error('ComfirmPass')
                        <span style="color: red">{{ $message }}</span>
                    	@enderror
					</div>
					<div class="container-login100-form-btn">
						<button class="login100-form-btn" type="submit">
							Đăng ký
						</button>
					</div>
					
					<div class="text-center p-t-46 p-b-20">
						<span class="sign-up">
							Bạn đã có tài khoản ? <a href="{{route('login')}}">Đăng nhập</a>
						</span>
					</div>

					
				</form>

				<div class="login100-more" style="background-image: url('fontend/images/bg_2.jpg');">
				</div>
                
			</div>
		</div>
	</div>
	
	

	
	
<!--===============================================================================================-->
	<script src="{{ asset('fontend/login/vendor/jquery/jquery-3.2.1.min.js') }}"></script>
<!--===============================================================================================-->
	<script src="{{ asset('fontend/login/vendor/animsition/js/animsition.min.js') }}"></script>
<!--===============================================================================================-->
	<script src="{{ asset('fontend/login/vendor/bootstrap/js/popper.js') }}"></script>
	<script src="{{ asset('fontend/login/vendor/bootstrap/js/bootstrap.min.js') }}"></script>
<!--===============================================================================================-->
	<script src="{{ asset('fontend/login/vendor/select2/select2.min.js') }}"></script>
<!--===============================================================================================-->
	<script src="{{ asset('fontend/login/vendor/daterangepicker/moment.min.js') }}"></script>
	<script src="{{ asset('fontend/login/vendor/daterangepicker/daterangepicker.js') }}"></script>
<!--===============================================================================================-->
	<script src="{{ asset('fontend/login/vendor/countdowntime/countdowntime.js') }}"></script>
<!--===============================================================================================-->
	<script src="{{ asset('fontend/login/js/main.js') }}"></script>

</body>
</html>