<?php	
	$con=mysqli_connect('localhost','root','') or die(mysqli_error($con));
	$db=mysqli_select_db($con,'db_prime') or die(mysqli_error($con));
?>