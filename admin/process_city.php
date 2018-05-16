<?php

require_once('include/config.php');

if(!isset($_SESSION['adminId']))
{
		header('location:login.php');
	}




// Add info
if(isset($_POST['btnAddCity']))

{
	$cityName 		=  $_POST['txtName']; 
	
	$sql = "INSERT INTO tbl_city
		   (city_name)VALUES ('$cityName')";
		  
		   $result = mysqli_query($con,$sql);
	
	if ($result) {
		
		header('Location: list_city.php');	
	} 
	   
}



//Edit  Info
if(isset($_POST['btnEditCity']))
{
	$cityId 		=  $_POST['hidId'];
	$cityName 		=  $_POST['txtName']; 
	
	

	
	 $sql    		=  "UPDATE tbl_city SET
						city_name= '$cityName' WHERE city_id=$cityId";
	
	$result 		=  	mysqli_query($con,$sql);
	if($result)
	{			 
		header('Location: list_city.php');	
		}
	
}




?>