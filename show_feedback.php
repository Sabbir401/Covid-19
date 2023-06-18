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
		.btn{
			background-color: #88CEEB;
		    border: 1px solid black;
		    border-radius: 5px;
		    padding: 5px;
		    color: black;
		    cursor: pointer;
		    margin: 10px;
		}
	</style>
</head>
<body>
	<a href="admin_work.php"><button class="btn">Back</button></a>
	<h1 style="text-align: center; color: green; font-size: 40px;">All Feedbacks</h1>

	<table style="width:97%; margin: 10px;">
		<tr>
			<th>Name</th>
			<th>Experience</th> 
			<th>Email</th>
			<th>Age</th>
			<th>Phone</th>
			<th>Message</th>
		</tr>
		<?php
		$sql= "Select * from feedback";
		$res=mysqli_query($con,$sql);
		if($res){
			while($row=mysqli_fetch_assoc($res)){
				echo '<tr>
				<td>'.$row['Full_Name'].'</td>
				<td>'.$row['Experience'].'</td>
				<td>'.$row['Email'].'</td>
				<td>'.$row['Age'].'</td>
				<td>'.$row['Phone'].'</td>
				<td>'.$row['Message'].'</td>
				</tr>';
			}
		}
		?>
		
	</table>

</body>
</html>

