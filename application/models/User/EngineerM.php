<?php

class EngineerM extends CI_Model
{
	public function getAllEngineers(){
		return $this->db->from("tblengireg e")->join("tbluser u","u.UserID=e.UserId")->join("tblcity c","e.CityID=c.CityID")->get()->result();
	}

	public function getAllWorkingProjects($uid){
		return $this->db->where("pa.UserID",$uid)->from("tblprojectassign pa")->join("tblprojects p","p.ProjectID=pa.ProjectID")->join("tbluser u","u.UserID=p.UserID")->get()->result();
	}
}

?>