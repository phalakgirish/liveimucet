<?php include_once('before_login.php');?>

		<div class="container">
			<div class="row">
				<div class="col-md-6 col-md-offset-3">
					<div class="panel panel-login">
						<div class="panel-body">
							<div class="row" >
								<div class="col-lg-12">
									<form id="login-form" action="<?php echo base_url()?>client/welcome/login" method="post" style="display: block;">
										<h2>LOGIN</h2>
										<div class="col-md-2 col-sm-2 col-xs-2">
	  							<div class="control-label"><?php if(isset($error_msg)){ echo $error_msg; }?></div>
	  						</div>
										<div class="form-group">
											<input type="text" tabindex="1" class="form-control" id="register_email" placeholder="Enter Email" name="register_email" value="<?php echo set_value('register_email');?>">
											<span style="color:red !important; padding-left:10px;"><?php echo form_error("register_email"); ?></span>
										</div>
										<div class="form-group">
											<input type="password" tabindex="2" class="form-control" id="register_pass" placeholder="Enter Password" name="register_pass">
											<span style="color:red !important; padding-left:10px;"><?php echo form_error("register_pass"); ?></span>
										</div>
										<div class="col-xs-6 form-group pull-left checkbox">
											<input id="checkbox1" type="checkbox" name="remember">
											<label for="checkbox1">Remember Me</label>
										</div>
										<div class="col-xs-6 form-group pull-right">
											<input type="submit" name="login-submit" id="login-submit" tabindex="4" class="form-control btn btn-login" value="Log In">
										</div>
									</form>
									<form id="register-form" action="<?php echo base_url()?>client/welcome/register_action" method="post" role="form" style="display: none;">
										<h2>REGISTER</h2>
										<div class="form-group">
											<input type="text" tabindex="1" class="form-control" id="register_name" placeholder="Enter Name" name="register_name">
											<span style="color:red !important; padding-left:10px;"><?php echo form_error("register_name"); ?></span>
										</div>
										<div class="form-group">
											<input type="text" tabindex="2" class="form-control" id="register_mobile" placeholder="Enter Mobile" name="register_mobile">
											<span style="color:red !important; padding-left:10px;"><?php echo form_error("register_mobile"); ?></span>
										</div>
										<div class="form-group">
											<input type="email" tabindex="3" class="form-control" id="register_email" placeholder="Enter Email" name="register_email">
											<span style="color:red !important; padding-left:10px;"><?php echo form_error("register_email"); ?></span>
										</div>
										<div class="form-group">
											<textarea class="form-control" tabindex="4" rows="5" name="register_add" id="register_add" placeholder="Enter Address"></textarea>
											<span style="color:red !important; padding-left:10px;"><?php echo form_error("register_add"); ?></span>
										</div>
										<div class="form-group">
											<input type="text" tabindex="5" class="form-control" id="register_city" placeholder="Enter City Name" name="register_city">
											<span style="color:red !important; padding-left:10px;"><?php echo form_error("register_city"); ?></span>
										</div>
										<div class="form-group">
											<input type="text" tabindex="6" class="form-control" id="register_state" placeholder="Enter State Name" name="register_state">
											<span style="color:red !important; padding-left:10px;"><?php echo form_error("register_state"); ?></span>
										</div>
										<div class="form-group">
											<input type="text" tabindex="7" class="form-control" id="register_country" placeholder="Enter Country Name" name="register_country">
											<span style="color:red !important; padding-left:10px;"><?php echo form_error("register_country"); ?></span>
										</div>
										<div class="form-group">
											<input type="password" tabindex="8" class="form-control" id="register_pass" placeholder="Enter Password" name="register_pass">
											<span style="color:red !important; padding-left:10px;"><?php echo form_error("register_pass"); ?></span>
										</div>
										<div class="form-group">
											<select name="register_type" tabindex="9"class="form-control" placeholder='I am...' >
									    			<option value="Student">Student</option>
									    			<option value="Employee">Employee</option>
									    		</select>
									    		<span style="color:red !important; padding-left:10px;"><?php echo form_error("register_type"); ?></span>
										</div>
										<div class="form-group">
											<div class="row">
												<div class="col-sm-6 col-sm-offset-3">
													<input type="submit" name="register-submit" id='btn_register' tabindex="10" class="form-control btn btn-register" value="Register Now">
												</div>
											</div>
										</div>
									</form>
								</div>
							</div>
						</div>
						<div class="panel-heading">
							<div class="row">
								<div class="col-xs-6 tabs">
									<a href="#" class="active" id="login-form-link"><div class="login">LOGIN</div></a>
								</div>
								<div class="col-xs-6 tabs">
									<a href="#" id="register-form-link"><div class="register">REGISTER</div></a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</body>
</html>