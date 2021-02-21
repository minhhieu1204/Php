<!--================Blog Area =================-->
    <section class="blog_area section_padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 mb-5 mb-lg-0">
                    <div class="blog_left_sidebar">
					
					<?php
						foreach ($blog_area as $blog)
						{
					?>
					
                        <article class="blog_item">
                            <div class="blog_item_img">
                                <img class="card-img rounded-0" src=<?php echo $level.Img_path.$blog['Anh'];?> alt="">
                                <a href="#" class="blog_item_date">
                                    <h3> <?php echo $blog['Ngay'];?> </h3>
                                    <p> <?php echo $blog['Thang'];?> </p>
                                </a>
                            </div>

                            <div class="blog_details">
                                <a class="d-inline-block" href="single-blog.php">
                                    <h2> <?php echo $blog['TieuDe'];?> </h2>
                                </a>
                                <p> <?php echo $blog['NoiDung'];?> </p>
                                <ul class="blog-info-link">
                                    <li><a href="#"><i class="far fa-user"></i> <?php echo $blog['TheLoai'];?> </a></li>
                                    <li><a href="#"><i class="far fa-comments"></i> <?php echo $blog['LuotBinhLuan'];?> </a></li>
                                </ul>
                            </div>
                        </article>
						
					<?php 
						}
					?>

                        <nav class="blog-pagination justify-content-center d-flex">
                            <ul class="pagination">
                                <li class="page-item">
                                    <a href="#" class="page-link" aria-label="Previous">
                                        <i class="ti-angle-left"></i>
                                    </a>
                                </li>
                                <li class="page-item">
                                    <a href="#" class="page-link">1</a>
                                </li>
                                <li class="page-item active">
                                    <a href="#" class="page-link">2</a>
                                </li>
                                <li class="page-item">
                                    <a href="#" class="page-link" aria-label="Next">
                                        <i class="ti-angle-right"></i>
                                    </a>
                                </li>
                            </ul>
                        </nav>
                    </div>  
                </div> <!-- het phan 1-->
				
                <div class="col-lg-4">
                    <div class="blog_right_sidebar">
                        <aside class="single_sidebar_widget search_widget">
                            <form action="#">
                                <div class="form-group">
                                    <div class="input-group mb-3">
                                        <input type="text" class="form-control" placeholder='Search Keyword'
                                            onfocus="this.placeholder = ''"
                                            onblur="this.placeholder = 'Search Keyword'">
                                        <div class="input-group-append">
                                            <button class="btn" type="button"><i class="ti-search"></i></button>
                                        </div>
                                    </div>
                                </div>
                                <button class="button rounded-0 primary-bg text-white w-100 btn_1"
                                    type="submit">Search</button>
                            </form>
                        </aside>

                        <aside class="single_sidebar_widget post_category_widget">
                            <h4 class="widget_title">Category</h4>
                            <ul class="list cat-list">
							<?php
								foreach ($category as $cate)
								{
							?>
                                <li>
                                    <a href="#" class="d-flex">
                                        <p> <?php echo $cate['TieuDe'];?> </p>
                                        <p> <?php echo $cate['SoLuot'];?> </p>
                                    </a>
                                </li>
							<?php
								}
							?>
                            </ul>
                        </aside>

                        <aside class="single_sidebar_widget popular_post_widget">
                            <h3 class="widget_title">Recent Post</h3>
							<?php
								foreach ($recent_post as $recent)
								{
							?>
                            <div class="media post_item">
                                <img src=<?php echo $level.Img_path.$recent['Anh'];?> alt="post">
                                <div class="media-body">
                                    <a href="single-blog.php">
                                        <h3> <?php echo $recent['TieuDe'];?> </h3>
                                    </a>
                                    <p> <?php echo $recent['ThoiGian'];?> </p>
                                </div>
                            </div>
							<?php
								}
							?>
                            
                        </aside>
                        <aside class="single_sidebar_widget tag_cloud_widget">
                            <h4 class="widget_title">Tag Clouds</h4>
                            <ul class="list">
							<?php
								foreach ($tags as $tag)
								{
							?>
                                <li>
                                    <a href="#"> <?php echo $tag['Tag'];?> </a>
                                </li>
                            <?php
								}
							?>
                            </ul>
                        </aside>


                        <aside class="single_sidebar_widget instagram_feeds">
                            <h4 class="widget_title">Instagram Feeds</h4>
                            <ul class="instagram_row flex-wrap">
							
							<?php
								foreach ($instagram as $i)
								{
							?>
                                <li>
                                    <a href="#">
                                        <img class="img-fluid" src=<?php echo $level.Img_path.$i['Anh'];?> alt="">
                                    </a>
                                </li>
							<?php
								}
							?>
                                
                            </ul>
                        </aside>


                        <aside class="single_sidebar_widget newsletter_widget">
                            <h4 class="widget_title">Newsletter</h4>

                            <form action="#">
                                <div class="form-group">
                                    <input type="email" class="form-control" onfocus="this.placeholder = ''"
                                        onblur="this.placeholder = 'Enter email'" placeholder='Enter email' required>
                                </div>
                                <button class="button rounded-0 primary-bg text-white w-100 btn_1"
                                    type="submit">Subscribe</button>
                            </form>
                        </aside>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--================Blog Area =================-->