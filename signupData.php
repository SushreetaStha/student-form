<?php
	include("menu.php");
	include("dbconnect.php");
	$username=$_POST['username'];
	$pass=$_POST['pass'];
	$query="INSERT INTO `users`(`Username`, `Password`) VALUES('$username','$pass')";
	$result=mysqli_query($con,$query) or die(mysqli_error($con));
	echo "<br>User created.";
?>