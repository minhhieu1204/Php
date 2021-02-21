<?php
	$feature_part = DP::run_query( "select anhdaidien, tenloaisp, idloaisp from loaisanpham limit 0,3",[],2);
	
	
	$arrival_part =  DP::run_query( "select sp.anhdaidien, tenloaisp, idsp, tensp, gia from sanpham sp, loaisanpham lsp where sp.daxoa=0 and sp.idloaisp=lsp.idloaisp limit 1,6",[],2);
	

?>