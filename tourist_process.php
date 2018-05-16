<?php
require_once('include/config.php');

// Booking 


if(isset($_GET['hotelId']) && isset($_GET['packageId']))
{
		echo $hotelId	=	$_GET['hotelId'];
		$packageId	=	$_GET['packageId'];
		
	if(!isset($_SESSION['userId']))
	{
			header('location:tourist_login.php');
			exit();
		}	else {
	
	echo $sql    = 	"SELECT * FROM tbl_hotel_package
			 	 	WHERE package_id =". $packageId;
	$result 	=	mysql_query($sql); 
 	$row 		= 	mysql_fetch_assoc($result);

	$packId		=	$row['package_id'];
	$userId		=	$_SESSION['userId'];
	
	
	$sqlQuery    	=  "INSERT INTO tbl_booking 		
					(package_id, user_id, booking_status, booking_date)
					VALUES($packId, $userId, 'Pending', NOW())";
	
	$resultQuery 	=  	mysql_query($sqlQuery);
		
		header('Location: tourist_booking.php');
		}

}




// for  Login
if(isset($_POST['btnLogin']))
{
$userEmail 		=  	$_POST['txtEmail'];
$userPass  		=  	md5($_POST['txtPassword']);


$sql    	=  "SELECT * FROM tbl_tourist 		
				WHERE user_email = '$userEmail' AND user_password = '$userPass'";

$result 	=  	mysqli_query($con,$sql);
$row   		=   mysqli_fetch_assoc($result);
$numrows	=   mysqli_num_rows($result);

if($numrows==1){
	
	$_SESSION['userId'] 	=	$row['user_id'];
	$_SESSION['userName']  =	$row['user_name'];
	
	$sqlUpdate 	=	"UPDATE tbl_tourist 
					 SET user_login_time=NOW()
					 WHERE user_id=".$row['user_id'];
	$sqlResult	= mysqli_query($con,$sqlUpdate);				 
	
	header('Location: tourist_welcome.php');
	}
	
	else{
		header('Location: tourist_login.php?msg=problem');
		}
}


// For Signup
if(isset($_POST['btnsignUp']))

{
	$userName 		=  $_POST['txtName']; 
	$userEmail 		=  $_POST['txtEmail'];
	$userContact 	=  $_POST['txtContact'];
	$userAddress	=  $_POST['txtAddress'];
	$userPass  		=  md5($_POST['txtPass']);
	$userPPass = md5(utf8_decode($userPass));
	$userConfirmPass =  md5($_POST['txtPassConfirm']);
	if($userPass==$userConfirmPass){
	$sql = "INSERT INTO tbl_tourist
		   (user_name, user_email, user_contact, user_address, user_status, user_password) 
		   VALUES ('$userName', '$userEmail', '$userContact', '$userAddress', 'Active', '$userPass')";
		  
	$result = mysqli_query($con,$sql);
	header('Location:tourist_login.php');	
	} else {
	
		header('Location:tourist_signup.php?msg=problem');		
	}	   
		   
}		   
	
// Edit Toursit info	

if(isset($_POST['btnEditTourist']))

{
	$userId			= $_POST['hidId'];
	$userName 		=  $_POST['txtName']; 
	$userEmail 		=  $_POST['txtEmail'];
	$userContact 	=  $_POST['txtContact'];
	$userAddress	=  $_POST['txtAddress'];
	$userPass  		=  $_POST['txtPass'];
	
	
	$sql2 			= 	"SELECT * FROM  tbl_tourist WHERE user_id = $userId";
	$result2 		= 	mysqli_query($con,$sql2);
	$row2 			= 	mysqli_fetch_assoc($result2);
	
		if($row2['user_password']==$userPass){

				$password=$row2['user_password'];

			}else{

				$password=md5($_POST['txtPass']);

				}
				
	$sql = "UPDATE tbl_tourist SET
		   user_name='$userName', user_email='$userEmail', user_contact='$userContact', 
		   user_address='$userAddress' user_password=$password 
		   WHERE user_id=$userId";
		  
	$result = mysqli_query($con,$sql);
	header('Location:tourist_profile.php');	
	}    
		   
		   

?>