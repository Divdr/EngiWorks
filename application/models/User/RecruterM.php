<?php

class RecruterM extends CI_Model
{
	public function getAllRecruters(){
		return $this->db->from("tblrecruterreg r")->join("tbluser u","u.UserID=r.UserId")->join("tblcity c","r.CityID=c.CityID")->get()->result();
	}
}

?>