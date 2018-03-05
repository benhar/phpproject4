<?php
include('session.php');
include('server1.php');
if (isset($_GET['edit'])) {
		$id = $_GET['edit'];
		$update = true;
		$record = mysqli_query($db,"SELECT * FROM booking");
		if (count($record) == 1) {
			$n = mysqli_fetch_array($record);
			$start = $n['start'];
			$stop = $n['stop'];
			$select1 = $n['select1'];
			$cost = $n['cost'];
			$date = $n['date'];
		}
	}
?>
<!DOCTYPE html>
<html>
	<head>
		<title>Manage Booking auto</title>
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
					<div id="profile" class="profile">
						<h2 id="welcome" class="float-left">Welcome : <i class="text-primary"><?php echo $login_session; ?></i></h2>
						<b id="logout" class="float-right"><a href="logout.php" class="text-danger">Log Out</a></b>
					</div>
				</div>
				<div class="row">
					<div class="overview">
						<div class="demo1">
							<a href="profile.php"><i class="fa fa-home"></i>Dashboard</a>
						</div>
						<div class="demo1">
							<a href="registeruser.php"><i class="fa fa-user"></i>Register User</a>
						</div>
						<div class="demo1">
							<a href="bookingauto.php" class="active"><i class="fa fa-search"></i>Find Auto</a>
						</div>
						<div class="demo1">
							<a href="bookingauto.php"><i class="fa fa-car"></i>Booking Auto</a>
						</div>
					</div>
					<?php $results = mysqli_query($db,"SELECT * FROM find") ?>
					<table class="table table-bordered table-responsive">
						<thead>
							<tr>
								<th>Id </th>
								<th>From </th>
								<th>To </th>
								<th>Select</th>
								<th>Cost </th>
								<th colspan="2">Action </th>
							</tr>
						</thead>
						<?php while($row= mysqli_fetch_array($results)) { ?>
						<tbody>
							<tr>
								<td> <?php echo $row['id']; ?> </td>
								<td> <?php echo $row['start']; ?> </td>
								<td> <?php echo $row['stop']; ?> </td>
								<td> <?php echo $row['select1']; ?> </td>
								<td> <?php echo $row['cost']; ?> </td>
								<td>
									<a href="server1.php?del=<?php echo $row['id'] ?> " class="btn btn-danger">Delete</a>
								</td>
							</tr>
						</tbody>
						<?php } ?>
					</table>
					
				</div>
			</div>
		</div>
	</body>
</html>