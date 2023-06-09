<?php
	include 'connect.php';
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Admin Registration</title>
	<link rel="stylesheet" type="text/css" href="CSS/signup.css">
	<link rel="icon" href="logo.png">
</head>
<body>
	<?php
		if(isset($_POST['submit'])){
			$name=$_POST['name'];
		    $uname=$_POST['uname'];
		    $pass=$_POST['pass'];
		    $cpass=$_POST['cpass'];
		    $date=$_POST['date'];
		    $month=$_POST['month'];
		    $year=$_POST['year'];
		    $gen=$_POST['gen'];
		    $mail=$_POST['mail'];
		    $phone=$_POST['phone'];
		    $des=$_POST['des'];
		    $add=$_POST['add'];

		    $pattern = "/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]{8,}$/";
		    $pattern1 = "/^[a-z0-9_.+-]+@gmail\.com$/";
		    $pattern2 = "/^[a-z0-9_.+-]+@yahoo\.com$/";
		    $pattern3 = "/^[a-z0-9_.+-]+@outlook\.com$/";
		    $pattern4 = "/^[a-z0-9_.+-]+@hotmail\.com$/";

		    if(preg_match($pattern1, $mail) or preg_match($pattern2, $mail) or preg_match($pattern3, $mail) or preg_match($pattern4, $mail)){
		    	if(preg_match($pattern, $pass)){
				    if($pass == $cpass){
				    	$sql= "INSERT INTO `admin_reg`(`Name`, `Username`, `Email`, `Password`, `C_password`, `B_Date`, `B_Month`, `B_Year`, `Gender`, `Phone`, `Designation`, `Address`) VALUES ('$name','$uname','$mail','$pass','$cpass','$date','$month','$year','$gen','$phone','$des','$add')";
					    mysqli_query($con, $sql);
					    ?>
					    <script>
					    	alert("Successfully Resistered.")
					    	window.location.href = "home.php";
					    </script>
					    <?php
				    }else{
				    	?>
					    <script>
					    	alert("Password Don't match")
					    	window.location.href = "#";
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
				    	alert("Invalid Mail Format")
				    	window.location.href = "#";
				    </script>
				    <?php
		    }	    
		}
	?>
	<form class="box" action="admin_signup.php" method="POST">
		<h1>Admin Registration</h1>
		<table>
			<tr>
				<th>Full Name</th>
				<td><input type="text" name="name" placeholder="Full Name" required></td>
			</tr>
			<tr>
				<th>Username</th>
				<td><input type="text" name="uname" placeholder="User Name" required></td>
			</tr>
			<tr>
				<th>Password</th>
				<td><input type="password" name="pass" placeholder="Password" required></td>
			</tr>
			<tr>
				<th>Confirm Password</th>
				<td><input type="password" name="cpass" placeholder="Retype password" required></td>
			</tr>
			<tr>
				<th>Date of Birth</th>
				<td>
					<select id="" name="date"  required>
					 <option selected disabled >Day</option>
					<?php for($i=1;$i<=31;$i++) echo "<option>$i</option>"; ?>
					</select>
					<select id="" name="month"  required>
					 <option selected disabled >Month</option>
					<option>January</option>
					<option>February</option>
					<option>March</option>
					<option>April</option>
					<option>May</option>
					<option>June</option>
					<option>July</option>
					<option>August</option>
					<option>September</option>
					<option>October</option>
					<option>November</option>
					<option>December</option>
					</select>
					<select id="" name="year"  required>
					 <option selected disabled >Year</option>
					<?php for($i=1990;$i<=2021;$i++) echo "<option>$i</option>"; ?>
					</select>
				</td>

					
			</tr>
			<tr>
				<th><br>Gender<br></th>
				<td><br>
					<input type="radio" name="gen" value="Male"><label>Male</label>
					<input type="radio" name="gen" value="Female"><label>Female</label>
					<input type="radio" name="gen" value="Other"><label>Other</label><br>
				</td>
			</tr>
			<tr>
				<th>Email</th>
				<td><input type="email" name="mail" placeholder="email@gmail.com" required></td>
			</tr>
			<tr>
				<th>Phone</th>
				<td><input type="number" name="phone" placeholder="xxx-xxx-xxx"  required></td>
			</tr>
			<tr>
				<th>Designation</th>
				<td>
					<select name="des"  required>
						<option selected disabled >--Designation--</option>
						<option>Chief Doctor </option>
						<option>Manager</option>
						<option>Receptionist</option>
						<option>Vaccine Committee Member</option>
					</select>
				</td>
			</tr>
			<tr>
				<th>Address</th>
				<td><textarea rows="2" cols="50" name="add" placeholder="Enter your full adress"  required></textarea></td>
			</tr>
			<tr>
				<td style="padding-left: 80px;"><input type="submit" name="submit" value="Resister"  required></td>
				<td><input type="reset" value="Reset"></td>
			</tr>			
		</table>
	</form>
</body>
</html>