<?php
defined('BASEPATH') OR exit('No direct script access allowed');

	class RecruterAddTask extends CI_Controller
	{

		public function __construct()
		{
			parent:: __construct();
			$this->load->model("recruter/RecruterAddTaskModel","ratm");
		}
		public function PostTaskPage()
		{
			$category=$this->ratm->GetAllCat();
			$skills=$this->ratm->GetAllSubCat();
			$city=$this->ratm->GetAllCity();

			$temp=array(
				"category"=>$category,
				"skills"=>$skills,
				"city"=>$city
			);

				$this->load->view("recruter/dashboard-post-a-task",$temp);
		}

		
		public function PostTask()
		{
			$file=$_FILES['ProtDtls']['name'];
			copy($_FILES['ProtDtls']['tmp_name'],"C:/xampp/htdocs/6th/engiworks/resources/user/images/RecruterTasksUpload/".$file) or die("the file not uploaded");

			$data=array(
				"Title"=>$this->input->post("PName"),
				"Duration"=>$this->input->post("Duration"),
				"StartingDate"=>$this->input->post("PSdate"),
				"EndingDate"=>$this->input->post("PEdate"),
				"UserID"=>$_SESSION['RecruterId'],
				"Status"=>$this->input->post("Status"),
				"Rate"=>$this->input->post("Budget"),
				"NoOfHoursPerDay"=>$this->input->post("WHours"),
				"Document"=>$file,
				"URL"=>$this->input->post("URL")
			);

			$this->ratm->InsertProject($data);
			redirect("recruter/RecruterHome/master");
		}
	}
?>