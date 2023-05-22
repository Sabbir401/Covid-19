<?php
	include 'connect.php';

	if(isset($_GET['delid'])){
		$id=$_GET['delid'];

		$sql="DELETE FROM `user_reg` WHERE Id=$id";
		$res=mysqli_query($con,$sql);
		if ($res) {
			header('location:all_user.php');
		}else{
			die(mysqli_error($con));
		}
	}


?>