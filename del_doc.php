<?php
	include 'connect.php';

	if(isset($_GET['delid'])){
		$id=$_GET['delid'];

		$sql="DELETE FROM `doctor_reg` WHERE Id=$id";
		$res=mysqli_query($con,$sql);
		if ($res) {
			header('location:all_doc.php');
		}else{
			die(mysqli_error($con));
		}
	}


?>