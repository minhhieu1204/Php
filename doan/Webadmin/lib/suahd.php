<?php
	$level="../";
	include $level."Pages/Config_index.php";
	include $level.Lib_path."DB.php";
	$diachi=$_POST['suahd'];
	$idhdb=$_GET['idhdb'];
	$page=$_GET['page'];
	$update=DP::run_query("update hoadonban set diachi=? where idhdb=?",[$diachi,$idhdb],1);
	header("location:".$level."danhsachhoadon.php?page=".$page);
?>