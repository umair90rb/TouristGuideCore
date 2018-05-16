<?php 
$dbName = "touristguide";
$con	=	mysqli_connect("localhost", "root", "");
$db	 	=	mysqli_select_db($con, $dbName);
require_once('include/functions.php');
session_start();

?>