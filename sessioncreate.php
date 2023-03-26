<?php
	session_start();
	$_SESSION['username']="admin";
	$_SESSION['token']="1234";
	echo "session created";
?>