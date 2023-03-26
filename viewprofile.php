<?php
	$id=$_GET['id'];
	$q="select * from tbl_student where id=$id";
	include("dbconnect.php");
	$result=mysqli_query($con,$q) or die(mysqli_error($con));
	$data=mysqli_fetch_array($result,MYSQLI_ASSOC);
	$image=$data['Image'];
?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style type="text/css">
		img{
			border:1px solid black;
			height: 200px;
			width:200px;
			border-radius: 50%;
		}

		.btn{
			padding: 0.5rem 1rem;
			background-color: green;
			color: white;
			font-size: 18px;
			border-radius: 8px;
			font-family: century;
			text-decoration: none;
			margin: 0.15rem;
		}
		.btn:hover{
			background-color: darkgreen;
		}

	</style>
</head>
<body>
	<?php
		include("menu.php");
	?>
<p>
	<h3>
		<img src="<?php echo $image; ?>">
	</h3>
	
	<h3>
		Name : <?php  echo $data['Name'];  ?>
	</h3>
	<h3>
		Address : <?php echo $data['Address'] ;  ?>
	</h3>
	<h3>
		Contact :<?php echo $data['Contact'] ;  ?>
	</h3>
	<h3>
		Gender :<?php echo $data['Gender'] ;  ?>
	</h3>
	<a class="btn" href="updateform.php?id=<?php echo $id; ?>">Edit</a>
	<a class="btn" href="deleteStudent.php?id=<?php echo $id; ?>" onclick="return confirm('Are you sure to delete?')"">Delete</a>

</p>
</body>
</html>