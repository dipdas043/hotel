<?php
include("conn.php");
?>
<!DOCTYPE html>
<html>
<head>
<title>Home (Hotel Management)</title>
<link rel="stylesheet" type="text/css" href="css/style.css">
<link href="img/logo.jpg" type="img/icon" rel ="icon">
</head>
<body>
<div id ="full">
<div style="background-image: url('img/feedback.png');background-size:100% 700px; width: 100%;height: 700px; ">
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
		 <center>
	 <div id="banner"><br><br><br><br><br>
	 </div>
	 <div id="f2" >	  
	 <form action="#" method="post">
	 <table style="color:#DAF7A6; size:4;">
	 <table>
	 <tr>
					<th><h3 style="color:#C84510;"><b>Give your valuable feedback for our hotel website</b></h3></th>
					</tr>
					<tr>
					<td><input style="width:200px;height:75px;border-radius:40px"type="text" name="feedback" placeholder="Enter feedback" title="Hotel Feedback"></td>
					<td><input style="width: 80px; height: 30px; border-radius: 20px; opacity: 1;color:blue;" type="submit" name="submit" value="Submit"></td>	
				</tr>
				</table>
	 </form>
				<?php
if(isset($_POST['submit']))
{
$feedback=$_POST['feedback'];
if(mysqli_query($db,"insert into webfeedback(feedback)value('$feedback')"))	
	{
		header("location: f1.php");
	}
	else
	{
		header("location: f2.php");
	}
}
?>
			</div>
	 </div>	 
	 </div>
	 </center>
	 </div>
	 </div>
  </body>
</html>