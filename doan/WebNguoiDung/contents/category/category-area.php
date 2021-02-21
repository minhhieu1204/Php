 <!--================Category Product Area =================-->
 <?php
	//var_dump($page);
	if(isset($_GET['page']))
		$page=$_GET['page']+1;
	else 
		$page=2;
 
 ?>
 <section class="cat_product_area section_padding border_top">
        <div class="container">
            <div class="row">
                
                <div class="col-lg-9">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="product_top_bar d-flex justify-content-between align-items-center">
                                <div class="single_product_menu product_bar_item">
                                    <h2>Products( <?php $tong = sizeof($category_area); echo $tong;?> )</h2>
                                </div>
                                <div class="product_top_bar_iner product_bar_item d-flex">
                                    <div class="product_bar_single">
                                        <select class="wide">
                                            <option data-display="Default sorting">Default sorting</option>
											<?php
												foreach($sorting as $i)
												{
											?>
											
                                            <option value=" <?php echo $i['GiaTri'];?> "> <?php echo $i['TieuDe'];?> </option>
											<?php
												}
											?>

                                        </select>
                                    </div>
                                    <div class="product_bar_single">
                                        <select>
                                            <option data-display="Show 12">Show 12</option>
											
											<?php
												foreach($show as $i)
												{
											?>
											
                                            <option value=" <?php echo $i['GiaTri'];?> "> <?php echo $i['TieuDe'];?> </option>
											<?php
												}
											?>
                                           
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
						
						<?php
							foreach($category_area as $category)
							{
						?>
                        <div class="col-lg-4 col-sm-6">
                            <div class="single_category_product">
                                <div class="single_category_img">
								<a href="<?php echo $level."single-product.php?id=".$category['idsp'];?>">
                                    <img src=<?php echo $level.Img_path."category/".$category['anhdaidien'];?> alt="">
								</a>
                                    <div class="category_social_icon">
                                        <ul>
                                            <li><a href="#"><i class="ti-heart"></i></a></li>
                                            <li><a href="<?php echo $level.Lib_path."themgiohang.php?id=".$category['idsp'];?>"><i class="ti-bag"></i></a></li>
                                        </ul>
                                    </div>
                                    <div class="category_product_text">
                                        <a href="<?php echo $level."single-product.php?id=".$category['idsp'];?>"><h5> <?php echo $category['tensp'];?> </h5></a>
                                        <p> <?php echo number_format($category['gia'])." VND";?> </p>
                                    </div>
                                </div>
                            </div>
                        </div>
						
						<?php
							}
						?>
                        
						
                        <div class="col-lg-12 text-center">
						
								<a href="<?php if($result==2) echo $level.Lib_path."timkiem.php?key=".$key."&page=".$page;
								else
									echo $level."category.php?idloai=".$idloaisp."&page=".$page;?>" class="btn_2">More Items</a></div>
                    </div>
                </div>
            </div>
        </div>
    </section
	