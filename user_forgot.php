<?php
	include 'connect.php';
	session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Forgot Password</title>
	<link rel="stylesheet" type="text/css" href="CSS/login.css">
	<link rel="icon" href="img/logo.png">
</head>
<body>
	<?php
		if(isset($_POST['submit'])){
		    $uname=$_POST['uname'];
		    $mail=$_POST['mail'];
		    $opass=$_POST['opass'];
		    $pass=$_POST['pass'];
		    $cpass=$_POST['cpass'];

		    $pattern = "/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]{8,}$/";
		    $pattern1 = "/^[a-z0-9_.+-]+@gmail\.com$/";
		    $pattern2 = "/^[a-z0-9_.+-]+@yahoo\.com$/";
		    $pattern3 = "/^[a-z0-9_.+-]+@outlook\.com$/";
		    $pattern4 = "/^[a-z0-9_.+-]+@hotmail\.com$/";

		    if(preg_match($pattern1, $mail) or preg_match($pattern2, $mail) or preg_match($pattern3, $mail) or preg_match($pattern4, $mail)){
		    	if(preg_match($pattern, $pass)){
				    if($pass == $cpass){
				    	$sql= "UPDATE `user_reg` SET `Password`='$pass', `C_password`='$cpass' WHERE Username = '$uname' && Email='$mail' && Password = '$opass'";
					    mysqli_query($con, $sql);
					    ?>
					    <script>
					    	alert("Successfully Changed Password.")
					    	window.location.href = "user_login.php";
					    </script>
					    <?php
				    }else{
				    	?>
					    <script>
					    	alert("Password Don't match")
					    	window.location.href = "user_forgot.php";
					    </script>
					    <?php
				    }
				}else{
					?>
				    <script>
				    	alert("Invalid Password Format.\n1.At Least 8 character\n2.Contains at least one lower and one upper case\n3.Contains at least one digit\n4.Contains at least one special character")
				    	window.location.href = "#";
				    </script>
				    <?php
				}
		    }else{
		    	?>
				    <script>
				    	alert("Invalid Email Format")
				    	window.location.href = "#";
				    </script>
				    <?php
		    }

		}
	?>
	<form class="box" action="user_forgot.php" method="POST">
		<h1>Forgot Password</h1>
		<input type="text" name="uname" placeholder="User Name" required></input>
		<input type="email" name="mail" placeholder="email@gmail.com" required>
		<input type="password" name="opass" placeholder="Old Password" required>
		<input type="password" name="pass" placeholder="New Password" required>
		<input type="password" name="cpass" placeholder="Confirm Password" required>
		<input type="submit" name="submit" value="Change Password">
	</form>
</body>
</html>