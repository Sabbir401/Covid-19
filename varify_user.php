<?php
	include 'connect.php';
	session_start();
	$admin= $_SESSION["Uname"];
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Update Vaccination Status</title>
	<link rel="stylesheet" type="text/css" href="CSS/signup.css">
	<link rel="icon" href="img/logo.png">
</head>
<body>
	<?php
		if(isset($_POST['submit'])){
			$nid=$_POST['nid'];
			$status=$_POST['status'];
		    $sql= "UPDATE `user_reg` SET `Status`='$status'  WHERE NID=$nid";
			mysqli_query($con, $sql);
		    ?>
		    <script>
		    	alert("Successfully Updated;.")
		    	window.location.href = "doctor_work.php";
		    </script>
		    <?php
	    }	    	    
	?>
	<a href="doctor_work.php"><button class="btn">Back</button></a>
	<form class="box" action="varify_user.php" method="POST">
		<h1>Update Vaccination Status</h1>
		<table>
			<tr>
				<th>User_NID</th>
				<td><input type="text" name="nid" placeholder="Enter NID Number"></td>
			</tr>
				<th>Status</th>
				<td>
					<select id="" name="status"  required>
					 <option selected disabled >---</option>
					<option>Yes</option>
					<option>No</option>
					</select>
				</td>		
			</tr>
			<tr>

			<tr>
				<td style="padding-left: 80px;"><input type="submit" name="submit" value="Register"  required></td>
				<td><input type="reset" value="Reset"></td>
			</tr>			
		</table>
	</form>
</body>
</html>