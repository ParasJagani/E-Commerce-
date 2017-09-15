<?php session_start(); ?>
<?php 
$cart = $_SESSION['cart'];
$i = 0 ;
foreach( $cart as $result)
{
	$amount = $result['value']* $result['counter'];
	$i= $i + $amount ;
	 
}
?><h1>Your is order placed successfull, total amount = $ <?php echo $i; ?> </h1>
<?php
 unset($_SESSION['cart']);
 ?>

	 
	 
