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
		<div style="background-color: rgba(255,255,255,0.7)">
	<center>	
	<table>
	<tr>
	
	<th width="10%" height="50px">Name</th>
	<th width="10%" height="50px">User Name</th>
	<th width="10%" height="50px">Admin</th>
	<th width="10%" height="50px">City</th>
	<th width="10%" height="50px">District</th>
	<th width="10%" height="50px">Country</th>
	<th width="10%" height="50px">Email</th>
	</tr>
	<?php
	$q1="select * from form";
	$run=mysqli_query($db,$q1);
	while($row = mysqli_fetch_array($run))
	{
		$name=$row['name'];
		$username=$row['username'];
		$address=$row['address'];
		$city=$row['city'];
		$dis=$row['dis'];
		$country=$row['country'];
		$email=$row['email'];
	?>
	<tr>
	<td width="10%" height="50px"><center><?php echo $name; ?></center></td>
	<td width="10%" height="50px"><center><?php echo $username; ?></center></td>
	<td width="10%" height="50px"><center><?php echo $address; ?></center></td>
	<td width="10%" height="50px"><center><?php echo $city; ?></center></td>
	<td width="10%" height="50px"><center><?php echo $dis; ?></center></td>
	<td width="10%" height="50px"><center><?php echo $country; ?></center></td>
	<td width="10%" height="50px"><center><?php echo $email; ?></center></td>
	</tr>
	<?php
	}
	?>
	</table>
	</center>
	</div>
	</div>
  </div>
  </div>
</body>
</html>