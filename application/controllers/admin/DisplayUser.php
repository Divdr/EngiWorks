<?php
defined('BASEPATH') OR exit('No direct script access allowed');


	class DisplayUser extends CI_Controller
	{
		public function __construct()
		{
			parent::__construct();
			$this->load->model("admin/AdminDisplayUserModel","adum");
		}
		public function index()
		{
			$user=$this->adum->getAllUser();

			
			$temp=array("userdata"=>$user,);

			$this->load->view("admin/DisplayUserdata",$temp);
			
			if (!isset($_SESSION['AdminName'])) 	
				redirect("admin/admin/loadlogin");

		}
				public function toggalstatus($id,$status)
		{
			$newStatus=1-$status;
			$data=array(
					"Status"=>$newStatus
				);

			$where= array(
					"engiid"=>$id
				);

			$this->adum->toggleUserStatus($data,$where);
			redirect("admin/DisplayUser/index");
		}

	}
?>