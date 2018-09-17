 <?php
session_start();
require 'db_config.php';
$uid=$_SESSION['uid'];
$username=$_SESSION['username'];
$paypal_url='https://www.sandbox.paypal.com/cgi-bin/webscr'; // Test Paypal API URL
$paypal_id='your_seller_id'; // Business email ID
?>

<body>
<h2>Welcome, <?php echo $username;?></h2>
<?php
$result = mysql_query("SELECT * from products");
while($row = mysql_fetch_array($result))
{
?>
<img src="images/<?php echo $row['product_img'];?>" />
Name: <?php echo $row['product'];?>
Price: <?php echo $row['price'];?>$
// Paypal Button 
<form action='<?php echo $paypal_url; ?>' method='post' name='form<?php echo $row['pid']; ?&gt;'>
<input type='hidden' name='business' value='<?php echo $paypal_id; ?>'>
<input type='hidden' name='cmd' value='_xclick'>
<input type='hidden' name='item_name' value='<?php echo $row['product'];?>'>
<input type='hidden' name='item_number' value='<?php echo $row['pid'];?>'>
<input type='hidden' name='amount' value='<?php echo $row['price'];?>'>
<input type='hidden' name='no_shipping' value='1'>
<input type='hidden' name='currency_code' value='USD'>
<input type='hidden' name='cancel_return' value='http://yoursite.com/cancel.php'>
<input type='hidden' name='return' value='http://yoursite.com/success.php'>
<input type="image" src="https://paypal.com/en_US/i/btn/btn_buynowCC_LG.gif" name="submit">
</form>


<?php
}
?>
</body>