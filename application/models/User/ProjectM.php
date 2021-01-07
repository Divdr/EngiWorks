<?php

class ProjectM extends CI_Model
{
	public function getAllProjects(){
		return $this->db->where("Status",0)->get("tblprojects")->result();
	}

	public function getProjectInfo($pid){
		return $this->db->where("p.ProjectID",$pid)->from("tblprojects p")->join("tbluser u","u.UserID=p.UserID")->join("tblsubcategory s","s.SubCatID=p.SubCategoryID")->join("tblcategory ct","ct.CategoryID=s.CategoryID")->get()->result()[0];
	}

	public function getAllCategories(){
		return $this->db->get("tblcategory")->result();
	}

	public function getSubCatByID($catId){
		return $this->db->where("CategoryID",$catId)->get("tblsubcategory")->result();
	}

	public function postProject($data){
		$this->db->insert("tblprojects",$data);
	}

	public function getAllPostedProjects($uid=null){
		if(!isset($uid))
			$uid=$_SESSION['UID'];
		return $this->db->where("UserID",$uid)->get("tblprojects")->result();
	}

	public function removePostedProject($pid){
		$this->db->where("ProjectID",$pid)->delete("tblprojects");
	}

	public function postBid($data){
		$this->db->insert("tblprojectbid",$data);
	}

	public function getProjectBids($pid){
		return $this->db->where("pb.ProjectID",$pid)->from("tblprojectbid pb")->join("tbluser u","u.UserID=pb.UserID")->get()->result();
	}

	public function assignProject($data){
		$this->db->insert("tblprojectassign",$data);
	}

	public function blockBidOfProject($prjId){
		$this->db->where("ProjectID",$prjId)->set("Status",1)->update("tblprojectbid");
	}

	public function blockProject($prjId){
		$this->db->where("ProjectID",$prjId)->set("Status",1)->update("tblprojects");
	}

	public function checkProjectStatus($prjId){
		$val=$this->db->where("ProjectID",$prjId)->where("Status",0)->get("tblprojects")->num_rows();
		if($val==1)
			return true;
		else
			return false;
	}

	public function getProjectWorkerInfo($prjId){
		return $this->db->where("pa.ProjectID",$prjId)->from("tblprojectassign pa")->join("tbluser u","u.UserID=pa.UserID")->get()->result()[0];
	}

	public function getPostedBids($uid){
		return $this->db->where("pb.UserID",$uid)->where("pb.Status",0)->from("tblprojectbid pb")->join("tblprojects p","p.ProjectID=pb.ProjectID")->join("tbluser u","u.UserID=p.UserID")->get()->result();
	}

	public function removeBid($pbId){
		$this->db->where("ProjectBidID",$pbId)->delete("tblprojectbid");
	}

}

?>