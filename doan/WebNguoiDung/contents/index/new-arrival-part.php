<!-- upcoming_event part start-->

    <!-- new arrival part here -->
    <section class="new_arrival section_padding">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-8">
                    <div class="arrival_tittle">
                        <h2>New arrival</h2>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="arrival_filter_item filters">
                        <ul>
                            <li class="active controls" data-filter="*">all</li>
                            <li class="controls" data-toggle=".men">men</li>
                            <li class="controls" data-toggle=".women">women</li>
                            <li class="controls" data-toggle=".shoes">shoes</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="new_arrival_iner filter-container">
					
					<?php
						foreach ($arrival_part as $arrival)
						{
						
					?>
                        <div class="single_arrivel_item weidth_3 mix shoes women">
                            <img src=<?php echo $level.Img_path."category/".$arrival['anhdaidien'];?> alt="#">
                            <div class="hover_text">
                                <p> <?php echo $arrival['tenloaisp'];?> </p>
                              
                                <a href="<?php echo $level."single-product.php?id=".$arrival['idsp'];?>"><h3> <?php echo $arrival['tensp'];?> </h3></a>
                                <div class="rate_icon">
                                    <a href="#"> <i class="fas fa-star"></i> </a>
                                    <a href="#"> <i class="fas fa-star"></i> </a>
                                    <a href="#"> <i class="fas fa-star"></i> </a>
                                    <a href="#"> <i class="fas fa-star"></i> </a>
                                    <a href="#"> <i class="fas fa-star"></i> </a>
                                </div>
                                     <h5><?php echo number_format($arrival['gia'])."VND";?> </h5>
                                <div class="social_icon">
                                    <a href="#"><i class="ti-heart"></i></a>
                                    <a href="<?php echo $level.Lib_path."themgiohang.php?id=".$arrival['idsp'];?>"><i class="ti-bag"></i></a>
                                </div>
                            </div>
                        </div>
						
					<?php
						}
					?>
					
                    </div>
                </div> 
            </div>
        </div>
    </section>
    <!-- new arrival part end -->