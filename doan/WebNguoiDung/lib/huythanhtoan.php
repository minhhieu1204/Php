<?php
	
	$level="../";
	include ($level."config.php");
	include ($level.Lib_path."DB.php");
	$idhdb=$_GET['idhdb'];
	$result=DP::run_query("delete from hoadonban where idhdb=?",[$idhdb],1);
	$result=DP::run_query("delete from chitiethoadon where idhdb=?",[$idhdb],1);
	header("location:".$level."index.php");

?>