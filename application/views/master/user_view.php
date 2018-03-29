<script type="text/javascript" src="<?php echo base_url()?>assets/admin/js/apps/master.js"></script>
   <div class="rightpanel">
        
        <ul class="breadcrumbs">
            <li><a href="dashboard.html"><i class="iconfa-home"></i></a> <span class="separator"></span></li>
            <li>User Management >> View User</li>
            
        </ul>
        
        <div class="pageheader">
           
            <div class="pageicon"><span class="iconfa-group"></span></div>
            <div class="pagetitle">
            <h5>&nbsp;</h5>
                <h1>Users Management</h1>
            </div>
        </div><!--pageheader-->
        
        <div class="maincontent">
            <div class="maincontentinner">
            <div class="widgetbox box-inverse">
                <h4 class="widgettitle">User Registration</h4>
                <div class="widgetcontent wc1">
                    <form id="user_registration" class="stdform" >
					<div class="par control-group" id='error_span'>
					
							
					</div>
                            <div class="par control-group">
                                    <label class="control-label" for="firstname">Name</label>
                                <div class="controls"><input type="text" name="user_name" value="<?php echo set_value("user_name");?>" id="firstname" class="input-xlarge" /><span style="color:red !important; padding-left:10px;"><?php echo form_error("user_name"); ?></span></div>
                            </div>
                            
                            <div class="par control-group">
                                    <label class="control-label" for="email">Email</label>
                                <div class="controls"><input type="text" name="user_email" value="<?php echo set_value("user_email");?>" id="email" class="input-xlarge" /><span style="color:red !important; padding-left:10px;"><?php echo form_error("user_email"); ?></span></div>
                            </div>
                             <div class="par control-group">
                                    <label class="control-label" for="email">Mobile</label>
                                <div class="controls"><input type="text" name="user_phone" value="<?php echo set_value("user_phone");?>" id="mobile" class="input-xlarge" /><span style="color:red !important; padding-left:10px;"><?php echo form_error("user_phone"); ?></span></div>
                            </div>
                            <div class="par control-group">
                                    <label class="control-label" for="email">Password</label>
                                <div class="controls"><input type="Password" name="user_pass"  value="<?php echo set_value("user_pass");?>"id="email" class="input-xlarge" /><span style="color:red !important; padding-left:10px;"><?php echo form_error("user_pass"); ?></span></div>
                            </div>
                            <div class="par control-group">
                                    <label class="control-label" for="email">Confirm Password</label>
                                <div class="controls"><input type="Password" name="user_cpass" value="<?php echo set_value("user_cpass");?>" id="email" class="input-xlarge" /><span style="color:red !important; padding-left:10px;"><?php echo form_error("user_cpass"); ?></span></div>
                            </div>
                           
                            <div class="par control-group">
                                    <label class="control-label" for="location">Status</label>
                               <span class="field">
                            <select name="user_status" class="uniformselect ">
                                <option value="1">Active</option>
                                <option value="2">Deactive</option>
                            </select>
                            </span>
							<span style="color:red !important; padding-left:10px;"><?php echo form_error("user_status"); ?></span>
                            </div>
                                                    
                            <p class="stdformbutton">
                                    <button type="button" id='btn_useradd'class="btn btn-primary">Submit Button</button>
                            </p>
                    </form>
                </div><!--widgetcontent-->
            </div><!--widget-->
                <h4 class="widgettitle">User List</h4>
                <table id="dyntable" class="table table-bordered responsive">
                    
                    <thead>
                        <tr>
                           
                            <th class="head0">Sr No</th>
                            <th class="head1">Name</th>
                            <th class="head0">Mobile</th>
							<th class="head0">Email</th>
                            <th class="head0">Status</th>
                            <th class="head0">Action</th>
                        </tr>
                    </thead>
                    <tbody>
					<?php
					$user_list=$this->myclass->select("user_id,user_name,user_email,user_phone,user_status","user","1 ORDER BY user_name");
					if(is_array($user_list) && $user_list!='no')
					{
						$i=1;
						foreach($user_list as $list)
						{
						if($list->user_status=="Active")
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
                            <td><?php echo $list->user_name;?></td>
							<td class="center"><?php echo $list->user_phone;?></td>
                           <td><?php echo $list->user_email;?></td>
                           
						   <td class="center"><?php echo $status;?></td>
							<td class="center"><a class="deleterow deluser" id='del-<?php echo $list->user_id;?>' title='Delete User'><span class="icon-trash"></span></a>&nbsp;&nbsp;&nbsp;<a href='<?php echo base_url()?>user/user_edit/<?php echo $list->user_id;?>' class="icon-pencil" title='Edit User'></i></a> &nbsp;&nbsp;&nbsp;<a href='<?php echo base_url()?>user/user_change_pass/<?php echo $list->user_id;?>' class="icon-lock" title='Change Password'></i></a></td>
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