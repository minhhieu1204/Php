
	
	<?php
	if(isset($_GET['keyword']))
	{
		$result = 1;
		if(isset($_GET['page']))
		$page = $_GET['page'];
		else	
		$page=1;
		if($page<=0)
		$page=1;
			$key = "%".$_GET['keyword']."%";
		$danhsach = DP::run_query("SELECT  *
										FROM sanpham sp, nhacungcap ncc, loaisanpham lsp  
										WHERE sp.idloaisp=lsp.idloaisp and sp.idncc=ncc.idncc and sp.tensp like ? or ncc.tenncc like ? or lsp.tenloaisp like ? or sp.gia = ? ",[$key,$key,$key,$key],2);

				$list = DP::run_query("SELECT  sp.anhdaidien, sp.idsp, sp.tensp, sp.daxoa, sp.gia, sp.soluongton, lsp.tenloaisp, ncc.tenncc 
										FROM sanpham sp, nhacungcap ncc, loaisanpham lsp  
										WHERE sp.idloaisp=lsp.idloaisp and sp.idncc=ncc.idncc and sp.tensp like ? or ncc.tenncc like ? or lsp.tenloaisp like ? or sp.gia like ? limit ?,4",[$key,$key,$key,$key,($page-1)*4],2);
	}
	else 
	{
		$result = 2;
		if(isset($_GET['page']))
		$page = $_GET['page'];
		else	
		$page=1;
		if($page<=0)
		$page=1;
		$danhsach = DP::run_query("select * from sanpham ",[],2);
	
		$list = DP::run_query("select sp.anhdaidien, sp.idsp, sp.tensp, sp.daxoa, sp.gia, sp.soluongton, lsp.tenloaisp, ncc.tenncc
							from sanpham sp, nhacungcap ncc, loaisanpham lsp 
							where sp.idloaisp=lsp.idloaisp and sp.idncc=ncc.idncc limit ?,4",[($page-1)*4],2);
	}
	
?>
	
	

