<script type="text/javascript" src="<?php echo base_url()?>assets/admin/js/apps/master.js"></script>
   <div class="rightpanel">
        
        <ul class="breadcrumbs">
            <li><a href="dashboard.html"><i class="iconfa-home"></i></a> <span class="separator"></span></li>
            <li>Master Management >> Edit Stream</li>
            
        </ul>
        
        <div class="pageheader">
           
            <div class="pageicon"><span class="iconfa-hdd"></span></div>
            <div class="pagetitle">
            <h5>&nbsp;</h5>
                <h1>Stream Management</h1>
            </div>
        </div><!--pageheader--><!--pageheader-->
        <div class="maincontent">
            <div class="maincontentinner">
            <div class="widgetbox box-inverse">
                <h4 class="widgettitle">Edit Stream</h4>
                <div class="widgetcontent wc1">
                   <form id="edit_stream" class="stdform" >
				  <?php	
						$stream_data=$this->myclass->select("stream_id,stream_name,stream_desc,stream_icon,stream_status","stream","stream_id='$stream_id'");
						
						$stream_status=$stream_data[0]->stream_status;
				?>
				<input type="hidden" name="stream_id" value="<?php echo $stream_data[0]->stream_id;?>" id="stream_id" class="input-large" />
                            <div class="par control-group" id='error_span'>
					
							
							</div>
                           
                            <div class="par control-group">
                                    <label class="control-label" for="firstname">Name</label>
                                <div class="controls"><input type="text" name="stream_name" value='<?php echo $stream_data[0]->stream_name;?>' id="stream_name" class="input-large" /></div>
                            </div>
                            <div class="par control-group">
                                    <label class="control-label" for="firstname">Information</label>
                                <div class="controls"><input type="text" name="stream_desc" value='<?php echo $stream_data[0]->stream_desc;?>' id="stream_desc" class="input-large" /></div>
                            </div>
                            <div class="par control-group">
                                    <label class="control-label" for="firstname">Icon</label>
                                <div class="controls"><input type="text" name="stream_icon" value='<?php echo $stream_data[0]->stream_icon;?>' id="stream_icon" class="input-large" /></div>
                            </div>
                           
							
                            <div class="par control-group">
                                    <label class="control-label" for="location">Status</label>
                               <span class="field">
                            <select name="stream_status" class="uniformselect ">
                                <option value="Active" <?php if($stream_status=='Active'){ echo 'selected';}?>>Active</option>
                                    <option value="Inactive" <?php if($stream_status=='Inactive'){ echo 'selected';}?>>Inactive</option>
                            </select>
                            </span>
                            
                            </div>


                                                    
                            <p class="stdformbutton">
                                    <button type="button" id="btn_streamupdate"class="btn btn-primary">Submit</button>
                            </p>
                    </form>
                </div><!--widgetcontent-->
            </div><!--widget-->
                
                
            </div><!--maincontentinner-->
        </div><!--maincontent-->
        
    </div><!--rightpanel-->
	  </div><!--rightpanel-->