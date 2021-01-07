<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class EngiJobPage extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model("recruter/RecruterRegisterModel","rrm");
	}


	public function index()
	{
		
		$this->load->view("user/browse-companies");		
	}

	public function displaycompanies()
	{
		$recinfo=$this->rrm->DisplayCompanyModel();

		$temp=array(
			"recinfo"=>$recinfo
		);


		if (isset($_SESSION['email'])) 
		{
			
			$this->load->view("user/browse-companies",$temp);		
		}
		else
		{
			redirect("user/UserLogin/loadUserLogin");
		}
	}


}
?>