<?php
	include 'connect.php';
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Admin Login</title>
	<link rel="stylesheet" type="text/css" href="CSS/login.css">
	<link rel="icon" href="logo.png">
</head>
<body>
	<?php
		if(isset($_POST['submit'])){
		    $uname=$_POST['uname'];
		    $pass=$_POST['pass'];
		    
		    $sql = "SELECT * FROM `admin_reg` WHERE Username = '$uname' && Password = '$pass';";
		    $query = mysqli_query($con, $sql);
		    $row = mysqli_fetch_assoc($query);
		    if($row){
		    	?>
			    <script>
			    	alert("Successfully Loged in")
			    	window.location.href = "admin_work.php";
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

	<form class="box" action="admin_login.php" method="POST">
		<h1>Admin Login</h1>
		<input type="text" name="uname" placeholder="User Name"></input>
		<input type="password" name="pass" placeholder="Password">
		<input type="submit" name="submit" value="Login">
		<h3><a href="admin_signup.php">Register now</a></h3>
		<h3><a href="https://www.w3schools.com/html/html_links_colors.asp">Forget Password?</a></h3>
	</form>
</body>
</html>