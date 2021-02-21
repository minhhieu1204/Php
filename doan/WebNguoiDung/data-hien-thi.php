<?php
	include_once("lib/DB.php");
	$id=$_GET['id'];
	$reviewer = DP::run_query(" select * from binhluan where idsp=?",[$id],2);
	$kq ="";
	foreach($reviewer as $post){
		extract($post);
		
		//$kq.='<strong>'.$ten.'</strong><br>'.$ngay.'<br>'.$noidung.'<hr>';
		$kq.='<div class="review_item">
		<div style="display:inline-block;"  class="media">
		  <div class="media-body">
		  <div class="d-flex">
		  
		  <img style="width=5%;height=5%;" src="img/'.$post['anhdaidien'].'"alt="" />
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
