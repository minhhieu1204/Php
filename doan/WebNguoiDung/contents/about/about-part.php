        <!-- about part here -->
        <section class="about_part section_padding">
            <div class="container">
                <div class="row">
                    <div class="col-lg-7">
                        <div class="about_tittle">
                            <p>Mill Oil is an innovative oil filled radiator with the most modern technology. If you are looking for something that can make your interior look awesome, and at the same time.</p>
                        </div>
                    </div>
                </div>
                <div class="row">
				
					<?php
						foreach ($about_part as $about)
						{
					
					?>
						<div class="col-md-6">
							<div class="single_about_part">
								<img src=<?php echo $level.Img_path.$about['Anh'];?> alt="#">
								<h4> <?php echo $about['Ten'];?> </h4>
								<p> <?php echo $about['TieuDe'];?> </p>
							</div>
						</div>
					<?php
						}
					?>
                    
                </div>
            </div>
        </section>
        <!-- about part end -->