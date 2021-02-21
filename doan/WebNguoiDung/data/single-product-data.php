<?php
	
	if(isset($_GET['id']))
		$id = $_GET['id'];
	else 
		$id=1;	
		
	$vertical = DP::run_query("select sp.anhdaidien, sp.tensp, sp.gia, sp.mota, ncc.tenncc, lsp.tenloaisp, sp.idsp, sp.soluongton
								from sanpham sp, loaisanpham lsp, nhacungcap ncc 
								where sp.idloaisp=lsp.idloaisp and sp.idncc=ncc.idncc and sp.idsp=?",[$id],2);
	
	
	
	$product_list = DP::run_query(" select anhdaidien, tensp, gia,idsp from sanpham where idncc in ( select idncc
																							from sanpham
																							where idsp=?) limit 1,4",[$id],2);
	
	
	$reviewer = DP::run_query(" select * from binhluan where idsp=?",[$id],2);
																							
		
	$table = array(
				array("TieuDe"=>"Width","ThuocTinh"=>"128mm"),
				array("TieuDe"=>"Height","ThuocTinh"=>"508mm"),
				array("TieuDe"=>"Depth","ThuocTinh"=>"85mm"),
				array("TieuDe"=>"Weight","ThuocTinh"=>"52gm"),
				array("TieuDe"=>"Quality checking","ThuocTinh"=>"yes"),
				array("TieuDe"=>"Freshness Duration","ThuocTinh"=>"03days"),
				array("TieuDe"=>"When packeting","ThuocTinh"=>"Without touch of hand"),	
				array("TieuDe"=>"Each Box contains","ThuocTinh"=>"60pcs"),					
	
	);
	
	
	
	$reviews = array (
					array("link"=>"#","TieuDe"=>"5 Star","GiaTri"=>"01"),
					array("link"=>"#","TieuDe"=>"4 Star","GiaTri"=>"01"),
					array("link"=>"#","TieuDe"=>"3 Star","GiaTri"=>"01"),
					array("link"=>"#","TieuDe"=>"2 Star","GiaTri"=>"01"),
					array("link"=>"#","TieuDe"=>"1 Star","GiaTri"=>"01"),
	
	);
	
	
	
	
?>