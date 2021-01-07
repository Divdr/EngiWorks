<?php
defined('BASEPATH') OR exit('No direct script access allowed');


	class AdminStateModel extends CI_Model
	{
		public function GetAllState()
		{
			return $this->db->get("tblstate")->result();
		}
		
		public function insertState($data)
		{
			$this->db->insert("tblstate",$data);
		}

		public function GetStatByID($data)
		{
			return $this->db->where($data)->get("tblstate")->result();
		}

		public function UpdateState($data,$where)
		{
			return $this->db->where($where)->update("tblstate",$data);
		}

		public function GetAllStateData($where)
		{
			return $this->db->from("tblstate s")->join("tblcountry c","c.CountryID=s.CountryID")->where($where)->get()->result();
		}
	}
?>