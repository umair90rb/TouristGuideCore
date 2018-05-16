
<?php
require_once('include/config.php');

if(!isset($_SESSION['adminId']))
{
		header('location:login.php');
	}

$sql    = 	"SELECT * FROM tbl_tourist" ;
$result =	mysqli_query($con,$sql); 

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>Tourist List</title>
	<?php include('include/linker.php');?>
</head>

<body  class="content">

<div class="container-fluid">
    	<div class="row">
        	<?php include('include/header.php');?>
        </div>
        <div class="row" style="min-height:400px">
			<div class="col-md-12 table-responsive">
				<div class="button">
					<p align="left"><a href="add_tourist.php" class="btn btn-primary"><i class="fa fa-plus"></i>&nbsp; Add New Tourist</a></p>
     			</div>
				<table class="table table-striped table-bordered text-center ucsystm">
					<thead>
						<tr>
							<th>SR. No</th>
							<th>Tourist Name</th>
							<th>Email</th>
							<th>Contact No</th>
							<th>Address</th>
							<th>Last Login</th>
							<th>Action</th>
						</tr>
					</thead>
					<tbody>
                    <?php 
						 $i=1;
						 	while ($row = mysqli_fetch_assoc($result)) 
						 { 
					?>
						<tr>
							<td class="v_align" style="text-align:center"><?php echo $i++?></td>
							<td class="v_align"><?php echo $row['user_name'];?></td>
							<td class="v_align"><?php echo $row['user_email'];?></td>
							<td class="v_align"><?php echo $row['user_contact'];?></td>
							<td class="v_align"><?php echo $row['user_address'];?></td>
							<td class="v_align"><?php echo formatMySQLDate($row['user_login_time'],'d-m-Y h:i:s');?></td>
							<td class="table-cell asome_fonts v_align" align="center" >
                    
								<a href="edit_tourist.php?userId=<?php echo $row['user_id'];?>">
									<i class="fa fa-edit"></i>
								</a>&nbsp;
								<a href="process_toursit.php?userId=<?php echo $row['user_id'];?>">
									<i class="fa fa-trash"></i>
								</a>
                        
                    </td>
							
						</tr>
					<?php } ?>	
					</tbody>
				</table>
			</div>
            
		</div>
        <div class="row">
        	<?php include('include/footer.php');?>
        </div>     
     </div>
        
</body>
</html>