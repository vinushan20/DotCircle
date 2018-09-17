<?php
session_start();
$con=mysqli_connect("localhost","root","","login");
if(mysqli_connect_errno())
{ 
	echo "failed";
	mysqli_connect_error();
}

$sql="select * from register where email='".$_POST['email']."' and password = '".$_POST['password']."'";
$result=mysqli_query($con,$sql);
if($result)
{
	if(mysqli_num_rows($result)==1)
	{
		$_SESSION['SESS']=$_POST['email'];
		echo "<script>window.location='home.php';</script>";
	}
	else
	{
	echo "<script>alert('Invalid username/password');
	</script>";
	echo "<script>window.location='login_form.php';
	</script>";
	}
}
else
{	
	echo "error";
}
mysqli_close($con);
?>