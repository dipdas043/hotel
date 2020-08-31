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
<div id="bg" style="background-image: url('img/hotel2.jpg'); width:100%;height:700px; ">
   <div id ="header">
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
	 <div id="banner">
	 <center><div id ="form">
	 <form action="room.php" method="post">
	 <table style="color:#DAF7A6; size:4;">
				<tr>
					<td>Room No.</td>
					<td><input type="text" name="roomno" placeholder="Enter Room No." title="Enter Room No."></td>
				</tr>
				<tr>
					<td>Room Type</td>
	                <td><select name="roomtype">
	                <option>Select room type</option>
	                <option>Sweet couple</option>
	                <option>Single Bed</option>
	                <option>Double Bed</option>
	                <option>Family</option>
	                <option>Vip</option>
	                <option>duplex</option>
	 </select></td>
				</tr>
				<tr>
					<td>Room Price</td>
					<td><input type="text" name="roomprice" placeholder="Enter Room Price" title="Enter Room price"></td>
				</tr>
               <td>
					<td><input style="width: 120px; height: 30px; border-radius: 20px; opacity: 0.7" type="submit" name="submit" value="submit"></td>
				</td>			
				
				
	 </table>
	 </form>
	<?php
         if(isset($_POST['submit']))
         {
         	$roomno=$_POST['roomno'];
         	$roomtype=$_POST['roomtype'];
         	$roomprice=$_POST['roomprice'];
         	if(mysqli_query($db,"insert into room(roomno,roomtype,roomprice) values('$roomno','$roomtype','$roomprice')"))
         	{
         		header("location: f1.php");
         	}
         	else
         	{
         		header("location: f2.php");
         	}
         }

		?>
	 </div></center>
		</div>
	</div>
	</div>
</body>

</html>