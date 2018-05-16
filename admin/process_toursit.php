<?php

require_once('include/config.php');

if(!isset($_SESSION['adminId']))
{
		header('location:login.php');
	}


if(isset($_POST['btnAddUser']))

{
	$userName 		=  $_POST['txtName']; 
	$userEmail 		=  $_POST['txtEmail'];
	$userContact 	=  $_POST['txtContact'];
	$userAddress	=  $_POST['txtAddress'];
	$userPass  		=  md5($_POST['txtPass']);
	$userStatus		=   $_POST['rdoption'];
	
	
	$sql = "INSERT INTO tbl_tourist
		   (user_name, user_email, user_contact, user_address, user_status, user_password, user_login_time) 
		   VALUES ('$userName', '$userEmail', '$userContact', '$userAddress', '$userStatus', '$userPass', NOW())";
		  
		   $result = mysqli_query($con,$sql);
	
	if ($result) {
		
		header('Location: list_tourist.php');	
	} 
	   
}



//Edit User Info
if(isset($_POST['btnEditUser']))
{
	$userId 		=  $_POST['hidId'];
	$userName 		=  $_POST['txtName'];
	$userEmail 		=  $_POST['txtEmail'];
	$userContact 	=  $_POST['txtContact'];
	$userAddress	=	$_POST['txtAddress'];
	$userPass  		=  $_POST['txtPass'];
	
	
	
	$sql2 			= 	"SELECT * FROM  tbl_tourist WHERE user_id = $userId";
	$result2 		= 	mysqli_query($con,$sql2);
	$row2 			= 	mysqli_fetch_assoc($result2);
	
		if($row2['user_password']==$userPass){

				$password=$row2['user_password'];

			}else{

				$password=md5($_POST['txtPass']);

				}	
	
	 $sql    		=  "UPDATE tbl_tourist SET
						user_name= '$userName', user_email='$userEmail', user_address='$userAddress',
						user_password ='$password', user_contact ='$userContact', user_status='$userStatus'
						WHERE user_id=$userId";
	
	$result 		=  	mysqli_query($con,$sql);
	if($result)
	{			 
		header('Location: list_tourist.php');
		}
	
}

// DELETE


if (isset($_GET['userId']) && (int)$_GET['userId']>0)
{
	$userId		=    $_GET['userId'];


	$sql			=	"DELETE FROM tbl_tourist
					 	WHERE user_id=$userId";
	$result 		=  	mysqli_query($con,$sql);
	header('Location: list_tourist.php');	

}


?>