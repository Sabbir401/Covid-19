<?php
	include 'connect.php';
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.rtl.min.css">
	<style>
		table {
			font-size: 28px;
		}
		tr:nth-child(even) {
			background-color: #D6EEEE;
		}
		th{
			background-color: #4988C8;
			border-radius: 5px;
		}
	</style>
</head>
<body>

	<h1 style="text-align: center; color: green; font-size: 40px;">All Register Doctors</h1>

	<table style="width:97%; margin: 10px;">
		<tr>
			<th>ID</th>
			<th>Name</th>
			<th>Username</th> 
			<th>Email</th>
			<th>Birthdate</th>
			<th>Gender</th> 
			<th>Phone</th>
			<th>Degree</th>
			<th>Address</th>
			<th>Operation</th>
		</tr>
		<?php
		$sql= "Select * from doctor_reg";
		$res=mysqli_query($con,$sql);
		if($res){
			while($row=mysqli_fetch_assoc($res)){
				echo '<tr>
				<td>'.$row['Id'].'</td>
				<td>'.$row['Name'].'</td>
				<td>'.$row['Username'].'</td>
				<td>'.$row['Email'].'</td>
				<td>'.$row['B_Date'].'-'.$row['B_Month'].'-'.$row['B_Year'].'</td>
				<td>'.$row['Gender'].'</td>
				<td>'.$row['Phone'].'</td>
				<td>'.$row['Degree'].'</td>
				<td>'.$row['Address'].'</td>
				<td>
				<button class="btn btn-primary"><a href="update.php?upid='.$id.'" class="text-light">Update</a></button>
				<button class="btn btn-danger"><a href="delete.php?delid='.$id.'" class="text-light"> Delete</a></button>
				</td>
				</tr>';
			}
		}
		?>
		
	</table>

</body>
</html>

