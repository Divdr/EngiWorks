<?php
defined('BASEPATH') OR exit('No direct script access allowed');

	class RecruterLoginModel extends CI_Model
	{
		public function GetRecruterLoginData($data)
		{
			return $this->db->where($data)->get("tblrecruterreg")->result();
		}
	}
?>