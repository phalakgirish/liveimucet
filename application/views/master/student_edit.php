<script type="text/javascript" src="<?php echo base_url()?>assets/admin/js/apps/master.js"></script>
   <div class="rightpanel">
        
        <ul class="breadcrumbs">
            <li><a href="dashboard.html"><i class="iconfa-home"></i></a> <span class="separator"></span></li>
            <li>Master Management >> Edit Student</li>
            
        </ul>
        
        <div class="pageheader">
           
            <div class="pageicon"><span class="iconfa-hdd"></span></div>
            <div class="pagetitle">
            <h5>&nbsp;</h5>
                <h1>Student Management</h1>
            </div>
        </div><!--pageheader--><!--pageheader-->
        <div class="maincontent">
            <div class="maincontentinner">
            <div class="widgetbox box-inverse">
                <h4 class="widgettitle">Edit Student</h4>
                <div class="widgetcontent wc1">
                   <form id="edit_student" class="stdform" >
				  <?php	
						$stu_data=$this->myclass->select("stu_id,stu_name,stu_email,stu_mobile,stu_add,stu_city,stu_country,stu_type,stu_status","student","stu_id='$stu_id'");
						$stu_type=$stu_data[0]->stu_type;
						$stu_status=$stu_data[0]->stu_status;
				?>
				<input type="hidden" name="stu_id" value="<?php echo $stu_data[0]->stu_id;?>" id="stu_id" class="input-large" />
                            <div class="par control-group" id='error_span'>
					
							
							</div>
                           
                            <div class="par control-group">
                                    <label class="control-label" for="firstname">Name</label>
                                <div class="controls"><input type="text" name="stu_name" value='<?php echo $stu_data[0]->stu_name;?>' id="stu_name" class="input-large" /></div>
                            </div>
                            <div class="par control-group">
                                    <label class="control-label" for="firstname">Email</label>
                                <div class="controls"><input type="text" name="stu_email" value='<?php echo $stu_data[0]->stu_email;?>' id="stu_email" class="input-large" /></div>
                            </div>
                            <div class="par control-group">
                                    <label class="control-label" for="firstname">Mobile</label>
                                <div class="controls"><input type="text" name="stu_mobile" value='<?php echo $stu_data[0]->stu_mobile;?>' id="stu_mobile" class="input-large" /></div>
                            </div>
                            <div class="par control-group">
                                    <label class="control-label" for="firstname">Address</label>
                                <div class="controls"><input type="text" name="stu_add" value='<?php echo $stu_data[0]->stu_add;?>' id="stu_add" class="input-large" /></div>
                            </div>
                            <div class="par control-group">
                                    <label class="control-label" for="firstname">City</label>
                                <div class="controls"><input type="text" name="stu_city" value='<?php echo $stu_data[0]->stu_city;?>' id="stu_city" class="input-large" /></div>
                            </div>
                            <div class="par control-group">
                                    <label class="control-label" for="firstname">Country</label>
                                <div class="controls"><input type="text" name="stu_country" value='<?php echo $stu_data[0]->stu_country;?>' id="stu_country" class="input-large" /></div>
                            </div>

							<div class="par control-group">
                                    <label class="control-label" for="location">Type</label>
                               <span class="field">
                            <select name="stu_type" class="uniformselect ">
                                <option value="Free" <?php if($stu_type=='Free'){ echo 'selected';}?>>Free</option>
                                    <option value="0" <?php if($stu_type=='0'){ echo 'selected';}?>>Deactive</option>
                            </select>
                            </span>
                            
                            </div>
							
                            <div class="par control-group">
                                    <label class="control-label" for="location">Status</label>
                               <span class="field">
                            <select name="stu_status" class="uniformselect ">
                                <option value="Active" <?php if($stu_status=='Active'){ echo 'selected';}?>>Active</option>
                                    <option value="Inactive" <?php if($stu_status=='Inactive'){ echo 'selected';}?>>Inactive</option>
                            </select>
                            </span>
                            
                            </div>


                                                    
                            <p class="stdformbutton">
                                    <button type="button" id="btn_stuupdate"class="btn btn-primary">Submit</button>
                            </p>
                    </form>
                </div><!--widgetcontent-->
            </div><!--widget-->
                
                
            </div><!--maincontentinner-->
        </div><!--maincontent-->
        
    </div><!--rightpanel-->
	  </div><!--rightpanel-->