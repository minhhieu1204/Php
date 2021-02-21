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
                            <h4 style="text-align: center;">Comment List</h4>
                            <table>
                                <tr>
									<th>Name</th>
                                    <th>Avatar</th>
                                    <th>Email</th>
                                    <th>Phone</th>
                                    <th>Content</th>
									<th>Code Product</th>
									<th>Date</th>
									<th>Setting</th>
                                </tr>
								<?php foreach($commentlist as $i) {  ?>
								<tr>
										<td><?php echo $i['ten'];?> </td>
										<td><img src="<?php echo $level.Img_path.$i['anhdaidien'];?>" alt="" /></td>
										<td><?php echo $i['email'];?> </td>
										<td><?php echo $i['sdt'];?> </td>
										<td><?php echo $i['noidung'];?> </td>
										<td><?php echo $i['idsp'];?> </td>
										<td><?php echo $i['ngay'];?> </td>
										<td><a type="button" data-toggle="tooltip" title="Delete" style="font-size:50px;" href="<?php echo $level.Lib_path."xoa_cmt.php?idsp=".$i['idbinhluan']."&page=".$page;?>"><i aria-hidden="true"  class="fa fa-trash-o"></i></a></td>
								</tr>
								<?php } ?>
                            </table>
							
                        </div>
                    </div>
                </div>
            </div>
        </div>
                            <div class="custom-pagination">
                                <nav aria-label="Page navigation example">
                                    <ul class="pagination">
                                        <li class="page-item"><a class="page-link" href="<?php echo $level.Lib_path."goidscmt.php?page=".($page-1);?>">Previous</a></li>
										<?php for($i=1;$i<=$chiatong;$i++) { ?>
                                        <li <?php if($page==$i) echo "class='page-item active'";?> 
										class="page-item"><a class="page-link" href="<?php echo $level.Lib_path."goidscmt.php?page=".$i;?>"><?php echo $i;?> </a><?php } ?></li>
										
                                        <li class="page-item"><a class="page-link" href="<?php echo $level.Lib_path."goidscmt.php?page=".($page+1);?>">Next</a></li>
                                    </ul>
                                </nav>
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
