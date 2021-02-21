<?php
	$level="../";
	include $level."Pages/Config_index.php";
	include $level.Lib_path."DB.php";
	$hinhanh =$_FILES['fileUpload']['name'];
	
	var_dump($hinhanh);
	
	$tensp =$_POST['tensp'];
	var_dump($tensp);
	$mota =$_POST['mota'];
	$gia =$_POST['gia'];
	$donvitinh =$_POST['donvitinh'];
	$soluong =$_POST['soluong'];
	$idloaisp =$_POST['loaisanpham'];
	$idncc = $_POST['nhacungcap'];
	  if (isset($_POST['up']) && isset($_FILES['fileUpload'])) {
    if ($_FILES['fileUpload']['error'] > 0)
        echo "Upload lỗi rồi!";
    else {
        move_uploaded_file($_FILES['fileUpload']['tmp_name'], '../img/category/' . $_FILES['fileUpload']['name']);
        echo "upload thành công <br/>";
        echo 'Dường dẫn: upload/' . $_FILES['fileUpload']['name'] . '<br>';
        echo 'Loại file: ' . $_FILES['fileUpload']['type'] . '<br>';
        echo 'Dung lượng: ' . ((int)$_FILES['fileUpload']['size'] / 1024) . 'KB';
    }
    }
	$result= DP::run_query("insert into sanpham (anhdaidien,tensp, mota, gia, soluongton, donvitinh,idloaisp,idncc)
									values (?,?,?,?,?,?,?,?)",
												[$hinhanh,$tensp,$mota,$gia,$soluong,$donvitinh,$idloaisp,$idncc],3);
	$ds=DP::run_query("select * from sanpham",[],2);
	$page=ceil(sizeof($ds)/4);
	header("location:".$level."product-list.php?page=".$page);
?>