<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta http-equiv="X-UA-Compatible" content="ie=edge">
		<title>Find Auto | Auto e ticketing portal</title>
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
					<a class="navbar-brand" href="index.php"><img src="images/logo.png" alt=""></a>
					<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
					</button>
					<div class="collapse navbar-collapse" id="navbarSupportedContent">
						<ul class="navbar-nav mr-auto">
							<!-- <li class="nav-item ">
									<a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
							</li> -->
							<li class="nav-item active">
								<a class="nav-link" href="find.php">Find Auto</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="booking.php">Booking Auto</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="userlogin.php">Login</a>
							</li>
							<li class="nav-item">
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
							<a href="userlogin.php"><button class="btn btn-outline-success my-2 my-sm-0" type="button">Login</button></a> &nbsp;&nbsp;&nbsp;
							<a href="register.php"><button class="btn btn-outline-danger my-2 my-sm-0" type="button">Register</button></a>
						</ul>
					</div>
				</nav>
			</div>
		</header>
		
		<!-- start login area  -->
		<section class="login-area fix">
			<form action="server1.php" method="post" class="container" id="needs-validation" novalidate>
				<div class="card">
					<div class="card-header "><h3>Find Auto / Ricshaw ...</h3></div>
					<div class="card-body">
						<div class="row justify-content-md-center">
							<div class="col-md-6 mb-3">
								<label for="validationCustom01">From : </label>
								<input type="text" name="start" class="form-control" id="validationCustom01" placeholder="" required>
							</div>
						</div>
						<div class="row justify-content-md-center">
							<div class="col-md-6 mb-3">
								<label for="validationCustom02">To : </label>
								<input type="text" name="stop" class="form-control" id="validationCustom02" placeholder=""  required>
							</div>
						</div>
						<div class="row justify-content-md-center">
							<div class="col-md-6 mb-3">
								<div class="form-group">
									<label for="exampleFormControlSelect1">Auto / Ricshaw</label>
									<select  name="select1"class="form-control" id="exampleFormControlSelect1">
										<option> </option>
										<option>Auto</option>
										<option>Ricshaw</option>
									</select>
								</div>
							</div>
						</div>
						<div class="row justify-content-md-center">
							<div class="col-md-6 mb-3">
								<div class="form-group">
									<label for="exampleFormControlSelect2">Cost : </label>
									<select name="cost" class="form-control" id="exampleFormControlSelect2">
										<option> </option>
										<option> 5 tk</option>
										<option> 10 tk</option>
										<option> 15 tk</option>
										<option> 20 tk</option>
										<option> 25 tk</option>
										<option> 30 tk</option>
										<option> 35 tk</option>
										<option> 40 tk</option>
										<option> 45 tk</option>
										<option> 50 tk</option>
									</select>
								</div>
							</div>
						</div>
						<div class="row justify-content-md-center">
							<div class="col-md-6 mb-3">
								<input type="checkbox" name="check" id="accept"> <label for="accept">I Accept Terms & Conditions</label>
							</div>
						</div>
						<div class="row justify-content-end">
							<div class="col-md-4 mb-3">
								<button name="find" class="btn btn-success" type="submit" onclick="alert('Our Driver will contact Your As Soon As Possible')">Find Auto</button>
							</div>
						</div>
					</div>
				</div>
			</form>
		</section>
		<!-- stop login area  -->
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
		<script>
			if () {}
		</script>
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