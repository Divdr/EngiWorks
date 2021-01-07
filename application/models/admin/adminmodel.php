<?php
defined('BASEPATH') OR exit('No direct script access allowed');
	

	class adminmodel extends CI_Model
	{
		public function insertcatagory($data)
		{
			$this->db->insert("tblcategory",$data);
		}

		public function getAllCat()
		{
			return $this->db->get("tblcategory")->result();
		}

		public function GetAllSubCat()
		{
			return $this->db->get("tblsubcategory")->result();
		}


		public function toggleCatStatus($data,$where)
		{
			$this->db->where($where)->update("tblcategory",$data);
		}

		public function deleteCat($data)
		{
			return $this->db->delete("tblcategory",$data);
		}

		public function getCatById($data)
		{
			return $this->db->where($data)->get("tblcategory")->result();
		}


		public function updateCModel($data,$where)
		{
			return $this->db->where($where)->update("tblcategory",$data);
		}

		/*public function listingstatus($where)
		{
		\	return $this->db->select("sc.*,c.categoryname")from("tblcategory c")->join("tblsubcategory sc","sc.CategoryID=c.CategoryID")->where($where)->get()->result();
		}



*/

		public function displayAllProjects(){
			return $this->db->get("tblprojects")->result();
		}

		public function displayAllComplaits(){
			return $this->db->from("tblcomplaints c")->join("tbluser u","u.UserID=c.ReceiverID")->get()->result();
		}
	

	}



?>