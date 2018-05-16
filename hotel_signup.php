<?php 
require_once('include/config.php');
?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
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
    
   <div class="container">
        <div class="row">
        <h2 align="center">Hotel Signup Form</h2>
				<?php
				
					if (isset($_GET['msg']) && $_GET['msg']=='problem') { ?>
						<h3 class="errorText text-center" style="margin-left:20px;">Password Mismatch</h3>
				<?php } ?>
  		<div class="col-md-offset-1 col-md-9 col-sm-8" >
                	<div style="padding-right:25px; padding-bottom:20px;">
				<form name="frmAdd" action="hotel_process.php" method="post" enctype="multipart/form-data">
					
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
							<label>Hotel Password:</label>
						</div>
						<div class="col-md-9">
							<div style="margin-bottom: 25px" class="input-group">
								<span class="input-group-addon"><i class="fa fa-lock"></i></span>
								<input type="password" class="form-control" name="txtConfirmPassword" placeholder="*Enter Password" required>                          
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
							<label>Hotel Picture:</label>
						</div>
						<div class="col-md-9">
							<div style="margin-bottom: 25px" class="input-group">
								<span class="input-group-addon"><i class="fa fa-file-picture-o"></i></span>
								<input type="file" class="form-control" name="hotelPic"  required>                                       
							</div>
						</div>
					</div>
					
					<div class="row">
						<div class="button">
							<p align="center">
                            <button type="submit" name="btnAddHotel" class="btn btn-primary"> <i class="fa fa-arrow-right"></i>&nbsp;Hotel Signup</button>&nbsp;
                            <button type="button" name="btnnback" class="btn btn-danger" onclick="window.location.href='hotel_login.php'"> <i class="fa  fa-arrow-left"></i>&nbsp;Back</button>
                            </p>
     		</div>
					</div>
				</form>
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


