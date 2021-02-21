<html class="no-js" lang="en">
<head>
<script src='https://kit.fontawesome.com/a076d05399.js'></script>
 <?php
	include $level.Contains_path."Head.php";
	include $level.Lib_path."DB.php";
 ?>
	
</head>
<body>
<?php
error_reporting(E_ERROR | E_WARNING | E_PARSE);
	if($index==true)
	{
		include $level.Menu_path."menu_all.php";
		include $level.Footer_path."Footer_all.php";
		include $level.Contains_path."Contains_user.php";
	}
	else if($Product_list==true)
	{
			include $level.Data_path."product-list-data.php";
			include $level.Menu_path."menu_all.php";
			include $level.Footer_path."Footer_ProductList.php";
			include $level.Contains_path."Contains_Product_list.php";
	}
	else if($Danhsachsp==true)
	{
			include $level.Data_path."danhsachsp-list-data.php";
			include $level.Menu_path."menu_all.php";
			include $level.Footer_path."Footer_all.php";
			include $level.Contains_path."Contains_Danhsachsp.php";
	}
	else 
				if($Register==true)
				{
					
					include $level.Contains_path."Contain_Register.php";
				}
				else
					if($Product_edit==true)
					{
						include $level.Data_path."product-edit-data.php";
						include $level.Menu_path."menu_all.php";
						include $level.Footer_path."Footer_all.php";
						include $level.Contains_path."Contains_Product_edit.php";
					}
				else
					if($Product_add==true)
					{
						include $level.Data_path."product-add-data.php";
						include $level.Menu_path."menu_all.php";
						include $level.Footer_path."Footer_all.php";
						include $level.Contains_path."Contains_Product_add.php";
					}
				else
					if($Danhsachsp_edit==true)
					{
						include $level.Data_path."danhsachsp-edit-data.php";
						include $level.Menu_path."menu_all.php";
						include $level.Footer_path."Footer_all.php";
						include $level.Contains_path."Contains_Danhsachsp_edit.php";
					}
				else
					if($Danhsachsp_add==true)
					{
						include $level.Menu_path."menu_all.php";
						include $level.Footer_path."Footer_all.php";
						include $level.Contains_path."Contains_Danhsachsp_add.php";
					}
					else
					if($danhsachtaikhoan==true)
					{
						include $level.Data_path."danhsachtaikhoan-data.php";
						include $level.Menu_path."menu_all.php";
						include $level.Footer_path."Footer_all.php";
						include $level.Contains_path."Contains_Danhsachtaikhoan.php";
					}
					else 
						if($Danhsachhoadon==true)
						{
							include $level.Data_path."danhsachhoadon_data.php";
							include $level.Menu_path."menu_all.php";
							include $level.Footer_path."Footer_Hoadon.php";
							include $level.Contains_path."Contains_danhsachhoadon.php";
							
						}
						else 
							if($search==true)
						{
							include $level.Data_path."search_hoadon_data.php";
							include $level.Menu_path."menu_all.php";
							include $level.Footer_path."Footer_Hoadon.php";
							include $level.Contains_path."Contains_search_hoadon.php";
						}
					else if($danhsachcomment==true)
						{
										include $level.Data_path."comment-list-data.php";
										include $level.Menu_path."menu_all.php";
										include $level.Footer_path."Footer_all.php";
										include $level.Contains_path."Contains_Comment_list.php";
						}
						else if($updatetk==true)
						{
							include $level.Menu_path."menu_all.php";
							include $level.Footer_path."Footer_all.php";
							include $level.Lib_path."account_edit.php";
							include $level.Contains_path."Contains_edit_acount.php";
						}
						else if($add_acount==true)
						{
							include $level.Menu_path."menu_all.php";
							include $level.Footer_path."Footer_all.php";
							
							include $level.Contains_path."Contains_add_acount.php";
						}
?>
<?php
	include $level.Contains_path."End.php";
?>
</body>
</html>