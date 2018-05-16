<?php
require_once('include/config.php');

if(!isset($_SESSION['adminId']))
{
		header('location:login.php');
	}

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>Add Hotel</title>
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
					
					<div class="row">
						<div class="col-md-offset-1 col-md-2">
							<label>City:</label>
						</div>
						<div class="col-md-9">
							<div style="margin-bottom: 25px" class="input-group">
								<span class="input-group-addon"><i class="fa fa-institution"></i></span>
								<select class="form-control" name="selCity" required>
									<?php echo CityOption(); ?>
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
								<input type="text" class="form-control" name="txtHotelName" placeholder="*Enter Hotel Name" required>   
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
								<input type="text" class="form-control" name="txtHotelStar" placeholder="*Enter Hotel Star like 4 , 5."  maxlength="1" required>                          
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
								
								<textarea class="form-control" name="txtAddress" placeholder="*Enter Hotel Address" rows="3" required></textarea>                          
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
								<input type="text" class="form-control" name="txtMgmName" placeholder="*Enter Manager Name" required>                          
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
								<input type="text" class="form-control" name="txtEmail" placeholder="*Enter Email No." required>                          
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
								<input type="text" class="form-control" name="txtPhone" placeholder="*Enter Contact No." required>
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
								<input type="text" class="form-control" name="txtHotelWeb" placeholder="*Enter Website Url.">                          
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
								<input type="password" class="form-control" name="txtPassword" placeholder="*Enter Password" required>                          
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
								 <textarea class="form-control" name="txtLocation" placeholder="*Enter Google Map Location" rows="3" required></textarea>  
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
								<input type="file" class="form-control" name="hotelPic"  required>                                       
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-offset-1 col-md-2">
							<label>Hotel Status:</label>
						</div>
						<div class="col-md-9">
							<div style="margin-bottom: 25px" class="input-group">
								<input type="radio" value="Active" name="rdoption" checked="checked"/>&nbsp; Active
								<input type="radio" value="Inactive" name="rdoption"/>&nbsp; Inactive                                        
							</div>
						</div>
					</div>
					<div class="row">
						<div class="button">
							<p align="center">
                            <button type="submit" name="btnAddHotel" class="btn btn-primary"> <i class="fa fa-plus"></i>&nbsp;Add Hotel</button>&nbsp;
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