<?php
@session_start();
$uid=$this->session->userdata['register_id'];
//$user_id=$this->myclass->get_session_record(0);
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>IMUCET</title>
		<link rel="stylesheet" type="text/css" href="<?php echo base_url()?>assets/client/css/toppr.css">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootswatch/3.3.7/paper/bootstrap.min.css" />
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
		<link rel="stylesheet" href="<?php echo base_url()?>assets/client/css/navbar-fixed-left.css">
		<!-- Custom CSS -->
    	<link href="<?php echo base_url().'assets/client/'?>css/font.css" rel="stylesheet">
    	<link href="<?php echo base_url().'assets/client/'?>css/common.css" rel="stylesheet">


		<script type="text/javascript" src="<?php echo base_url()?>assets/client/js/login.js"></script>
		<script defer src="https://use.fontawesome.com/releases/v5.0.6/js/all.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/js/bootstrap.min.js"></script>
	</head>
	<body onload="startTime()">
			<nav class="navbar navbar-fixed-left">
			<div class="container ">
				<div class="navbar-header logo_head">
					<a class="navbar-brand" href="toppr.php"><span><img src="<?php echo base_url()?>assets/client/img/logo.png" class="img-responsive"></span></a>
				</div>
				<div id="navbar" class="navbar-collapse collapse nav_menu">
					<ul class="nav navbar-nav">
						<!--<li class="dropdown">
								<a href="#" class="dropdown-toggle" data-toggle="dropdown"
									role="button" aria-haspopup="true" aria-expanded="false">Class 12+ <span class="caret"></span>
								</a>
								<ul class="dropdown-menu">
										<li><a href="#">Edit Profile</a></li>
										<li><a href="#">Change Class</a></li>
										<li><a href="#">Change Password</a></li>
								</ul>
						</li>
						<li><a href="#"><i class="fab fa-first-order"></i> Physics</a></li>
						<li><a href="#"><i class="fas fa-flask"></i> Chemistry</a></li>
						<li><a href="#"><i class="fas fa-calculator"></i> Maths</a></li> -->
						<li><a href="<?php echo base_url()?>client/welcome/studymode"><i class="fas fa-book"></i> Study Mode</a></li>
						
						<li><a href="<?php echo base_url()?>client/welcome/mock"><i class="fas fa-glass-martini"></i> Mock Test</a>
					</li>
					<!--<li><a href="#"><i class="far fa-comments"></i> Doubts</a></li>
					<li><a href="#"><i class="fas fa-bookmark"></i> Bookmarks</a></li>-->
					<li><a href="#"><i class="fas fa-user"></i> Profile</a></li>
				</ul>
			</div>
		</div>
	</nav>
	<nav class="navbar navbar-inverse" id="afterlogin">
		<div class="container-fluid">
			<ul class="nav navbar-nav pull-right">
				
				<?php
				if(isset($uid))
				{
				//require_once 'header.php';
				?>
				<li><a href="<?php echo base_url()?>client/welcome/do_logout" class="page-scroll">LOGOUT</a></li>
				
				<?php
				}
				else
				{
				?>
				<li><a href="<?php echo base_url()?>client/welcome/login" class="page-scroll">LOGIN</a></li>
				<?php
				}
				?>
				
				<li><a href="<?php echo base_url()?>client/welcome/index">HOME</a></li>
				<li><a href="<?php echo base_url()?>client/welcome/about">WHAT IS IMU-CET ?</a></li>
				<li><a href="<?php echo base_url()?>client/welcome/view_merchant">WHAT IS MERCHANT NAVY ?</a></li>
				<li><a href="<?php echo base_url()?>client/welcome/view_help">HOW DO WE HELP YOU ?</a></li>
				<li><a href="<?php echo base_url()?>client/welcome/pricing">PLANS AND PRICING</a></li>
				<li><a href="<?php echo base_url()?>client/welcome/view_contact">CONTACT US</a></li>
				<!--<li><a href="#VISION-section" class="page-scroll">OUR VISION</a></li>-->
				<!-- <li><a href="<?php echo base_url()?>client/welcome/#contact-section" class="page-scroll">CONTACT</a></li> -->
			</ul>
		</div>
	</nav>