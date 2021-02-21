<?php
$level="../";
	session_start();
	unset($_SESSION['cart']);
	header("location:".$level."cart.php");
?>