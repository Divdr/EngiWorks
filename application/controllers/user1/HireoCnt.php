<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class HireoCnt extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model("user/UserModel","UM");
	}


	public function index()
	{
		/*$city=$this->UM->getCiByName($data);*/



		$city=$this->UM->DisplayCitylist();
		$state=$this->UM->DisplayStatelist();
		$country=$this->UM->DisplayCountrylist();
		$category=$this->UM->DisplayCategoey();
		$subcategory=$this->UM->DisplaySubCategory();
		$temp=array(
			"citydata"=>$city,
			"statedata"=>$state,
			"countrydata"=>$country,
			"categorydata"=>$category,
			"subcategorydata"=>$subcategory
		);

/*		if (!isset($_SESSION['email'])) 
			redirect("user/UserLogin/loadUserLogin");
*/
			$this->load->view("user/user-registration",$temp);
				//redirect("user/UserLogin/loadUserLogin");
		//	$this->load->view("admin/displaydata",$temp);

	}

	public function afterlogin()
	{	
		$temp=array(
			"email"=>$_SESSION['email'],
			"profilepic"=>$_SESSION['profilepic'],
			"engiid"=>$_SESSION['engiid '],
			"enginame"=>$_SESSION['enginame']

		); 


		if (!isset($_SESSION['email'])) 
			redirect("user/UserLogin/loadUserLogin");
		else 
			$this->load->view("user/master",$temp);

	}

	public function login()
	{
		$this->load->view("user/pages-login");
	}

	

	// public function DisplayCityList()
	// {
	// 	$city=$this->UM->DisplayCitylist();

	// 	/*$temp("citydata"=>$city);*/

	// 	$this->load->view();
	// }
}

?>