<?php
	
	$level="../";
	include $level."Pages/Config_index.php";
	include $level.Lib_path."DB.php";
	$idkh =$_GET['idkh'];
	$page=$_GET['page'];
	$tinhtrang = $_GET['tinhtrang'];
	
	if($tinhtrang==1)
	{
		$result =DP::run_query("update taikhoan
							set tinhtrang=1
							where idkh = ?",[$idkh],1);
							
	}
	else
	{
		$result =DP::run_query("update taikhoan
							set tinhtrang=0
							where idkh = ?",[$idkh],1);
	}
		
							
	header("location:".$level."danhsachtaikhoan.php?page=".$page);
	

?>