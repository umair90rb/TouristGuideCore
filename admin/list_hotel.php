
<?php
require_once('include/config.php');

if(!isset($_SESSION['adminId']))
{
		header('location:login.php');
	}

$sql    = 	"SELECT * FROM tbl_hotel h , tbl_city c 
			 WHERE c.city_id= h.city_id  
			 ORDER BY hotel_id DESC" ;
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
        <div class="row" style="min-height:420px">
			
			<div class="col-md-12 table-responsive">
				<div class="button">
					<p align="left"><a href="add_hotel.php" class="btn btn-primary"><i class="fa fa-plus"></i>&nbsp; Add New Hotel</a></p>
     			</div>
				<table class="table table-striped table-bordered text-center ucsystm">
					<thead>
						<tr>
							<th width="43">Sr. No</th>
							<th width="62">City</th>
							<th width="75">Hotel Name</th>
							<th width="113">Manager Name </th>
							<th width="83">Email</th>
							<th width="91">Contact No.</th>
							<th width="70">Stars</th>
							<th width="100">Pic</th>
							<th width="42">Status</th>
							<th width="43">Action</th>
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
							<td class="v_align"><?php echo $row['hotel_manager_name'];?></td>
							<td class="v_align"><?php echo $row['hotel_email'];?></td>
							<td class="v_align"><?php echo $row['hotel_contact'];?></td>
							<td class="v_align">
										<?php 
										for($i=1; $i<=$row['hotel_star']; $i++){?>
										<i class="fa fa-star star_color" ></i>&nbsp;
										<?php } ?>
							</td>
							<td><img src="../upload-hotel/<?php echo $row['hotel_pic']?>" width="100" height="100"/></td>
							<td class="v_align"><?php echo $row['hotel_status'];?></td>
							<td class="table-cell asome_fonts v_align" align="center" >
								<a href="list_package.php?hotelId=<?php echo $row['hotel_id']?>">
									<i class="fa fa-folder-open"></i>
								</a>&nbsp;
								<a href="detail_hotel.php?hotelId=<?php echo $row['hotel_id']?>">
									<i class="fa fa-info"></i>
								</a>&nbsp;
								<a href="edit_hotel.php?hotelId=<?php echo $row['hotel_id']?>">
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
        <div class="row">
        	<?php include('include/footer.php');?>
        </div>     
     </div>
        
</body>
</html>