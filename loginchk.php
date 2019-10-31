<?php
session_start();
$user = $_POST['user'];
$pass = $_POST['pass'];

$conn = mysqli_connect("localhost","root","","agreenculturedb");

$query = "SELECT User,Pass FROM tblFarmer WHERE User='".$user."' AND Pass='".$pass."'";

$result = mysqli_query($conn,$query);

if(mysqli_num_rows($result)==1){
	$_SESSION['User'] = $user;
	echo "<script>window.location.assign('suggestion.php');</script>";
}else{
	echo "<script type='text/javascript'>alert('Login Failed!');</script>";
		echo "<script type='text/javascript'>window.location='login.php';</script>";
}

?>