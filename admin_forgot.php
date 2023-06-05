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

		    if($pass == $cpass){
		    	$sql= "UPDATE `admin_reg` SET `Password`='$pass', `C_password`='$cpass' WHERE Username = '$uname' && Email='$mail' && Password = '$opass'";
			    mysqli_query($con, $sql);
			    ?>
			    <script>
			    	alert("Successfully Changed Password.")
			    	window.location.href = "admin_login.php";
			    </script>
			    <?php
		    }else{
		    	?>
			    <script>
			    	alert("Password Don't match")
			    	window.location.href = "admin_forgot.php";
			    </script>
			    <?php
		    }	    
		}
	?>
	<form class="box" action="admin_forgot.php" method="POST">
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