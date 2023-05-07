<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Doctor Registration</title>
	<link rel="stylesheet" type="text/css" href="CSS/signup.css">
	<link rel="icon" href="logo.png">
</head>
<body>
	<form class="box" action="doctor.php" method="POST">
		<h1>Doctor Registration</h1>
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
				<th>Degree</th>
				<td>
					<select name="deg"  required>
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
				<td><textarea rows="2" cols="50" name="add" placeholder="Enter your full adress"  required></textarea></td>
			</tr>
			<tr>
				<td style="padding-left: 80px;"><input type="submit" name="" value="Resister"  required></td>
				<td><input type="reset" value="Reset"></td>
			</tr>			
		</table>
	</form>
</body>
</html>