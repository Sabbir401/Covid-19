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
	<title>Assign Doctor</title>
	<link rel="stylesheet" type="text/css" href="CSS/signup.css">
	<link rel="icon" href="img/logo.png">
</head>
<body>
	<?php
		if(isset($_POST['submit'])){
			$aname=$_POST['aname'];
		    $dname=$_POST['dname'];
		    $date=$_POST['date'];
		    $month=$_POST['month'];
		    $year=$_POST['year'];
		    $time=$_POST['time'];
		    $center=$_POST['center'];


		    if($pass == $cpass){
		    	$sql= "INSERT INTO `manage_doc`(`Admin Name`, `Doctor Name`, `Date`, `Month`, `Year`, `Time`, `Center`) VALUES ('$aname','$dname','$date','$month','$year','$time','$center')";
			    mysqli_query($con, $sql);
			    ?>
			    <script>
			    	alert("Successfully Assigned.")
			    	window.location.href = "admin_work.php";
			    </script>
			    <?php
		    }	    	    
		}
	?>
	<form class="box" action="manage_doc.php" method="POST">
		<h1>Assign Doctor</h1>
		<table>
			<tr>
				<th>Admin Name</th>
				<td><input type="text" name="aname" value='<?php echo $admin;?>'></td>
			</tr>
			<tr>
				<th>Doctor Name</th>
				<td>
					<select id="" name="dname" required>
					 <option selected disabled >--select--</option>
					<?php 
						$sql= "Select * from doctor_reg";
						$res=mysqli_query($con,$sql);
						if($res){
							while($row=mysqli_fetch_assoc($res)){
								$Dname=$row['Name'];	
								echo "<option>$Dname</option>";		
							}
						} 
					?>
					</select>
				</td>
			</tr>
			<tr>
				<th>Date</th>
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
					<?php for($i=2020;$i<=2025;$i++) echo "<option>$i</option>"; ?>
					</select>
				</td>			
			</tr>
			<tr>
				<th>Time</th>
				<td>
					<select id="" name="time"  required>
					 <option selected disabled >---</option>
					<option>9:00am-1:00pm</option>
					<option>2:00pm-6:00pm</option>
					</select>
				</td>		
			</tr>
			<tr>
				<th>Center</th>
				<td>
					<select name="center"  required>
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
				<td style="padding-left: 80px;"><input type="submit" name="submit" value="Resister"  required></td>
				<td><input type="reset" value="Reset"></td>
			</tr>			
		</table>
	</form>
</body>
</html>