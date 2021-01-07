<?php

class Home extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		if(!isset($_SESSION['UID'])){
			redirect("User/User");
		}
		// $this->load->MOdel("User/HomeM","um");
	}

	public function index()
	{
		$this->load->View("User/index.php");
		
	}
}


?>