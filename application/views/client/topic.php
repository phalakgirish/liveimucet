<?php
require_once 'header.php';
?>
<div class="container" id="phy">
	<div class="row">
		<div class="col-md-12 tittle">
			<!-- <img src="phy1.png" class="img-responsive"> -->
			<?php
			
	//print_r($total);
	//echo "<pre>";
			?>
			<h2>
				<?php 
				if($topic=='No')
                {
                    echo 'No Topic Found';
                    exit;
                }
                else
                {
					$uid=$this->session->userdata['register_id'];
	$subid=$topic[0]['subject_id'];
	$que_data=$this->myclass->select("appear_id,appear_stuid,appear_queid,que_id,que_topic,topic_id,topic_subject","test_appear,question,topic","appear_stuid=$uid AND appear_queid=que_id AND que_topic=topic_id AND topic_subject=$subid");
	$total=count($que_data);
	if($que_data == 'no')
				{$total=0;}
			else{$total=count($que_data);}
					echo $topic[0]['subject_name'];
				} 
				?>
				
				</h2>
			
			<div class="progress">
				<div class="progress-bar progress-bar-info progress-bar-striped active"
					style="width:<?php echo $total;?>%;">
				</div>
				<div class="progress-value"><?php echo $total;?>%</div>
			</div>
			
		</div>
	</div>
	<div class="row Practice">
		<h3>Select Topic</h3>
		<?php 
		
		$i=1;
		foreach($topic as $topicname)
		{
			$topicid=$topicname['topic_id'];
			$topic_data=$this->myclass->select("appear_stuid,appear_queid,que_id,que_topic,topic_id,topic_subject","test_appear,question,topic","appear_stuid=$uid AND appear_queid=que_id AND que_topic=topic_id AND topic_id=$topicid");
			//echo "<pre>";
			//print_r($topic_data);
			if($topic_data == 'no')
				{$totalt=0;}
			else{$totalt=count($topic_data);}
			
		?>	
		<div class="col-md-12 phy_chap">
			<h5>
			<a href="<?php echo base_url()?>client/welcome/test/<?php echo $topicname['topic_id'];?>">
				<span><?php echo $i;?></span> <?php echo $topicname['topic_name']; ?>
				<!-- <p><small><span>614 videos  51 Goals</span></small></p> -->
			</a>
			</h5>
			<div class="progress">
				<div class="progress-bar progress-bar-info progress-bar-striped active"
					style="width:<?php echo $totalt;?>%;">
				</div>
				<div class="progress-value"><?php echo $totalt;?>%</div>
			</div>
			<p><small><span>1 / 5 Goals Completed</span></small></p>
		</div>
		<?php
		$i++;
		}
		?>
	</div>
	<!--
	<div class="row Practice">
		<div class="col-md-12 phy_chap">
			<h5>
			<a href="surface.php">
				<span>01</span> Circular Motion
				<!-- <p><small><span>614 videos  51 Goals</span></small></p> 
			</a>
			</h5>
			<div class="progress">
				<div class="progress-bar progress-bar-info progress-bar-striped active"
					style="width:80%;">
				</div>
				<div class="progress-value">80%</div>
			</div>
			<p><small><span>1 / 5 Goals Completed</span></small></p>
		</div>
		<div class="col-md-12 phy_chap">
			<h5>
			<a href="surface.php">
				<span>02</span> Gravitation
				<!-- <p><small><span>614 videos  51 Goals</span></small></p>
			</a>
			</h5>
			<div class="progress">
				<div class="progress-bar progress-bar-info progress-bar-striped active"
					style="width:80%;">
				</div>
				<div class="progress-value">80%</div>
			</div>
			<p><small><span>1 / 5 Goals Completed</span></small></p>
		</div>
		<div class="col-md-12 phy_chap">
			<h5>
			<a href="surface.php">
				<span>03</span> Rottational Motion
				<!-- <p><small><span>614 videos  51 Goals</span></small></p> 
			</a>
			</h5>
			<div class="progress">
				<div class="progress-bar progress-bar-info progress-bar-striped active"
					style="width:80%;">
				</div>
				<div class="progress-value">80%</div>
			</div>
			<p><small><span>1 / 5 Goals Completed</span></small></p>
		</div>
		<div class="col-md-12 phy_chap">
			<h5>
			<a href="surface.php">
				<span>04</span> Oscillations
				<!-- <p><small><span>614 videos  51 Goals</span></small></p> 
			</a>
			</h5>
			<div class="progress">
				<div class="progress-bar progress-bar-info progress-bar-striped active"
					style="width:80%;">
				</div>
				<div class="progress-value">80%</div>
			</div>
			<p><small><span>1 / 5 Goals Completed</span></small></p>
		</div>
		<div class="col-md-12 phy_chap">
			<h5>
			<a href="physics.php">
				<span>05</span> Elasticity
				<!-- <p><small><span>614 videos  51 Goals</span></small></p> 
			</a>
			</h5>
			<div class="progress">
				<div class="progress-bar progress-bar-info progress-bar-striped active"
					style="width:80%;">
				</div>
				<div class="progress-value">80%</div>
			</div>
			<p><small><span>1 / 5 Goals Completed</span></small></p>
		</div>-->
		
	</div>
</div>
<?php
require_once 'footer.php';
?>