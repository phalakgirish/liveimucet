<?php 
$uid=$this->session->userdata['register_id'];
//$user_id=$this->myclass->get_session_record(0);
if(isset($uid))
{
	require_once 'header.php';

}
else
{
		# code...
	require_once 'before_login.php';
}	
?>

		<div class="container">
			<div class="row grad">
				<div class="col-md-12 arrow">
					<!-- <img src="arrow3.png" width="100" height="100"> -->
				</div>
			</div>
			<div class="row grad">
				<div class="col-md-12">
					<h3 class="text-center">
						Hello <?php echo $this->session->userdata['register_name'];?><br>
					</h3>
				</div>
			</div>
			<?php
				foreach ($stream as $streamlist) {
					# code...
				
			?>
			<div class="col-md-3 sub" id="sub1">
				<h5><a href="physics.php">
				<i class="fab fa-first-order"></i><br><br><?php echo $streamlist['stream_name'];?>
				<!--<p><small><span>553 videos  93 Goals</span></small></p>-->
				<p>
   				 <a href="<?php echo base_url();?>client/welcome/stream/<?php echo $streamlist['stream_id'];?>" class="btn btn-success btn-large">
      			Start Learning
    			</a>
  				</p>
				</a></h5>
			</div>
			<?php
				}
			?>
			<div class="clr"></div>

		</div>	
<?php
require_once 'footer.php';
?>

	