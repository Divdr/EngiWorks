<?php

class Recruter extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->Model("User/RecruterM","rm");
		$this->load->Model("User/UserM","um");
		$this->load->Model("User/ProjectM","pm");
		if(!isset($_SESSION['UID'])){
			redirect("User/User");
		}
	}

	public function index()
	{
		$rect=$this->rm->getAllRecruters();
		$temp=array(
			"rect"=>$rect
		);
		$this->load->View("User/recruters-list.php",$temp);
	}

	public function loadRecruterProfile($uid){
		$recInfo=$this->um->getUserData($uid,1);
		$recRev=$this->um->getAllReviews($uid);
		$prj=$this->pm->getAllPostedProjects($uid);
		$temp=array(
			"recInfo"=>$recInfo,
			"recRev"=>$recRev,
			"prj"=>$prj
		);
		$this->load->view("User/recruter-profile.php",$temp);
	}
}


?>