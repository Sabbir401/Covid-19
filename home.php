<?php
   include 'nav.php';
?>
<!DOCTYPE html>
<html>
   <head>
      <meta charset="utf-8">
      <title>Covid-19 Vaccination System</title>
      <link rel="stylesheet" href="CSS/home.css">
      <link rel="icon" href="img/logo.png">
   </head>
   <body>
      <div class="slider-container">
         <span id="slider-image-1"></span>
         <span id="slider-image-2"></span>
         <span id="slider-image-3"></span>
         <span id="slider-image-4"></span>
         <div class="image-container">
            <img src="img/slider-1.jpg" class="slider-image">
            <img src="img/slider-2.jpg" class="slider-image">
            <img src="img/slider-3.jpg" class="slider-image">  
            <img src="img/slider-4.jpg" class="slider-image">  
         </div>
         <div class="button-container">
            <a href="#slider-image-1" class="slider-button"></a>
            <a href="#slider-image-2" class="slider-button"></a>
            <a href="#slider-image-3" class="slider-button"></a>   
            <a href="#slider-image-4" class="slider-button"></a>    
         </div>
      </div>
      <div class="helpline" align="center">
         <table cellspacing="25px">
            <tr><th colspan="4">Hotlines</th></tr>
            <tr>
               <td style="border: 3px solid green;">333<br>National Call Center</td>
               <td style="border: 3px solid red;">16263<br>Health Portal</td>
               <td style="border: 3px solid blue;">10655<br>IEDCR</td>
               <td style="border: 3px solid yellowgreen;">09666777222<br>COVID-19 Telehealth</td>
            </tr>
         </table>
      </div>

      <div class="process-container">
         <table  cellspacing="25px">
            <tr>
               <th colspan="3"><h1>The process of receiving the Covid-19 corona vaccine</h1><br></th>
            </tr>
            <tr>
               <td><img src="img/reg-1.jpg"></td>
               <td><img src="img/reg-2.jpg"></td>
               <td><img src="img/reg-3.jpg"></td>
            </tr>
            <tr>
               <th>Online Registration</th>
               <th>SMS Notification</th>
               <th>Vaccination</th>
            </tr>
            <tr>
               <td style="padding-bottom: 25px;">First, you have to complete the online registration by verifying your national identity card and correct mobile number through this portal.</td>
               <td style="padding-bottom: 25px;">After registering online, you will receive a text message on your mobile phone mentioning the date of vaccination and the name of the vaccination center.</td>
               <td style="padding-top: 25px;">Subject to receiving a text message on the mobile phone, you have to appear in person at the vaccination center on the specified date with the vaccine card, national identity card and signed consent form to receive the Covid-19 vaccine.</td>
            </tr>
            
         </table>
         
      </div>
      <br><br><br><br>
   </body>
</html>
<?php
   include 'bot.php';
?>