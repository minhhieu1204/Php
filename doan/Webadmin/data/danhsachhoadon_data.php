<?php
if(isset($_GET['page']))
		$page = $_GET['page'];
	else	
		$page=1;
	if($page<=0)
		$page=1;
	$danhsach = DP::run_query("select * from hoadonban ",[],2);
	$hoadon=DP::run_query("select hd.idhdb,hd.ngaylap,sp.tensp,hd.diachi,hd.sdt,hd.tinhtranghoadon,hd.daxoa,hd.tonggiatri,ct.soluong,ct.tonggia 
				from hoadonban hd,chitiethoadon ct,sanpham sp where hd.idhdb=ct.idhdb and ct.idsp=sp.idsp limit ?,4 ",[($page-1)*4],2);
?>