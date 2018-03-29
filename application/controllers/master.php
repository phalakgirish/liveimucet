<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class master extends CI_Controller {
	
	public function index()
	{
		$this->load->view('common/header');
		$this->load->view('master/user_addnew');
		$this->load->view('common/header');
	}
	/*User Start*/
	function add_usertype()
	{
		$this->load->model('account_model');
		$this->form_validation->set_rules("usertype_name","User Type","required|is_unique[invoice_usertype.usertype_name]|trim|xss_clean");
		$this->form_validation->set_rules("usertype_status","Status","required|trim|xss_clean");
		
		if($this->form_validation->run()==FALSE)
		{
			$this->load->view('common/header');
			$this->load->view('master/user_type_addnew');
			$this->load->view('common/footer');
		}
		else
		{
			
			
			$data['usertype_name']=$this->input->post('usertype_name');
			$data['usertype_status']=$this->input->post('usertype_status');
			$ans=$this->account_model->register("invoice_usertype",$data);
			
			$data1=$this->input->post();
			unset($data1['usertype_name']);
			unset($data1['usertype_status']);
			$data1['role_groupid']=$this->db->insert_id();
			
			$ans=$this->account_model->register("invoice_roles",$data1);
			//redirect('');
			if($ans==1)
			{
				redirect(base_url().'master/user_typeview');
			}
			else
			{
				$this->load->view('common/header');
				$this->load->view('master/user_type_addnew');
				$this->load->view('common/footer');
			}
		}
	}
	public function user_typeview()
	{
		$this->load->view('common/header');
		$this->load->view('master/user_type_view');
		$this->load->view('common/footer');
	}
	function edit_usertype_action()
	{
		$this->load->model('account_model');
		$this->form_validation->set_rules("usertype_name","User Type","required|trim|xss_clean");
		$this->form_validation->set_rules("usertype_status","Status","required|trim|xss_clean");
		
		if($this->form_validation->run()==FALSE)
		{
			$this->load->view('common/header');
			$this->load->view('master/user_type_addnew');
			$this->load->view('common/footer');
		}
		else
		{
			
			
			$data['usertype_name']=$this->input->post('usertype_name');
			$data['usertype_status']=$this->input->post('usertype_status');
			$id=$this->input->post('usertype_id');
			$ans=$this->account_model->update_record($id,'invoice_usertype',$data,"usertype_id");
			//$ans=$this->account_model->register("invoice_usertype",$data);
			
			$data1=$this->input->post();
			unset($data1['usertype_name']);
			unset($data1['usertype_status']);
			unset($data1['usertype_id']);
			$data1['role_groupid']=$id;
			
			$ans=$this->account_model->update_record($id,'invoice_roles',$data1,"role_groupid");
			
			redirect(base_url().'master/user_typeview');
			
		}
	}
	/*Edit country form*/
	public function edit_usertype($usertype_id)
	{
		$data['usertype_id']=$usertype_id;
		$this->load->view('common/header');
		$this->load->view('master/user_type_edit',$data);
		$this->load->view('common/footer');
	}
	/*User end*/
	
	//Subject Start
	function add_subject()
	{
		$this->load->model('account_model');
		$data=$this->input->post();	
		
		$this->form_validation->set_rules("subject_stream","Stream","required|xss_clean");
		$this->form_validation->set_rules("subject_name","Subject","required|trim|xss_clean");
		$this->form_validation->set_rules("subject_des","Subject Information","required|trim|xss_clean");
		//$this->form_validation->set_rules("subject_icon","Subject Icon","required|trim|xss_clean");
		$this->form_validation->set_rules("subject_status","Status","required|trim|xss_clean");
		$this->form_validation->set_error_delimiters('<h4 class="widgettitle title-danger">', '</h4><br />'); 

		if($this->form_validation->run()==FALSE)
		{
			echo validation_errors();
		}
		else
		{
			
			$data=$this->input->post();	
			$userId=$this->myclass->get_session_record(0);
			$data['subject_createdby']=$userId;
			$data['subject_createddate']=date('Y-m-d H:i:s');
			
			$len=count($data['subject_stream']);
			
			for($i=0; $i<$len; $i++)
			{
				$ans[]=array(
								"subject_stream"=>$data['subject_stream'][$i],
								"subject_name"=>$data['subject_name'],
								"subject_des"=>$data['subject_des'],
								"subject_icon"=>$data['subject_icon'],
								"subject_status"=>$data['subject_status'],
								"subject_createdby"=>$data['subject_createdby'],
								"subject_createddate"=>$data['subject_createddate'],
								
							);
				
			}	
			
			foreach($ans as $fans)
			{
				$ans1=$this->account_model->register("subject",$fans);
			}
			echo '1';
		}
	}
	public function view_subject()
	{
		$this->load->view('common/header');
		$this->load->view('master/subject_view');
		
	}
	public function edit_subject($subject_id)
	{
		$data['subject_id']=$subject_id;
		$this->load->view('common/header');
		$this->load->view('master/subject_edit',$data);
		
	}
	
	function edit_subject_action()
	{
		$this->load->model('account_model');
		$this->form_validation->set_rules("subject_stream","Stream","required|trim|xss_clean");
		$this->form_validation->set_rules("subject_name","Name","required|xss_clean");
		$this->form_validation->set_rules("subject_des","Information","required|trim|xss_clean");
		$this->form_validation->set_rules("subject_icon","Icon","required|trim|xss_clean");
		$this->form_validation->set_rules("subject_status","Status","required|trim|xss_clean");
		$this->form_validation->set_error_delimiters('<h4 class="widgettitle title-danger">', '</h4><br />'); 
		
		if($this->form_validation->run()==FALSE)
		{
			echo validation_errors();
		}
		else
		{
		
			//$data=$this->input->post('courier_name');
			$data=$this->input->post();
			$userId=$this->myclass->get_session_record(0);
			$ans['subject_updatedby']=$userId;
			$ans['subject_updateddate']=date('Y-m-d H:i:s');
			$ans['subject_stream']=$data['subject_stream'];
			$ans['subject_name']=$data['subject_name'];
			$ans['subject_des']=$data['subject_des'];
			$ans['subject_icon']=$data['subject_icon'];
			$ans['subject_status']=$data['subject_status'];
			$id=$this->input->post('subject_id');
			$ans=$this->account_model->update_record($id,'subject',$ans,"subject_id");
			echo '1';
			
		}
	}
	//Subject End
	
	public function delete_record()
	{
		$del_id=$_POST['id'];
		$field=$_POST['field'];
		$table=$_POST['table'];
		$this->load->model('account_model');
		$this->account_model->delete_record($del_id,$field,$table);
	}

	/***************Mona Code*************************/
	/*student start*/
	function add_student()
	{
		$this->load->model('account_model');
		$this->form_validation->set_rules("stu_name","Student name","required|trim|xss_clean");
		$this->form_validation->set_rules("stu_email","Email","required|valid_email|is_unique[student.stu_email]|trim|xss_clean");
		$this->form_validation->set_rules("stu_mobile","Mobile Number","required|numeric|min_length[10]|max_length[10]|is_unique[student.stu_mobile]|trim|xss_clean");
		$this->form_validation->set_rules("stu_add","Address","required|trim|xss_clean");
		$this->form_validation->set_rules("stu_city","City","required|trim|xss_clean");
		$this->form_validation->set_rules("stu_country","Country","required|trim|xss_clean");
		$this->form_validation->set_rules("stu_type","Type","required|trim|xss_clean");
		$this->form_validation->set_rules("stu_status","Status","required|trim|xss_clean");
		$this->form_validation->set_error_delimiters('<h4 class="widgettitle title-danger">', '</h4><br />'); 
		if($this->form_validation->run()==FALSE)
		{
			echo validation_errors();
		}
		else
		{
			$data['stu_name']=$this->input->post('stu_name');
			$data['stu_email']=$this->input->post('stu_email');
			$data['stu_mobile']=$this->input->post('stu_mobile');
			$data['stu_add']=$this->input->post('stu_add');
			$data['stu_city']=$this->input->post('stu_city');
			$data['stu_country']=$this->input->post('stu_country');
			$data['stu_type']=$this->input->post('stu_type');
			$data['stu_status']=$this->input->post('stu_status');
			$ans=$this->account_model->register("student",$data);
			echo '1';
		}
	}
	public function view_student()
	{
		$this->load->view('common/header');
		$this->load->view('master/student_view');
		
	}
	public function edit_student($stu_id)
	{
		$data['stu_id']=$stu_id;
		$this->load->view('common/header');
		$this->load->view('master/student_edit',$data);
		
	}
	
	function edit_student_action()
	{
		$this->load->model('account_model');
		$this->form_validation->set_rules("stu_name","Student name","required|trim|xss_clean");
		$this->form_validation->set_rules("stu_email","Email","required|valid_email|trim|xss_clean");
		$this->form_validation->set_rules("stu_mobile","Mobile Number","required|numeric|min_length[10]|max_length[10]|trim|xss_clean");
		$this->form_validation->set_rules("stu_add","Address","required|trim|xss_clean");
		$this->form_validation->set_rules("stu_city","City","required|trim|xss_clean");
		$this->form_validation->set_rules("stu_country","Country","required|trim|xss_clean");
		$this->form_validation->set_rules("stu_type","Type","required|trim|xss_clean");
		$this->form_validation->set_rules("stu_status","Status","required|trim|xss_clean");
		$this->form_validation->set_error_delimiters('<h4 class="widgettitle title-danger">', '</h4><br />'); 
		
		if($this->form_validation->run()==FALSE)
		{
			echo validation_errors();
		}
		else
		{
		
			//$data=$this->input->post('courier_name');
			$data['stu_name']=$this->input->post('stu_name');
			$data['stu_email']=$this->input->post('stu_email');
			$data['stu_mobile']=$this->input->post('stu_mobile');
			$data['stu_add']=$this->input->post('stu_add');
			$data['stu_city']=$this->input->post('stu_city');
			$data['stu_country']=$this->input->post('stu_country');
			$data['stu_type']=$this->input->post('stu_type');
			$data['stu_status']=$this->input->post('stu_status');
			$id=$this->input->post('stu_id');
			$ans=$this->account_model->update_record($id,'student',$data,"stu_id");
			echo '1';
			
		}
	}
	/*student end*/

	/*stream start*/
	public function view_stream()
	{
		$this->load->view('common/header');
		$this->load->view('master/stream_view');
		
	}
	function add_stream()
	{
		$this->load->model('account_model');
		$this->form_validation->set_rules("stream_name","Stream name","required|trim|xss_clean");
		
		$this->form_validation->set_rules("stream_desc","Information","required|trim|xss_clean");
		//$this->form_validation->set_rules("stream_icon","Icon","required|trim|xss_clean");
		
		$this->form_validation->set_rules("stream_status","Status","required|trim|xss_clean");
		$this->form_validation->set_error_delimiters('<h4 class="widgettitle title-danger">', '</h4><br />'); 
		if($this->form_validation->run()==FALSE)
		{
			echo validation_errors();
		}
		else
		{
			$data['stream_name']=$this->input->post('stream_name');
			$data['stream_desc']=$this->input->post('stream_desc');
			$data['stream_icon']=$this->input->post('stream_icon');
			$data['stream_status']=$this->input->post('stream_status');
			$ans=$this->account_model->register("stream",$data);
			echo '1';
		}
	}
	public function edit_stream($stream_id)
	{
		$data['stream_id']=$stream_id;
		$this->load->view('common/header');
		$this->load->view('master/stream_edit',$data);
		
	}
	function edit_stream_action()
	{
		$this->load->model('account_model');
		$this->form_validation->set_rules("stream_name","Stream name","required|trim|xss_clean");
		
		$this->form_validation->set_rules("stream_desc","Information","required|trim|xss_clean");
		$this->form_validation->set_rules("stream_icon","Icon","required|trim|xss_clean");
		$this->form_validation->set_rules("stream_status","Status","required|trim|xss_clean");
		$this->form_validation->set_error_delimiters('<h4 class="widgettitle title-danger">', '</h4><br />'); 
		
		if($this->form_validation->run()==FALSE)
		{
			echo validation_errors();
		}
		else
		{
		
			//$data=$this->input->post('courier_name');
			$data['stream_name']=$this->input->post('stream_name');
			$data['stream_desc']=$this->input->post('stream_desc');
			$data['stream_icon']=$this->input->post('stream_icon');
			$data['stream_status']=$this->input->post('stream_status');
			$id=$this->input->post('stream_id');
			$ans=$this->account_model->update_record($id,'stream',$data,"stream_id");
			echo '1';
			
		}
	}
	/*stream end*/

	/*topic start*/
	public function view_topic()
	{
		$this->load->view('common/header');
		$this->load->view('master/topic_view');
		
	}
	function add_topic()
	{
		$this->load->model('account_model');
		$this->form_validation->set_rules("subject_stream","Stream","required|xss_clean");
		$this->form_validation->set_rules("topic_subject","Subject","required|xss_clean");
		$this->form_validation->set_rules("topic_name","Topic","required|trim|xss_clean");
		$this->form_validation->set_rules("topic_status","Status","required|trim|xss_clean");
		$this->form_validation->set_error_delimiters('<h4 class="widgettitle title-danger">', '</h4><br />'); 
		if($this->form_validation->run()==FALSE)
		{
			echo validation_errors();
		}
		else
		{
			$data=$this->input->post();	
			$userId=$this->myclass->get_session_record(0);
			$data['topic_createdby']=$userId;
			$data['topic_createddate']=date('Y-m-d H:i:s');

			$len=count($data['topic_subject']);
			
			for($i=0; $i<$len; $i++)
			{
				$ans[]=array(
								"topic_subject"=>$data['topic_subject'][$i],
								"topic_name"=>$data['topic_name'],
								"topic_status"=>$data['topic_status'],
								"topic_createdby"=>$data['topic_createdby'],
								"topic_createddate"=>$data['topic_createddate'],
								
							);
				
			}	
			
			foreach($ans as $fans)
			{
				$ans1=$this->account_model->register("topic",$fans);
			}
			echo '1';
		}
	}
	
	public function edit_topic($topic_id)
	{
		$data['topic_id']=$topic_id;
		$this->load->view('common/header');
		$this->load->view('master/topic_edit',$data);
		
	}
	
	function edit_topic_action()
	{
		$this->load->model('account_model');
		$this->form_validation->set_rules("topic_subject","Subject","required|xss_clean");
		$this->form_validation->set_rules("topic_name","Topic","required|trim|xss_clean");
		$this->form_validation->set_rules("topic_status","Status","required|trim|xss_clean");
		$this->form_validation->set_error_delimiters('<h4 class="widgettitle title-danger">', '</h4><br />'); 
		
		if($this->form_validation->run()==FALSE)
		{
			echo validation_errors();
		}
		else
		{
		
			//$data=$this->input->post('courier_name');
			$userId=$this->myclass->get_session_record(0);
			$data['topic_updatedby']=$userId;
			$data['topic_updateddate']=date('Y-m-d H:i:s');

			$data['topic_subject']=$this->input->post('topic_subject');
			$data['topic_name']=$this->input->post('topic_name');
			$data['topic_status']=$this->input->post('topic_status');
			$id=$this->input->post('topic_id');
			$ans=$this->account_model->update_record($id,'topic',$data,"topic_id");
			echo '1';
			
		}
	}
	/*topic end*/
	/*question start*/
	public function view_que()
	{
		
		$this->load->model('account_model');
		$last_inserted=$this->account_model->get_lastinsertedid("question","que_id");
		
		if(!empty($last_inserted))
		{
			$data['srno']=$last_inserted->que_id+1;

		}	
		else
		{	
			$data['srno']='1';
		}
		
		$this->load->view('common/header');
		//$this->load->view('master/que_view');
		$this->load->view('master/image_upload',$data);
		
	}
	/*question end*/
	/*test start*/
	public function view_test()
	{
		$this->load->model('account_model');
		$last_inserted=$this->account_model->get_lastinsertedid('test','test_id');
		if(!empty($last_inserted))
		{
			$data['srno']=$last_inserted->test_id+1;

		}	
		else
		{	
			$data['srno']='1';
		}
		$this->load->view('common/header');
		$this->load->view('master/test_view',$data);
	}
	/*test end*/
	//Get Subject List
	function get_subjectlist()
	{
		$data=$this->input->post();
		$que_stream=$data['que_stream'];
		$this->myclass->dropdown("subject_id","subject_name","subject","subject_status='Active' AND subject_stream='$que_stream' ORDER BY subject_name","que_subject","que_subject","");
		
	}
		
 function ajax_upload()
	{
		$ans=$this->input->post();	
		$this->load->model('account_model');
		if(isset($_FILES["que_img"]["name"]) && !empty($_FILES["que_img"]["name"]))
		{
			$config['upload_path'] = './upload/';
			$config['allowed_types'] = 'jpg|jpeg|png|gif|pdf|doc|docx|xls|';
			$this->load->library('upload', $config);
			$this->upload->initialize($config);
			if(!$this->upload->do_upload('que_img'))
			{
				echo $this->upload->display_errors();
			}
			else
			{
				$data = $this->upload->data();
				$ans['que_img']='upload/'.$data['file_name'];
				echo '<img src="'.base_url().'upload/'.$data["file_name"].'" width="300" height="225" class="img-thumbnail" />';
				
			}
		}
		else
		{
			$ans['que_img']='';
		}	
		if(isset($_FILES["image_file_solution"]["name"]) && !empty($_FILES["image_file_solution"]["name"]))
		{
			$config['upload_path'] = './upload/';
			$config['allowed_types'] = 'jpg|jpeg|png|gif|pdf|doc|docx|xls|';
			$this->load->library('upload', $config);
			$this->upload->initialize($config);
			if(!$this->upload->do_upload('image_file_solution'))
			{
				echo $this->upload->display_errors();
			}
			else
			{
				$data = $this->upload->data();
				$ans['image_file_solution']='upload/'.$data['file_name'];
				echo '<img src="'.base_url().'upload/'.$data["file_name"].'" width="300" height="225" class="img-thumbnail" />';
				
			}
		}
		else
		{
			$ans['image_file_solution']='';
		}	
			
			$len=count($ans['que_topic']);
			for($i=0; $i<$len; $i++)
			{
				$newans[]=array(
							"que_topic"=>$ans['que_topic'][$i],
							"que_question"=>$ans['que_question'],
							"que_marks"=>$ans['que_marks'],
							"que_video"=>$ans['que_video'],
							"que_file"=>$ans['que_img'],
							"image_file_solution"=>$ans['image_file_solution'],
							"que_solution"=>$ans['que_solution']
							);
				
			}	

			foreach($newans as $fans)
			{
				$ans1=$this->account_model->register("question",$fans);
			}
			echo "<pre>";
			print_r($newans);
			exit;
			echo '1';
		
	}
	function ajax_upload_option()
	{
		$ans=$this->input->post();
		$this->load->model('account_model');

		if(isset($_FILES["option_img"]["name"]) && !empty($_FILES["option_img"]["name"]))
		{
			$config['upload_path'] = './upload/';
			$config['allowed_types'] = 'jpg|jpeg|png|gif|pdf|doc|docx|xls|';
			$this->load->library('upload', $config);
			$this->upload->initialize($config);
			if(!$this->upload->do_upload('option_img'))
			{
				echo $this->upload->display_errors();
			}
			else
			{
				$data = $this->upload->data();
				$ans['option_img']='upload/'.$data['file_name'];
				echo '<img src="'.base_url().'upload/'.$data["file_name"].'" width="300" height="225" class="img-thumbnail" />';
			}
		}
		else
		{	
			$ans['option_img']='';
		}
			$ans1=$this->account_model->register("imuoption",$ans);
			echo '1';
	}
	public function study_test()
	{
		$data=$this->input->post();
		$this->load->model('account_model');
		$this->form_validation->set_rules("test_name","Test Name","required|is_unique[test.test_name]|trim|xss_clean");
		$this->form_validation->set_rules("test_time","Test Time","required|trim|xss_clean");
		$this->form_validation->set_rules("testque_queid","Test Question","required|xss_clean");
		$this->form_validation->set_rules("test_status","Status","required|trim|xss_clean");
		$this->form_validation->set_error_delimiters('', ''); 
		if($this->form_validation->run()==FALSE)
		{
			$last_inserted=$this->account_model->get_lastinsertedid('test','test_id');
			if(!empty($last_inserted))
			{
				$data['srno']=$last_inserted->test_id+1;

			}	
			else
			{	
				$data['srno']='1';
			}
			$this->load->view('common/header');
			$this->load->view('master/test_view',$data);
		}
		else
		{
			
			$len=count($data['testque_queid']);
			for($i=0; $i<$len; $i++)
			{
				$newans[]=array(
							"testque_testid"=>$data['testque_testid'],
							"testque_queid"=>$data['testque_queid'][$i]
							);
				
			}
			$ans['test_topic']=$data['test_topic'];
			$ans['test_subjectid']=$data['test_subjectid'];
			$ans['test_streamid']=$data['test_streamid'];
			$ans['test_name']=$data['test_name'];
			$ans['test_time']=$data['test_time'];
			$ans['test_status']=$data['test_status'];
			$ans['test_paid']=$data['test_paid'];
			$ans['test_type']='study';
			
			$ans1=$this->account_model->register("test",$ans);
			foreach($newans as $fans)
			{
				$ans1=$this->account_model->register("testque",$fans);
			}
			redirect('master/study_test');
		}	
	}
/*mocktest start*/
	public function view_moctest()
	{
		$this->load->model('account_model');
		$last_inserted=$this->account_model->get_lastinsertedid('test','test_id');
		if(!empty($last_inserted))
		{
			$data['srno']=$last_inserted->test_id+1;

		}	
		else
		{	
			$data['srno']='1';
		}
		$this->load->view('common/header');
		$this->load->view('master/moctest_view',$data);
	}
public function study_moctest()
	{
		$data=$this->input->post();
		$this->load->model('account_model');
		$this->form_validation->set_rules("test_name","Test Name","required|is_unique[test.test_name]|trim|xss_clean");
		$this->form_validation->set_rules("test_time","Test Time","required|trim|xss_clean");
		$this->form_validation->set_rules("testque_queid","Test Question","required|xss_clean");
		$this->form_validation->set_rules("test_status","Status","required|trim|xss_clean");
		$this->form_validation->set_error_delimiters('', ''); 
		if($this->form_validation->run()==FALSE)
		{
			$last_inserted=$this->account_model->get_lastinsertedid('test','test_id');
			if(!empty($last_inserted))
			{
				$data['srno']=$last_inserted->test_id+1;

			}	
			else
			{	
				$data['srno']='1';
			}
			$this->load->view('common/header');
			$this->load->view('master/moctest_view',$data);
		}
		else
		{
			
			$len=count($data['testque_queid']);
			for($i=0; $i<$len; $i++)
			{
				$newans[]=array(
							"testque_testid"=>$data['testque_testid'],
							"testque_queid"=>$data['testque_queid'][$i]
							);
				
			}
			$ans['test_name']=$data['test_name'];
			$ans['test_time']=$data['test_time'];
			$ans['test_status']=$data['test_status'];
			$ans['test_paid']=$data['test_paid'];
			$ans['test_type']='moc';
			
			$ans1=$this->account_model->register("test",$ans);
			foreach($newans as $fans)
			{
				$ans1=$this->account_model->register("testque",$fans);
			}
			redirect('master/study_moctest');
		}	
	}
	/*mocktest end*/

	public function upload_ques()
	{
		$ans=$this->input->post();
		//echo "<pre>";
		//print_r($ans);
		if($ans['option_right1']=='right')
		{
			$right=1;
		}
		else if($ans['option_right2']=='right')
		{
			$right=2;
		}
		else if($ans['option_right3']=='right')
		{
			$right=3;
		}
		else
		{
			$right=4;
		}
		
		$this->load->model('account_model');
		if(isset($_FILES["que_img"]["name"]) && !empty($_FILES["que_img"]["name"]))
		{
			$config['upload_path'] = './upload/';
			$config['allowed_types'] = 'jpg|jpeg|png|gif|pdf|doc|docx|xls|';
			$this->load->library('upload', $config);
			$this->upload->initialize($config);
			if(!$this->upload->do_upload('que_img'))
			{
				echo $this->upload->display_errors();
			}
			else
			{
				$data = $this->upload->data();
				$ans['que_img']='upload/'.$data['file_name'];
				echo '<img src="'.base_url().'upload/'.$data["file_name"].'" width="300" height="225" class="img-thumbnail" />';
				
			}
		}
		else
		{
			$ans['que_img']='';
		}	
		if(isset($_FILES["image_file_solution"]["name"]) && !empty($_FILES["image_file_solution"]["name"]))
		{

			$config['upload_path'] = './upload/';
			$config['allowed_types'] = 'jpg|jpeg|png|gif|pdf|doc|docx|xls|';
			$this->load->library('upload', $config);
			$this->upload->initialize($config);
			if(!$this->upload->do_upload('image_file_solution'))
			{
				echo $this->upload->display_errors();
			}
			else
			{
				$data = $this->upload->data();
				$ans['image_file_solution']='upload/'.$data['file_name'];
				echo '<img src="'.base_url().'upload/'.$data["file_name"].'" width="300" height="225" class="img-thumbnail" />';
				
			}
		}
		else
		{
			$ans['image_file_solution']='';
		}	
		
		//option img 1
if(isset($_FILES["option_img1"]["name"]) && !empty($_FILES["option_img1"]["name"]))
		{
			$config['upload_path'] = './upload/';
			$config['allowed_types'] = 'jpg|jpeg|png|gif|pdf|doc|docx|xls|';
			$this->load->library('upload', $config);
			$this->upload->initialize($config);
			if(!$this->upload->do_upload('option_img1'))
			{
				echo $this->upload->display_errors();
			}
			else
			{
				$data = $this->upload->data();
				$ans['option_img1']='upload/'.$data['file_name'];
				echo '<img src="'.base_url().'upload/'.$data["file_name"].'" width="300" height="225" class="img-thumbnail" />';
				
			}
		}
		else
		{
			$ans['option_img1']='';
		}	
		//option img 1
		//option img 2
if(isset($_FILES["option_img2"]["name"]) && !empty($_FILES["option_img2"]["name"]))
		{
			$config['upload_path'] = './upload/';
			$config['allowed_types'] = 'jpg|jpeg|png|gif|pdf|doc|docx|xls|';
			$this->load->library('upload', $config);
			$this->upload->initialize($config);
			if(!$this->upload->do_upload('option_img2'))
			{
				echo $this->upload->display_errors();
			}
			else
			{
				$data = $this->upload->data();
				$ans['option_img2']='upload/'.$data['file_name'];
				echo '<img src="'.base_url().'upload/'.$data["file_name"].'" width="300" height="225" class="img-thumbnail" />';
				
			}
		}
		else
		{
			$ans['option_img2']='';
		}	
		//option img 2
		//option img 3
if(isset($_FILES["option_img3"]["name"]) && !empty($_FILES["option_img3"]["name"]))
		{
			$config['upload_path'] = './upload/';
			$config['allowed_types'] = 'jpg|jpeg|png|gif|pdf|doc|docx|xls|';
			$this->load->library('upload', $config);
			$this->upload->initialize($config);
			if(!$this->upload->do_upload('option_img3'))
			{
				echo $this->upload->display_errors();
			}
			else
			{
				$data = $this->upload->data();
				$ans['option_img3']='upload/'.$data['file_name'];
				echo '<img src="'.base_url().'upload/'.$data["file_name"].'" width="300" height="225" class="img-thumbnail" />';
				
			}
		}
		else
		{
			$ans['option_img3']='';
		}	
		//option img 3
		//option img 4
if(isset($_FILES["option_img4"]["name"]) && !empty($_FILES["option_img4"]["name"]))
		{
			$config['upload_path'] = './upload/';
			$config['allowed_types'] = 'jpg|jpeg|png|gif|pdf|doc|docx|xls|';
			$this->load->library('upload', $config);
			$this->upload->initialize($config);
			if(!$this->upload->do_upload('option_img4'))
			{
				echo $this->upload->display_errors();
			}
			else
			{
				$data = $this->upload->data();
				$ans['option_img4']='upload/'.$data['file_name'];
				echo '<img src="'.base_url().'upload/'.$data["file_name"].'" width="300" height="225" class="img-thumbnail" />';
				
			}
		}
		else
		{
			$ans['option_img4']='';
		}	
		//option img 4
		
			$len=count($ans['que_topic']);
			for($i=0; $i<$len; $i++)
			{
				$newans[]=array(
							"que_topic"=>$ans['que_topic'][$i],
							"que_question"=>$ans['que_question'],
							"que_marks"=>$ans['que_marks'],
							"que_video"=>$ans['que_video'],
							"que_file"=>$ans['que_img'],
							"image_file_solution"=>$ans['image_file_solution'],
							"que_solution"=>$ans['que_solution'],
							"option_option1"=>$ans['option_option1'],
							"option_img1"=>$ans['option_img1'],
							"option_option2"=>$ans['option_option2'],
							"option_img2"=>$ans['option_img2'],
							"option_option3"=>$ans['option_option3'],
							"option_img3"=>$ans['option_img3'],
							"option_option4"=>$ans['option_option4'],
							"option_img4"=>$ans['option_img4'],
							"option_right"=>$right
							);
				
			}	

			foreach($newans as $fans)
			{
				$ans1=$this->account_model->register("question",$fans);
			}
			
			redirect('master/view_que');
	}
}


/* End of file master.php */
/* Location: ./application/controllers/master.php */