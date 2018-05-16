<?php 
require_once('include/config.php');
if(!isset($_SESSION['hotelId']))
{
		header('location:hotel_login.php');
	}

$sql    	= 	"SELECT * FROM tbl_hotel h,  tbl_city c
				 WHERE h.hotel_id=".$_SESSION['hotelId'] . " AND c.city_id=h.city_id AND h.hotel_status= 'Active'" ;
$result 	=	mysqli_query($con,$sql); 
$row 		= 	mysqli_fetch_assoc($result);

	
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
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
<link href="css/custom.css" rel="stylesheet" type="text/css" media="all" />
<link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">

<!-- start-smoth-scrolling -->
<link href='http://fonts.googleapis.com/css?family=Raleway:400,100,200,300,500,600,700,800,900' rel='stylesheet' type='text/css'>

</head>
<body>
	<!-- header -->
<?php include('include/header.php');?>
	<!-- //header -->
    <div class="space"></div>
		<h1 align="center">Hotel Panel</h1>
   		
   <div class="container-fluid">
   		<div class="row" style="min-height:750px">
			<div class="col-md-3">
					<?php include('include/left-col-hotel.php');?>
			</div>
			
				 <div class="col-md-offset-1 col-md-6 table-responsive" sty>
				
				<table class="table table-striped table-bordered text-center ucsystm" align="left">
					<thead>
						<tr>
							<th width="200" class="v_align">City</th>
							<td width="300" class="v_align"><?php echo $row['city_name'];?></td>
						</tr>
						<tr>
							<th width="200" class="v_align">Hotel Name</th>
							<td width="300" class="v_align"><?php echo $row['hotel_name'];?></td>
						</tr>
						<tr>
							<th class="v_align">Email</th>
							<td class="v_align"><?php echo $row['hotel_email'];?></td>
						</tr>
						<tr>
							<th class="v_align">Manager Name</th>
							<td class="v_align"><?php echo $row['hotel_manager_name'];?></td>
						</tr>
						<tr>
							<th class="v_align">Contact No.</th>
							<td class="v_align"><?php echo $row['hotel_contact'];?></td>
						</tr>	
						<tr>
							<th class="v_align">Address</th>
							<td class="v_align"><?php echo $row['hotel_address'];?></td>
						</tr>
						<tr>
							<th class="v_align">Website</th>
							<td class="v_align"><?php echo $row['hotel_website'];?></td>
						</tr>
						<tr>
							<th class="v_align">Star</th>
							<td class="v_align">
										<?php 
											for($i=1; $i<=$row['hotel_star']; $i++){?>
											<i class="fa fa-star star_color" ></i>&nbsp;
										<?php } ?></td>
						</tr>
						<tr>
							<th class="v_align">Location</th>
							<td class="v_align"><?php echo $row['hotel_location'];?></td>
						</tr>
						<tr>
							<th class="v_align">Pic</th>
							<td class="v_align"><img src="upload-hotel/<?php echo $row['hotel_pic']?>" width="200" height="200"/></td>
						</tr>
					</thead>
				</table>
					<p align="center">
                      <button type="button" name="btnEditHotel" class="btn btn-primary" onclick="window.location.href='edit_hotel.php'" >
					  <i class="fa fa-edit"></i>&nbsp; Edit Hotel Info</button>&nbsp;    
                            </p>
     		
			</div>
	
 	</div>
</div>	
   <div class="clear"> </div>
	<?php include('include/footer.php');?>

		<script src="js/bootstrap.js"> </script>
<!-- //for bootstrap working -->
</body>
</html>