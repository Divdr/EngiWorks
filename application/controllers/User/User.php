<?php

class User extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->MOdel("User/UserM","um");
		
	}

	public function index()
	{
		$this->load->View("User/pages-login.php");
		
	}

	public function loadRecruterRegister(){
		$cities=$this->um->getAllCities();
		$temp=array(
			"cities"=>$cities
		);
		$this->load->View("User/pages-register-recruter.php",$temp);
	}

	public function loadEngineerRegister(){
		$cities=$this->um->getAllCities();
		$temp=array(
			"cities"=>$cities
		);
		$this->load->View("User/pages-register-engineer.php",$temp);
	}

	public function RegisterUser($userType){
		$img="default.jpg";
		$config['upload_path']   = './resources/user/images/UserProfile'; 
        $config['allowed_types'] = 'gif|jpg|png|jpeg'; 
        $config['max_size']      = 1024; 
        $config['max_width']     = 2240; 
        $config['max_height']    = 2768;
        $this->load->library('upload',$config);
        if ($this->upload->do_upload('txtProPic')) 
        {
        	$upload_data=$this->upload->data();
			$img=$upload_data['file_name'];
		}

		if($userType==1){
			$udata=array(
				"UserEmail"=>$this->input->post("txtEmail"),
				"Password"=>$this->input->post("txtRPass"),
				"Username"=>$this->input->post("txtName"),
				"ProfilePic"=>$img,
				"UType"=>$userType
			);
			$result=$this->um->register_user($udata);
			$recData=array(
				"name"=>$this->input->post("txtName"),
				"RecruterPic"=>$img,
				"RecruterEmail"=>$this->input->post("txtEmail"),
				"RecruterContact"=>$this->input->post("txtContact"),
				"RecruterAdd"=>$this->input->post("txtAdd"),
				"password"=>$this->input->post("txtRPass"),
				"CityID"=>$this->input->post("txtCity"),
				"Description"=>$this->input->post("txtDesc"),
				"CompanyName"=>$this->input->post("txtCName"),
				"UserId"=>$result
			);
			$this->um->register_recruter($recData);
		}

		if($userType==2){
			
	        
			$udata=array(
				"UserEmail"=>$this->input->post("txtEmail"),
				"Password"=>$this->input->post("txtRPass"),
				"ProfilePic"=>$img,
				"Username"=>$this->input->post("txtName"),
				"UType"=>$userType
			);
			$result=$this->um->register_user($udata);
			$engData=array(
				"name"=>$this->input->post("txtName"),
				"profilepic"=>$img,
				"email"=>$this->input->post("txtEmail"),
				"gender"=>$this->input->post("txtGen"),
				"birthdate"=>$this->input->post("txtDOB"),
				"password"=>$this->input->post("txtRPass"),
				"CityID"=>$this->input->post("txtCity"),
				"bios"=>$this->input->post("txtBio"),
				"qualification"=>$this->input->post("txtQualification"),
				"experience"=>$this->input->post("txtExperience"),
				"UserId"=>$result
			);
			$this->um->register_engineer($engData);
			$this->load->View("User/pages-login.php");
		}
		redirect("User/User");

	}

	public function doLogin(){
		$data=array(
			"UserEmail"=>$this->input->post("txtEmail"),
			"Password"=>$this->input->post("txtPass")
		);
		$checkValidUser=$this->um->checkValidUser($data);
		if(count($checkValidUser)==1){
			$_SESSION['UID']=$checkValidUser->UserID;
			$_SESSION['UName']=$checkValidUser->Username;
			$_SESSION['ProPic']=$checkValidUser->ProfilePic;
			$_SESSION['UTP']=$checkValidUser->UType;
			redirect("User/Home");
		}else{
			redirect("User/User");
		}

	}

	public function logOut(){
		session_destroy();
		redirect("User/User");
	}

	public function PostReview($toUserId,$type){
		$data=array(
			"Review"=>$this->input->post("txtReview"),
			"Rating"=>$this->input->post("txtRating"),
			"ToUserID"=>$toUserId,
			"FromUserID"=>$_SESSION['UID']
		);
		$this->um->postReview($data);
		if($type==2)
			redirect("User/Engineer/loadEngineerProfile/$toUserId");
		if($type==1)
			redirect("User/Recruter/loadRecruterProfile/$toUserId");
	}

	public function PostComplaint($receiverId,$type){
		$data=array(
			"Complain"=>$this->input->post("txtComplain"),
			"SenderID"=>$_SESSION['UID'],
			"ReceiverID"=>$receiverId
		);
		$this->um->postComplain($data);
		if($type==2)
			redirect("User/Engineer/loadEngineerProfile/$receiverId");
		if($type==1)
			redirect("User/Recruter/loadRecruterProfile/$receiverId");
	}

	public function loadUserInfo($uid){
		$type=$this->um->getUserType($uid);
		$udata=$this->um->getUserData($uid,$type->UType);
		if($type->UType==1){
			redirect("User/Recruter/loadRecruterProfile/$uid");
		}
		if($type->UType==2){
			redirect("User/Engineer/loadEngineerProfile/$uid");
		}
	}

	public function loadDashboard(){
		$this->load->view("User/dashboard.php");
	}

	public function loadUserReviews(){
		$rvData=$this->um->getAllReviews($_SESSION['UID']);
		$temp=array(
			"rvData"=>$rvData
		);
		$this->load->view("User/dashboard-reviews.php",$temp);
	}

	public function loadUserSetting(){
		$uid=$_SESSION['UID'];
		$cities=$this->um->getAllCities();
		$usrData=$this->um->getUserData($uid,$_SESSION['UTP']);
		$temp=array(
			"usrData"=>$usrData,
			"cities"=>$cities
		);
		$this->load->view("User/dashboard-settings.php",$temp);
	}

	public function changeProfilePic(){
		$img=$_SESSION['ProPic'];
		$config['upload_path']   = './resources/user/images/UserProfile'; 
        $config['allowed_types'] = 'gif|jpg|png|jpeg'; 
        $config['max_size']      = 1024; 
        $config['max_width']     = 2240; 
        $config['max_height']    = 2768;
        $this->load->library('upload',$config);
        if ($this->upload->do_upload('txtFile')) 
        {
        	$upload_data=$this->upload->data();
			$img=$upload_data['file_name'];
		}

		$this->um->changeProfilePic($img);
		$_SESSION['ProPic']=$img;
		redirect("User/User/loadUserSetting");
	}

	public function changePassword(){
		$oldpass=$this->input->post("txtOldPass");
		$newpass=$this->input->post("txtNewPass");
		$rnewpass=$this->input->post("txtRNewPass");
		$usrData=$this->um->getUserData($_SESSION['UID'],$_SESSION['UTP']);
		if($oldpass==$usrData->password){
			if($newpass==$rnewpass){
				$status=$this->um->changePassword($rnewpass);
			}
		}
		if($status){
			session_destroy();
			redirect("User/User");
		}else{
			redirect("User/User/loadUserSetting");
		}
	}

	public function updateUserInfo(){
		$type=$_SESSION['UTP'];
		$uid=$_SESSION['UID'];
		$data=null;
		$usrData=null;
		if($type==1){
			$data=array(
				"name"=>$this->input->post("txtRname"),
				"RecruterContact"=>$this->input->post("txtRcontact"),
				"RecruterAdd"=>$this->input->post("txtRadd"),
				"CityID"=>$this->input->post("txtRcity"),
				"websiteurl"=>$this->input->post("txtRweburl"),
				"Description"=>$this->input->post("txtRdesc"),
				"CompanyName"=>$this->input->post("txtRcmpname"),
				"UserId"=>$uid
			);

			$usrData=array(
				"Username"=>$this->input->post("txtRname")
			);

			$_SESSION['UName']=$this->input->post("txtRname");

		}else{
			$data=array(
				"name"=>$this->input->post("txtEname"),
				"birthdate"=>$this->input->post("txtEdob"),
				"CityID"=>$this->input->post("txtEcity"),
				"bios"=>$this->input->post("txtEbio"),
				"qualification"=>$this->input->post("txtEqualification"),
				"experience"=>$this->input->post("txtEexperience"),
				"UserId"=>$uid
			);

			$usrData=array(
				"Username"=>$this->input->post("txtEname")
			);
		}
		$this->um->updateUser($data,$usrData);
		redirect("User/User/loadDashboard");
	}

}

?>