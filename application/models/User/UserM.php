<?php

class UserM extends CI_Model
{

	public function getAllCities(){
		return $this->db->get("tblcity")->result();
	}

	public function register_user($data){
		$this->db->insert("tbluser",$data);
		return $this->db->insert_id();
	}

	public function register_recruter($data){
		$this->db->insert("tblrecruterreg",$data);
	}

	public function register_engineer($data){
		$this->db->insert("tblengireg",$data);
	}

	public function checkValidUser($data){
		return $this->db->where($data)->get("tbluser")->result()[0];
	}

	public function getUserData($id,$type){
		if($type==1){
			$tbl="tblrecruterreg u";
		}
		if($type==2){
			$tbl="tblengireg u";
		}
		return $this->db->where("u.UserId",$id)->from($tbl)->join("tblcity c","c.CityID=u.CityID")->get()->result()[0];
	}

	public function postReview($data){
		$this->db->insert("tblreview",$data);

	}

	public function getAllReviews($uid){
		return $this->db->from("tblreview r")->where("r.ToUserID",$uid)->join("tbluser u","u.UserID=r.FromUserID")->get()->result();
	}

	public function postComplain($data){
		$this->db->insert("tblcomplaints",$data);
	}

	public function getUserType($uid){
		return $this->db->where("UserID",$uid)->get("tbluser")->result()[0];
	}

	public function changeProfilePic($img){
		$type=$_SESSION['UTP'];
		if($type==1){
			$tbl="tblrecruterreg";
			$field="RecruterPic";
		}
		else{
			$tbl="tblengireg";
			$field="profilepic";
		}
		$this->db->where("UserId",$_SESSION['UID'])->set($field,$img)->update($tbl);

		$this->db->where("UserID",$_SESSION['UID'])->set("ProfilePic",$img)->update("tbluser");
	}

	public function changePassword($pass){
		$type=$_SESSION['UTP'];
		if($type==1){
			$tbl="tblrecruterreg";
		}
		else{
			$tbl="tblengireg";
		}
		$this->db->where("UserId",$_SESSION['UID'])->set("password",$pass)->update($tbl);

		$this->db->where("UserID",$_SESSION['UID'])->set("Password",$pass)->update("tbluser");

		return true;
	}

	public function updateUser($data,$usrData){
		$type=$_SESSION['UTP'];
		if($type==1){
			$tbl="tblrecruterreg";
		}
		else{
			$tbl="tblengireg";
		}
		$this->db->where("UserID",$_SESSION['UID'])->set($data)->update($tbl);

		$this->db->where("UserID",$_SESSION['UID'])->set($usrData)->update("tbluser");
	}
	
}

?>