<?php
include('session.php');
include('server.php');
if (isset($_GET['edit'])) {
		$id = $_GET['edit'];
		$update = true;
		$record = mysqli_query($db,"SELECT * FROM register");
		if (count($record) == 1) {
			$n = mysqli_fetch_array($record);
			$fullname = $n['fullname'];
			$password = $n['password'];
			$email = $n['email'];
			$phone = $n['phone'];
			$address = $n['address'];
			$dateofbirth = $n['dateofbirth'];
			$gender = $n['gender'];	
		}
	}
?>
<!DOCTYPE html>
<html>
	<head>
		<title>Admin Panel</title>
		<link href="css/bootstrap-grid.min.css" rel="stylesheet" type="text/css">
		<link href="css/bootstrap.min.css" rel="stylesheet" type="text/css">
		<!-- ============= font awesome css =============== -->
		<link rel="stylesheet" href="css/font-awesome.min.css">
		<link href="css/style.css" rel="stylesheet" type="text/css">
	</head>
	<body>
		<div class="">
			<div class="container">
				<div class="row">
					<div id="profile">
						<h2 id="welcome" class="float-left">Welcome : <i class="text-primary"><?php echo $login_session; ?></i></h2>
						<b id="logout" class="float-right"><a href="logout.php" class="text-danger">Log Out</a></b>
					</div>
					<br><br>
				</div>
				<div class="row">
					<div class="overview float-left">
						<div class="demo1">
							<a href="profile.php" class="active"><i class="fa fa-home"></i>Dashboard</a>
						</div>
						<div class="demo1">
							<a href="registeruser.php"><i class="fa fa-user"></i>Register User</a>
						</div>
						<div class="demo1">
							<a href="findauto.php"><i class="fa fa-search"></i>Find Auto</a>
						</div>
						<div class="demo1">
							<a href="bookingauto.php"><i class="fa fa-car"></i>Booking Auto</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</body>
</html>