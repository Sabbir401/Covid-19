<?php
	include 'connect.php';
	session_start();
	$Uname= $_SESSION["Uname"];

	$sql="SELECT * FROM `user_reg` WHERE Username='$Uname'";
	$res=mysqli_query($con, $sql);
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Check Status</title>
	<link rel="stylesheet" type="text/css" href="CSS/signup.css">
	<link rel="icon" href="img/logo.png">

</head>
<body>
	<a href="user_work.php"><button class="btn">Back</button></a>
	<div class="container">
		<div class="box">
			<h1>Your Vaccine Status</h1>
			<h1><?php 
					while ($row=mysqli_fetch_assoc($res)) {
						echo $row['Status'];
					}
			  ?></h1>
		</div>
	</div>
	
</body>
</html>