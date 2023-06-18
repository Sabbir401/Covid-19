<?php
	include 'connect.php';
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.rtl.min.css">
	<link rel="icon" href="img/logo.png">
	<title>Assign Doctor</title>
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
		select{
			text-align: center;
			border: 3px solid #45D05A;
			border-radius: 20px;
			padding: 5px;
			color: #45D05A;
			margin-top: 10px;
		}
		input[type="submit"]{
			border:  0;
			background-color: #45D05A;
			margin: 20px auto;
			text-align: center;
			padding: 10px 30px;
			outline: none;
			color:  white;
			border-radius: 24px;
			cursor: pointer;
		}
		input[type="date"]{
			border: 0;
			background: none;
			margin: 5px auto;
			text-align: center;
			border: 3px solid #45D05A;
			padding: 8px 8px;
			width: 220px;
			outline: none;
			color:  black;
			border-radius: 24px;
			font-size: 15px;
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
	<form action="all_doc_post.php" method="POST">
		<td><input type="date" name="date" required></td>
		
		<input type="submit" name="submit" value="Search">
	</form>
	<h1 style="text-align: center; color: green; font-size: 40px;">All Assigned Doctors</h1>
	<table style="width:97%; margin: 10px;">
		<tr>
			<th>Admin Name</th>
			<th>Doctor Name</th>
			<th>Birthdate</th>
			<th>Time</th> 
			<th>Center</th>
		</tr>
		<?php
		if(isset($_POST['submit'])){
			$date=$_POST['date'];

			$sql= "SELECT * from manage_doc WHERE Date='$date' ";
			$res=mysqli_query($con,$sql);
			if($res){
				while($row=mysqli_fetch_assoc($res)){
					echo '<tr>
					<td>'.$row['Admin Name'].'</td>
					<td>'.$row['Doctor Name'].'</td>
					<td>'.$row['Date'].'</td>
					<td>'.$row['Time'].'</td>
					<td>'.$row['Center'].'</td>
					</tr>';
				}
			}
		}
		?>
		
	</table>

</body>
</html>

