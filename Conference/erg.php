<?php
	$username = filter_input(INPUT_POST,'username');
	$password = filter_input(INPUT_POST,'password');
	$onoma = filter_input(INPUT_POST,'onoma');
	$eponymo = filter_input(INPUT_POST,'eponymo');
	$date = filter_input(INPUT_POST,'date');
	$xora = filter_input(INPUT_POST,'xora');
	$email = filter_input(INPUT_POST,'email');
	$tilefono = filter_input(INPUT_POST,'tilefono');
	$opinion = filter_input(INPUT_POST,'opinion');
	
	if(!empty($username)){
		if(!empty($password)){
			if(!empty($onoma)){
				if(!empty($eponymo)){
							if(!empty($email)){
								if(!empty($tilefono)){
										$host="localhost";
										$dbusername = "root";
										$dbpassword = "";
										$dbname = "answers";
										$conn = new mysqli ($host , $dbusername , $dbpassword , $dbname);
										if (mysqli_connect_error()){
											die('Connect Error('.mysqli_connect_errno().')'.mysqli_connect_error());
										}
										else{
										$sql="INSERT INTO info(onoma,eponymo,email,tilefono,username,password,opinion) values ('$onoma','$eponymo','$email','$tilefono','$username','$password','$opinion')";
										if ($conn->query($sql)){
											echo "New record is inserted succesfully";
										}else{
											echo "error:".$sql."<br>".$conn->error;
										}
										mysqli_close($conn);
											}
									}else{
			echo "tilefono should not be empty";
			die();
		}
								}else{
			echo "email should not be empty";
			die();
		}
					}else{
			echo "eponymo should not be empty";
			die();
		}
				}else{
			echo "onoma should not be empty";
			die();
		}
			}else{
			echo "password should not be empty";
			die();
		}
		}else{
			echo "username should not be empty";
			die();
		}
?>