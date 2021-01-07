<?php
defined('BASEPATH') OR exit('No direct script access allowed');

	class RecruterHome extends CI_Controller
	{
		public function master()
		{
			if (!isset($_SESSION['RecruterEmail'])) 
				redirect("user/UserLogin/loadUserLogin");
			else 
				$this->load->view("recruter/master");	
		}

		public function afterlogin()
		{	
			$temp=array(
				"RecruterEmail"=>$_SESSION['RecruterEmail'],
				"RecruterPic"=>$_SESSION['RecruterPic'],
				"RecruterId"=>$_SESSION['RecruterId'],
				"RecruterName"=>$_SESSION['RecruterName']

			); 


			if (!isset($_SESSION['RecruterEmail'])) 
				redirect("user/UserLogin/loadUserLogin");
			else 
				$this->load->view("recruter/master",$temp);	
		}

		public function loadUserLogin()
		{
			if (!isset($_SESSION['RecruterEmail'])) 

				$this->load->view("user/pages-recruterlogin");

			else
			{
				redirect("user/HireoCnt/afterlogin");
			}
		}

	}
?>