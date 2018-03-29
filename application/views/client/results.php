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
  			
            
                <h6><b>Your Result</h6><br>
                 
                  <b>Total Question of answer you resloved :- </b><?php echo $TotalQue;?><br>
                  <p class="text-success"><b>Right Answer :- </b><?php echo $RightAns;?><br>
                  <p class="text-danger">Wrong Answer :-<?php echo $WrongAns;?></p>
                           
                            
                            </p>
                       
              

  		</div>
	</div>

<?php
require_once 'footer.php';

?>
