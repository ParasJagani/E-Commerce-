<style>
table, th , td { 
border: 1px solid black;
border-collapse: collapse ;
padding: 10px ;
	
}
.bordernone
{
border: none;	
}

</style>
<?php session_start(); ?>
<?php 
/*foreach($cart as $cart){
$cart['amount']+=$cart['amount'];} */
/*  foreach($cart as $arr1)
{
    if(in_array("Earphones",$arr1))
	{echo "results found"; }
 else{
	 echo "not found";
} }  */?>
<div id="loadhere" >
<?php if (!isset($_SESSION['cart']) || empty($_SESSION['cart'])) { 
 


 ?> <h1>Oops! Your Cart is Empty </h1> <?php   
} else{ 
?>
<table style="border: 1px solid black;">
<tr>
<th>IMAGE</th>
<th>ITEMS</th>
<th>Quantity</th>
<th></th>
<th>PRICE</th>
<th>Total</th>
<tr/>
<?php $cart = $_SESSION['cart'];
//print_r($cart);
 foreach($cart as $result) 
{ ?> 
<tr id="load_comment">
<td> <img style="height:80px; width:200px;" class="img" src="imgs/<?php echo $result['img']?>.jpg" alt="image";></td> 
<td> <?php echo $result['name'] ?></td>
<td class="load_quantity">
<?php echo $result['counter']?>
</td> 
<td class="bordernone">x</td>
<td>$<?php echo $result['value'] ; ?> </td>
<td>$<?php echo $result['value'] * $result['counter']  ; ?> </td>
<td><a href="#" class="remove_product" key="<?php echo $result['id'] ?>"  >Remove</a></td>
</tr>
<?php 
} ?>
</table>
<?php $i = 0 ;
foreach( $cart as $result)
{
	$amount = $result['value']* $result['counter'];
	$i= $i + $amount ;
	 
}
?><h1>Total amount = $ <?php echo $i; ?> </h1>
<br><br>
<button class="checkout_total"> Checkout</button>
<?php 
}  
?>
<script type="text/javascript" src="https://code.jquery.com/jquery-1.12.4.js"> </script>
<script type="text/javascript">
$(document).ready(function(){
			$('.remove_product').on('click',function() {  
            //alert("here");
            var id = $(this).attr("key");
			var dataString1 = "idvalue="+id;
			//alert(dataString1);
			$.ajax({
			type: "post",
			url: "remove_product.php",
			data:dataString1,
			success: function(result) {
			//alert(result);
			$("#load_comment").html(result);
			}
			});
			});
	////////////////////////////////////////////////////////////////////////////////////		
			$('.checkout_total').on('click',function() {  
            //alert("here");
            //var id = $(this).attr("key");
			//var dataString1 = "idvalue="+id;
			//alert(dataString1);
			$.ajax({
			type: "post",
			url: "cart_total.php",
			//data:dataString1,
			success: function(result) {
			//alert(result);
			$("#loadhere").html(result);
			}
			});
			});	
});			
			
</script>
</div>
