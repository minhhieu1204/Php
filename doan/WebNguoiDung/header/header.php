  <!--::header part start::-->
  
    <header class="main_menu home_menu">
        <div class="container-fluid">
            <div class="row align-items-center justify-content-center">
                <div class="col-lg-11">
                    <nav class="navbar navbar-expand-lg navbar-light">
                        <a class="navbar-brand" href="<?php echo $level."index.php";?>"> <img src=<?php echo $level.Img_path."logo.png";?> alt="logo"> </a>
                        <button class="navbar-toggler" type="button" data-toggle="collapse"
                            data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                            aria-expanded="false" aria-label="Toggle navigation">
                            <span class="menu_icon"><i class="fas fa-bars"></i></span>
                        </button>

                        <div class="collapse navbar-collapse main-menu-item" id="navbarSupportedContent">
                            <ul class="navbar-nav">
                                <li class="nav-item">
                                    <a class="nav-link" href="<?php echo $level."index.php";?>">Home</a>
                                </li>
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="<?php echo $level."blog.php";?>" id="navbarDropdown_1"
                                        role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        Shop
                                    </a>
                                    <div class="dropdown-menu" aria-labelledby="navbarDropdown_1">
                                        <a class="dropdown-item" href="<?php echo $level."category.php";?>"> shop category</a>
                                        <a class="dropdown-item" href="<?php echo $level."single-product.php";?>">product details</a>
                                        
                                    </div>
                                </li>
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="<?php echo $level."blog.php";?>" id="navbarDropdown_3"
                                        role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        pages
                                    </a>
                                    <div class="dropdown-menu" aria-labelledby="navbarDropdown_2">
										<a class="dropdown-item" href="<?php echo $level."register.php";?>">register</a>
                                        <a class="dropdown-item" href="<?php echo $level."login.php";?>">login</a>
                                        <a class="dropdown-item" href="<?php echo $level."cart.php";?>">shopping cart</a>
                                        <a class="dropdown-item" href="<?php echo $level."confirmation.php";?>">confirmation</a>
                                    </div>
                              </li>
                              
                            </ul>
                        </div>
                        <div class="hearer_icon d-flex">
							<div style="float:left;">
							 <ul> <!--dang nhập-->
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="<?php echo $level."blog.php";?>" id="navbarDropdown_1"
                                        role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <?php if(isset($_SESSION['tinhtrang']) && $_SESSION['tinhtrang']==0) echo $_SESSION['ten']; else echo "Log in";?>
                                    </a>
                                    <div class="dropdown-menu">
									<?php if(isset($_SESSION['tinhtrang'])  && $_SESSION['tinhtrang']==0 ) echo 
                                       '<a class="dropdown-item" href="'.$level.Lib_path."xulidangxuat.php".'"> Log out</a>';
									   else
										  echo '<a class="dropdown-item" href="'.$level."login.php".'"> Log in</a>';?>
                                    </div>
                                </li>
							</ul>
							</div>
                            <div class="dropdown cart">
							<?php 
								$checkcart=false;
								if(isset($_SESSION['cart']))
								{
									foreach($_SESSION['cart'] as $i)
									{
										if(isset($i))
											$checkcart=true;
									}
								}
								if($checkcart==true)
									$items = count($_SESSION['cart']);
							?>
                                <a class="dropdown-toggle" href="<?php echo $level."cart.php";?>"  role="button">
                                    <p class="ti-bag">  <sup style="color:#2f7dfc;font-size:100%;" > 
										<b> <?php if($checkcart==true)
													echo $items;
												else 
													echo "0";
										?></b> </sup> </p>  <!--chỗ này làm số trong giỏ hàng-->
                                </a>
                            </div>
							
                            <a id="search_1" href="javascript:void(0)"><i class="ti-search"></i></a>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
        <div class="search_input" id="search_input_box">
            <div class="container ">
                <form action="<?php echo $level.Lib_path."timkiem.php";?>" class="d-flex justify-content-between search-inner">
                    <input type="text" class="form-control" name="key" id="search_input" placeholder="Search Here">
                    <button type="submit" class="btn"></button>
                    <span class="ti-close" id="close_search" title="Close Search"></span>
                </form>
            </div>
        </div>
    </header>
    <!-- Header part end-->