<?php
	$level="../";
	include $level."Pages/Config_index.php";
	include $level.Lib_path."DB.php";
	
	$sdt =$_GET['sdt'];
	$tenncc =$_GET['tenncc'];
	$diachi =$_GET['diachi'];

	$sesult = DP::run_query("insert into nhacungcap (tenncc,sdt,diachi)
								values (?,?,?)",[$tenncc,$sdt,$diachi],3);
	$ds = DP::run_query("select idncc from nhacungcap",[],2);
	
	
		$page=ceil(sizeof($ds)/4);
	header("location:".$level."Danhsachsp.php?page=".$page);
	

?>