<script type="text/javascript" src="<?php echo base_url()?>assets/admin/js/apps/master.js"></script>
<div class="rightpanel">
        
        <ul class="breadcrumbs">
            <li><a href="dashboard.html"><i class="iconfa-home"></i></a> <span class="separator"></span></li>
            <li>User Management >> Change Password</li>
            
        </ul>
        
        <div class="pageheader">
           
            <div class="pageicon"><span class="iconfa-unlock"></span></div>
            <div class="pagetitle">
            <h5>User Management</h5>
                <h1>Change Password</h1>
            </div>
        </div><!--pageheader-->
        
        <div class="maincontent">
            <div class="maincontentinner">
            
            <div class="widget box-inverse">
            <h4 class="widgettitle">Change Password</h4>
            <div class="widgetcontent">
                 <form id="change_pass" class="stdform">
				  <div class="par control-group" id='error_span'>
					
							
				</div>
				<input type="hidden" name="user_id" value="<?php echo $user_id?>" id="user_id" class="input-large" />
                            
                            <div class="par control-group">
							<label class="control-label" for="firstname">New Password</label>
                                <div class="controls"><input type="password" name="user_pass" id="user_pass"  class="input-large"/><span style="color:red !important; padding-left:10px;"><?php echo form_error("user_pass"); ?></span></div>
								 
								
                            </div>
							 <p>
							<label class="control-label" for="firstname">Confirm password</label>
                                <div class="controls"><input type="password" name="user_cpass" id="user_cpass"  class="input-large" /><span style="color:red !important; padding-left:10px;"><?php echo form_error("user_cpass"); ?></span></div>
							</p>
							
                                                    
                            <p class="stdformbutton">
                                    <button type="button" id="btn_changepass" class="btn btn-primary">Submit</button>
                            </p>
                    </form>
            </div><!--widgetcontent-->
            </div><!--widget-->      
           