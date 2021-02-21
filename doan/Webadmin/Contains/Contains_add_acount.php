<div class="all-content-wrapper">
        <div class="single-product-tab-area mg-tb-15">
            <!-- Single pro tab review Start-->
            <div class="single-pro-review-area">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="review-tab-pro-inner">
                                <ul id="myTab3" class="tab-review-design">
                                    <li class="active"><a href="#description"><i class="fa fa-pencil" aria-hidden="true">Add Account</i></a></li>
                                </ul>
                                <div id="myTabContent" class="tab-content custom-product-edit">
								
                                    <form class="product-tab-list tab-pane fade active in" action="<?php echo $level.Lib_path."add_account_data.php"?>" method="GET" id="description">
                                        <div class="row">
                                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                                <div class="review-content-section">
												
                                                    <div class="input-group mg-b-pro-edt">
                                                        <span class="input-group-addon"><i class="fa fa-user" aria-hidden="true"></i></span>
                                                        <input type="text" name="username"  class="form-control" placeholder="User Name">
                                                    </div>
													<div class="input-group mg-b-pro-edt">
                                                        <span class="input-group-addon"><i class="fa fa-user" aria-hidden="true"></i></span>
                                                        <input type="text" name="pass"  class="form-control" placeholder="pass">
                                                    </div>
                                                    <div class="input-group mg-b-pro-edt">
                                                        <span class="input-group-addon"><i class="fa fa-pencil" aria-hidden="true"></i></span>
                                                        <input type="text" name="customer"  class="form-control" placeholder="Customer Name">
                                                    </div>
                                               
													<div hidden="true" class="input-group mg-b-pro-edt">
														<input style="width: 550px;" type="text" name="phone"   class="form-control" placeholder="Phone">
                                                    </div>
													<div hidden="true" class="input-group mg-b-pro-edt">
														<input style="width: 550px;" type="text" name="birth"   class="form-control" placeholder="Date Of birth">
                                                    </div>
													<div hidden="true" class="input-group mg-b-pro-edt">
														<input style="width: 550px;" type="text" name="email"   class="form-control" placeholder="Email">
                                                    </div>
													<div hidden="true" class="input-group mg-b-pro-edt">
														<input style="width: 550px;" type="text" name="diachi"   class="form-control" placeholder="Address">
                                                    </div>
													<div hidden="true" class="input-group mg-b-pro-edt">
														<input type="hidden" name="page"  value="<?php echo $page;?>" class="form-control" placeholder="Số lượng">
													</div>
													
                                            </div>
                                            
                                        </div>
                                        <div class="row">
                                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                <div class="text-center mg-b-pro-edt custom-pro-edt-ds">
                                                   
												   <button type="submit" class="btn btn-primary waves-effect waves-light m-r-10">   Save 
														</button>
                                                    <a href="<?php echo $level."danhsachtaikhoan.php?page=".$page;?>"> <button type="button" class="btn btn-warning waves-effect waves-light">Discard
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