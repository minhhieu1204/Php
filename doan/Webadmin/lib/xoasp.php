<?php
	$level="../";
	include $level."Pages/Config_index.php";
	include $level.Lib_path."DB.php";
	$page = $_GET['page'];
	var_dump($page);
	$idsp =$_GET['idsp'];
	var_dump($idsp);
	
	
	$result =DP::run_query("update sanpham 
						set daxoa=1
						where idsp=?",[$idsp],1);
	header("location:".$level."product-list.php?page=".$page);

?>