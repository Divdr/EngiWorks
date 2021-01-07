<?php
defined('BASEPATH') OR exit('No direct script access allowed');

	
	class AdminLoginModel extends CI_Model
	{
		
		public function GetLoginData($data)
		{
			return $this->db->where($data)->get("tbladmin")->result();
		}

	}

?>