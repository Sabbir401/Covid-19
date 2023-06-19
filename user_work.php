<?php
	include 'connect.php';
	session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.rtl.min.css">
	<link rel="stylesheet" type="text/css" href="CSS/doctor.css">
	<script src="https://kit.fontawesome.com/11c476db2a.js" crossorigin="anonymous"></script>
	<link rel="icon" href="img/logo.png">
	<title>User Profile</title>
	<script type="text/javascript">
	    function redirectToPage(pageUrl) {
	      window.location.href = pageUrl;
	    }
	</script>
</head>
<body>
	<div class="header">
        <div class="profile">
          <img src="img/profile.png" alt="Profile Picture" class="profile-picture">
          <span class="username"><?php echo $_SESSION["Uname"] ?></span>
        </div>
        <button class="logout-button">
        	<a href="logout.php" class="logout">
				Log out
			</a>
        </button>
      </div>
      <div class="content">
        <button class="action-button" onclick="redirectToPage('user_view.php')">View Profile</button>
        <button class="action-button" onclick="redirectToPage('up_user.php')">Update Profile</button>
        <button class="action-button" onclick="redirectToPage('check_status.php')">Check Status</button>
        <button class="action-button" onclick="redirectToPage('dwn_card.php')">Download Vaccination Card</button>
      </div>
	
</body>
</html>