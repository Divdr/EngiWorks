<?php
defined('BASEPATH') OR exit('No direct script access allowed');


	class AdminCity extends CI_Controller
	{
		public function __construct()
		{
			parent::__construct();
			$this->load->model("admin/AdminCityModel","acim");
			if (!isset($_SESSION['AdminName'])) 
				redirect("admin/admin/loadlogin");

		}

		public function index()
		{
			$cityinfo=$this->acim->GetAllCity();
			$temp=array(
				"citydata"=>$cityinfo
			);

			if (!isset($_SESSION['AdminName'])) 
				redirect("admin/admin/loadlogin");
			else
				$this->load->view("admin/DisplayCity",$temp);



		}

		public function displaycity($id)
		{
			$where=array(
				"s.StateID"=>$id
			);

			$cityinfo=$this->acim->DisplayCityByID($where);
			$data=array(
				"StateID"=>$id,
				"CityName"=>$cityinfo
			);

			$this->load->view("admin/DisplayCity",$data);
			if (!isset($_SESSION['AdminName'])) 
				redirect("admin/admin/loadlogin");

		}

		public function insertcity($id)
		{
			$data=array("StateID"=>$id);
			$this->load->view("admin/InsertCity",$data);	
		}

		public function insertcitydata($id)
		{
			$data=array(
				"StateID"=>$id,
				"CityName"=>$this->input->post("txtcityname")
			);

			$city=$this->acim->insertcitydata($data);
			redirect("admin/AdminCity/displaycity/".$id);
			// $this->load->view("admin/DisplayCity",$id);
		}

		public function LoadUpdateCityByID($id)
		{
			$data=array(
				"CityID"=>$id
			);

			$cityinfo=$this->acim->GetCityById($data);
			$temp=array("citydata"=>$cityinfo);
			$this->load->view("admin/UpdateCity",$temp);			
		}

		public function UpdateCityData($id,$ciid)
		{
			$where=array("CityID"=>$id);
			$data=array("CityName"=>$this->input->post("txtcityname"));

			$upcidata=$this->acim->UpdateCity($data,$where);
			redirect("admin/AdminCity/displaycity/".$ciid);
		}


	}

?>
