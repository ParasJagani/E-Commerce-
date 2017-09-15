<?php session_start(); ?>
<?php include('config_online_shopping.php'); ?>
<!DOCTYPE html>
<html>
<head>

<style>
body {
    margin: 0;
}
ul {
    list-style-type: none;
    margin: 0;
    padding: 0;
    width: 25%;
    background-color: #f1f1f1;
    position: fixed;
    height: 100%;
    overflow: auto;
}
li a {
    display: block;
    color: #000;
    padding: 8px 16px;
    text-decoration: none;
}
li a.active {
    background-color: #b12948;
    color: white;
}
li a:hover:not(.active) {
    background-color: #555;
    color: white;
}
#loadata{
	background-color: #DCDCDC;
	border: 2px solid black;
;
}

</style>
<link rel="shortcut icon" href="">
</head>
<body>

<ul>
  <li> WELCOME <?php echo"  ".$_SESSION['FIRSTNAME']." !";?> 
  <div class="loadanswer"></div>
  </li>
  <li><a class="active" href="cust_profile.php">HOME</li>
  <li><a class="get_page" mel="0"  href="#">ELECTRONICS</a></li>
  <li><a href="#" class="get_page" mel="1">FOOTWEAR</a></li>
  <li><a href="#">FASHION</a></li>
  <li><a href="#">BOOKS</a></li>
  <li><a href="#">FURNITURE</a></li>
  <li><a href="view_cart.php">VIEW CART</a></li>
  <li><a href="customer_login.php">LOGOUT</a></li>
</ul>

<div id= "loadata" style="margin-left:25%;padding:1px 16px;height:1000px;">
<h1>Hello! Welcome To ECart</h1>
<h2>Please Select your Category!</h2>
 
</div>



</body>
</html>
<script type="text/javascript" src="https://code.jquery.com/jquery-1.12.4.js"> </script>
<script type="text/javascript">
$(document).ready(function(){
	       $(".get_page").click(function() {  
			var mel = $(this).attr("mel");
				 if(mel==0){
					$.ajax({
					 url: "electronics_prod_show.php",
						 cache: false,
								success: function(data) {
									$("#loadata").html(data);
											buynow_click();
											
											
												}
								});
								} 
							 	else if(mel==1){
							$.ajax({
							url: "footwear_show.php", 
								cache: false,
								success: function(data) {
											$("#loadata").html(data);
											buynow_click();
											
														}
								});
									
								} 
						
				return false;
				});
				});
				
//////////////////////////////////
function buynow_click() {
			$('.buy_now_click').on('click',function() {  
             var name = $(this).attr("rel");
			 var img = $(this).attr("img");
			 var id = $(this).attr("mel");
			 var val = $(this). attr("val");
			var dataString = "name="+name+"&id="+id+"&val="+val+"&img="+img;
			//alert(dataString);
			$.ajax({
			type: "post",
			url:"add_to_cart.php",
			data: dataString,
			success: function(data) {
				//alert(data);
			$('.loadanswer').html(data);
			//alert("Successfully added to cart");
											
												}
			});
			});
}

</script>




