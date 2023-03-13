<?php
	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "answers";
	
	$conn = mysqli_connect($servername , $username , $password , $dbname);
	
	$user = $_POST['username'];
	$pass = $_POST['password'];
	$sql = "select * from info where username = '$user' and password = '$pass'";
	$result = mysqli_query($conn,$sql) or die("failed to query database".mysqli_error());
	$row = mysqli_fetch_array($result);
	if ($row['username'] == $user && $row['password'] == $pass ){
		echo "Login success!!!welcome ".$row['username'];
		include("progsyn.php");
	}else{
		echo "failed to login!";
	}
?>