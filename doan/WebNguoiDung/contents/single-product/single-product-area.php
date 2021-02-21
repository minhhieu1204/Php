<!--================Single Product Area =================-->
  <div class="product_image_area section_padding">
    <div class="container">
      <form action="<?php echo $level.Lib_path."themgiohang.php";?>" method="get" class="row s_product_inner"> 
	  <!--đoạn đầu của foreach-->
			<?php
				foreach ($vertical as $i) 
				{
			?>
        <div class="col-lg-5">
          <div class="product_slider_img">
            <div id="vertical">
			
              <div data-thumb=<?php echo $level.Img_path."category/".$i['anhdaidien'];?> >
                <img src=<?php echo $level.Img_path."category/".$i['anhdaidien'];?> />
              </div>
             
            </div>
          </div>
        </div>
        <div class="col-lg-5 offset-lg-1">
          <div class="s_product_text">
			<h3> <?php echo $i['tensp'];?> </h3>
            <h2> <?php echo number_format($i['gia'])." VND";?> </h2>
            <ul class="list">
              <li>
                <a class="active" href="#">
                  <span>Producer:</span> <?php echo $i['tenncc'];?> </a>
              </li>
              <li>
                <a href="#"> <span> Product type: </span> <?php echo $i['tenloaisp'];?></a>
              </li>
            </ul>
            <p>
                <?php echo $i['mota'];?>
            </p>
            <div class="card_area">
              <div class="product_count d-inline-block">
			  <input type="text" name="id" value="<?php echo $i['idsp'];?>" hidden="true" style="display:inline;">
                <span class="inumber-decrement"> <i class="ti-minus"></i></span>
                <input class="input-number" name="soluong" type="number" value="1" min="0" max="<?php echo $i['soluongton'];?>"  >
                <span class="number-increment"> <i class="ti-plus"></i></span>
              </div>
              <div class="add_to_cart">
                  <input type="submit" value="add to cart" class="btn_3">
                  <a href="#" class="like_us"> <i class="ti-heart"></i> </a>
              </div>
              <div class="social_icon">
                  <a href="#" class="fb"><i class="ti-facebook"></i></a>
                  <a href="#" class="tw"><i class="ti-twitter-alt"></i></a>
                  <a href="#" class="li"><i class="ti-linkedin"></i></a>
              </div>
            </div>
          </div>
        </div>
		<?php } ?>  <!--đoạn kết của foreach-->
      </form>
    </div>
  </div>
  <!--================End Single Product Area =================-->