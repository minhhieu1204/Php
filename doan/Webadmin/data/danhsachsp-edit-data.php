<?php

	$idncc=$_GET['idncc'];
	$page =$_GET['page'];
	$dsspedit = DP::run_query("select * from nhacungcap where idncc=?",[$idncc],2);
?>