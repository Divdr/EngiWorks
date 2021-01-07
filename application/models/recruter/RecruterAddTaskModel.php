<?php
defined('BASEPATH') OR exit('No direct script access allowed');

	class RecruterAddTaskModel extends CI_Model
	{
		public function InsertProject($data)
		{	
			$this->db->insert("tblprojects",$data);
		}

		public function GetAllCat()
		{
			return $this->db->get("tblcategory")->result();
		}

		public function GetAllSubCat()
		{
			return $this->db->get("tblskills")->result();
		}

		public function GetAllCity()
		{
			return $this->db->get("tblcity")->result();	
		}
	}
?>