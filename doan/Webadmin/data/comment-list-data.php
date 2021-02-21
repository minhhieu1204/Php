<?php
	if(isset($_GET['page']))
		$page = $_GET['page'];
	else	
		$page=1;
	if($page<=0)
		$page=1;
	$danhsach = DP::run_query("select * from binhluan ",[],2);
	$commentlist = DP::run_query("select * from binhluan limit ?,4",[($page-1)*4],2);	
?>