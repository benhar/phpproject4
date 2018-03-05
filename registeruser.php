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
					<br>
				</div>
				<div class="row">
					<div class="overview">
						<div class="demo1">
							<a href="profile.php"><i class="fa fa-home"></i>Dashboard</a>
						</div>
						<div class="demo1">
							<a href="registeruser.php" class="active"><i class="fa fa-user"></i>Register User</a>
						</div>
						<div class="demo1">
							<a href="bookingauto.php"><i class="fa fa-search"></i>Find Auto</a>
						</div>
						<div class="demo1">
							<a href="bookingauto.php"><i class="fa fa-car"></i>Booking Auto</a>
						</div>
					</div>
					<?php $results = mysqli_query($db,"SELECT * FROM register") ?>
					<table class="table table-bordered table-responsive">
						<thead>
							<tr>
								<th>Id </th>
								<th>Name </th>
								<th>Password </th>
								<th>Email </th>
								<th>Phone </th>
								<th>Address </th>
								<th>Date Of Birth </th>
								<th>Gender </th>
								<th colspan="2">Action </th>
							</tr>
						</thead>
						<?php while($row= mysqli_fetch_array($results)) { ?>
						<tbody>
							<tr>
								<td> <?php echo $row['id']; ?> </td>
								<td> <?php echo $row['fullname']; ?> </td>
								<td> <?php echo $row['password']; ?> </td>
								<td> <?php echo $row['email']; ?> </td>
								<td> <?php echo $row['phone']; ?> </td>
								<td> <?php echo $row['address']; ?> </td>
								<td> <?php echo $row['dateofbirth']; ?> </td>
								<td> <?php echo $row['gender']; ?> </td>
								<td>
									<a href="registeruser.php?edit=<?php echo $row['id'] ?>" class="btn btn-primary"> Edit </a>
								</td>
								<td>
									<a href="server.php?del=<?php echo $row['id'] ?> " class="btn btn-danger">Delete</a>
								</td>
							</tr>
						</tbody>
						<?php } ?>
					</table>
					<table>
						<form action="" method="post">
							<tr>
								<td><input type="hidden" name="id" value="<?php echo $id ?>"></td>
							</tr>
							<tr>
								<div class="input-group">
									<td><label for="m1">Name</label></td>
									<td><input type="text" name="fullname" value="<?php echo $fullname ?>" id="m1"></td>
								</div>
							</tr>
							<tr>
								<div class="input-group">
									<td><label for="m2">Password</label></td>
									<td><input type="text" name="password" value="<?php echo $password ?>" id="m2"></td>
								</div>
							</tr>
							<tr>
								<div class="input-group">
									<td><label for="m3">Email</label></td>
									<td><input type="text" name="email" value="<?php echo $email ?>" id="m3"></td>
								</div>
							</tr>
							<tr>
								<div class="input-group">
									<td><label for="m4">Phone Number </label></td>
									<td><input type="text" name="phone" value="<?php echo $phone ?>" id="m4"></td>
								</div>
							</tr>
							
							<tr>
								<div class="input-group">
									<td><label for="m5">Address</label></td>
									<td><input type="text" name="address" value="<?php echo $address ?>" id="m5"></td>
								</div>
							</tr>
							<tr>
								<div class="input-group">
									<td><label for="m6">Date Of Birth</label></td>
									<td><input type="text" name="dateofbirth" value="<?php echo $dateofbirth ?>" id="m6"></td>
								</div>
							</tr>
							<tr>
								<div class="input-group">
									<td><label for="m7">Gender</label></td>
									<td><input type="text" name="gender" value="<?php echo $gender ?>" id="m7"></td>
								</div>
							</tr>
							
							<tr>
								<div class="input-group">
									<td>
										<?php if ($update == true): ?>
										<button class="btn" name="update" type="submit" style="background-color: #19a15f">Update</button>
										<?php else: ?>
										<button class="btn" name="save" type="submit">Save</button>
										<?php endif ?>
									</td>
								</div>
							</tr>
						</form>
					</table>
				</div>
			</div>
		</div>
	</body>
</html>