
<script type="text/javascript" src="<?php echo base_url()?>assets/admin/js/apps/master.js"></script>
 <div class="rightpanel">
        
        <ul class="breadcrumbs">
            <li><a href="dashboard.html"><i class="iconfa-home"></i></a> <span class="separator"></span></li>
            <li>Stream Management >> View Stream</li>
            
        </ul>
        
        <div class="pageheader">
           
            <div class="pageicon"><span class="iconfa-hdd"></span></div>
            <div class="pagetitle">
            <h5>&nbsp;</h5>
                <h1>Stream Management</h1>
            </div>
        </div><!--pageheader-->
        
        <div class="maincontent">
            <div class="maincontentinner">
            <div class="widgetbox box-inverse">
                <h4 class="widgettitle">New Stream</h4>
                <div class="widgetcontent wc1">
                    <form id="stream_registration" class="stdform" >
					<div class="par control-group" id='error_span'>
					
							
					</div>
                            <div class="par control-group">
                                    <label class="control-label" for="firstname">Stream Name</label>
                                <div class="controls"><input type="text" name="stream_name" id="stream_name" class="input-large" /></div>
                            </div>
                            
                             
                             <div class="par control-group">
                                    <label class="control-label" for="firstname">Stream Information</label>
                                <div class="controls">
                                    <textarea name="stream_desc" id="stream_desc" class="input-large"></textarea>
                                </div>
                            </div>
                            <div class="par control-group">
                                    <label class="control-label" for="firstname">Stream Icon</label>
                                <div class="controls"><input type="text" name="stream_icon" id="stream_icon" class="input-large" /></div>
                            </div>
                            
                           
                            <div class="par control-group">
                                    <label class="control-label" for="location">Status</label>
                               <span class="field">
                            <select name="stream_status" class="uniformselect ">
                                <option value="Active">Active</option>
                                <option value="Inactive">Inactive</option>
                            </select>
                            </span>
							<span style="color:red !important; padding-left:10px;"><?php echo form_error("stream_status"); ?></span>
                            </div>
                                                    
                            <p class="stdformbutton">
                                    <button type="button" id='btn_streamadd'class="btn btn-primary">Submit Button</button>
                            </p>
                    </form>
                </div><!--widgetcontent-->
            </div><!--widget-->
			
                <h4 class="widgettitle">Stream List</h4>
                <table id="dyntable" class="table table-bordered responsive">
                    
                    <thead>
                        <tr>
                           
                            <th class="head0">Sr No</th>
                            <th class="head1">Name</th>
                            <th class="head1">Information</th>
                            <th class="head1">Icon</th>
							<th class="head0">Status</th>
                            <th class="head1">Action</th>
                        </tr>
                    </thead>
                    <tbody>
					<?php
					$user_list=$this->myclass->select("stream_id,stream_name,stream_desc,stream_icon,stream_status","stream","1 ORDER BY stream_name");
					if(is_array($user_list) && $user_list!='no')
					{
						$i=1;
						foreach($user_list as $list)
						{
						if($list->stream_status=='Active')
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
                            <td><?php echo $list->stream_desc;?></td>
                            <td><?php echo $list->stream_icon;?></td>
							<td class="center"><?php echo $status;?></td>
							
							<td class="center"><a class="deleterow delstream" id='del-<?php echo $list->stream_id;?>' title='Delete stream'><span class="icon-trash"></span></a>&nbsp;&nbsp;&nbsp;<a href='<?php echo base_url()?>master/edit_stream/<?php echo $list->stream_id;?>' class="icon-pencil" title='Edit Stream'></i></a> </td>
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