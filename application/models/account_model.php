<?php
class account_model extends CI_Model
{
	function register($table,$data)
	{
		if($this->db->insert($table,$data))
		{
			return TRUE;
		}
		return FALSE;
	}
	
	function update_record($id,$table,$edit_data,$field)
	{
		$this->db->where($field,$id);
		$this->db->update($table,$edit_data);
	}
	
	function delete_record($delete_id,$field,$table)
	{
		//print_r($user_id);
		$this->db->where($field,$delete_id);
		$this->db->delete($table); 
		
	}
	function get_data_for_session($user)
	{
		$this->db->select("user_id,user_name,user_email,user_status");
		$this->db->where("user_email",$user);
		$record = $this->db->get("user");
		return  $record->result_array();		
	}
	
	public function do_login($data)
	{
		
		$pass = $data['user_pass'];
		$apss1 = $data['user_pass'];
		
		array_pop($data);
		$this->db->select("user_pass");
		$this->db->where('user_status','Active'); 
		$record = $this->db->get_where("user",$data);
		
		if($record->num_rows==1)
		{
			$ans = $record->result();
			
			if($ans[0]->user_pass==$pass)
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
	} 	//Get Last inserted id	
	//Get Last inserted id
	public function get_lastinsertedid($table,$field)
	{
		$last_row=$this->db->select_max($field)->order_by($field,"desc")->limit(1)->get($table)->row();
		return $last_row;
	}
	
}

