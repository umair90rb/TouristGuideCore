<?php 
$con	=	mysqli_connect("localhost", "root", "");
$db	 	=	mysqli_select_db($con, "touristguide");
require_once('include/functions.php');
session_start();

?>