<?php
include "conn.php";
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
			  </ul>
		 </div>
	 </div>
	 <center>
	 <div id="banner"><br><br><br><br><br>
	 </div>
	 <div id="f1">	  
	 <form action="#" method="post">
	 <table style="color:#DAF7A6; size:4;">
	 <table>
	 <tr>
	 <th width="17%" height="50px">Username</th>
	 <th width="17%" height="50px">Rome Type</th>
	 <th width="17%" height="50px">Cheak in date</th>
	 <th width="17%" height="50px">Cheak out date</th>
	 <th width="17%" height="50px">No. of members</th>
	 <th width="17%" height="50px">Room No.</th>
	 </tr>
	<tr>
	<td width="17%" height="50px"><center><input type="taxt" name="username"></center></td>
	 <td>
	 <center><select name="roomtype">
	 <option>Select what kind of room you need</option>
	 <option>Sweet couple</option>
	 <option>Single Bed</option>
	 <option>Double Bed</option>
	 <option>Family</option>
	 <option>Vip</option>
	 </select></center></td>
	 <td width="17%" height="50px"><center><input type="date" name="cid"></center></td>
	 <td width="17%" height="50px"><center><input type="date" name="cod"></center></td>
	 <td width="17%" height="50px"><center><input type="text" name="members"></center></td>
	 <td>
	 <center><select name="roomno">
	 <option>R1</option>
	 <option>R2</option>
	 <option>R3</option>
	 <option>R4</option>
	 <option>R5</option>
	 </select></center>
	 </td>
	 <td><input style="width: 80px; height: 30px; border-radius: 20px; opacity: 1;color:blue;" type="submit" name="book" value="Book"></td>	
      	
	 </tr>
	 </table>
	 </form>
	 <?php
if(isset($_POST['book']))
{
$username=$_POST['username'];
$roomtype=$_POST['roomtype'];	
$cid=$_POST['cid'];
$cod=$_POST['cod'];
$members=$_POST['members'];
$roomno=$_POST['roomno'];	
if(mysqli_query($db,"insert into roominfo(username,roomtype,cid,cod,members,roomno)value('$username','$roomtype','$cid','$cod','$members','$roomno')"))	
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