<?php

class LoginModel extends CI_Model
{
	public function logmdl($usercopy) //usercopy means copy array frm login user array
	{
		// $msg = array("name"=>$usercopy['vchar_email'],"password"=>$usercopy['vchr_password']);
		 // return $msg;
		$result=$this->db->select('*')
		->from('userdt')
		->where($usercopy)
		->get();
		
		if($result->num_rows()==1)
		{
			$row=$result->result_array();
			$row[0]["Response code"]="200";
			$row[0]["msg"]="success";
		}

		else if($result->num_rows()==1)
			{
										/*$result=$this->db->select('*')
												->from('userdt')
												->where('vchar_email',$usercopy['vchr_email'])
												->get();*/
		
		    $row=$result->result_array();
		    $row[0]['Response code']="500";
		    $row[0]["msg"]="password error";
			}

		else
		{
			$row=array("Responsecode"=>"404","msg"=>"User not found");
		}
			
			return $row;
	}
	
}
?>