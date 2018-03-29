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
		
		<?php

		?>
			
			<div class="row grad">
				<div class="col-md-12">
					<h3 class="text-center">
						Hello <?php echo $this->session->userdata['register_name'];?><br>
					</h3>
				</div>
			</div>
			<?php
			foreach ($subject as $value) 
			{
				# code...
				$subid=$value['subject_id'];
		$sub_data=$this->myclass->select("topic_id,subject_id,topic_subject","topic,subject","topic_subject=subject_id AND subject_id=$subid");
		// echo "<pre>";
		// print_r($sub_data);
		
  if($sub_data == 'no')
        {$total=0;}
      else{$total=count($sub_data);}
		
?>
			
			<div class="col-md-3 sub" id="sub1">
				<h5><a href="<?php echo base_url()?>client/welcome/topic/<?php echo $value['subject_id'];?>">
				<i class="fab fa-first-order"></i><br><br><?php echo $value['subject_name'];?>
				<p><small><span><?php echo $total;?> Topics</span></small></p>
				<p>
   				 <a href="<?php echo base_url()?>client/welcome/topic/<?php echo $value['subject_id'];?>" class="btn btn-success btn-large">
      			Start Learning
    			</a>
  				</p>
				</a></h5>
			</div>
			<?php
			}
			?>

			<!-- <div class="col-md-3 sub" id="sub1">
				<h5><a href="physics.php">
				<i class="fas fa-flask"></i><br><br>CHEMISTRY
				<p><small><span>768 videos  109 Goals</span></small></p>
				<p>
   				 <a href="physics.php" class="btn btn-success btn-large">
      			Start Learning
    			</a>
  				</p>
				</a></h5>
			</div>
			<div class="col-md-3 sub" id="sub1">
				<h5><a href="physics.php">
				<i class="fas fa-calculator"></i><br><br>MATHS
				<p><small><span>614 videos  51 Goals</span></small></p>
				<p>
   				 <a href="physics.php" class="btn btn-success btn-large">
      			Start Learning
    			</a>
  				</p>
				</a></h5>
			</div> -->
			<div class="clr"></div>

		</div>	
<?php
require_once 'footer.php';
?>

	