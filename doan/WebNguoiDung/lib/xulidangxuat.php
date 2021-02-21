<?php
	session_start();
	$level="../";
	include ($level."config.php");
	include ($level.Lib_path."DB.php");
	
	unset($_SESSION['user']);
	unset($_SESSION['pass']);
	unset($_SESSION['ten']);
	unset($_SESSION['tinhtrang']);
	unset($_SESSION['idkh']);
	var_dump($_SESSION);
	header('location:'.$level.'login.php');

?>