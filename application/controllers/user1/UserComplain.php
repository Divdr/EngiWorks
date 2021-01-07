<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class UserComplain extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model("user/UserComplainModel","ucm");
		if(!isset($_SESSION['email']))
		{
			redirect("user/UserLogin/loadUserLogin");
		}
	
	}

	public function ComplainPage()
	{
		$engiinfo=$this->ucm->DisplayFreelancerData();

		$temp=array(
			"engidata"=>$engiinfo
		);
		$this->load->view("user/page-complain",$temp);
	}

	public function PostComplain()
	{
		$data=array(
			"Complain"=>$this->input->post("CReason"),
			"ReceiverID"=>$this->input->post("CName"),
			"SenderID"=>$_SESSION['engiid ']
		);

		$this->ucm->InsertComplain($data);
		redirect("user/HireoCnt/afterlogin");

	}
}
?>