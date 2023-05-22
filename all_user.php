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
			font-size: 18px;
			text-align: center;
		}
		tr:nth-child(even) {
			background-color: #D6EEEE;
		}
		th{
			background-color: #4988C8;
			border-radius: 5px;
		}
		.text{
			color: white;
			text-decoration: none;
		}
	</style>
</head>
<body>

	<h1 style="text-align: center; color: green; font-size: 40px;">All Register Doctors</h1>

	<table style="width:97%; margin: 10px;">
		<tr>
			<th>ID</th>
			<th>NID</th>
			<th>Name</th>
			<th>Email</th>
			<th>Username</th> 			
			<th>Birthdate</th>
			<th>Gender</th> 
			<th>Phone</th>
			<th>Occupation</th>
			<th>Address</th>
			<th>Center</th>
			<th>Operation</th>
		</tr>
		<?php
		$sql= "Select * from user_reg";
		$res=mysqli_query($con,$sql);
		if($res){
			while($row=mysqli_fetch_assoc($res)){
				$id=$row['Id'];
				echo '<tr>
				<td>'.$id.'</td>
				<td>'.$row['NID'].'</td>
				<td>'.$row['Name'].'</td>
				<td>'.$row['Email'].'</td>
				<td>'.$row['Username'].'</td>
				<td>'.$row['B_Date'].'-'.$row['B_Month'].'-'.$row['B_Year'].'</td>
				<td>'.$row['Gender'].'</td>
				<td>'.$row['Phone'].'</td>
				<td>'.$row['Occupation'].'</td>
				<td>'.$row['Vaccine Center'].'</td>
				<td>'.$row['Address'].'</td>
				<td>
				<button class="btn btn-primary"><a href="update_user.php?upid='.$id.'" class="text">Update</a></button>
				<button class="btn btn-danger"><a href="del_user.php?delid='.$id.'" class="text"> Delete</a></button>
				</td>
				</tr>';
			}
		}
		?>
		
	</table>

</body>
</html>

