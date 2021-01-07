<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class RecruterRegisterModel extends CI_Model
{
	public function insertmodel($data)
	{
		$this->db->insert("tblrecruterreg",$data);
	}
	public function DisplayCompanyModel()
	{
		return $this->db->get("tblrecruterreg")->result();
	} 
}
?>