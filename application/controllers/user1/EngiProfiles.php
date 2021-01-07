<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class EngiProfiles extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model("user/EngiProfilesModel","epm");
		if (!isset($_SESSION['email'])) 	
			$this->load->view("user/pages-login");
		
	}

	public function index()
	{
		$this->load->view("user/master");
	}

	public function DisplayEngineers()
	{
		$engiinfo=$this->epm->DisplayEngineersModel();

		$temp=array(
			"engiinfo"=>$engiinfo
		);


		if (isset($_SESSION['email'])) 
		{
			$this->load->view("user/freelancers-grid-layout-full-page",$temp);		
		}
		else
		{
			redirect("user/UserLogin/loadUserLogin");
		}
		
	} 

	public function LoadUpdateName()
	{
		$cat=$this->epm->getAllCat();
		$catname=$this->epm->DisplayCatagory();
		
		$data=array(
			"engiid"=>$_SESSION['engiid ']
		);

		$engiinfo=$this->epm->UpdateEngineersModel($data);

		$temp=array(
			"engidata"=>$engiinfo,
			"catinfo"=>$cat,
			"catname"=>$catname
			);


			$this->load->view("user/DashboardSettings",$temp);
		
	}

	public function UpdateNameData()
	{
		$where=array("engiid"=>$_SESSION['engiid ']);
		$data=array(
			"enginame"=>$this->input->post("txt1"),
			"email"=>$this->input->post("txt2")
		);
		$_SESSION['enginame']=$this->input->post("txt1");
		$_SESSION['email']=$this->input->post("txt2");

		$this->epm->updateEngiNameModel($data,$where);
		redirect("user/Hireocnt/afterlogin");

	}

	public function UpdateQualificationData()
	{
		$where=array("engiid"=>$_SESSION['engiid ']);
		$data=array(
			"qualification"=>$this->input->post("qua"),
			"catagories"=>$this->input->post("cat")
		);
		// $_SESSION['enginame']=$this->input->post("txt1");
		// $_SESSION['email']=$this->input->post("txt2");

		$this->epm->updateEngiQualModel($data,$where);
		redirect("user/Hireocnt/afterlogin");

	}



	public function UpdateBiosData()
	{
		$where=array("engiid"=>$_SESSION['engiid ']);
		$data=array(
			"bios"=>$this->input->post("bios"),
			"experince"=>$this->input->post("exp")
		);
		// $_SESSION['enginame']=$this->input->post("txt1");
		// $_SESSION['email']=$this->input->post("txt2");

		$this->epm->updateEngiBiosModel($data,$where);
		redirect("user/Hireocnt/afterlogin");
		
	}

	
}
?>