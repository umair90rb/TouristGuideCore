<?php 
require_once('include/config.php');
if(!isset($_SESSION['userId']))
{
		header('location:tourist_login.php');
	}
	
$sql    	= 	"SELECT * FROM tbl_tourist WHERE user_id=".$_SESSION['userId'] ;
$result 	=	mysqli_query($con,$sql); 
$row 		= 	mysqli_fetch_assoc($result);

	
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
		<h1 align="center">Tourist Panel</h1>
   		
   <div class="container-fluid">
   		<div class="row" style="min-height:400px">
			<div class="col-md-3">
					<?php include('include/left-col-tourist.php');?>
			</div>
			
				 <div class="col-md-offset-1 col-md-6 table-responsive">
				
				<table class="table table-striped table-bordered text-center ucsystm" align="left">
					<thead>
						<tr>
							<th width="200" class="v_align">Name</th>
							<td width="300" class="v_align"><?php echo $row['user_name'];?></td>
						</tr>
						<tr>
							<th class="v_align">Email</th>
							<td class="v_align"><?php echo $row['user_email'];?></td>
						</tr>
						<tr>
							<th class="v_align">Contact No.</th>
							<td class="v_align"><?php echo $row['user_contact'];?></td>
						</tr>	
						<tr>
							<th class="v_align">Address</th>
							<td class="v_align"><?php echo $row['user_address'];?></td>
						</tr>
					</thead>
				</table>
				
					<p align="center">
                      <button type="button" name="btnEditProfile" class="btn btn-primary" onclick="window.location.href='edit_tourist.php'" >
					  <i class="fa fa-edit"></i>&nbsp; Edit Tourist Info</button>&nbsp;
                            
                            </p>
     		
			</div>
	
 	</div>
</div>	
   <div class="clear"> </div>
	<?php include('include/footer.php');?>

		<script src="js/bootstrap.js"> </script>
<!-- //for bootstrap working -->
</body>
</html>