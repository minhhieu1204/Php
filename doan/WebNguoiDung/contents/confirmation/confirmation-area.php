<!--================ confirmation are start =================-->
<?php
	if(isset($_SESSION['tinhtrang']))
	{
?>
  <section class="confirmation_part section_padding">
    <div class="container">
	<?php if($order==null)
		{
			echo '<h5>You have no shopping cart. <a href="'.$level."category.php".'">Buy now!</a> </h5>';
		}
		else
		{ ?>
      <div class="row">
        <div class="col-lg-12">
          <div class="confirmation_tittle">
            <span>Thank you. Your order has been received.</span>
          </div>
      </div>
	  </div>
      <div class="row">
        <div class="col-lg-12">
		<?php foreach ($order as $j) { 
			//var_dump($j);?>
          <div class="order_details_iner">
            <h3>Order Details</h3>
            <table class="table table-borderless">
              <thead>
                <tr>
                  <th scope="col" colspan="2">Product</th>
                  <th scope="col">Quantity</th>
                  <th scope="col">Total</th>
                </tr>
              </thead>
              <tbody>
				<?php foreach($j as $i) { ?>
                <tr>
                  <th colspan="2"><span> <?php echo $i['tensp'];?> </span></th>
                  <th> <?php echo $i['soluong'];?> </th>
                  <th> <span> <?php echo number_format($i['tonggia'])." VND";?> </span></th>
                </tr>
				<?php } ?>
                <tr>
                  <th colspan="3">Subtotal</th>
                  <th> <span><?php echo number_format($j[0]['tonggiatri'])." VND" ;?></span></th>
                </tr>
                <tr>
                  <th colspan="3">shipping</th>
                  <th><span>flat rate: 50,000 VND</span></th>
                </tr>
				<tr>
                  <th colspan="3">Address</th>
                  <th><span><?php echo $j[0]['diachi'];?></span></th>
                </tr>
				<tr>
                  <th colspan="3">Phone Number</th>
                  <th><span><?php echo $j[0]['sdt'];?></span></th>
                </tr>
              </tbody>
              <tfoot>
                <tr>
                  <th scope="col" colspan="3">Total</th>
                  <th scope="col"><?php echo number_format($j[0]['tonggiatri']+50000)." VND" ;?></th>
                </tr>
				<tr>
                  <th scope="col" colspan="3"></th>
				  <th class="cupon_text float-right">
                    <a class="btn_1" href="<?php echo $level.Lib_path."huythanhtoan.php?idhdb=".$j[0]['idhdb'];?>">Cannel The Cart</a>
                  </th>
                </tr>
              </tfoot>
			  
            </table>
          </div>
				<?php } ?>	
        </div>
      </div>
		<?php } ?>
    </div>
  </section>
	<?php } else { ?>
	 <section class="confirmation_part section_padding">
		<div class="container">
		<h5>Please <a href="<?php echo $level."login.php";?>">login</a> to view!</h5>
		</div>
	</section> 
	<?php } ?>
	
  <!--================ confirmation area end =================-->