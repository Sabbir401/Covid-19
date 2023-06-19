<?php
	include 'connect.php';
	session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Doctor Login</title>
	<link rel="stylesheet" type="text/css" href="CSS/login.css">
	<link rel="icon" href="img/logo.png">
</head>
<body>
	<?php
		if(isset($_POST['submit'])){
		    $uname=$_POST['uname'];
		    $pass=$_POST['pass'];
		    
		    $sql = "SELECT * FROM `doctor_reg` WHERE Username = '$uname' && Password = '$pass';";
		    $query = mysqli_query($con, $sql);
		    $row = mysqli_fetch_assoc($query);
		    if($uname == $row["Username"]){
		    	$_SESSION["Uname"] = "$uname";
		    	?>
			    <script>
			    	alert("Successfully Loged in")
			    	window.location.href = "doctor_work.php";
			    </script>
			    <?php
		    }
		    else{
		    	?>
			    <script>
			    	alert("Invalid Username or Password!")
			    </script>
			    <?php
		    }
		    
		}
	?>

	<form class="box" action="doctor_login.php" method="POST">
		<h1>Doctor Login</h1>
		<input type="text" name="uname" placeholder="User Name"></input>
		<input type="password" name="pass" placeholder="Password">
		<input type="submit" name="submit" value="Login">
		<h3><a href="admin_signup.php">Register now</a></h3>
		<h3><a href="doctor_forgot.php">Forget Password?</a></h3>
	</form>
</body>
</html>