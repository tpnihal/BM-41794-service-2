<?php
class Login extends CI_Controller
{
	public function service()
	{
		if(isset($_REQUEST['username']) && isset($_REQUEST['password']))	
		{
		$user['vchar_email']=$this->input->get_post('username');
		$user['vchr_password']=$this->input->get_post('password');
		
		$this->load->model('LoginModel');
		$result= $this->LoginModel->logmdl($user);
		$msg[]=$result;

		//$msg=array("response code"=>"200","msg"=>"success");
		}

			else
			 {
				$msg=array("response code"=>"404","msg"=>"no data");
			 }
		echo json_encode($msg);
	}
}
	
?>