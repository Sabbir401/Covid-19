<?php
	include 'connect.php';
	session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.rtl.min.css">
	<link rel="stylesheet" type="text/css" href="CSS/admin.css">
	<script src="https://kit.fontawesome.com/11c476db2a.js" crossorigin="anonymous"></script>
	<link rel="icon" href="img/logo.png">
	<title></title>
</head>
<body>
	<nav>
		<ul>
			<li>
				<a href="#" class="logo">
					<img src="img/profile.png">
					<span class="nav-item"><?php echo $_SESSION["Uname"] ?></span>
				</a>
			</li>
			<li><a href="home.php">
				<i class="fas fa-home"></i>
				<span class="nav-item">Home</span>
			</a></li>
			<li><a href="update_admin.php">
				<i class="fas fa-user"></i>
				<span class="nav-item">Update Profile</span>
			</a></li>
			<li><a href="all_user.php">
				<i class="fas fa-wallet"></i>
				<span class="nav-item">Public's Information</span>
			</a></li>
			<li><a href="all_doc.php">
				<i class="fas fa-chart-bar"></i>
				<span class="nav-item">Doctor's Information</span>
			</a></li>
			<li><a href="#">
				<i class="fas fa-tasks"></i>
				<span class="nav-item">Manage Doctor</span>
			</a></li>
			<li><a href="#">
				<i class="fas fa-cog"></i>
				<span class="nav-item">All Doctor's Post</span>
			</a></li>
			<li><a href="#">
				<i class="fas fa-question-circle"></i>
				<span class="nav-item">Show All Feedback</span>
			</a></li>
			<li><a href="admin_login.php" class="logout">
				<i class="fas fa-sign-out-alt"></i>
				<span class="nav-item">Log out</span>
				<?php 
					// session_unset();
					// session_destroy();
				?>
			</a></li>
		</ul>
	</nav>
	<div class="Container">
		<div class="reg">
			<p>Total Registered Public</p><br>
			<?php
				$sql = "SELECT COUNT(Id) FROM admin_reg;";
		    	$query = mysqli_query($con, $sql);
		    	$row = mysqli_fetch_assoc($query);
		    	echo $row;
			?>
		</div>
		<div class="vac">
			<p>Total Vaccinated Public</p>
		</div>
		<div class="doc">
			<p>Total Registered Doctor</p>
		</div>
		<div class="fed">
			<p>Feedback</p>
		</div>
	</div>


</body>
</html>