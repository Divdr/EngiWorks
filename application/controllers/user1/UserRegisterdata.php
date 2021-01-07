<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class UserLogin extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model("user/UserModel","UM");
	}
	
	public function index()
	{
		$city=$this->UM->DisplayCitylist();
		$state=$this->UM->DisplayStatelist();
		$country=$this->UM->DisplayCountrylist();
		$temp=array(
			"citydata"=>$city,
			"statedata"=>$state,
			"countrydata"=>$country
		);

		$this->load->view("user/user-registration",$temp);
	}



}