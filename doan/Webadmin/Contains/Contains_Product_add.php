<div class="all-content-wrapper">
        <div class="single-product-tab-area mg-tb-15">
            <!-- Single pro tab review Start-->
            <div class="single-pro-review-area">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="review-tab-pro-inner">
                                <ul id="myTab3" class="tab-review-design">
                                    <li class="active"><a href="#description"><i class="fa fa-pencil" aria-hidden="true"></i> Product Add	</a></li>
                                </ul>
                                <div id="myTabContent" class="tab-content custom-product-edit">
								
                                    <form class="product-tab-list tab-pane fade active in" action="<?php echo $level.Lib_path."themsp.php"?>" method="post" id="description"
										enctype="multipart/form-data">
                                        <div class="row">
                                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                                <div class="review-content-section">
													<div class="input-group mg-b-pro-edt">
                                                        <span class="input-group-addon"><i class="fa fa-user" aria-hidden="true"></i></span>
                                                        <input type="file" name="fileUpload"  class="form-control" placeholder="picture">
                                                    </div>
													
                                                    <div class="input-group mg-b-pro-edt">
                                                        <span class="input-group-addon"><i class="fa fa-user" aria-hidden="true"></i></span>
                                                        <input type="text" name="tensp"  class="form-control" placeholder="Product name">
                                                    </div>
                                                    <div class="input-group mg-b-pro-edt">
                                                        <span class="input-group-addon"><i class="fa fa-pencil" aria-hidden="true"></i></span>
                                                        <input type="text" name="mota" class="form-control" placeholder="Description">
                                                    </div>
                                                    <div class="input-group mg-b-pro-edt">
                                                        <span class="input-group-addon"><i class="fa fa-usd" aria-hidden="true"></i></span>
                                                        <input type="text" name="gia"  class="form-control" placeholder="Price">
                                                    </div>
                                                    <div class="input-group mg-b-pro-edt">
                                                        <span class="input-group-addon"><i class="fa fa-sticky-note-o" aria-hidden="true"></i></span>
                                                        <input type="text" name="donvitinh"  class="form-control" placeholder="Unit">
                                                    </div>
                                                    <div class="input-group mg-b-pro-edt">
                                                        <span class="input-group-addon"><i class="fa fa-qrcode" aria-hidden="true"></i></span>
                                                        <input type="text" name="soluong"  class="form-control" placeholder="Quantity ">
                                                    </div>
													
													<select name="loaisanpham" class="form-control pro-edt-select form-control-primary">
															<option value="">Select  product type</option>
															<?php foreach($dsloaisanpham as $i){?>
															<option value="<?php echo $i['idloaisp'];?>"> <?php echo $i['tenloaisp'];?> </option>
															<?php } ?>
																
														</select>
														
														<div hidden="true" class="input-group mg-b-pro-edt"> </div>
														
													<select name="nhacungcap" class="form-control pro-edt-select form-control-primary">
															<option value="">Select provider</option>
															<?php foreach($dsnhacungcap as $i){?>
															<option value="<?php echo $i['idncc'];?>" > <?php echo $i['tenncc'];?> </option>
															<?php } ?>
															</select>
															
													<div hidden="true" class="input-group mg-b-pro-edt"> </div>
                                                </div>
                                            </div>
                                            
                                        </div>
                                        <div class="row">
                                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                <div class="text-center mg-b-pro-edt custom-pro-edt-ds">
                                                   
												   <button type="submit" class="btn btn-primary waves-effect waves-light m-r-10" name="up">   Save 
														</button>
                                                    <a href="<?php echo $level."product-list.php";?>"> <button type="button" class="btn btn-warning waves-effect waves-light">Discard
														</button> </a>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
									
                                    <div class="product-tab-list tab-pane fade" id="reviews">
                                        <div class="row">
                                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                <div class="review-content-section">
                                                    <div class="row">
                                                        <div class="col-lg-4">
                                                            <div class="pro-edt-img">
                                                                <img src="img/new-product/5-small.jpg" alt="" />
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-8">
                                                            <div class="row">
                                                                <div class="col-lg-12">
                                                                    <div class="product-edt-pix-wrap">
                                                                        <div class="input-group">
                                                                            <span class="input-group-addon">TT</span>
                                                                            <input type="text" class="form-control" placeholder="Label Name">
                                                                        </div>
                                                                        <div class="row">
                                                                            <div class="col-lg-6">
                                                                                <div class="form-radio">
                                                                                    <form>
                                                                                        <div class="radio radiofill">
                                                                                            <label>
																									<input type="radio" name="radio"><i class="helper"></i>Largest Image
																								</label>
                                                                                        </div>
                                                                                        <div class="radio radiofill">
                                                                                            <label>
																									<input type="radio" name="radio"><i class="helper"></i>Medium Image
																								</label>
                                                                                        </div>
                                                                                        <div class="radio radiofill">
                                                                                            <label>
																									<input type="radio" name="radio"><i class="helper"></i>Small Image
																								</label>
                                                                                        </div>
                                                                                    </form>
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-lg-6">
                                                                                <div class="product-edt-remove">
                                                                                    <button type="button" class="btn btn-danger waves-effect waves-light">Remove
																							<i class="fa fa-times" aria-hidden="true"></i>
																						</button>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-lg-4">
                                                            <div class="pro-edt-img">
                                                                <img src="img/new-product/6-small.jpg" alt="" />
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-8">
                                                            <div class="row">
                                                                <div class="col-lg-12">
                                                                    <div class="product-edt-pix-wrap">
                                                                        <div class="input-group">
                                                                            <span class="input-group-addon">TT</span>
                                                                            <input type="text" class="form-control" placeholder="Label Name">
                                                                        </div>
                                                                        <div class="row">
                                                                            <div class="col-lg-6">
                                                                                <div class="form-radio">
                                                                                    <form>
                                                                                        <div class="radio radiofill">
                                                                                            <label>
																									<input type="radio" name="radio"><i class="helper"></i>Largest Image
																								</label>
                                                                                        </div>
                                                                                        <div class="radio radiofill">
                                                                                            <label>
																									<input type="radio" name="radio"><i class="helper"></i>Medium Image
																								</label>
                                                                                        </div>
                                                                                        <div class="radio radiofill">
                                                                                            <label>
																									<input type="radio" name="radio"><i class="helper"></i>Small Image
																								</label>
                                                                                        </div>
                                                                                    </form>
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-lg-6">
                                                                                <div class="product-edt-remove">
                                                                                    <button type="button" class="btn btn-danger waves-effect waves-light">Remove
																							<i class="fa fa-times" aria-hidden="true"></i>
																						</button>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-lg-4">
                                                            <div class="pro-edt-img">
                                                                <img src="img/new-product/7-small.jpg" alt="" />
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-8">
                                                            <div class="row">
                                                                <div class="col-lg-12">
                                                                    <div class="product-edt-pix-wrap">
                                                                        <div class="input-group">
                                                                            <span class="input-group-addon">TT</span>
                                                                            <input type="text" class="form-control" placeholder="Label Name">
                                                                        </div>
                                                                        <div class="row">
                                                                            <div class="col-lg-6">
                                                                                <div class="form-radio">
                                                                                    <form>
                                                                                        <div class="radio radiofill">
                                                                                            <label>
																									<input type="radio" name="radio"><i class="helper"></i>Largest Image
																								</label>
                                                                                        </div>
                                                                                        <div class="radio radiofill">
                                                                                            <label>
																									<input type="radio" name="radio"><i class="helper"></i>Medium Image
																								</label>
                                                                                        </div>
                                                                                        <div class="radio radiofill">
                                                                                            <label>
																									<input type="radio" name="radio"><i class="helper"></i>Small Image
																								</label>
                                                                                        </div>
                                                                                    </form>
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-lg-6">
                                                                                <div class="product-edt-remove">
                                                                                    <button type="button" class="btn btn-danger waves-effect waves-light">Remove
																							<i class="fa fa-times" aria-hidden="true"></i>
																						</button>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="product-tab-list tab-pane fade" id="INFORMATION">
                                        <div class="row">
                                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                <div class="review-content-section">
                                                    <div class="card-block">
                                                        <div class="text-muted f-w-400">
                                                            <p>No reviews yet.</p>
                                                        </div>
                                                        <div class="m-t-10">
                                                            <div class="txt-primary f-18 f-w-600">
                                                                <p>Your Rating</p>
                                                            </div>
                                                            <div class="stars stars-example-css detail-stars">
                                                                <div class="review-rating">
                                                                    <fieldset class="rating">
                                                                        <input type="radio" id="star5" name="rating" value="5">
                                                                        <label class="full" for="star5"></label>
                                                                        <input type="radio" id="star4half" name="rating" value="4 and a half">
                                                                        <label class="half" for="star4half"></label>
                                                                        <input type="radio" id="star4" name="rating" value="4">
                                                                        <label class="full" for="star4"></label>
                                                                        <input type="radio" id="star3half" name="rating" value="3 and a half">
                                                                        <label class="half" for="star3half"></label>
                                                                        <input type="radio" id="star3" name="rating" value="3">
                                                                        <label class="full" for="star3"></label>
                                                                        <input type="radio" id="star2half" name="rating" value="2 and a half">
                                                                        <label class="half" for="star2half"></label>
                                                                        <input type="radio" id="star2" name="rating" value="2">
                                                                        <label class="full" for="star2"></label>
                                                                        <input type="radio" id="star1half" name="rating" value="1 and a half">
                                                                        <label class="half" for="star1half"></label>
                                                                        <input type="radio" id="star1" name="rating" value="1">
                                                                        <label class="full" for="star1"></label>
                                                                        <input type="radio" id="starhalf" name="rating" value="half">
                                                                        <label class="half" for="starhalf"></label>
                                                                    </fieldset>
                                                                </div>
                                                                <div class="clear"></div>
                                                            </div>
                                                        </div>
                                                        <div class="input-group mg-b-15 mg-t-15">
                                                            <span class="input-group-addon"><i class="fa fa-user" aria-hidden="true"></i></span>
                                                            <input type="text" class="form-control" placeholder="User Name">
                                                        </div>
                                                        <div class="input-group mg-b-15">	
                                                            <span class="input-group-addon"><i class="fa fa-user" aria-hidden="true"></i></span>
                                                            <input type="text" class="form-control" placeholder="Last Name">
                                                        </div>
                                                        <div class="input-group mg-b-15">
                                                            <span class="input-group-addon"><i class="fa fa-envelope-o" aria-hidden="true"></i></span>
                                                            <input type="text" class="form-control" placeholder="Email">
                                                        </div>
                                                        <div class="form-group review-pro-edt">
                                                            <button type="submit" class="btn btn-primary waves-effect waves-light">Submit
																</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
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