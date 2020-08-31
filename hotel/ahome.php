<?php
include("conn.php");
?>
<!DOCTYPE html>
<html>
<head>
	<title>Admin Login</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link href="img/logo.jpg" type="img/icon" rel="icon">
	
	
</head>
<body>
	<div id="full">
		<div  style="background-image: url('img/Admin.jpg');background-size: 100% 710px; width: 100%; height: 710px">
		<div id="header">
			 <?php
	include "hotelname.php";
?>
		
			<div id="nav">
				<ul id="a1">
				<li><a href="index.php">Home</a></li>
					<li><a href="ahome.php">Admin Home</a></li>
					<li><a href="room.php">Room Update</a></li>
					<li><a href="roomdata.php">Room Dateils</a></li>
					<li><a href="userdata.php">User Dateils</a></li>
				</ul>
			</div>
		</div>
		<div id="banner"><br><br><br><br><br><br><br><br><br><br><br>
			<h1 style="color:blue;text-align: center; ">Welcome Admin</h1>
		</div>
	<center>
	
	</center>
	</div>
  </div>
</body>

</html>