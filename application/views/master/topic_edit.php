<script type="text/javascript" src="<?php echo base_url()?>assets/admin/js/apps/master.js"></script>
   <div class="rightpanel">
        
        <ul class="breadcrumbs">
            <li><a href="dashboard.html"><i class="iconfa-home"></i></a> <span class="separator"></span></li>
             <li>University Management >> Edit Topic</li>
            
        </ul>
        
        <div class="pageheader">
           
            <div class="pageicon"><span class="iconfa-book"></span></div>
            <div class="pagetitle">
            <h5>&nbsp;</h5>
                <h1>Topic Management</h1>
            </div>
        </div><!--pageheader-->
        
        <div class="maincontent">
            <div class="maincontentinner">
            <div class="widgetbox box-inverse">
                <h4 class="widgettitle">Edit Topic</h4>
                <div class="widgetcontent wc1">
                    <form id="edit_topic" class="stdform" >
					<div class="par control-group" id='error_span'>
					 <?php

                     $uni_data=$this->myclass->select("topic_id,topic_subject,topic_name,topic_status,stream_id,subject_id,subject_stream","topic,stream,subject","topic_id='$topic_id AND stream_id=subject_stream'");
                        $topic_status=$uni_data[0]->topic_status;
                        $topicstream=$uni_data[0]->subject_stream;
                        $topicsub=$uni_data[0]->subject_id;
						?>
							<input type="hidden" name="topic_id" value="<?php echo $uni_data[0]->topic_id;?>" id="topic_id" class="input-large" />
					</div>
							 <div class="par control-group">
                                    <label class="control-label" for="firstname">Stream</label>
                                <div class="controls">
								<?php

                                $this->myclass->dropdown_selected("stream_id","stream_name","stream","stream_status='Active' ORDER BY stream_name","subject_stream","stream_id","stream_name","stream","subject","subject_stream=stream_id AND stream_id='$topicstream'","");
                                ?>
								
                            </div>
                        </div>
                         <div class="par control-group">
                                    <label class="control-label" for="firstname">Subject</label>
                                <div class="controls">
                                <?php

                                $this->myclass->dropdown_selected("subject_id","subject_name","subject","subject_status='Active' ORDER BY subject_name","topic_subject","subject_id","subject_name","subject","topic","topic_subject=subject_id AND subject_id='$topicsub'","");
                                ?>
                                
                            </div>
                        </div>
                            <div class="par control-group">
                                    <label class="control-label" for="firstname">Name</label>
                                <div class="controls"><input type="text" name="topic_name" value='<?php echo $uni_data[0]->topic_name;?>' id="topic_name" class="input-large" /></div>
                            </div>
                            
                            <div class="par control-group">
                                    <label class="control-label" for="location">Status</label>
                               <span class="field">
                            <select name="topic_status" class="uniformselect ">
                                <option value="Active" <?php if($topic_status=='Active'){ echo 'selected';}?>>Active</option>
                                    <option value="Inactive" <?php if($topic_status=='Inactive'){ echo 'selected';}?>>Inactive</option>
                            </select>
                            </span>
                            
                            </div>
                                                    
                            <p class="stdformbutton">
                                    <button type="button" id='btn_topicupdate'class="btn btn-primary">Submit</button>
                            </p>
                    </form>
                </div><!--widgetcontent-->
            </div><!--widget-->
                
                
            </div><!--maincontentinner-->
        </div><!--maincontent-->
        
    </div><!--rightpanel-->
	  </div><!--rightpanel-->