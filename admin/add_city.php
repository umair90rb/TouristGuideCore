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
	<title>Add City</title>
	<?php include('include/linker.php');?>

</head>

<body  class="content">
<div class="container-fluid">
    	<div class="row">
        	<?php include('include/header.php');?>
        </div>
        
        <div class="row inner" style="height:500px;">
        	<h1 class="text-capitalize text-center"> Add City</h1>
		<div class="col-md-offset-1 col-md-9 col-sm-8" >
                	<div style="padding-right:25px;">
				<form name="frmAdd" action="process_city.php" method="post" enctype="multipart/form-data">
					<div class="row">
						<div class="col-md-offset-1 col-md-2">
							<label>City Name :</label>
						</div>
						<div class="col-md-9">
							<div style="margin-bottom: 25px" class="input-group">
								<span class="input-group-addon"><i class="fa fa-user"></i></span>
								<input type="text" class="form-control" name="txtName" placeholder="*Enter City Name" 
								required>                                        
							</div>
						</div>
					</div>
					
					<div class="row">
						<div class="button">
							<p align="center">
                            <button type="submit" name="btnAddCity" class="btn btn-primary"> 
                            <i class="fa fa-plus"></i>&nbsp;Add City </button>&nbsp;
                            <button type="button" name="btnnback" class="btn btn-danger" onclick="window.location.href='list_city.php'"> <i class="fa  fa-arrow-left"></i>&nbsp;Back</button>
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
    
</form>
</body>
</html>