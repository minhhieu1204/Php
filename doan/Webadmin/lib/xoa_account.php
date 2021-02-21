<?php
		$level="../";
	include $level."Pages/Config_index.php";
	include $level.Lib_path."DB.php";
	$idkh=$_GET['idkh'];
	$page=$_GET['page'];
	$xoa=DP::run_query("delete from taikhoan where idkh=?",[$idkh],1);
	header("location: ".$level."danhsachtaikhoan.php?page=".$page);
?>