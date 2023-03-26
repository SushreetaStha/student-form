<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style type="text/css">
		fieldset
		{
			width: 190px;
		}
	</style>
</head>
<body>
	<?php
	include("menu.php");
	?>
		<form name="st" action="signupData.php" method="post" enctype="multipart/form-data">
		<fieldset><legend>Sign Up</legend>
		<p>Username:</p>
		<p><input type="text" name="username"></p>
		<p>Password:</p>
		<p><input type="password" name="pass"></p>
		<p>Confirm Password:</p>
		<p><input type="password" name="rpass"></p>
		<p><input type="submit" name="btnsubmit" value="Sign Up"></p>
		</fieldset>
	</form>
</body>
</html>