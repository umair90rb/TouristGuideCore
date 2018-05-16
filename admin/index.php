
<?php
require_once('include/config.php');


if(!isset($_SESSION['adminId']))
{
		header('location:login.php');
	}
	
if(isset($_GET['logout']))
{
		unset($_SESSION['adminId']);
		unset($_SESSION['adminName']);
		session_destroy();
		header('Location:login.php');	
	}


?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Home | Admin</title>
	<link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/custom.css">

</head>

<body class="content">
	<div class="container-fluid">
    	<div class="row">
        	<?php include('include/header.php');?>
        </div>
        <div class="row home_page">
        <h1>WELCOME !</h1>
        <h2><?php echo $_SESSION['adminName'];?></h2>
        </div>
        <div class="row">
        	<?php include('include/footer.php');?>
        </div>
    </div>
</body>
</html>