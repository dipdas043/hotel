<?php
include("conn.php");
$status=$_GET['status'];
if(mysqli_query($db,"update room set status='UNBook' where status==$status"))
{
	header("Location:roomdata.php");
}
else{
	header("Location:f2.php");
}
?>