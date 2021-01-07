<?php
defined('BASEPATH') OR exit('No direct script access allowed');

	class AdminDisplayUserModel extends CI_Model
	{
		public function getAllUser()
		{
			/*return $this->db->get("tblengireg")->result()*/
			return $this->db->from("tblengireg er")->join("tblcity c","c.CityID=er.CityID")->get()->result();
		}
		public function toggleUserStatus($data,$where)
		{
			$this->db->where($where)->update("tblengireg",$data);
		}
		public function getAllCountry()
		{
			return $this->db->get("tblcountry")->result();
		}
		public function getAllState()
		{
			return $this->db->get("tblstate")->result();
		}
		public function getAllCity()
		{
			return $this->db->get("tblcity")->result();
		}


		
	}
?>