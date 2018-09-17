<?php
	session_start();
	if(!isset($_SESSION['SESS']))
	{
		echo"<script>alert('login to access this page');
		window.location='login_form.php';</script>";
	}
?>
<html>
<head>

<link href="bootstrap/css/bootstrap.css" rel="stylesheet" type="text/css" media="all"/>
	<link href='bootstrap/css/font.css' rel='stylesheet' type='text/css'/>
	<script src="bootstrap/js/jquery.js"></script>	
	<script src="bootstrap/js/bootstrap.js"></script>
</head>
<body>
<br><br>
 <!-- Navbar
    ================================================== -->
 <nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
        </div>
        <div id="navbar" class="nav-collapse">
          <ul class="nav navbar-nav">
            <li class="active"><a href="home.php"><i class="icon-home icon-large"></i> Home</a></li>
			<li><a href="#"><i class="icon-signal"></i> Contact Us</a></li>
            <li><a href="#"><i class="icon-flag"></i>  About Us</a></li>
                      
			 </ul>
            
       <div class="pull-right">
		 <ul class="nav navbar-nav">
            <li class=""><a href="logout.php"><i class="icon-flag"></i>Logout</a></li>
              </ul>
						</div>
			           </div><!--/.nav-collapse --></div>
      
    </nav>
 <br/>
<hr>
<br/>
  <div class="well">
<h3> 
By creating an account with our store, you will be able to move through the checkout process faster, store multiple shipping addresses,
 view and track your orders in your account and more.   
<br/><br/>
<center> This is home page.....
<br/><h2>The session is running you can have you own code here !!!</h2>
	</h3>
</center>	
	</div>

	<div class="row">
	<div id="sidebar" class="span3">
	
</div>


</body>
</html>