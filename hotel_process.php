<?php
require_once('include/config.php');

// For Booking

if(isset($_GET['bookingId']))
{


$sql    	=  "UPDATE tbl_booking SET
				booking_status 	= 'Booked'
				WHERE booking_id= " .$_GET['bookingId'];
$result 	=  	mysqli_query($con,$sql);

header('Location: hotel_booking.php'); 
}

// for  Login
if(isset($_POST['btnHotelLogin']))
{
$hotelEmail 		=  	$_POST['txtEmail'];
$hotelPass  		=  	md5($_POST['txtPassword']);


$sql    	=  "SELECT * FROM tbl_hotel 		
				WHERE hotel_email  = '$hotelEmail' AND hotel_password  = '$hotelPass'";

$result 	=  	mysqli_query($con,$sql);
$row   		=   mysqli_fetch_assoc($result);
$numrows	=   mysqli_num_rows($result);

if($numrows==1){
	
	$_SESSION['hotelId'] 		=	$row['hotel_id'];
	$_SESSION['hotelName']  	=	$row['hotel_name'];
	$_SESSION['hotelMgmName']   =	$row['hotel_manager_name'];
	
	$sqlUpdate 	=	"UPDATE tbl_hotel 
					 SET hotel_login_time=NOW()
					 WHERE hotel_id=".$row['hotel_id'];
	$sqlResult	= mysqli_query($con,$sqlUpdate);				 
	
	header('Location: hotel_welcome.php');
	}
	
	else{
		header('Location: hotel_login.php?msg=problem');
		}
}


// Signup Hotel
if(isset($_POST['btnAddHotel']))
{

	$cityId		 		= 		$_POST['selCity'];
	$hotelName	 		=  		trim($_POST['txtHotelName']);
	$hotelStar	 		=  		trim($_POST['txtHotelStar']);
	$hotelAddress	 	=  		trim($_POST['txtAddress']);
	$hotelMgmName	 	= 		trim($_POST['txtMgmName']);
	$hotelEmail	 		= 		trim($_POST['txtEmail']);
	$hotelPhone	 		= 		trim($_POST['txtPhone']);
	$hotelPassword	 	= 		md5($_POST['txtPassword']);
	$hotelConfirmPassword= 		md5($_POST['txtPassword']);
	$hotelLocation	 	= 		trim($_POST['txtLocation']);
	$hotelWeb		 	= 		trim($_POST['txtHotelWeb']);
	$hotelPic	 		=  		$_FILES['hotelPic']['name'];
	
	move_uploaded_file($_FILES['hotelPic']['tmp_name'],'upload-hotel/'.$hotelPic);
	
	 echo $sql    		=  "INSERT INTO tbl_hotel 		
						(hotel_name, city_id, hotel_address, hotel_star, hotel_contact, hotel_manager_name, hotel_email,
						 hotel_password, hotel_location, hotel_pic, hotel_website, hotel_status) 
						VALUES 
						('$hotelName', $cityId, '$hotelAddress', '$hotelStar', '$hotelPhone', '$hotelMgmName', 
						'$hotelEmail', '$hotelPassword', '$hotelLocation', '$hotelPic', '$hotelWeb', 'Active')";
	
	$result 		=  	mysqli_query($con,$sql);
	if($result)
	{			 
		header('Location: hotel_login.php');
		}
	
}


//Edit  Info
if(isset($_POST['btnEditHotel']))
{
	$hotelId 			=  		$_POST['hidId'];
	$cityId		 		= 		$_POST['selCity'];
	$hotelName	 		=  		trim($_POST['txtHotelName']);
	$hotelStar	 		=  		trim($_POST['txtHotelStar']);
	$hotelAddress	 	=  		trim($_POST['txtAddress']);
	$hotelMgmName	 	= 		trim($_POST['txtMgmName']);
	$hotelEmail	 		= 		trim($_POST['txtEmail']);
	$hotelPhone	 		= 		trim($_POST['txtPhone']);
	$hotelPassword	 	= 		trim($_POST['txtPassword']);
	$hotelLocation	 	= 		trim($_POST['txtLocation']);
	$hotelWeb		 	= 		trim($_POST['txtHotelWeb']);
	$hotelPic	 		=  		$_FILES['hotelPic']['name'];
	
	
	$sqlCheck		=   "SELECT * FROM tbl_hotel WHERE hotel_id=$hotelId";
	$resultCheck	= 	mysqli_query($con,$sqlCheck);
	$rowCheck		=	mysqli_fetch_assoc($resultCheck);
	
	if($rowCheck['hotel_password']==$hotelPassword){

				$password=$rowCheck['hotel_password'];

			}else{

				$password = md5(trim($_POST['txtPassword']));

				}	
	
	
	if($hotelPic!=''){
		@unlink('upload-hotel/'.$rowCheck['hotel_pic']);
			move_uploaded_file($_FILES['hotelPic']['tmp_name'],'upload-hotel/'.$hotelPic);
			$picture	=		$hotelPic;
		}
		else
		{
			$picture	= $rowCheck['hotel_pic'];
			
			}
	
	$sql    		=  "UPDATE tbl_hotel SET
						hotel_name='$hotelName', city_id=$cityId, hotel_address='$hotelAddress', hotel_star='$hotelStar', 
						hotel_contact='$hotelPhone', hotel_manager_name='$hotelMgmName', hotel_email='$hotelEmail',
						hotel_password='$password', hotel_location='$hotelLocation', hotel_pic='$picture', hotel_website='$hotelWeb'
						WHERE hotel_id=$hotelId";
						
	
	$result 		=  	mysqli_query($con,$sql);
	if($result)
	{			 
		header('Location: hotel_profile.php');
		}
	
}	   
	
	
// Add tour Package


if(isset($_POST['btnAddPackage']))
{

	$hotelId	 			= 		$_SESSION['hotelId'];
	$packageName	 		=  		trim($_POST['txtpackageName']);
	$packageStay	 		=  		trim($_POST['txtstay']);
	$packageFacility	 	=  		trim($_POST['txtFacilites']);
	$packageAmount	 		= 		trim($_POST['txtAmount']);
	$packageStatus	 		= 		trim($_POST['rdoption']);
	$packagePic	 			=  		$_FILES['packagePic']['name'];
	
	move_uploaded_file($_FILES['packagePic']['tmp_name'],'upload-package/'.$_FILES['packagePic']['name']);
	
	 $sql    		=  "INSERT INTO tbl_hotel_package		
						(hotel_id, packge_name, package_pic, package_days_night, package_facilities, package_amount, package_status) 
						VALUES 
						($hotelId, '$packageName', '$packagePic', '$packageStay', '$packageFacility', '$packageAmount', '$packageStatus')";
	
	$result 		=  	mysqli_query($con,$sql);
	if($result)
	{			 
		header('Location: hotel_package.php');
		}
	
}

// Edit tour Package


if(isset($_POST['btnEditPackage']))
{

	$packageId	 			= 		$_POST['hidId'];
	$hotelId	 			= 		$_SESSION['hotelId'];
	$packageName	 		=  		trim($_POST['txtpackageName']);
	$packageStay	 		=  		trim($_POST['txtstay']);
	$packageFacility	 	=  		trim($_POST['txtFacilites']);
	$packageAmount	 		= 		trim($_POST['txtAmount']);
	$packageStatus	 		= 		trim($_POST['rdoption']);
	$packagePic	 			=  		$_FILES['packagePic']['name'];
	
	
	$sqlCheck		=   "SELECT * FROM  tbl_hotel_package WHERE package_id=$packageId";
	$resultCheck	= 	mysqli_query($con,$sqlCheck);
	$rowCheck		=	mysqli_fetch_assoc($resultCheck);
	
	
	if($packagePic!=''){
		@unlink('upload-package/'.$rowCheck['package_pic']);
			move_uploaded_file($_FILES['packagePic']['tmp_name'],'upload-package/'.$packagePic);
			$picture	=		$packagePic;
		}
		else
		{
			$picture	= $rowCheck['package_pic'];
			
			}
			
	 $sql    		=  "UPDATE  tbl_hotel_package SET		
						hotel_id=$hotelId, packge_name='$packageName', package_pic='$picture', 
						package_days_night='$packageStay', package_facilities='$packageFacility',
						 package_amount='$packageAmount', package_status='$packageStatus'
						WHERE package_id=$packageId";
	
	$result 		=  	mysqli_query($con,$sql);
	if($result)
	{			 
		header('Location: hotel_package.php');
		}
	
}
	   

?>