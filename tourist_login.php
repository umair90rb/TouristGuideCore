<?php 
require_once('include/config.php');
if(isset($_GET['logout']))
{
	unset($_SESSION['userId']);
	unset($_SESSION['userName']);
	session_destroy();
	header('location:tourist_login.php') ;
	
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
		<h1 align="center">Tourist Login</h1>
    	<h2 align="center">Login Here If You Have Account</h2>
				<?php
				
					if (isset($_GET['msg']) && $_GET['msg']=='problem') { ?>
						<h3 class="errorText text-center" style="margin-left:20px;">Wrong Email Or Password</h3>
				<?php } ?>
   <div class="container">
        <div class="row" style="min-height:400px">
  			
			<form action="tourist_process.php" method="post" name="frmlogin" >
			
			 <div class="col-md-offset-2 col-md-7">
			 
			 		<div class="row">
						<div class="col-md-offset-1 col-md-2">
							<label>Email </label>
						</div>
						<div class="col-md-9">
							<div style="margin-bottom: 25px" class="input-group">
								<span class="input-group-addon"><i class="fa fa-envelope-o"></i></span>
								<input type="email" class="form-control" name="txtEmail" placeholder="*Enter Email"  required>                                        
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
								<input type="password" class="form-control" name="txtPassword" placeholder="*Enter Password"  required>                                        
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-offset-4 col-md-6">
						<div class="button">
							<p align="center">
                            <button type="submit" name="btnLogin" class="btn btn-primary"> 
                            <i class="fa fa-arrow-right"></i>&nbsp;Tourist Login </button>&nbsp;
                            <button type="button" name="btnnback" class="btn btn-danger"> <i class="fa  fa-arrow-left"></i>&nbsp;Reset</button>
                            </p>
							<p>If you are new User Then Signup First <a  href="tourist_signup.php">SIGNUP</a></p>
     					</div>
						</div>	
					</div>
					
					
					
				</div>
				
			 </div>
		</form>
        </div>
    </div>
   <div class="clear"> </div>
	<?php include('include/footer.php');?>

		<script src="js/bootstrap.js"> </script>
<!-- //for bootstrap working -->
</body>
</html>