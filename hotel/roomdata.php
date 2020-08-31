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
               <li><a href="ahome.php">Home</a></li>
			   <li><a href="ahome.php">Admin Home</a></li>
					<li><a href="room.php">Room Update</a></li>
					<li><a href="roomdata.php">Room Dateils</a></li>
					<li><a href="userdata.php">User Dateils</a></li>
			  </ul>
		 </div>
	 </div>
		<div id="banner"><br><br><br><br><br><br><br><br><br><br><br>
		<form action="#" method="post">
			<h1 style="color:blue;text-align: center; ">Welcome Admin</h1>
			<div style="background-color: rgba(255,255,255,0.6);">
			<table>
				<tr>
					<th width="20%" height="50px">Username</th>
					<th width="20%" height="50px">Room No</th>
                     <th width="20%" height="50px">Room Type</th>
                     <th width="20%" height="50px">Room Price</th>
                     <th width="20%" height="50px">Status</th>
                     <th width="20%" height="50px">Option</th>
				</tr>
				<?php
                 $q1="select * from roominfo,room where roominfo.roomno=room.roomno";
                 $run=mysqli_query($db,$q1);
                 while($row=mysqli_fetch_array($run))
                 {
                 	$username=$row['username'];
                 	$roomno=$row['roomno'];
                 	$roomtype=$row['roomtype'];
                 	$roomprice=$row['roomprice'];
                 	$status=$row['status'];
                   
                ?>
				<tr>
					<td width="20%" height="50px"><center><?php echo $username; ?></center></td>
					<td width="20%" height="50px"><center><?php echo $roomno; ?></center></td>
					<td width="20%" height="50px"><center><?php echo $roomtype; ?></center></td>
					<td width="20%" height="50px"><center><?php echo $roomprice; ?></center></td>
					<td width="20%" height="50px"><center><?php echo $status; ?></center></td>
					<td><input style="width: 40px; height: 30px; color:blue;" type="submit" name="co" value="CO"></td>	
					<td><input style="width: 40px; height: 30px; color:blue;" type="submit" name="ci" value="CI"></td>	
					</tr>
				<?php
			}
			if(isset($_POST['co']))
			{
				$q1="UPDATE room SET status='un book' where status='book'";
				if(mysqli_query($db,$q1))
					{
		               header("refresh:1; roomdata.php");
	                }
	              else
	                {
	                   header("refresh:1; f2.php");
	                }

			}
			?>
			<?php
			if(isset($_POST['ci']))
			{
				$q1="UPDATE room SET status='book' where status='un book'";
				if(mysqli_query($db,$q1))
					{
		               header("refresh:1; roomdata.php");
	                }
	              else
	                {
	                   header("refresh:1; f2.php");
	                }

			}
				?>
	
			</table>
			</form>
		</center>
		</div>
	<center>
	
	</center>
	</div>
  </div>
</body>

</html>