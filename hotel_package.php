<?php 
require_once('include/config.php');

if(!isset($_SESSION['hotelId']))
{
		header('location:hotel_login.php');
	}


$sql    	= 	"SELECT * FROM tbl_hotel_package p, tbl_hotel h 
				 WHERE h.hotel_id=p.hotel_id AND p.hotel_id=".$_SESSION['hotelId'];
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
     <h2 align="center">Edit Hotel Information</h2>
   <div class="container-fluid">
        <div class="row" style="min-height:500px">
       	<div class="col-md-3">
		<?php include('include/left-col-hotel.php');?>
					
			</div>
  		<div class="col-md-9" >
                <div style="padding-right:25px; padding-bottom:25px;">
				 
					<div class="col-md-12 table-responsive">
				<div class="button">
					<p align="left"><a href="add_hotel_package.php" class="btn btn-primary"><i class="fa fa-arrow-left"></i>&nbsp; Add New Package</a></p>
     			</div>
				<table class="table table-striped table-bordered text-center ucsystm">
					<thead>
						<tr>
							<th width="43">Sr. No</th>
							<th width="113">Package Name </th>
							<th width="83">Day / Night Stay</th>
							<th width="91">Facilities</th>
							<th width="70">Amount</th>
							<th width="100">Pic</th>
							<th width="42">Status</th>
							<th width="42">Status</th>
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
							<td class="v_align"><?php echo $row['package_days_night'];?></td>
							<td class="v_align"><?php echo $row['package_facilities'];?></td>
							<td class="v_align"><?php echo $row['package_amount'];?></td>
							<td><img src="upload-package/<?php echo $row['package_pic']?>" width="100" height="100"/></td>
							<td class="v_align"><?php echo $row['package_status'];?></td>
							<td class="asome_fonts v_align" align="center" >
								
								<a href="edit_hotel_package.php?packageId=<?php echo $row['package_id']?>">
									<i class="fa fa-edit"></i> Edit
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


