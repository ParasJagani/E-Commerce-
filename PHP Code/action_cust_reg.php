<?php
include('config_online_shopping.php');
?>
<?php
$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$email = $_POST['email'];
$password = $_POST['password'];
$stmt = $dbh -> prepare("INSERT INTO customer_table(cust_firstname, cust_lastname, cust_email, cust_password ) VALUES('$firstname', '$lastname', '$email', '$password')");
$result = $stmt -> execute();
if($result)
{
	header('location:customer_login.php');
}	
?>