<?php
include('login.php'); // Includes Login Script
if(isset($_SESSION['login_user'])){
header("location:profile.php");
}
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta http-equiv="X-UA-Compatible" content="ie=edge">
		<title>Login | Auto e ticketing portal</title>
		<!-- ================ Favicon ===================== -->
		<link rel="shortcut icon" type="image/x-icon" href="images/icon.png">
		<!-- ============ bootstrap css ================= -->
		<link rel="stylesheet" href="css/bootstrap.min.css">
		<link rel="stylesheet" href="css/bootstrap-grid.min.css">
		<!-- ============= font awesome css =============== -->
		<link rel="stylesheet" href="css/font-awesome.min.css">
		<!-- ============= owl carousel css ============== -->
		<link rel="stylesheet" href="css/owl.carousel.min.css">
		<!-- ==============custom css ==================== -->
		<link rel="stylesheet" href="css/custom.css">
		<!-- ============== main css ===================== -->
		<link rel="stylesheet" href="css/style.css">
	</head>
	<body>
		<!-- start login area  -->
		<section class="login-area fix" id="login">
			<div class="container">
				<div class="row">
					<div class="col-md">
						<form accept="" class="" id="needs-validation" novalidate method="post">
							<div class="">
								<div class="row justify-content-md-center">
									<div class="col-md-4 mb-3">
										<input type="text" class="form-control" id="form-control" name="username" placeholder="📧 example@gmail.com " required>
									</div>
								</div>
								<div class="row justify-content-md-center">
									<div class="col-md-4 mb-3">
										<input type="password" class="form-control" id="form-control" name="password" placeholder="🔒 password"  required>
									</div>
								</div>
								<div class="row justify-content-center">
									<div class="col-md-4 mb-3">
										<button class="btn btn-success mb-3" type="submit" name="submit" id="form-control">Login</button>
										<span><?php echo $error; ?></span>
									</div>
								</div>	
							</div>
						</form>
					</div>
				</div>
			</div>
		</section>
		<!-- stop login area  -->
		
		<!-- ============== jquery 2.2.4 ============ -->
		<!-- <script src="js/jquery.2.2.4.min.js"></script> -->
		<script src="js/jquery-1.12.0.min.js"></script>
		<!-- ============= popper js ================= -->
		<script src="js/vendor/popper.min.js"></script>
		<!-- ============= bootstrap js =============== -->
		<script src="js/vendor/bootstrap.min.js"></script>
		<!-- ============= owl carousel =============== -->
		<script src="js/vendor/owl.carousel.min.js"></script>
		<!-- ============= main js ==================== -->
		<script src="js/main.js"></script>
	</body>
</html>