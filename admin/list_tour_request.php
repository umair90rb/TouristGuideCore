
<?php
require_once('include/config.php');

if(!isset($_SESSION['adminId']))
{
		header('location:login.php');
	}


$sql    	= 	"SELECT * FROM tbl_booking b, tbl_hotel_package p, tbl_hotel h, tbl_city c, tbl_tourist t
				 WHERE h.hotel_id=p.hotel_id AND c.city_id=h.city_id AND 
				 b.user_id = t.user_id AND p.package_id=b.package_id AND p.hotel_id=h.hotel_id
				 ORDER BY booking_id DESC";
$result 	= 	mysqli_query($con,$sql);


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
        <div class="row" style="min-height:420px">
			
			<div class="col-md-12 table-responsive">
				<div class="button">
					<p align="left"></p>
     			</div>
				<table class="table table-striped table-bordered text-center ucsystm">
					<thead>
						<tr>
							<th width="43">Sr. No</th>
							<th width="70">Hotel / City</th>
							<th width="113">Package Name </th>
							<th width="83">Tourist Name</th>
							<th width="83">Email</th>
							<th width="83">Contact</th>
							<th width="42">Booking Date</th>
							<th width="42">Booking Status</th>
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
							<td class="v_align"><?php echo $row['hotel_name'];?> / <?php echo $row['city_name'];?> </td>
							<td class="v_align"><?php echo $row['packge_name'];?></td>
							<td class="v_align"><?php echo $row['user_name'];?></td>
							<td class="v_align"><?php echo $row['user_email'];?></td>
							<td class="v_align"><?php echo $row['user_contact'];?></td>
							<td class="v_align"><?php echo formatMySQLDate($row['booking_date'],'d-m-Y h:i:s');?></td>
							<td class="v_align"><?php echo $row['booking_status'];?></td>
							
                    </td>
							
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