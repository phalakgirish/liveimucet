
<script type="text/javascript" src="<?php echo base_url()?>assets/admin/js/apps/master.js"></script>
 <div class="rightpanel">
        
        <ul class="breadcrumbs">
            <li><a href="dashboard.html"><i class="iconfa-home"></i></a> <span class="separator"></span></li>
            <li>Master Management >> View Subject</li>
            
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
                <h4 class="widgettitle">New Subject</h4>
                <div class="widgetcontent wc1">
                    <form id="sub_registration" class="stdform" >
					<div class="par control-group" id='error_span'>
					
							
					</div>
							 <div class="par control-group">
                                    <label class="control-label" for="firstname">Stream</label>
                                <div class="controls"><?php $this->myclass->select_box("stream_id","stream_name","stream","stream_status='Active' ORDER BY stream_name","subject_stream","")?></div>
                            </div>
							
                            <div class="par control-group">
                                    <label class="control-label" for="firstname">Subject Name</label>
                                <div class="controls"><input type="text" name="subject_name" id="subject_name" class="input-large" /></div>
                            </div>
                           <div class="par control-group">
                                    <label class="control-label" for="firstname">Subject Information</label>
                                <div class="controls">
                                    <textarea name="subject_des" id="subject_des" class="input-large"></textarea>
                                </div>
                            </div>
                            <div class="par control-group">
                                    <label class="control-label" for="firstname">Subject Icon</label>
                                <div class="controls"><input type="text" name="subject_icon" id="subject_icon" class="input-large" /></div>
                            </div>
                            
                           
                            <div class="par control-group">
                                    <label class="control-label" for="location">Status</label>
                               <span class="field">
                            <select name="subject_status" class="uniformselect ">
                                <option value="Active">Active</option>
                                <option value="Inactive">Inactive</option>
                            </select>
                            </span>
                            <span style="color:red !important; padding-left:10px;"><?php echo form_error("subject_status"); ?></span>
                            </div>
                                                    
                            <p class="stdformbutton">
                                    <button type="button" id='btn_subadd'class="btn btn-primary">Submit</button>
                            </p>
                    </form>
                </div><!--widgetcontent-->
            </div><!--widget-->
			
                <h4 class="widgettitle">Subject List</h4>
                <table id="dyntable" class="table table-bordered responsive">
                    
                    <thead>
                        <tr>
                           
                            <th class="head0">Sr No</th>
                            <th class="head0">Stream Name</th>
                            <th class="head1">Subject Name</th>
							<th class="head0">Information</th>
							<th class="head0">Icon</th>
							<th class="head0">Status</th>
                            <th class="head1">Action</th>
                        </tr>
                    </thead>
                    <tbody>
					<?php
					$uni_list=$this->myclass->select("subject_id,stream_name,subject_name,subject_stream,subject_status,subject_des,subject_icon"," stream,subject","subject_stream=stream_id AND stream_status='Active' ORDER BY subject_name");

					if(is_array($uni_list) && $uni_list!='no')
					{
						$i=1;
						foreach($uni_list as $list)
						{
						if($list->subject_status=='Active')
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
							 <td><?php echo $list->subject_des;?></td>
							 <td><?php echo $list->subject_icon;?></td>
                             
							<td class="center"><?php echo $status;?></td>
							
							<td class="center"><a class="deleterow delsub" id='del-<?php echo $list->subject_id;?>' title='Delete subject'><span class="icon-trash"></span></a>&nbsp;&nbsp;&nbsp;<a href='<?php echo base_url()?>master/edit_subject/<?php echo $list->subject_id;?>' class="icon-pencil" title='Edit Subject'></i></a> </td>
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