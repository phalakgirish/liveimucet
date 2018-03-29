<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

   public function index()
   {
      $this->load->view('client/index');
   }
   public function loginfrom()
   {
      $this->load->view('client/login');
   }
   public function dashboard()
   {
      $this->load->model('account_model_client');
      $data['stream']=$this->account_model_client->get_stream();
      $this->load->view('client/dashboard',$data);
   }
   public function stream($stream)
   {
      $this->load->model('account_model_client');
      $data['subject']=$this->account_model_client->get_subject($stream);
      $this->load->view('client/subject',$data);
   }
   public function subject_progress()
   {
      # code...
      $this->load->model('account_model_client');
      $this->account_model_client->get_student_progress();
   }
   public function topic($subject)
   {
      # code...
      $this->load->model('account_model_client');
      $ans=$this->account_model_client->get_topic($subject);

      if (empty($ans))
      {
          $data['topic']='No';
      }
      else
      {
          $data['topic']=$ans;
      } 
      
      $this->load->view('client/topic',$data);
   }
   public function test($topicid)
   {
      # code...
      $this->load->model('account_model_client');
      $session_topic_id=$this->session->set_userdata('session_topic_id',$topicid);
      $this->load->model('account_model_client');
      $ans=$this->account_model_client->get_testlist($topicid);
      if (empty($ans))
      {
          $data['test']='No';
      }
      else
      {
          $data['test']=$ans;
      } 
     
      $this->load->view('client/test',$data);
   }
   public function start_test($test_id)
      {

         # code...
         session_start();
session_regenerate_id();
$new_sessionid = session_id();
$_SESSION['new_sessionid']=session_id();
      $this->load->model('account_model_client');
         $que=$this->myclass->select("testque_queid","testque","testque_testid='$test_id' LIMIT 1");
         $que_id=$que[0]->testque_queid;
         $moctestid=$this->session->userdata('moctest_id');
         $sesssion_testid=$this->session->set_userdata('session_test_id',$test_id);
         $data=$this->account_model_client->get_question($test_id,$que_id);
         $que_id=$data[0]['que_id'];
         $options=$this->get_options($que_id);
         $nextque=$this->get_nextque($que_id,$test_id);
         if(empty($nextque))
         {
            $button='Get Result</a>';
         }     
         else
         {
            $nexquestion=$nextque[0]['testque_id'];
            $button="<a href='get_question/$nexquestion'>Next Question</a>";
         }  
         $ans['question']=$data;
         $ans['options']=$options;
         $ans['nextque']=$nextque;
         $ans['buttontype']=$button;
         $ans['countque']=1;
         $this->session->set_userdata('session_counter',$ans['countque']);
         $this->load->view('client/question',$ans);
      }

      private function get_options($que_id)
      {
         return $options=$this->account_model_client->get_options($que_id);
      }
    private function get_nextque($que_id,$moctestid)
      {
         # code...
         return $nextque=$this->account_model_client->get_nextque($que_id,$moctestid);
      }
      public function get_question($nextque)
      {
         # code...
         $this->load->model('account_model_client');
         $moctestid=$this->session->userdata('session_test_id');

         $data=$this->account_model_client->get_question($moctestid,$nextque);
         $options=$this->get_options($nextque);
         $nextque=$this->get_nextque($nextque,$moctestid);
         if(empty($nextque))
         {
            $button='Get Result</a>';
         }     
         else
         {
            $button="<a href='get_question/$nextque'>Next Question</a>";
         }  
         $ans['question']=$data;
         $ans['options']=$options;
         $ans['nextque']=$nextque;
         $ans['buttontype']=$button;
         echo "<pre>";
         print_r($ans);
      }
      public function submitque()
      {
         # code...
         $data=$this->input->post();
         $ans['appear_stuid']=$this->session->userdata('register_id');
         $ans['appear_queid']=$data['que_id'];  
         session_start();
      $ans['appear_sessionid']=$_SESSION['new_sessionid'];  
         $this->load->model('account_model_client');
         $sesssion_testid=$this->session->userdata('session_test_id');
         
         $fdata=$this->account_model_client->get_question_data($data['que_id']);
      $fans=$this->account_model_client->get_right_options($data['que_id']);

         if(($fans[0]['option_right'])==($data['option_option']))
         {
            $ans['appear_ans']='Right';
            $ans['appear_option']=$data['option_option'];
            $ans['appear_testid']=$sesssion_testid;
            $this->account_model_client->do_insert('test_appear',$ans);
            $ans['showmsg']='Congratulations your answer is correct.';
            $ans['solution']=$fdata[0]['que_solution'];
            $ans['video']=$fdata[0]['que_video'];
            
         }  
         else
         {
            $ans['appear_ans']='Wrong';
            $ans['appear_option']=$data['option_option'];
            $ans['appear_testid']=$sesssion_testid;
            $this->account_model_client->do_insert('test_appear',$ans);
            $ans['showmsg']='Sorry wrong answer';
            $ans['solution']=$fdata[0]['que_solution'];
            $ans['video']=$fdata[0]['que_video'];
         }     
      $ans['appear_ans']=$data['option_option'];
      
         $options=$this->get_options($data['que_id']);
         $nextque=$this->get_nextque($data['que_id'],$sesssion_testid);
         
         if(!empty($nextque))
         {
            $quenext=$nextque[0]['que_id'];
            $button="<a href='get_nextquestion/$quenext'>Next Question</a>";
         }     
         else
         {
            $button="<a href='client/result/get_result'>Get Result</a>";
            $quenext='0';
         }  

         $counter=$this->session->userdata('session_counter');
         $this->session->set_userdata('session_counter',$counter);

         $ans['question']=$fdata;
         $ans['options']=$options;
         $ans['nextque']=$quenext;
         $ans['buttontype']=$button;
         $ans['countque']=$counter;
   

         $this->load->view('client/solution',$ans);

      }
      public function get_nextquestion($queid)
      {
         # code...
         $this->load->model('account_model_client');
         $test_id=$this->session->userdata('session_test_id');
         $data=$this->account_model_client->get_question_data($queid);
         $que_id=$data[0]['que_id'];
         $options=$this->get_options($que_id);
         $nextque=$this->get_nextque($que_id,$test_id);
         if(empty($nextque))
         {
            $button='Get Result</a>';
         }     
         else
         {
            $button="<a href='get_question'>Next Question</a>";
         }  
         $counter=$this->session->userdata('session_counter')+1;
         $this->session->set_userdata('session_counter',$counter);
         $ans['question']=$data;
         $ans['options']=$options;
         $ans['nextque']=$nextque;
         $ans['buttontype']=$button;
         $ans['countque']=$counter;
         $this->load->view('client/question',$ans);

      }
      public function get_result()
      {
         # code...
      //$this->session->userdata('newsession_id');
         session_start();
      $session_id=$_SESSION['new_sessionid'];
   $numberofque=$this->myclass->select("count(appear_queid) as noque","test_appear","appear_sessionid='$session_id'");
   $rightans=$this->myclass->select("count(appear_ans) as rightans","test_appear","appear_sessionid='$session_id' AND appear_ans='Right'");

   $wrongtans=$this->myclass->select("count(appear_ans) as wrongans","test_appear","appear_sessionid='$session_id' AND appear_ans='Wrong'");
   /*echo "<br>";
   print_r('Total no of question'.$numberofque[0]->noque);
   print_r("Right Answer".$rightans[0]->rightans);
   print_r("Wrong Anser".$wrongtans[0]->wrongans);*/
   $ans['TotalQue']=$numberofque[0]->noque;
   $ans['RightAns']=$rightans[0]->rightans;
   $ans['WrongAns']=$wrongtans[0]->wrongans;
   $this->load->view('client/results', $ans);

      }
   public function login()
   {
      
      $this->load->model('account_model_client');  
      $this->_salt="123456789987654321";
         
      $data=$this->input->post();

      $this->form_validation->set_rules("register_email","Email","required|valid_email|trim|xss_clean");
      $this->form_validation->set_rules("register_pass","Password","required|trim|xss_clean");
      $this->form_validation->set_error_delimiters('', ''); 
      if($this->form_validation->run()==FALSE)
      {
         $this->load->view('client/login');
      }
      else
      {
         $data['register_email']=$this->input->post('register_email');
         $data['register_pass']=sha1($this->_salt.$this->input->post('register_pass'));
         $ans=$this->account_model_client->do_login($data);
            if($ans=='1')
            {
               $ans_data = $this->account_model_client->get_data_for_session($data['register_email']);

               $this->session->set_userdata('register_id',$ans_data[0]['register_id']);
               $this->session->set_userdata('register_name',$ans_data[0]['register_name']);
               $this->session->set_userdata('register_email',$ans_data[0]['register_email']);
               $this->session->set_userdata('register_type',$ans_data[0]['register_type']);
               $this->session->set_userdata('register_add',$ans_data[0]['register_add']);
               $this->session->set_userdata('register_city',$ans_data[0]['register_city']);
               $this->session->set_userdata('register_state',$ans_data[0]['register_state']);
               $this->session->set_userdata('register_country',$ans_data[0]['register_country']);
               $this->session->set_userdata('register_mobile',$ans_data[0]['register_mobile']);
               // $sessiondata=$this->session->userdata('register_add');
               // print_r($sessiondata);  
               // exit();
               redirect(base_url().'client/welcome/dashboard');
            }
            else
            {
               $message['error_msg']=$ans;
               $this->load->view('login',$message);   
                  
            }  
      }
   }
   
   function register_action()
   {
      $data=$this->input->post();

      $this->load->model('account_model_client');
      $this->_salt="123456789987654321";
      
      $this->form_validation->set_rules("register_name","Name","required|trim|xss_clean");
      $this->form_validation->set_rules("register_email","Email","required|valid_email|is_unique[register.register_email]|trim|xss_clean");
      $this->form_validation->set_rules("register_mobile","Mobile Number","required|numeric|min_length[10]|max_length[10]|is_unique[register.register_mobile]|trim|xss_clean");
      $this->form_validation->set_rules("register_pass","Password","required|min_length[4]|max_length[12]|trim|xss_clean");

      $this->form_validation->set_error_delimiters('', ''); 

      if($this->form_validation->run()==FALSE)
      {
            
            $this->load->view('client/login');
      }
      else
      {
         unset($data['register-submit']);
         $data['register_pass']=sha1($this->_salt.$this->input->post('register_pass'));
         $this->session->set_userdata('register_mobile',$data['register_mobile']);
         $ans=$this->account_model_client->register("register",$data);
         $mobile=$this->input->post('register_mobile');
         $data = rand(10000,99999);

         $msg = urlencode("Your OTP is : $data");
         $str_sms="https://bulksms.vsms.net/eapi/submission/send_sms/2/2.0?username=IMUCETGUIDE&password=123456789&message=$msg&msisdn=$mobile";
         redirect('client/welcome/otp','refresh');

      }
   }
   public function otp()
   {
      # code...
      $this->load->view('client/otp');
   }

   function do_logout()
   {
      /*$this->session->userdata("register_id");
      $this->session->userdata("register_name");
      $this->session->userdata("register_email");
      $this->session->userdata("register_type");*/
      $this->session->sess_destroy();
      redirect(base_url()."client/welcome/");
   }

   public function about()
   {
      $this->load->view('client/about');
   }
public function view_merchant()
   {
      $this->load->view('client/merchant-navy');
   }
   public function view_help()
   {
      $this->load->view('client/help');
   }
   public function view_contact()
   {
      $this->load->view('client/contact');
   }
   public function view_terms()
   {
      $this->load->view('client/terms');
   }
   public function view_policy()
   {
      $this->load->view('client/policy');
   }
   public function pricing()
   {
      $this->load->view('client/pricing');
   }
   public function mock()
   {     
      $this->load->model('account_model_client');
      $ans=$this->account_model_client->get_mtestlist();
      if (empty($ans))
      {
          $data['test']='No';
      }
      else
      {
          $data['test']=$ans;
      } 
     
      $this->load->view('client/mock',$data);
   }
   public function start_mtest($test_id)
      {

         # code...
         session_start();
session_regenerate_id();
$new_sessionid = session_id();
$_SESSION['new_sessionid']=session_id();
      $this->load->model('account_model_client');
         $que=$this->myclass->select("testque_queid","testque","testque_testid='$test_id' LIMIT 1");
         $que_id=$que[0]->testque_queid;
         $moctestid=$this->session->userdata('moctest_id');
         $sesssion_testid=$this->session->set_userdata('session_test_id',$test_id);
         $data=$this->account_model_client->get_question($test_id,$que_id);
         $que_id=$data[0]['que_id'];
         $options=$this->get_options($que_id);
         $nextque=$this->get_nextque($que_id,$test_id);
         if(empty($nextque))
         {
            $button='Get Result</a>';
         }     
         else
         {
            $nexquestion=$nextque[0]['testque_id'];
            $button="<a href='get_question/$nexquestion'>Next Question</a>";
         }  
         $ans['question']=$data;
         $ans['options']=$options;
         $ans['nextque']=$nextque;
         $ans['buttontype']=$button;
         $ans['countque']=1;
         $this->session->set_userdata('session_counter',$ans['countque']);
         $this->load->view('client/mquestion',$ans);
      }
      public function msubmitque()
      {
         # code...
         $data=$this->input->post();
         $ans['appear_stuid']=$this->session->userdata('register_id');
         $ans['appear_queid']=$data['que_id'];  
         session_start();
      $ans['appear_sessionid']=$_SESSION['new_sessionid'];  
         $this->load->model('account_model_client');
         $sesssion_testid=$this->session->userdata('session_test_id');

         $fdata=$this->account_model_client->get_question_data($data['que_id']);
      $fans=$this->account_model_client->get_right_options($data['que_id']);

         if(($fans[0]['option_right'])==($data['option_option']))
         {
            $ans['appear_ans']='Right';
            $ans['appear_option']=$data['option_option'];
            $ans['appear_testid']=$sesssion_testid;
            $this->account_model_client->do_insert('test_appear',$ans);
            
         }  
         else
         {
            $ans['appear_ans']='Wrong';
            $ans['appear_option']=$data['option_option'];
            $ans['appear_testid']=$sesssion_testid;
            $this->account_model_client->do_insert('test_appear',$ans);
         }     
      $ans['appear_ans']=$data['option_option'];
      
         $options=$this->get_options($data['que_id']);
         $nextque=$this->get_nextque($data['que_id'],$sesssion_testid);
         
         if(!empty($nextque))
         {
            $quenext=$nextque[0]['que_id'];
            $button="<a href='get_nextquestion/$quenext'>Next Question</a>";
         }     
         else
         {
            $button="<a href='client/result/get_result'>Get Result</a>";
            $quenext='0';
         }  

         $counter=$this->session->userdata('session_counter');
         $this->session->set_userdata('session_counter',$counter);

         $ans['question']=$fdata;
         $ans['options']=$options;
         $ans['nextque']=$quenext;
         $ans['buttontype']=$button;
         $ans['countque']=$counter;
   

         $this->load->view('client/mnextque',$ans);

      }
      public function get_mnextquestion($queid)
      {
         # code...
         $this->load->model('account_model_client');
         $test_id=$this->session->userdata('session_test_id');
         $data=$this->account_model_client->get_question_data($queid);
         $que_id=$data[0]['que_id'];
         $options=$this->get_options($que_id);
         $nextque=$this->get_nextque($que_id,$test_id);
         if(empty($nextque))
         {
            $button='Get Result</a>';
         }     
         else
         {
            $button="<a href='get_question'>Next Question</a>";
         }  
         $counter=$this->session->userdata('session_counter')+1;
         $this->session->set_userdata('session_counter',$counter);
         $ans['question']=$data;
         $ans['options']=$options;
         $ans['nextque']=$nextque;
         $ans['buttontype']=$button;
         $ans['countque']=$counter;
         $this->load->view('client/mquestion',$ans);

      } 
      public function pay($packageid)
      {
         $id=$packageid;
         $this->session->set_userdata('package_id',$id);
         $this->load->model('account_model_client');
         $data['package']=$this->account_model_client->get_package($id);
         $order_no=$this->myclass->select("pay_orderid","payment","1");
         $orderid=end($order_no);
         $data['orderid']=$orderid->orderid+1;
         $this->load->view('client/payform',$data);
      }
      public function studymode()
      {
         $this->load->model('account_model_client');
      $data['stream']=$this->account_model_client->get_stream();
         $this->load->view('client/studymode',$data);
      }    
}

/* End of file welcome.php */
/* Location: ./application/controllers/client/welcome.php */