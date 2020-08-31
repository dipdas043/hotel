<!DOCTYPE html>
<html>
<head>
<style>
.gallery{
	margin: 10px 50px;
	
}
.gallery img{
	width: 400px;
	height: auto;
	filter: grayscale(100%);
	transition: 1s;
}
.gallery img:hover{
	 filter: grayscale(0);
	 transform: scale(1,1);
 }
</style>
<title>Home (Hotel Management)</title>
<link rel="stylesheet" type="text/css" href="css/style.css">
<link rel="stylesheet" type="text/css" href="css/lightbox.min.css">
<script type="text/javascript" src="jquery/lightbox-plus-jquery.min.js">
	
</script>
<link href="img/logo.jpg" type="img/icon" rel ="icon">
</head>
<body style="font-family:sans-serif;">
<div id ="full" style="width:100%;height:400px;">
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
			  </ul>
		 </div>
	 </div><br><br><br><br>
         <h1 style="text-align:center;color:forestgreen;margin:30px 0 50px;">Room Gallery</h1>
		 <center><div class="gallery">
		 <a href="roomimage/image1.jpg" data-lightbox="mygallery"data-title="VIP ROOM , price-25000"><img src="roomimage/image1s.jpg"></a>
		 <a href="roomimage/image2.jpg"data-lightbox="mygallery"data-title="SWEET COUPLE ROOM , price-15000"><img src="roomimage/image2s.jpg"></a>
		 <a href="roomimage/image3.jpg"data-lightbox="mygallery"data-title="FAMILY ROOM , price-20000"><img src="roomimage/image3s.jpg"></a>
		 <a href="roomimage/image4.jpg"data-lightbox="mygallery"data-title="DOUBLE BED ROOM , price-15000"><img src="roomimage/image4s.jpg"></a>
		 <a href="roomimage/image5.jpg"data-lightbox="mygallery"data-title="SINGLE BED ROOM , price-10000"><img src="roomimage/image5s.jpg"></a>
		 <a href="roomimage/image6.jpg"data-lightbox="mygallery"data-title="DUPLEX ROOM , price-25000"><img src="roomimage/image6s.jpg"></a>
		 </div></center>
 </div>
 
	 </body>
	 </html>