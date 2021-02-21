<?php
	$level="../";
	include $level."Pages/Config_index.php";
	include $level.Lib_path."DB.php";
	$page = $_GET['page'];
	var_dump($page);
	$idsp =$_GET['idsp'];
	var_dump($idsp);
	
	
	$result =DP::run_query("DELETE FROM binhluan WHERE idbinhluan = ?",[$idsp],1);
	header("location:".$level."Danhsachcomment.php?page=".$page);

?>