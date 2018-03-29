
<script type="text/javascript" src="<?php echo base_url()?>assets/admin/js/apps/master.js"></script>
 <div class="rightpanel">
        
        <ul class="breadcrumbs">
            <li><a href="dashboard.html"><i class="iconfa-home"></i></a> <span class="separator"></span></li>
            <li>Student Management >> View Student</li>
            
        </ul>
        
        <div class="pageheader">
           
            <div class="pageicon"><span class="iconfa-hdd"></span></div>
            <div class="pagetitle">
            <h5>&nbsp;</h5>
                <h1>student Management</h1>
            </div>
        </div><!--pageheader-->
        
        <div class="maincontent">
            <div class="maincontentinner">
            <div class="widgetbox box-inverse">
                <h4 class="widgettitle">New student</h4>
                <div class="widgetcontent wc1">
                    <form id="stu_registration" class="stdform" >
					<div class="par control-group" id='error_span'>
					
							
					</div>
                            <div class="par control-group">
                                    <label class="control-label" for="firstname">Student Name</label>
                                <div class="controls"><input type="text" name="stu_name" id="stu_name" class="input-large" /></div>
                            </div>
                            <div class="par control-group">
                                    <label class="control-label" for="email">Email</label>
                                <div class="controls"><input type="text" name="stu_email" id="stu_email" class="input-xlarge" /></div>
                            </div>
                             <div class="par control-group">
                                    <label class="control-label" for="email">Mobile</label>
                                <div class="controls"><input type="text" name="stu_mobile" id="stu_mobile" class="input-xlarge" /></div>
                            </div>
                             <div class="par control-group">
                                    <label class="control-label" for="firstname">Student Address</label>
                                <div class="controls">
                                    <textarea name="stu_add" id="stu_add" class="input-large"></textarea>
                                </div>
                            </div>
                            <div class="par control-group">
                                    <label class="control-label" for="firstname">Student City</label>
                                <div class="controls"><input type="text" name="stu_city" id="stu_city" class="input-large" /></div>
                            </div>
                            <div class="par control-group">
                                    <label class="control-label" for="firstname">Student Country</label>
                                <div class="controls"><input type="text" name="stu_country" id="stu_country" class="input-large" /></div>
                            </div>
                           
                           <div class="par control-group">
                                    <label class="control-label" for="location">Type</label>
                               <span class="field">
                            <select name="stu_type" class="uniformselect ">
                                <option value="Free">Free</option>
                                <option value="Paid">Paid</option>
                            </select>
                            </span>
                            <span style="color:red !important; padding-left:10px;"><?php echo form_error("stu_type"); ?></span>
                            </div>
                            <div class="par control-group">
                                    <label class="control-label" for="location">Status</label>
                               <span class="field">
                            <select name="stu_status" class="uniformselect ">
                                <option value="Active">Active</option>
                                <option value="Inactive">Inactive</option>
                            </select>
                            </span>
							<span style="color:red !important; padding-left:10px;"><?php echo form_error("stu_status"); ?></span>
                            </div>
                                                    
                            <p class="stdformbutton">
                                    <button type="button" id='btn_stuadd'class="btn btn-primary">Submit Button</button>
                            </p>
                    </form>
                </div><!--widgetcontent-->
            </div><!--widget-->
			
                <h4 class="widgettitle">Student List</h4>
                <table id="dyntable" class="table table-bordered responsive">
                    
                    <thead>
                        <tr>
                           
                            <th class="head0">Sr No</th>
                            <th class="head1">Name</th>
                            <th class="head1">Email</th>
                            <th class="head1">Mobile</th>
                            <th class="head1">Address</th>
                            <th class="head1">City</th>
                            <th class="head1">Country</th>
							<th class="head0">Status</th>
                            <th class="head1">Action</th>
                        </tr>
                    </thead>
                    <tbody>
					<?php
					$user_list=$this->myclass->select("stu_id,stu_name,stu_mobile,stu_email,stu_add,stu_city,stu_country,stu_status","student","1 ORDER BY stu_name");
					if(is_array($user_list) && $user_list!='no')
					{
						$i=1;
						foreach($user_list as $list)
						{
						if($list->stu_status=='Active')
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
                            <td><?php echo $list->stu_name;?></td>
                            <td><?php echo $list->stu_email;?></td>
                            <td><?php echo $list->stu_mobile;?></td>
                            <td><?php echo $list->stu_add;?></td>
                            <td><?php echo $list->stu_city;?></td>
                            <td><?php echo $list->stu_country;?></td>
							<td class="center"><?php echo $status;?></td>
							
							<td class="center"><a class="deleterow delstu" id='del-<?php echo $list->stu_id;?>' title='Delete student'><span class="icon-trash"></span></a>&nbsp;&nbsp;&nbsp;<a href='<?php echo base_url()?>master/edit_student/<?php echo $list->stu_id;?>' class="icon-pencil" title='Edit Student'></i></a> </td>
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