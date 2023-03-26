<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<form name="st" action="connect.php" method="post">
		<p>Name</p>
		<p><input type="text" name="name"></p>
		<p>Address</p>
		<p><textarea rows="4" cols="24" name="address"></textarea></p>
		<p>Contact</p>
		<p><input type="text" name="contact"></p>
		<p>Gender</p>
		<p>
			<input type="radio" name="gender" value="male">Male
			<input type="radio" name="gender" value="female">Female
		</p>
		<p>Image</p>
		<p><input type="file" name="image"><p>
		<p><input type="submit" name="btnsubmit" value="Save"></p>
	</form>
</body>
</html>