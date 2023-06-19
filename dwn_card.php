<?php
	include 'connect.php';
	session_start();
	$Uname=$_SESSION["Uname"];

	$sql="SELECT * FROM `user_reg` WHERE Username='$Uname'";
	$res=mysqli_query($con, $sql);
	require_once'../pdf/tcpdf/tcpdf.php';
	$obj_pdf = new TCPDF('P', 'mm', 'A4', true, 'UTF-8');

	$obj_pdf->SetCreator(PDF_CREATOR);
	$obj_pdf->SetTitle("Test");
	$obj_pdf->SetHeaderData('', '', PDF_HEADER_TITLE, PDF_HEADER_STRING);
	$obj_pdf->setHeaderFont(array(PDF_FONT_NAME_MAIN, '', PDF_FONT_SIZE_MAIN));
	$obj_pdf->setFooterFont(array(PDF_FONT_NAME_MAIN, '', PDF_FONT_SIZE_MAIN));

	$obj_pdf->SetMargins(PDF_MARGIN_LEFT, '5', PDF_MARGIN_RIGHT);
	$obj_pdf->setPrintHeader(false);
	$obj_pdf->setPrintFooter(false);
	$obj_pdf->SetAutoPageBreak(True, 10);
	$obj_pdf->SetFont('helvetica', '', 12);
	$obj_pdf->Addpage();

	$html='<table>';
		// $html.='<tr><td>ID</td><td>Email</td><td>Designation</td></tr>';
		while ($row=mysqli_fetch_assoc($res)) {
			if($row['Status'] == "Yes"){
				$html.='<tr><td>NID</td><td>'.$row['NID'].'</td></tr><br>
						<tr><td>Name</td><td>'.$row['Name'].'</td></tr><br>
						<tr><td>Email</td><td>'.$row['Email'].'</td></tr><br>
						<tr><td>Date of Birth</td><td>'.$row['B_Date'].'</td></tr><br>
						<tr><td>Gender</td><td>'.$row['Gender'].'</td></tr><br>
						<tr><td>Phone</td><td>'.$row['Phone'].'</td></tr><br>
						<tr><td>Occupation</td><td>'.$row['Occupation'].'</td></tr><br>
						<tr><td>Address</td><td>'.$row['Address'].'</td></tr><br>
						<tr><td>Vaccine Center</td><td>'.$row['Vaccine Center'].'</td></tr><br>
						<tr><td>Vaccination Status</td><td>Vaccinated</td></tr>';	

					$ht='<h1 align="center">Vaccination Certificate<br><br></h1>';
					$obj_pdf->writeHTML($ht);
					$obj_pdf->writeHTML($html);
					$obj_pdf->Output("sample.pdf");		
			}else{
				?>
			    <script>
			    	alert("Your are not Vaccinated")
			    	window.location.href = "user_work.php";
			    </script>
			    <?php
				$html.="Your Didn't Vaccinated";
			}
		}

	


?>