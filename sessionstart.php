<?php
	session_start();
	if(isset($_SESSION['username'])){
		echo "username:".$_SESSION['username'];
		echo "<br>token:".$_SESSION['token'];
	}
	else
	{
		echo "session not created";
	}
?>
