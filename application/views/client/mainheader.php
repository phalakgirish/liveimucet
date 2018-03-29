<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>IMUCET - GUIDE</title>
    
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootswatch/3.3.7/paper/bootstrap.min.css" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />

    <!-- Custom CSS -->
    <link href="<?php echo base_url().'assets/client/'?>css/font.css" rel="stylesheet">
    <link href="<?php echo base_url().'assets/client/'?>css/common.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="<?php echo base_url().'assets/client/'?>font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="<?php echo base_url().'assets/client/'?>css/pratik.css" rel="stylesheet">

<script>
 var CI_ROOT="<?php base_url();?>";
</script>
</head>

<body>

    <!-- Navigation -->
    <div class="top-header">
        <div class="container">
            <div class="pull-right col-md-12">
                <div class="login-bg">
                    <ul class="reg">
                    <?php
                    if($this->session->userdata('register_id')==""):
                    ?>              
                        <li><a href="<?php echo base_url()?>client/welcome/login"><i class="fas fa-sign-in-alt"></i> LOGIN</a></li>
                        <li><a href="<?php echo base_url()?>client/welcome/login"><i class="far fa-edit"></i>REGISTER</a></li>
                        <!-- <li><a href="<?php //secho base_url()?>master/view_register"><span class="top-icon register-icon">Register</span></a></li> -->
                        <?php
                    endif;
                    ?>
                    <?php
                    if($this->session->userdata('register_id')!=""):
                    ?>
                    <li>Welcome <?php echo $this->session->userdata('register_name')?></li>
                    <li><a href="<?php echo base_url()?>client/welcome/do_logout"><i class="fas fa-sign-out-alt"></i> LOGOUT</a></li>

                    <li><a href="<?php echo base_url()?>client/welcome/dashboard"><i class="far fa-edit"></i>DASHBOARD</a></li>
                    <?php
                    endif;
                    ?> 
                    
                    </ul>
                </div>
            </div>
        </div>
    </div>
    
    <div class="logo-section">
        <div class="container">
            <div class="col-md-2 logo"  >
                <a href="<?php echo base_url()?>client/welcome/index"><img src="<?php echo base_url().'assets/client/'?>images/logo.png" class="img-responsive" /></a>
            </div>
            <div class="col-md-10" > 
                <div class="social-icon pull-right">
                    <ul class="">   
                        <li><a href="#"><img src="<?php echo base_url().'assets/client/'?>images/facebook.png" /></a></li>
                        <li><a href="#"><img src="<?php echo base_url().'assets/client/'?>images/twitter.png" /></a></li>
                        <li><a href="#"><img src="<?php echo base_url().'assets/client/'?>images/youtube.png" /></a></li>
                        <li><a href="#"><img src="<?php echo base_url().'assets/client/'?>images/linkedin.png" /></a></li>
                    
                    </ul>
                </div>
                <div class="clearfix"></div>
                <div class="animated-text ">
                     <p>Your Gateway To Enter Merchant Navy </p>
                </div>
            </div>
        </div>
    </div>
    
    <nav class="navbar navbar-inverse" role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
               
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li>
                        <a href="<?php echo base_url()?>client/welcome/index" class="act">HOME</a>
                    </li>
                    <li>
                        <a href="<?php echo base_url()?>client/welcome/about">WHAT IS IMU-CET ?</a>
                    </li>
                    <li>
                        <a href="<?php echo base_url()?>client/welcome/view_merchant">WHAT IS MERCHANT NAVY ?</a>
                    </li>
                     <li>
                        <a href="<?php echo base_url()?>client/welcome/view_help">HOW DO WE HELP YOU ?</a>
                    </li>
                    <li>
                        <a href="<?php echo base_url()?>client/welcome/pricing">PLANS AND PRICING</a>       
                    </li>
                  
                    <!-- <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">MERCHANT NAVY <b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li>
                                <a href="<?php echo base_url()?>client/welcome/view_merchant">MERCHANT NAVY</a>
                            </li>
                            <li>
                                <a href="<?php echo base_url()?>client/welcome/view_typeofship">TYPE OF SHIP</a>
                            </li>
                            <li>
                                <a href="<?php echo base_url()?>client/welcome/view_organization">ORGANIZATIONAL STRUCTURE</a>
                            </li>
                            <li>
                                <a href="<?php echo base_url()?>client/welcome/view_faq">FAQ</a>
                            </li>
                        </ul>
                    </li> -->                   
                 <!--    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">IMU<b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li>
                                <a href="<?php echo base_url()?>client/welcome/view_imu">ABOUT IMU</a>
                            </li>
                            <li>
                                <a href="<?php echo base_url()?>client/welcome/view_programm">PROGRAMMES</a>
                            </li>
                            <li>
                                <a href="<?php echo base_url()?>client/welcome/view_eligibility">ELIGIBILITY CRITERIA</a>
                            </li>
                            <li>
                                <a href="<?php echo base_url()?>client/welcome/view_syllabus">SYLLABUS</a>
                            </li>
                            <li>
                                <a href="<?php echo base_url()?>client/welcome/view_courses">COURSES</a>
                            </li>
                        </ul>
                    </li> -->                  
                   
                    <li>
                        <a href="<?php echo base_url()?>client/welcome/view_contact">CONTACT US</a>
                    </li> 
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>