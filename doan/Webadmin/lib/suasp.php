<?php
	$level="../";
	include $level."Pages/Config_index.php";
	include $level.Lib_path."DB.php";
	$page = $_POST['page'];
	var_dump($page);
	$idsp =$_POST['idsp'];
	var_dump($idsp);
	$tensp =$_POST['tensp'];
	var_dump($tensp);
	$mota =$_POST['mota'];
	$gia =$_POST['gia'];
	$donvitinh =$_POST['donvitinh'];
	$soluong =$_POST['soluong'];
	$idloaisp =$_POST['loaisanpham'];
	$idncc = $_POST['nhacungcap'];
	$daxoa = $_POST['daxoa'];
	var_dump($daxoa);
	$Hinhanh="";
	 if($_FILES['testfile']['error']==0) 
        {
			$Hinhanh=$_FILES['testfile']['name'];
        }
        else
        {
             $Hinhanh=$_POST['hinhanhsp'];
        }
        if (isset($_POST['up']) && isset($_FILES['testfile'])) {
            if ($_FILES['testfile']['error'] > 0)
                echo "Upload lỗi rồi!";
            else {
                move_uploaded_file($_FILES['testfile']['tmp_name'], '../img/category/' . $_FILES['testfile']['name']);
                echo "upload thành công <br/>";
                echo 'Dường dẫn: upload/' . $_FILES['testfile']['name'] . '<br>';
                echo 'Loại file: ' . $_FILES['testfile']['type'] . '<br>';
                echo 'Dung lượng: ' . ((int)$_FILES['testfile']['size'] / 1024) . 'KB';
            }
            }
	if($daxoa==1)
	{
		$result= DP::run_query("update sanpham
					set tensp=?, gia=?, donvitinh=?, mota=?, soluongton=?, idloaisp=?, idncc=?, daxoa=1,anhdaidien=?
					where idsp=?",[$tensp,$gia,$donvitinh,$mota,$soluong,$idloaisp,$idncc,$Hinhanh,$idsp],1);
	}
	else
	{
		$result= DP::run_query("update sanpham
					set tensp=?, gia=?, donvitinh=?, mota=?, soluongton=?, idloaisp=?, idncc=?, daxoa=0,anhdaidien=?
					where idsp=?",[$tensp,$gia,$donvitinh,$mota,$soluong,$idloaisp,$idncc,$Hinhanh,$idsp],1);
	}
	
	header("location:".$level."product-list.php?page=".$page);

?>