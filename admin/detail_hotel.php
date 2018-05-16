
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


$sql    = 	"SELECT * FROM tbl_hotel h , tbl_city c 
			 WHERE c.city_id= h.city_id AND h.hotel_id=$hotelId" ;
$result =	mysqli_query($con,$sql); 
$row 		= 	mysqli_fetch_assoc($result);

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>Dishes Recepies</title>
	<?php include('include/linker.php');?>
</head>

<body  class="content">

<div class="container-fluid">
    	<div class="row">
        	<?php include('include/header.php');?>
        </div>
        <div class="row" style="min-height:420px">
			<h1 class="text-capitalize text-center"> Hotel Detail</h1>
			<div class="col-md-offset-3 col-md-6 table-responsive">
				
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
							<th class="v_align">Manager Name</th>
							<td class="v_align"><?php echo $row['hotel_manager_name'];?></td>
						</tr>
						<tr>
							<th class="v_align">Email</th>
							<td class="v_align"><?php echo $row['hotel_email'];?></td>
						</tr>	
						<tr>
							<th class="v_align">Contact No.</th>
							<td class="v_align"><?php echo $row['hotel_contact'];?></td>
						</tr>
						<tr>
							<th class="v_align">Website</th>
							<td class="v_align"><?php echo $row['hotel_website'];?></td>
						</tr>
						<tr>
							<th class="v_align">Address</th>
							<td class="v_align"><?php echo $row['hotel_address'];?></td>
						</tr>	
						<tr>
							<th class="v_align">Google Map Location</th>
							<td class="v_align"><?php echo $row['hotel_location'];?></td>
						</tr>
						<tr>
							<th class="v_align">Stars</th>
							<td class="v_align"><?php 
										for($i=1; $i<=$row['hotel_star']; $i++){?>
										<i class="fa fa-star star_color" ></i>&nbsp;
										<?php } ?>
							</td>
						</tr>
						<tr>
							<th class="v_align">Recepie Pic</th>
							<td class="v_align"><img src="../upload-hotel/<?php echo $row['hotel_pic'];?>" width="100" height="100"/></td>
						</tr>
						<tr>
							<th class="v_align">Status</th>
							<td class="v_align"><?php echo $row['hotel_status'] ;?></td>
						</tr>
						
					</thead>
				</table>
				
					<p align="center">
                            <button type="button" name="btnEditRecepie" class="btn btn-success" onclick="window.location.href='edit_hotel.php?hotelId=<?php echo $row['hotel_id'];?>'" ><i class="fa fa-edit"></i>&nbsp; Edit hotel Info</button>&nbsp;
                            <button type="button" name="btnnback" class="btn btn-danger" onclick="window.location.href='list_hotel.php'"> <i class="fa  fa-arrow-left"></i>&nbsp;Back</button>
                            </p>
     		
			</div>
		</div>
        <div class="row">
        	<?php include('include/footer.php');?>
        </div>     
     </div>      
</body>
</html>