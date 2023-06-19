<?php
  include 'connect.php';
  session_start();
  $Uname=$_SESSION["Uname"];

  $sql="SELECT * FROM `doctor_reg` WHERE Username='$Uname'";
  $res=mysqli_query($con, $sql);

  while ($row=mysqli_fetch_assoc($res)) {
    $name=$row['Name'];
    $email=$row['Email'];
    $date=$row['B_Date'];
    $gen=$row['Gender'];
    $phone=$row['Phone'];
    $deg=$row['Degree'];
    $add=$row['Address'];
  }
?>

<!DOCTYPE html>
<html>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>View Doctor Status</title>
  <link rel="icon" href="img/logo.png">
<head>
  <title>View Profile</title>
  <style>
    body {
      background-color: grey;
      font-family: Arial, sans-serif;
    }

    .container {
      margin: 0 auto;
      width: 400px;
      padding: 20px;
      background-color: #ffffff;
      box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
      border-radius: 10px;
      margin-top: 150px;
      font-size: 18px;
    }

    .profile-attribute {
      display: flex;
      margin-bottom: 10px;
    }

    .attribute-label {
      flex-basis: 140px;
      font-weight: bold;
      padding-right: 50px;
    }

    .attribute-value {
      flex-grow: 1;
    }

    h1 {
      color: #45D05A;
      text-align: center;
      margin-bottom: 20px;
    }
    .bt{
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
  <a href="doctor_work.php"><button class="bt">Back</button></a>
  <div class="container">
    <h1>View Doctor Profile</h1>
    <div class="profile-attribute">
      <div class="attribute-label">Name:</div>
      <div class="attribute-value"><?php echo $name; ?></div>
    </div>
    <div class="profile-attribute">
      <div class="attribute-label">Username:</div>
      <div class="attribute-value"><?php echo $Uname; ?></div>
    </div>
    <div class="profile-attribute">
      <div class="attribute-label">Email:</div>
      <div class="attribute-value"><?php echo $email; ?></div>
    </div>
    <div class="profile-attribute">
      <div class="attribute-label">Date of Birth:</div>
      <div class="attribute-value"><?php echo $date; ?></div>
    </div>
    <div class="profile-attribute">
      <div class="attribute-label">Gender:</div>
      <div class="attribute-value"><?php echo $gen; ?></div>
    </div>
    <div class="profile-attribute">
      <div class="attribute-label">Phone:</div>
      <div class="attribute-value"><?php echo $phone; ?></div>
    </div>
    <div class="profile-attribute">
      <div class="attribute-label">Degree:</div>
      <div class="attribute-value"><?php echo $deg; ?></div>
    </div>
    <div class="profile-attribute">
      <div class="attribute-label">Address:</div>
      <div class="attribute-value"><?php echo $add; ?></div>
    </div>
  </div>

</body>
</html>
