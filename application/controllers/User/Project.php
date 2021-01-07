<?php

class Project extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->Model("User/ProjectM","pm");
		if(!isset($_SESSION['UID'])){
			redirect("User/User");
		}
	}

	public function index()
	{
		$prjs=$this->pm->getAllProjects();
		$temp=array(
			"prjs"=>$prjs
		);
		$this->load->View("User/project-list.php",$temp);
		
	}

	public function loadPostProject(){
		$cat=$this->pm->getAllCategories();
		$temp=array(
			"cat"=>$cat
		);
		$this->load->View("User/dashboard-post-a-project.php",$temp);
	}

	public function loadProjectInfo($pid){
		$prj=$this->pm->getProjectInfo($pid);
		$pbid=$this->pm->getProjectBids($pid);
		$temp=array(
			"prj"=>$prj,
			"pbid"=>$pbid
		);
		$this->load->View('User/project-info.php',$temp);
	}

	public function getSubCatByID($catId){
		$scat=$this->pm->getSubCatByID($catId);
			foreach ($scat as $key) 
			{
		?>
			<option value="<?= $key->SubCatID ?>"><?= $key->SubCatName ?></option>
		<?php
			}
	}

	public function postProject(){
		$config['upload_path']   = './resources/user/pdf'; 
        $config['allowed_types'] = 'pdf'; 
        $config['max_size']      = 9024; 
        $config['max_width']     = 9240; 
        $config['max_height']    = 9768;
        $this->load->library('upload',$config);
        if ($this->upload->do_upload('txtFile')) 
        {
        	$upload_data=$this->upload->data();
			$data=array(
				"Title"=>$this->input->post("txtTitle"),
				"Duration"=>$this->input->post("txtDuration"),
				"StartingDate"=>$this->input->post("txtSDate"),
				"EndingDate"=>$this->input->post("txtEDate"),
				"UserID"=>$_SESSION['UID'],
				"Description"=>$this->input->post("txtDesc"),
				"SubCategoryID"=>$this->input->post("txtSubCat"),
				"Rate"=>$this->input->post("txtRate"),
				"NoOfHoursPerDay"=>$this->input->post("txtHPDay"),
				"Document"=>$upload_data['file_name'],
				"URL"=>$this->input->post("txtURL")
			);
			$this->pm->postProject($data);
			redirect("User/Project/getPostedProjects");
		}
		
	}

	public function getPostedProjects(){
		$proj=$this->pm->getAllPostedProjects();
		$temp=array(
			"proj"=>$proj
		);
		$this->load->view("User/dashboard-manage-projects.php",$temp);
	}

	public function removePostedProject($pid){
		$this->pm->removePostedProject($pid);
		$this->load->view("User/dashboard-manage-projects.php",$temp);
	}

	public function postBid($pid){
		$data=array(
			"ProjectID"=>$pid,
			"BidAmount"=>$this->input->post("txtBidRate"),
			"UserID"=>$_SESSION['UID'],
			"Description"=>$this->input->post("txtDesc")
		);

		$this->pm->postBid($data);
		redirect("User/Project/loadProjectInfo/$pid");
	}

	public function loadManageBidder($prjId){
		$pbid=$this->pm->getProjectBids($prjId);
		$temp=array(
			"pbid"=>$pbid
		);
		$this->load->View("User/dashboard-manage-candidates.php",$temp);
	}

	public function assignProject($prjId,$usrId){
		$data=array(
			"ProjectID"=>$prjId,
			"UserID"=>$usrId,
			"Description"=>$this->input->post("txtDesc"),
			"Duration"=>$this->input->post("txtDuration")
		);
		$this->pm->assignProject($data);
		$this->pm->blockBidOfProject($prjId);
		$this->pm->blockProject($prjId);
		redirect("User/Project/getPostedProjects");
	}

	public function getPostedBids($uid){
		$bids=$this->pm->getPostedBids($uid);
		$temp=array(
			"bids"=>$bids
		);
		$this->load->view("User/dashboard-manage-bids.php",$temp);
	}

	public function removeBid($pbId){
		$b=$this->pm->removeBid($pbId);
		$uid=$_SESSION['UID'];
		redirect("User/Project/getPostedBids/$uid");
	}




}


?>