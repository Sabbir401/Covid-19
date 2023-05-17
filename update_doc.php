<?php
	include 'connect.php';
	$id=$_GET['upid'];
	$sql1="SELECT * FROM `doctor_reg` WHERE id=$id";
	$res=mysqli_query($con,$sql1);
	$row=mysqli_fetch_assoc($res);
	$name=$row['Name'];
	$uname=$row['Username'];
	$email=$row['Email'];
	$pass=$row['Password'];
	$cpass=$row['C_password'];
	$date=$row['B_Date'];
	$month=$row['B_Month'];
	$year=$row['B_Year'];
	$gen=$row['Gender'];
	$phone=$row['Phone'];
	$degree=$row['Degree'];
	$add=$row['Address'];

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
	    $degree=$_POST['degree'];
	    $add=$_POST['add'];

	    if($pass == $cpass){
	    	$sql= "UPDATE `doctor_reg` SET `Id`=$id `Name`='$name', `Username`='$uname', `Email`='$mail', `Password`='$pass', `C_password`='$cpass', `B_Date`='$date', `B_Month`='$month', `B_Year`='$year', `Gender`='$gen', `Phone`='$phone', `Degree`='$degree', `Address`='$add' WHERE Id=$id";
		    mysqli_query($con, $sql);
		    ?>
		    <script>
		    	alert("Successfully Updated.")
		    	window.location.href = "#";
		    </script>
		    <?php
	    }else{
	    	?>
		    <script>
		    	alert("Password Don't match")
		    	window.location.href = "update_doc.php";
		    </script>
		    <?php
	    }
	    	    
	}
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Update Doctor Information</title>
	<link rel="stylesheet" type="text/css" href="CSS/signup.css">
	<link rel="icon" href="img/logo.png">
</head>
<body>
	<form class="box" action="doctor_signup.php" method="POST">
		<h1>Update Doctor Information</h1>
		<table>
			<tr>
				<th>Full Name</th>
				<td><input type="text" name="name" placeholder="Full Name" value='<?php echo $name;?>' required></td>
			</tr>
			<tr>
				<th>Username</th>
				<td><input type="text" name="uname" placeholder="User Name" value='<?php echo $uname;?>' required></td>
			</tr>
			<tr>
				<th>Email</th>
				<td><input type="email" name="mail" placeholder="email@gmail.com" value='<?php echo $email;?>' required></td>
			</tr>
			<tr>
				<th>Password</th>
				<td><input type="text" name="pass" placeholder="Password" value='<?php echo $pass;?>' required></td>
			</tr>
			<tr>
				<th>Confirm Password</th>
				<td><input type="text" name="cpass" placeholder="Retype password" value='<?php echo $cpass;?>' required></td>
			</tr>
			<tr>
				<th>Date of Birth</th>
				<td>
					<select id="" name="date" value='<?php echo $date;?>' required>
					 <option selected disabled >Day</option>
					<?php for($i=1;$i<=31;$i++) echo "<option>$i</option>"; ?>
					</select>
					<select id="" name="month" value='<?php echo $month;?>'  required>
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
					<select id="" name="year" value='<?php echo $year;?>' required>
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
				<th>Phone</th>
				<td><input type="number" name="phone" placeholder="xxx-xxx-xxx" value='<?php echo $phone;?>'  required></td>
			</tr>
			<tr>
				<th>Degree</th>
				<td>
					<select name="degree" value='<?php echo $degree;?>' required>
						<option selected disabled >Degree</option>
						<option>MBBS</option>
						<option>FCPS</option>
						<option>BMBS</option>
						<option>MBChC</option>
						<option>MBBCh</option>
						<option>MD</option>
						<option>DO</option>

					</select>
				</td>
			</tr>
			<tr>
				<th>Address</th>
				<td><textarea rows="2" cols="50" name="add" placeholder="Enter your full adress" value='<?php echo $add;?>' required></textarea></td>
			</tr>
			<tr>
				<td style="padding-left: 80px;"><input type="submit" name="submit" value="Resister"  required></td>
				<td><input type="reset" value="Reset"></td>
			</tr>			
		</table>
	</form>
</body>
</html>