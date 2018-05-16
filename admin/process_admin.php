<?php

require_once('include/config.php');

if(!isset($_SESSION['adminId']))
{
		header('location:login.php');
	}


// Add Admin Info
if(isset($_POST['btnAddAdmin']))
{
	$adminName 		=  $_POST['txtName'];
	$adminEmail 	=  $_POST['txtEmail'];
	$adminContact 	=  $_POST['txtContact'];
	$adminPass  	=  md5($_POST['txtPass']);
	
	$sql    		=  "INSERT INTO tbl_admin_login 		
						(admin_name,admin_email, admin_password, admin_contact_no, admin_login_status)
						VALUES
						('$adminName', '$adminEmail', '$adminPass', '$adminContact', NOW())";
	
	$result 		=  	mysqli_query($con,$sql);
	if($result)
	{			 
		header('Location: list_admins.php');
		}
	
}

//Edit Admin Info
if(isset($_POST['btnEditAdmin']))
{
	$adminId 		=  $_POST['hidId'];
	$adminName 		=  $_POST['txtName'];
	$adminEmail 	=  $_POST['txtEmail'];
	$adminContact 	=  $_POST['txtContact'];
	$adminPass  	=  $_POST['txtPass'];
	
	
	$sql2 			= 	"SELECT * FROM tbl_admin_login WHERE admin_id = $adminId";
	$result2 		= 	mysqli_query($con,$sql2);
	$row2 			= 	mysqli_fetch_assoc($result2);
	
		if($row2['admin_password']==$adminPass){

				$password=$row2['admin_password'];

			}else{

				$password=md5($_POST['txtPass']);

				}	
	
	$sql    		=  "UPDATE tbl_admin_login SET
						admin_name= '$adminName',admin_email='$adminEmail', admin_password='$password', 
						admin_contact_no='$adminContact', admin_login_status=NOW()
						WHERE admin_id=$adminId";
	
	$result 		=  	mysqli_query($con,$sql);
	if($result)
	{			 
		header('Location: list_admins.php');
		}
	
}

// DELETE


if (isset($_GET['adminId']) && (int)$_GET['adminId']>0)
{
	$adminId		=    $_GET['adminId'];


	$sql			=	"DELETE FROM tbl_admin_login
					 	WHERE admin_id=$adminId";
	$result 		=  	mysqli_query($con,$sql);
	header('Location: list_admins.php');		

}


?>