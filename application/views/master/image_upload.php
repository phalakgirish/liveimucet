<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
<script src="//cdn.tinymce.com/4/tinymce.min.js"></script>
  <script>tinymce.init({ selector:'textarea' });</script>
  <link rel="stylesheet" href="<?php echo base_url()?>assets/admin/css/bootstrap-fileupload.min.css">
<script type="text/javascript" src="<?php echo base_url()?>assets/admin/js/bootstrap-fileupload.min.js"></script>
<div class="rightpanel">
        
        <ul class="breadcrumbs">
            <li><a href="dashboard.html"><i class="iconfa-home"></i></a> <span class="separator"></span></li>
            <li>Master Management >> View Question</li>
            
        </ul>
        
        <div class="pageheader">
           
            <div class="pageicon"><span class="iconfa-book"></span></div>
            <div class="pagetitle">
            <h5>&nbsp;</h5>
                <h1>Question Management</h1>
            </div>
        </div><!--pageheader-->
        
        <div class="maincontent">
            <div class="maincontentinner">
            <div class="widgetbox box-inverse">
                <h4 class="widgettitle">New Question</h4>
                <div class="widgetcontent wc1">
                   <h3>Question</h3>
					<form method="post" id="upload_form" class="stdform" enctype="multipart/form-data" action="<?php echo base_url()?>master/upload_ques">
					<div class="par control-group" id='error_span'>
					
							
					</div>
							 <div class="par control-group">
                                    <label class="control-label" for="firstname">Stream</label>
                                <div class="controls"><?php 
								$this->myclass->dropdown("stream_id","stream_name"," stream","stream_status='Active' ORDER BY stream_name","que_stream","que_stream","");
								?></div>
                            </div>
                            <div class="par control-group">
                                    <label class="control-label" for="firstname">Subject</label>
                                <div class="controls subject_list"><?php 
								$this->myclass->select_box("subject_id","CONCAT(stream_name,'-',subject_name)","subject,stream","subject_status='Active' AND stream_id=subject_stream ORDER BY subject_name","topic_subject","")?></div>
                            </div>
							<div class="par control-group">
                                    <label class="control-label" for="firstname">Topic</label>
                                <div class="controls topic_list"><?php
								//$this->myclass->dropdown("topic_id","topic_name","topic","topic_status='Active' AND topic_subject=1 ORDER BY topic_name","que_topic","que_topic","");	
								
								$this->myclass->select_box("topic_id","CONCAT(subject_name,'-',topic_name)","topic,subject","subject_status='Active' AND subject_id=topic_subject ORDER BY subject_name","que_topic","")
								?></div>
                            </div>
                             <p>
                            <label>Question</label>
                            <span class="field"><textarea cols="80" rows="5" class="span5" name="que_question" id="que_question"></textarea></span> 
							</p>
							<div class="par">
								<label>Question Image </label>
								<div class="fileupload fileupload-new" data-provides="fileupload">
								<div class="input-append">
								<div class="uneditable-input span3">
									<i class="iconfa-file fileupload-exists"></i>
									<span class="fileupload-preview"></span>
								</div>
								<span class="btn btn-file"><span class="fileupload-new">Select file</span>
								<span class="fileupload-exists">Change</span>
								<input type="file" name="que_img" id="que_img" /> </span>
								<a href="#" class="btn fileupload-exists" data-dismiss="fileupload">Remove</a>
								</div>
								</div>
							</div>
                            <p>
                            <label>Marks</label>
                            <span class="field"><input type="text" class="input-small" placeholder="Enter Marks" name="que_marks" id="que_marks" /></span>
							</p>
						   <p>
                            <label>Video Solution links</label>
                            <span class="field"><input type="text"  class="input-xlarge" placeholder="Enter Video Link" name="que_video" id="que_video" /></span>
							</p>
							
							<div class="par">
								<label>Attach Solution</label>
								<div class="fileupload fileupload-new" data-provides="fileupload">
								<div class="input-append">
								<div class="uneditable-input span3">
									<i class="iconfa-file fileupload-exists"></i>
									<span class="fileupload-preview"></span>
								</div>
								<span class="btn btn-file"><span class="fileupload-new">Select file</span>
								<span class="fileupload-exists">Change</span>
								<input type="file" name="image_file_solution" id="image_file_solution" />
								<a href="#" class="btn fileupload-exists" data-dismiss="fileupload">Remove</a>
								</div>
								</div>
							</div>
							<p>
                            <label>Solution</label>
                            <span class="field"><textarea cols="80" rows="5" class="span5" name="que_solution" id="que_solution"></textarea></span> 
							</p>
							 <div class="par control-group">
                                    <label class="control-label" for="location">Status</label>
                               <span class="field">
                            <select name="que_status" class="uniformselect ">
                                <option value="1">Active</option>
                                <option value="0">Deactive</option>
                            </select>
                            </span>
							
                            </div>
                            <p class="stdformbutton">
							<!-- <input type="submit" name="upload" id="upload" value="Submit Question" class="btn btn-primary" /> -->
                              <!-- </form>       -->
                            </p>
                    <hr>
							 <h3>Answer Options</h3>
				<!-- <form method="post" id="optionupload_form" class="stdform" enctype="multipart/form-data" action="<?php //echo base_url()?>master/ajax_upload_option"> -->
				<input type="hidden" name="option_queid[]" value="<?php echo $srno?>">
					<div class="par control-group">
							<p>
                            <label>Answer Option 1</label>
                            <span class="field"><textarea cols="80" rows="5" class="span5" name="option_option1" id="option_option_1"></textarea></span> 
							</p>
							<div class="par">
								<label>Answer Image 1</label>
								<div class="fileupload fileupload-new" data-provides="fileupload">
								<div class="input-append">
								<div class="uneditable-input span3">
									<i class="iconfa-file fileupload-exists"></i>
									<span class="fileupload-preview"></span>
								</div>
								<span class="btn btn-file"><span class="fileupload-new">Select file</span>
								<span class="fileupload-exists">Change</span>
								<input type="file" name="option_img1" id="option_img1" />
								<a href="#" class="btn fileupload-exists" data-dismiss="fileupload">Remove</a>
								</div>
								</div>
							</div>
							<p>
                            <label>Answer Status 1</label>
                            <span class="formwrapper">
                            	<select name="option_right1" class="uniformselect ">
                                <option value="right">Right</option>
                                <option value="wrong">Wrong</option>
                            </select>
                                
                            </span>
							</p>
					</div>
					<hr>
					<input type="hidden" name="option_queid[]" value="<?php echo $srno?>">
					<div class="par control-group">
							<p>
                            <label>Answer Option 2</label>
                            <span class="field"><textarea cols="80" rows="5" class="span5" name="option_option2" id="option_option2"></textarea></span> 
							</p>
							<div class="par">
								<label>Answer Image 2</label>
								<div class="fileupload fileupload-new" data-provides="fileupload">
								<div class="input-append">
								<div class="uneditable-input span3">
									<i class="iconfa-file fileupload-exists"></i>
									<span class="fileupload-preview"></span>
								</div>
								<span class="btn btn-file"><span class="fileupload-new">Select file</span>
								<span class="fileupload-exists">Change</span>
								<input type="file" name="option_img2" id="option_img2" />
								<a href="#" class="btn fileupload-exists" data-dismiss="fileupload">Remove</a>
								</div>
								</div>
							</div>
							<p>
                            <label>Answer Status 2</label>
                            <span class="formwrapper">
                            	<select name="option_right2" class="uniformselect ">
                                <option value="right">Right</option>
                                <option value="wrong">Wrong</option>
                            </select>
                                
                            </span>
							</p>
					</div>

					<hr>
					<input type="hidden" name="option_queid[]" value="<?php echo $srno?>">
					<div class="par control-group">
							<p>
                            <label>Answer Option 3</label>
                            <span class="field"><textarea cols="80" rows="5" class="span5" name="option_option3"></textarea></span> 
							</p>
							<div class="par">
								<label>Answer Image 3</label>
								<div class="fileupload fileupload-new" data-provides="fileupload">
								<div class="input-append">
								<div class="uneditable-input span3">
									<i class="iconfa-file fileupload-exists"></i>
									<span class="fileupload-preview"></span>
								</div>
								<span class="btn btn-file"><span class="fileupload-new">Select file</span>
								<span class="fileupload-exists">Change</span>
								<input type="file" name="option_img3"/>
								<a href="#" class="btn fileupload-exists" data-dismiss="fileupload">Remove</a>
								</div>
								</div>
							</div>
							<p>
                            <label>Answer Status 3</label>
                            <span class="formwrapper">
                            	<select name="option_right3" class="uniformselect ">
                                <option value="right">Right</option>
                                <option value="wrong">Wrong</option>
                            </select>
                                
                            </span>
							</p>
					</div>
					<hr>
					<input type="hidden" name="option_queid[]" value="<?php echo $srno?>">
					<div class="par control-group">
							<p>
                            <label>Answer Option 4</label>
                            <span class="field"><textarea cols="80" rows="5" class="span5" name="option_option4"></textarea></span> 
							</p>
							<div class="par">
								<label>Answer Image 4</label>
								<div class="fileupload fileupload-new" data-provides="fileupload">
								<div class="input-append">
								<div class="uneditable-input span3">
									<i class="iconfa-file fileupload-exists"></i>
									<span class="fileupload-preview"></span>
								</div>
								<span class="btn btn-file"><span class="fileupload-new">Select file</span>
								<span class="fileupload-exists">Change</span>
								<input type="file" name="option_img4"/>
								<a href="#" class="btn fileupload-exists" data-dismiss="fileupload">Remove</a>
								</div>
								</div>
							</div>
							<p>
                            <label>Answer Status 4</label>
                            <span class="formwrapper">
                            	<select name="option_right4" class="uniformselect ">
                                <option value="right">Right</option>
                                <option value="wrong">Wrong</option>
                            </select>
                                
                            </span>
							</p>
					</div>
					<p class="stdformbutton">
					<input type="submit" name="upload" value="Submit" class="btn btn-primary" />
					  </form>      
					</p>
							 
							
                </div><!--widgetcontent-->
            </div><!--widget-->
			
                <h4 class="widgettitle">Question List</h4>
                 <table id="dyntable" class="table table-bordered responsive">

                    

                    <thead>

                        <tr>

                           

                            <th class="head0">Sr No</th>
							<th class="head0">Topic</th>
                            <th class="head0">Question</th>

                            <th class="head0">Status</th>

                            <th class="head1">Action</th>

                        </tr>

                    </thead>

                    <tbody>

					<?php

					$que_list=$this->myclass->select("que_id,topic_name,que_question,que_status","question,topic","que_topic=topic_id ORDER BY topic_name");



					if(is_array($que_list) && $que_list!='no')

					{

						$i=1;

						foreach($que_list as $list)

						{

						if($list->que_status=='Active')

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

                            <td><?php echo $list->topic_name;?></td>

							 <td><?php echo $list->que_question;?></td>

							 <td class="center"><?php echo $status;?></td>

							

							<td class="center"><a class="deleterow deltopic" id='del-<?php echo $list->que_id;?>' title='Delete Question'><span class="icon-trash"></span></a>&nbsp;&nbsp;&nbsp;<a href='<?php echo base_url()?>master/edit_que/<?php echo $list->que_id;?>' class="icon-pencil" title='Edit Question'></i></a> </td>

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
	<script>
$(document).ready(function(){
	
	// $('#upload_form').on('submit', function(e){
	// 	e.preventDefault();
		
	// 	$.ajax({
	// 			url:"<?php echo base_url(); ?>master/ajax_upload", 
	// 			//base_url() = http://localhost/tutorial/codeigniter
	// 			method:"POST",
	// 			data:new FormData(this),
	// 			contentType: false,
	// 			cache: false,
	// 			processData:false,
	// 			success:function(data)
	// 			{
	// 				$('#uploaded_image').html(data);
	// 				alert("Question Added");
	// 			}
	// 		});
		
	// });
	
	// $('#optionupload_form').on('submit', function(e){
	// 	e.preventDefault();
		
	// 	$.ajax({
	// 			url:"<?php echo base_url(); ?>master/ajax_upload_option", 
	// 			//base_url() = http://localhost/tutorial/codeigniter
	// 			method:"POST",
	// 			data:new FormData(this),
	// 			contentType: false,
	// 			cache: false,
	// 			processData:false,
	// 			success:function(data)
	// 			{
	// 				alert("Answer options added");
	// 				$('#uploaded_image').html(data);
	// 			}
	// 		});
		
	// });
});
</script>