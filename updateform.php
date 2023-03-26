<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<?php
	include("menu.php");
	$id=$_GET['id'];
	$q="select * from tbl_student where id=$id";
	include("dbconnect.php");
	$result=mysqli_query($con,$q) or die(mysqli_error($con));
	$data=mysqli_fetch_array($result,MYSQLI_ASSOC);
	?>

	<form name="st" action="updateStudent.php" method="post" enctype="multipart/form-data">
		<fieldset><legend>Update Form</legend>
		<input type="hidden" name="id" value="<?php echo $data['id'];?>">
		<p>Name</p>
		<p><input type="text" name="name" value="<?php echo $data['Name'];?>"></p>
		<p>Address</p>
		<p><textarea rows="4" cols="24" name="address"><?php echo $data['Address'];?></textarea></p>
		<p>Contact</p>
		<p><input type="text" name="contact" value="<?php echo $data['Contact'];?>"></p>
		<p>Gender</p>
		<p>
			
			<input type="radio" name="gender" value=male 
			<?php 
			if ($data['Gender']=='male')
			 echo "checked";?>
			>Male
			<input type="radio" name="gender" value=female
			<?php 
			if ($data['Gender']=='female')
			 echo "checked";?>
			>Female
		</p>
		<p>Image</p>
		<p><input type="file" name="image"><p>
		<p><input type="submit" name="btnsubmit" value="Update"></p>
		</fieldset>
	</form>
</body>
</html>