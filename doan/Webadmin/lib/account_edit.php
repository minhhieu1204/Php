<?php
	$idkh=$_GET['idkh'];
	$edit = DP::run_query("select kh.idkh,ho,ten, ngaysinh, gioitinh, email, username,pass, sdt, diachi, tk.idkh, tk.tinhtrang 
							from taikhoan tk, khachhang kh 
							where tk.idkh=kh.idkh and tk.idkh=? ",[$idkh],2);
?>