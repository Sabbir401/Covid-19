<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Public Registration</title>
	<link rel="stylesheet" type="text/css" href="CSS/signup.css">
	<link rel="icon" href="logo.png">
</head>
<body>
	<form class="box" action="user.php" method="POST">
		<h1>Public Registration</h1>
		<table>
			<tr>
				<th>NID</th>
				<td><input type="number" name="nid" placeholder="Example - 19825624603112948"></td>
			</tr>
			<tr>
				<th>Full Name</th>
				<td><input type="text" name="name" placeholder="Full Name"></td>
			</tr>
			<tr>
				<th>Email</th>
				<td><input type="email" name="mail" placeholder="email@gmail.com"></td>
			</tr>
			<tr>
				<th>Username</th>
				<td><input type="text" name="uname" placeholder="User Name"></td>
			</tr>
			<tr>
				<th>Password</th>
				<td><input type="password" name="pass" placeholder="Password"></td>
			</tr>
			<tr>
				<th>Confirm Password</th>
				<td><input type="password" name="cpass" placeholder="Retype password"></td>
			</tr>
			<tr>
				<th>Date of Birth</th>
				<td>
					<select id="" name="date">
					 <option selected disabled >Day</option>
					<?php for($i=1;$i<=31;$i++) echo "<option>$i</option>"; ?>
					</select>
					<select id="" name="month">
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
					<select id="" name="year">
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
				<td><input type="number" name="phone" placeholder="xxx-xxx-xxx"></td>
			</tr>
			<tr>
				<th>Occupation</th>
				<td>
					<select id="" name="occu">
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
				name="add" 	placeholder="Enter your full adress"></textarea></td>
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
				<td style="padding-left: 80px;"><input type="submit" name="" value="Resister"></td>
				<td><input type="reset" value="Reset"></td>
			</tr>			
		</table>
	</form>
</body>
</html>