<?php include('mainheader.php');
?>
<!-- Page Content -->

<div class="inner-page imucet">
	<div class="container">
		<div class="why-book">
			<div class="row">
				<div class="col-md-12">
					<?php
                    if($this->session->userdata('register_id')==""):
                    ?>
                    <p>Please Login To continue</p>
                    <?php
                    endif;
                    ?>
                    <?php
                    if($this->session->userdata('register_id')!=""):
                    ?>
		<form method="post" name="customerData" class="form-horizontal" action="<?php echo base_url()?>client/paynow">

  <div class="form-group">
      <input type="hidden" name="merchant_id" value="165936"/>
  </div>

  <div class="form-group">
    <label class="control-label col-sm-2" for="pwd">Order Id</label>
    <div class="col-sm-10"> 
      <input type="text" readonly class="form-control" value="<?php echo $orderid; ?>" name="order_id">
    </div>
  </div>
  <div class="form-group">
    <label class="control-label col-sm-2" for="pwd">Amount</label>
    <div class="col-sm-10"> 
      <input type="text" readonly class="form-control" value="<?php echo $package[0]['package_amount']?>" name="amount">
    </div>
  </div>
  <div class="form-group">
      <input type="hidden" name="currency" value="INR"/>
  </div>
  <div class="form-group">
      <input type="hidden" name="redirect_url" value="<?php echo base_url()?>client/paynow/response_handler"/>
  </div>
  <div class="form-group">
      <input type="hidden" name="cancel_url" value="<?php echo base_url()?>client/paynow/response_handler"/>
  </div>
  <div class="form-group">
      <input type="hidden" name="language" value="EN"/>
  </div>


  <div class="form-group">
    <label class="control-label col-sm-2" for="pwd">Billing Name</label>
    <div class="col-sm-10"> 
      <input type="text" class="form-control" value="<?php echo $this->session->userdata('register_name')?>" name="billing_name">
    </div>
  </div>
  <div class="form-group">
    <label class="control-label col-sm-2" for="pwd">Billing Address</label>
    <div class="col-sm-10"> 
      <input type="text" class="form-control" value="<?php echo $this->session->userdata('register_add')?>" name="billing_address">
    </div>
  </div>
  <div class="form-group">
    <label class="control-label col-sm-2" for="pwd">Billing City</label>
    <div class="col-sm-10"> 
      <input type="text" class="form-control" value="<?php echo $this->session->userdata('register_city')?>" name="billing_city">
    </div>
  </div>
  <div class="form-group">
    <label class="control-label col-sm-2" for="pwd">Billing State</label>
    <div class="col-sm-10"> 
      <input type="text" class="form-control" value="<?php echo $this->session->userdata('register_state')?>" name="billing_state">
    </div>
  </div>
  <div class="form-group">
    <label class="control-label col-sm-2" for="pwd">Billing Zip</label>
    <div class="col-sm-10"> 
      <input type="text" class="form-control" value="" name="billing_zip" placeholder="Please Enter Your Pincode">
    </div>
  </div>
  <div class="form-group">
    <label class="control-label col-sm-2" for="pwd">Billing Country</label>
    <div class="col-sm-10"> 
      <input type="text" class="form-control" value="<?php echo $this->session->userdata('register_country')?>" name="billing_country">
    </div>
  </div>
  <div class="form-group">
    <label class="control-label col-sm-2" for="pwd">Billing Tel</label>
    <div class="col-sm-10"> 
      <input type="text" class="form-control" value="<?php echo $this->session->userdata('register_mobile')?>" name="billing_tel">
    </div>
  </div>
  <div class="form-group">
    <label class="control-label col-sm-2" for="pwd">Billing Email</label>
    <div class="col-sm-10"> 
      <input type="text" class="form-control" value="<?php echo $this->session->userdata('register_email')?>" name="billing_email">
    </div>
  </div>
  
  <div class="form-group"> 
    <div class="col-sm-offset-2 col-sm-10">
      <button type="submit" class="btn btn-default">Submit</button>
    </div>
  </div>
</form> 

					<?php
            endif;
          ?>

				</div>
			</div>
		</div>	
		
	</div>
	
</div>
<?php include('mainfooter.php');
?>