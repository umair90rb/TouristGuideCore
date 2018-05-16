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

$sql    	= 	"SELECT * FROM tbl_hotel 
				 WHERE hotel_id=$hotelId";
$result 	= 	mysqli_query($con,$sql);
$row 		= 	mysqli_fetch_assoc($result);

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>Edit Chef</title>
	<?php include('include/linker.php');?>

</head>

<body  class="content">
<div class="container-fluid">
    	<div class="row">
        	<?php include('include/header.php');?>
        </div>
        
        <div class="row inner" style="min-height:400px;">
        	<h1 class="text-capitalize text-center"> Add New Hotel</h1>
		<div class="col-md-offset-1 col-md-9 col-sm-8" >
                	<div style="padding-right:25px;">
				<form name="frmAdd" action="process_hotel.php" method="post" enctype="multipart/form-data">
					<input type="hidden" name="hidId" value="<?php echo $row['hotel_id'];?>" />
					<div class="row">
						<div class="col-md-offset-1 col-md-2">
							<label>City:</label>
						</div>
						<div class="col-md-9">
							<div style="margin-bottom: 25px" class="input-group">
								<span class="input-group-addon"><i class="fa fa-institution"></i></span>
								<select class="form-control" name="selCity" required>
									<?php echo CityOption($row['city_id']); ?>
								</select>                                   
							</div>
						</div>
					</div>
					
					<div class="row">
						<div class="col-md-offset-1 col-md-2">
							<label>Hotel Name:</label>
						</div>
						<div class="col-md-9">
							<div style="margin-bottom: 25px" class="input-group">
								<span class="input-group-addon"><i class="fa fa-building"></i></span>
								<input type="text" class="form-control" name="txtHotelName" placeholder="*Enter Hotel Name" value="<?php echo $row['hotel_name'];?>" required>   
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-offset-1 col-md-2">
							<label>Hotel Star:</label>
						</div>
						<div class="col-md-9">
							<div style="margin-bottom: 25px" class="input-group">
								<span class="input-group-addon"><i class="fa fa-star"></i></span>
								<input type="text" class="form-control" name="txtHotelStar" value="<?php echo $row['hotel_star'];?>" placeholder="*Enter Hotel Star like 4 , 5."  maxlength="1" required>                          
							</div>
						</div>
					</div>
					
					<div class="row">
						<div class="col-md-offset-1 col-md-2">
							<label>Hotel Address:</label>
						</div>
						<div class="col-md-9">
							<div style="margin-bottom: 25px" class="input-group">
								<span class="input-group-addon"><i class="fa fa-home"></i></span>
								
								<textarea class="form-control" name="txtAddress" placeholder="*Enter Hotel Address" rows="3" required><?php echo $row['hotel_address'];?></textarea>                          
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-offset-1 col-md-2">
							<label>Hotel Manger Name:</label>
						</div>
						<div class="col-md-9">
							<div style="margin-bottom: 25px" class="input-group">
								<span class="input-group-addon"><i class="fa fa-user"></i></span>
								<input type="text" class="form-control" name="txtMgmName"  value="<?php echo $row['hotel_manager_name'];?>" placeholder="*Enter Manager Name" required>                          
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-offset-1 col-md-2">
							<label>Hotel Email:</label>
						</div>
						<div class="col-md-9">
							<div style="margin-bottom: 25px" class="input-group">
								<span class="input-group-addon"><i class="fa fa-envelope-o"></i></span>
								<input type="text" class="form-control" name="txtEmail" value="<?php echo $row['hotel_email'];?>" placeholder="*Enter Email No." required>                          
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-offset-1 col-md-2">
							<label>Hotel Contact No.:</label>
						</div>
						<div class="col-md-9">
							<div style="margin-bottom: 25px" class="input-group">
								<span class="input-group-addon"><i class="fa fa-phone"></i></span>
								<input type="text" class="form-control" name="txtPhone" value="<?php echo $row['hotel_contact'];?>" placeholder="*Enter Contact No." required>                          
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-offset-1 col-md-2">
							<label>Hotel Website:</label>
						</div>
						<div class="col-md-9">
							<div style="margin-bottom: 25px" class="input-group">
								<span class="input-group-addon"><i class="fa fa-globe"></i></span>
								<input type="text" class="form-control" name="txtHotelWeb" value="<?php echo $row['hotel_website'];?>" placeholder="*Enter Website Url.">                          
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-offset-1 col-md-2">
							<label>Hotel Password:</label>
						</div>
						<div class="col-md-9">
							<div style="margin-bottom: 25px" class="input-group">
								<span class="input-group-addon"><i class="fa fa-lock"></i></span>
								<input type="password" class="form-control" name="txtPassword"  value="<?php echo $row['hotel_password'];?>" placeholder="*Enter Password" required>                          
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-offset-1 col-md-2">
							<label>Hotel Location:</label>
						</div>
						<div class="col-md-9">
							<div style="margin-bottom: 25px" class="input-group">
								<span class="input-group-addon"><i class="fa fa-map-marker"></i></span>
								<textarea class="form-control" name="txtLocation" placeholder="*Enter Hotel Address" rows="3" required><?php echo $row['hotel_location'];?></textarea>    
								                        
							</div>
						</div>
					</div>
					
					<div class="row">
						<div class="col-md-offset-1 col-md-2">
							<label>Picture:</label>
						</div>
						<div class="col-md-9">
							<div style="margin-bottom: 25px" class="input-group">
								<span class="input-group-addon"><i class="fa fa-file-picture-o"></i></span>
								<input type="file" class="form-control" name="hotelPic">                                       
							</div>
						</div>
					</div>
					
					
				<?php if($row['hotel_pic']!=''){ ?>
					<div class="row">
						<div class="col-md-offset-1 col-md-2">
							<label>&nbsp;</label>
						</div>
						<div class="col-md-9">
							<div style="margin-bottom: 25px" class="input-group">
								<img src="../upload-hotel/<?php echo $row['hotel_pic']?>" width="300" height="150"/>                                    
							</div>
						</div>
					</div>
					<?php }?>

					<div class="row">
						<div class="col-md-offset-1 col-md-2">
							<label>Hotel Status:</label>
						</div>
						<div class="col-md-9">
							<div style="margin-bottom: 25px" class="input-group">
								<input type="radio" value="Active" name="rdoption" 
								<?php if($row['hotel_status']=='Active'){echo 'checked="checked"';}?> />&nbsp; Active
								<input type="radio" value="Inactive" name="rdoption" <?php if($row['hotel_status']=='Inactive'){echo 'checked="checked"';}?>/>&nbsp; Inactive                                        
							</div>
						</div>
					</div>
					<div class="row">
						<div class="button">
							<p align="center">
                            <button type="submit" name="btnEditHotel" class="btn btn-primary"> <i class="fa fa-edit"></i>&nbsp;Edit Hotel</button>&nbsp;
                            <button type="button" name="btnnback" class="btn btn-danger" onclick="window.location.href='list_hotel.php'"> <i class="fa  fa-arrow-left"></i>&nbsp;Back</button>
                            </p>
     		</div>
					</div>
				</form>
                </div>
               </div>
		</div>
        
        <div class="row">
        	<?php include('include/footer.php');?>
        </div>
    </div>    
</body>
</html>