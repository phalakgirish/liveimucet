<script type="text/javascript" src="<?php echo base_url()?>assets/admin/js/apps/master.js"></script>
   <div class="rightpanel">
        
        <ul class="breadcrumbs">
            <li><a href="dashboard.html"><i class="iconfa-home"></i></a> <span class="separator"></span></li>
             <li>University Management >> Edit Subject</li>
            
        </ul>
        
        <div class="pageheader">
           
            <div class="pageicon"><span class="iconfa-book"></span></div>
            <div class="pagetitle">
            <h5>&nbsp;</h5>
                <h1>Subject Management</h1>
            </div>
        </div><!--pageheader-->
        
        <div class="maincontent">
            <div class="maincontentinner">
            <div class="widgetbox box-inverse">
                <h4 class="widgettitle">Edit Subject</h4>
                <div class="widgetcontent wc1">
                    <form id="edit_subject" class="stdform" >
					<div class="par control-group" id='error_span'>
					 <?php	

                     $uni_data=$this->myclass->select("subject_id,subject_name,subject_stream,subject_des,subject_icon,subject_status","subject","subject_id='$subject_id'");
                        $subject_status=$uni_data[0]->subject_status;
                        $substream=$uni_data[0]->subject_stream;
						?>
							<input type="hidden" name="subject_id" value="<?php echo $uni_data[0]->subject_id;?>" id="subject_id" class="input-large" />
					</div>
							 <div class="par control-group">
                                    <label class="control-label" for="firstname">Stream</label>
                                <div class="controls">
								<?php

                                $this->myclass->dropdown_selected("stream_id","stream_name","stream","stream_status='Active' ORDER BY stream_name","subject_stream","stream_id","stream_name","stream","subject","subject_stream=stream_id AND stream_id='$substream'","");
                                ?>
								
                            </div>
                            <div class="par control-group">
                                    <label class="control-label" for="firstname">Name</label>
                                <div class="controls"><input type="text" name="subject_name" value='<?php echo $uni_data[0]->subject_name;?>' id="subject_name" class="input-large" /></div>
                            </div>
                            <div class="par control-group">
                                    <label class="control-label" for="firstname">Information</label>
                                <div class="controls"><input type="text" name="subject_des" value='<?php echo $uni_data[0]->subject_des;?>' id="subject_des" class="input-large" /></div>
                            </div>
                            <div class="par control-group">
                                    <label class="control-label" for="firstname">Icon</label>
                                <div class="controls"><input type="text" name="subject_icon" value='<?php echo $uni_data[0]->subject_icon;?>' id="subject_icon" class="input-large" /></div>
                            </div>
                           
                            
                            <div class="par control-group">
                                    <label class="control-label" for="location">Status</label>
                               <span class="field">
                            <select name="subject_status" class="uniformselect ">
                                <option value="Active" <?php if($subject_status=='Active'){ echo 'selected';}?>>Active</option>
                                    <option value="Inactive" <?php if($subject_status=='Inactive'){ echo 'selected';}?>>Inactive</option>
                            </select>
                            </span>
                            
                            </div>
                                                    
                            <p class="stdformbutton">
                                    <button type="button" id='btn_subupdate'class="btn btn-primary">Submit</button>
                            </p>
                    </form>
                </div><!--widgetcontent-->
            </div><!--widget-->
                
                
            </div><!--maincontentinner-->
        </div><!--maincontent-->
        
    </div><!--rightpanel-->
	  </div><!--rightpanel-->