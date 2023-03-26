<?php
	include("menu.php");
	include("dbconnect.php");
	$image_name=$_FILES['image']['name'];
	$image_name="photo/".$image_name;
	$name=$_POST['name'];
	$address=$_POST['address'];
	$contact=$_POST['contact'];
	$gender=$_POST['gender'];
	$query="INSERT INTO `tbl_student`(`Name`, `Address`, `Contact`, `Gender`, `Image`) VALUES('$name','$address','$contact','$gender','$image_name')";
	$result=mysqli_query($con,$query) or die(mysqli_error($con));
	move_uploaded_file($_FILES['image']['tmp_name'], $image_name);
	echo "<br>Data inserted successfully.";
?>
