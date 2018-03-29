<?php
$check_user=$this->myclass->chk_session();
if($check_user !=1)
{
	redirect(base_url()."welcome");
}
else
{
	$username=$this->myclass->get_session_record(1);
	$email=$this->myclass->get_session_record(2);
	$area=$this->myclass->get_session_record(3);
	$user_type=$this->session->userdata('user_typeid');
	}	
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<title>IMU</title>
<link rel="stylesheet" href="<?php echo base_url()?>assets/admin/css/style.default.css" type="text/css" />

<link rel="stylesheet" href="<?php echo base_url()?>assets/admin/css/responsive-tables.css">
<script type="text/javascript" src="<?php echo base_url()?>assets/admin/js/jquery-1.9.1.min.js"></script>
<script type="text/javascript" src="<?php echo base_url()?>assets/admin/js/jquery-migrate-1.1.1.min.js"></script>
<script type="text/javascript" src="<?php echo base_url()?>assets/admin/js/jquery-ui-1.10.3.min.js"></script>
<script type="text/javascript" src="<?php echo base_url()?>assets/admin/js/bootstrap.min.js"></script>
<script type="text/javascript" src="<?php echo base_url()?>assets/admin/js/jquery.uniform.min.js"></script>
<script type="text/javascript" src="<?php echo base_url()?>assets/admin/js/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="<?php echo base_url()?>assets/admin/js/jquery.cookie.js"></script>
<script type="text/javascript" src="<?php echo base_url()?>assets/admin/js/modernizr.min.js"></script>
<script type="text/javascript" src="<?php echo base_url()?>assets/admin/js/responsive-tables.js"></script>
<script type="text/javascript" src="<?php echo base_url()?>assets/admin/js/jquery.slimscroll.js"></script>
<script type="text/javascript" src="<?php echo base_url()?>assets/admin/js/custom.js"></script>
<script>
 var CI_ROOT="<?=base_url();?>";
</script>
</head>
<body>
<div id="mainwrapper" class="mainwrapper">
    
    <div class="header">
        <div class="logo">
            <a href="<?php echo base_url()?>welcome/dashboard"><img src="" alt="" /></a>
        </div>
        <div class="headerinner">
            <ul class="headmenu">
                <li class="right">
                    <div class="userloggedinfo">
                        <div class="userinfo">
                            <h5><?php echo $username;?> <small>- <?php echo $email; ?></small></h5>
                            <ul>
                                <li><a href="<?php echo base_url();?>user/profile_edit">Edit Profile</a></li>
                                <li><a href="<?php echo base_url();?>user/do_logout">Logout</a></li>
                            </ul>
                        </div>
                    </div>
                </li>
            </ul><!--headmenu-->
        </div>
    </div>
    
    <div class="leftpanel">
        <div class="leftmenu">        
            <ul class="nav nav-tabs nav-stacked">
                <li class="nav-header">Navigation</li>
                <li class="active"><a href="<?php echo base_url()?>welcome/dashboard"><span class="iconfa-laptop"></span> Dashboard</a></li>
                <li><a href="<?php echo base_url()?>user/view_user/"><span class="iconfa-user"></span>User Management</a></li>
                <li><a href="<?php echo base_url()?>master/view_student"><span class="iconfa-group"></span>Student Management</a></li>
                <li><a href="<?php echo base_url()?>master/view_stream"><span class="iconfa-code-fork"></span>Stream Management</a></li>
                <li><a href="<?php echo base_url()?>master/view_subject"><span class="iconfa-book"></span>Subject Management</a></li>
                <li><a href="<?php echo base_url()?>master/view_topic"><span class="iconfa-edit"></span>Topic Management</a></li>
                <li><a href="<?php echo base_url()?>master/view_que"><span class="iconfa-pencil"></span>Question Management</a></li>
                <li><a href="<?php echo base_url()?>master/view_test"><span class="iconfa-pencil"></span>Test Management</a></li>
<li><a href="<?php echo base_url()?>master/view_moctest"><span class="iconfa-pencil"></span>Mock Test Management</a></li>



                <!--<li><a href="<?php echo base_url()?>master/view_category"><span class="iconfa-hand-up"></span>Category Management</a></li>
                
                <li><a href="visitors.html"><span class="iconfa-user"></span>Visitors Management</a></li>
                <li class="dropdown"><a href="#"><span class="iconfa-pencil"></span>University Management</a>
                    <ul>
                        <li><a href="<?php echo base_url()?>master/view_university">University</a></li>
                        <li><a href="<?php echo base_url()?>master/view_branch">Branch</a></li>
                        <li><a href="<?php echo base_url()?>master/view_semister">Semester</a></li>
                        <li><a href="<?php echo base_url()?>master/view_subject">Subject</a></li>
                        <li><a href="<?php echo base_url()?>master/view_chapter">Chapter</a></li>
                        <li><a href="registration.html">Video</a></li>
                    </ul>
                </li>-->
                <li><a href="#"><span class="iconfa-shopping-cart"></span> Order Management</a>
                   
                </li>
               
            </ul>
        </div><!--leftmenu-->
        
    </div><!-- leftpanel -->