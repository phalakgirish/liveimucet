<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
	
	class Account_model_client extends CI_Model
	{
		function do_insert($table,$record)
		{	return $this->db->insert($table,$record);}
		
		function insert($table,$col,$value)
		{$sql = "insert into $table ($col) values ($value) ";
			return $this->db->query($sql) or die($this->db->error);}

		function register($table,$data)
		{
		if($this->db->insert($table,$data))
		{
			return 1;
		}
		return 0;
		}

		public function do_login($data)
	{
		$pass = $data['register_pass'];
		$email = $data['register_email'];

		$apss1 = $data['register_pass'];
		
		array_pop($data);
		$this->db->select("register_pass");
		$this->db->where('register_email',$email); 
		$record = $this->db->get_where("register",$data);
		
		if($record->num_rows==1)
		{
			$ans = $record->result();
			
			if($ans[0]->register_pass==$pass)
			{
				return 1;
			}
			else
			{
				return "Invalid Password ";
			}
		}
		else
		{
			return "Invalid Login ID";
		}
	} 
	function get_data_for_session($user)
	{
		$this->db->select("register_id,register_name,register_email,register_type,register_add,register_city,register_state,register_country,register_mobile");
		$this->db->where("register_email",$user);
		$record = $this->db->get("register");
		return  $record->result_array();		
	}
	function get_stream()
		{
			return $this->db->get("stream")->result_array();
		}	
	function get_subject($result)
	{
		return $this->db->get_where("subject",array('subject_stream'=> $result))->result_array();
	}
	public function get_topic($subject)
	{
		# code...
		
			$this->db->select('topic_id,topic_name,subject_name,subject_id');
			$this->db->from('topic');
			$this->db->join('subject','subject_id=topic_subject');
			$this->db->where("topic_subject",$subject);
			$query=$this->db->get();
			return $data= $query->result_array();
	}
	public function get_testlist($topicid)
		{
			# code...
			$this->db->select("test_id,test_type,test_name,test_paid,topic_name,topic_id");
			$this->db->where("test_type",'study');
			$this->db->where("topic_id",$topicid);
			$this->db->where("test_status",'Active');
			$this->db->join('topic','topic_id=test_topic');
			$query = $this->db->get("test");
			return  $data= $query->result_array();
		}	

	function get_moctest_list()
	{
		# code...
		$this->db->select("test_id,test_type,test_name,test_paid");
		$this->db->where("test_type",'moc');
		$this->db->where("test_status",'Active');
		$record = $this->db->get("test");
		return  $record->result_array();
	}
	function get_question($moctestid,$que_id)
	{
			$this->db->select('testque_id,que_question,que_id,que_marks,que_video,que_file,que_solution,image_file_solution,option_option1,option_option2,option_option3,option_option4,option_img1,option_img2,option_img3,option_img4');
			$this->db->from('testque');
			$this->db->join('question','que_id=testque_queid');
			$this->db->where("testque_testid",$moctestid);
			$this->db->where("testque_queid",$que_id);
			$this->db->limit(1);
			$query=$this->db->get();
			return $data= $query->result_array();
	}
	public function get_question_data($que_id)
	{
		# code...
			$this->db->select('testque_id,que_question,que_id,que_marks,que_video,que_file,que_solution,image_file_solution,testque_testid,option_option1,option_option2,option_option3,option_option4,option_right,option_img1,option_img2,option_img3,option_img4');
			$this->db->from('testque');
			$this->db->join('question','que_id=testque_queid');
			$this->db->where("que_id",$que_id);
			$this->db->limit(1);
			$query=$this->db->get();
			return $data= $query->result_array();
	}
	public function get_options($que_id)
	{
		$this->db->select('option_id,option_option,option_right');
		$this->db->from('imuoption');
		$this->db->where("option_queid",$que_id);
		$query=$this->db->get();
		return $data= $query->result_array();
	}
	public function get_right_options($que_id)
	{
		$this->db->select('que_id,option_right');
		$this->db->from('question');
		$this->db->where("que_id",$que_id);
		
		$query=$this->db->get();
		return $data= $query->result_array();
	}
	public function get_nextque($que_id,$moctestid)
	{
		# code...
		$this->db->select('testque_id,que_question,que_id');
		$this->db->from('testque');
		$this->db->join('question','que_id=testque_queid');
		$this->db->where("testque_testid",$moctestid);
		$this->db->where("testque_queid >",$que_id);
		$this->db->limit(1);
		$query=$this->db->get();
		return $data= $query->result_array();
	}
	public function get_result()
	{
		# code...
		
	}

	public function get_mtestlist()
		{
			# code...
			$this->db->select("test_id,test_type,test_name,test_paid");
			$this->db->where("test_type",'moc');
			$this->db->where("test_status",'Active');
			$query = $this->db->get("test");
			return  $data= $query->result_array();
		}
		public function get_package($id)
		{
			return $this->db->get_where("package",array('package_id'=> $id))->result_array();
		}

	}

	
?>