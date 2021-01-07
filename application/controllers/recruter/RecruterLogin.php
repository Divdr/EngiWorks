<?php
defined('BASEPATH') OR exit('No direct script access allowed');

	class RecruterLogin extends CI_Controller
	{
		public function __construct()
		{
			parent::__construct();
			$this->load->model("recruter/RecruterLoginModel","rlm");
		}

		public function RecruterLoginPage()
		{
			$this->load->view("user/page-recruterlogin");

			/*if (!isset($_SESSION['RecruterEmail'])) 
				redirect("user/UserLogin/loadUserLogin");
			else 
				$this->load->view("recruter/master",$temp);	*/
		}

		public function validaterecruter()
		{
			$data=array(
				"RecruterEmail"=>$this->input->post("emailaddress"),
				"password"=>$this->input->post("password")
			);

			$log=$this->rlm->GetRecruterLoginData($data);

			if(count($log)>0)
			{
				$_SESSION['RecruterName']=$log[0]->RecruterName;
				$_SESSION['RecruterId']=$log[0]->RecruterId;
				$_SESSION['RecruterPic']=$log[0]->RecruterPic;
				$_SESSION['RecruterEmail']=$log[0]->RecruterEmail;

				redirect("recruter/RecruterHome/master");

			}
			else
			{
				$temp=array("flogerr"=>"Invalid Username or Password");
				$this->load->view("user/page-recruterlogin",$temp);
			}

		}

		public function LoadRecruterLogin()
		{

			if (!isset($_SESSION['RecruterEmail'])) 
				redirect("user/UserLogin/loadUserLogin");
			else 
				$this->load->view("recruter/master",$temp);	
		}

		public function RecruterLogout()
		{
			session_destroy();
			redirect("recruter/RecruterLogin/LoadRecruterLogin/");
		}

	}
?>