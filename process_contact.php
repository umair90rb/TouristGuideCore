<?php
require_once('include/config.php');

$name     	=	$_POST['txtName'];
$phone		=	$_POST['txtphone'];
$email   	=	$_POST['txtEmail'];
$msg		=	$_POST['txtMessage'];


 $sql = "INSERT INTO tbl_contact 
	   (name, phone_number, email, message) 
	   VALUES ('$name', '$phone', '$email', '$msg')";
	   $result = mysqli_query($con,$sql);

if ($result) {
	header('Location:contact.php?sucess');	
} else {
	echo header('Location:contact.php?error');	
}
	   

?>