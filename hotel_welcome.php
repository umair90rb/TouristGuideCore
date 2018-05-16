<?php 
require_once('include/config.php');
if(!isset($_SESSION['hotelId']))
{
		header('location:hotel_login.php');
	}
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
		<h1 align="center">Hotel Panel</h1>
   		
   <div class="container-fluid">
   		<div class="row" style="min-height:400px">
			<div class="col-md-3">
					<?php include('include/left-col-hotel.php');?>
			</div>
			<div class="col-md-9 middle_section">
				 <p class="text-center">WELCOME <?php echo $_SESSION['hotelName'];?> ! </p>
			</div>
 	</div>
</div>	
   <div class="clear"> </div>
	<?php include('include/footer.php');?>

		<script src="js/bootstrap.js"> </script>
<!-- //for bootstrap working -->
</body>
</html>