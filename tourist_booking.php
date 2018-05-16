<?php 
require_once('include/config.php');

if(!isset($_SESSION['userId']))
{
		header('location:tourist_login.php');
	}


$sql    	= 	"SELECT * FROM tbl_booking b, tbl_hotel_package p, tbl_hotel h, tbl_city c, tbl_tourist t
				 WHERE h.hotel_id=p.hotel_id AND c.city_id=h.city_id AND 
				 b.user_id = t.user_id AND p.package_id=b.package_id AND b.user_id=".$_SESSION['userId'];
$result 	= 	mysqli_query($con,$sql);

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
     <h2 align="center">Booking Status</h2>
   <div class="container-fluid">
        <div class="row" style="min-height:500px">
       	<div class="col-md-3">
		<?php include('include/left-col-tourist.php');?>
					
			</div>
  		<div class="col-md-9" >
                <div style="padding-right:25px; padding-bottom:25px;">
				 
					<div class="col-md-12 table-responsive">
				<div class="button">
					<p align="left">&nbsp;</p>
     			</div>
				<table class="table table-striped table-bordered text-center ucsystm">
					<thead>
						<tr>
							<th width="43">Sr. No</th>
							<th width="113">Package Name </th>
							<th width="83">Hotel</th>
							<th width="70">Amount</th>
							<th width="100">City</th>
							<th width="42">Booking Date</th>
							<th width="42">Booking Status</th>
							<th width="42">Action</th>
						</tr>
					</thead>
					<tbody>
                    <?php 
						 $i=1;
						 	while ($row = mysqli_fetch_assoc($result)) 
						 { 
					?>
						<tr >
							<td class="v_align" style="text-align:center"><?php echo $i++?></td>
							<td class="v_align"><?php echo $row['packge_name'];?></td>
							<td class="v_align"><?php echo $row['hotel_name'];?></td>
							<td class="v_align"><?php echo $row['package_amount'];?></td>
							<td class="v_align"><?php echo $row['city_name'];?></td>
							<td class="v_align"><?php echo formatMySQLDate($row['booking_date'],'d-m-Y h:i:s');?></td>
							<td class="v_align"><?php echo $row['booking_status'];?></td>
							<td class="asome_fonts v_align" align="center" >
								
								<a href="edit_booking.php?packageId=<?php echo $row['package_id']?>">
									<i class="fa fa-edit"></i>
								</a>&nbsp;
                    </td>
							
						</tr>
					<?php 
					} ?>	
					</tbody>
				</table>
			</div>
                </div>
               </div>	
	</div>
</div>
<div class="clear"> </div>
	<?php include('include/footer.php');?>

		<script src="js/bootstrap.js"> </script>
<!-- //for bootstrap working -->
</body>
</html>


