<!--================login_part Area =================-->
<?php
	//var_dump($_COOKIE);
	//var_dump($_SESSION);
	$checked=false;
	if(isset($_SESSION['tinhtrang']) && $_SESSION['tinhtrang']==0)
		$checked=true;
	if($checked==false)
	{
?>
<script>
	function myFunction()
	{
		<?php if(!isset($_SESSION['tinhtrang']) and isset($_SESSION['user'])) { echo 'alert("Sai thông tin tài khoản!");'; unset($_SESSION['user']);}
			else {if($_SESSION['tinhtrang']==1) {echo 'alert("Tài khoản của bạn đã bị khóa!");'; unset($_SESSION['user']);
			unset($_SESSION['tinhtrang']);unset($_SESSION['idkh']);unset($_SESSION['ten']);}}?>
			
	}
</script>
<iframe hidden="true" onload="myFunction()" ></iframe>
    <section class="login_part section_padding">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 col-md-6">
                    <div class="login_part_text text-center">
                        <div class="login_part_text_iner">
                            <h2>New to our Shop?</h2>
                            <p>There are advances being made in science and technology
                                everyday, and a good example of this is the</p>
                            <a href="<?php echo $level."register.php" ;?>" class="btn_3">Create an Account</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6">
                    <div class="login_part_form">
                        <div class="login_part_form_iner">
						
                            <h3>Welcome Back ! <br>
                                Please Sign in now</h3>
                            <form class="row contact_form" action="<?php echo $level.Lib_path."xulidangnhap.php";?>" method="post" novalidate="novalidate">
                                <div class="col-md-12 form-group p_star">
                                    <input type="text" class="form-control"  name="username" 
                                        placeholder="Username" value="<?php if(isset($_COOKIE['user'])) echo $_COOKIE['user'];?>">
                                </div>
                                <div class="col-md-12 form-group p_star">
                                    <input type="password" class="form-control"  name="password" 
                                        placeholder="Password" value="<?php if(isset($_COOKIE['pass'])) echo $_COOKIE['pass'];?>">
                                </div>
                                <div class="col-md-12 form-group">
                                    <div class="creat_account d-flex align-items-center">
                                        <input type="checkbox" id="f-option" name="selector" <?php if(isset($_COOKIE['pass'])) echo "checked";?>>
                                        <label for="f-option">Remember me</label>
                                    </div>
                                    <button type="submit" value="submit" class="btn_3">
                                        log in
                                    </button>
                                    <a class="lost_pass" href="#">forget password?</a>
                                </div>
                            </form>
							
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
	<?php } else { ?>
		<section class="login_part section_padding">
        <div class="container">
		<h4> Hello, <i><?php echo $_SESSION['ten'];?>!</i></h4>
		</div>
    </section>
	<?php }?>
    <!--================login_part end =================-->