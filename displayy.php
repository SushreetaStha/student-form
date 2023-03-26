<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style type="text/css">
		table{
			border-collapse: collapse;
			margin-top:25px; 
		}
		tr:nth-child(odd)
		{
			background-color: #ebebeb;
		}

		th{
			background-color: rgba(0,0,0,0.8);
			color: white;
			padding: 10px 20px;
			font-family: century;
			font-size: 18px;
		}
		td{
			padding: 10px 20px;
			font-family: century;
			font-size: 18px;
		}
	</style>
</head>
<body>
<?php
	include("menu.php");
	$con=mysqli_connect('localhost','root','') or die(mysqli_error($con));
	$db=mysqli_select_db($con,'db_prime') or die(mysqli_error($con));
	$q="select * from tbl_student";
	$result=mysqli_query($con,$q) or die(mysqli_error($con));
	echo "<table border=1>";
	echo "<tr>";
	echo "<th>Id</th>";
	echo "<th>Name</th>";
	echo "<th>Address</th>";
	echo "<th>Contact</th>";
	echo "<th>Gender</th>";
	echo "</tr>";
	while ($row=mysqli_fetch_array($result)) {
		echo "<tr>";
		echo "<td>".$row[0]."</td>";
		echo "<td><a href='viewProfile.php?id=".$row[0]."'>".$row[1]."</a></td>";
		echo "<td>".$row[2]."</td>";
		echo "<td>".$row[3]."</td>";
		echo "<td>".$row[4]."</td>";
		echo "</tr>";
	}
	echo "</table>";
?>
</body>
</html>
