
<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class UserLogin extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model("user/UserModel","UM");
		$this->load->model("user/UserLoginModel","ULM");
	}

	public function index()
	{
		$temp=array(
			"email"=>$_SESSION['email']
		);

		if (isset($_SESSION['email'])) 
		{
			$this->load->view("user/master",$temp);
		}
		else
		{
			redirect("user/UserLogin/loadUserLogin");
		}
	}

	public function loadUserLogin()
	{
		if (!isset($_SESSION['engiid'])) 
		
			$this->load->view("user/pages-login");
		
		else
		{
			redirect("user/HireoCnt/afterlogin");
		}
	}
	
	public function validateuser()
	{
		$data=array(
			"email"=>$this->input->post("emailaddress"),
			"password"=>$this->input->post("password")
		);

		$ulogin=$this->ULM->GetUserLoginData($data);


		if(count($ulogin)>0)
		{
			$_SESSION['email']=$ulogin[0]->email;
			$_SESSION['engiid ']=$ulogin[0]->engiid ;
			$_SESSION['profilepic']=$ulogin[0]->profilepic;
			$_SESSION['enginame']=$ulogin[0]->enginame;



			redirect("user/HireoCnt/afterlogin/");
		}

		else
		{
			$temp=array("ulogerr"=>"incalid username or password");
			$this->load->view("user/pages-login",$temp);
		}
	}

	public function ulogout()
	{
		session_destroy();
		redirect("user/UserLogin/loadUserLogin/");
	}


}

?>