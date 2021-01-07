<?php
defined('BASEPATH') OR exit('No direct script access allowed');
	

	class SubCategory extends CI_Controller
	{
		public function __construct()
		{
			parent::__construct();
			$this->load->model("admin/SubCategoryModel","scm");
						if (!isset($_SESSION['AdminName'])) 
				redirect("admin/admin/loadlogin");
			
		}

		public function index()
		{
			$info=$this->scm->GetAllSubCat();
			$temp=array(
				"SkillName"=>$info

			);

			$this->load->view("admin/displaysubcategory",$temp);
						if (!isset($_SESSION['AdminName'])) 
				redirect("admin/admin/loadlogin");

		}
		
		public function listincat($id)
		{	
			$where=array(
				"c.CategoryID"=>$id
			);
			$catinfo=$this->scm->GetAllSubCatData($where);
			$data=array(
				"CategoryID"=>$id,
				"SkillName"=>$catinfo
			);
			$this->load->view("admin/displaysubcategory",$data);
		}

		public function InsertPageSubCat($id)
		{
			$data=array("CategoryID"=>$id);

			$this->load->view("admin/InsertSubCategories",$data);
		}

		public function InsertSubCategory($id)
		{
			$data=array(
				"CategoryID"=>$id,
				"SkillName"=>$this->input->post("txtname")
			);

			$SubCategory=$this->scm->InsertSubCategory($data);
			redirect("admin/SubCategory/listincat/".$id);
		}


		public function toggalstatus($id,$status,$cid)
		{
			$newStatus=1-$status;
			$data=array(
					"Status"=>$newStatus
				);

			$where= array(
					"SkillID"=>$id
				);

			$catid=array(
				'CategoryID'=>$cid
			);

			$cateinfo=$this->scm->getCatById($catid);
			$temp=array("catedata"=>$cateinfo);
			$this->scm->toggleCatStatus($data,$where);
			redirect("admin/SubCategory/listincat/".$temp);
		}

		public function deleteSubCatData($id)
		{
			$data=array("SkillID"=>$id);
			$this->scm->deleteSubCat($data);
			echo $data;	
			redirect("admin/SubCategory/index");
		}

		public function LoadSubCatUpdateData($id)
		{
			$data=array(
				'SkillID'=>$id
				// "CategoryName"=>"CategoryName",
				// "Status"=>"Status"
			);

			$catinfo=$this->scm->getSubCatById($data);

			$temp=array("SubCatData"=>$catinfo);
			$this->load->view("admin/UpdateSubCategoryData",$temp);
		}

		public function UpdateSubCatData($id)
		{
			
			$where=array("SkillID"=>$id);
			$data=array(
				"SkillName"=>$this->input->post("txtSubCatName")
			);


			$this->scm->updateSCModel($data,$where);
			redirect("admin/SubCategory/index");
		}

	}
?>