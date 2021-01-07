<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class UserComplainModel extends CI_Model
{
	
	public function InsertComplain($data)
	{
		$this->db->insert("tblcomplaints",$data);
	}

	public function DisplayFreelancerData()
	{
		return $this->db->get("tblengireg")->result();
	}
}

?>