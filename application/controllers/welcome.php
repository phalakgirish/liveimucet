<?php 
if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Welcome extends CI_Controller {

	public function __construct() {
        parent::__construct();     
        date_default_timezone_set('Asia/Kolkata');
    }
	
	public function index()
	{
		$this->load->view('welcome_message');
	}
	
	public function dashboard()
	{
		$this->load->view('common/header');
		$this->load->view('dashboard');
		$this->load->view('common/footer');
		
	}
		
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */