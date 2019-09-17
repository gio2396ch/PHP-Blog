<?php
include('config.php');
session_start();

if($_SERVER["REQUEST_METHOD"] == "POST"){
	$myusername = mysqli_real_escape_string($conn, $_POST['username']);
	$mypassword = mysqli_real_escape_string($conn, $_POST['password']);
	
	$sql = "SELECT id FROM admin WHERE username = '$myusername' and password ='$mypassword'";
	$result = mysqli_query($conn,$sql);
	$row = mysqli_fetch_array($result);
	
	$count = mysqli_num_rows($result);
	
	if($count == 1){
		$_SESSION['login_user'] = $myusername;
		
		header ("Location: admin.php");
	}else{
		echo "Log in invalid";
		echo "<a href ='index.php'>Try again</a>";
	}
}
?>
