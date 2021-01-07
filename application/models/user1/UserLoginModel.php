<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class UserLoginModel extends CI_Model
{
	public function GetUserLoginData($data)
	{
		return $this->db->where($data)->get("tblengireg")->result();
	}
	
}

?>