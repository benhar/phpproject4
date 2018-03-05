<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta http-equiv="X-UA-Compatible" content="ie=edge">
		<title>Registation | Auto e ticketing portal</title>
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
		<!-- header start here -->
		<header class="">
			<div class="container-fluid">
				<nav class="navbar navbar-expand-lg navbar-light bg-light">
					<a class="navbar-brand" href="index.html"><img src="images/logo.png" alt=""></a>
					<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
					</button>
					<div class="collapse navbar-collapse" id="navbarSupportedContent">
						<ul class="navbar-nav mr-auto">
							<!-- <li class="nav-item ">
									<a class="nav-link" href="index.html">Home <span class="sr-only">(current)</span></a>
							</li> -->
							<li class="nav-item ">
								<a class="nav-link" href="find.php">Find Auto</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="booking.php">Booking Auto</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="userlogin.php">Login</a>
							</li>
							<li class="nav-item active">
								<a class="nav-link" href="register.php">Register</a>
							</li>
							<!-- <li class="nav-item">
									<a class="nav-link" href="#">About Us</a>
							</li> -->
							<!-- <li class="nav-item">
								<a class="nav-link" href="#">Contact Us</a>
							</li> -->
						</ul>
						
						<ul class="nav justify-content-end">
							<a href="userlogin.html"><button class="btn btn-outline-success my-2 my-sm-0" type="button">Login</button></a> &nbsp;&nbsp;&nbsp;
							<a href="register.html"><button class="btn btn-outline-danger my-2 my-sm-0" type="button">Register</button></a>
						</ul>
					</div>
				</nav>
			</div>
		</header>
		
		<!-- start register area  -->
		<section class="login-area fix">
			<form action="server.php" method="post" class="container" id="needs-validation" novalidate>
				<div class="card">
					<div class="card-header "><h3>Registation  ...</h3></div>
					<div class="card-body">
						<input type="hidden" name="id" class="">
						<div class="row justify-content-md-center">
							<div class="col-md-6 mb-3">
								<label for="validationCustom01">Full Name : </label>
								<input type="text" name="fullname" class="form-control" id="validationCustom01" placeholder="Enter Your Full Name" required>
							</div>
						</div>
						<div class="row justify-content-md-center">
							<div class="col-md-6 mb-3">
								<label for="validationCustom02">Password : </label>
								<input type="password" name="password" class="form-control" id="validationCustom02" placeholder="Enter Your password"  required>
							</div>
						</div>
						<div class="row justify-content-md-center">
							<div class="col-md-6 mb-3">
								<label for="validationCustom03">Email Address : </label>
								<input type="email" name="email" class="form-control" id="validationCustom03" placeholder="Enter Your Email Address"  required>
							</div>
						</div>
						<div class="row justify-content-md-center">
							<div class="col-md-6 mb-3">
								<label for="validationCustom04">Phone Number : </label>
								<input type="text" name="phone" class="form-control" id="validationCustom04" placeholder="Enter Your Email Address"  required>
							</div>
						</div>
						<div class="row justify-content-md-center">
							<div class="col-md-6 mb-3">
								<label for="validationCustom05">Address : </label>
								<input type="text" name="address" class="form-control" id="validationCustom05" placeholder="Enter Your  Address"  required>
							</div>
						</div>
						<div class="row justify-content-md-center">
							<div class="col-md-6 mb-3">
								<label for="validationCustom06" title="date of birth">Date Of Birth : </label>
								<input type="text" name="dateofbirth" class="form-control" id="validationCustom06" placeholder="mm/dd/yyyy" required>
							</div>
						</div>
						<div class="row justify-content-md-center">
							<div class="col-md-6 mb-3">
								<label for="validationCustom07" title="gender">Select Gender : </label> <br>
								<input type="radio" name="gender" value="male" id="validationCustom07"> Male
								<input type="radio" name="gender" value="female" id=""> Female
							</div>
						</div>
						<div class="row justify-content-md-center">
							<div class="col-md-6 mb-3">
								<input type="checkbox" name="" id=""> I Accept Terms & Conditions
							</div>
						</div>
						<div class="row justify-content-center">
							<div class="col-md-6 mb-3">
								<button name="submit1" class="btn btn-success btn-block" type="submit">Register</button><br>
								<div class="bt">
									<span class="bu"> or </span><br>
								</div>
								<small>
								Already Have Account ? <br>
								<a href="login.php">Login</a>
								</small>
							</div>
						</div>
					</div>
				</div>
			</form>
		</section>
		<!-- stop register area  -->
	
		<!-- start footer top area -->
		<section class="footer-top-area fix">
			<div class="container">
				<div class="row">
					<!-- footer-about start here -->
					<div class="col-md">
						<div class="footer-about">
							<a href=""><img src="images/logo.png" alt=""></a>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quia voluptatibus reiciendis reprehenderit, aliquid enim </p>
							<div class="widget-icon">
								<a href=""><i class="fa fa-facebook"></i></a>
								<a href=""><i class="fa fa-twitter"></i></a>
								<a href=""><i class="fa fa-instagram"></i></a>
								<a href=""><i class="fa fa-youtube"></i></a>
							</div>
						</div>
					</div>
					<!-- footer-about stop here -->
					<!-- our service start here  -->
					<div class="col-md">
						<div class="footer-service">
							<h3>Our Services</h3>
							<ul>
								<li><a href="">New Ticket</a></li>
								<li><a href="">Check Ticket</a></li>
								<li><a href="">Track Auto</a></li>
								<li><a href="">Easy to Auto</a></li>
								<li><a href="">Service One</a></li>
								<li><a href="">Service Two</a></li>
							</ul>
						</div>
					</div>
					<!-- our service stop here  -->
					<!-- footer support start here -->
					<div class="col-md">
						<div class="footer-support">
							<h3>Our Support</h3>
							<ul>
								<li><a href="">Advance Search</a></li>
								<li><a href="">Gift Voucher</a></li>
								<li><a href="">Privacy Policy</a></li>
								<li><a href="">Terms & Conditions</a></li>
								<li><a href="">Helps & FAQS</a></li>
								<li><a href="">Contact Us</a></li>
							</ul>
						</div>
					</div>
					<!-- footer support stop here -->
					<!-- footer contact start here -->
					<div class="col-md">
						<div class="footer-contact">
							<h3>Contact </h3>
							<ul>
								<li>
									<i class="fa fa-map-marker"></i>
									Address : Mistripara,Rangpur
								</li>
								<li>
									<i class="fa fa-envelope"></i>
									Email : admin@auto.com
								</li>
								<li>
									<i class="fa fa-phone"></i>
									Phone : +880 1515 258 524
								</li>
							</ul>
						</div>
					</div>
					<!-- footer contact stop here -->
				</div>
			</div>
		</section>
		<!-- stop footer top area -->
		<!-- start footer area -->
		<footer class="">
			<div class="container">
				<div class="row">
					<div class="col-md">
						<div class="copyright">
							<p>Copyright &copy; 2018 | <a href="">Monzur Alam</a> All Right Reserved</p>
						</div>
					</div>
					<div class="col-md">
						<div class="payment float-right">
							<img src="images/payment.png" alt="">
						</div>
					</div>
				</div>
			</div>
		</footer>
		<!-- stop footer area -->
		<!-- Scroll top start here -->
		<script src="js/scroll.js"></script>
		<script type="text/javascript" src="js/scrolltop.js"></script>
		<!-- Scroll top stop here -->
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