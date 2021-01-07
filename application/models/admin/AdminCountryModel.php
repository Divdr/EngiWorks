<?php
defined('BASEPATH') OR exit('No direct script access allowed');
	

	class AdminCountryModel extends CI_Model
	{

		public function getAllCountry()
		{
			return $this->db->get("tblcountry")->result();
		}

		public function insertcountry($data)
		{
			$this->db->insert("tblcountry",$data);
		}

		public function deletecountry($data)
		{
			return $this->db->delete("tblcountry",$data);
		}

		public function getCoByID($data)
		{
			return $this->db->where($data)->get("tblcountry")->result();
		}

		public function updatecountry($data,$where)
		{
			return $this->db->where($where)->update("tblcountry",$data);
		}

	}
?>