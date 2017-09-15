<?php session_start(); ?>
<?php
if(!isset($_SESSION['cart'])){
	$_SESSION['cart'] = array();
}
$img = $_POST['img'];
$name = $_POST['name'];
$id = $_POST['id'];
$value = $_POST['val'];
$cart = $_SESSION['cart'];

$i = 1;

//print_r($total);

//array_push($_SESSION['cart'],$total); 
function searchForId($id, $array) {
   foreach ($array as $key => $val) {
       if ($val['id'] === $id) {
           return $key;
       }
   }
   return null;
}
foreach($cart as $arr1)
{
if(in_array($id,$arr1))
{ 
$i++;
$counter = $arr1['counter'];
$counter++;
//echo $counter;
//echo $counter;
$total = array("img"=>$img,"name"=>$name,"id"=>$id,"value"=>$value,"counter"=>$counter);
/*
$a2 = array("counter"=>$cnt);
array_splice($total,-1,1,$a2);*/
//print_r($total['counter']);

$uid = searchForId($id, $_SESSION['cart']);
//echo $uid;
unset($_SESSION['cart'][$uid]);
array_push($_SESSION['cart'],$total);
//print_r($total);

 ?>

<script> alert("Cart updated Successfully" )</script>
<?php  
} }
//echo $i
if($i==1)
{
$total = array("img"=>$img,"name"=>$name,"id"=>$id,"value"=>$value,"counter"=>$i);
array_push($_SESSION['cart'],$total); 
 ?>
<script> alert("Successfully added to the cart" )</script> <?php 
} 
 
// Items added to cart
?>

 

