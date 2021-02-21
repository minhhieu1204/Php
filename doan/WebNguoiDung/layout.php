<!doctype html>
<html lang="vi">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>winter</title>
	<link rel="icon" href=<?php echo $level.Img_path."favicon.png>";?>	
	<script src="<?php echo $level.JS_path."jquery-1.12.1.min.js" ?>"></script>
	
    <?php
		include ($level.CSS_path."css.php");
		include ($level.Lib_path."DB.php");

   ?>
</head>

<body>
   <?php
		
		include ($level.Header_path."header.php");
		if($index==true)
		{
			include ($level.Array_path."index-data.php");
			include ($level.Index_path."banner.php");
			include ($level.Index_path."feature-part.php");
			include ($level.Index_path."new-arrival-part.php");
			include ($level.Footer_path."free-shipping.php");
			
		}else
		if($about==true)
		{
			include ($level.Array_path."about-data.php");
			include ($level.About_path."home-about.php");
			include ($level.About_path."about-part.php");
			include ($level.Footer_path."free-shipping.php");
			
		}else
		if($blog==true)
		{	include ($level.Array_path."blog-data.php");
			include ($level.Blog_path."home-blog.php");
			include ($level.Blog_path."blog-area.php");
			include ($level.Footer_path."free-shipping.php");
			
		}else
		if($cart==true)
		{
			include ($level.Array_path."cart-data.php");
			include ($level.Cart_path."home-cart.php");
			include ($level.Cart_path."cart-area.php");
		}else
		if($category==true)
		{
			include ($level.Array_path."category-data.php");
			include ($level.Category_path."home-category.php");
			include ($level.Category_path."category-area.php");
			include ($level.Footer_path."free-shipping.php");
			
		}else
		if($checkout==true)
		{
			include ($level.Array_path."checkout-data.php");
			include ($level.Checkout_path."home-checkout.php");
			include ($level.Checkout_path."checkout-area.php");
			
		}else
		if($confirmation==true)
		{
			include ($level.Array_path."confirmation-data.php");
			include ($level.About_path."home-about.php");
			include ($level.Confirmation_path."confirmation-area.php");
			
		}else
		if($contact==true)
		{
			include ($level.Contact_path."home-contact.php");
			include ($level.Contact_path."contact.php");
			
		}else
		if($elements==true)
		{
			include ($level.Array_path."elements-data.php");
			include ($level.About_path."home-about.php");
			include ($level.Elements_path."sample-area.php");
			include ($level.Elements_path."button-area.php");
			include ($level.Elements_path."align-area.php");
			
		}else
		if($login==true)
		{
			include ($level.Login_path."home-login.php");
			include ($level.Login_path."login-area.php");
			
		}else
		if($single_blog==true)
		{
			include ($level.Array_path."single-blog-data.php");
			include ($level.Single_blog_path."home-single-blog.php");
			include ($level.Single_blog_path."single-blog-area.php");
			
		}else
		if($single_product==true)
		{
			
			include ($level.Array_path."single-product-data.php");
			include ($level.Single_product_path."home-single-product.php");
			include ($level.Single_product_path."single-product-area.php");
			include ($level.Single_product_path."product-description-area.php");
			include ($level.Single_product_path."product-list.php");
			include ($level.Footer_path."free-shipping.php");
		}else
		if($tracking==true)
		{
			include ($level.Tracking_path."home-tracking.php");
			include ($level.Tracking_path."tracking-box-area.php");
		}else 
		if($register==true)
		{
			include ($level.Register_path."home-register.php");
			include ($level.Register_path."register-area.php");
		}
		
		include ($level.Footer_path."area-part.php");
		include ($level.Footer_path."footer.php");
		include ($level.SCRIPT_path."script.php");
   
   ?>  
      <input type="hidden" id="idne" value="<?php if(isset($_GET['id'])) echo $_GET['id'];?>">	
      <script>
		$(document).ready(function () {
			var x = $("#idne").val();
			$("#testhienthi").load("data-hien-thi.php?id="+x);
			$("#btnclicktest").click(function () { 
				var id = $("#idne").val();
				var ten =$("#ten").val();
				var email =$("#email").val();
				var number =$("#number").val();
				var message =$("#noidung").val();
				$.get("lib/thembinhluan.php", {id:id,nodung:message,number:number,ten:ten,email:email},
				function (data) {
					if(data!=""){
						$("#ten").val('');
						$("#email").val('');
						$("#number").val('');
						$("#message").val('');
						$("#testhienthi").html(data);
					}
				});
			});
		});
   </script>
</body>

</html>