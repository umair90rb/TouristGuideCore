<?php
require_once('include/config.php');


if(isset($_POST['btnSubmit']))
{
$adminEmail =  $_POST['txtEmail'];
$adminPass  =  md5($_POST['txtPassword']);


$sql    	=  "SELECT * FROM tbl_admin_login 		
				WHERE admin_email = '$adminEmail' AND admin_password = '$adminPass'";

$result 	=  	mysqli_query($con,$sql);
$row   		=   mysqli_fetch_assoc($result);
$numrows	=   mysqli_num_rows($result);

if($numrows==1){
	
	$_SESSION['adminId'] 	=	$row['admin_id'];
	$_SESSION['adminName']  =	$row['admin_name'];
	
	$sqlUpdate 	=	"UPDATE tbl_admin_login 
					 SET admin_login_status=NOW()
					 WHERE admin_id=".$row['admin_id'];
	$sqlResult	= mysqli_query($con,$sqlUpdate);				 
	
	header('Location: index.php');
	}
	
	else{
		$errorMessage ='Wrong Email Or Password';
		
		}
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" href="css/bootstrap.min.css">
<title>Login</title>
<style>
body
{
    background: url('img/bg-img.jpg') fixed;
    background-size: cover;
    padding: 0;
    margin: 0;
	opacity:0.7;
}

.wrap
{
    width: 100%;
    height: 100%;
    min-height: 100%;
    position: absolute;
    top: 0;
    left: 0;
    z-index: 99;
}

p.form-title
{
    font-family: 'Open Sans' , sans-serif;
    font-size: 30px;
    font-weight: 600;
    text-align: center;
    color:#00688B;
    margin-top: 5%;
    text-transform: uppercase;
    letter-spacing: 4px;
}

form
{
    width: 250px;
    margin: 0 auto;
}
::-webkit-input-placeholder {
   color:#000000;
}

:-moz-placeholder { /* Firefox 18- */
   color: #000000;  
}

::-moz-placeholder {  /* Firefox 19+ */
   color: #000000;  
}

:-ms-input-placeholder {  
   color: #000000;  
}
form.login input[type="text"], form.login input[type="password"]
{
    width: 100%;
    margin: 0;
    padding: 15px 10px;
    background: 0;
    border: 0;
    border-bottom: 1px solid #000;
    outline: 0;
    font-style: italic;
    font-size: 12px;
    font-weight: 400;
    letter-spacing: 1px;
    margin-bottom: 5px;
    color: #000;
    outline: 0;
}

form.login input[type="submit"]
{
    width: 100%;
    font-size: 14px;
    text-transform: uppercase;
    font-weight: 500;
    margin-top: 16px;
    outline: 0;
    cursor: pointer;
    letter-spacing: 1px;
}

form.login input[type="submit"]:hover
{
    transition: background-color 0.5s ease;
}

form.login .remember-forgot
{
    float: left;
    width: 100%;
    margin: 10px 0 0 0;
}
form.login .forgot-pass-content
{
    min-height: 20px;
    margin-top: 10px;
    margin-bottom: 10px;
}
form.login label, form.login a
{
    font-size: 12px;
    font-weight: 400;
    color: #000;
}

form.login a
{
    transition: color 0.5s ease;
}

form.login a:hover
{
    color: #2ecc71;
}

.pr-wrap
{
    width: 100%;
    height: 100%;
    min-height: 100%;
    position: absolute;
    top: 0;
    left: 0;
    z-index: 999;
    display: none;
}

.show-pass-reset
{
    display: block !important;
}

.pass-reset
{
    margin: 0 auto;
    width: 250px;
    position: relative;
    margin-top: 22%;
    z-index: 999;
    background: #FFFFFF;
    padding: 20px 15px;
}

.pass-reset label
{
    font-size: 12px;
    font-weight: 400;
    margin-bottom: 15px;
}

.pass-reset input[type="email"]
{
    width: 100%;
    margin: 15px;
    padding: 20px;
    background: 0;
    border: 0;
    border-bottom: 1px solid #000000;
    outline: 0;
    font-style: italic;
    font-size: 12px;
    font-weight: 400;
    letter-spacing: 1px;
    margin-bottom: 5px;
    color: #000000;
    outline: 0;
}

.pass-reset input[type="submit"]
{
    width: 100%;
    border: 0;
    font-size: 14px;
    text-transform: uppercase;
    font-weight: 500;
    margin-top: 10px;
    outline: 0;
    cursor: pointer;
    letter-spacing: 1px;
}

.pass-reset input[type="submit"]:hover
{
    transition: background-color 0.5s ease;
}
.posted-by
{
    position: absolute;
    bottom: 26px;
    margin: 0 auto;
    color: #FFF;
    background-color: rgba(0, 0, 0, 0.66);
    padding: 10px;
    left: 45%;
}
.errorText {
	font-family:Arial, Helvetica, sans-serif ;
	font-size:16px ;
	color:#D00 ;
	font-weight:bold ;
	padding: 10px ;
	text-shadow: 1px #000 ;
	text-align:center ;
}
</style>
</head>

<body>
<div class="container">
	 <div class="row" style="height:170px;"></div>
    <div class="row">
        <div class="col-md-12">
            
            <div class="wrap">
                <p class="form-title">ADMIN LOGIN</p>
                <?php
				
					if (@$errorMessage != '') { ?>
						<p class="errorText text-center"><?php echo $errorMessage; ?></p>
				<?php } ?> 
                <form class="login" action="login.php" method="post" name="frmLogin">
                <input type="text" placeholder="Email"  name="txtEmail"/>
                <input type="password" placeholder="Password" name="txtPassword"/>
                <input type="submit" value="Login" name="btnSubmit" class="btn btn-primary btn-sm" />
                
                </form>
            </div>
        </div>
    </div>
    
</div>
</body>
</html>


