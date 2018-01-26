<?php 
include 'connect.php';
include 'functions.php';
if ($_SERVER['REQUEST_METHOD']  == 'POST') {
	# code...
	$email=mysqli_real_escape_string($conn,validate($_POST['email']));
	$password=mysqli_real_escape_string($conn,validate($_POST['password']));
	if (!empty($email)&&!empty($password)) {
		$sql="SELECT * FROM users WHERE email ='email'";
		$results=mysqli_query($conn,$sql);
		$count=mysqli_num_rows($results);
		if (mysqli_connect()) {
			# code...
		}
	}else{
		echo "Email and Password Are Required";
	}
}



 ?>