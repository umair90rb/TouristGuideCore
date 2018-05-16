
<!DOCTYPE html>
<html>
<head>
<title>Tourist Guide</title>
<!-- for-mobile-apps -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Pasta Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
		function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- //for-mobile-apps -->
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<link href='http://fonts.googleapis.com/css?family=Raleway:400,100,200,300,500,600,700,800,900' rel='stylesheet' type='text/css'>
</head>
	
<body>
<!-- header -->

	<div class="header">
		<div class="container-fluid">
		<?php include('include/header.php');?>
			
		</div>
	</div>
<!-- //header -->
<!-- contact -->
	<div class="contact">
		<div class="container-fluid">
			<div class="contact-main">
				<h3>Contact Us</h3>
				<div class="contact-top">
					
					<div class="col-md-6 contact-top-right">
                    <?php if(isset($_GET['sucess']))
					{
						echo 'Thank You ! team will contact you Sooon...';
						}elseif(isset($_GET['error']))
						{
							echo 'Sorry ! you Information Not submited due to some problem please Try Again..';
							}
					?>
						<div class="contact-textarea">
                        
							<form action="process_contact.php" method="post">
								<input type="text" name="txtName" value="First Name" onFocus="this.value = '';" onBlur="if (this.value == '') {this.value = 'First Name';}"/>
								<input type="text"  name="txtphone" value="Phone Number" onFocus="this.value = '';" onBlur="if (this.value == '') {this.value = 'Phone Number';}"/>
								<input type="text" value="Email" name="txtEmail"onfocus="this.value = '';" onBlur="if (this.value == '') {this.value = 'Email';}"/>
								<textarea value="Message:" onFocus="this.value = '';" onBlur="if (this.value == '') {this.value = 'Message';}" name="txtMessage">Message..</textarea>
								<input type="submit" value="SUBMIT" >
								<input type="reset" value="RESET" >
							</form>
						</div>
					</div>
					<div class="col-md-6 contact-top-left">
						
						<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d27749.423292143194!2d73.11937779216288!3d29.61304801088772!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x393d9778fa7f4463%3A0xee5c1f1e528edbac!2sHaroonabad%2C+Pakistan!5e0!3m2!1sen!2s!4v1473327389135" frameborder="0" style="border:0" allowfullscreen></iframe>
					</div>
					<div class="clearfix"></div>
				</div>
			</div>
		</div>
	</div>
<!-- //contact -->
<!--- footer --->
	
	<div class="clear"> </div>
	<?php include('include/footer.php');?>
<!--- //footer --->
<!-- for bootstrap working -->
		<script src="js/bootstrap.js"> </script>
<!-- //for bootstrap working -->
</body>
</html>