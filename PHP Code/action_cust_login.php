<?php
session_start();
?>
<?php
include('config_online_shopping.php');
?>
<?php 
$stmt = $dbh->prepare("SELECT * from customer_table WHERE Cust_email = '".$_POST["email"]."' and Cust_password = '".$_POST['password']."'");
$stmt-> execute();
$result = $stmt->fetchAll();
$count = $stmt->rowCount();
print_r($result);
if($count==1){
 foreach($result as $result) {
 $id    = $result["id"];	 
 $fname = $result["Cust_firstname"];
 $lname = $result["Cust_lastname"];
 $email = $result["Cust_Email"];
 $password = $result["Cust_password"];
 }
$_SESSION['id']       =  $id; 
$_SESSION['FIRSTNAME'] = $fname;
$_SESSION['LASTNAME'] = $lname;
$_SESSION['EMAIL'] = $email;
$_SESSION['cart'] = array();
echo "successfull";
header('location:cust_profile.php');
}
else{
echo "LOGIN FAILED";
}
//print_r($result);


?>