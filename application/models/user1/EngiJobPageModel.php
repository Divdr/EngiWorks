<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class EngiJobPageModel extends CI_Model
{
	public function insertdata($data)
	{
		$this->db->insert("tblrecruter",$data);
	}
	
}
?>