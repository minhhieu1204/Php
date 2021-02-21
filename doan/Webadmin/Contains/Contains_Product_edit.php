
<div class="all-content-wrapper">
        <div class="single-product-tab-area mg-tb-15">
            <!-- Single pro tab review Start-->
            <div class="single-pro-review-area">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="review-tab-pro-inner">
                                <ul id="myTab3" class="tab-review-design">
                                    <li class="active"><a href="#description"><i class="fa fa-pencil" aria-hidden="true"></i> Product Edit</a></li>
                                </ul>
                                <div id="myTabContent" class="tab-content custom-product-edit">
                                    <form class="product-tab-list tab-pane fade active in" action="<?php echo $level.Lib_path."suasp.php"?>" method="post" id="description" enctype="multipart/form-data">
                                        <div class="row">
                                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                                <div class="review-content-section">
												
													
                                                    <div class="input-group mg-b-pro-edt">
                                                        <span class="input-group-addon"><i class="fa fa-user" aria-hidden="true"></i></span>
                                                        <input type="text" name="tensp" value="<?php echo $spedit[0]['tensp'];?>" class="form-control" placeholder="Product name">
                                                    </div>
                                                    <div class="input-group mg-b-pro-edt">
                                                        <span class="input-group-addon"><i class="fa fa-pencil" aria-hidden="true"></i></span>
                                                        <input type="text" name="mota" value="<?php echo $spedit[0]['mota'];?>" class="form-control" placeholder="Description">
                                                    </div>
                                                    <div class="input-group mg-b-pro-edt">
                                                        <span class="input-group-addon"><i class="fa fa-usd" aria-hidden="true"></i></span>
                                                        <input type="text" name="gia" value="<?php echo $spedit[0]['gia'];?>" class="form-control" placeholder="Price">
                                                    </div>
                                                    <div class="input-group mg-b-pro-edt">
                                                        <span class="input-group-addon"><i class="fa fa-sticky-note-o" aria-hidden="true"></i></span>
                                                        <input type="text" name="donvitinh" value="<?php echo $spedit[0]['donvitinh'];?>" class="form-control" placeholder="Unit">
                                                    </div>
													<div class="input-group mg-b-pro-edt">
														<input type="file" name="testfile" value="">
														<br>
														<img src="img/category/<?php echo $spedit[0]['anhdaidien'];?>" style="width:50%;" alt="">
                                                            
                                                    </div>
													
                                                    <div class="input-group mg-b-pro-edt">
                                                        <span class="input-group-addon"><i class="fa fa-qrcode" aria-hidden="true"></i></span>
                                                        <input type="text" name="soluong" value="<?php echo $spedit[0]['soluongton'];?>" class="form-control" placeholder="Số lượng">
                                                    </div>
													
													<select name="loaisanpham" class="form-control pro-edt-select form-control-primary">
															<option value="">Select  product type</option>
															<?php foreach($dsloaisanpham as $i){?>
															<option value="<?php echo $i['idloaisp'];?>" <?php if($i['idloaisp']==$spedit[0]['idloaisp']) echo "selected";?>> 
															<?php echo $i['tenloaisp'];?> </option>
															<?php } ?>
																
														</select>
														
														<div hidden="true" class="input-group mg-b-pro-edt">
														<input type="hidden" name="page"  value="<?php echo $page;?>" class="form-control" placeholder="Số lượng">
														</div>
														
													<select name="nhacungcap" class="form-control pro-edt-select form-control-primary">
															<option value="">Select provider</option>
															<?php foreach($dsnhacungcap as $i){?>
															<option value="<?php echo $i['idncc'];?>" <?php if($i['idncc']==$spedit[0]['idncc']) echo "selected";?>> 
															<?php echo $i['tenncc'];?> 
															</option>
															<?php } ?>
													</select>
															
													<div hidden="true" class="input-group mg-b-pro-edt">
														<input type="hidden" name="idsp"  value="<?php echo $spedit[0]['idsp'];?>" class="form-control" >
                                                    </div>
													<div hidden="true" class="input-group mg-b-pro-edt">
														<input type="hidden" name="hinhanhsp"  value="<?php echo $spedit[0]['anhdaidien'];?>" class="form-control" >
                                                    </div>
													<select name="daxoa" class="form-control pro-edt-select form-control-primary">
															<option value="">Select product status</option>
															<option value="0" <?php if($spedit[0]['daxoa']==0) echo "selected";?>>Restore</option>
															<option value="1" <?php if($spedit[0]['daxoa']==1) echo "selected";?>>Deleted</option>
													</select>
													<div hidden="true" class="input-group mg-b-pro-edt"><div>
													
                                                </div>
                                            </div>
                                            
                                        </div>
                                        <div class="row">
                                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                <div class="text-center mg-b-pro-edt custom-pro-edt-ds">
                                                   
												   <button type="submit" class="btn btn-primary waves-effect waves-light m-r-10" name="up">   Save 
														</button>
                                                    <a href="<?php echo $level."product-list.php?page=".$page;?>"> <button type="button" class="btn btn-warning waves-effect waves-light">Discard
														</button> </a>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
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
                            <p>Copyright &copy; 2018 <a href="https://colorlib.com/wp/templates/">Colorlib</a> All rights reserved.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>