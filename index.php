<?php 
	require_once('include/config.php');
?>
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
<!-- js -->
<script src="js/jquery-1.11.1.min.js"></script>
<!-- //js -->
<!-- start-smoth-scrolling -->
<script type="text/javascript" src="js/move-top.js"></script>
<script type="text/javascript" src="js/easing.js"></script>
<script type="text/javascript">
	jQuery(document).ready(function($) {
		$(".scroll").click(function(event){		
			event.preventDefault();
			$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
		});
	});
</script>
<!-- start-smoth-scrolling -->
<link href='http://fonts.googleapis.com/css?family=Raleway:400,100,200,300,500,600,700,800,900' rel='stylesheet' type='text/css'>
</head>
	
<body>
<!-- header -->
	<?php include('include/header.php');?>
<!-- //header -->
<!-- banner -->
	<div class="banner">
			<!-- Slider-starts-Here -->
				<script src="js/responsiveslides.min.js"></script>
				 <script>
				    // You can also use "$(window).load(function() {"
				    $(function () {
				      // Slideshow 4
				      $("#slider3").responsiveSlides({
				        auto: true,
				        pager: false,
				        nav: false,
				        speed: 500,
				        namespace: "callbacks",
				        before: function () {
				          $('.events').append("<li>before event fired.</li>");
				        },
				        after: function () {
				          $('.events').append("<li>after event fired.</li>");
				        }
				      });
				
				    });
				  </script>
			<!--//End-slider-script -->
			<div  id="top" class="callbacks_container">
				<ul class="rslides" id="slider3">
					<li>
						<div class="banner-info"></div>
					</li>
					<li>
						<div class="banner-info1"></div>
					</li>
					<li>
						<div class="banner-info2"></div>
					</li>
					<li>
						<div class="banner-info3"></div>
					</li>
					<li>
						<div class="banner-info4"></div>
					</li>
					<li>
						<div class="banner-info5"></div>
					</li>
				</ul>
			</div>
		
	</div>

	<div class="banner-bottom2">
	</div>

	<div class="banner-bottom1">
		<div class="container">
			<h3 style="color:#2FD828 !important;">Welcome To ! <br><span style="color:black !important;">Tourist Guide </span></h3>
			<div class="banner-bottom1-grids">
			<?php 
				$sqlCat    		= 	"SELECT * FROM tbl_hotel_package  
									 ORDER BY package_id DESC LIMIT 3" ;
				$resultCat 		=	mysqli_query($con,$sqlCat); 
				while($rowCat   = 	mysqli_fetch_assoc($resultCat)) 
						 { 
				
				?>
			
				<div class="col-md-4">
					<img src="upload-package/<?php echo $rowCat['package_pic']?>" alt=" " style="width:100%; height:250px;" />
					<div class="more2">
						<a href="packages.php"><?php echo $rowCat['packge_name']?></a>
					</div>
				</div>
				
				<?php } ?>
				
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
<!-- //newsletter -->
<!-- customer -->
	<div class="customer">
		<div class="container">
			<h3>Tourist Says About Us</h3>
			<div class="customer-grids">
				<ul id="flexiselDemo1">			
					<li>
						<div class="customer-grid">
							<p> “Stuff your eyes with wonder, 
							     live as if you’d drop dead in ten seconds.
							     See the world. It’s more fantastic than any dream made	
							     or paid for in factories.” </p>
							<h4>Ray Bradbury</h4>
						</div>
					</li>
					<li>
						<div class="customer-grid">
							<p> “To my mind, the greatest reward and luxury of travel is to be 
							     able to experience everyday things as if for the first time, to
							     be in a position in which almost nothing is so familiar it is taken
							     for granted.”  </p>
							<h4>Bill Bryson</h4>
						</div>
					</li>
					<li>
						<div class="customer-grid">
							<p> “The more I traveled the more I realized that fear
							     makes strangers of people who should be friends.”  </p>
							<h4>Shirley MacLaine</h4>
						</div>
					</li>
				</ul>
				<script type="text/javascript">
							$(window).load(function() {
								$("#flexiselDemo1").flexisel({
									visibleItems: 3,
									animationSpeed: 1000,
									autoPlay: true,
									autoPlaySpeed: 3000,    		
									pauseOnHover: true,
									enableResponsiveBreakpoints: true,
									responsiveBreakpoints: { 
										portrait: { 
											changePoint:480,
											visibleItems: 1
										}, 
										landscape: { 
											changePoint:640,
											visibleItems:3
										},
										tablet: { 
											changePoint:768,
											visibleItems: 3
										}
									}
								});
								
							});
					</script>
					<script type="text/javascript" src="js/jquery.flexisel.js"></script>
			</div>
		</div>
	</div>
<!-- //customer -->
	
	<div class="clear"> </div>
	<?php include('include/footer.php');?>
<!--- //footer --->
<!-- for bootstrap working -->
		<script src="js/bootstrap.js"> </script>
<!-- //for bootstrap working -->
</body>
</html>