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
					<div id="profile">
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
							<a href="findauto.php"><i class="fa fa-search"></i>Find Auto</a>
						</div>
						<div class="demo1">
							<a href="bookingauto.php" class="active"><i class="fa fa-car"></i>Booking Auto</a>
						</div>
					</div>
					<?php $results = mysqli_query($db,"SELECT * FROM booking") ?>
					<table class="table table-bordered table-responsive">
						<thead>
							<tr>
								<th>Id </th>
								<th>From </th>
								<th>To </th>
								<th>Select</th>
								<th>Cost </th>
								<th>Date </th>
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
								<td> <?php echo $row['date']; ?> </td>
								<td>
									<a href="bookingauto.php?edit=<?php echo $row['id'] ?>" class="btn btn-primary"> Edit </a>
								</td>
								<td>
									<a href="server1.php?del=<?php echo $row['id'] ?> " class="btn btn-danger">Delete</a>
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
									<td><label for="m1">From</label></td>
									<td><input type="text" name="start" value="<?php echo $start ?>" id="m1"></td>
								</div>
							</tr>
							<tr>
								<div class="input-group">
									<td><label for="m2">To</label></td>
									<td><input type="text" name="stop" value="<?php echo $stop ?>" id="m2"></td>
								</div>
							</tr>
							<tr>
								<div class="input-group">
									<td><label for="m3">Select</label></td>
									<td><input type="text" name="select1" value="<?php echo $select1 ?>" id="m3"></td>
								</div>
							</tr>
							<tr>
								<div class="input-group">
									<td><label for="m4">Cost </label></td>
									<td><input type="text" name="cost" value="<?php echo $cost ?>" id="m4"></td>
								</div>
							</tr>
							
							<tr>
								<div class="input-group">
									<td><label for="m5">date</label></td>
									<td><input type="text" name="date" value="<?php echo $date ?>" id="m5"></td>
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