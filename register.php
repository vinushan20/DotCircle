<html>
<head>
<title>My Form </title>

	<link href="bootstrap/css/bootstrap.css" rel="stylesheet" type="text/css" media="all"/>
	<link href='bootstrap/css/font.css' rel='stylesheet' type='text/css'/>
	<script src="bootstrap/js/jquery.js"></script>	
	<script src="bootstrap/js/bootstrap.js"></script>
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


<script type="text/javascript">
<!--Only  test vaidation--!>
function allowalphabet()
{
	if(!myform.Name.Value.match(/"[a-zA-Z]+$"/)&& myform.Name.Value!="")
	{
		myform.Name.Value="";
		myform.Name.focus();
		alert("Please enter only alphabet in text");
		return false;
	}
}
function vaidation()
{
	if(document.myform.Name.Value=="")
	{
		alert("Please provide your name!");
		document.myform.Name.focus();
		return false;
	}
	else
	{
	var ret=allowalphabet();
	if(ret==false)
	{
		return false;
	}
	}
	if(document.myform.Email.Value=="")
	{
	alert("please provide your email !");
	document.myform.Email.focus();
	return false;
	}
	else
	{
		var ret=validateEmail();
		if( ret==false)
		{
			return false;
		}
	}
	if((document.myform.Contact.Value=="")|| isNaN(document.myform.Contact.Value)||(document.myform.Contact.Value.length!=10))
	{
		alert("please provide correct mobile number");
		document.myform.Contact.focus();
		return false;
	}
	
	if(document.myform.Country.Value=="-1")
	{
		alert("Please provide your Country");
		return false;
	}
	return true;
}
</script>
</head>
<body>

 <!-- Navbar
    ================================================== -->
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
	
	</div>
	
<br/>
<br/>
<br/>
<br/>
<div class="col-md-3"></div>
	<div class="col-md-6">
		<div class="panel panel-primary">
			<div class="panel-heading">
				<h2 class="panel-title"> Registration </h2>
			</div>
			
		  
			<div class="panel-body">

			<form action = "register.php" name="myform" enctype="multipart/form-data" method="post" onsubmit="return(validate());">
				<div>

					<div>
						<label>Name</label>
						<input type="text" name="name" class="form-control" required />
					</div>
						<br>
						<div>
							<label>Email</label>
							<input type="email" name="email" class="form-control" value = "" required />
						</div>
						<br>
					<div>
						<label>Contact</label>
						<input type="text" name="mobile" class="form-control" />
					</div>
						
						<br>
							<div>
								<label> Password </label>
									<input type="password" name="Pass1" class="form-control" value="" required />
							</div>
		
								<br>
						<div>
							<label> Confirm Password </label>
							<input type="password" name="Pass2" class="form-control" value="" required />
						</div>
								<br>
													<div>
						<label>Address</label>
						<input type="text" name="address" class="form-control" required />
					</div>

						<br>
							<br>
							<div>
								<input type="submit" value="submit" class="btn btn-warning"/>
                              <!--  <input type="submit" value="payment" class="btn btn-warning"/> --!>
							</div>
							</div>
	
</div>
</div>
</div>

	</form>
	
</body>
</html>

<?php
echo"<body>";
if(isset($_POST['name'])&& isset($_POST['email']))
	{
		$con=mysqli_connect("localhost" , "root" ,"","login");
		
		if(mysqli_connect_errno())
		{
			 echo "failed";
			 mysqli_connect_error();
		}

		
		$passs1=$_POST['Pass1'];
		$passs2=$_POST['Pass2'];

		if($passs1==$passs2)
		{
				$sql="insert into register(name,email,mobile,password,address) values('".$_POST['name']."',
				'".$_POST['email']."','".$_POST['mobile']."','".$_POST['Pass1']."','".$_POST['address']."')";
				if(!mysqli_query($con, $sql))
				{	
					echo "Error".mysqli_error($con);
				}
			
			else
			{
				echo "<script> alert('Registered  Successfull'); window.location='Login_form.html'; </script>";
			}
		}

else
		{
			print"<script type=\"text/javascript\">";
			print "alert('The both passwords who have entered do not match')";
			print"</script>";
			echo'<script>history.go(-1);</script>';
		}
		mysqli_close($con);
	}
?>


