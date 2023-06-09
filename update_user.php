<?php
	include 'connect.php';
	$id=$_GET['upid'];
	$sql1="SELECT * FROM `user_reg` WHERE Id=$id";
	$res=mysqli_query($con,$sql1);
	$row=mysqli_fetch_assoc($res);
	$name=$row['Name'];
	$email=$row['Email'];
	$uname=$row['Username'];
	$pass=$row['C_password'];
	$cpass=$row['C_password'];
	$date=$row['B_Date'];
	
	$gen=$row['Gender'];
	$phone=$row['Phone'];
	$occu=$row['Occupation'];
	$add=$row['Address'];
	$center=$row['Vaccine Center'];

	if(isset($_POST['submit'])){
		$name=$_POST['name'];
	    $mail=$_POST['mail'];
	    $uname=$_POST['uname'];
	    $pass=$_POST['pass'];
	    $cpass=$_POST['cpass'];
	    $date=$_POST['date'];
	    
	    $gen=$_POST['gen'];
	    $phone=$_POST['phone'];
	    $occu=$_POST['occu'];
	    $add=$_POST['add'];
	    $cen=$_POST['center'];

	    if($pass == $cpass){
	    	$sql = "UPDATE `user_reg` SET `Name`='$name', `Email`='$mail', `Username`='$uname', `Password`='$pass', `C_password`='$cpass', `B_Date`='$date', `Gender`='$gen', `Phone`='$phone', `Occupation`='$occu', `Address`='$add', `Vaccine Center`='$cen' WHERE Id=$id";
		    mysqli_query($con, $sql);
		    ?>
		    <script>
		    	alert("Successfully Updated.")
		    	window.location.href = "all_user.php";
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
	}
?>

<!doctype html>
<html>
 <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.rtl.min.css">
    <link rel="stylesheet" type="text/css" href="CSS/signup.css">



</head>
	<body>
  		<form class="box" method="POST">
		<h1>Update Public Information</h1>
		<table>
			<tr>
				<th>Full Name</th>
				<td><input type="text" name="name" placeholder="Full Name" value='<?php echo $name;?>'></td>
			</tr>
			<tr>
				<th>Email</th>
				<td><input type="email" name="mail" placeholder="email@gmail.com" value='<?php echo $email;?>'></td>
			</tr>
			<tr>
				<th>Username</th>
				<td><input type="text" name="uname" placeholder="User Name" value='<?php echo $uname;?>'></td>
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
				<td><input type="number" name="phone" placeholder="xxx-xxx-xxx" value='<?php echo $phone;?>'></td>
			</tr>
			<tr>
				<th>Occupation</th>
				<td>
					<select name="occu">
						<option selected disabled >--Select--</option>
						<option>All Government Officer</option>
						<option>Bank Employee</option>
						<option>Bar Council Resisters</option>
						<option>Citizen resistration (18 years & above)</option>
						<option>Defence Forces</option>
						<option>Farmer</option>
						<option>Front-line Law Enforcement Agency</option>
						<option>Front Line Medical Worker</option>
						<option>Medical Students</option>
						<option>National Players</option>
						<option>Person with Disability</option>
						<option>Students 18 year & above</option>
						<option>Workers</option>
					</select>
				</td>
			</tr>
			<tr>
				<th>Address</th>
				<td><textarea rows="2" cols="50" 
				name="add" 	placeholder="Enter your full adress" value= '<?php echo $add;?>'></textarea></td>
			</tr>
			<tr>
				<th>Vaccine Center</th>
				<td>
					<select id="" name="center">
						<option selected disabled >--Select--</option>
						<option>Dhaka Community Medical Hospital</option>
						<option>Kurmitola Hospital</option>
						<option>Mugda General hospital</option>
						<option>Al Helal Specilized Hospital</option>
						<option>Metropolitan Medical Center Ltd.</option>
					</select>
				</td>
			</tr>
			<tr>
				<td style="padding-left: 80px;"><input type="submit" name="submit" value="Update"></td>
				<td><input type="reset" value="Reset"></td>
			</tr>			
		</table>
	</form>
	</body>
</html>