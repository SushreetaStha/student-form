<?php
	session_start();
	include("menu.php");
	include("dbconnect.php");
	$username=$_POST['username'];
	$password=$_POST['pass'];
	$query="SELECT * FROM `users` WHERE Username='$username' and Password='$password'";
	$result=mysqli_query($con,$query) or die(mysqli_error($con));
	if(mysqli_fetch_array($result))
	{
		$_SESSION['username']=$username;
		$_SESSION['password']=$password;
		if(isset($_POST['rem_user']))
		{
			setcookie("user","$username",time()+(60*60*25));
			setcookie("pass","$password",time()+(60*60*25));
		}
		header('location:index.php');
	}
	else
	{
		die("Username or Password wrong.");
	}
?>