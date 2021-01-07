<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class UserRegister extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model("user/UserModel","UM");
	}

	public function index()
	{
		$this->load->view("user/user-registration");
	}

	public function insertregdata()
	{

		$img=$_FILES['profilepic']['name'];
		copy($_FILES['profilepic']['tmp_name'],"./resources/user/images/userprofilespics/".$img) or die("image cannot been uplode");
/*		print_r($img);
		die();*/
		$data=array(
			"profilepic"=>$img,
			"enginame"=> $this->input->post("uname"),
			"email"=> $this->input->post("email"),
			"gender"=> $this->input->post("gender"),
			"catagories"=> $this->input->post("selcat"),
			"bios"=>$this->input->post("bios"),
			"city"=> $this->input->post("city"),
			// "bois"=> $this->input->post("bios"),
			"birthdate"=> $this->input->post("badate"),
			"qualification"=> $this->input->post("fields"),
			"experince"=> $this->input->post("selexp"),
			"password"=> $this->input->post("txtpwd")
		);

				$this->UM->insertmodel($data);
				redirect("user/HireoCnt/index");

			
	}

	

}

?>