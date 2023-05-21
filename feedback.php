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
	<link rel="icon" href="logo.png">
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
		    
		    $sql= "INSERT INTO `feedback`(`Full_Name`, `Experience`, `Email`, `Age`, `Phone`, `Message`) VALUES ('$name','$rate','$mail','$age','$phone','$msg')";
		    mysqli_query($con, $sql);
		    ?>
		    <script>
		    	alert("Feedback Recorded")
		    	window.location.href = "home.php";
		    </script>
		    <?php
		}		
	?>
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
				<td style="padding-left: 80px;"><input type="submit" name="submit" value="Resister"  required></td>
				<td><input type="reset" value="Reset"></td>
			</tr>			
		</table>
	</form>
</body>
</html>