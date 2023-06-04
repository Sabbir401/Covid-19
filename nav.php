<!DOCTYPE html>
<html>
   <head>
      <meta charset="utf-8">
      <title>Covid-19 Vaccination System</title>
      <link rel="stylesheet" href="CSS/nav.css">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css" integrity="sha512-1sCRPdkRXhBV2PBLUdRb4tMg1w2YPf37qatUFeS7zlBy7jJI8Lf4VHwWfZZfpXtYSLy85pkm9GaYVYMfw5BC1A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
      <link rel="icon" href="img/logo.png">
   </head>
   <body>
      <nav>
         <label class="logo"><a href="home.php"><img src="img/covid.jpg"></a></label>
         <ul>
            <li><a class="active" href="home.php">Home</a></li>
            <li>
               <a href="#">Registration
               <i class="fas fa-caret-down"></i>
               </a>
               <ul>
                  <li><a href="admin_signup.php" target="_blank">Admin</a></li>
                  <li><a href="doctor_signup.php" target="_blank">Doctor</a></li>
                  <li><a href="user_signup.php" target="_blank">Public</a></li>
               </ul>
            </li>
            <li>
               <a href="#">Login As
               <i class="fas fa-caret-down"></i>
               </a>
               <ul>
                  <li><a href="admin_login.php" target="_blank">Admin</a></li>
                  <li><a href="doctor_login.php" target="_blank">Doctor</a></li>
                  <li><a href="user_login.php" target="_blank">Public</a></li>
               </ul>
            </li>
            <li><a href="faq.php">FAQ</a></li>
            <li><a href="feedback.php">Feedback</a></li>
         </ul>
      </nav>
   </body>
</html>