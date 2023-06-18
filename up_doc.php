<?php
	include 'connect.php';
	session_start();

	$Uname=$_SESSION["Uname"];
	$sql1="SELECT * FROM `doctor_reg` WHERE Username='$Uname'";
	$res=mysqli_query($con,$sql1);
	$row=mysqli_fetch_assoc($res);
	$name=$row['Name'];
	$uname=$row['Username'];
	$email=$row['Email'];
	$pass=$row['Password'];
	$cpass=$row['C_password'];
	$date=$row['B_Date'];
	
	$gen=$row['Gender'];
	$phone=$row['Phone'];
	$deg=$row['Degree'];
	$add=$row['Address'];

	if(isset($_POST['submit'])){
		$name=$_POST['name'];
	    $uname=$_POST['uname'];
	    $pass=$_POST['pass'];
	    $cpass=$_POST['cpass'];
	    $date=$_POST['date'];
	    $gen=$_POST['gen'];
	    $mail=$_POST['mail'];
	    $phone=$_POST['phone'];
	    $deg=$_POST['deg'];
	    $add=$_POST['add'];

	    if($pass == $cpass){
	    	$sql= "UPDATE `doctor_reg` SET `Name`='$name', `Username`='$uname', `Email`='$mail', `Password`='$pass', `C_password`='$cpass', `B_Date`='$date', `Gender`='$gen', `Phone`='$phone', `Degree`='$deg', `Address`='$add' WHERE Username='$Uname'";
		    mysqli_query($con, $sql);
		    ?>
		    <script>
		    	alert("Successfully Updated.")
		    	window.location.href = "doctor_work.php";
		    </script>
		    <?php
	    }else{
	    	?>
		    <script>
		    	alert("Password Don't match")
		    	window.location.href = "up_doc.php";
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
	<a href="doctor_work.php"><button class="btn">Back</button></a>
	<form class="box" method="POST">
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
				<td><input type="date" name="date" value='<?php echo $cpass;?>' required></td>
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
					<select name="deg" value='<?php echo $deg;?>' required>
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
				<td style="padding-left: 80px;"><input type="submit" name="submit" value="Update"  required></td>
				<td><input type="reset" value="Reset"></td>
			</tr>			
		</table>
	</form>
</body>
</html>