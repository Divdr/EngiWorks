<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class UserModel extends CI_Model
{
	public function insertmodel($data)
	{
		$this->db->insert("tblengireg",$data);
	}
	public function DisplayCitylist()
	{
		return $this->db->get("tblcity")->result();
	}
	public function DisplayStatelist()
	{
		return $this->db->get("tblstate")->result();
	}
	public function DisplayCountrylist()
	{
		return $this->db->get("tblcountry")->result();
	}
	public function DisplayCategoey()
	{
		return $this->db->get("tblcategory")->result();	
	}

	public function DisplaySubCategory()
	{
		return $this->db->get("tblskills")->result();		
	}
	public function getCiByName($data)
	{
		return $this->db->where($data)->get("tblcity")->result();
	}
	public function GetUserLoginData($data)
	{
		return $this->db->where($data)->get("tblengireg")->result();
	}
}


?>