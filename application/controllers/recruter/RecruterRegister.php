<?php
defined('BASEPATH') OR exit('No direct script access allowed');


	class RecruterRegister extends CI_Controller
	{

		public function __construct()
		{
			parent::__construct();
			$this->load->model("recruter/RecruterRegisterModel","rrm");
		}

		public function recruter()
		{
			$this->load->view("user/pages-register");
		}

		public function RecruterReg()
		{

		$img=$_FILES['profilepic']['name'];
		copy($_FILES['profilepic']['tmp_name'],"C:/xampp/htdocs/6th/engiworks/resources/user/images/recruterprofile/".$img) or die("image cannot been uplode");
/*		print_r($img);
		die();*/
		$data=array(
			"RecruterPic"=>$img,
			"RecruterName"=> $this->input->post("RecruterName"),
			"RecruterEmail"=> $this->input->post("Email"),
			"RecruterContact"=> $this->input->post("Contact"),
			"RecruterAdd"=> $this->input->post("address"),
			"password"=> $this->input->post("password")
		);

				$this->rrm->insertmodel($data);
				redirect("recruter/RecruterRegister/recruter");
		}
	}

?>
