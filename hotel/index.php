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
<div style="background-image: url('img/hotel1.jpg'); width: 100%;height: 600px; ">
   <div id ="header">
      <?php
	include "hotelname.php";
?>
         <div id="nav">
           <ul>
               <li><a href="index.php">Home</a></li>
               <li><a href="contact.php">Contact Us</a></li>
               <li><a href="userlogin.php">Booking Room</a></li>
               <li><a href="roomdetails.php">View Rooms</a></li>
               <li><a href="help.php">Help</a></li>
               <li><a href="registration.php">Registration</a></li>
               <li><a href="login.php">Admin??</a></li>
			  </ul>
		 </div>
	 </div>
	 <div id="banner"><br><br><br><br><br><br>
	 </div>
	 </div>
	 <div id="f1">
	 <form action="#" method="post">
	 <center><table>
	 <tr>
	 <th width="20%" height="50px">Room Type</th>
	 <th width="20%" height="50px">Cheak in date</th>
	 <th width="20%" height="50px">Cheak out date</th>
	 <th width="20%" height="50px">Room</th>
	 <td rowspan ="2"><input type= "Submit" value= "Cheak" name= "cheak"></td>
	 </tr>
	 <tr>
	 <td width="20%" height="50px">
	 <center><select name="roomtype">
	 <option>Select what kind of room you need</option>
	 <option>Sweet couple</option>
	 <option>Single Bed</option>
	 <option>Double Bed</option>
	 <option>Family</option>
	 <option>Vip</option>
	 <option>duplex</option>
	 </select></center></td>
	 <td width="20%" height="50px"><center><input type="date" name="cid"></center></td>
	 <td width="20%" height="50px"><center><input type="date" name="cod"></center></td>
	 <td width="20%" height="50px">
	 <center><select name="roomno">
	 <option>Secect Room No</option>
	 <option>R1</option>
	 <option>R2</option>
	 <option>R3</option>
	 <option>R4</option>
	 <option>R5</option>
	 </select></center>
	 </td>
	 </tr>
	 </table></center>
	 </form>
	 <?php
           if(isset($_POST['cheak']))
           {
           	     $roomtype=$_POST['roomtype'];
           	     $cid=$_POST['cid'];
           	     $cod=$_POST['cod'];
           	     $roomno=$_POST['roomno'];
           	    $q1="select * from roominfo,room";
           	    $run=mysqli_query($db,$q1);
           	    while($row=mysqli_fetch_array($run)){
           	    $rt=$row['roomtype'];
           	     $ci=$row['cid'];
           	     $co=$row['cod'];
           	     $rn=$row['roomno'];
           	     if($roomtype==$rt && $cid==$ci && $cod==$co && $rn==$roomno && room.status=='un book' )
           	     {
           	     	header("Location:jquery/jsbook.php");
           	     }
           	     else
           	     {
           	     	header("Location:jquery/jsnotbook.php");
           	     }

           }
           }
	       ?>	
	 </div>
	 <div id="wc">
	 <h1 align= "center"> <font color="#08F1B0">Welcome to Hotel T for Three</font></h1>
	 <center><font size="4"color="#F10808">
	Hotel T for Three is one of the biggest hotel in cox's bazar, Bangladesh.<br> If you wanna enjoy your vacation
    come to our hotel, and you will enjoy the view of sea also.<br> We also asure you our best efforts to make your
	vacation more enjoyable. 
</font>
<h2 style="color: #12F409">Our Hotel</h2>
</center>	
	 </div>
	 <div id="g1">
	 <div id ="hs"><img src="img/hs.jpg" width="100%">
	 <center>
	 <h2><font color="#0A0AE9">Swimming Pool</font></h2>
	 <font color="#1E6F69">
	 Swimming Pool is open from 8am to 6pm.<br>
	 You can take bath and also enjoy the view<br>
	 of see from here.We also provide juss which<br>
	 is free.<br>
	 </font>
	 </center>
	 </div>
	 <div id ="hb"><img src="img/hb.jpg" width="100%">
	  <center>
	 <h2><font color="#F802EA">Bedroom</font></h2>
	 <font color="#F5BFF4">
	 We provide single room ,Double room,<br>
	 VIP room and for newly married couple,<br>
	 we have sweet couple room.To get offers,<br>
	 book your room today and enjoy the services.<br>
	 </font>
	 </center>
	 </div>
	 <div id ="hr"><img src="img/hr.jpg" width="100%">
	  <center>
	 <h2><font color="#0B9A98">Resturent</font></h2>
	 <font color="#547887">
	 If you are tired after having a nice day<br>
	 and want to take some food also enjoy the evening look<br>
	 of the sea, came to our resturent.<br>
	 We provide sea fishes,Chines,Italian,Indian<br>
	 and of crouse our deshi foods.<br>
	 </font>
	 </center>
	 </div>
	 <div id="video">
	<iframe src="https://www.youtube.com/embed/fI4_vBdFBL4?playlist=ZZfxkGsrwdA,ru0K8uYEZWw,H7gh2fmdjCU&loop=3" width="100%" height="250px">
</iframe>
	</div>
	 </div>
	 <h1 style="color:#F91907;font-family:courier;text-align:center;background-color:#92A942">WE DO NOT HAVE ANY BRANCHES!</h1>	 
	 </div>
	 </div>
  </body>
</html>