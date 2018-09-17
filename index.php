<!DOCTYPE html>
<html lang="en">
<head>
<title>visa aplication website | Home</title>

<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- bootstrap-css -->
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<!--// bootstrap-css -->
<!-- css -->
<link rel="stylesheet" href="css/style.css" type="text/css" media="all" />
<!--// css -->
<!-- font-awesome icons -->
<link href="css/font-awesome.css" rel="stylesheet"> 
<!-- //font-awesome icons -->
<!-- font -->

<script src="js/jquery-1.11.1.min.js"></script>
<script src="js/bootstrap.js"></script>
<script type="text/javascript">
	jQuery(document).ready(function($) {
		$(".scroll").click(function(event){		
			event.preventDefault();
			$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
		});
	});
</script> 
</head>
<body>
	<!-- banner -->
	<div class="banner">
		<div class="header">
			<div class="container">
				<div class="header-left">
					<div class="w3layouts-logo">
						<h1>
							<a href="index.html"><span>Dot</span> circle</a>
						</h1>
					</div>
				</div>
				<div class="header-right">
					<div class="w3-header-top">
						<ul>
							<li><i class="fa fa-phone" aria-hidden="true"></i> : +1 234 567 9871</li>
							<li><i class="fa fa-envelope" aria-hidden="true"></i> : <a href="mailto:info@example.com">bencinenihan@gmail.com</a></li>
						</ul>
					</p>
					</div>
					<div class="w3-header-bottom">
						<div class="top-nav">
							<nav class="navbar navbar-default">
								<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
										<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
									<ul class="nav navbar-nav">
										<li><a href="index.php">Home</a></li>
										<li><a href="about.php">About</a></li>
									
										<li><a href="Login_form.php">Apply</a></li>
																		
										<li><a href="gallery.php">Gallery</a></li>
										<li><a href="contact.php">Contact</a></li>
									</ul>	
									<div class="clearfix"> </div>
								</div>	
							</nav>		
						</div>
						<div class="agileinfo-social-grids">
							<ul>
								<li><a href="#"><i class="fa fa-facebook"></i></a></li>
								<li><a href="#"><i class="fa fa-twitter"></i></a></li>
								
							</ul>
						</div>
						<div class="clearfix"> </div>
					</div>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
		<div class="w3layouts-banner-slider">
			<div class="container">
				<div class="slider">
					<div class="callbacks_container">
						<ul class="rslides callbacks callbacks1" id="slider4">
							<li>
								<div class="agileits-banner-info">
									<h6>varius</h6>
									<h3>courses</h3>
									<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque sit amet massa in eros euismod suscipit at ut augue. Donec imperdiet risus vel sem luctus, a viverra augue ornare.</p>
									<div class="w3-button">
										<a href="#">More</a>
									</div>
								</div>
							</li>
							<li>
								<div class="agileits-banner-info">
									<h6>Lorem </h6>
									<h3>Your Trip!</h3>
									<p>Mauris ac diam vestibulum, vestibulum risus tincidunt, accumsan neque. Praesent pellentesque ullamcorper scelerisque. Nam vestibulum augue quam, ac hendrerit odio molestie ornare. Etiam</p>
									<div class="w3-button">
									
									</div>
								</div>
							</li>
						</ul>
					</div>
					<script src="js/responsiveslides.min.js"></script>
					<script>
						// You can also use "$(window).load(function() {"
						$(function () {
						  // Slideshow 4
						  $("#slider4").responsiveSlides({
							auto: true,
							pager:true,
							nav:true,
							speed: 1500,
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
					<!--banner Slider starts Here-->
				</div>
			</div>
		</div>
	</div>
	<!-- welcome -->
	<div class="welcome">
		<div class="container">
			<div class="w3l-heading">
				<h2>Welcome</h2>
			</div>
			<div class="w3-welcome-grids">
				<div class="col-md-7 w3-welcome-left">
					<h1>DEGREES THAT ARE GOOD INVESTMENTS</h1>
					<h5>&nbsp;</h5>
					<p>Get a degree that will give you a great return on your educational investment - with growth opportunity, job satisfaction, and financial reward.</p>
					<p>If you bought a stock or made an investment, you would expect a certain rate of return on your money. Right?</p>
					<p>A degree is no different. When you invest in your education, you want to be paid back for your time and money </p>
					<p><span>.</span></p>
					<div class="w3l-button">
						<a href="#">More</a>
					</div>
				</div>
				<div class="col-md-5 w3ls-welcome-img1">
					<img src="images/2.jpg" alt="" />
				</div>
				<div class="clearfix"> </div>
			</div>
			<div class="w3-welcome-grids w3-welcome-bottom">
				<div class="col-md-5 w3ls-welcome-img1 w3ls-welcome-img2">
					<img src="images/3.jpg" alt="" />
				</div>
				<div class="col-md-7 w3-welcome-left">
					<h5>Lorem ipsum dolor sit amet</h5>
					<p>Ut fringilla euismod sagittis. Cras semper ante sapien, in ornare nisi euismod eu. Morbi dapibus est non leo vestibulum aliquet. Sed viverra nisi pharetra, scelerisque nisi eu, tempus nibh. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; In pellentesque, lectus at auctor luctus, lacus nibh dignissim ante, sed maximus arcu odio vitae lectus. <span>Phasellus vestibulum velit sed nisi ultricies scelerisque. Vivamus ligula mauris, euismod in dictum id, tempus ac odio. Etiam tristique felis eros, tincidunt interdum elit gravida et. Donec porttitor vehicula tortor, malesuada aliquet nibh finibus ac. Maecenas consectetur nisi ipsum, blandit finibus quam tristique vitae.</span></p>
					<div class="w3l-button">
						<a href="">More</a>
					</div>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
	<!-- //welcome -->
	<div class="jarallax newsletter">
		<div class="container">
			<div class="w3l-heading newsletter-heading">
				<h3>join with us</h3>
			</div>
		</div>
		<div class="w3-agileits-newsletter">
			<div class="subscribe-grid">
				<form action="#" method="post">
					<input type="text" placeholder="Subscribe" name="Subscribe" required>
					<button class="btn1"><i class="fa fa-paper-plane-o" aria-hidden="true"></i></button>
				</form>
			</div>
		</div>
	</div>
	<!-- copyright -->
	<div class="agileits-w3layouts-copyright">
		<div class="container">
			<p>© 2018 Dot circle. All rights reserved | Design by <a href="jj@gmail.com">Nihan</a></p>
		</div>
	</div>
	<!-- //copyright -->
	</body>	
</html>