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
	 <div id="banner">
	 <div id ="form">
	 <form action="registration.php" method="post">
	 <table style="color:#DAF7A6; size:4;">
		 <tr>
           
				<tr>
					<td>Name</td>
					<td><input type="text" name="name" placeholder="Enter Name" title="Name"></td>
					<td>User Name</td>
					<td><input type="text" name="username" placeholder="Enter User Name" title="User Name"></td>
				</tr>
				 <td>Address</td>
					<td><input type="text" name="address" placeholder="Enter Address" title="Address"></td>
				</tr>
				<tr>
					<td>City</td>
					<td><select name="city">
						<option>--select--</option>
						<option>Dhaka</option>
						<option>Barishal</option>
						<option>Rajashahi</option>
						<option>Khulna</option>
						<option>Rangpur</option>
						<option>Chattagram</option>
						<option>Sylhet</option>
						<option>Mymensingh</option>
					</select></td>
				</tr>
				<tr>
					<td>District</td>
					<td><select name="dis">
						<option>--select--</option>
						<option>Dhaka</option>
						<option>Barishal</option>
						<option>Rajashahi</option>
						<option>Khulna</option>
						<option>Rangpur</option>
						<option>Chattagram</option>
						<option>Sylhet</option>
						<option>Mymensingh</option>
						
					</select></td>
				</tr>
				<tr>
					<td>Country</td>
					<td><select name="country">
						<option>--select--</option>
						<option>Bangladesh</option>
						<option>India</option>
						<option>Australia</option>
						<option>USA</option>
						<option>China</option>
						<option>Brazil</option>
						<option>Argentina</option>
						<option>Russia</option>
						<option>South Koeria</option>
						
					</select></td>
				</tr>
				<tr>
					<td>Enter E-mail</td>
					<td><input type="text" name="email" placeholder="Enter E-mail" title="E-mail"></td>
				</tr>
				<tr>
					<td><input style="width: 120px; height: 30px; border-radius: 20px; opacity: 0.7" type="submit" name="submit" value="submit"></td>	
                </tr>					
	 </table>
	 </form>
	 <?php
if(isset($_POST['submit']))
{
$name=$_POST['name'];	
$username=$_POST['username'];
$address=$_POST['address'];
$city=$_POST['city'];	
$dis=$_POST['dis'];	
$country=$_POST['country'];	
$email=$_POST['email'];	
if(mysqli_query($db,"insert into form(name,username,address,city,dis,country,email)value('$name','$username','$address','$city','$dis','$country','$email')"))	
	{
		header("location: f1.php");
	}
	else
	{
		echo"Data Error";
	}
}
?>
	 </div>
	 </div>
	 </div>
	 </div>
	 </div>
  </body>
</html>