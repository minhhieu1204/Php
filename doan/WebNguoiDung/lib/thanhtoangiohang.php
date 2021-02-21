<?php
	session_start();
	$level="../";
	include ($level."config.php");
	include ($level.Lib_path."DB.php");
	$_SESSION['diachi'] = $_POST['diachithanhtoan'];
	$_SESSION['sdt'] = $_POST['sdt'];
	$date = getdate();
	$day=$date['mday'];
	$mon=$date['mon'];
	$year=$date['year'];
	$tonggia=0;
	foreach($_SESSION['cart'] as $i)
		$tonggia+=($i['soluong']*$i['gia']);
	$xacnhan = DP::run_query("insert into  hoadonban(ngaylap,tonggiatri,idkh,sdt,diachi)  
								values(?,?,?,?,?) ",["$year/$mon/$day",$tonggia,($_SESSION['idkh']),($_SESSION['sdt']),($_SESSION['diachi'])],3);
	$hoadon = DP::run_query("select idhdb from hoadonban order by idhdb desc limit 0,1",[],2);
	$idhdb = $hoadon[0]['idhdb'];
	var_dump($hoadon);
	foreach($_SESSION['cart'] as $i)
	{
		$xacnhan =  DP::run_query("insert into  chitiethoadon (soluong,tonggia,idhdb,idsp)  
								values(?,?,?,?) ",[$i['soluong'],($i['gia']*$i['soluong']),$idhdb,$i['idsp']],3);
	}
	unset($_SESSION['cart']);
	unset($_SESSION['diachi']);
	unset($_SESSION['sdt']);
	header("location:".$level."confirmation.php");

?>