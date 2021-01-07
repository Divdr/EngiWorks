<?php
defined('BASEPATH') OR exit('No direct script access allowed');

	class AdminLogin extends CI_Controller
	{
		public function __construct()
		{
			parent:: __construct();
			$this->load->model("admin/adminmodel","am");
			$this->load->model("admin/AdminLoginModel","alm");

		}

		public function index()
		{
			$catinfo=$this->am->getAllCat();

			$temp=array(
				'cates'=>$catinfo,
				"AdminName"=>$_SESSION['AdminName']
			);	
			
			if (isset($_SESSION['AdminName'])) 
				$this->load->view("admin/displaydata",$temp);
			else
				redirect("admin/admin/loadlogin");

		}

		public function loadlogin()
		{
			if (!isset($_SESSION['AdminId'])) 
				$this->load->view("admin/auth-sign-in-social");
			else
				redirect("admin/AdminLogin/index");
		}


		public function validateadmin()
		{
			$data=array(
				"AdminName"=>$this->input->post("user-name"),
				"Password"=>$this->input->post("password")
			);

			$log=$this->alm->GetLoginData($data);

			if (count($log)>0) 
			{
				$_SESSION['AdminName']=$log[0]->AdminName;
				$_SESSION['AdminId']=$log[0]->AdminId;

				redirect("admin/admin/index");
			}

			else
			{
				$temp=array("loginerr"=>"invalid username or password");
				$this->load->view("admin/auth-sign-in-social",$temp);
			}
			
		}

		public function logout()
		{
			session_destroy();
			redirect("admin/AdminLogin/loadlogin");
		}

	}
?>