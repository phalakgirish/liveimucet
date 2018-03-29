<?php
// filename: libraries/Myclass.php

class Myclass{
	protected $CI="";
	public function __construct()
	{
		$this->CI =& get_instance();
		//pre($this->CI);
	}
	public function select($field,$table,$condition)
    {
		$sql = "select $field from $table where $condition";
		
		//echo $sql;
		$ans = $this->CI->db->query($sql);
		
		if($ans->num_rows==0)
		{
			return "no";
		}
		else
		{
			$fans = $ans->result();
			//pre($fans);
			return $fans;
		}
    }
	
	/////// CHECK USER TYPE//////////////////
	public function chk_user_type()
	{
		$session_id=$this->CI->session->userdata('user_id');
		return $session_id;
		
	}
	
	//////////////////////////////////////////////
	
	public function chk_session()
	{
		$session_id= $this->CI->session->userdata('user_email');
		if(empty($session_id))
		{
			return 0;
		}
		else
		{
			return 1;
		}
	}
	
	public function get_session_record($type)
	{
		
		switch($type)
		{
			case 1:
			$record = "user_name";
			break;
			
			case 2:
			$record = "user_email";
			break;
			
			case 3:
			$record ="user_area";
			break;
			
			case 4:
			$record ="user_dept";
			break;
			
			case 5:
			$record="user_typeid";
			
			default:
			$record = "user_id";
			
		}
		return $this->CI->session->userdata($record);
	}
	

	
	public function dropdown($field1,$field2,$table,$condition,$name,$class,$class_option)
	{
		$str = "<select name='$name' id='$name' class='$class'>";
		
		$ans = $this->select("$field1,$field2",$table,$condition);
		
		//pre($ans);
		
		if($ans == "no")
		{
			$str.="<option value='' class='$class_option'>No Records</option>";
		}
		else
		{
			//pre($ans);
			$str.="<option value='' class='$class_option'>Select</option>";
			foreach($ans as $key=>$val)
			{
				
				$data1 = $val->$field2;
				$data2 = $val->$field1;
				$str.="<option value='$data2' class='$class_option'>$data1</option>";
			}
		}
		
		$str.="</select>";
		
		echo $str;
	}
	
	
	function cascading_dropdown($field1,$field2,$table,$condition,$name)
	{
			
			echo"<select name='$name' id='$name'>";
			$ans=$this->select("$field1,$field2",$table,$condition);
			print_r($ans);
			if($ans=="no")
			{
				echo"<option>No data</option>";
			}
			else
			{
				echo "<option value=''>Select</option>";
					
				foreach($ans as $k => $value)
				{
					
					echo "<option value=".$value->$field1.">".$value->$field2."</option>";
				}
			}
			echo "</select>";
	}
	
	public function dropdown_selected($field1,$field2,$table,$condition,$name,$s_field1,$s_field2,$s_table1,$s_table2,$s_condition)
	{
			$ans1=$this->select("$s_field1,$s_field2","$s_table1,$s_table2",$s_condition);
			foreach($ans1 as $res)
			{
			$selected=$res->$field1;
			}
			$selected;
			$ans=$this->select("$field1,$field2",$table,$condition);
			echo"<select name='$name'class='styledselect_form_5' id='$name'>";
			//print_r($ans);
			if($ans=="no")
			{
				echo"<option>No data</option>";
			}
			else
			{	
				foreach($ans as $value)
				{
					$data1=$value->$field1;
					$data2=$value->$field2;
					if($data1 == $selected)
					{
						echo "<option value='$data1' selected='selected'>$data2</option>";
					}
					else
					{
						echo "<option value='$data1'>$data2</option>";
					}
					
				}
			}
			echo "</select>";
	}
	
	public function select_box($field1,$field2,$table,$condition,$name,$class)
	{
		$str = "<select name='".$name."[]' id='$name' multiple='multiple' size='5' class='$class'>";
		
		$ans = $this->select("$field1,$field2",$table,$condition);
		
		//pre($ans);
		
		if($ans == "no")
		{
			$str.="<option value=''>No Records</option>";
		}
		else
		{
			//pre($ans);
			foreach($ans as $val)
			{
				$data1 = $val->$field2;
				$data2 = $val->$field1;
				$str.="<option value='$data2'>$data1</option>";
			}
		}
		
		$str.="</select>";
		
		echo  $str;
	}
	
	public function select_box_selected($field1,$field2,$table,$condition,$name,$s_field1,$s_field2,$s_table1,$s_table2,$s_condition,$class)
	{
			$ans1=$this->select("$s_field1,$s_field2","$s_table1,$s_table2",$s_condition,$class);
			foreach($ans1 as $res)
			{
				//print_r($res);
				$selected=$res->$field1;
			}
			$selected;
			$ans=$this->select("$field1,$field2",$table,$condition);
			echo"<select name='$name' multiple='multiple' class='$class' size='5 id='$name'>";
			//print_r($ans);
			if($ans=="no")
			{
				echo"<option>No data</option>";
			}
			else
			{	
				foreach($ans as $value)
				{
					$data1=$value->$field1;
					$data2=$value->$field2;
					if($data1 == $selected)
					{
						echo "<option value='$data1' selected='selected'>$data2</option>";
					}
					else
					{
						echo "<option value='$data1'>$data2</option>";
					}
					
				}
			}
			echo "</select>";
	}		
}
?>