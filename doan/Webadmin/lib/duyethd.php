<?php
	$level="../";
	include $level."Pages/Config_index.php";
	include $level.Lib_path."DB.php";
	$idhd = $_GET['id'];
	$ten="delivered";
	$page=$_GET['page'];
	$update=DP::run_query("update hoadonban set tinhtranghoadon=? where idhdb=?",[$ten,$idhd],1); 
	header("location:".$level."danhsachhoadon.php?page=".$page);
?>	