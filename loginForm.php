<?php
	$username="";
	$password="";
	if(isset($_COOKIE['username']))
	{
		$username=$_COOKIE['user'];
		$password=$_COOKIE['pass'];
	}
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style type="text/css">
		fieldset{
			width: 190px;
		}
	</style>
</head>
<body>
	<?php
	include("menu2.php");
	?>
		<form name="st" action="loginProcess.php" method="post" enctype="multipart/form-data">
		<fieldset><legend>Login</legend>
		<p>Username:</p>
		<p><input type="text" name="username" value="<?php echo $username;?>"></p>
		<p>Password:</p>
		<p><input type="password" name="pass" value="<?php echo $password;?>"></p>
		<p><input type="checkbox" name="rem_user">Remember user?</p>
		<p><input type="submit" name="btnsubmit" value="Login"></p>
		</fieldset>
	</form>
</body>
</html>