<?php
defined('BASEPATH') OR exit('No direct script access allowed');
	

	class SubCategoryModel extends CI_Model
	{
		
		public function InsertSubCategory($data)
		{
			$this->db->insert("tblskills",$data);
		}

		public function GetAllSubCat()
		{
			return $this->db->get("tblskills")->result();
		}

		public function toggleCatStatus($data,$where)
		{
			$this->db->where($where)->update("tblskills",$data);
		}

			public function getCatById($data)
		{
			return $this->db->where($data)->get("tblskills")->result();
		}

		public function deleteSubCat($data)
		{
			return $this->db->delete("tblskills",$data);
		}

		public function getSubCatById($data)
		{
			return $this->db->where($data)->get("tblskills")->result();
		}

		public function updateSCModel($data,$where)
		{
			return $this->db->where($where)->update("tblskills",$data);
		}


		public function GetAllSubCatData($where)
		{
			return $this->db->from("tblskills s")->join("tblcategory c","c.CategoryID=s.CategoryID")->where($where)->get()->result();
		}
	/*	public function listingstatus($where)
		{
			return $this->db->select("sc.*,c.categoryname")from("tblcategory c")->join("tblsubcategory sc","sc.CategoryID=c.CategoryID")->where($where)->get()->result();
		}
*/
	}
?>