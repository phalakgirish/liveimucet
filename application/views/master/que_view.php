
<script type="text/javascript" src="<?php echo base_url()?>assets/admin/js/apps/master.js"></script>
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
                    <form id="que_registration" class="stdform" >
					<div class="par control-group" id='error_span'>
					
							
					</div>
                    <div class="row-fluid">
                        <div class="span6">
                            <div class="par control-group">
                                    <label class="control-label" for="firstname">Stream</label>
                                 <div class="controls"><?php $this->myclass->select_box("stream_id","stream_name","stream","stream_status='Active' ORDER BY stream_name","subject_stream","")?></div>
                            </div>
                            <div class="par control-group">
                                    <label class="control-label" for="firstname">Subject</label>
                                <div class="controls"><?php $this->myclass->select_box("subject_id","CONCAT(stream_name,'-',subject_name)","subject,stream","subject_status='Active' AND stream_id=subject_stream ORDER BY subject_name","topic_subject","")?></div>
                            </div>
                            <div class="par control-group">
                                    <label class="control-label" for="firstname">Topic</label>
                                <div class="controls"><?php $this->myclass->select_box("topic_id","topic_name","topic","topic_status='Active' ORDER BY topic_name","que_topic","")?></div>
                            </div>
                            <p>
                            <label>Question Type</label>
                            <span>
                                <input type="radio" name="que_type" value="text" onclick="showtext();" />  Text
                                <input type="radio" name="que_type" value="image" onclick="showimage();" /> Image &nbsp; &nbsp;
                            </span>
							</p>
                        <div class="hide" id="text">
                            <div class="par control-group">
                                    <label class="control-label" for="firstname">Question</label>
                                <div class="controls"><input type="text" name="que_txt" id="que_txt" class="input-large" />
                                <!--<div class="par control-group text-center">
                                  <a class="btn btn-primary" href="#textModal" data-toggle="modal">Add Options</a>  
                                </div>-->
                                </div>
                            </div>                            
                        </div>

                           <div class="hide" id="image">
                            <div class="par control-group">
                                <label>Image Upload</label>
                                <input type="file" name="que_image" id="que_image">
                                <!--<div class="par control-group text-center">
                                  <a class="btn btn-primary" href="#imageModal" data-toggle="modal">Add Options</a>  
                                </div>-->
                                
                            </div>
							</div>
							
							<p>
                            <label>Text Option </label>
                            <span>
                                <div class="controls"><input type="text" name="que_txt" id="que_txt" class="input-large" /></div>
                                <div class="par control-group">
                                <label>Image Option</label>
                                <input type="file" name="que_image" id="que_image">
                                
                                
                            </div>
                            </span>
							<div class="par control-group text-center">
                                  <a class="btn btn-primary addoption" >Add Options</a>  
                                </div>
								</p>
                        </div>
						

                        <div class="span6">
                            <div class="par control-group">
                                    <label class="control-label" for="firstname">Marks</label>
                                <div class="controls"><input type="text" name="que_mark" id="que_mark" class="input-large" /></div>
                            </div>
                            <div class="par control-group">
                                    <label class="control-label" for="firstname">Video</label>
                                <div class="controls"><input type="text" name="que_video" id="que_video" class="input-large" placeholder="Enter video URL" /></div>
                            </div>
                             <div class="par control-group">
                                <label>File Upload</label>
                                <div class="fileupload fileupload-new" data-provides="fileupload">
                                <div class="input-append">
                                <div class="uneditable-input span2">
                                    <i class="iconfa-file fileupload-exists"></i>
                                    <span class="fileupload-preview"></span>
                                </div>
                                <span class="btn btn-file"><span class="fileupload-new">Select file</span>
                                
                                </div>
                                </div>
                            </div>
                            <div class="par control-group">
                                    <label class="control-label" for="firstname">Solution</label>
                                <div class="controls">
                                    <textarea name="que_solution" id="que_solution" class="input-large" placeholder="Answer in text format" style="resize: vertical"></textarea></div>
                            </div>
                            <div class="par control-group">
                                    <label class="control-label" for="location">Status</label>
                               <span class="field">
                            <select name="que_status" class="uniformselect ">
                                <option value="Active">Active</option>
                                <option value="Inactive">Inactive</option>
                            </select>
                            </span>
                            <span style="color:red !important; padding-left:10px;"><?php echo form_error("que_status"); ?></span>
                            </div>
                        </div>
                    </div>  
				<table class="table table-bordered responsive">
                    <thead>
                        <tr>
                        	<th>Option</th>
                           
                            <th>&nbsp;</th>
                        </tr>
                    </thead>
                    <tbody>
                        <!--<tr>
                        	<td>Trident</td>
                            
                            <td class="centeralign"><a href="#" class="deleterow"><span class="icon-trash"></span></a></td>
                        </tr>-->
                       
                    </tbody>
                </table>					
                            <p class="stdformbutton">
                                    <button type="button" id='btn_queadd'class="btn btn-primary">Submit</button>
                            </p>
                    </form>
                </div><!--widgetcontent-->
            </div><!--widget-->
			
                <h4 class="widgettitle">Question List</h4>
                <table id="dyntable" class="table table-bordered responsive">
                    
                    <thead>
                        <tr> 
                            <th class="head0">Sr No</th>
                            <th class="head0">Stream Name</th>
                            <th class="head1">Subject Name</th>
							<th class="head0">Topic Name</th>
							<th class="head0">Question</th>
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
        <!--#textModal-->
        <div aria-hidden="false" aria-labelledby="myModalLabel" role="dialog" tabindex="-1" class="modal hide fade in" id="textModal">
    <div class="modal-header">
        <button aria-hidden="true" data-dismiss="modal" class="close" type="button">&times;</button>
        <h3 id="myModalLabel">Add More Options</h3>
    </div>
    <div class="modal-body">
        <form id="queForm" method="post" class="stdform">
    <div class="par control-group after-add-more">
        <label class="control-label" for="firstname">Add Option</label>
            <div class="controls">
                <input type="text" name="option_option[]" class="input-large" placeholder="Write answer" />
                <label class="control-label" for="location">Answer Status</label>
            <span class="field">
            <select name="option_right" class="uniformselect ">
                <option value="right">Right</option>
                <option value="wrong">Wrong</option>
            </select>
            <button type="button" class="btn btn-default add-more"><i class="iconfa-plus"></i></button>
            </span>

            </div>
    </div>

    <!-- The template for adding new field -->
    <div class="control-group copy hide">
        <div class="par control-group">
        <label class="control-label" for="firstname">Add Option</label>
            <div class="controls">
                <input type="text" name="que_textans[]" class="input-large" placeholder="Write answer" />
                <label class="control-label" for="location">Answer Status</label>
                <span class="field">
                <select name="option_right" class="uniformselect ">
                <option value="right">Right</option>
                <option value="wrong">Wrong</option>
            </select>
                <button type="button" class="btn btn-default remove"><i class="iconfa-minus"></i></button>
                </span>
            </div>
        </div>
    </div>
       
    </div>
    <div class="modal-footer">
        <button data-dismiss="modal" class="btn">Close</button>
        <button class="btn btn-primary">Save changes</button>
    </div>
    </form>
</div><!--#textModal-->

<!--#imageModal-->
        <div aria-hidden="false" aria-labelledby="iModalLabel" role="dialog" tabindex="-1" class="modal hide fade in" id="imageModal">
    <div class="modal-header">
        <button aria-hidden="true" data-dismiss="modal" class="close" type="button">&times;</button>
        <h3 id="iModalLabel">Add More Options</h3>
    </div>
    <div class="modal-body">
        <form id="queForm" method="post" class="stdform">
            
    <div class="par control-group iafter-add-more">
        <p>
            <label>Question Type</label>
            <span>
                <input type="radio" name="que_type[]" value="text" onclick="showtextoption();" />  Text
                <input type="radio" name="que_type[]" value="image" onclick="showimageoption();" /> Image &nbsp; &nbsp;
            </span>
            </p>
        
            <div class="controls hide textoption" id="textoption">
                <label class="control-label" for="firstname">Add Option</label>
                <input type="text" name="option_option[]" class="input-large" placeholder="Write answer" />
                <label class="control-label" for="location">Answer Status</label>
            <span class="field">
            <select name="option_right" class="uniformselect ">
                <option value="right">Right</option>
                <option value="wrong">Wrong</option>
            </select>
            <button type="button" class="btn btn-default iadd-more"><i class="iconfa-plus"></i></button>
            </span>

            </div>
            <div class="controls hide imageoption" id="imageoption">
                <label class="control-label" for="firstname">Add Option</label>
                <input type="file" name="que_image" id="que_image">
                <label class="control-label" for="location">Answer Status</label>
            <span class="field">
            <select name="option_right" class="uniformselect ">
                <option value="right">Right</option>
                <option value="wrong">Wrong</option>
            </select>
            <button type="button" class="btn btn-default iadd-more"><i class="iconfa-plus"></i></button>
            </span>

            </div>
    </div>

    <!-- The template for adding new field -->
    <div class="control-group icopy hide icontrol-group" id="icontrol-group">
        <p>
            <label>Question Type</label>
            <span>
                <input type="radio" name="que_type[]" value="text" onclick="ishowtextoption();" />  Text
                <input type="radio" name="que_type[]" value="image" onclick="ishowimageoption();" /> Image &nbsp; &nbsp;
            </span>
            </p>
        <div class="controls hide" id="itextoption">
                <label class="control-label" for="firstname">Add Option</label>
                <input type="text" name="option_option[]" class="input-large" placeholder="Write answer" />
                <label class="control-label" for="location">Answer Status</label>
            <span class="field">
            <select name="option_right" class="uniformselect ">
                <option value="right">Right</option>
                <option value="wrong">Wrong</option>
            </select>
            <button type="button" class="btn btn-default iremove"><i class="iconfa-minus"></i></button>
            </span>

        </div>

             <div class="controls hide" id="iimageoption">
                <label class="control-label" for="firstname">Add Option</label>
                <input type="file" name="que_image" id="que_image">
                <label class="control-label" for="location">Answer Status</label>
            <span class="field">
            <select name="option_right" class="uniformselect ">
                <option value="right">Right</option>
                <option value="wrong">Wrong</option>
            </select>
            <button type="button" class="btn btn-default iremove"><i class="iconfa-minus"></i></button>
            </span>

            </div>
    </div>
       
    </div>
    <div class="modal-footer">
        <button data-dismiss="modal" class="btn">Close</button>
        <button class="btn btn-primary">Save changes</button>
    </div>
    </form>
</div><!--#imageModal-->
    </div><!--rightpanel-->
	  </div><!--rightpanel-->
<script>
    jQuery(document).ready(function() {

      jQuery(".add-more").click(function(){ 
          var html = jQuery(".copy").html();
          jQuery(".after-add-more").after(html);
      });

      jQuery(".iadd-more").click(function(){ 
          var html = jQuery(".icopy").html();
          jQuery(".iafter-add-more").after(html); 
      });


      jQuery("body").on("click",".remove",function(){ 
          jQuery(this).parents(".control-group").remove();
      });

      jQuery("body").on("click",".iremove",function(){ 
          jQuery(this).parents(".controls").remove();
      });
	$(".addoption").click(function(){
	alert(343);
		
});
	
    });
</script>
<script>

</script>