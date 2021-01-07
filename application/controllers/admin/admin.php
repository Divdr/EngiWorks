<?php
defined('BASEPATH') OR exit('No direct script access allowed');


	class admin extends CI_Controller
	{

		public function __construct()
		{
			parent:: __construct();
			$this->load->model("admin/adminmodel","am");
			$this->load->model("admin/AdminLoginModel","alm");
			$this->load->model("admin/SubCategoryModel","scm");
		}



		public function index()
		{
			$catinfo=$this->am->getAllCat();

			$temp=array(
				'cates'=>$catinfo,
				"AdminName"=>$_SESSION['AdminName']
			);	
			
			if (!isset($_SESSION['AdminName'])) 
				redirect("admin/admin/loadlogin");
			else
				$this->load->view("admin/displaydata",$temp);

		}

		public function loadlogin()
		{
			if (isset($_SESSION['AdminId'])) 
				redirect("AdminLogin/index");
			else
				$this->load->view("admin/auth-sign-in-social");
		}

		public function insertpage()
		{
			$this->load->view("admin/insertcategories");
		}


		public function insertcat()
		{
			$data=array(
				"CategoryName"=>$this->input->post("txtname"),
				"Status"=>$this->input->post("txtstatus")
			);

			$this->am->insertcatagory($data);
			redirect("admin/admin/index");
		}

		public function deletedata($id)
		{
			$data=array("CategoryID"=>$id);
			$this->am->deleteCat($data);
			
			redirect("admin/admin/index");
		}

		public function loadupdatedata($id)
		{
			$data=array(
				'CategoryID'=>$id
				// "CategoryName"=>"CategoryName",
				// "Status"=>"Status"
			);

			$catinfo=$this->am->getCatById($data);

			$temp=array("catdata"=>$catinfo);
			$this->load->view("admin/UpdateCategory",$temp);
		}

		public function toggalstatus($id,$status)
		{
			$newStatus=1-$status;
			$data=array(
					"Status"=>$newStatus
				);

			$where= array(
					"CategoryID"=>$id
				);

			$this->am->toggleCatStatus($data,$where);
			redirect("admin/admin/index");
		}

		public function updatedata($id)
		{
			
			$where=array("CategoryID"=>$id);
			$data=array(
				"CategoryName"=>$this->input->post("txtname"),
				"Status"=>$this->input->post("txtstatus")
			);


			$this->am->updateCModel($data,$where);
			redirect("admin/admin/index");
		}

		/*public function loadAllCategory()
		{
			$info=$this->am->getAllCat();
			$temp=array(
				"cat"=>$info
			);
			$this->load->view("admin/displaycate")
		}*/
		public function listincat($id)
		{	
			$where=array(
				"c.CategoryID"=>$id
			);
			$catinfo=$this->scm->listingstatus($where);
			$data=array(
				"SubCategoryName"=>$catinfo
			);
			$this->load->view("admin/displaysubcategory",$data);
		}	

		public function listProjects(){
			$prj=$this->am->displayAllProjects();
			$temp=array(
				"prj"=>$prj
			);
			$this->load->view("admin/displayprojects.php",$temp);
		}

		public function listComplains(){
			$cmp=$this->am->displayAllComplaits();
			$temp=array(
				"cmp"=>$cmp
			);
			$this->load->view("admin/displaycomplaints.php",$temp);
		}	
	} 	

?>
