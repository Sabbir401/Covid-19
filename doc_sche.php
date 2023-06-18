<?php
	include 'connect.php';
	session_start();
	$Uname=$_SESSION["Uname"];
?>

<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.rtl.min.css">
	<link rel="stylesheet" type="text/css" href="CSS/doc_sche.css">
	<script src="https://kit.fontawesome.com/11c476db2a.js" crossorigin="anonymous"></script>
	<link rel="icon" href="img/logo.png">
	<title>Doctor Schedule</title>
</head>
<body>
	<div class="Container">
		<div class="welcome">
			<table>
				<tr>
					<th colspan="2">Welcome <?php echo $Uname?></th>
				</tr>
				<tr>
					<form action="doc_sche.php" method="POST">
						<td><input type="date" name="date" required></td>
						<td><input type="submit" name="submit" value="Search"></td>
					</form>
					
				</tr>
			
				<?php
					if(isset($_POST['submit'])){
						$sql= "SELECT * FROM doctor_reg WHERE `Username`='$Uname'";
						$res=mysqli_query($con,$sql);
						$row=mysqli_fetch_assoc($res);
						$name=$row['Name'];
						$date=$_POST['date'];
						$sql1 = "SELECT * FROM manage_doc WHERE `Doctor Name`='$name' AND `Date`='$date'";
						$res1=mysqli_query($con,$sql1);
						$row1=mysqli_fetch_assoc($res1);
						$time=$row1['Time'];
						$cen=$row1['Center'];
						echo '<tr>
								<th>Name</th>
								<td>'.$name.'</td>
							</tr><th>Date</th>
								 <td>'.$date.'</td>
							</tr><th>Time</th>
								 <td>'.$time.'</td>
							</tr><th>Center</t>
								 <td>'.$cen.'</td>
							</tr>';

					}
				?>

			</table>
		</div>
	</div>


</body>
</html>