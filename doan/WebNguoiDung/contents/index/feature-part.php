<!-- feature_part start-->
    <section class="feature_part pt-4">
        <div class="container-fluid p-lg-0 overflow-hidden">
            <div class="row align-items-center justify-content-between">
			<?php
				foreach ($feature_part as $feature)
				{
			?>
                <div class="col-lg-4 col-sm-6">
                    <div class="single_feature_post_text">
                        <img src=<?php echo $level.Img_path.$feature['anhdaidien'];?> alt="#">
                        <div class="hover_text">
                            <a href="<?php echo $level."category.php?idloai=".$feature['idloaisp'];?>" class="btn_2"> Shop <?php echo $feature['tenloaisp'];?> </a>
                        </div>
                    </div>
                </div>
				
            <?php
				}
			?>
				
            </div>
        </div>
    </section>