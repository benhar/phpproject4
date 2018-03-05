<?php 
	session_start();
	$db = mysqli_connect('localhost','root','','auto');
	$id = "";
	$fullname = "";
	$password = "";
	$email = "";
	$phone = "";
	$address ="";
	$dateofbirth ="";
	$gender ="";
	$update = false;

	if (isset($_POST['submit1'])) {
		$id = $_POST['id'];
		$fullname = $_POST['fullname'];
		$password = $_POST['password'];
		$email = $_POST['email'];
		$phone = $_POST['phone'];
		$address = $_POST['address'];
		$dateofbirth = $_POST['dateofbirth'];
		$gender = $_POST['gender'];

		mysqli_query($db,"INSERT INTO register(fullname,password,email,phone,address,dateofbirth,gender) values ('$fullname','$password','$email','$phone','$address','$dateofbirth','$gender')");
		header('location:register.php');
	}

	if (isset($_POST['update'])) {
		$id = $_POST['id'];
		$fullname = $_POST['fullname'];
		$password = $_POST['password'];
		$email = $_POST['email'];
		$phone = $_POST['phone'];
		$address = $_POST['address'];
		$dateofbirth = $_POST['dateofbirth'];
		$gender = $_POST['gender'];
		mysqli_query($db,"UPDATE register SET fullname='$fullname', password='$password',email='$email',phone='$phone',address='$address',dateofbirth='$dateofbirth',gender='$gender' WHERE id = $id");
		header('location:profile.php');
	}

	if (isset($_GET['del'])) {
		$id=$_GET['del'];
		mysqli_query($db,"DELETE FROM register WHERE id=$id");
		$_SESSION['messege'] = "Delete Successfully ...";
		header('location:registeruser.php');
	}
	$results = mysqli_query($db,'SELECT * FROM register');
?>