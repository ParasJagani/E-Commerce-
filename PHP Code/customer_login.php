<?php include('config_online_shopping.php'); ?>
<!DOCTYPE html>
<html>
<body>
<p><h2> Please enter email address and Password </h2></p>
<form action="action_cust_login.php" method= "post">
Email:
<input type="text" name="email">
<br><br>
Password:
<input type="password" name="password" >
<br><br>
<input type="submit" value="submit">
</form>
<br><br>
<h3><p>If new user then</p>
<a href="customer_reg.php"> CLICK HERE!</a></h3>
</body>
</html>