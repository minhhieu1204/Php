<?php
	$level="../";
	include($level."config.php");
	include_once($level.Lib_path."DB.php");
	
	session_start();
	$idsp=$_GET['id'];
	if(isset($_GET['soluong']))
		$soluong=$_GET['soluong'];
	else
		$soluong=1;
	$sanpham =DP::run_query("select * from sanpham where idsp=?",[$idsp],2);
	$tensp=$sanpham[0]['tensp'];
	$gia=$sanpham[0]['gia'];
	$anhdaidien = $sanpham[0]['anhdaidien'];
	if(isset($_SESSION['cart'][$idsp]))
	{
		$_SESSION['cart'][$idsp]['soluong']=
		$_SESSION['cart'][$idsp]['soluong']+1;
	}
	else
	{
		$_SESSION['cart'][$idsp]=array("idsp"=>$idsp,"tensp"=>$tensp,"gia"=>$gia,"anhdaidien"=>$anhdaidien,"soluong"=>$soluong);
	}
	var_dump($_SESSION);
	//unset($_SESSION['cart']);
	header("location:".$level."cart.php");
	
?>