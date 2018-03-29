
<script type="text/javascript" src="<?php echo base_url()?>assets/admin/js/apps/master.js"></script>
 <div class="rightpanel">
        
        <ul class="breadcrumbs">
            <li><a href="dashboard.html"><i class="iconfa-home"></i></a> <span class="separator"></span></li>
            <li>Master Management >> View Topic</li>
            
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
                <h4 class="widgettitle">New Topic</h4>
                <div class="widgetcontent wc1">
                    <form id="topic_registration" class="stdform" >
					<div class="par control-group" id='error_span'>
					
							
					</div>
							 <div class="par control-group">
                                    <label class="control-label" for="firstname">Stream</label>
                                 <div class="controls"><?php $this->myclass->select_box("stream_id","stream_name","stream","stream_status='Active' ORDER BY stream_name","subject_stream","")?></div>
                            </div>
                            <div class="par control-group">
                                    <label class="control-label" for="firstname">Subject</label>
                                <div class="controls">																<?php 								$this->myclass->select_box("subject_id","CONCAT(stream_name,'-',subject_name)","subject,stream","subject_status='Active' AND stream_id=subject_stream ORDER BY subject_name","topic_subject","")																//$this->myclass->select_box("subject_id","CONCAT(stream_name,'-',subject_name)","subject,stream","subject_status='Active' AND stream_id=subject_stream ORDER BY subject_name","topic_subject","")?></div>                            </div>
							
                            <div class="par control-group">
                                    <label class="control-label" for="firstname">Topic Name</label>
                                <div class="controls"><input type="text" name="topic_name" id="topic_name" class="input-large" /></div>
                            </div>
                           
                            <div class="par control-group">
                                    <label class="control-label" for="location">Status</label>
                               <span class="field">
                            <select name="topic_status" class="uniformselect ">
                                <option value="Active">Active</option>
                                <option value="Inactive">Inactive</option>
                            </select>
                            </span>
                            <span style="color:red !important; padding-left:10px;"><?php echo form_error("topic_status"); ?></span>
                            </div>
                                                    
                            <p class="stdformbutton">
                                    <button type="button" id='btn_topicadd'class="btn btn-primary">Submit</button>
                            </p>
                    </form>
                </div><!--widgetcontent-->
            </div><!--widget-->
			
                <h4 class="widgettitle">Topic List</h4>
                <table id="dyntable" class="table table-bordered responsive">
                    
                    <thead>
                        <tr>
                           
                            <th class="head0">Sr No</th>
                            <th class="head0">Stream Name</th>
                            <th class="head1">Subject Name</th>
							<th class="head0">Topic Name</th>
							<th class="head0">Status</th>
                            <th class="head1">Action</th>
                        </tr>
                    </thead>
                    <tbody>
					<?php
					$uni_list=$this->myclass->select("topic_id,stream_name,topic_subject,subject_name,subject_stream,topic_name,topic_status"," stream,subject,topic","subject_stream=stream_id AND subject_id=topic_subject AND stream_status='Active' AND subject_status='Active' ORDER BY topic_name");

					if(is_array($uni_list) && $uni_list!='no')
					{
						$i=1;
						foreach($uni_list as $list)
						{
						if($list->topic_status=='Active')
						{
							$status='<span class="label label-success">Active</span>';	
						}		
						else
						{
							$status='<span class="label label-important">Inactive</span>';
						}	
					?>
                        <tr class="gradeX">
                          </span></td>
                            <td class="center"><?php echo $i; ?></td>
                            <td><?php echo $list->stream_name;?></td>
							 <td><?php echo $list->subject_name;?></td>
							 <td><?php echo $list->topic_name;?></td>
							<td class="center"><?php echo $status;?></td>
							
							<td class="center"><a class="deleterow deltopic" id='del-<?php echo $list->topic_id;?>' title='Delete Topic'><span class="icon-trash"></span></a>&nbsp;&nbsp;&nbsp;<a href='<?php echo base_url()?>master/edit_topic/<?php echo $list->topic_id;?>' class="icon-pencil" title='Edit Topic'></i></a> </td>
                        </tr>
					<?php
							$i++;
						}
					}		
					?>	
                    </tbody>
                </table>
                
            </div><!--maincontentinner-->
        </div><!--maincontent-->
        
    </div><!--rightpanel-->
	  </div><!--rightpanel-->