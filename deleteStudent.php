<?php
	include("menu.php");
	include("dbconnect.php");
	$id=$_GET['id'];
	$q="delete from tbl_student where id=$id";
	$result=mysqli_query($con,$q) or die(mysqli_error($con));
	echo "Data deleted...";
?>