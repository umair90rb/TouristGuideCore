<?php 
require_once('include/config.php');

if(!isset($_SESSION['hotelId']))
{
		header('location:hotel_login.php');
	}


$sql    	= 	"SELECT * FROM tbl_hotel 
				 WHERE hotel_id=".$_SESSION['hotelId'];
$result 	= 	mysql_query($sql);
$row 		= 	mysql_fetch_assoc($result);

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
     <h2 align="center">Add New Package </h2>
   <div class="container-fluid">
        <div class="row">
       	<div class="col-md-3">
		<?php include('include/left-col-hotel.php');?>
					
			</div>
  		<div class="col-md-8" >
                <div style="padding-right:25px; padding-bottom:25px;">
				 
				<form name="frmEdit" action="hotel_process.php" method="post" enctype="multipart/form-data">
					<div class="row">
						<div class="col-md-offset-1 col-md-2">
							<label>Packge Name:</label>
						</div>
						<div class="col-md-9">
							<div style="margin-bottom: 25px" class="input-group">
								<span class="input-group-addon"><i class="fa fa-building"></i></span>
								<input type="text" class="form-control" name="txtpackageName" placeholder="*Enter Package Name" required>   
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-offset-1 col-md-2">
							<label>Day / Night Stay:</label>
						</div>
						<div class="col-md-9">
							<div style="margin-bottom: 25px" class="input-group">
								<span class="input-group-addon"><i class="fa fa-sun-o"></i></span>
								<input type="text" class="form-control" name="txtstay" placeholder="*Enter day/night stay"   required>                          
							</div>
						</div>
					</div>
					
					<div class="row">
						<div class="col-md-offset-1 col-md-2">
							<label>Package Facilities:</label>
						</div>
						<div class="col-md-9">
							<div style="margin-bottom: 25px" class="input-group">
								<span class="input-group-addon"><i class="fa fa-home"></i></span>
								<textarea class="form-control" name="txtFacilites" placeholder="*Enter Facilities" rows="3" required></textarea>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-offset-1 col-md-2">
							<label>Package Amount</label>
						</div>
						<div class="col-md-9">
							<div style="margin-bottom: 25px" class="input-group">
								<span class="input-group-addon"><i class="fa fa-money"></i></span>
								<input type="text" class="form-control" name="txtAmount"  placeholder="*Enter Amount" required>                          
							</div>
						</div>
					</div>
					
					<div class="row">
						<div class="col-md-offset-1 col-md-2">
							<label>Package Status:</label>
						</div>
						<div class="col-md-9">
							<div style="margin-bottom: 25px" class="input-group">
								<input type="radio" value="Active" name="rdoption" checked="checked"/>&nbsp; Active
								<input type="radio" value="Inactive" name="rdoption"/>&nbsp; Inactive                                        
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
								<input type="file" class="form-control" name="packagePic">                                       
							</div>
						</div>
					</div>

					<div class="row">
						<div class="button">
							<p align="center">
                            <button type="submit" name="btnAddPackage" class="btn btn-primary"> <i class="fa fa-edit"></i>&nbsp;Add Package info</button>&nbsp;
                            <button type="reset" name="btnback" class="btn btn-danger"> <i class="fa fa-trash"></i>&nbsp;Reset</button>&nbsp;
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


