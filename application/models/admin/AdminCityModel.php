<?php
defined('BASEPATH') OR exit('No direct script access allowed');


	class AdminCityModel extends CI_Model
	{
		public function GetAllCity()
		{
			return $this->db->get("tblcity")->result();
		}

		public function DisplayCityByID($where)
		{
			return $this->db->from("tblcity c")->join("tblstate s","s.StateID=c.StateID")->where($where)->get()->result();
		}

		public function insertcitydata($data)
		{
			$this->db->insert("tblcity",$data);
		}

		public function GetCityById($data)
		{
			return $this->db->where($data)->get("tblcity")->result();
		}

		public function UpdateCity($data,$where)
		{
			return $this->db->where($where)->update("tblcity",$data);
		}

	}
?>