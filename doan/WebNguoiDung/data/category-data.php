<?php
	$browse_category =array(
				array("link"=>"#","TieuDe"=>"Fruits and Vegetables"),
				array("link"=>"#","TieuDe"=>"Electronics"),
				array("link"=>"#","TieuDe"=>"Cooking"),
				array("link"=>"#","TieuDe"=>"Beverages"),
	);
	$brands =array(
				array("link"=>"","TieuDe"=>"Apple"),
				array("link"=>"","TieuDe"=>"Asus"),
				array("link"=>"","TieuDe"=>"Gionee"),
				array("link"=>"","TieuDe"=>"Samsung"),
	);
	$color =array(
				array("link"=>"","TieuDe"=>"Yellow"),
				array("link"=>"","TieuDe"=>"Black Leather"),
				array("link"=>"","TieuDe"=>"Black with red"),
				array("link"=>"","TieuDe"=>"Gold"),
	);
	$sorting = array (
					array ("GiaTri"=>"1","TieuDe"=>"Some option"),
					array ("GiaTri"=>"2","TieuDe"=>"Another option"),
					array ("GiaTri"=>"3","TieuDe"=>"Potato"),
	
	);
	
	$show = array (
					array ("GiaTri"=>"1","TieuDe"=>"Show 18"),
					array ("GiaTri"=>"2","TieuDe"=>"Show 30"),
	
	);
	
	if(isset($_GET['page']))
			$page=$_GET['page'];
		else 
			$page=1;
	if(empty($_GET['key'])==true)
			$key="%%";
		else
			$key = "%".$_GET['key']."%";
		
	if(empty($_GET['idloai'])==false)
	{	$result=1;
		$idloaisp = $_GET['idloai'];
		$category_area = DP::run_query("select * from sanpham where daxoa=0 and idloaisp=? limit 0,?",[$idloaisp,$page*6],2);
	}	
	else
	{
		$result=2;
		$category_area = DP::run_query("select tensp, gia, sp.anhdaidien, idsp from sanpham sp, loaisanpham lsp 
										where sp.idloaisp=lsp.idloaisp and sp.daxoa=0 and (tensp like ? or gia like ? or tenloaisp like ? ) 
										limit 0,? ",[$key,$key,$key,($page*6)],2);	
	}
?>