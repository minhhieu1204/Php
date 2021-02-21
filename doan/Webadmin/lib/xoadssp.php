<?php
	$level="../";
	include $level."Pages/Config_index.php";
	include $level.Lib_path."DB.php";
	$idncc = $_GET['idncc'];
	
	$page=$_GET['page'];
	$sesult = DP::run_query("update nhacungcap
							set daxoa=1
							where idncc=?",[$idncc],1);
	header("location:".$level."Danhsachsp.php?page=".$page);
	

?>