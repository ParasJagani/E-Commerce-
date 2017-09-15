<?php session_start();?>
<?php
$id = $_POST['idvalue'];
function searchForId($id, $array) {
   foreach ($array as $key => $val) {
       if ($val['id'] === $id) {
           return $key;
       }
   }
   return null;
}
$uid = searchForId($id, $_SESSION['cart']);
unset($_SESSION['cart'][$uid]);
?><p style="color:red;">Successfully removed from the cart</p>
<?php 
//header('location:view_cart.php');
//$key = array_search($id, array_column($_SESSION['cart'], 'id'));
//echo $uid;
/* echo $id ;
unset($_SESSION['cart'][1]);*/
//print_r($_SESSION['cart']);

?>