<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class FindEngineers extends CI_Controller
{

	public function index()
	{
		$this->load->view("user/freelancers-grid-layout");
	}

}

?>