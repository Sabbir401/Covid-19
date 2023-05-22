<?php
	include 'nav.php';
	include 'connect.php';
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Medical History of Patient</title>
	<style type="text/css">
		.container{

		}
		.box{
			width: 500px;
			padding: 40px;
			padding-top: 10px;
			padding-top: 5px;
			background: white;
			border: 1px solid black;
			border-radius: 10px;
		}
		label{
			padding-bottom: 20px;
		}
	</style>
</head>
<body>
	<?php
	if(isset($_POST['submit'])){
		$fever=$_POST['fever'];
	    $aff=$_POST['aff'];
	    $pre=$_POST['pre'];
	    $cancer=$_POST['cancer'];
	    $stroke=$_POST['stroke'];
	    $med=$_POST['med'];
	    $other=$_POST['other'];
		
	    	$sql= "INSERT INTO `medical`( `Fever`, `Covid`, `Pressure`, `Cancer`, `Stroke`, `Medication`, `Other`) VALUES ('$fever','$aff','$pre','$cancer','$stroke','$med','$other')";
		    mysqli_query($con, $sql);
		    ?>
		    <script>
		    	alert("Successfully Updated.")
		    	window.location.href = "user_work.php";
		    </script>
		    <?php	    	    	    
		}
	?>
	<h1 align="center">Medical History of Patient</h1>
	<div class="container">
		<div class="box">
		<form>
			<label>Do you have any fever or other symptopms that could be due to COVID-19?<br></label>
				<input type="radio" name="fever" value="Yes"><label>Yes</label>
				<input type="radio" name="Fever" value="No"><label>No</label><br>
			<label>Are you Affected Previously by COVID-19?<br></label>
				<input type="radio" name="aff" value="Yes"><label>Yes</label>
				<input type="radio" name="aff" value="No"><label>No</label><br>
			<label>Do you have High Blood Pressure?<br></label>
				<input type="radio" name="pre" value="Yes"><label>Yes</label>
				<input type="radio" name="pre" value="No"><label>No</label><br>
			<label>Do you have cancer?<br></label>
				<input type="radio" name="cancer" value="Yes"><label>Yes</label>
				<input type="radio" name="cancer" value="No"><label>No</label><br>
			<label>Did you have any Stroke?<br></label>
				<input type="radio" name="stroke" value="Yes"><label>Yes</label>
				<input type="radio" name="stroke" value="No"><label>No</label><br>
			<label>Do you take nay medication regularly?<br></label>
				<input type="radio" name="med" value="Yes"><label>Yes</label>
				<input type="radio" name="med" value="No"><label>No</label><br>
			<label>If you have mor information please add in the box: </label><br>
			<textarea rows="2" cols="50" name="other" ></textarea><br>
			<input type="submit" name="submit" value="save">
		</form>

	</div>
	</div>
</body>
</html>

<?php
	include 'bot.php'
?>