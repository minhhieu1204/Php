 <!-- product_list part start-->
  <section class="product_list best_seller padding_bottom">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-lg-12">
          <div class="section_tittle text-center">
            <h2>Best Sellers</h2>
          </div>
        </div>
      </div>
      <div class="row">
		<?php
			foreach ($product_list as $list)
			{
		?>
          <div class="col-lg-3 col-sm-6">
              <div class="single_category_product">
                  <div class="single_category_img">
                      <img src=<?php echo $level.Img_path."category/".$list['anhdaidien'];?> alt="">
                      <div class="category_social_icon">
                          <ul>
                              <li><a href="#"><i class="ti-heart"></i></a></li>
                              <li><a href="#"><i class="ti-bag"></i></a></li>
                          </ul>
                      </div>
                      <div class="category_product_text">
                          <a href="<?php echo $level."single-product.php?id=".$list['idsp'];?>"><h5> <?php echo $list['tensp'];?> </h5></a>
                          <p> <?php echo $list['gia'];?> </p>
                      </div>
                  </div>
              </div>
          </div>
		 <?php
			}
		 ?>
		  
      </div>
    </div>
  </section>
  <!-- product_list part end-->