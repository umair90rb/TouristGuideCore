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
    
   <div class="container">
        <div class="row">
        <h2 align="center">Tourist Signup Form</h2>
				<?php
				
					if (isset($_GET['msg']) && $_GET['msg']=='problem') { ?>
						<h3 class="errorText text-center" style="margin-left:20px;">Password Mismatch</h3>
				<?php } ?>
  		<div class="col-md-offset-1 col-md-9 col-sm-8" >
                <div style="padding-right:25px; padding-bottom:25px;">
				 
				<form name="frmAdd" action="tourist_process.php" method="post" enctype="multipart/form-data">
				
					<div class="row">
						<div class="col-md-offset-1 col-md-2">
							<label>Tourist Name :</label>
						</div>
						<div class="col-md-9">
							<div style="margin-bottom: 25px" class="input-group">
								<span class="input-group-addon"><i class="fa fa-user"></i></span>
								<input type="text" class="form-control" name="txtName" placeholder="*Enter Tourist Name" required>                                        
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-offset-1 col-md-2">
							<label> Email:</label>

						</div>
						<div class="col-md-9">
							<div style="margin-bottom: 25px" class="input-group">
								<span class="input-group-addon"><i class="fa fa-envelope"></i></span>
								<input type="Email" class="form-control" name="txtEmail" placeholder="*Enter Email"  required>                                       
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-offset-1 col-md-2">
							<label>Contact No :</label>
						</div>
						<div class="col-md-9">
							<div style="margin-bottom: 25px" class="input-group">
								<span class="input-group-addon"><i class="fa fa-phone"></i></span>
								<input type="text" class="form-control" name="txtContact" placeholder="*Enter Phone Number" 
								 required>                                        
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-offset-1 col-md-2">
							<label>Address :</label>
						</div>
						<div class="col-md-9">
							<div style="margin-bottom: 25px" class="input-group">
								<span class="input-group-addon"><i class="fa fa-home"></i></span>
								<textarea name="txtAddress" class="form-control" required placeholder="*Enter Address"></textarea>
								                                        
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-offset-1 col-md-2">
							<label>Password </label>
						</div>
						<div class="col-md-9">
							<div style="margin-bottom: 25px" class="input-group">
								<span class="input-group-addon"><i class="fa fa-lock"></i></span>
								<input type="password" class="form-control" name="txtPass" placeholder="*Enter Password"  required>                                        
							</div>
						</div>
					</div>
                    <div class="row">
						<div class="col-md-offset-1 col-md-2">
							<label>Confirm Password:</label>
						</div>
						<div class="col-md-9">
							<div style="margin-bottom: 25px" class="input-group">
								<span class="input-group-addon"><i class="fa fa-lock"></i></span>
								<input type="password" class="form-control" name="txtPassConfirm" placeholder="*Enter Confirm Password"  required>     
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-offset-4 col-md-6">
						<div class="button">
							<p align="center">
                            <button type="submit" name="btnsignUp" class="btn btn-primary"> 
                            <i class="fa fa-arrow-right"></i>&nbsp;Signup </button>&nbsp;
                            <button type="button" name="btnnback" class="btn btn-danger"> <i class="fa  fa-arrow-left"></i>&nbsp;Reset</button>
                            </p>
     					</div>
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


