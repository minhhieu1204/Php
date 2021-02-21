<?php
if(isset($_GET['page']))
		$page = $_GET['page'];
	else	
		$page=1;
	if($page<=0)
		$page=1;
	$ten=$_GET['ten'];
	$danhsach = DP::run_query("select * from hoadonban hd where  (hd.idhdb=?) or (hd.tinhtranghoadon like ?) or (hd.ngaylap like ?)  or (hd.diachi like ?) or (hd.sdt like ?) ",[$ten,$ten,$ten,$ten,$ten],2);
	$hoadon=DP::run_query("select hd.idhdb,hd.ngaylap,sp.tensp,hd.tinhtranghoadon,hd.diachi,hd.sdt,hd.tonggiatri,ct.soluong,ct.tonggia 
				from hoadonban hd,chitiethoadon ct,sanpham sp where hd.idhdb=ct.idhdb and ct.idsp=sp.idsp and (  hd.idhdb=? or hd.tinhtranghoadon like ? or hd.ngaylap like ? or hd.diachi like ? or hd.sdt like ? ) limit ?,4 ",[$ten,$ten,$ten,$ten,$ten,($page-1)*4],2);

?>
