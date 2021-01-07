<?php
defined('BASEPATH') OR exit('No direct script access allowed');


	class AdminState extends CI_Controller
	{

		public function __construct()
		{
			parent::__construct();
			$this->load->model("admin/AdminStateModel","asm");
		}

		public function index()
		{
			$stateinfo=$this->asm->GetAllState();

			$temp=array(
				'state'=>$stateinfo
			);

			$this->load->view("admin/displaystate",$temp);
			if (!isset($_SESSION['AdminName'])) 
				redirect("admin/admin/loadlogin");

		}


		public function displaystate($id)
		{
			$where=array(
				"c.CountryID"=>$id
			);

			$coinfo=$this->asm->GetAllStateData($where);
			$data=array(
				"CountryID"=>$id,
				"StateName"=>$coinfo
			);

			$this->load->view("admin/displaystate",$data);
		}

		public function insertpage($id)
		{
			$data=array("CountryID"=>$id);
			$this->load->view("admin/InsertState",$data);
		}

		public function insertstatedata($id)
		{
			$data=array(
				"CountryID"=>$id,
				"StateName"=>$this->input->post("txtstatname")
			);	

			$state=$this->asm->insertState($data);
			redirect("admin/AdminState/displaystate/".$id);

		}

		public function GetStateByID($id)
		{
			$data=array(
				"StateID"=>$id
			);

			$stateinfo=$this->asm->GetStatByID($data);
			$temp=array("statdata"=>$stateinfo);
			$this->load->view("admin/UpdateState",$temp);

		}

		public function UpdateStateData($id,$cid)
		{
			$where=array(
				"StateID"=>$id
			);

			$data=array(
				"StateName"=>$this->input->post("txtstatname")
			);

			$upstdata=$this->asm->UpdateState($data,$where);
			redirect("admin/AdminState/displaystate/".$cid);
		}
	}


?>
<!-- 
		public function DisplayIDState()
		{
			
			$this->load->view("admin/displaystate");
		} 
-->