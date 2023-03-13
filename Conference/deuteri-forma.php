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
echo "Login success!!!welcome".$row['username'];
}else{
echo "failed to login!";
}
?>

















<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>ΦΟΡΜΑ ΣΥΜΠΛΗΡΩΣΗΣ 1</title>
<link rel="stylesheet" type="text/css" href="css1.css" >
</head>
<body style="background-color:pink; color:black; margin:  100px  150px  100px 80px; border:5px solid;">
   <h1><font color="BLACK">LOGIN</font></h1>
   <form method="post" action="process.php">
<br>
<div class="position"><font color="yellow">Username<input required placeholder="Εισάγετε username" name="username" pattern="[A-Za-z]+" minlength="6" maxlength="8"  type="text"/> </div></font>
<!--ΔΕΧΕΤΑΙ MONO ΛΑΤΙΝΙΚΑ ΑΠΟ 6 ΕΩΣ 8 ΧΑΡΑΚΤΗΡΕΣ-->
<br>
<div class="position"><font color="yellow">Password </font>&nbsp&nbsp&nbsp&nbsp<input  type="password" name="password" maxlength="8"></div>
<br><br>
<button class="button position3" id="btn" value="login" type="submit" value="submit">LOGIN</button>
</form>
</body>
</html>
