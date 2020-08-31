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
<div style="background-image: url('img/Admin.jpg');background-size:100% 700px; width: 100%;height: 700px; ">
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
	 <div id="banner">
	 </div>
	 <center>
	 <div id='f1'>
	 <div style="background:rgba(255,255,255,0.5);width:85%;">
	<form action="#" method="post">
	       <table>
	       	<tr>
	       		<td width="50%" height="50px">Email Id</td>
	       		<td width="50%" height="50px"><input type="text" name="email" placeholder="Enter Email Id" title="Enter Email Id"></td>
	       	</tr>
	       		<tr>
	       		<td width="50%" height="50px">Username</td>
	       		<td width="50%" height="50px"><input type="password" name="username" placeholder="Enter Username" title="Enter Username"></td>
	       	</tr>
	       	<tr>
	       		<td align="right" colspan="2"><input type="submit" name="login" value="Login" style="width: 150px;height: 40px;border-radius: 30px;opacity: 0.7"></td>
	       		<td align="right" colspan="2"><input type="submit" name="update" value="Update" style="width: 150px;height: 40px;border-radius: 30px;opacity: 0.7"></td>
	       	</tr>
	       </table>
	       </form>
	       <?php
           if(isset($_POST['login']))
           {
           	     $email=$_POST['email'];
           	     $username=$_POST['username'];
           	    $q1="select * from form";
           	    $run=mysqli_query($db,$q1);
           	    while($row=mysqli_fetch_array($run)){
           	     $em=$row['email'];
           	     $us=$row['username'];
           	     if($email==$em && $username==$us)
           	     {
           	     	header("Location:bookroom.php");
           	     }
           	     else
           	     {
           	     	header("Location:index.php?Wrong User");
           	     }

           }
           }
	       ?>
		   <?php
           if(isset($_POST['update']))
           {
           	     $email=$_POST['email'];
           	     $username=$_POST['username'];
           	    $q1="select * from form";
           	    $run=mysqli_query($db,$q1);
           	    while($row=mysqli_fetch_array($run)){
           	     $em=$row['email'];
           	     $us=$row['username'];
           	     if($email==$em && $username==$us)
           	     {
           	     	header("Location:updateroominfo.php");
           	     }
           	     else
           	     {
           	     	header("Location:index.php?Wrong User");
           	     }

           }
           }
	       ?>
     </div>		   
	 </div>
	 </center>
	 </div>
	 </div>
  </body>
</html>