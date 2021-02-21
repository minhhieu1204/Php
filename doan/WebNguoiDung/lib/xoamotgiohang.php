<?php
	session_start();
	$level="../";
	$idsp=$_GET['idsp'];
	unset($_SESSION['cart'][$idsp]);
	header("location:".$level."cart.php");

?>