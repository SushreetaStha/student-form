<?php
	$image_name=$_FILES['image']['name'];
	$image_name="photo/".$image_name;

	$id=$_POST['id'];
	$name=$_POST['name'];
	$address=$_POST['address'];
	$contact=$_POST['contact'];
	$gender=$_POST['gender'];
	include("menu.php");
	include("dbconnect.php");

	$query="update tbl_student set
	Name='$name',
	Address='$address',
	Contact='$contact',
	Gender='$gender',
	Image='$image_name'
	where id=$id";

	$result=mysqli_query($con,$query) or die(mysqli_error($con));

	move_uploaded_file($_FILES['image']['tmp_name'], $image_name);
	echo "<br>Data updated successfully";

?>