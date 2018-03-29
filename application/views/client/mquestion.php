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
         <form name="myName" method="post" action="<?php echo base_url()?>client/welcome/msubmitque">
            
                <h6><b><?php echo $countque;?>]</b><br><br> <?php echo($question[0]['que_question']);
                ?></h6><br>
                  <input type='hidden' value="<?php echo($question[0]['que_id']);?>" name='que_id'>

               
                  <input type="radio" name="option_option" value="1"><b><?php echo($question[0]['option_option1']);if(!empty($question[0]['option_img1'])){echo '<img src="'.base_url().$question[0]['option_img1'].'" width="100" height="100" class="img-thumbnail" /><br>';}
                  ?></b><br>
                <input type="radio" name="option_option" value="2"><b><?php echo($question[0]['option_option2']);if(!empty($question[0]['option_img2'])){echo '<img src="'.base_url().$question[0]['option_img2'].'" width="100" height="100" class="img-thumbnail" /><br>';}?></b><br>
                <input type="radio" name="option_option" value="3"><b><?php echo($question[0]['option_option3']);if(!empty($question[0]['option_img3'])){echo '<img src="'.base_url().$question[0]['option_img3'].'" width="100" height="100" class="img-thumbnail" /><br>';}?></b><br>
                <input type="radio" name="option_option" value="4"><b><?php echo($question[0]['option_option4']);if(!empty($question[0]['option_img4'])){echo '<img src="'.base_url().$question[0]['option_img4'].'" width="100" height="100" class="img-thumbnail" /><br>';}?></b><br>
              <!--<button class="btn btn-primary">SKIP QUESTION</button>-->
              <button class="btn btn-success">SUBMIT</button>  
          </form>
          

      </div>
  </div>

<?php
require_once 'footer.php';

?>
