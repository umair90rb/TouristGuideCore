
<?php
require_once('include/config.php');

if(!isset($_SESSION['adminId']))
{
		header('location:login.php');
	}

if (isset($_GET['hotelId']) && $_GET['hotelId'] > 0) {
	$hotelId = $_GET['hotelId'];
} else {

	header('Location: list_hotel.php');
}

$sql    = 	"SELECT * FROM tbl_hotel_package p, tbl_hotel h, tbl_city c
			 WHERE p.hotel_id= h.hotel_id  AND p.hotel_id=$hotelId  AND c.city_id=h.city_id
			 ORDER BY package_id DESC" ;
$result =	mysqli_query($con,$sql); 

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>Hotel</title>
	<?php include('include/linker.php');?>
</head>

<body  class="content">

<div class="container-fluid">
    	<div class="row">
        	<?php include('include/header.php');?>
        </div>
        <div class="row" style="min-height:470px">
			
			<div class="col-md-12 table-responsive">
				<div class="button">
					<p align="left"><a href="list_hotel.php" class="btn btn-primary"><i class="fa fa-arrow-left"></i>&nbsp; Back</a></p>
     			</div>
				<table class="table table-striped table-bordered text-center ucsystm">
					<thead>
						<tr>
							<th width="43">Sr. No</th>
							<th width="62">City</th>
							<th width="75">Hotel Name</th>
							<th width="113">Package Name </th>
							<th width="83">Day / Night Stay</th>
							<th width="91">Facilities</th>
							<th width="70">Amount</th>
							<th width="100">Pic</th>
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
							<td class="v_align"><?php echo $row['city_name'];?></td>
							<td class="v_align"><?php echo $row['hotel_name'];?></td>
							<td class="v_align"><?php echo $row['packge_name'];?></td>
							<td class="v_align"><?php echo $row['package_days_night'];?></td>
							<td class="v_align"><?php echo $row['package_facilities'];?></td>
							<td class="v_align"><?php echo $row['package_amount'];?></td>
							<td><img src="../upload-package/<?php echo $row['package_pic']?>" width="100" height="100"/></td>
							<td class="v_align"><?php echo $row['package_status'];?></td>
							
							
						</tr>
					<?php 
					} ?>	
					</tbody>
				</table>
			</div>
            
		</div>
        <div class="row">
        	<?php include('include/footer.php');?>
        </div>     
     </div>
        
</body>
</html>