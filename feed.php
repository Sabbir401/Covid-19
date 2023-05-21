<?php
 $con=mysqli_connect("localhost","root","","covid-19");
 if(mysqli_connect_error())
 	echo "Something goes Wrong";
 else{
    $name=$_POST['name'];
    $rate=$_POST['rate'];
    $mail=$_POST['mail'];
    $age=$_POST['age'];
    $phone=$_POST['phone'];
    $msg=$_POST['msg'];
    
    $sql= "INSERT INTO `feedback`(`Full_Name`, `Experience`, `Email`, `Age`, `Phone`, `Message`) VALUES ('$name','$rate','$mail','$age','$phone','$msg')";
    mysqli_query($con, $sql);
    echo "Successfully registerd";

 }
 	


?>