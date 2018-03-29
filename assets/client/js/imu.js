$(window).on('load',function(){
        $('#Modal').modal('show');
    });
jQuery(document).ready(function(){
	//user registration	
	jQuery("#btn_register").click(function(){
		var str=jQuery("#user_registration").serialize();
		//alert(str);
		
		jQuery.ajax({
				type:'POST',
				url:CI_ROOT+'master/register_action',
				data:str,
				success:function(result)
				{
					if(result==1)
					{
							var redirect_page=CI_ROOT+'master/view_otp';
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

	jQuery("#btn_otp").click(function(){
		var str=jQuery("#form_otp").serialize();
		//alert(str);
		
		jQuery.ajax({
				type:'POST',
				url:CI_ROOT+'master/otp_action',
				data:str,
				success:function(result)
				{
					if(result==1)
					{
							var redirect_page=CI_ROOT+'master/view_otp';
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
	});