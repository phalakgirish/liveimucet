<script type="text/javascript" src="<?php echo base_url()?>assets/admin/js/apps/master.js"></script>
<div class="rightpanel">
		<ul class="breadcrumbs">
            <li><a href="dashboard.html"><i class="iconfa-home"></i></a> <span class="separator"></span></li>
            <li>User Management >> View User</li>
            
        </ul>
        <div class="pageheader">
           
            <div class="pageicon"><span class="iconfa-group"></span></div>
            <div class="pagetitle">
            <h5>User Management</h5>
                <h1>Edit User</h1>
            </div>
        </div><!--pageheader-->
        <div class="maincontent">
            <div class="maincontentinner">
            <div class="widgetbox box-inverse">
                <h4 class="widgettitle">Edit User</h4>
                <div class="widgetcontent wc1">
                   <form id="user_editform" class="stdform" >
				  <?php	
						$user_data=$this->myclass->select("user_id,user_name,user_email,user_phone,user_pass,user_typeid,user_status","user","user_id='$user_id'");
						
						$user_status=$user_data[0]->user_status;
				?>
				<input type="hidden" name="user_id" value="<?php echo $user_data[0]->user_id;?>" id="user_id" class="input-large" />
                            <div class="par control-group" id='error_span'>
					
							
							</div>
                            <div class="par control-group">
							<label class="control-label" for="firstname">Name</label>
                                <div class="controls"><input type="text" name="user_name" id="user_name" value="<?php echo $user_data[0]->user_name;?>" class="input-large"   /><span style="color:red !important; padding-left:10px;"><?php echo form_error("user_name"); ?></span></div>
								 
								
                            </div>
							 <p>
							<label class="control-label" for="firstname">Email</label>
                                <div class="controls"><input type="text" name="user_email" id="user_email" value="<?php echo $user_data[0]->user_email;?>" class="input-large" /><span style="color:red !important; padding-left:10px;"><?php echo form_error("user_email"); ?></span></div>
							</p>
							 <p>
							<label class="control-label" for="firstname">Mobile</label>
                                <div class="controls"><input type="text" name="user_phone" id="user_phone" value="<?php echo $user_data[0]->user_phone;?>" class="input-large"  /><span style="color:red !important; padding-left:10px;"><?php echo form_error("user_phone"); ?></span></div>
							</p>
							
                            <p>
                            <label>Status</label>
                            <span class="field">
								<select name="user_status" class="uniformselect">
									<option value="">Choose One</option>
									<option value="1"<?php if($user_status=='1'){ echo 'selected';}?>>Active</option>
									<option value="0" <?php if($user_status=='0'){ echo 'selected';}?>>Deactive</option>
									
								</select>
								<span style="color:red !important; padding-left:10px;"><?php echo form_error("user_status"); ?></span>
                            </span>
							</p>
                                                    
                            <p class="stdformbutton">
                                    <button type="button" id="btn_useredit"class="btn btn-primary">Submit</button>
                            </p>
                    </form>
                </div><!--widgetcontent-->
            </div><!--widget-->
                
                
            </div><!--maincontentinner-->
        </div><!--maincontent-->
        
    </div><!--rightpanel-->
	  </div><!--rightpanel-->