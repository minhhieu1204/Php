<?php
			$level="../";
	include $level."Pages/Config_index.php";
	include $level.Lib_path."DB.php";
	var_dump($_GET);
	$page=$_GET['page'];
	$username=$_GET['username'];
	$pass=$_GET['pass'];
	$ten=$_GET['customer'];
	$email=$_GET['email'];
	$sdt=$_GET['phone'];
	$ngaysinh=$_GET['birth'];
	$diachi=$_GET['diachi'];
	$khachhang=DP::run_query("insert into  khachhang(ho,ten,ngaysinh,gioitinh,email,sdt,diachi) values(?,?,?,?,?,?,?)",[null,$ten,null,null,$email,$sdt,$diachi],3);
	$kh=DP::run_query("select idkh from khachhang order by idkh desc limit 1",[],2);
	$idkh=$kh[0]['idkh'];
	$tk=DP::run_query("insert into  taikhoan(username,pass,tinhtrang,idkh) values(?,?,?,?)",[$username,$pass,0,$idkh],3);
	header("location: ".$level."danhsachtaikhoan.php?=page".$page);
?>