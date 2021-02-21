<?php
	$level="../";
	include $level."Pages/Config_index.php";
	include $level.Lib_path."DB.php";
	$idncc = $_GET['idncc'];
	$sdt =$_GET['sdt'];
	$tenncc =$_GET['tenncc'];
	$diachi =$_GET['diachi'];
	$page=$_GET['page'];
	$daxoa = $_GET['daxoa'];
	if($daxoa==1)
	{
		$sesult = DP::run_query("update nhacungcap
							set tenncc=?, diachi=?, sdt=?,daxoa=1
							where idncc=?",[$tenncc,$diachi,$sdt,$idncc],1);	
	}
	else
	{
		$sesult = DP::run_query("update nhacungcap
							set tenncc=?, diachi=?, sdt=?,daxoa=0
							where idncc=?",[$tenncc,$diachi,$sdt,$idncc],1);
	}
	
	header("location:".$level."Danhsachsp.php?page=".$page);
	

?>