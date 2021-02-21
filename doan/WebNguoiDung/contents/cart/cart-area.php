<?php
//var_dump($_POST);
	if(isset($_POST['submit']))
	{
		foreach($_POST as $idsp=>$soluong)
		{
			//var_dump($soluong);
			if(($soluong==0) and (is_numeric($soluong)))
				unset($_SESSION['cart'][$idsp]);
			else if (($soluong>0) and (is_numeric($soluong)))
					$_SESSION['cart'][$idsp]['soluong']=$soluong;
		}
	}
?>
<!--================Cart Area =================-->
  <section class="cart_area section_padding">
    <div class="container">
	<?php
		$checkcart=false;
		$tonggia=0;
		//var_dump($_SESSION);
		if(isset($_SESSION['cart']))
		{
			foreach($_SESSION['cart'] as $i)
			{
				if(isset($i))
					$checkcart=true;
			}
		}
		if($checkcart==true)
		{
	?>
      <div class="cart_inner">
        <div class="table-responsive">
          <table class="table">
            <thead>
              <tr>
                <th scope="col">Product</th>
                <th scope="col">Price</th>
                <th scope="col">Quantity</th>
                <th scope="col">Total</th>
				<th scope="col">Delete product</th>
              </tr>
            </thead>
            <tbody>
			<form action="<?php echo $level."cart.php";?>" method="POST">
			<?php 
				foreach ($_SESSION['cart'] as $i)
				{
			?>
			
              <tr>
                <td>
                  <div class="media">
                    <div class="d-flex">
                      <img src=<?php echo $level.Img_path."category/".$i['anhdaidien'];?> alt="" />
                    </div>
                    <div class="media-body">
                      <p> <?php echo $i['tensp'];?> </p>
                    </div>
                  </div>
                </td>
                <td>
                  <h5> <?php echo number_format($i['gia'])." VND";?> </h5>
                </td>
                <td>
                  <div class="product_count">
                    <div>
                    
                    <input class="input-number" name="<?php echo $i['idsp'];?>" type="number" value="<?php echo $i['soluong'];?>" min="0" 
						max="<?php $sl=DP::run_query("select soluongton from sanpham where idsp=?",[$i['idsp']],2);  $sl=$sl[0]['soluongton']; echo $sl;?>">
                   
                  </div></div>
                </td>
                <td>
				
                  <h5> <?php echo number_format($i['gia']*$i['soluong'])." VND";?> </h5>
				  
                </td>
				<td>
				
                  <a href="<?php echo $level.Lib_path."xoamotgiohang.php?idsp=".$i['idsp'];?>"> <i class="fa fa-trash-o"  >delete</i> </a>
				  
                </td>
              </tr>
			 
			<?php
				$tonggia+=$i['gia']*$i['soluong'];
				}
			?>  
              <tr class="bottom_button">
                <td>
                  <input type="submit" name="submit" value="Update Cart" class="btn_1">
                </td>
                <td></td>
                <td></td>
                <td>
                  <div class="cupon_text float-right">
                    <a class="btn_1" href="<?php echo $level.Lib_path."xoagiohang.php";?>">Delete Cart</a>
                  </div>
                </td>
              </tr>
			</form>
			
              <tr>
                <td></td>
                <td></td>
                <td>
                  <h5>Subtotal</h5>
                </td>
                <td>
                  <h5><?php echo number_format($tonggia)." VND";?></h5>
                </td>
              </tr>
              <tr class="shipping_area">
                <td></td>
                <td></td>
                <td>
                  <h5>Shipping</h5>
                </td>
				<form action="<?php echo $level.Lib_path."thanhtoangiohang.php";?>" method="post" id="form_address">
                <td>
                  <div class="shipping_box">
                    
                    <h6>
                      <!--để giãn dòng-->
                    </h6>
                    
                    <input class="post_code" type="text" name="diachithanhtoan" placeholder="Address" required />
					
					<input class="post_code" type="text" name="sdt" placeholder="Phone Numbers" pattern="[0]{1}[0-9]{9}"/>
                  </div>
                </td>
				</form>
              </tr>
            </tbody>
          </table>
          <div class="checkout_btn_inner float-right">
            <a class="btn_1"  href="<?php echo $level."category.php" ;?>">Continue Shopping</a>
			<?php if(isset($_SESSION['tinhtrang'])==false)
			{
				echo '<buttuon  id="datmua" type="button" value="chuamua" class="btn_1 checkout_btn_1" onclick="DatMua()">Proceed to checkout </button>';
			}
			else echo '<input form="form_address" type="submit" value="Proceed to checkout" class="btn_1 checkout_btn_1">';
			?>
			
            
          </div>
		  
		  <script>
				function DatMua()
				{
						alert("Vui lòng đăng nhập trước khi thanh toán!");
				}
			</script>
        </div>
      </div>
	  </div>
  </section>
  <?php } 
			else
			{
		?>
				<section class="cart_area section_padding">
					<div class="container">
						<h5>You have no shopping cart! <a href="<?php echo $level."category.php";?>" >Buy product</a></h5>
					</div>
				</section>
		
		<?php
			}
		?>
  <!--================End Cart Area =================-->
