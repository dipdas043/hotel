<!DOCTYPE html>
<html>
<head>
<title>Home (Hotel Management)</title>
<link rel="stylesheet" type="text/css" href="css/style.css">
<link href="img/logo.jpg" type="img/icon" rel ="icon">
</head>
<body>
<div id ="full">
<div style="background-image: url('img/hotel3.jpg');background-size:100% 700px; width: 100%;height: 700px; ">
   <div id ="header">
      <?php
	include "hotelname.php";
?>
          
         <div id="nav">
           <ul>
               <li><a href="index.php">Home</a></li>
               <li><a href="contact.php">Contact Us</a></li>
               <li><a href="userlogin.php">Booking Room</a></li>
               <li><a href="abouthotel.php">Our Hotel</a></li>
               <li><a href="help.php">Help</a></li>
               <li><a href="registration.php">Registration</a></li>
               <li><a href="login.php">Admin??</a></li>
			  </ul>
		 </div>
	 </div>
	 <div id="banner"><br><br><br><br><br><br><br><br><br><br>
	 <div id="cl"><input type="button" name="btn" id="btn"></div>
	 <center> <div style="background:rgba(255,255,255,0.8);width:85%;height:400px;">
	 <h2 align="left" style="color:#B1041A;padding:10px;"><u><i>Contact Information</i></u></h2>
	 <b><h3 align="left" style="color:#37FF1E"><a href="abouthotel.php">About Hotel</a></h3>
	 <h3 align="left" style="color:#0517F9"><a href="mainoffice.php">Main office address</a></h3>
	 <h3 align="left" style="color:#2C3E50"><a href="globaloffice.php">Global booking offices</a></h3></b>
	 <h2 align="left" style="color:#A313A6;padding:10px;"><u><i>Feedback section</i></u></h2>
	 <b><h3 align="left" style="color:#F80808"><a href="hotelfeedback.php">Hotel feedback</a></h3>
	 <h3 align="left" style="color:#B1C609"><a href="webfeedback.php">Website feedback</a></h3>
	 <h3 align="left" style="color:#FB8E05"><a href="sgtn4improve.php">Suggestions for improvment</a></h3></b>
	 </div>
	 </div>
	 </center>
	 </div>
	 </div>
  </body>
</html>