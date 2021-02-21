<div class="whole-wrap">
	<div class="container box_1170">
		<div class="section-top-border">
					<div class="row">
						<div class="col-lg-8 col-md-8">
							<h3 class="mb-30">Registration form</h3>
							<form action="<?php echo $level.Lib_path."xulidangki.php";?>" method="post">
							
								<div class="mt-10">
									<input type="text" name="username" placeholder="User name"
										 required
										class="single-input">
								</div>
								<div class="mt-10">
									<input type="password" name="password" placeholder="Pass word" required class="single-input">
								</div>
								
								<div class="mt-10">
									<input type="text" name="first_name" placeholder="First Name"
										 required
										class="single-input">
								</div>
								
								<div class="mt-10">
									<input type="text" name="last_name" placeholder="Last Name" onfocus="this.placeholder = ''"
										onblur="this.placeholder = 'Last Name'" required class="single-input">
								</div>
								<div class="mt-10">
									<input type="date" name="birthday" id="birthday" required class="single-input">
								</div>
								
								<div class="mt-10">
									<input type="tel" id="phone" name="phone" placeholder="Telephone" required class="single-input" >
								</div>
								
								
								<div class="mt-10">
									<input type="email" name="email" placeholder="Email address" onfocus="this.placeholder = ''"
										onblur="this.placeholder = 'Email address'" required class="single-input">
								</div>
								<div class=" mt-10">
									
									<input type="text" name="address" placeholder="Address" onfocus="this.placeholder = ''"
										onblur="this.placeholder = 'Address'" required class="single-input">
								</div>
								<div class=" mt-10">
									<div class="form-select" >
										<select name="gioitinh">
											<option value=""> Gender</option>
											<option value="Nam">Nam</option>
											<option value="Nữ">Nữ</option>
											<option value="Khác">Khác</option>
										</select>
									</div>
								</div>
								
								 <button type="submit" value="submit" class="btn_3">
                                        register
                                    </button>
							</form>
						</div>
					
					</div>
				</div>
			</div>
		</div>