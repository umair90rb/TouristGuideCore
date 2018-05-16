<?php

require_once('include/config.php');

if(!isset($_SESSION['adminId']))
{
		header('location:login.php');
	}


// Add Info
if(isset($_POST['btnAddHotel']))
{

	$cityId		 		= 		$_POST['selCity'];
	$hotelName	 		=  		trim($_POST['txtHotelName']);
	$hotelStar	 		=  		trim($_POST['txtHotelStar']);
	$hotelAddress	 	=  		trim($_POST['txtAddress']);
	$hotelMgmName	 	= 		trim($_POST['txtMgmName']);
	$hotelEmail	 		= 		trim($_POST['txtEmail']);
	$hotelPhone	 		= 		trim($_POST['txtPhone']);
	$hotelPassword	 	= 		md5(trim($_POST['txtPassword']));
	$hotelLocation	 	= 		trim($_POST['txtLocation']);
	$hotelWeb		 	= 		trim($_POST['txtHotelWeb']);
	$hotelStatus	 	= 		trim($_POST['rdoption']);
	$hotelPic	 		=  		$_FILES['hotelPic']['name'];
	
	move_uploaded_file($_FILES['hotelPic']['tmp_name'],'../upload-hotel/'.$hotelPic);
	
	 echo $sql    		=  "INSERT INTO tbl_hotel 		
						(hotel_name, city_id, hotel_address, hotel_star, hotel_contact, hotel_manager_name, hotel_email,
						 hotel_password, hotel_location, hotel_pic, hotel_website, hotel_status) 
						VALUES 
						('$hotelName', $cityId, '$hotelAddress', '$hotelStar', '$hotelPhone', '$hotelMgmName', 
						'$hotelEmail', '$hotelPassword', '$hotelLocation', '$hotelPic', '$hotelWeb', '$hotelStatus')";
	
	$result 		=  	mysqli_query($con,$sql);
	if($result)
	{			 
		header('Location: list_hotel.php');
		}
	
}
////////////////////////////////////////////////////////////////////////////////////////////////////////////////////


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
	$hotelPassword	 	= 		md5(trim($_POST['txtPassword']));
	$hotelLocation	 	= 		trim($_POST['txtLocation']);
	$hotelWeb		 	= 		trim($_POST['txtHotelWeb']);
	$hotelStatus	 	= 		trim($_POST['rdoption']);
	$hotelPic	 		=  		$_FILES['hotelPic']['name'];
	
	
	$sqlCheck		=   "SELECT * FROM tbl_hotel WHERE hotel_id=$hotelId";
	$resultCheck	= 	mysqli_query($con,$sqlCheck);
	$rowCheck		=	mysqli_fetch_assoc($resultCheck);
	
	if($rowCheck['hotel_password']==$hotelPassword){

				$password=$rowCheck['hotel_password'];

			}else{

				$password = $hotelPassword;

				}	
	
	
	if($hotelPic!=''){
		@unlink('../upload-hotel/'.$rowCheck['hotel_pic']);
			move_uploaded_file($_FILES['hotelPic']['tmp_name'],'../upload-hotel/'.$hotelPic);
			$picture	=		$hotelPic;
		}
		else
		{
			$picture	= $rowCheck['hotel_pic'];
			
			}
	
	$sql    		=  "UPDATE tbl_hotel SET
	
						hotel_name='$hotelName', city_id=$cityId, hotel_address='$hotelAddress', hotel_star='$hotelStar', 
						hotel_contact='$hotelPhone', hotel_manager_name='$hotelMgmName', hotel_email='$hotelEmail',
						hotel_password='$password', hotel_location='$hotelLocation', hotel_pic='$picture', 
						hotel_website='$hotelWeb', hotel_status='$hotelStatus'
						WHERE hotel_id=$hotelId";
						
	
	$result 		=  	mysqli_query($con,$sql);
	if($result)
	{			 
		header('Location: list_hotel.php');
		}
	
}

////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

?>