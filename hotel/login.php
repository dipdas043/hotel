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
               <li><a href="bookroom.php">Booking Room</a></li>
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
	 <div style="background:rgba(255,255,255,0.5);width:85%;">
	<form action="#" method="post">
	       <table>
	       	<tr>
	       		<td width="50%" height="50px">Username</td>
	       		<td width="50%" height="50px"><input type="text" name="un" placeholder="Enter Username" title="Enter Username"></td>
	       	</tr>
	       		<tr>
	       		<td width="50%" height="50px">Password</td>
	       		<td width="50%" height="50px"><input type="password" name="ps" placeholder="Enter Password" title="Enter Password"></td>
	       	</tr>
	       	<tr>
	       		<td align="right" colspan="2"><input type="submit" name="login" value="Login" style="width: 150px;height: 40px;border-radius: 30px;opacity: 0.7"></td>
	       	</tr>
	       </table>
	       </form>
	       <?php
           if(isset($_POST['login']))
           {
           	     $un=$_POST['un'];
           	     $ps=$_POST['ps'];
           	    $q1="select * from admin";
           	    $run=mysqli_query($db,$q1);
           	    $row=mysqli_fetch_array($run);
           	     $u=$row['un'];
           	     $p=$row['ps'];
           	     if($un==$u&& $ps==$p)
           	     {
           	     	header("Location:ahome.php");
           	     }
           	     else
           	     {
           	     	header("Location:index.php?Wrong User");
           	     }

           }
           
	       ?>	
	 </div>
	 </center>
	 </div>
	 </div>
  </body>
</html>