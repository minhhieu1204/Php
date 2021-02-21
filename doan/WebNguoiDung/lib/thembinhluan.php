<?php

	$level="../";
	include ($level."config.php");
	include ($level.Lib_path."DB.php");
	
	$idsp = $_GET['id'];
	$ten = $_GET['ten'];
	$email = $_GET['email'];
	$sdt = $_GET['number'];
	$noidung = $_GET['nodung'];
	$date = getdate();
	$day=$date['mday'];
	$mon=$date['mon'];
	$year=$date['year'];
	$result = DP::run_query("insert into binhluan (idsp, noidung,email,sdt, ten, ngay)
								value(?,?,?,?,?,?)", [$idsp,$noidung,$email,$sdt,$ten,"$year/$mon/$day"],3);
	//header('location:'.$level.'single-product.php?id='.$idsp);
	//$id=$_GET['id'];
	$reviewer = DP::run_query(" select * from binhluan where idsp=?",[$idsp],2);
	$kq ="";
	foreach($reviewer as $post){
		extract($post);
		
		$kq.='<div class="review_item">
		<div style="display:inline-block;"  class="media">
		  <div class="media-body">
		  <div class="d-flex">
		  
		  <img style="width=5%;height=5%;" src="img/'.$anhdaidien.'"alt="" />
		  <h4 style="display:inline-block;">'.$ten.' <br> <p style="display:inline-block;"> <i style="color:black;"> '.$ngay.' </i>  </p> </h4>
		</div>
			
			
		  </div>
		</div>
		
		<p>
		  '.$noidung.'
		</p>
	  </div>';
	}
	echo $kq;														
?>