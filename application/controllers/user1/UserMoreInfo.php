<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class UserMoreInfo extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model("user/UserMoreInfoModel","umim");

	}
	public function DisplayUserInfo($id)
	{
		$data=array("engiid"=>$id);

		$userinfo=$this->umim->DisplayUserInfo($data);
		$userinf=array(
			"userdata"=>$userinfo
		);

		$this->load->view("user/single-freelancer-profile",$userinf);
	}

}
?>
