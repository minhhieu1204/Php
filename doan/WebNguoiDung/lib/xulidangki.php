<?php

	$level="../";
	include ($level."config.php");
	include ($level.Lib_path."DB.php");
	
	$username = $_POST['username'];
	var_dump($username);
	$pass = $_POST['password'];
	var_dump($pass);
	$ten = $_POST['first_name']; 
	$ho=$_POST['last_name'];
		var_dump($ten);
	$email = $_POST['email'];
		var_dump($email);
	$sdt = $_POST['phone'];
		var_dump($sdt);
	$ngaysinh = $_POST['birthday'];
		var_dump($ngaysinh);
	$diachi = $_POST['address'];
		var_dump($diachi);
	
	$gioitinh = $_POST['gioitinh'];
		var_dump($gioitinh);
		
	
	
	$result = DP::run_query("insert into khachhang (ho,ten, ngaysinh,gioitinh,email,sdt, diachi)
								value(?,?,?,?,?,?,?)", [$ho,$ten,$ngaysinh,$gioitinh,$email,$sdt,$diachi],3);
	$kh = DP::run_query("select max(idkh) from khachhang ",[],2);
									
	$id = $kh[0][0];
	var_dump($id);
	var_dump($kh);
	$result = DP::run_query("insert into taikhoan (username, pass,idkh)
								value(?,?,?)", [$username,$pass,$id],3);
	header('location:'.$level.'login.php');

?>