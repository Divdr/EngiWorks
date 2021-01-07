<?php
 class redirect extends CI_Controller
 {

 		
		public function default()
		{
			$this->load->view("admin/displaydata");
		}

		public function crm()
		{
			$this->load->view("admin/dashboard-crm");
		}

		public function analytics()
		{
			$this->load->view("admin/dashboard-analytics");
		}

		public function alert()
		{
			$this->load->view("admin/alert");	
		}

		public function breadcrumb()
		{
			$this->load->view("admin/breadcrumb");	
		}

		public function button()
		{
			$this->load->view("admin/button");	
		}

		public function boxshadow()
		{
			$this->load->view("admin/box-shadow");	
		}

		public function accordion()
		{
			$this->load->view("admin/accordion");	
		}

		public function genericclass()
		{
			$this->load->view("admin/generic-class");	
		}

		public function tabs()
		{
			$this->load->view("admin/tabs");	
		}

		public function color()
		{
			$this->load->view("admin/color");	
		}

		public function lablebadge()
		{
			$this->load->view("admin/label-badge");	
		}

		public function progressbar()
		{
			$this->load->view("admin/progress-bar");	
		}	

		public function list()
		{
			$this->load->view("admin/list");	
		}

		public function tooltip()
		{
			$this->load->view("admin/tooltip");	
		}

		public function typography()
		{
			$this->load->view("admin/typography");	
		}

		public function other()
		{
			$this->load->view("admin/other");	
		}

		public function iconfontawesome()
		{
			$this->load->view("admin/icon-font-awesome");
		}

		public function logout()
		{
			$this->load->view("admin/auth-sign-in-social");
		}

		public function displaydata()
		{
			$this->load->view("admin/displaydata");
		}
 }