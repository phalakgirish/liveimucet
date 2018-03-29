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

  <div class="col-md-12" id="time">
    <div class="col-md-10">
      <p class="text-center" id="txt"><time><b></b></time></p>
    </div>
    <div class="col-md-1">
    <button class="pull-right"><i class="fas fa-pause"></i></button>
    </div>
  </div>
  <div class="container">
      <div class="que">
        <?php 
        if($nextque=='0')
         {
          ?>
           <form name="myName" method="post" action="<?php echo base_url()?>client/welcome/get_result/">

          <?php
         } 
         else
         {
          ?>
          <form name="myName" method="post" action="<?php echo base_url()?>client/welcome/get_nextquestion/<?php echo $nextque?>">
            <?php

         }
        ?>
        
          
                <h6><b><?php echo $countque;?>]</b><br><br> <?php echo($question[0]['que_question']);
                ?></h6><br>
                  <input type='hidden' value="<?php echo($question[0]['que_id']);?>" name='que_id'>
               
                          <input type="radio" name="option_option" readonly="readonly" <?php if($appear_ans==1){ ?> checked=checked<?php }?> value="1"><b><?php echo($question[0]['option_option1']);if(!empty($question[0]['option_img1'])){echo '<img src="'.base_url().$question[0]['option_img1'].'" width="100" height="100" class="img-thumbnail" /><br>';}?></b><br>

                          <input type="radio" name="option_option" readonly="readonly" <?php if($appear_ans==2){ ?> checked=checked<?php }?> value="2"><b><?php echo($question[0]['option_option2']);if(!empty($question[0]['option_img2'])){echo '<img src="'.base_url().$question[0]['option_img2'].'" width="100" height="100" class="img-thumbnail" /><br>';}?></b><br>

                          <input type="radio" name="option_option" readonly="readonly" <?php if($appear_ans==3){ ?> checked=checked<?php }?> value="3"><b><?php echo($question[0]['option_option3']);if(!empty($question[0]['option_img3'])){echo '<img src="'.base_url().$question[0]['option_img3'].'" width="100" height="100" class="img-thumbnail" /><br>';}?></b><br>

                          <input type="radio" name="option_option" readonly="readonly" <?php if($appear_ans==4){ ?> checked=checked<?php }?> value="4"><b><?php echo($question[0]['option_option4']);if(!empty($question[0]['option_img4'])){echo '<img src="'.base_url().$question[0]['option_img4'].'" width="100" height="100" class="img-thumbnail" /><br>';}?></b><br>
                          
                            
                          <?php
                          $video=$question[0]['que_video'];
                          if($appear_ans==1)
                          {

                            ?>
                            <p class="text-danger"><?php echo $showmsg;?></p>
                            <p class="text-success"><b>Solution</b><br>
                            <?php
                            echo $solution;if(!empty($question[0]['image_file_solution'])){echo '<img src="'.base_url().$question[0]['image_file_solution'].'" width="100" height="100" class="img-thumbnail" /><br>';}
                            ?>
                            
                            <iframe width='420' height='315' src="<?php $video;?>"></iframe><br/></p>
                            <?php
                          }
                          ?>

                          <?php
                          if($appear_ans==2)
                          {

                            ?>
                            <p class="text-danger"><?php echo $showmsg;?></p>
                            <p class="text-success"><b>Solution</b><br>
                            <?php
                            echo $solution;if(!empty($question[0]['image_file_solution'])){echo '<img src="'.base_url().$question[0]['image_file_solution'].'" width="100" height="100" class="img-thumbnail" /><br>';}?>
                            <iframe width='420' height='315' src="<?php echo $video;?>"></iframe><br/></p>
                            <?php
                          }
                          ?>

                          <?php
                          if($appear_ans==3)
                          {

                            ?>
                            <p class="text-danger"><?php echo $showmsg;?></p>
                            <p class="text-success"><b>Solution</b><br>
                            <?php
                            echo $solution;if(!empty($question[0]['image_file_solution'])){echo '<img src="'.base_url().$question[0]['image_file_solution'].'" width="100" height="100" class="img-thumbnail" /><br>';}?>
                            <iframe width='420' height='315' src="<?php echo $video;?>"></iframe><br/></p>
                            <?php
                          }
                          ?>

                          <?php
                          if($appear_ans==4)
                          {

                            ?>
                            <p class="text-danger"><?php echo $showmsg;?></p>
                            <p class="text-success"><b>Solution</b><br>
                            <?php
                            echo $solution;if(!empty($question[0]['image_file_solution'])){echo '<img src="'.base_url().$question[0]['image_file_solution'].'" width="100" height="100" class="img-thumbnail" /><br>';}?>
                            <iframe width='420' height='315' src="<?php echo $video;?>"></iframe><br/></p>
                            <?php
                          }
                          ?>
                            
                            
                            
                        <?php
                        # code...

                      //}
                
                if($nextque=='0')
                 {
                  ?>
                    <button class="btn btn-success">GET RESULT</button>  
                  <?php
                 } 
                 else
                 {
                  ?>
                    <!--<button class="btn btn-primary">SKIP QUESTION</button>-->
                    <button class="btn btn-success">NEXT</button>  
                  <?php
                 } 
                ?>
              
          </form>
          

      </div>
  </div>

<?php
require_once 'footer.php';

?>
