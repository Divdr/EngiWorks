<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class UserMoreInfoModel extends CI_Model
{
	public function DisplayUserInfo($data)
	{
		return $this->db->where($data)->get("tblengireg")->result();
		
	}
}
?>