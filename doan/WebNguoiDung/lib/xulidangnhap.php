<?php
	session_start();
	$level="../";
	include ($level."config.php");
	include ($level.Lib_path."DB.php");
	var_dump($_POST);
	$username = $_POST['username'];
	$pass = $_POST['password'];
	$pass=trim($pass);
	$_SESSION['user']=$username;
	if(isset($_POST['selector']))
	{
		setcookie("user",$username,time()+3600,"/");
		setcookie("pass",$pass,time()+3600,"/");
	}
	else
	{
		setcookie("user",'',time()+3600,"/");
		setcookie("pass",'',time()+3600,"/");
	}
	
	var_dump($_COOKIE);
	$dangnhap = DP::run_query("select tk.idkh, tinhtrang, ten from taikhoan tk, khachhang kh where kh.idkh=tk.idkh and username=? and pass = ? ",[$username,$pass],2);
	if(!empty($dangnhap))
	{
		$_SESSION['idkh']=$dangnhap[0]['idkh'];
		$_SESSION['tinhtrang']=$dangnhap[0]['tinhtrang'];
		$_SESSION['ten']=$dangnhap[0]['ten'];
	}
	var_dump($dangnhap);
	//var_dump($_SESSION);
	header('location:'.$level.'login.php');
	?>