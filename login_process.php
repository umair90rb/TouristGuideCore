<?php
session_start();

$con	=	mysql_connect("localhost", "root", "");
$db	 =	mysql_select_db("restaurant", $con);

$dishId	=  $_POST['hidDishId'];
$usermail  =  $_POST['txtEmail'];
$userpass  =  $_POST['txtPassword'];

 echo $sql      =     "SELECT * FROM user_registration
            WHERE Email = '$usermail' AND Password  = '$userpass'";
					
	$result       =     mysql_query($sql);
	$row     =    mysql_fetch_assoc($result);
	$numrows  =   mysql_num_rows($result);
	if($numrows == 1){
		session_start();
		$_SESSION['Id'] =$row['Id'];
		$_SESSION['userName'] =$row['Name'];
		$_SESSION['dishId'] =$dishId;
	header('Location: profile.php');
	
	}
	else{
		
		header('location:index.php');
	}
			

?>