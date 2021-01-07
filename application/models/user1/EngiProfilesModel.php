<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class EngiProfilesModel extends CI_Model
{
	public function DisplayEngineersModel()
	{
		return $this->db->get("tblengireg")->result();
	} 

	public function DisplayCatagory()
	{
		return $this->db->get("tblcategory")->result();
	} 

	public function UpdateEngineersModel($data)
	{
		return $this->db->where($data)->get("tblengireg")->result();
	}
	public function updateEngiNameModel($data,$where)
		{
			return $this->db->where($where)->update("tblengireg",$data);
		}

	public function updateEngiQualModel($data,$where)
		{
			return $this->db->where($where)->update("tblengireg",$data);
		}

	public function updateEngiBiosModel($data,$where)
		{
			return $this->db->where($where)->update("tblengireg",$data);
		}

	public function getAllCat()
	{
		/*return $this->db->get("tblengireg")->result()*/
		return $this->db->from("tblengireg er")->join("tblcategory c","c.CategoryID=er.catagories")->get()->result();
	}

	
}
?>