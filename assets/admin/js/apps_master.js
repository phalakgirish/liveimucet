
  jQuery(document).ready(function(){
	 jQuery("#state_countryid").change(function(){
		 
		var country_id=jQuery(this).val();
		var data='country_id='+country_id;
		jQuery.ajax({
					type:'POST',
					url:CI_ROOT+"master/get_state_list",
					data:data,
					success:function(ans)
					{
						jQuery(".statelist").html(ans);
						jQuery(".s_country").html('');
					}
		});
		
	 });
	 /*get city list*/
	 $(document).on('change', '#state_list', function() {
		 
		var state_id=jQuery(this).val();
		 
		var data='state_id='+state_id;
		jQuery.ajax({
					type:'POST',
					url:CI_ROOT+"master/get_city_list",
					data:data,
					success:function(ans)
					{
						
						jQuery(".citylist").html(ans);
					}
		});
});
	 /*get area list*/
	 $(document).on('change', '#client_cityid', function() {
		var state_id=jQuery(this).val();
		 
		var data='city_id='+state_id;
		jQuery.ajax({
					type:'POST',
					url:CI_ROOT+"master/get_area_list",
					data:data,
					success:function(ans)
					{
						
						jQuery(".arealist").html(ans);
					}
		});
			jQuery.ajax({
					type:'POST',
					url:CI_ROOT+"master/get_pincode_list",
					data:data,
					success:function(ans)
					{
						
						jQuery(".pincodelist").html(ans);
					}
		});
});
/*get area list*/
	 $(document).on('change', '#client_area', function() {
 var state_id=jQuery(this).val();
		 
		var data='area_id='+state_id;
		jQuery.ajax({
					type:'POST',
					url:CI_ROOT+"master/get_sales_person_list",
					data:data,
					success:function(ans)
					{
						
						jQuery(".saleslist").html(ans);
					}
		});
  
});
  });
     