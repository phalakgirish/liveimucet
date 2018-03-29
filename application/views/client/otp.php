<?php include_once('before_login.php');?>

		<div class="container">
			<div class="row">
				<div class="col-md-6 col-md-offset-3">
					<div class="panel panel-login">
						<div class="panel-body">
							<div class="row" >
								<div class="col-lg-12">
									<form id="login-form" action="<?php echo base_url()?>client/welcome/login" method="post" style="display: block;">
										<h2>ENTER OTP</h2>
										<div class="col-md-2 col-sm-2 col-xs-2">
	  							<div class="control-label"><?php if(isset($error_msg)){ echo $error_msg; }?></div>
	  						</div>
										<div class="form-group">
											<input type="text" tabindex="1" class="form-control" id="register_email" placeholder="Enter Email" name="register_email" value="<?php echo set_value('register_email');?>">
											<span style="color:red !important; padding-left:10px;"><?php echo form_error("register_email"); ?></span>
										</div>
										
										<div class="col-xs-6 form-group pull-right">
											<input type="submit" name="login-submit" id="login-submit" tabindex="4" class="form-control btn btn-login" value="Submit">
										</div>
									</form>
									
								</div>
							</div>
						</div>
						
					</div>
				</div>
			</div>
		</div>
	</body>
</html>