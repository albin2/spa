@extends('layouts.app')

@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Login </title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="ureg/images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="ureg/vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="ureg/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="ureg/fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="ureg/fonts/iconic/css/material-design-iconic-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="ureg/vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="ureg/vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="ureg/vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="ureg/vendor/select2/select2.min.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="ureg/vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="ureg/css/util.css">
	<link rel="stylesheet" type="text/css" href="ureg/css/main.css">
<!--===============================================================================================-->
</head>
<body style="background-color: #999999;">
	
	<div class="limiter">
		<div class="container-login100">
			<div class="login100-more" style="background-image: url('ureg/images/bg-01.jpg');"></div>

			<div class="wrap-login100 p-l-50 p-r-50 p-t-72 p-b-50">
				<form class="login100-form validate-form" method="POST" enctype="multipart/form-data" action="{{ route('registerTo') }}">
                @csrf
					<span class="login100-form-title p-b-59">
						USER DETAILS
					</span>

					<div class="wrap-input100 validate-input" data-validate = "first name is required">
						<span class="label-input100">First Name</span>
						<input class="input100" type="text" name="fname" >
						<span class="focus-input100"></span>
					</div>
                    <div class="wrap-input100 validate-input" data-validate = "first name is required">
						<span class="label-input100">Last Name</span>
						<input class="input100" type="text" name="lname" >
						<span class="focus-input100"></span>
					</div>

					<div class="wrap-input100 validate-input" data-validate = "Date is required">
						<span class="label-input100">DOB</span>
						<input class="input100" type="date" name="DOB" >
						<span class="focus-input100"></span>
					</div>

					<div class="wrap-input100 validate-input" data-validate = " please enter the city">
						<span class="label-input100">City</span>
						<input class="input100" type="text" name="city" >
						<span class="focus-input100"></span>
					</div>

					<div class="wrap-input100 validate-input" data-validate = "please select the gender">
						<span class="label-input100">Gender</span>
						<select name="gender">
                        <option value="volvo">male</option>
                        <option value="saab">female</option>
                        </select>
						<span class="focus-input100"></span>
					</div>
                    <div class="wrap-input100 validate-input" data-validate = " please enter the contact number">
						<span class="label-input100">Contact number</span>
						<input class="input100" type="tel" name="contact" >
						<span class="focus-input100"></span>
					</div>
                    <div class="wrap-input100 validate-input" data-validate = " please select image">
						<span class="label-input100">Image</span>
						<input class="input100" type="file" name="proimg" placeholder="Image " accept=".jpg,.jpeg,.png">
						<span class="focus-input100"></span>
					</div>

					<div class="container-login100-form-btn">
						<div class="wrap-login100-form-btn">
							<div class="login100-form-bgbtn"></div>
							<button class="login100-form-btn" type="submit">
								SUBMIT
							</button>
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>
	
<!--===============================================================================================-->
	<script src="ureg/vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="ureg/vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="ureg/vendor/bootstrap/js/popper.js"></script>
	<script src="ureg/vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="ureg/vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="ureg/vendor/daterangepicker/moment.min.js"></script>
	<script src="ureg/vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="ureg/vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script src="ureg/js/main.js"></script>

</body>
</html>
@endsection