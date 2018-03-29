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
<div class="container" id="phy">
  <div class="row">
    <div class="col-md-12 tittle">
      <!-- <img src="phy1.png" class="img-responsive"> -->
    
      <h2><?php if($test=='No')
                  {
                    echo 'No Test Found';
                    exit;
                  }
                  else
                   {
					  echo 'Mock Test List';   
           
                   } 
                 ?></h2>
      
    </div>
  </div>
  <div class="row Practice">
    <h3>Start Practice</h3>
    <?php 
    $i=1;
    foreach($test as $testname)
    {
      $testid=$testname['test_id'];
      $test_data=$this->myclass->select("appear_stuid,appear_queid,appear_testid,que_id,test_id","test_appear,question,test","appear_stuid=$uid AND appear_queid=que_id AND test_id=$testid AND appear_testid=$testid");
      // echo"<pre>";
      // print_r($test_data);
      if($test_data =='no')
        {$totalt=0;}
      else{$totalt=count($test_data);}
    
    ?>  
    <div class="col-md-12 phy_chap">
      <h5>
      <a href="<?php echo base_url()?>client/welcome/start_mtest/<?php echo $testname['test_id'];?>">
        <span><?php echo $i; ?></span> <?php echo $testname['test_name']; ?>
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