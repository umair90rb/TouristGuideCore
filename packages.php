<?php 
require_once('include/config.php');

if (isset($_GET['hotelId']) && $_GET['hotelId'] > 0) {
	$hotelId = $_GET['hotelId'];
	$query =' AND p.hotel_id='.$hotelId;
} else {

	$query ='';
}

$sql    = 	"SELECT * FROM tbl_hotel_package p, tbl_hotel h, tbl_city c
			 WHERE p.hotel_id= h.hotel_id ". $query ."  AND c.city_id=h.city_id
			 ORDER BY package_id DESC" ;
$result =	mysqli_query($con,$sql); 
 
?>
<!DOCTYPE html>
<html>
<head>
<title>Tourist Guide</title>
<!-- for-mobile-apps -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Pasta Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
		function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- //for-mobile-apps -->
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
<!-- start-smoth-scrolling -->
<link href='http://fonts.googleapis.com/css?family=Raleway:400,100,200,300,500,600,700,800,900' rel='stylesheet' type='text/css'>
</head>
	
<body>
<!-- header -->
	<?php include('include/header.php');?>
<!-- //header -->
<!-- single -->
	<div class="single">
	<div class="container-fluid">
		<h1>Our Packages</h1>
		<?php
		$i=1;
			while ($row = mysqli_fetch_assoc($result)) 
						 { 
		?>				 
		<h3>&nbsp;</h3>
		<div class="single-left">
			<img src="upload-package/<?php echo $row['package_pic'];?>" alt=" " style="width:100%; height:300px;" />
		</div>
		<div class="single-right">
			<p><strong>Hotel Name: </strong><?php echo $row['hotel_name'];?> - <?php echo $row['city_name'];?></p>
			<p><strong>Package Name: </strong><?php echo $row['packge_name'];?></p>
			<p><strong>Hotel Star: </strong><?php 
										for($i=1; $i<=$row['hotel_star']; $i++){?>
										<i class="fa fa-star star_color" ></i>&nbsp;
										<?php } ?></p>
			<p><strong>Stay: </strong><?php echo $row['package_days_night'];?></p>
			<p><strong>Facilities: </strong><?php echo $row['package_facilities'];?></p>
			<p><strong>Amount : </strong>PKR. <?php echo $row['package_amount'];?></p>
			 <div class="col-md-7">
			 <button class="accordion" 
			 onclick="window.location.href='tourist_process.php?hotelId=<?php echo $row['hotel_id'];?>&packageId=<?php echo $row['package_id'];?>'" 
			 style="text-align:center!important;">Book Now</button></div>
		</div>
		
		<div class="clearfix"> </div>
		<hr>
		<?php } ?>
	</div>
	</div>
<!-- //single -->
<!--- footer --->
	
	<div class="clear"> </div>
	<?php include('include/footer.php');?>
		<script src="js/bootstrap.js"> </script>
<!-- //for bootstrap working -->
</body>
</html>