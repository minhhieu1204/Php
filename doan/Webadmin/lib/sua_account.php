<?php
			$level="../";
	include $level."Pages/Config_index.php";
	include $level.Lib_path."DB.php";
	var_dump($_GET);
	$idkh=(int)$_GET['idkh'];
	$page=$_GET['page'];
	$username=$_GET['username'];
	$pass=$_GET['pass'];
	$tk=DP::run_query("update taikhoan set username=?,pass=? where idkh=?",[$username,$pass,$idkh],1);
	$ten=$_GET['customer'];
	$email=$_GET['email'];
	$sdt=$_GET['phone'];
	$diachi=$_GET['diachi'];
	$khachhang=DP::run_query("update khachhang set ten=?,email=?,sdt=?,diachi=? where idkh=?",[$ten,$email,$sdt,$diachi,$idkh],1);
	header("location: ".$level."danhsachtaikhoan.php?=page".$page);
?>