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
                            <h4 style="text-align: center;"> Account List</h4>
                            <table>
                                <tr>
									<th>Username</th>
                                    <th>Customer name</th>
									<th>Status</th>
                                    <th>Phone</th>
                                    <th>Date of birth</th>
                    
                                    <th>Email</th>
                                    <th>Address</th>
                                    <th>Setting</th>
                                </tr>
								<?php foreach($list as $i) {  ?>
                                <tr>
                                    
                                    <td><?php echo $i['username'];?> </td>
									<td><?php echo $i['ho'].$i['ten'];?> </td>
                                    <td>
                                        <button <?php if ($i['tinhtrang']==0) { echo 'class="pd-setting" disabled>'; echo 'Active';}
																					else { echo 'class="ds-setting" disabled>'; echo 'Lock';}?></button>
                                    </td>
									<td><?php echo $i['sdt'];?></td>
                                    <td><?php echo $i['ngaysinh'];?></td>
                                     <td><?php echo $i['email'];?></td>
                                   
									<td><?php echo $i['diachi'];?></td>
									
                                    <td>
                                        <a type="button" data-toggle="tooltip" title="Lock" style="font-size:50px;" href="<?php echo $level.Lib_path."khoataikhoan.php?idkh=".$i['idkh']."&page=".$page."&tinhtrang=1";?>"><i aria-hidden="true"  class="fa fa-lock"></i></a>
										<a type="button" data-toggle="tooltip" title="Update" style="font-size:50px;" href="<?php echo $level."update_account.php?idkh=".$i['idkh']."&page=".$page."&tinhtrang=0";?>"><i aria-hidden="true"  class="fa fa-pencil-square-o"></i></a>
                                    </td>
                                </tr>
							
								<?php } ?>
                                
								<tr>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									
									<td>
										 <a type="button" data-toggle="tooltip" title="Add" style="font-size:50px;" href="<?php echo $level."add_account.php";?>"><i aria-hidden="true"  class="fa fa-plus-circle"></i></a>
									</td>
								</tr>
                            </table>
							
                            <div class="custom-pagination">
                                <nav aria-label="Page navigation example">
                                    <ul class="pagination">
                                        <li class="page-item"><a class="page-link" href="<?php echo $level.Lib_path."goitk.php?page=".($page-1);?>">Previous</a></li>
										<?php for($i=1;$i<=$chiatong;$i++) { ?>
                                        <li <?php if($page==$i) echo "class='page-item active'";?> 
										class="page-item"><a class="page-link" href="<?php echo $level.Lib_path."goitk.php?page=".$i;?>"><?php echo $i;?> </a><?php } ?></li>
										
                                        <li class="page-item"><a class="page-link" href="<?php echo $level.Lib_path."goitk.php?page=".($page+1);?>">Next</a></li>
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
