jQuery(document).ready(function(){
jQuery('#dyntable').dataTable({
            "sPaginationType": "full_numbers",
            "aaSortingFixed": [[0,'asc']],
            "fnDrawCallback": function(oSettings) {
                
            }
        });
        
        jQuery('#dyntable2').dataTable( {
            "bScrollInfinite": true,
            "bScrollCollapse": true,
            "sScrollY": "300px"
        });
	//user registration	
	jQuery("#btn_useradd").click(function(){
		var str=jQuery("#user_registration").serialize();
		//alert(str);
		
		jQuery.ajax({
				type:'POST',
				url:CI_ROOT+'user/register',
				data:str,
				success:function(result)
				{
					if(result==1)
					{
						jQuery("#error_span").html("<h4 class='widgettitle title-success'>Congratulations! user successfully registered </h4>");
							//var redirect_page=CI_ROOT+'user/user_view';
							var sec=1;
							setInterval(function(){
								if(sec==2)
								{
									location.reload();
								}
								sec++;
							},200); 
					}
					else
					{
					jQuery("#error_span").html(result);
					}
				}
		});
	});
	//user update
	jQuery("#btn_useredit").click(function(){
	var str=jQuery("#user_editform").serialize();
		//alert(str);
		
		jQuery.ajax({
				type:'POST',
				url:CI_ROOT+'user/user_edit_action',
				data:str,
				success:function(result)
				{
					if(result==1)
					{
						jQuery("#error_span").html("<h4 class='widgettitle title-success'>Congratulations! user update successfully.</h4>");
							var redirect_page=CI_ROOT+'user/view_user';
							var sec=1;
							setInterval(function(){
								if(sec==2)
								{
									window.location.href=redirect_page;
								}
								sec++;
							},200); 
					}
					else
					{
					jQuery("#error_span").html(result);
					}
				}
		});
	
	});
	//password update
	jQuery("#btn_changepass").click(function(){
	var str=jQuery("#change_pass").serialize();
		//alert(str);
		
		jQuery.ajax({
				type:'POST',
				url:CI_ROOT+'user/user_password_action',
				data:str,
				success:function(result)
				{
					if(result==1)
					{
						jQuery("#error_span").html("<h4 class='widgettitle title-success'>Congratulations! user password reset successfully.</h4>");
							var redirect_page=CI_ROOT+'user/view_user';
							var sec=1;
							setInterval(function(){
								if(sec==2)
								{
									window.location.href=redirect_page;
								}
								sec++;
							},200); 
					}
					else
					{
					jQuery("#error_span").html(result);
					}
				}
		});
	
	});
	//user delete
	jQuery(".deluser").click(function(){
		var userId=jQuery(this).attr('id');
		//alert(userId);
            var conf = confirm('Are you sure want to delete?');
	    if(conf)
		var deluserID=userId.split("-");
		var field='user_id';
		var table='junk_user';
		var str="id="+deluserID[1]+"&field="+field+"&table="+table;
		//alert(str);
		//alert(CI_ROOT);
		jQuery.ajax({
					type:'POST',
					url:CI_ROOT+"master/delete_record",
					data:str,
					success:function(ans)
					{
						//alert(ans);
						location.reload();
					}
					
		
		});
	});	

	//Subject add
	jQuery("#btn_subadd").click(function(){
	var str=jQuery("#sub_registration").serialize();
		// alert(str);
		
		jQuery.ajax({
				type:'POST',
				url:CI_ROOT+'master/add_subject',
				data:str,
				success:function(result)
				{
					// alert(result);
					if(result==1)
					{
						jQuery("#error_span").html("<h4 class='widgettitle title-success'>Congratulations! subject added successfully.</h4>");
							var redirect_page=CI_ROOT+'master/view_subject';
							var sec=1;
							setInterval(function(){
								if(sec==2)
								{
									window.location.href=redirect_page;
								}
								sec++;
							},200); 
					}
					else
					{
					jQuery("#error_span").html(result);
					}
				}
		});
	
	});
	
	//Edit Subject
	jQuery("#btn_subupdate").click(function(){
	var str=jQuery("#edit_subject").serialize();
		//alert(str);
		
		jQuery.ajax({
				type:'POST',
				url:CI_ROOT+'master/edit_subject_action',
				data:str,
				success:function(result)
				{
					if(result==1)
					{
						jQuery("#error_span").html("<h4 class='widgettitle title-success'>Congratulations! subject update successfully.</h4>");
							var redirect_page=CI_ROOT+'master/view_subject';
							var sec=1;
							setInterval(function(){
								if(sec==2)
								{
									window.location.href=redirect_page;
								}
								sec++;
							},200); 
					}
					else
					{
					jQuery("#error_span").html(result);
					}
				}
		});
	
	});
	
	//Subject delete
	jQuery(".delsub").click(function(){
		var userId=jQuery(this).attr('id');
		//alert(userId);
            var conf = confirm('Are you sure want to delete?');
	    if(conf)
		var deluserID=userId.split("-");
		var field='subject_id';
		var table='subject';
		var str="id="+deluserID[1]+"&field="+field+"&table="+table;
		jQuery.ajax({
					type:'POST',
					url:CI_ROOT+"master/delete_record",
					data:str,
					success:function(ans)
					{
						//alert(ans);
						location.reload();
					}
					
		
		});
	});


	
	/****************************Mona code**************************/
	//New student
	jQuery("#btn_stuadd").click(function(){
	var str=jQuery("#stu_registration").serialize();
		//alert(str);
		
		jQuery.ajax({
				type:'POST',
				url:CI_ROOT+'master/add_student',
				data:str,
				success:function(result)
				{
					if(result==1)
					{
						jQuery("#error_span").html("<h4 class='widgettitle title-success'>Congratulations! student created successfully.</h4>");
							var redirect_page=CI_ROOT+'master/view_student';
							var sec=1;
							setInterval(function(){
								if(sec==2)
								{
									window.location.href=redirect_page;
								}
								sec++;
							},200); 
					}
					else
					{
					jQuery("#error_span").html(result);
					}
				}
		});
	
	});
	//Student delete
	jQuery(".delstu").click(function(){
		var userId=jQuery(this).attr('id');
		//alert(userId);
            var conf = confirm('Are you sure want to delete?');
	    if(conf)
		var deluserID=userId.split("-");
		var field='stu_id';
		var table='student';
		var str="id="+deluserID[1]+"&field="+field+"&table="+table;
		jQuery.ajax({
					type:'POST',
					url:CI_ROOT+"master/delete_record",
					data:str,
					success:function(ans)
					{
						//alert(ans);
						location.reload();
					}
					
		
		});
	});
	//Edit student
	jQuery("#btn_stuupdate").click(function(){
	var str=jQuery("#edit_student").serialize();
		//alert(str);
		
		jQuery.ajax({
				type:'POST',
				url:CI_ROOT+'master/edit_student_action',
				data:str,
				success:function(result)
				{
					if(result==1)
					{
						jQuery("#error_span").html("<h4 class='widgettitle title-success'>Congratulations! student updated successfully.</h4>");
							var redirect_page=CI_ROOT+'master/view_student';
							var sec=1;
							setInterval(function(){
								if(sec==2)
								{
									window.location.href=redirect_page;
								}
								sec++;
							},200); 
					}
					else
					{
					jQuery("#error_span").html(result);
					}
				}
		});
	
	});
	//Stream delete
	jQuery(".delstream").click(function(){
		var userId=jQuery(this).attr('id');
		//alert(userId);
            var conf = confirm('Are you sure want to delete?');
	    if(conf)
		var deluserID=userId.split("-");
		var field='stream_id';
		var table='stream';
		var str="id="+deluserID[1]+"&field="+field+"&table="+table;
		jQuery.ajax({
					type:'POST',
					url:CI_ROOT+"master/delete_record",
					data:str,
					success:function(ans)
					{
						//alert(ans);
						location.reload();
					}
					
		
		});
	});
	//New stream
	jQuery("#btn_streamadd").click(function(){
	var str=jQuery("#stream_registration").serialize();
		//alert(str);
		
		jQuery.ajax({
				type:'POST',
				url:CI_ROOT+'master/add_stream',
				data:str,
				success:function(result)
				{
					if(result==1)
					{
						jQuery("#error_span").html("<h4 class='widgettitle title-success'>Congratulations! stream created successfully.</h4>");
							var redirect_page=CI_ROOT+'master/view_stream';
							var sec=1;
							setInterval(function(){
								if(sec==2)
								{
									window.location.href=redirect_page;
								}
								sec++;
							},200); 
					}
					else
					{
					jQuery("#error_span").html(result);
					}
				}
		});
	
	});
	//Edit stream
	jQuery("#btn_streamupdate").click(function(){
	var str=jQuery("#edit_stream").serialize();
		//alert(str);
		
		jQuery.ajax({
				type:'POST',
				url:CI_ROOT+'master/edit_stream_action',
				data:str,
				success:function(result)
				{
					if(result==1)
					{
						jQuery("#error_span").html("<h4 class='widgettitle title-success'>Congratulations! stream updated successfully.</h4>");
							var redirect_page=CI_ROOT+'master/view_stream';
							var sec=1;
							setInterval(function(){
								if(sec==2)
								{
									window.location.href=redirect_page;
								}
								sec++;
							},200); 
					}
					else
					{
					jQuery("#error_span").html(result);
					}
				}
		});
	
	});

	//Topic add
	
	jQuery("#btn_topicadd").click(function(){
	var str=jQuery("#topic_registration").serialize();
		//alert(str);
		
		jQuery.ajax({
				type:'POST',
				url:CI_ROOT+'master/add_topic',
				data:str,
				success:function(result)
				{
					if(result==1)
					{
						jQuery("#error_span").html("<h4 class='widgettitle title-success'>Congratulations! Topic added successfully.</h4>");
							var redirect_page=CI_ROOT+'master/view_topic';
							var sec=1;
							setInterval(function(){
								if(sec==2)
								{
									window.location.href=redirect_page;
								}
								sec++;
							},200); 
					}
					else
					{
					jQuery("#error_span").html(result);
					}
				}
		});
	
	});
	
	//Edit Topic
	jQuery("#btn_topicupdate").click(function(){
	var str=jQuery("#edit_topic").serialize();
		//alert(str);
		
		jQuery.ajax({
				type:'POST',
				url:CI_ROOT+'master/edit_topic_action',
				data:str,
				success:function(result)
				{
					if(result==1)
					{
						jQuery("#error_span").html("<h4 class='widgettitle title-success'>Congratulations! topic updated successfully.</h4>");
							var redirect_page=CI_ROOT+'master/view_topic';
							var sec=1;
							setInterval(function(){
								if(sec==2)
								{
									window.location.href=redirect_page;
								}
								sec++;
							},200); 
					}
					else
					{
					jQuery("#error_span").html(result);
					}
				}
		});
	
	});
	
	//Topic delete
	jQuery(".deltopic").click(function(){
		var userId=jQuery(this).attr('id');
		//alert(userId);
            var conf = confirm('Are you sure want to delete?');
	    if(conf)
		var deluserID=userId.split("-");
		var field='topic_id';
		var table='topic';
		var str="id="+deluserID[1]+"&field="+field+"&table="+table;
		jQuery.ajax({
					type:'POST',
					url:CI_ROOT+"master/delete_record",
					data:str,
					success:function(ans)
					{
						//alert(ans);
						location.reload();
					}
					
		
		});
	});
	
});
//radio button div
	function showtext(){
  document.getElementById('text').style.display = 'block';
  document.getElementById('image').style.display = 'none';
}
function showimage(){
  document.getElementById('image').style.display = 'block';
  document.getElementById('text').style.display = 'none';
}

function showtextoption(){
  document.getElementById('textoption').style.display = 'block';
  document.getElementById('imageoption').style.display = 'none';
}
function showimageoption(){
  document.getElementById('imageoption').style.display = 'block';
  document.getElementById('textoption').style.display = 'none';
}

function ishowtextoption(){
	document.getElementById('itextoption').style.display = 'block';
	document.getElementById('iimageoption').style.display = 'none';

} 
function ishowimageoption()
{ document.getElementById('iimageoption').style.display ='block'; 
document.getElementById('itextoption').style.display = 'none'; }
