<?php

class Engineer extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->Model("User/EngineerM","em");
		$this->load->Model("User/UserM","um");
		if(!isset($_SESSION['UID'])){
			redirect("User/User");
		}
	}

	public function index()
	{
		$eng=$this->em->getAllEngineers();
		$temp=array(
			"eng"=>$eng
		);
		$this->load->View("User/engineers-list.php",$temp);
	}

	public function loadEngineerProfile($uid){
		$engInfo=$this->um->getUserData($uid,2);
		$engRev=$this->um->getAllReviews($uid);
		$wrPrj=$this->em->getAllWorkingProjects($uid);
		$temp=array(
			"engInfo"=>$engInfo,
			"engRev"=>$engRev,	
			"wrPrj"=>$wrPrj
		);
		$this->load->view("User/engineer-profile.php",$temp);
	}
}


?>