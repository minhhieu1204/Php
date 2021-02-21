<?php
	
	if(isset($_SESSION['tinhtrang']))
		$dshd = DP::run_query("select idhdb from hoadonban hd
						 	where hd.idkh=? and tinhtranghoadon like N'Not delivery'",[$_SESSION['idkh']],2);
	else $dshd=null;
	//var_dump($dshd);
	$order=null;
	if($dshd!=null)
	{
		foreach($dshd as $i)
	{
		$order[$i['idhdb']]=DP::run_query("select hd.diachi, hd.tonggiatri, ct.tonggia, ct.soluong , sp.tensp , sp.gia, hd.idhdb, hd.sdt from hoadonban hd, chitiethoadon ct, sanpham sp
						 	where hd.idhdb=ct.idhdb and hd.idhdb=? and sp.idsp=ct.idsp",[$i['idhdb']],2);
	}
	}
	
	//var_dump($order);

?>