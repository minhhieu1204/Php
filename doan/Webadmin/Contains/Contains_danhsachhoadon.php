<?php
	if(isset($_GET['page']))
		$page = $_GET['page'];
	else $page=1;
	
	$tong =sizeof($danhsach);
	$chiatong = ceil($tong/4);
?>

<div class="all-content-wrapper">
        <div class="product-status mg-tb-15">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="product-status-wrap">
                            <h4 style="text-align: center;">Danh Sách Hóa Đơn</h4>
                            <table>
                                <tr>
									<th>Mã Hóa Đơn</th>
                                    <th>Ngày lập</th>
                                    <th>Tên sản phẩm</th>
                                    <th>Trạng thái</th>
									<th>Địa chỉ</th>
									<th>SĐT</th>
                                    <th>Giá</th>
                                    <th>Số lượng</th>
                                    <th>Tổng tiền</th>
                                 
                                </tr>
								<?php foreach($hoadon as $i) {  ?>
                                <tr>
									<td><?php echo $i['idhdb'];?></td>
                                    <td><?php echo $i['ngaylap'];?></td>
                                    <td><?php echo $i['tensp'];?> </td>
                                    <td>
                                        <button  <?php if(strcasecmp($i['tinhtranghoadon'],'dilivered')) {echo 'class="pd-setting" disabled>'; echo $i['tinhtranghoadon'];} else {echo 'class="ds-setting" disabled>'; echo $i['tinhtranghoadon'];} ?></button>
                                    </td>
									<td>
										<form action="<?php echo  $level.Lib_path."suahd.php?page=".$page."&idhdb=".$i['idhdb'];?>" method="POST" >
											<input name='suahd'  value='<?php echo $i['diachi'];?>'/>
											<input value="Edit" type="submit" data-toggle="tooltip" title="Sửa" style="font-size:20px; background:#1c6dd0; border-style: none;"  />
										</form>
									 </td> 
									 <td><?php echo $i['sdt'];?></td>
                                    <td><?php echo $i['tonggiatri'];?></td>
									<td><?php echo $i['soluong'];?></td>
                                    <td><?php echo $i['tonggia'];?></td>
                                  
                                    <td>
                                        <a type="button" href="<?php echo  $level.Lib_path."duyethd.php?page=".$page."&idhdb=".$i['idhdb'];?>" data-toggle="tooltip" title="Duyệt" style="font-size:30px;" ><i aria-hidden="true"  class="fas fa-truck-moving"></i></a>
                                    </td>
                                </tr>
								<?php } ?>
							
                            </table>
							
                            <div class="custom-pagination">
                                <nav aria-label="Page navigation example">
                                    <ul class="pagination">
                                        <li class="page-item"><a class="page-link" href="<?php echo $level."danhsachhoadon.php?page=".($page-1);?>">Previous</a></li>
										<?php for($i=1;$i<=$chiatong;$i++) { ?>
                                        <li <?php if($page==$i) echo "class='page-item active'";?> 
										class="page-item"><a class="page-link" href="<?php echo $level."danhsachhoadon.php?page=".$i;?>"><?php echo $i;?> </a><?php } ?></li>
                                        <li class="page-item"><a class="page-link" href="<?php echo $level.	"danhsachhoadon.php?page=".($page+1);?>">Next</a></li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-copyright-area">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="footer-copy-right">
                            <p>Copyright &copy; 2020 <a href="https://colorlib.com/wp/templates/">Colorlib</a> All rights reserved.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>