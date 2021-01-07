<?php
defined('BASEPATH') OR exit('No direct script access allowed');


	class AdminCountry extends CI_Controller
	{

		public function __construct()
		{
			parent::__construct();
			$this->load->model("admin/AdminCountryModel","acm");
			if (!isset($_SESSION['AdminName'])) 
				redirect("admin/admin/loadlogin");
		}

		public function index()
		{
			$country=$this->acm->getAllCountry();

			$temp=array(
				"countrydata"=>$country
			);

			$this->load->view("admin/DisplayCountry",$temp);
			
			
		}

		public function insertcountrypage()
		{
			$this->load->view("admin/InsertCountry");
		}

		public function insertcountrydata()
		{
			$data=array(
				"countryname"=>$this->input->post("txtconame")
			);

			$country=$this->acm->insertcountry($data);
			redirect("admin/AdminCountry/index");
		}



		public function getcountryID($id)
		{
			$data=array(
				"CountryID"=>$id
			);

			$coinfo=$this->acm->getCoByID($data);
			$temp=array("codata"=>$coinfo);
			$this->load->view("admin/UpdateCountry",$temp);

		}


		public function updatecountrydata($id)
		{
			$where=array(
				"CountryID"=>$id
			);

			$data=array(
				"countryname"=>$this->input->post("txtconame")
			);

			$upcodata=$this->acm->updatecountry($data,$where);
			redirect("admin/AdminCountry/index");
		}
	}
?>








	<!-- 	public function deletecountry($id)
		{
			$data=array("CountryID"=>$id);
			$this->acm->deletecountry($data);
			redirect("admin/AdminCountry/index");
		} -->