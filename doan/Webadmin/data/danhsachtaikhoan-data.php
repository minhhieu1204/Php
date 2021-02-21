<?php
	if(isset($_GET['page']))
		$page = $_GET['page'];
	else	
		$page=1;
	if($page<=0)
		$page=1;
	$danhsach =DP::run_query("select * from khachhang",[],2);
	
	$list = DP::run_query("select ho,ten, ngaysinh, gioitinh, email, username, sdt, diachi, tk.idkh, tk.tinhtrang 
							from taikhoan tk, khachhang kh 
							where tk.idkh=kh.idkh limit ?,4",[($page-1)*4],2);

?>