<!DOCTYPE html>
<html>

<!-- Mirrored from themepixels.com/main/themes/demo/webpage/shamcey/forms.html by HTTrack Website Copier/3.x [XR&CO'2013], Sat, 24 Aug 2013 11:37:47 GMT -->
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<title>IMUCET</title>

<link rel="stylesheet" href="<?php echo base_url()?>/assets/admin/css/style.default.css" type="text/css" />
<script type="text/javascript" src="<?php echo base_url()?>/assets/admin/js/jquery-1.9.1.min.js"></script>
<script>
 var CI_ROOT="<?=base_url();?>";
</script>
</head>
<body class="loginpage">

<div class="regpanel">
    <div class="regpanelinner">
	<center><img src="" alt="" /></center>
       
        <div class="regcontent">
        
            
            
            <form action="<?php echo base_url()?>user/login" method="post" class="stdform">
                
                <center><h3 class="subtitle">Login Information</h3></center>
				<div class="control-label"><?php if(isset($error_msg)){ echo $error_msg; }?><?php echo form_error("user_email"); ?></div>
				<div class="control-label"><?php echo form_error("user_pass"); ?></div>
                <p><input type="text" name="user_email" class="input-block-level" value="<?php echo set_value('user_email'); ?>" placeholder="Email" /></p>
                <p><input type="password" name="user_pass" class="input-block-level" placeholder="Password" /></p>
                
                
                
                <p><button class="btn btn-primary">Sign In</button></p>
                
            </form>
        
        </div><!--regcontent-->
    </div><!--regpanelinner-->
</div><!--regpanel-->

<div class="regfooter">
    <p>&copy; 2017  All rights reserved</p>
</div>

</body>

</html>
