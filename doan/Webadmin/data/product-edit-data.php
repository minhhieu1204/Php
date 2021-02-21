<?php

	$idsp=$_GET['idsp'];
	$page =$_GET['page'];
	$spedit = DP::run_query("select * from sanpham where idsp=?",[$idsp],2);
	$dsloaisanpham = DP::run_query("select * from loaisanpham",[],2);
	$dsnhacungcap = DP::run_query("select * from nhacungcap",[],2);
?>