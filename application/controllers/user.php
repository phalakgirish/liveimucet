<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class user extends CI_Controller {

	public function index()
	{
		$this->load->view('common/header');
		$this->load->view('master/user_view');
		$this->load->view('common/footer');
	}
	function register()
	{
		$data=$this->input->post();
		$this->load->model('account_model');
		$this->_salt="123456789987654321";
		$data=$this->input->post();
		$this->form_validation->set_rules("user_name","Name","required|trim|xss_clean");
		$this->form_validation->set_rules("user_email","Email","required|valid_email|is_unique[junk_user.user_email]|trim|xss_clean");
		$this->form_validation->set_rules("user_phone","Mobile Number","required|numeric|min_length[10]|max_length[10]|is_unique[junk_user.user_phone]|trim|xss_clean");
		$this->form_validation->set_rules("user_pass","Password","required|min_length[4]|max_length[12]|trim|xss_clean");
		$this->form_validation->set_rules("user_cpass","Confirm Password","required|matches[user_pass]|trim|xss_clean");
		$this->form_validation->set_rules("user_status","Status","required|trim|xss_clean");
		$this->form_validation->set_error_delimiters('<h4 class="widgettitle title-danger">', '</h4><br />'); 
		if($this->form_validation->run()==FALSE)
		{
				echo validation_errors();
		}
		else
		{
			
			$data['user_pass']=sha1($this->_salt.$this->input->post('user_pass'));
			unset($data['user_cpass']);
			$ans=$this->account_model->register("user",$data);
			echo '1';
		}
	}
	public function view_user()
	{
		
		$this->load->view('common/header');
		$this->load->view('master/user_view');
		
	}
	public function login()
	{
		
		$this->load->model('account_model');	
		$this->_salt="123456789987654321";
			
		$data=$this->input->post();
       
		$this->form_validation->set_rules("user_email","Email","required|valid_email|trim|xss_clean");
		$this->form_validation->set_rules("user_pass","Password","required|trim|xss_clean");
		if($this->form_validation->run()==FALSE)
		{
			$this->load->view('welcome_message');
		}
		else
		{
			$data['user_email']=$this->input->post('user_email');
			$data['user_pass']=sha1($this->_salt.$this->input->post('user_pass'));
			$ans=$this->account_model->do_login($data);
            if($ans=='1')
				{
					$ans_data = $this->account_model->get_data_for_session($data['user_email']);
					$this->session->set_userdata('user_id',$ans_data[0]['user_id']);
					$this->session->set_userdata('user_name',$ans_data[0]['user_name']);
					$this->session->set_userdata('user_email',$ans_data[0]['user_email']);
					$this->session->set_userdata('user_typeid',$ans_data[0]['user_typeid']);
					$this->session->set_userdata('user_status',$ans_data[0]['user_status']);
					redirect(base_url().'user/view_user');
				}
				else
				{
					$message['error_msg']=$ans;
					$this->load->view('welcome_message',$message);	
						
				}	
		}
	}
	public function user_edit($user_id)
	{
		$data['user_id']=$user_id;
		$this->load->view('common/header');
		$this->load->view('master/user_edit',$data);
		
	}
	public function user_edit_action()
	{
		
		$data=$this->input->post();
		
		$this->load->model('account_model');
		$data=$this->input->post();
		
		$this->form_validation->set_rules("user_name","Name","required||trim|xss_clean");
		$this->form_validation->set_rules("user_email","Email","required|valid_email|trim|xss_clean");
		$this->form_validation->set_rules("user_phone","Contact No","required|numeric|min_length[10]|max_length[10]|trim|xss_clean");
		$this->form_validation->set_rules("user_status","Status","required|trim|xss_clean");
		$this->form_validation->set_error_delimiters('<h4 class="widgettitle title-danger">', '</h4><br />'); 
		if($this->form_validation->run()==FALSE)
		{
				echo validation_errors();
				
		}
		else
		{
			$ans=$this->account_model->update_record($data['user_id'],'user',$data,"user_id");
			echo '1';
		}
		
	}
	/*Change Password*/
	public function user_change_pass($user_id)
	{
		$data['user_id']=$user_id;
		$this->load->view('common/header');
		$this->load->view('master/user_pass',$data);
		
	}
	public function user_password_action()
	{
		
		$data=$this->input->post();
		$this->_salt="123456789987654321";
		$this->load->model('account_model');
		$data=$this->input->post();
		$this->form_validation->set_rules("user_pass","Password","required|min_length[4]|max_length[12]|trim|xss_clean");
		$this->form_validation->set_rules("user_cpass","Confirm Password","required|matches[user_pass]|trim|xss_clean");
		$this->form_validation->set_error_delimiters('<h4 class="widgettitle title-danger">', '</h4><br />'); 
		if($this->form_validation->run()==FALSE)
		{
			echo validation_errors();
		}
		else
		{
			unset($data['user_cpass']);
			$data['user_pass']=sha1($this->_salt.$this->input->post('user_pass'));
			$ans=$this->account_model->update_record($data['user_id'],'junk_user',$data,"user_id");
			echo '1';
		}
	}
	
	/*Edit My profile*/
	public function profile_edit()
	{
		
		$this->load->view('common/header');
		$this->load->view('master/profile_edit');
		$this->load->view('common/footer');
	}
	public function profile_edit_action()
	{
		
		$data=$this->input->post();
		$this->load->model('account_model');
		$data=$this->input->post();
		$this->form_validation->set_rules("user_name","User name","required||trim|xss_clean");
		$this->form_validation->set_rules("user_email","Email","required|valid_email|trim|xss_clean");
		$this->form_validation->set_rules("user_phone","Contact No","required|numeric|min_length[10]|max_length[10]|trim|xss_clean");
		$this->form_validation->set_rules("user_pass","Password","required|min_length[4]|max_length[12]|trim|xss_clean");
		$this->form_validation->set_rules("user_cpass","Confirm Password","required|matches[user_pass]|trim|xss_clean");
		$this->form_validation->set_error_delimiters('', ''); 
		if($this->form_validation->run()==FALSE)
		{
				$data['user_id']=$data['user_id'];
				$this->load->view('common/header');
				$this->load->view('master/profile_edit',$data);
				$this->load->view('common/footer');
		}
		else
		{
			unset($data['user_cpass']);
			$this->_salt="123456789987654321";
			$data['user_pass']=sha1($this->_salt.$this->input->post('user_pass'));
			$ans=$this->account_model->update_record($data['user_id'],'junk_user',$data,"user_id");
			redirect(base_url().'welcome/dashboard');
		}
		
	}
	function do_logout()
	{
		$this->session->userdata("user_id");
		$this->session->userdata("user_name");
		$this->session->userdata("user_email");
		$this->session->userdata("user_typeid");
		$this->session->sess_destroy();
		redirect(base_url()."welcome");
	}
	/*Export User*/
	public function export_user()
	{
		$user_id=$this->myclass->get_session_record(0);
		$export_country=$this->myclass->select("user_id,user_name,user_email,user_phone,user_status","user","usertype_id=user_typeid");
				
				
				$xls_filename = 'User list -'.date('Y-m-d').'.xls';
				header("Content-type: application/vnd-ms-excel");
				header("Content-Disposition: attachment; filename=$xls_filename");
				
				?><html>
						<h4>User List- <?php echo date("d-m-Y");?></h4>
						<table>
							<thead>
								<tr>
								<th class="head0 nosort">Name</th>
							<th class="head1">Email</th>
							<th class="head0 nosort">Contact</th>
							<th class="head1">Status</th>
								</tr>
							</thead>
							<tbody>
		<?php
		if(is_array($export_country)):
		foreach($export_country as $user):
					if($user->user_status=='1')
						{
							$status='Active';
						}	
						else
						{
							$status='Deactive';
						}	
					?>
						<tr>
							<td><?php echo $user->user_name;?></td>
							<td><?php echo $user->user_email;?></td>
							<td><?php echo $user->user_phone;?></td>
							<td><?php echo $status;?></td>
						</tr>
		<?php
		endforeach;
		endif;
		?>						
							</tbody>
						</table>
						</html>
						<?php
		
	}
}

/* End of file user.php */
/* Location: ./application/controllers/user.php */