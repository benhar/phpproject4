<?php 
	session_start();
	$db = mysqli_connect('localhost','root','','auto');
	$id = "";
	$start = "";
	$stop = "";
	$select1 = "";
	$cost = "";
	$date ="";
	$update = false;

	if (isset($_POST['request'])) {
		$id = $_POST['id'];
		$start = $_POST['start'];
		$stop = $_POST['stop'];
		$select1 = $_POST['select1'];
		$cost = $_POST['cost'];
		$date = $_POST['date'];
		mysqli_query($db,"INSERT INTO booking(start,stop,select1,cost,date) values ('$start','$stop','$select1','$cost','$date')");
		header('location:booking.php');
	}

	if (isset($_POST['update'])) {
		$id = $_POST['id'];
		$start = $_POST['start'];
		$stop = $_POST['stop'];
		$select1 = $_POST['select1'];
		$cost = $_POST['cost'];
		$date = $_POST['date'];
		mysqli_query($db,"UPDATE booking SET start='$start', stop='$stop',select1='$select1',cost='$cost',date='$date' WHERE id = $id");
		header('location:bookingauto.php');
	}

	if (isset($_GET['del'])) {
		$id=$_GET['del'];
		mysqli_query($db,"DELETE FROM booking WHERE id=$id");
		$_SESSION['messege'] = "Delete Successfully ...";
		header('location:bookingauto.php');
	}
	$results = mysqli_query($db,'SELECT * FROM booking');


	if (isset($_POST['find'])) {
		$id = $_POST['id'];
		$start = $_POST['start'];
		$stop = $_POST['stop'];
		$select1 = $_POST['select1'];
		$cost = $_POST['cost'];
		mysqli_query($db,"INSERT INTO find(start,stop,select1,cost) values ('$start','$stop','$select1','$cost')");
		header('location:find.php');
	}
	if (isset($_GET['del'])) {
		$id=$_GET['del'];
		mysqli_query($db,"DELETE FROM find WHERE id=$id");
		$_SESSION['messege'] = "Delete Successfully ...";
		header('location:findauto.php');
	}
	$results = mysqli_query($db,'SELECT * FROM find');

?>