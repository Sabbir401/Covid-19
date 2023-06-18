<?php
	include 'connect.php';
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Feedback Form</title>
	<link rel="stylesheet" type="text/css" href="CSS/feedback.css">
	<link rel="icon" href="img/logo.png">
</head>
<body>
	<?php
		if(isset($_POST['submit'])){
			$name=$_POST['name'];
		    $rate=$_POST['rate'];
		    $mail=$_POST['mail'];
		    $age=$_POST['age'];
		    $phone=$_POST['phone'];
		    $msg=$_POST['msg'];

		    $pattern1 = "/^[a-z0-9_.+-]+@gmail\.com$/";
		    $pattern2 = "/^[a-z0-9_.+-]+@yahoo\.com$/";
		    $pattern3 = "/^[a-z0-9_.+-]+@outlook\.com$/";
		    $pattern4 = "/^[a-z0-9_.+-]+@hotmail\.com$/";
		    
		    if(preg_match($pattern1, $mail) or preg_match($pattern2, $mail) or preg_match($pattern3, $mail) or preg_match($pattern4, $mail)){
				    $sql= "INSERT INTO `feedback`(`Full_Name`, `Experience`, `Email`, `Age`, `Phone`, `Message`) VALUES ('$name','$rate','$mail','$age','$phone','$msg')";
				    mysqli_query($con, $sql);
				    ?>
				    <script>
				    	alert("Feedback Recorded")
				    	window.location.href = "home.php";
				    </script>
				    <?php
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
	<a href="home.php"><button class="btn">Back</button></a>
	<form class="box" action="feedback.php" method="POST">
		<h1>Feedback Form</h1>
		<table>
			<tr>
				<th colspan="2">How do you rate your overall experience?</th>
			</tr>
			<tr>
				<td></td>
				<td><br>
					<input type="radio" name="rate" value="Bad"><label>Bad</label>
					<input type="radio" name="rate" value="Average"><label>Average</label>
					<input type="radio" name="rate" value="Good"><label>Good</label><br>
				</td>
			</tr>
			<tr>
				<th>Full Name</th>
				<td><input type="text" name="name" placeholder="Full Name" required></td>
			</tr>
			<tr>
				<th>Email</th>
				<td><input type="email" name="mail" placeholder="email@gmail.com" required></td>
			</tr>
			<tr>
				<th>Age</th>
				<td><input type="number" name="age" placeholder="Enter your Age" required></td>
			</tr>
			<tr>
				<th>Phone</th>
				<td><input type="number" name="phone" placeholder="xxx-xxx-xxx" required></td>
			</tr>
			<tr>
				<th>Message</th>
				<td><textarea rows="10" cols="50" name="msg" placeholder="Write your message here" required></textarea></td>
			</tr>
			<tr>
				<td style="padding-left: 80px;"><input type="submit" name="submit" value="Register"  required></td>
				<td><input type="reset" value="Reset"></td>
			</tr>			
		</table>
	</form>
</body>
</html>